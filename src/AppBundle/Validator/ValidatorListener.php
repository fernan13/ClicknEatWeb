<?php

    namespace AppBundle\Validator;
    
    use Doctrine\ORM\Event\LifecycleEventArgs;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    
    //Clases utilizadas
    use AppBundle\Entity\Comentario as Comentario;
    use AppBundle\Entity\Publicacion as Publicacion;
    use AppBundle\Entity\Domicilio as Domicilio;
    use AppBundle\Entity\Reserva as Reserva;
    use AppBundle\Entity\Conversacion as Conversacion;
    use AppBundle\Entity\Mensaje as Mensaje;
    use AppBundle\Entity\PerfilUsuario as PerfilUsuario;
    use AppBundle\Entity\RelChefGourmet as RelChefGourmet;
    use AppBundle\Entity\ConversacionMetadata as ConversacionMetadata;
    use AppBundle\Entity\ComentarioMetadata as ComentarioMetadata;
    use AppBundle\AppConstantes;
    
    use Symfony\Component\HttpFoundation\File\UploadedFile;
    
    class ValidatorListener {
        
        private $container;
        private $entityManager;
        private $entity;
        private $typeEvent;
        
        /*
            Le pasamos la referencia del objeto para que las modificaciones
            realizadas en esta clase persistan en la BBDD
        */
        public function __construct($container, $entityManager, &$entity, $typeEvent) {
            
            $this->container        = $container;
            $this->entityManager    = $entityManager;
            $this->entity           = $entity;
            $this->typeEvent        = $typeEvent;
        }
        
        public function validateUsuario() {
            
            if ( $this->typeEvent != 'remove' ) {
                
                //Comprobamos si tiene tokens y le asignamos la referencia al usuario
                
                $tokens = $this->entity->getTokens();
                
                if ( !is_null($tokens) && $tokens instanceof ArrayCollection ) {
                        
                    foreach ( $tokens as $token ) {
                        
                        $token->setUsuario($this->entity);
                    }
                }
                
                
                //Si insertamos el usuario y su cuenta no esta validada mandamos el correo de activacion
                //El logueo con las redes sociales por defecto los usuarios estan habilitados
                
                $isEnabled              = $this->entity->isEnabled();
                $haveTokenConfirmation  = !is_null($this->entity->getConfirmationToken());
                $social_user            = $this->entity->getFacebookId() || $this->entity->getGoogleId();
                
                
                if ( $this->typeEvent === 'insert' && !$isEnabled && !$haveTokenConfirmation ) {
                    
                    
                    //Codificamos la contraseña
                    
                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($this->entity, $this->entity->getPassword());
                    
                    $this->entity->setPassword($encoded);
                    
                    
                    $userManager = $this->container->get('fos_user.user_manager');
                    
                    //Si existe un usuario con un correo existente no se envia el correo y se genera una excepcion
                    $user = $userManager->findUserByUsernameOrEmail($this->entity->getEmail());
                   
                    if ( !$user ) {
                
                        $mailer         = $this->container->get('fos_user.mailer');
                        $tokenGenerator = $this->container->get('fos_user.util.token_generator');
                        
                        $this->entity->setConfirmationToken($tokenGenerator->generateToken());
                        $mailer->sendConfirmationEmailMessage($this->entity);
                    }
                    
                    
                }
                else if($this->typeEvent === 'insert' && $social_user ) {
                    
                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($this->entity, $this->entity->getPassword());
                    
                    $this->entity->setPassword($encoded);
                }
                
                //Asignamos la referencia del usuario al perfil
                
                if ( $this->entity->getPerfil() &&  $this->entity->getPerfil() instanceof PerfilUsuario ) {
                        
                    $this->entity->getPerfil()->setUsuario($this->entity);
                        
                }
                    
                
            }
            
        }
        
        public function validatePerfilUsuario() {
            
            switch ( $this->typeEvent ) {
                
                case 'remove': {
                   
                    $image = $this->entity->getImagen();
                    
                    if ( !is_null($image) ) {
                        
                        $manager->remove("PerfilUsuario", $image);
                    }
                    
                    break;
                }
                
                default: {
                    
                    $image      = $this->entity->getImagen();
                    $manager    = $this->container->get('app.file_manager');
                    
                    if ( !is_null($image) && $image ) {
                        
                        $class  = 'PerfilUsuario';
                        
                        if ( $this->typeEvent === 'insert' ) {
                            
                            /*
                                Obtenemos el id que tendrá nuestro objeto para
                                asignarselo a su imagen si tiene
                            */
                            $repo = $this->entityManager->getRepository("AppBundle:$class");
                            $id   = $repo->getNextId($class);
                        }
                        else {
                            
                            $id   = $this->entity->getId(); 
                        }
                        
                        /*if ( $this->typeEvent === 'update' ) {
                            
                            $pattern = "$id"."_$class.*";
                            $manager->removeRegex($class, $pattern);
                        }*/
                        
                        $fileImage = $this->uploadFile($image, $class, $id);
                        $this->entity->setImagen($fileImage);
                    }
                    
                    //Debemos de actualizar la informacion del usuario en los lugares que aparezca
                    $user = $this->entity->getUsuario();
                    $this->updateMetadataUser($user);
                    
                    break;
                }
            }
            
        }
        
        public function validateToken() {
            
            if ( $this->typeEvent === 'insert' ) {
                
                //Debemos de asignarle la referencia a cada usuario del token actual
                $usuarios = $this->entity->getUsuarios();
                
                foreach ( $usuarios as $usuario ) {
                    
                    $usuario->addToken($this->entity);
                }
                
            }   
            
        }
        
        
        public function validateComentario() {
            
            if ( $this->typeEvent != 'remove' ) {
                
                //Comprobamos que los usuarios tengan relacion entre ellos
                $usuarioDa      = $this->entity->getUsuarioDa();
                $usuarioRecibe  = $this->entity->getUsuarioRecibe();
                    
                $repo           = $this->entityManager->getRepository('AppBundle:RelChefGourmet');
                $rel            = $repo->areUsersRelated($usuarioDa, $usuarioRecibe);
                
                if (!$rel ) {
                        
                    throw new \Exception('No puedes valorar a un usuario que no has conocido');
                }
                
                //Comprobamos que la valoracion no supere los 5 puntos
                if ( $this->entity->getPuntuacion() < 0 || $this->entity->getPuntuacion() > 5 ) {
                    
                    throw new \Exception('La puntuacion debe de encontrarse entre 0 y 5 puntos');    
                }
                    
                //Comprobamos que el usuario no intente valorarse a si mismo
                $usuarioDa      = $this->entity->getUsuarioDa();
                $usuarioRecibe  = $this->entity->getUsuarioRecibe();
                    
                if ( $usuarioDa->getId() === $usuarioRecibe->getId() ) {
                        
                    throw new \Exception('Un Usuario no puede valorarse a si mismo');
                }
                
                //Generamos los metadatos del comentario
                $perfil   = $this->entity->getUsuarioDa();
                
                $metadata = new ComentarioMetadata();
                $metadata->setTitulo($perfil->getNombre());
                $metadata->setImagen($perfil->getImagen());
                $metadata->setComentario($this->entity);
                
                $this->entity->setMetadata($metadata);
                
            }
            
        }
        
        public function validateDomicilio() {
            
            $utils      = $this->container->get('app.utils');
            $manager    = $this->container->get('app.file_manager');
            
            if ( $this->typeEvent != 'remove' ) {
                
                $direccion = $this->entity->getDireccion();
                $info      = $utils->getLocationAddress($direccion);
                     
                //Comprobamos que la direccion exista 
                if ( is_null($info) ) {
                        
                    throw new \Exception("Direccion no encontrada");
                }
                
                //Obtenemos los datos y los almacenamos en el objeto
               
                foreach( $info as $key => $value ) {
                    
                    if ( $key === 'ubicacion' ) {
                        
                        $value->setDomicilio($this->entity);
                    }
                    
                    $setter = 'set'.ucfirst($key);
                    $this->entity->$setter($value);
                    
                }    
                
                /*
                    Comprobacion de las imagenes del domicilio
                */
                $class  = 'Domicilio';
                $images = $this->entity->getImagenes();
                
                if ( $this->typeEvent === 'insert' ) {
                    
                    $repo   = $this->entityManager->getRepository("AppBundle:$class");
                    $id     = $repo->getNextId($class);    
                }
                else {
                    
                    $id     = $this->entity->getId();
                    
                    //Eliminamos las imagenes para asegurarnos que siempre tenemos las correctas
                    $manager->removeRegex($class);
                }
                
                for ( $i = 0; $i < count($images); $i++ ) {
                    
                    $image = $images[$i];
                    
                    if ( !is_null($image) && $image ) {
                        
                        $images[$i] = $this->uploadFile($image, $class, $id.'_'.$i);
                    }
                    
                }
                
                $this->entity->setImagenes($images);
            }
            else {
                
                $manager->removeRegex($class);
            }
            
        }
        
        public function validatePublicacion() {
            
            if ( $this->typeEvent != 'remove' ) {
                
                /*
                    Si se introduce domicilio en la insercion o actualizacion
                    comprobamos que el domicilio pertenezca al usuario 
                    de la publicacion
                */
                $domicilio        = $this->entity->getDomicilio();
                $usuario          = $this->entity->getUsuario();    
                
                if ( is_null($usuario) ) {
                    
                    throw new \Exception('Usuario no encontrado con el identificador dado');
                }
                else {
                    $perfil       = $usuario->getPerfil();
                    
                    if ( is_null($perfil) ) {
                        
                        throw new \Exception("El usuario dado no tiene perfil asociado a su cuenta");
                    }
                }
                
                $domiciliosPerfil = $perfil->getDomicilios();
                $existe           = false;
                
                foreach ( $domiciliosPerfil as $domicilioPerfil ) {
                    $existe = $domicilioPerfil->getId() === $domicilio->getId();
                    if ( $existe ) { break; }
                }
                        
                if (!$existe) throw new \Exception('Domicilio no encontrado en el perfil de usuario');
                
                /*
                    Dependiendo de si es edicion o actualizacion tenemos que 
                    controlar el numero de plazas disponibles
                */
                switch ( $this->typeEvent ) {
                    
                    case 'insert': {
                        
                        /*
                            Controlamos que inicialmente existan tantas 
                            plazas disponibles como totales existan
                        */
                        
                        $this->entity->setPlazasDisponibles($this->entity->getPlazasTotales());
                        $isInsert = true;
                        
                        break;
                    }
                    
                    case 'update': {
                        
                        /*
                            Tenemos que conocer cuantas plazas tenia y si ahora
                            tiene menos tenemos que controlar que el minimo sea
                            el numero de plazas reservadas!
                        */
                        $dbPub          = $this->entityManager->find('AppBundle:Publicacion', $this->entity->getId());
                        $plazasTotales  = $this->entity->getPlazasTotales();
                        $reservas       = $dbPub->getReservas();
                        
                        if ( $reservas ) {
                            
                            $numReservas    = $reservas->count();
                        
                            if ( $plazasTotales && $plazasTotales <= $numReservas ) {
                                
                                $this->entity->setPlazasTotales($numReservas);
                                $this->entity->setPlazasDisponibles(0);
                                $this->entity->setCompleto(true);
                            }
                            else { 
                            
                                $this->entity->setPlazasDisponibles($plazasTotales - $numReservas);
                                $this->entity->setCompleto(false);
                            }
                            
                            break;
                        }
                        
                    }
                }
                
                
                /*
                    Comprobamos la imagen de la publicacion
                */
                $image  = $this->entity->getFoto();
                $utils  = $this->container->get('app.utils');
                
                if ( !is_null($image) && $image ) {
                        
                    $class  = 'Publicacion';
                    
                    if ( $isInsert) {
                        
                        /*
                            Obtenemos el id que tendrá nuestro objeto para
                            asignarselo a su imagen si tiene
                        */
                        $repo = $this->entityManager->getRepository('AppBundle:Publicacion');
                        $id   = $repo->getNextId('Publicacion');
                    }
                    else {
                    
                        $id   = $this->entity->getId();    
                    }
                    
                    $fileImage = $this->uploadFile($image, $class, $id);
                    $this->entity->setFoto($fileImage);
                }
                
            }
            else {
                
                //Comprobamos si tiene imagen y si tiene la eliminamos
                $image = $this->entity->getFoto();
                    
                if ( !is_null($image) ) {
                    
                    $manager = $this->container->get('app.file_manager'); 
                    $manager->remove("Publicacion", $image);
                }
                    
                
            }
            
        }
        
        public function validateReserva() {
            
            /* 
                Para realizar una reserva debemos de actualizar los datos 
                de la publicacion a la que hace referencia
            */
                    
            $publicacion = $this->entity->getPublicacion();
            
            if ( !is_null($publicacion) ) {
                
                switch ( $this->typeEvent ) {
                    
                    case 'remove': {
                        
                        $plazasDisponibles = $publicacion->getPlazasDisponibles() + 1;
                        $publicacion->setPlazasDisponibles($plazasDisponibles);
                        $publicacion->setCompleto($plazasDisponibles === 0);
                        
                        break;
                    }
                    
                    case 'insert': {
                       
                        if ( $publicacion->getCompleto() ) {
                                
                            throw new \Exception("La publicacion se encuentra completa");
                        }
                        else {
                            
                            if ($this->entity->getUsuario() === $publicacion->getUsuario()) {
                            
                                throw new \Exception("Un usuario no puede reservar plaza en su publicacion");
                            }
                            
                            $plazasDisponibles = $publicacion->getPlazasDisponibles() - 1; 
                            $publicacion->setPlazasDisponibles($plazasDisponibles);
                            $publicacion->setCompleto($plazasDisponibles === 0);
                            
                            //Debemos de relacionar ambos usuarios para que puedan valorarlo
                            $repo       = $this->entityManager->getRepository('AppBundle:RelChefGourmet');
                            $chef       = $publicacion->getUsuario()->getPerfil();
                            $gourmet    = $this->entity->getUsuario()->getPerfil();
                            
                            if ( !$repo->areUsersRelated($chef, $gourmet) ) {
                                
                                $rel  = new RelChefGourmet();
                                $rel->setChef($chef);
                                $rel->setGourmet($gourmet);
                                
                                $this->entityManager->persist($rel);
                            }
                        }
                        
                        break;
                    }
                
                    
                }     
                
            }
            
            
            
        }
        
        public function validateConversacion() {
            
            if ( $this->typeEvent != 'remove' ) {
                
                //Comprobamos si la conversacion posee mensajes y los agregamos a la conversacion ( Si insertamos)
                if ( $this->typeEvent === 'insert' ) {
                    
                    $mensajes  = $this->entity->getMensajes();
                    $metadatas = $this->entity->getMetadatas();  
                    
                    //Debemos de crear los metadatos de ambos usuarios
                    if ( !is_null($metadatas) && $metadatas instanceof ArrayCollection ) {
                        
                        foreach ( $metadatas as $metadata ) {
                            
                            $metadata->setConversacion($this->entity);
                        }
                    }
                    else {
                    
                        $metadatas = new ArrayCollection();
                        
                        //Generamos ambos metadatas
                        $metadataInicia = new ConversacionMetadata();
                        $metadataRecibe = new ConversacionMetadata();
                        
                        $metadataInicia->setUsuario($this->entity->getUsuarioInicia());
                        $metadataInicia->setConversacion($this->entity);
                        $metadataRecibe->setUsuario($this->entity->getUsuarioRecibe());
                        $metadataRecibe->setConversacion($this->entity);
                        
                        $metadatas->add($metadataInicia);
                        $metadatas->add($metadataRecibe);

                        $this->entity->setMetadatas($metadatas);
                    }
                    
                    //Inicializamos la referencia a la clase de conversacion
                    if ( !is_null($mensajes) && $mensajes instanceof ArrayCollection ) {
                        
                        foreach ( $mensajes as $mensaje ) {
                            
                            $mensaje->setConversacion($this->entity);
                        }
                        
                    }
                    
                }
                
                //Comprobamos el caso en el que el usuario pudiese hablar consigo mismo
                $usuarioInicia = $this->entity->getUsuarioInicia();
                $usuarioRecibe = $this->entity->getUsuarioRecibe();
                    
                if ( $usuarioInicia->getId() === $usuarioRecibe->getId() ) {
                        
                    throw new \Exception("El usuario que inicia no puede ser el mismo que el que recibe");
                }
                
            }
            
        }
        
        public function validateMensaje() {
            
            if ( $this->typeEvent != 'remove' ) {
                
                //Comprobamos que el usuario que envia forma parte de la conversacion
                $conv     = $this->entity->getConversacion();
            
                if ( $conv ) {
                    
                    /*$usuario1 = $conv->getUsuarioInicia()->getId();
                    $usuario2 = $conv->getUsuarioRecibe()->getId();
                    $usuarioM = $this->entity->getUsuarioEnvia()->getId();
                    
                    $existe   = $usuarioM === $usuario1 || $usuarioM === $usuario2;  */ 
                    
                    
                    //Cargamos el usuario que tendremos en cuenta en los metadatos de la conversacion
                    $usuarioIniciaC = $conv->getUsuarioInicia();
                    $usuarioRecibeC = $conv->getUsuarioRecibe();
                    
                    $usuarioEnviaM  = $this->entity->getUsuarioEnvia();
                    $usuarioRecibeM = $usuarioEnviaM->getId() === $usuarioIniciaC->getId() ? $usuarioRecibeC : $usuarioIniciaC;
                    $existe         = $usuarioEnviaM->getId() === $usuarioIniciaC->getId() || $usuarioEnviaM->getId() === $usuarioRecibeC->getId();
                    
                    if ( !$existe ) {
                            
                        throw new \Exception("El usuario $usuarioM no se encuentra en la conversacion");
                    }
                    
                    
                    //Cargamos los metadatos
                    $metadatos  = $conv->getMetadatas();
                    $assets = AppConstantes::getAssetsURL('PerfilUsuario'); 
                    
                    foreach( $metadatos as $metadata ) {
                        
                        //Cargamos los usuarios de los metadatos para saber como debemos de actualizar cada metadato
                        if ( $metadata->getUsuario()->getId() === $usuarioEnviaM->getId() ) {
                            
                            $imagen  = $usuarioRecibeM->getPerfil()->getImagen();
                            $imagen  = $imagen ? $assets."/$imagen" : "";
                            $metadata->setTitulo($usuarioRecibeM->getPerfil()->getNombre());
                            $metadata->setFoto($imagen);
                            $metadata->setTextoUltimoMensaje($this->entity->getTextoMensaje());
                            $metadata->setFechaEnvio($this->entity->getFechaEnvio());
                            $metadata->setMensajesNoLeidos(0);
                            
                            
                        }
                        else {
                            
                            $imagen  = $usuarioEnviaM->getPerfil()->getImagen();
                            $imagen  = $imagen ? $assets."/$imagen" : "";
                            $metadata->setTitulo($usuarioEnviaM->getPerfil()->getNombre());
                            $metadata->setFoto($imagen);
                            $metadata->setTextoUltimoMensaje($this->entity->getTextoMensaje());
                            $metadata->setFechaEnvio($this->entity->getFechaEnvio());
                            $metadata->setMensajesNoLeidos($metadata->getMensajesNoLeidos() + 1);
                            
                            
                        }
                    }
                    
                }
            }
        }
        
        private function uploadFile($image, $class, $id) {
           
            $manager = $this->container->get('app.file_manager');
            
            //Comprobamos si la imagen proviene de Android o no
            $patternimg     = '/\.(jpe?g|png|gif|bmp)$/';
            $patternserver  = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i';
            
            //Si proviene de android es un string codificado en base64 no una URL
            if ( !preg_match( $patternimg, $image ) && !preg_match($patternserver, $image)) {
                
                /*
                    Con esto nos aseguramos y quitamos el comienzo del
                    base64 de la imagen : data:image/jpeg;base64,
                */
                if ( strpos( $image, ',') !== FALSE ) {
                    
                    $image = explode(',', $image)[1];
                }
                
                //Si tenemos una imagen codificada correctamente a base64
                /*if ( base64_encode(base64_decode($image, true)) === $image) {
                
                    //Obtenemos los bytes representativos de la imagen
                    $decoded    = base64_decode($image);
                    
                    //Creamos un archivo temporal donde almacenaremos la imagen
                    $file       = tmpfile();
                    
                    //Obtenemos la ruta del archivo temporal y volcamos los datos
                    $path       = stream_get_meta_data($file)['uri'];
                    file_put_contents($path, $decoded);
                    
                    /*
                        Generamos el objeto de symfony que nos permite a 
                        traves de nuestro servicio almacenarlo en la BBDD
                    */
                    /*$uploadedFile = new UploadedFile($path, $path, null, null, null, true);
                    
                }*/
                
                //Obtenemos los bytes representativos de la imagen
                $decoded    = base64_decode($image);
                    
                //Creamos un archivo temporal donde almacenaremos la imagen
                $file       = tmpfile();
                    
                //Obtenemos la ruta del archivo temporal y volcamos los datos
                $path       = stream_get_meta_data($file)['uri'];
                file_put_contents($path, $decoded);
                    
                /*
                    Generamos el objeto de symfony que nos permite a 
                    traves de nuestro servicio almacenarlo en la BBDD
                */
                $uploadedFile = new UploadedFile($path, $path, null, null, null, true);
            }
            else {

                //Este paso se realiza para que al actualizar no se pierda la referencia al fichero
                if ( !$image instanceof UploadedFile) {

                    $dir    = $manager->getTargetDir($class);
                    
                    //Para evitar problemas debemos de quitar la parte de la URL de nuestro server
                    $url    = AppConstantes::getAssetsURL($class)."/";
                    $imageA = str_replace( $url, "", $image);
                    $path   = $dir."/$imageA";
                    
                    if ( preg_match($patternserver, $imageA) ) {
                        
                        //Obtenemos los bytes representativos de la imagen
                        $image   = base64_encode(file_get_contents($image));
                        $decoded = base64_decode($image);
                        
                        //Creamos un archivo temporal donde almacenaremos la imagen
                        $file       = tmpfile();
                        
                        //Obtenemos la ruta del archivo temporal y volcamos los datos
                        $path       = stream_get_meta_data($file)['uri'];
                        file_put_contents($path, $decoded);
                        
                        /*
                            Generamos el objeto de symfony que nos permite a 
                            traves de nuestro servicio almacenarlo en la BBDD
                        */
                        $uploadedFile = new UploadedFile($path, $path, null, null, null, true);
                    }
                    else {
                        
                        $uploadedFile = new UploadedFile($path, $path, null, null, null, true);
                    }
                    
                }
                else {
                    
                    //En este caso entrariamos si venimos de un formulario de nuestra pagina web
                    $uploadedFile = $image;
                }
            }
            
            return $manager->upload($uploadedFile, $class, $id);
            
        }
        
        private function updateMetadataUser($user) {
            
            //Debemos de actualizar los metadatos de los comentarios y de las valoraciones
            $valoraciones = $user->getPerfil()->getComentariosDados();
            
            foreach ( $valoraciones as $valoracion ) {
                
                $metadata = $valoracion->getMetadata();
                $metadata->setTitulo($user->getPerfil()->getNombre());
                $metadata->setImagen($user->getPerfil()->getImagen());
            }
            
            //Actualizamos todas las conversaciones
            $conversacionesIniciadas = $user->getConversacionesIniciadas();
            $conversacionesRecibidas = $user->getConversacionesRecibidas();
            $conversaciones          = new ArrayCollection(
                                                array_merge(
                                                    $conversacionesIniciadas->toArray(), 
                                                    $conversacionesRecibidas->toArray()
                                                    )
                                                );
            
            foreach ( $conversaciones as $conversacion ) {
                
                $metadatasC = $conversacion->getMetadatas();
                
                foreach ( $metadatasC as $metadataC ) {
                    
                    if ( $metadataC->getUsuario()->getId() != $user->getId() ) {
                        
                        $metadataC->setTitulo($user->getPerfil()->getNombre());
                        $metadataC->setFoto($user->getPerfil()->getImagen());
                    }
                }
            }                                    
        }
        
    }
<?php

    namespace AppBundle\Service;
    
    use Doctrine\ORM\Event\LifecycleEventArgs;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    
    use AppBundle\Entity\Reserva;
    use AppBundle\Entity\ConversacionMetadata;
    
    class FirebaseManager {
        
        private $firebase_key;
        private $firebase_url;
        
        public function __construct( $firebase_url, $firebase_key ) {
            
            $this->firebase_url = $firebase_url;
            $this->firebase_key = $firebase_key;
        }
        
        public function postPersist(LifecycleEventArgs $args) {
            
            $this->sendCloudMessage($args);
        }
        
        public function preRemove(LifecycleEventArgs $args) {
            
            //Solo queremos notificaciones al eliminar cuando se elimina una reserva
            if ( $args->getEntity() instanceof Reserva ) {
                
                $this->sendCloudMessage($args, 'remove');
                
            }
        }
        
        private function sendCloudMessage(LifecycleEventArgs $args, $event = 'insert') {
            
            $entity         = $args->getEntity();
            $entityManager  = $args->getEntityManager();
            $class_messages = array('Comentario', 'Reserva', 'Mensaje');
            $class          = explode('\\', get_class($entity))[2];
            
            if ( in_array($class, $class_messages) ) {
                
                //Generamos el mensaje a enviar
                switch ( $class ) {
                    
                    case 'Comentario': {
                        
                        $usuario = $entity->getUsuarioRecibe()->getUsuario();
                        
                        $name       = $entity->getUsuarioDa()->getNombre();
                        $littleText = "$name te ha valorado. Descubre que piensa de ti!";
                        $bigText    = $entity->getValoracion();
                        
                        $id         = $entity->getId();
                        
                        break;
                    }
                    
                    case 'Reserva': {
                        
                        $usuario = $entity->getPublicacion()->getUsuario();
                        $name    = $entity->getUsuario()->getPerfil()->getNombre();
                        
                        $action     = $event === 'remove' ? ' ha eliminado su reserva' : ' ha reservado plaza. Conocelo!';
                        
                        
                        $title      = $event === 'remove' ? "Perdiste un gourmet" : "Tienes un nuevo gourmet";
                        $littleText = $name.$action;
                        
                        $plazas     = $entity->getPublicacion()->getPlazasDisponibles();
                        $bigText    = "Quedan $plazas disponibles en tu publicacion";
                        
                        $id      = $event === 'remove' ? -1 : $entity->getId();
                
                        break;
                    }
                    
                    case 'Mensaje': {
                        
                        $usuarioEnvia = $entity->getUsuarioEnvia();
                        $conversacion = $entity->getConversacion();
                        
                        $usuario1     = $conversacion->getUsuarioInicia();
                        $usuario2     = $conversacion->getUsuarioRecibe();
                        
                        $usuario      = $usuarioEnvia->getId() == $usuario1->getId() ? $usuario2 : $usuario1;
                        
                        //Obtenemos los mensajes sin leer de ese usuario
                        $repo                   = $entityManager->getRepository('AppBundle:Usuario');
                        $convData               = $repo->getNumberOfConversationNoRead($usuario);
                        
                        $conversacionesSinLeer  = $convData['conversaciones'];
                        $mensajesSinLeer        = $convData['mensajes'];
                        
                        if ( $conversacionesSinLeer == 1 ) {
                            
                            $title      = $usuarioEnvia->getPerfil()->getNombre();
                            $littleText = $mensajesSinLeer;
                            
                            if ( $mensajesSinLeer > 1 ) {
                                
                                $littleText .= " mensajes";
                            }
                            else {
                                
                                $littleText .= " mensaje";
                            }
                            
                            $bigText = $entity->getTextoMensaje();
                        }
                        else {
                            
                            $title       = "ClickanEat";
                            $littleText  = "$mensajesSinLeer mensajes de $conversacionesSinLeer chats";
                            $bigText     = "Varias personas parecen que tienen hambre. ¡Sacialas!";
                        }
                        
                        //Generamos los datos enviados por el FCM
                        //En data cargamos toda la conversacion completa para cargar el intent en Android sin tener que hacer peticion
                        $class       = "Conversacion-Mensaje";
                        $data        = array("mensaje" => $entity->toArray());
                        $metadatas   = $conversacion->getMetadatas();
                        
                        foreach ( $metadatas as $metadata ) {
                            
                            if ( $metadata->getUsuario()->getId() === $usuario->getId() ) {
                                
                                $data["conversacion"] = $metadata->toArray();
                            }
                        }
                           
                        
                        break;
                        
                    }
                }
                
                $tokObj  = $usuario->getTokens();
                $tokens  = array();
                
                foreach ( $tokObj as $tkn ) {
                    
                    $valor    = $tkn->getValor();
                    $tokens[] = $valor ? $valor : '';
                    
                }
                
                //Eliminamos los posibles elementos vacios
                $tokens = array_filter($tokens);
                
                if ( !empty($tokens) ) {
                    
                    $headers = array(
                        'Authorization:key=' . $this->firebase_key,
                        'Content-Type: application/json'
                    );
                    
                    $fields = array (
                        //No pasamos el campo de notificacion debido a que en 
                        //segundo plano no se ejecutaria el metodo onMessageReceived
                        /*'notification' => array (
                            'body' => $message
                        ),*/
                        'data' => array (
                            'idUsuario'     => $usuario->getId(), 
                            'title'         => $title,
                            'littleText'    => $littleText,
                            'bigText'       => $bigText,
                            'type'          => $class,
                            'id'            => $id,
                            'data'          => $data ? $data : ' '
                        ),
                        //'to' => $token
                        'registration_ids' => $tokens
                    );
                    
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $this->firebase_url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                    
                    $result = curl_exec($ch);
                    curl_close($ch);
                    
                    //Fallo en la conexion
                    if ($result === false) {
                        
                        throw new \Exception('No se pudo establecer conexion con el servidor de Firebase');
                    } 
                    else {
                        
                        //Comprobamos si el mensaje se envio correctamente
                        $objeto = json_decode($result);
                        
                        if ( $objeto->success === 0 && $objeto->failure === 1 ) {
                            
                            //throw new \Exception('Error en el envio del mensaje');
                        }
                        
                    }
                }
                
                
            }
            
        }
        
    }

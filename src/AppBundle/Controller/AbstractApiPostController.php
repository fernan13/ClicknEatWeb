<?php

    namespace AppBundle\Controller;

    //Espacio de nombres que se encarga del routing
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    
    //Respuestas HTTP Json
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\JsonResponse;
    
    //Clase Controller de Symfony
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    
    use Doctrine\ORM\ORMException as ORMException;
    use Doctrine\DBAL\DBALException as DoctrineException;
        
    use FOS\RestBundle\Controller\Annotations as Rest;
    use FOS\RestBundle\Controller\FOSRestController;
    use FOS\RestBundle\View\View;
    
    class AbstractApiPostController extends FOSRestController {
        
        /*
            Parametros JSON obligatorios para POST:
            
            Nota: Los array se pasarían con el formato [1,2,3,4...]
                Usuario: 
                
                    La contraseña se codifica en el servidor con el algoritmo definido
                    en el archivo de configuracion config.yml
                    
                    URL: http://clickandeat-fernan13.c9users.io/api/usuario
                    JSON: {"username": "probando", "email": "probando@gmail.com", "password": "probando"}
                    
                PerfilUsuario: 
                    URL: http://clickandeat-fernan13.c9users.io/api/perfil-usuario
                    JSON: {"nombre": "probando muchas cosas", "usuario": 14}
                
                Domicilio:
                    
                    Si la api de google maps no devuelve ninguna informacion acerca
                    del domicilio no se considerará valido
                    
                    URL: http://clickandeat-fernan13.c9users.io/api/domicilio
                    JSON: {"direccion": "...", perfil": 1}
                
                El domicilio seleccionado debe de pertenecer a dicho usuario si no no inserta
                Publicacion:
                    URL: http://clickandeat-fernan13.c9users.io/api/publicacion
                    JSON: {"horaInicio": "15:14:00", "horaFin": "16:15:15", "fecha": "17-02-1994", 
                            "usuario": 13, "domicilio": 1, "precio": 5.01, "titulo": "Arroz"}
                
                Reserva:
                    URL: http://clickandeat-fernan13.c9users.io/api/reserva
                    JSON: {"publicacion": 1, "usuario": 2}
                
                Token:
                    URL: http://clickandeat-fernan13.c9users.io/api/token
                    JSON: {"valor": "iwoeirjo2i34h2340sfdsdf8sfd9s87", "usuario": 2}
                
                Comentario:
                    Usuario que comenta no puede ser igual que el comentado
                    Puntuacion entre 0 y 5
                    
                    URL: http://clickandeat-fernan13.c9users.io/api/comentario
                    JSON: { "usuarioDa": 1, "usuarioRecibe": 2, "valoracion": "Cocinas fatal",
                            "puntuacion": 0, "fechaComentario": "15-05-2017 15:00:04"}
                
                Conversacion:
                    Un usuario no puede hablar consigo mismo
                    
                    URL: http://clickandeat-fernan13.c9users.io/api/conversacion
                    JSON: {"usuarioInicia": 1, "usuarioRecibe": 2}
                
                Mensaje:
                    El usuario que envia debe de estar en la conversacion que se manda
                    
                    URL: http://clickandeat-fernan13.c9users.io/api/mensaje
                    JSON: { "usuarioEnvia": 1, "conversacion": 3, 
                            "textoMensaje": "Hola como estas",
                            "fechaEnvio": "15-08-1996 15:02:14" }
                
                
        */
        
        /**
         * @Rest\Post("api/{className}", name="post_all_request")
         */ 
        public function insertObject( Request $request, $className ) {
             
            try {
                $utils       = $this->get('app.utils');
                
                //Capitalizamos el nombre de la clase para que pueda ser reconocida
                $className   = $utils->toClassName($className);
                
                //Parametros obtenidos del global $_POST
                $params      = $request->request->all();
                
                //Valores de las anotaciones de nuestras clases
                $annotations = $utils->getObjectMappingVars($className);
                
                //Objeto que almacena la respuesta enviada al cliente
                $json        = array();
                
                //Si no se recibe informacion no se comprueba nada
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $class      = "AppBundle\Entity\\$className";
                $object     = new $class();
                
                /*
                    Buscamos en primer lugar las referencias que pueden existir
                    a la hora de almacenar el objeto
                */
                $params = $utils->prepareParams($annotations, $params);
               
                //Generamos el objeto a partir del array y lo insertamos
                $object->fromArray($params);
                
                $em->persist($object);
                $em->flush();
                
                $json['error']  = 0;
                $json['data']   = $object->getId();
                
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $json['error']  = 1;
                    $json['data']   = $this->getParameter('error_db')/*$e->getMessage()*/;
                
                }
                else {
                    
                    $json['error']  = 2;
                    $json['data']   = $e->getMessage();
                }
            }
            
            
            $response = new JsonResponse();
            $response->setData($json);
            
            return $response;
            
        }
        
    }
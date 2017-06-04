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

    class AbstractApiDeleteController extends FOSRestController {
        
        /*
            Ruta para eliminar varios elementos:
                https://clickandeat-fernan13.c9users.io/api/usuario
                JSON->{"ids":[1,2,3]}
                
                Este ejemplo eliminaria (si existen) los usuarios
                con los identificadores 1,2 y 3
        */
        /**
         * @Rest\Delete("api/{className}")
         */ 
        public function deleteObjects( Request $request, $className ) {
            
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
                    
                //Si no se recibe informacion no se comprueba nada o si el id es incorrecto
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                
                $ids = $params['ids'];
                if ( is_null($ids) ) throw new \Exception("No se encuentra el campo ids en el JSON");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                
                foreach ( $ids as $id ) {
                    
                    //Nos aseguramos que tenemos un numero entero como identificador
                    $id = is_numeric($id) ? intval($id) : $id;
                    
                    if ( is_integer($id) ) {
                        
                        $object = $em->find("AppBundle:$className", $id);
                        
                        if ( !is_null($object) ) $em->remove($object);
                    }
                    
                }
                
                $em->flush();
                
                $json['error']  = 0;
                $json['data']   = $this->getParameter('no_error');
                    
            }     
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $json['error']  = 1;
                    $json['data']   = $this->getParameter('error_db');
                
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
        
        /*
            Ruta para eliminar un elemento:
                https://clickandeat-fernan13.c9users.io/api/usuario/2
                
                Este ejemplo eliminaria el usuario con el identificador 2
        */
        /**
         * @Rest\Delete("api/{className}/{id}", name="delete_request")
         */ 
        public function deleteObject( $className, $id ) {
             
            try {
            
                $utils       = $this->get('app.utils');
                
                //Capitalizamos el nombre de la clase para que pueda ser reconocida
                $className   = $utils->toClassName($className);
                
                //Valores de las anotaciones de nuestras clases
                $annotations = $utils->getObjectMappingVars($className);
                
                //Objeto que almacena la respuesta enviada al cliente
                $json        = array();
                
                //Nos aseguramos que tenemos un numero entero como identificador
                $id          = is_numeric($id) ? intval($id) : $id;
                
                //Si no se recibe informacion no se comprueba nada o si el id es incorrecto
                if ( !is_integer($id) ) throw new \Exception("Identificador incorrecto: $id");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $object     = $em->find("AppBundle:$className", $id);
                
                //Si no se encuentra el objeto no se actualiza
                if ( is_null($object) ) throw new \Exception("El objeto de la clase $className con el id $id no existe");
                
                /*
                    Si se encuentra lo eliminamos
                */
                $em->remove($object);
                $em->flush();
                
                $json['error']  = 0;
                $json['data']   = $this->getParameter('no_error');
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $json['error']  = 1;
                    $json['data']   = $this->getParameter('error_db');
                
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
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

    use AppBundle\Entity\Usuario;
    
    class AbstractApiGetController extends FOSRestController {
        
        /**
         * @Rest\Get("api/{className}", name="api_get_all_request")
         */ 
        public function seeAllObjects( Request $request, $className ) {
             
            try {
                
                $utils  = $this->get('app.utils');
                $json   = array();
                
                //Capitalizamos el nombre de la clase para que pueda ser reconocida
                $className   = $utils->toClassName($className);
                
                //Parametros obtenidos del global $_GET
                $params      = $request->query->all();
                
                //Valores de las anotaciones de nuestras clases
                $annotations = $utils->getObjectMappingVars($className);
                
                //Comenzamos con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $repo       = $em->getRepository("AppBundle:$className");
                $elements   = !empty($params) ? 
                              $repo->findAllByRequestParams($className, $annotations, $params) : 
                              $repo->findAll();
               
                foreach ( $elements as $element ) {
                    
                    $json[] = $element->toArray();        
                }
                
                $responseJson  = array();
                
                $responseJson['error']  = 0;
                $responseJson['data']   = $json;
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $responseJson['error']  = 1;
                    $responseJson['data']   = $this->getParameter('error_db');
                
                }
                else {
                    
                    $responseJson['error']  = 2;
                    $responseJson['data']   = $e->getMessage();
                }
            }
            
            
            $response = new JsonResponse();
            $response->setData($responseJson);
            
            return $response;
        }
        
        /**
         * @Rest\Get("api/{className}/{id}", name="api_get_request")
         */ 
        public function seeOneObject($className, $id){
            
            $className  = $this->get('app.utils')->toClassName($className);
            $id         = intval(abs($id));
            
            try {
                
                $em         = $this->getDoctrine()->getManager();
                $repo       = $em->getRepository("AppBundle:$className");
                $element    = $repo->find($id);
                
                if (!$element) {
                    
                    throw $this->createNotFoundException(
                        "Ningun elemento de la clase $className con id = $id"
                    );
                }
                else {
                    
                    $json = $element->toArray();
                }
                
                $responseJson  = array();
                
                $responseJson['error']  = 0;
                $responseJson['data']   = $json;
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $responseJson['error']  = 1;
                    $responseJson['data']   = $this->getParameter('error_db');
                
                }
                else {
                    
                    $responseJson['error']  = 2;
                    $responseJson['data']   = $e->getMessage();
                }
            }
            
            $response = new JsonResponse();
            $response->setData($responseJson);
            
            return $response;
        }
        
        /**
         * @Rest\Get("api/{className}/{id}/{valueName}", name="api_get_value_request")
         * 
         * Nombre de la clase si es compuesto tiene que estar separado por un guion
         */ 
        public function seeValueNameObject($className, $id, $valueName){
            
            $className  = $this->get('app.utils')->toClassName($className);
            $id         = intval(abs($id));
            
            try {
                
                $em         = $this->getDoctrine()->getManager();
                $repo       = $em->getRepository("AppBundle:$className");
                $element    = $repo->find($id);
                
                if (!$element) {
                    
                    throw $this->createNotFoundException(
                        "Ningun elemento de la clase $className con id = $id"
                    );
                }
                else {
                    
                    $value  = $this->get('app.utils')->getObjectValueName($element, $valueName);
                    $json   = $value;  
                    //$json[$valueName] = $value;
                }
                
                $responseJson  = array();
                
                $responseJson['error']  = 0;
                $responseJson['data']   = $json;
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $responseJson['error']  = 1;
                    $responseJson['data']   = $this->getParameter('error_db');
                
                }
                else {
                    
                    $responseJson['error']  = 2;
                    $responseJson['data']   = $e->getMessage();
                }
            }
            
            $response = new JsonResponse();
            $response->setData($responseJson);
            
            return $response;
        }
        
    }
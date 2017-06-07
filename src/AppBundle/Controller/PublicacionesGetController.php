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

    use AppBundle\Entity\Publicacion;
    
    class PublicacionesGetController extends FOSRestController {
        
        /**
         * @Rest\Post("api/publicacion/search")
         */ 
        public function seeAllPublicaciones( Request $request ) {
             
            try {
                
                //Parametros obtenidos del global $_POST
                $params      = $request->request->all();
                
                //Comprobamos el JSON
                if ( !$params || !is_array($params) ) {
                    
                    throw new \Exception('Formato JSON incorrecto');
                } 
                
                //Comprobamos los parametros del JSON
                $keys        = array('lat', 'lng', 'distance', 'metrics');
                $json_keys   = array_keys($params);
                
                $has_keys    = count(array_intersect($json_keys, $keys)) == count($json_keys);
                
                if ( !$has_keys ) {
                    
                    throw new \Exception('Parametros JSON incorrectos');
                }
                
                //Obtenemos el repositorio
                $em         = $this->getDoctrine()->getManager();
                $repo       = $em->getRepository("AppBundle:Publicacion");
                
                //Obtenemos los parametros del JSON
                $lat        = $params['lat'];
                $lng        = $params['lng'];
                $distance   = $params['distance'];
                $metrics    = array_key_exists('metrics', $params) ? $params['metrics'] : 'm';
                
                $publicaciones = $repo->getPublicacionesHarvesine($lat, $lng, $distance, $metrics);

                $responseJson  = array();
                
                $responseJson['error']  = 0;
                $responseJson['data']   = $publicaciones;
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $responseJson['error']  = 1;
                    $responseJson['data']   = /*$this->getParameter('error_db')*/$e->getMessage();
                
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
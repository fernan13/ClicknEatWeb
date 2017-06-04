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
    use Doctrine\Common\Collections\ArrayCollection; 
        
    use FOS\RestBundle\Controller\Annotations as Rest;
    use FOS\RestBundle\Controller\FOSRestController;
    use FOS\RestBundle\View\View;

    use AppBundle\Entity\Usuario;
    use AppBundle\Entity\Conversacion;
    
    class ConversacionApiGetController extends FOSRestController {
        
        //La barra la utilizo para diferenciar la routa de este controlador de la del controlador abstracto
        /**
         * @Rest\Get("api/conversacion{attributeName}/usuario/{idUsuario}/")
         */ 
        public function seeAllConversaciones( Request $request, $attributeName, $idUsuario ) {
             
            $id         = intval(abs($idUsuario));
            
            try {
                
                $em         = $this->getDoctrine()->getManager();
                $repo       = $em->getRepository("AppBundle:Usuario");
                $usuario    = $repo->find($id);
                
                if (!$usuario) {
                    
                    throw $this->createNotFoundException(
                        "Ningun elemento de la clase Usuario con id = $id"
                    );
                }
                else {
                    
                   $conversacionesIniciadas = $usuario->getConversacionesIniciadas();
                   $conversacionesRecibidas = $usuario->getConversacionesRecibidas();
                   $conversaciones          = new ArrayCollection(
                                                array_merge(
                                                    $conversacionesIniciadas->toArray(), 
                                                    $conversacionesRecibidas->toArray()
                                                    )
                                                );
                                                
                    $json   = array();
                    
                    foreach ( $conversaciones as $conversacion ) {
                        
                        $metadatas = $conversacion->getMetadatas();
                        foreach ( $metadatas as $metadata ) {
                            
                            if ( $metadata->getUsuario()->getId() === $id ) {
                                
                                $json[] = $metadata->toArray();
                                
                            }
                        }
                    }
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
         * @Rest\Get("api/conversacion/entre/{idUsuario1}/{idUsuario2}/")
         */ 
        public function seeConversacionInUsuarios( Request $request, $idUsuario1, $idUsuario2 ) {
            
             $id1         = intval(abs($idUsuario1));
             $id2         = intval(abs($idUsuario2));
            
            try {
                
                $em         = $this->getDoctrine()->getManager();
                $repoC      = $em->getRepository("AppBundle:Conversacion");
                $repoU      = $em->getRepository("AppBundle:Usuario");
                
                $usuario1   = $repoU->find($id1);
                $usuario2   = $repoU->find($id2);
                
                if ( is_null($usuario1) || is_null($usuario2) ) {
                    
                    throw new \Exception("Identificadores de usuario incorrectos");
                }
                
                $conversacion = $repoC->getConversacionUsuarios($usuario1, $usuario2);
                $conversacion = !$conversacion ? new Conversacion() : $conversacion;
                
                $responseJson  = array();
                
                $responseJson['error']  = 0;
                $responseJson['data']   = $conversacion->toArray();
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
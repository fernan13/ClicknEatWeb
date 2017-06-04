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
    use Symfony\Component\Security\Core\Exception\BadCredentialsException;
    
    use FOS\RestBundle\Controller\Annotations as Rest;
    use FOS\RestBundle\Controller\FOSRestController;
    use FOS\RestBundle\View\View;
    
    use AppBundle\Entity\Usuario as Usuario;
    
    class ResendApiController extends FOSRestController {
        
        /**
         * @Rest\Post("api/usuario/resend")
         */
        public function resendAction(Request $request) {
            
            try {
            
                $utils      = $this->get('app.utils');
                
                //Parametros obtenidos del global $_POST
                $params      = $request->request->all();
                
                //Objeto que almacena la respuesta enviada al cliente
                $json        = array();
                
                //Si no se recibe informacion no se comprueba nada o si el id es incorrecto
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                
                /*
                    Buscamos en primer lugar las referencias que pueden existir
                    a la hora de almacenar el objeto
                */
                $em     = $this->getDoctrine()->getManager();
                $user   = $em->getRepository('AppBundle:Usuario')->findOneBy(['username' => $params['username']]);
                
                if ( !$user->isEnabled() ) {
                    
                    $mailer         = $this->get('fos_user.mailer');
                    $tokenGenerator = $this->get('fos_user.util.token_generator');
                    
                    $token          = $user->getConfirmationToken();
                    $user->setConfirmationToken( is_null($token) || !$token ? $tokenGenerator->generateToken() : $token);
                    $mailer->sendConfirmationEmailMessage($user);
                    
                    //Si el usuario cambia debemos de actualizarlo
                    if ( $token != $user->getConfirmationToken() ) {
                        
                        $em->flush();
                    }
                    
                } 
                else {
                
                    throw new \Exception("Usuario habilitado, no necesita activacion");
                }
                
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
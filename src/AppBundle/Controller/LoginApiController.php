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

    class LoginApiController extends FOSRestController {
        
        /**
         * @Rest\Post("api/usuario/login")
         */ 
        public function loginUser( Request $request ) {
             
            try {
            
                //Parametros obtenidos del global $_POST
                $params      = $request->request->all();
                
                //Objeto que almacena la respuesta enviada al cliente
                $json        = array();
                
                //Si no se recibe informacion no se comprueba nada
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                
                $userName   = $params["username"];
                $password   = $params["password"];
                $user       = $em->getRepository('AppBundle:Usuario')->findOneBy(['username' => $userName]);
             
                if (!$user) {
                    throw $this->createNotFoundException('El usuario introducido no existe');
                }
                
                //Obtenemos el servicio de symfony que comprueba las contraseñas
                $isValid = $this->get('security.password_encoder')->isPasswordValid($user, $password);
             
                if (!$isValid) {
                    
                    throw new BadCredentialsException('Contraseña incorrecta');
                }
             
                //Si el usuario no se encuentra activo no puede loguearse
                if ( !$user->isEnabled() ) {
                    throw new \Exception('Usuario no activo, revise su cuenta de correo');
                }
                
                $imagen       = $user->toArray()['perfil']['imagen'];
                $imagen       = !$imagen ? '-' : $imagen;
                
                //Calculamos el numero de mensajes del usuario y el numero de publicaciones
                $repo          = $em->getRepository('AppBundle:Usuario');
                $nPublicacion  = $user->getPublicaciones()->count();
                $nConversacion = $repo->getNumberOfConversationNoRead($user)["mensajes"];
                
                $nPublicacion  = !$nPublicacion ? 0 : $nPublicacion;
                $nConversacion = !$nConversacion ? 0 : $nConversacion;
                
                $jwtEncoder   = $this->get('lexik_jwt_authentication.encoder');
                $token        = $jwtEncoder->encode(['username'             => $user->getUsername(),
                                                     'idUsuario'            => $user->getId(), 
                                                     'idPerfil'             => $user->getPerfil() ? $user->getPerfil()->getId() : 0, 
                                                     'password'             => $password,
                                                     'profile_picture'      => $imagen,
                                                     'nombre'               => $user->getPerfil()->getNombre(),
                                                     'num_publicaciones'    => $nPublicacion,
                                                     'num_conversaciones'   => $nConversacion,
                                                     'email'                => $user->getEmail()]);
        
                $json['error']  = 0;
                $json['data']   = $token;
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
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

    class RegisterUserApiController extends FOSRestController {
        
       /**
         * @Rest\Post("api/usuario/register")
         */ 
        public function registerUsuario( Request $request ) {
             
            try {
                
                $utils       = $this->get('app.utils');
                
                //Parametros obtenidos del global $_POST
                $params      = $request->request->all();
                
                //Valores de las anotaciones de nuestras clases
                $annotations = $utils->getObjectMappingVars('Usuario');
                
                //Objeto que almacena la respuesta enviada al cliente
                $json        = array();
                
                //Si no se recibe informacion no se comprueba nada
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $class      = "AppBundle\Entity\\Usuario";
                $user       = new $class();
                
                /*
                    Buscamos en primer lugar las referencias que pueden existir
                    a la hora de almacenar el objeto
                */
                $params = $utils->prepareParams($annotations, $params);
                
                //Generamos el objeto a partir del array y lo insertamos
                $user->fromArray($params);
                
                //Almacenamos su contraseña antes de ser codificada para el login desde el dispositivo
                $password = $user->getPassword();
                
                //Almacenamos el usuario
                $em->persist($user);
                $em->flush();
                
                $json['error']  = 0;
                
                $imagen       = $user->getPerfil()->getImagen();
                $imagen       = !$imagen ? '-' : $imagen;
                
                $jwtEncoder   = $this->get('lexik_jwt_authentication.encoder');
                $token        = $jwtEncoder->encode(['username'         => $user->getUsername(),
                                                     'idUsuario'        => $user->getId(), 
                                                     'idPerfil'         => $user->getPerfil() ? $user->getPerfil()->getId() : 0, 
                                                     'password'         => $password,
                                                     'profile_picture'  => $imagen,
                                                     'email'            => $user->getEmail()]);
                    
                $json['data'] = $token;  
                
            }
            catch ( \Exception $e ) {
                
                if ( $e instanceof ORMException || $e instanceof DoctrineException ) {
                    $json['error']  = 1;
                    $json['data']   = /*$this->getParameter('error_db')*/$e->getMessage();
                
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
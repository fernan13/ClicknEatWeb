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
    use Doctrine\ORM\PersistentCollection;
        
    use FOS\RestBundle\Controller\Annotations as Rest;
    use FOS\RestBundle\Controller\FOSRestController;
    use FOS\RestBundle\View\View;
    
    use AppBundle\Entity\Usuario;
    use AppBundle\Entity\PerfilUsuario;
    use AppBundle\Entity\Token;
    
    class AbstractApiPutController extends FOSRestController {
        
        /*
            Ruta para actualizar un elemento:
                https://clickandeat-fernan13.c9users.io/api/usuario/2
                JSON->{"campoObjetoActualizar" : "valor"...}
                
                Este ejemplo actualizaria el usuario con el identificador
                2
        */
        /**
         * @Rest\Put("api/{className}/{id}", name="put_all_request")
         */ 
        public function updateObject( Request $request, $className, $id ) {
             
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
                
                //Nos aseguramos que tenemos un numero entero como identificador
                $id          = is_numeric($id) ? intval($id) : $id;
                
                //Si no se recibe informacion no se comprueba nada o si el id es incorrecto
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                if ( !is_integer($id) ) throw new \Exception("Identificador incorrecto: $id");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $object     = $em->find("AppBundle:$className", $id);
                
                //Si no se encuentra el objeto no se actualiza
                if ( is_null($object) ) throw new \Exception("El objeto de la clase $className con el id $id no existe");
                
                /*
                    Buscamos en primer lugar las referencias que pueden existir
                    a la hora de almacenar el objeto
                */
                $params = $utils->prepareParams($annotations, $params);
                   
                //Generamos el objeto a partir del array y lo insertamos
                $object->fromArray($params);

                $em->flush();
                
                $json['error']  = 0;
                $json['data']   = $this->getParameter('no_error');
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
        
        
        /**
         * @Rest\Put("api/{className}/{id}/{variableName}")
         */ 
        public function updateAttributeObject( Request $request, $className, $id , $variableName ) {
             
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
                
                //Nos aseguramos que tenemos un numero entero como identificador
                $id          = is_numeric($id) ? intval($id) : $id;
                
                //Si no se recibe informacion no se comprueba nada o si el id es incorrecto
                if ( empty($params) ) throw new \Exception("No se ha recibido ningun JSON");
                if ( !is_integer($id) ) throw new \Exception("Identificador incorrecto: $id");
                
                //Comenzamos a trabajar con la BBDD
                $em         = $this->getDoctrine()->getManager();
                $object     = $em->find("AppBundle:$className", $id);
                
                //Si no se encuentra el objeto no se actualiza
                if ( is_null($object) ) throw new \Exception("El objeto de la clase $className con el id $id no existe");
                
                //Si no existe la variable dentro del JSON
                if ( !array_key_exists($variableName, $params) ) throw new \Exception("No se encuentra dicho parametro en el JSON dado");
                
                /*
                    Buscamos en primer lugar las referencias que pueden existir
                    a la hora de almacenar el objeto
                */
                $params = $utils->prepareParams($annotations, $params);
                $value  = $params[$variableName];
                
                if ( is_object($value) ){
                    
                    $object->fromArray($value);
                    
                }
                else {
                    
                    $setter = 'set'.$variableName;
                    $object->$setter($value);    
                }
                
                if ( $value instanceof ArrayCollection && $object instanceof Usuario ) {
                    
                    //Crearemos el mapeo a mano
                    
                    //1. Buscamos si existe el token y si no existe persistimos nuestro objeto para que se almacene
                    foreach ( $value as $token ) {
                        
                        $valor  = $token->getValor();
                        $tokens = $em->getRepository("AppBundle:Token")->findBy(array('valor' => $valor));
                        
                        if ( count($tokens) > 0 ) {
                            
                            //Eliminamos todas las referencias y las creamos de nuevo
                            
                            //Asignamos el id a nuestro token
                            $idToken    = $tokens[0]->getId();
                            
                            //Obtenemos los usuarios
                            $usuarios   = $token->getUsuarios();
                            $usuariosBD = $tokens[0]->getUsuarios();
                            
                            //Repositorio
                            $repo       = $em->getRepository('AppBundle:Token');
                            
                            foreach ( $usuarios as $usuario ) {
                                
                                $exists    = false;
                                
                                foreach ( $usuariosBD as $usuarioBD ) {
                                    
                                    if ( $usuarioBD->getId() == $usuario->getId() ) {
                                        
                                        $exists     = true;
                                        break;
                                    }
                                }
                                
                                if ( !$exists ) {
                                    
                                    $repo->insertRelationshipUsuarioToken($idToken, $usuario->getId());
                                    
                                }
                            }
                            /*$diff = array_udiff($usuarios->toArray(), $usuariosBD->toArray(),
                              function ($obj_a, $obj_b) {
                                return $obj_a->id - $obj_b->id;
                              }
                            );*/
                            
                            //Funciona correctamente
                            /*
                            $idToken  = $tokens[0]->getId();
                            $token->setId($idToken);
                            
                            $entity = $em->merge($token);
                            $em->remove($entity);
                            $em->flush();*/
                            
                            
                        }
                        else {
                            
                            $em->persist($token);
                        }
                    }
                    
                }
                
               
                $em->flush();
                
                 //Si es un objeto de la clase usuario actualizamos el token
                if ( $object instanceof Usuario || $object instanceof PerfilUsuario ) {
                    
                    $user         = $object instanceof Usuario ? $object : $object->getUsuario();
                    $jwtEncoder   = $this->get('lexik_jwt_authentication.encoder');
                    $token        = $jwtEncoder->encode(['username'     => $user->getUsername(),
                                                     'idUsuario'        => $user->getId(), 
                                                     'idPerfil'         => $user->getPerfil() ? $user->getPerfil()->getId() : 0, 
                                                     'password'         => $password,
                                                     'profile_picture'  => $imagen,
                                                     'email'            => $user->getEmail()]);
                }
                
                $json['error']  = 0;
                $json['data']   = $token ? $token : $this->getParameter('no_error');
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
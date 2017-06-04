<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Usuario as Usuario;
use AppBundle\Entity\Publicacion as Publicacion;
use AppBundle\AppConstantes;

class WebController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        
        $authorization      = $this->container->get('security.authorization_checker');
        $user_logged        = $authorization->isGranted('IS_AUTHENTICATED_FULLY');
        
        //Obtenemos la session del usuario
        $session            = $request->getSession();
        
        if ( $user_logged ) {
            
            $this->storeUserLoggedInSession($session);
            $session->set('logged', true);
        }
        else {
            
            //Si el usuario ha cerrado sesion debemos de eliminar su informacion
            if ($session->has("user")) {
                
                $session->remove("user");
                $session->logged = $user_logged;
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR
        ]);
    }
    
    
    /**
     * @Route("/profile/{user}", name="profile_user")
     */
    public function profileAction(Request $request, Usuario $user) {
        
        $session            = $request->getSession();
        
        //Comprobamos el usuario logeado
        $user_logged = $session->get('user');
    
        //Mantenemos el usuario en la session
        $this->storeUserLoggedInSession($session, $user_logged);
    
        // replace this example code with whatever you need
        return $this->render('profile/profile.html.twig', [
            'isMe'      => $user_logged->getId() === $user->getId(),
            'user_view' => $user,
            'user_me'   => $user_logged
        ]);
    }
    
    
    /**
     * @Route("/publicacion", name="add_publicacion")
     */
    public function addPublicacionAction(Request $request) {
        
        $session            = $request->getSession();
        
        //Comprobamos el usuario logeado
        $user_logged = $session->get('user');
    
        //Mantenemos el usuario en la session
        $this->storeUserLoggedInSession($session, $user_logged);
    
        //Publicacion
        $publicacion = new Publicacion();
        
        //Datos por defecto de la publicacion
        $publicacion->setUsuario($user_logged);
        $publicacion->setPlazasTotales(0);
        $publicacion->setFecha(date_create('now'));
        $publicacion->setHoraInicio(date_create('now'));
        $publicacion->setHoraFin(date_create('now'));
        $publicacion->setPrecio(0);
        
        // replace this example code with whatever you need
        return $this->render('publicacion/publicacion.html.twig', [
            'isMe'          => true,
            'user_view'     => $user_logged,
            'isInsert'      => true,
            'publicacion'   => $publicacion
        ]);
    }
    
    /**
     * @Route("/publicacion/{publicacion}", name="see_or_update_publicacion")
     */
    public function seeOrEditPublicacionAction(Request $request, Publicacion $publicacion) {
        
        $session            = $request->getSession();
        
        //Comprobamos el usuario logeado
        $user_logged = $session->get('user');
    
        //Mantenemos el usuario en la session
        $this->storeUserLoggedInSession($session, $user_logged);
    
        $isUpdate = $publicacion->getUsuario()->getId() === $user_logged->getId();
        $response = array(  
                            'isMe'          => true,
                            'user_view'     => $user_logged,
                            'publicacion'   => $publicacion
                        );
                        
        $response[$isUpdate ? 'isUpdate' : 'isView'] = true;
        
        //Si entramos en modo de ver comprobaremos que el usuario que entra tiene reserva o 
        if ( $publicacion->getCompleto() ) {
            
            $response['isCompleto'] = true;
        }
        else {
            
            if ( array_key_exists('isView', $response) ) {
            
                $response['hasReserva'] = 0;
                
                $reservas = $publicacion->getReservas();
                
                foreach ( $reservas as $reserva) {
                    
                    if ( $reserva->getUsuario()->getId() == $user_logged->getId() ) {
                        
                        $response['hasReserva'] = $reserva->getId();
                    
                        break;
                    }
                }
                
            }
        }
        
        // replace this example code with whatever you need
        return $this->render('publicacion/publicacion.html.twig', $response);
    }
    
    private function storeUserLoggedInSession($session, &$user_logged = false) {
        
        $securityContext    = $this->container->get('security.token_storage');
        $token              = $securityContext->getToken();
        $user               = $token->getUser();
            
        if ( $user_logged ) $user_logged = $user;
        
        $session->set('user', $user);
        
    }
}

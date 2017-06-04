<?php

    namespace AppBundle\Twig;
    use AppBundle\Service\Utils as Utils;
    use Symfony\Component\DependencyInjection\ContainerInterface;
    
    class ExtensionsTwig extends \Twig_Extension {
        
        /*
            Estamos utilizando la injeccion de dependencias, es decir, en esta
            extensión o filtro estamos utilizando un servicio creado por nosostros.
            Dicha dependencia se indica dentro del fichero app/config/services.yml
            y se la pasamos en el campo arguments y para indicar que es un servicio
            le ponemos el @nombre_servicio
        */
        private $container;
        
        public function __construct(ContainerInterface $container) {
        
            $this->container = $container;    
        }
        
        //Indicamos el nombre de la extension o servicio a inicializar. Se iniciliza en el archivo app\config\services.yml
        public function getName() {
            return 'app_twig_utils';
        }
        
        //Indicamos los filtros que estarán disponibles en nuestra extension.
        public function getFilters() {
            
            return array(new \Twig_SimpleFilter('toCamelCase', array($this, 'toCamelCase')));
        }
        
        //Functiones
        public function getFunctions() {
            
            return array(
                new \Twig_SimpleFunction('getBreadcrumbs', array($this, 'getBreadcrumbs')),
                new \Twig_SimpleFunction('getTokenUser', array($this, 'getTokenUser')),
                new \Twig_SimpleFunction('getDateFromServer', array($this, 'getDateFromServer')),
                // add more like this if you want new \Twig_SimpleFunction('is_mobile', array($this, 'is_mobile')),
            );
        }
        
        //Metodos utilizados en cada uno de los filtros
        public function getBreadcrumbs() {
            
            $utils = $this->container->get('app.utils');
            return $utils->getBreadcrumbs();
        }
        
        public function getTokenUser($user) {
            
            $jwtEncoder   = $this->container->get('lexik_jwt_authentication.encoder');
            $token        = $jwtEncoder->encode(['username'         => $user->getUsername(),
                                                 'idUsuario'        => $user->getId(), 
                                                 'idPerfil'         => $user->getPerfil() ? $user->getPerfil()->getId() : 0, 
                                                 'password'         => $user->getPassword(),
                                                 'profile_picture'  => $user->getPerfil()->getImagen(),
                                                 'email'            => $user->getEmail()]);
                                                     
            return $token;
        }
        
        public function toCamelCase($string) {
            
            $utils = $this->container->get('app.utils');
            return $utils->toClassName($string);
        }
        
        public function getDateFromServer() {
            
            return date_create(gmdate(\DATE_ISO8601, time()))->format('Y-m-d H:i:s');
        }
    }
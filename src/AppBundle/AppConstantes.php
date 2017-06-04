<?php

    namespace AppBundle;
    
    use Symfony\Component\HttpFoundation\Request;
    
    class AppConstantes {
        
        
        public static function getAssetsURL($className) {
            
            $request = Request::createFromGlobals();
            $scheme  = $request->getScheme();
            $host    = $request->getHttpHost();
            $path    = $request->getBasePath();
            $assets  = '/uploads/'.$className;
            
            $baseurl = $scheme.'://'.$host.$path.$assets;
            
            return $baseurl;
        }    
    }
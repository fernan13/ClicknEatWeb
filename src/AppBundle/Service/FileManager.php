<?php

    namespace AppBundle\Service;
    
    use Symfony\Component\Finder\Finder;
    use Symfony\Component\HttpFoundation\File\UploadedFile;
    
    class FileManager {
        
        private $dirs;
    
        public function __construct($domicilioDir, $perfilDir, $publicacionDir) {
            
            $this->dirs['Domicilio']     = $domicilioDir;
            $this->dirs['PerfilUsuario'] = $perfilDir;
            $this->dirs['Publicacion']   = $publicacionDir;
            
        }
    
        public function upload(UploadedFile $file, $class, $id) {
            
            $fileName = $id.'_'.$class.'.'.$file->guessExtension();
    
            $file->move($this->dirs[$class], $fileName);
    
            return $fileName;
        }
    
        public function remove($class, $name) {
            
            try {
                
                unlink($this->dirs[$class]."/$name");
            }
            catch( \Exception $e ){}
        }
    
        public function removeRegex($class, $pattern = "") {
            
            $regex  = $pattern ? $pattern : "*_*_$class.*";
            $finder = new Finder();
            
            $files  = $finder->in($this->dirs[$class])->files()->name($regex);
            
            foreach ( $files as $file ) {
                
                unlink($file->getRealPath());
            }
        }
    
        public function getTargetDir($class) {
            
            return $this->dirs[$class];
        }
    }
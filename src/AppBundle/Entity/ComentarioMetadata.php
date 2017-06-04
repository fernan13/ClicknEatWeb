<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use AppBundle\Entity\PerfilUsuario;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    use AppBundle\AppConstantes;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity
     * @ORM\Table(name="valoracion_metadata")
     */
    class ComentarioMetadata {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\OneToOne(targetEntity="AppBundle\Entity\Comentario", inversedBy="metadata")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Comentario", collection= false, relationship={"export":false, "columnName": "comentario_id"})
         */
        private $comentario;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=false)
         * @Mapping(type="String")
         */
        private $titulo;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=false)
         * @Mapping(type="String")
         */
        private $imagen;
        
        public function __construct() {}
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setComentario($comentario) {
            
            $this->comentario = $comentario;
        }
        
        public function getComentario() {
            
            return $this->comentario;
        }
        
        public function setTitulo($titulo) {
            
            $this->titulo = $titulo;
        }
        
        public function getTitulo() {
            
            return $this->titulo;
        }
        
        public function setImagen($imagen) {
            
            $this->imagen = $imagen;
        }
        
        public function getImagen() {
            
            return $this->imagen;
        }
        
       
        public function toArray(){
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                if ( is_object($value) ) {
                        
                    if ( strpos( get_class($value), 'Comentario') !== FALSE ) {
                            
                        $info = $value->getId();
                    }  
                    
                }  
                else {
                        
                    if ( strpos($key, 'imagen') !== FALSE) {
                    
                        $assets = AppConstantes::getAssetsURL('PerfilUsuario'); 
                        $value  = $value ? $assets."/$value" : "";
                    }
                    
                    $info = $value;
                    
                }
                    
                $json[$key] = $info;
                
                
            }
            
            return $json;
        }
        
        /*
            Metodo que recibe un array proveniente de una peticion realizada
            por POST o PUT y que nos permite poblar dicho objeto con las propiedades
            mencionadas en el array
        */
        public function fromArray($array) {
            
            foreach ( $array as $key => $value ) {
            
                $this->$key = $value;    
            }
            
            //return $this;
        }
        
    }
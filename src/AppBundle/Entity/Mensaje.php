<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\MensajeRepository")
     * @ORM\Table(name="mensajes", options={"collate"="utf8mb4_bin", "charset"="utf8mb4"})
     */
    class Mensaje {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="mensajes")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_envia_id"})
         */ 
        private $usuarioEnvia;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Conversacion", inversedBy="mensajes")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Conversacion", collection= false, relationship={"export":false, "columnName": "conversacion_id"})
         */ 
        private $conversacion;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=false)
         * @Mapping(type="String")
         */ 
        private $textoMensaje;
        
        /**
         * @ORM\Column(type="datetime")
         * @Mapping(type="DateTime")
         */ 
        private $fechaEnvio;
        
        public function __construct() {
            
            $fechaEnvio  = new \DateTime();
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function getUsuarioEnvia() {
            
            return $this->usuarioEnvia;
        }
        
        public function setUsuarioEnvia($usuarioEnvia) {
            
            $this->usuarioEnvia = $usuarioEnvia;
        }
        
        public function setConversacion($conversacion){
            
            $this->conversacion = $conversacion;
        }
        
        public function getConversacion() {
            
            return $this->conversacion;
        }
        
        public function setTextoMensaje($textoMensaje) {
            
            $this->textoMensaje = $textoMensaje;
        }
        
        public function getTextoMensaje() {
            
            return $this->textoMensaje;
        }
        
        public function setFechaEnvio($fechaEnvio) {
            
            $this->fechaEnvio = $fechaEnvio;
        }
        
        public function getFechaEnvio() {
            
            return $this->fechaEnvio;
        }
        
        public function toArray(){
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                if ( is_object($value) ) {
                        
                    if ( $value instanceof PersistentCollection ) {
                    
                        ${'json_'.$key} = array();
                            
                        foreach( $value as $element ) {
                                
                            ${'json_'.$key}[] = $element->toArray();
                        }
                        
                        $info = ${'json_'.$key}; 
                    }
                    else if ( strpos( get_class($value), 'Usuario' ) !== FALSE || strpos( get_class($value), 'Conversacion') !== FALSE ) {
                        
                        $info = $value->getId();
                    } 
                    else if ( $value instanceof \DateTime ) {
                        
                        $info = $value->format('d-m-Y H:i:s');
                    }
                    else {
                        
                        $info = $value->toArray();
                    }
                }
                else {
                        
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
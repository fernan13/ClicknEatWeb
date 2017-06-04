<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\ConversacionMetadataRepository")
     * @ORM\Table(name="conversacion_metadata", options={"collate"="utf8mb4_bin", "charset"="utf8mb4"})
     */
    class ConversacionMetadata {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         * @Mapping(type="String")
         */ 
        private $titulo;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         * @Mapping(type="String")
         */ 
        private $textoUltimoMensaje;
        
        /**
         * @ORM\Column(type="integer", nullable=true)
         * @Mapping(type="Integer")
         */ 
        private $mensajesNoLeidos;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         * @Mapping(type="String")
         */ 
        private $foto;
        
        /**
         * @ORM\Column(type="datetime", nullable=true)
         * @Mapping(type="DateTime")
         */ 
        private $fechaEnvio;
        
         /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Conversacion", inversedBy="metadatas")         
         * @Mapping(type="Conversacion", collection= false, relationship={"export":false, "columnName": "conversacion_id"})
         */
        private $conversacion;
        
         /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="metadatas")         
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_id"})
         */
        private $usuario;
        
        public function __construct() {
        
        }
        
        public function setId($id) {
            
            $this->id = $id;
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setTitulo($titulo) {
            
            $this->titulo = $titulo;
        }
        
        public function getTitulo() {
            
            return $this->titulo;
        }
        
        public function setTextoUltimoMensaje($textoUltimoMensaje) {
            
            $this->textoUltimoMensaje = $textoUltimoMensaje;
        }
        
        public function getTextoUltimoMensaje() {
            
            return $this->textoUltimoMensaje;
        }
        
        public function setFoto($foto) {
            
            $this->foto = $foto;
        }
        
        public function getFoto() {
            
            return $this->foto;
        }
        
        public function setFechaEnvio($fechaEnvio) {
            
            $this->fechaEnvio = $fechaEnvio;
        }
        
        public function getFechaEnvio() {
            
            return $this->fechaEnvio;
        }
        
        public function setMensajesNoLeidos($mensajesNoLeidos) {
            
            $this->mensajesNoLeidos = $mensajesNoLeidos;
        }
        
        public function getMensajesNoLeidos() {
            
            return $this->mensajesNoLeidos;
        }
        
        public function setConversacion($conversacion) {
            
            $this->conversacion = $conversacion;
        }
        
        public function getConversacion() {
            
            return $this->conversacion;
        }
        
        public function setUsuario($usuario) {
            
            $this->usuario = $usuario;
        }
        
        public function getUsuario() {
            
            return $this->usuario;
        }
        
        public function toArray() {
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                if ( is_object($value) ) {
                        
                    if ( strpos( get_class($value), 'Usuario' ) !== FALSE || strpos( get_class($value), 'Conversacion' ) !== FALSE ) {
                        
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
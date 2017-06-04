<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\ConversacionRepository")
     * @ORM\Table(name="conversacion", uniqueConstraints={@ORM\UniqueConstraint(name="con_usu", columns={"usuario_inicia_id", "usuario_recibe_id"})})
     */
    class Conversacion {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Mensaje", mappedBy="conversacion", cascade={"all"})
         * @Mapping(type="Mensaje", collection= true, relationship={"export":true, "columnName": "conversacion_id"})
         */ 
        private $mensajes;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="conversacionesIniciadas")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_inicia_id"})
         */ 
        private $usuarioInicia;
        
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="conversacionesRecibidas")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_recibe_id"})
         */ 
        private $usuarioRecibe;
        
         /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\ConversacionMetadata", mappedBy="conversacion", cascade={"all"})         
         * @Mapping(type="ConversacionMetadata", collection= true, relationship={"export":true, "columnName": "conversacion_id"})
         * @ORM\OrderBy({"fechaEnvio" = "DESC"})
         */
        private $metadatas;
        
        public function __construct() {
            
            $mensajes   = new ArrayCollection();
            $metadatas  = new ArrayCollection();
        }
        
        public function setId($id) {
            
            $this->id = $id;
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function getUsuarioInicia() {
            
            return $this->usuarioInicia;
        }
        
        public function setUsuarioInicia($usuarioInicia) {
        
            $this->usuarioInicia = $usuarioInicia;    
        }
        
        public function getUsuarioRecibe() {
            
            return $this->usuarioRecibe;
        }
        
        public function setUsuarioRecibe($usuarioRecibe){
            
            $this->usuarioRecibe = $usuarioRecibe;
        }
        
        public function addMensaje($mensaje) {
            
            $this->mensajes->add($mensaje);
        }
        
        public function setMensajes($mensajes) {
            
            $this->mensajes = $mensajes;
        }
        
        public function getMensajes() {
            
            return $this->mensajes;
        }
        
        public function setMetadatas($metadatas) {
            
            $this->metadatas = $metadatas;
        }
        
        public function getMetadatas() {
            
            return $this->metadatas;
        }
        
        public function toArray() {
            
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
                    else if ( strpos( get_class($value), 'Usuario' ) !== FALSE ) {
                        
                        $info = $value->getId();
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
            
                if ( $this->$key instanceof PersistentCollection ) {
                    
                    $value = new ArrayCollection(
                        array_unique(array_merge($this->$key->toArray(), $value->toArray()), \SORT_REGULAR)
                    );
                    
                }
                
                $this->$key = $value;    
            }
            
            //return $this;
        }
        
        
    }
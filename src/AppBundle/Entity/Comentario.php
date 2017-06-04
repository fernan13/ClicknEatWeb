<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use AppBundle\Entity\PerfilUsuario;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\ComentarioRepository")
     * @ORM\Table(name="valoracion")
     */
    class Comentario {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario", inversedBy="comentariosDados")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="PerfilUsuario", collection= false, relationship={"export":false, "columnName": "usuario_da_id"})
         */
        private $usuarioDa;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario", inversedBy="comentariosRecibidos")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="PerfilUsuario", collection= false, relationship={"export":false, "columnName": "usuario_recibe_id"})
         */
        private $usuarioRecibe;
        
        /**
         * @Assert\NotBlank()
         * @ORM\Column(type="string", length=255, nullable=false)
         * @Mapping(type="String")
         */
        private $valoracion;
    
        /**
         * @Assert\NotBlank()
         * @ORM\Column(type="float", nullable=false)
         * @Mapping(type="Float")
         */
        private $puntuacion;
        
        /**
         * @ORM\Column(type="datetime")
         * @Mapping(type="DateTime")
         */ 
        private $fechaComentario;
        
        /**
         * @ORM\OneToOne(targetEntity="AppBundle\Entity\ComentarioMetadata", mappedBy="comentario", cascade={"persist"})
         * @Mapping(type="ComentarioMetadata", collection= false, relationship={"export":true, "columnName": "comentario_id"})
         */ 
        private $metadata;
        
        public function __construct() {}
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setUsuarioDa($usuarioDa) {
            
            $this->usuarioDa = $usuarioDa;
        }
        
        public function getUsuarioDa() {
            
            return $this->usuarioDa;
        }
        
        public function setUsuarioRecibe($usuarioRecibe) {
            
            $this->usuarioRecibe = $usuarioRecibe;
        }
        
        public function getUsuarioRecibe() {
            
            return $this->usuarioRecibe;
        }
        
        public function setValoracion($valoracion) {
            
            $this->valoracion = $valoracion;
        }
        
        public function getValoracion() {
            
            return $this->valoracion;
        }
        
        public function setPuntuacion($puntuacion) {
            
            $this->puntuacion = $puntuacion;
        }
        
        public function getPuntuacion() {
            
            return $this->puntuacion;
        }
        
        public function setFechaComentario($fechaComentario) {
            
            $this->fechaComentario = $fechaComentario;
        }
        
        public function getFechaComentario() {
            
            return $this->fechaComentario;
        }
        
        public function actualizarFechaComentario() {
            
            $this->date = new \DateTime();
        }
        
        public function setMetadata($metadata) {
            
            $this->metadata = $metadata;
        }
        
        public function getMetadata() {
            
            return $this->metadata;
        }
        
        public function toArray(){
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                if ( $value instanceof PersistentCollection ) {
                    
                    ${'json_'.$key} = array();
                        
                    foreach( $value as $element ) {
                        
                        ${'json_'.$key}[] = $element->toArray();
                    }
                        
                    $info = ${'json_'.$key}; 
                }
                else {
                    
                    if ( is_object($value) ) {
                        
                        if ( strpos( get_class($value), 'PerfilUsuario') !== FALSE ) {
                            
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
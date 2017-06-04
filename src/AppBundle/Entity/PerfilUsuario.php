<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Entity\Usuario;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    use AppBundle\AppConstantes;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\PerfilUsuarioRepository")
     * @ORM\Table(name="perfil")
     */
    class PerfilUsuario {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @Assert\NotBlank()
         * @ORM\Column(type="string", length=255)
         * @Mapping(type="String")
         */
        private $nombre;
        
        /**
         * @Assert\NotBlank()
         * @ORM\Column(type="string", length=255)
         * @Mapping(type="String")
         */
        private $descripcion;
        
        /**
         * @Assert\NotBlank()
         * @ORM\Column(type="string", length=255)
         * @Mapping(type="String")
         */
        private $gustos;
        
        /**
         *  @ORM\OneToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="perfil")
         *  @ORM\JoinColumn(nullable=false, onDelete="cascade")
         *  @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_id"})
         */ 
        private $usuario;
        
        /**
         *  @ORM\OneToMany(targetEntity="AppBundle\Entity\Domicilio", mappedBy="perfil")
         *  @Mapping(type="Domicilio", collection = true, relationship={"export":true, "columnName": "perfil_id"})
         */ 
        private $domicilios;
        
        /**
         *  @ORM\Column(type="string", nullable=true)
         *  @Assert\Image(mimeTypes="string")
         *  @Mapping(type="Image")
         */
        private $imagen;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comentario", mappedBy="usuarioRecibe")
         * @Mapping(type="Comentario", collection= true, relationship={"export":true, "columnName": "usuario_recibe_id"})
         * @ORM\OrderBy({"puntuacion" = "DESC"})
         */ 
        private $comentariosRecibidos;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comentario", mappedBy="usuarioDa")
         * @Mapping(type="Comentario", collection= true, relationship={"export":true, "columnName": "usuario_da_id"})
         * @ORM\OrderBy({"puntuacion" = "DESC"})
         */ 
        private $comentariosDados;
        
        public function __construct() {
            
            $this->domicilios           = new ArrayCollection();
            $this->comentariosDados     = new ArrayCollection();
            $this->comentariosRecibidos = new ArrayCollection();
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function getNombre() {
            
            return $this->nombre;
        }
        
        public function setNombre($nombre) {
            
            $this->nombre = $nombre;
        }
        
        public function setDescripcion($descripcion) {
            
            $this->descripcion = $descripcion;
        }
        
        public function getDescripcion() {
            
            return $this->descripcion;
        }
        
        public function setGustos($gustos) {
            
            $this->gustos = $gustos;
        }
        
        public function getGustos() {
            
            return $this->gustos;
        }
        
        public function addDomicilio($domicilio) {
            
            $this->domicilios->add($domicilio);
        }
        
        public function setDomicilios($domicilios) {
            
            $this->domicilios = $domicilios;
        }
        
        public function getDomicilios() {
            
            return $this->domicilios;
        }
        
        public function setImagen($imagen){
            
            $this->imagen = $imagen;
        }
        
        public function getImagen() {
            
            return $this->imagen;
        }
        
        public function addComentarioDado($comentarioDado) {
            
            $this->comentariosDados->add($comentarioDado);
        }
        
        public function setComentariosDados($comentariosDados) {
            
            $this->comentariosDados = $comentariosDados;
        }
        
        public function getComentariosDados() {
            
            return $this->comentariosDados;
        }
        
        
        public function addComentarioRecibido($comentarioRecibido) {
            
            $this->comentariosRecibidos->add($comentarioRecibido);
        }
        
        public function setComentariosRecibidos($comentariosRecibidos) {
            
            $this->comentariosRecibidos = $comentariosRecibidos;
        }
        
        public function getComentariosRecibidos() {
            
            return $this->comentariosRecibidos;
        }
        
        public function getValoracionMedia() {
            
            if (!$numberComments) return 0;
            
            $numberComments = $this->comentariosRecibidos->count();
            $valoraciones   = 0;
            
            foreach( $this->comentariosRecibidos as $comment ) {
                
                $valoraciones += $comment->puntuacion;
            }
            
            return $valoraciones/$numberComments;
        }
        
        public function getUsuario() {
            
            return $this->usuario;
        }
        
        public function setUsuario($usuario){
            
            $this->usuario = $usuario;
        }
        
        /**
         * Metodo generico que recorre todos los atributos de la clase
         * y los introduce en un array
         */ 
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
                    else if ( strpos( get_class($value), 'Usuario' ) !== FALSE ) {
                            
                        $info = $value->getId();
                    }
                    else {
                            
                        $info = $value->toArray();
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
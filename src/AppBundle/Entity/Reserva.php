<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
    use Doctrine\Common\Collections\ArrayCollection; 
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservaRepository")
     * @ORM\Table(name="reserva", uniqueConstraints={@ORM\UniqueConstraint(name="pub_usu", columns={"publicacion_id", "usuario_id"})})
     */
    class Reserva {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Publicacion", inversedBy="reservas")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Publicacion", collection= false, relationship={"export":false, "columnName": "publicacion_id"})
         */ 
        private $publicacion;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="reservas")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_id"})
         */ 
        private $usuario;
        
        public function __construct() {
            
        }
        public function getId() {
            
            return $this->id;
        }
        
        public function getUsuario() {
            
            return $this->usuario;
        }
        
        public function setUsuario($usuario) {
            
            $this->usuario = $usuario;
        }
        
        public function setPublicacion($publicacion) {
            
            $this->publicacion = $publicacion;
        }
        
        public function getPublicacion() {
            
            return $this->publicacion;
        }
        
        public function toArray(){
            
            return array(
                            "id"            => $this->id, 
                            "usuario"       => $this->usuario->getId(), 
                            "publicacion"   => $this->publicacion->getId());
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
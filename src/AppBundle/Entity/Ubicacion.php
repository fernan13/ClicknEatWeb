<?php

    namespace AppBundle\Entity;
    
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    use AppBundle\AppConstantes;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity
     * @ORM\Table(name="ubicacion_domicilio")
     */
    class Ubicacion {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\Column(type="float")
         * @Mapping(type="Float")
         */
        private $lat;
        
        /**
         *  @ORM\Column(type="float")
         *  @Mapping(type="Float")
         */ 
        private $lng;
        
        /**
         * @ORM\OneToOne(targetEntity="AppBundle\Entity\Domicilio", inversedBy="ubicacion")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Domicilio", collection= false, relationship={"export":false, "columnName": "domicilio_id"})
         */  
        private $domicilio;
        
        public function __construct() {
            
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setLat($lat) {
            
            $this->lat = $lat;
        }
        
        public function getLat() {
            
            return $this->lat;
        }
        
        
        public function setLng($lng) {
            
            $this->lng = $lng;
        }
        
        public function getLng() {
            
            return $this->lng;
        }
        
        public function setDomicilio($domicilio) {
            
            $this->domicilio = $domicilio;
        }
        
        public function getDomicilio() {
            
            return $this->domicilio;
        }
        
        
        public function toArray(){
            
            return array("id" => $this->id, "lat" => $this->lat, "lng" => $this->lng, "domicilio" => $this->domicilio->getId());
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
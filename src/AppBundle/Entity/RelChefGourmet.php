<?php

    namespace AppBundle\Entity;
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\RelChefGourmetRepository")
     * @ORM\Table(name="rel_chef_gourmet", uniqueConstraints={@ORM\UniqueConstraint(name="chef_gourmet", columns={"chef", "gourmet"})})
     */
    class RelChefGourmet {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario")
         * @ORM\JoinColumn(name="chef", nullable=false, onDelete="cascade") 
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "chef"})
         */
        private $chef;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario")
         * @ORM\JoinColumn(name="gourmet", nullable=false, onDelete="cascade") 
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "gourmet"})
         * 
         */
        private $gourmet;
        
        public function __construct() {}
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setChef($chef) {
            
            $this->chef = $chef;
        }
        
        public function getChef() {
            
            return $this->chef;
        }
        
        public function setGourmet($gourmet) {
            
            $this->gourmet = $gourmet;
        }
        
        public function getGourmet() {
            
            return $this->gourmet;
        }
        
        public function toArray() {
            
            return array(
                            "id" => $this->getId(), 
                            "chef" => $this->getChef()->getId(), 
                            "gourmet" => $this->getGourmet()->getId());
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
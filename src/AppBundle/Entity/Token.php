<?php

    namespace AppBundle\Entity;
    
    use Doctrine\ORM\Mapping as ORM; 
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    
    use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\TokenRepository")
     * @ORM\Table(name="token")
     */
    class Token {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\Column(type="string", length=255, unique=true)
         * @Mapping(type="String")
         */
        private $valor;
        
        /**
         * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Usuario", inversedBy="tokens")
         * @ORM\JoinTable(name="token_users", joinColumns={@ORM\JoinColumn(name="token_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")})
         * @Mapping(type="Usuario", collection= true, relationship={"export":false, "columnName": "usuario_id"})
         */ 
        private $usuarios;
        
        public function __construct() {
            
            $this->usuarios = new ArrayCollection();
        }
        
        public function setId($id) {
            
            $this->id = $id;
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setValor($valor) {
            
            $this->valor = $valor;
        }
        
        public function getValor() {
            
            return $this->valor;
        }
        
        public function getUsuarios() {
            
            return $this->usuarios;
        }
        
        public function setUsuarios($usuarios) {
            
            $this->usuarios = $usuarios;
        }
        
        public function addUsuario($usuario) {
            
            $this->usuarios->add($usuario);
            
            $this->usuarios = new ArrayCollection(array_unique($this->usuarios->toArray(), \SORT_REGULAR));

        }
        
        public function toArray() {
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                if ( is_object($value) ) {
                        
                    if ( $value instanceof PersistentCollection ) {
                    
                        ${'json_'.$key} = array();
                            
                        foreach( $value as $element ) {
                                
                            ${'json_'.$key}[] = $element->getId();
                        }
                        
                        $info = ${'json_'.$key}; 
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
            
            //return array("id" => $this->getId(), "token" => $this->getValor(), "usuario" => $this->getUsuario()->getId());
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
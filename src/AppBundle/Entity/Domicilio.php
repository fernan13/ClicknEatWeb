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
     * @ORM\Entity(repositoryClass="AppBundle\Repository\DomicilioRepository")
     * @ORM\Table(name="domicilio")
     * @UniqueEntity("direccion")
     */
    class Domicilio {
        
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
        private $direccion;
        /*
        /**
         *  @ORM\Column(type="array")
         *  @Mapping(type="Array")
         */ 
        //private $ubicacion;
        
        /**
         * @ORM\OneToOne(targetEntity="AppBundle\Entity\Ubicacion", mappedBy="domicilio", cascade={"all"})
         * @Mapping(type="Ubicacion", collection= false, relationship={"export":true, "columnName": "domicilio_id"})
         */ 
        private $ubicacion;
        
        /**
         *  @ORM\Column(type="integer")
         *  @Mapping(type="Integer")
         */ 
        private $cp;
        
        /**
         *  @ORM\Column(type="string", length=255)
         *  @Mapping(type="String")
         */ 
        private $localidad;
        
        /**
         *  @ORM\Column(type="string", length=255)
         *  @Mapping(type="String")
         */ 
        private $pais;
        
        /**
         *  @ORM\Column(type="string", length=255)
         *  @Mapping(type="String")
         */ 
        private $barrio;
        
        /**
         *  @ORM\Column(type="array")
         *  @Assert\Image(mimeTypes="array")
         *  @Mapping(type="Array")
         */ 
        private $imagenes;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario", inversedBy="domicilios")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="PerfilUsuario", collection= false, relationship={"export":false, "columnName": "perfil_id"})
         */ 
        private $perfil;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Publicacion", mappedBy="domicilio") 
         * @Mapping(type="Publicacion", collection= true, relationship={"export":true, "columnName": "domicilio_id"})
         */ 
        private $publicaciones;
        
        public function __construct() {
            
            $this->publicaciones = new ArrayCollection();
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function getDireccion() {
            
            return $this->direccion;
        }
        
        public function setDireccion($direccion) {
            
            $this->direccion = $direccion;
        }
        
        public function getUbicacion() {
            
            return $this->ubicacion;
        }
        
        public function setUbicacion($ubicacion) {
            
            $this->ubicacion = $ubicacion;
        }
        
        public function setCp($cp) {
            
            $this->cp = $cp;
        }
        
        public function getCp() {
            
            return $this->cp;
        }
        
        public function setLocalidad($localidad) {
            
            $this->localidad = $localidad;
        }
        
        public function getLocalidad() {
            
            return $this->localidad;
        }
        
        public function setPais($pais) {
            
            $this->pais = $pais;
        }
        
        public function getPais() {
            
            return $this->pais;
        }
        
        public function setBarrio($barrio) {
            
            $this->barrio = $barrio;
        }
        
        public function getBarrio() {
            
            return $this->barrio;
        }
        
        public function getImagenes() {
            
            return $this->imagenes;
        }
        
        public function setImagenes($imagenes){
            
            $this->imagenes = $imagenes;
        }
        
        public function getPublicaciones(){
            
            return $this->publicaciones;
        }
        
        public function setPerfil($perfil) {
            
            $this->perfil = $perfil;
        }
        
        public function getPerfil() {
            
            return $this->perfil;
        }
        
        /**
         * Funcion utilizada para visualizar de forma escueta la informacion del
         * domicilio
         */ 
        public function verDomicilio() {
            
            return array(
                            "id"        => $this->id,
                            "imagenes"  => $this->imagenes,
                            "ubicacion" => $this->ubicacion,
                            "direccion" => $this->direccion,
                            "cp"        => $this->cp,
                            "pais"      => $this->pais,
                            "barrio"    => $this->barrio,
                            "localidad" => $this->localidad
                        );
        }
        
        public function toArray(){
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            $not_keys = array("__initializer__", "__cloner__", "__isInitialized__");
            
            foreach( $vars as $key=>$value ) {
                
                if ( !in_array($key, $not_keys ) ) {
                    
                    
                    if ( is_object($value) ) {
                            
                        if ( $value instanceof PersistentCollection ) {
                        
                            ${'json_'.$key} = array();
                                    
                            foreach( $value as $element ) {
                                           
                                ${'json_'.$key}[] = $element->getId();
                            }
                                    
                            $info = ${'json_'.$key}; 
                        }
                        else if ( strpos( get_class($value), 'PerfilUsuario' ) !== FALSE ) {
                                
                            $info = $value->getId();
                        }
                        else {
                                
                            $info = $value->toArray();
                        }
                            
                    }
                    else {
                        
                        if ( strpos( $key, 'imagenes') !== FALSE ) {
                            
                            $assets     = AppConstantes::getAssetsURL('Domicilio');
                            
                            if ( $value ) {
                                
                               for ( $i = 0; $i < count($value); $i++ ) {
                                
                                    $value[$i]  = $value ? $assets.'/'.$value[$i] : $assets.'/domicilio-default.jpg';
                                } 
                            }
                            else {
                                
                                $value = array($assets.'/domicilio-default.png');
                            }
                            
                        }    
                        $info = $value;
                    }  
                    
                    $json[$key] = $info;
                    
                }
                
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
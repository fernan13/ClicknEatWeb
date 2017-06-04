<?php

    namespace AppBundle\Entity;
    
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use AppBundle\Validator\Constraints as PublicacionAssert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    use AppBundle\AppConstantes;
    
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\PublicacionRepository")
     * @ORM\Table(name="publicacion")
     */
    class Publicacion {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        private $id;
        
        /**
         * @ORM\Column(type="time", nullable=false)
         * @Mapping(type="Time")
         */
        private $horaInicio;
        
        /**
         * @ORM\Column(type="time", nullable=false)
         * @Mapping(type="Time")
         */ 
        private $horaFin;
        
        /**
         * @ORM\Column(type="date")
         * @Mapping(type="Date")
         */
        private $fecha;
        
        /**
         * @ORM\Column(type="integer", nullable=true)
         * @Mapping(type="Integer")
         */ 
        private $plazasTotales;
        
        /**
         * @ORM\Column(type="integer", nullable=true)
         * @Mapping(type="Integer")
         */ 
        private $plazasDisponibles;
        
        /**
         * @ORM\Column(type="float")
         * @Mapping(type="Float")
         */ 
        private $precio;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Domicilio", inversedBy="publicaciones")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Domicilio", collection= false, relationship={"export":false, "columnName": "domicilio_id"})
         */
        private $domicilio;
        
        /**
         * @ORM\Column(type="string", nullable=true)
         * @Assert\Image(mimeTypes="string")
         * @Mapping(type="String")
         * 
         */ 
        private $foto;
        
        /**
         * @ORM\Column(type="array", nullable=false)
         * @Mapping(type="Array")
         */
        private $platos;
        
        /**
         * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="publicaciones")
         * @ORM\JoinColumn(nullable=false, onDelete="cascade")
         * @Mapping(type="Usuario", collection= false, relationship={"export":false, "columnName": "usuario_id"})
         */ 
        private $usuario;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reserva", mappedBy="publicacion")
         * @Mapping(type="Reserva", collection= true, relationship={"export":true, "columnName": "publicacion_id"})
         */ 
        private $reservas;
        
        /**
         * @ORM\Column(type="boolean")
         * @Mapping(type="Boolean")
         */ 
        private $completo = false; 
        
        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         * @Mapping(type="String")
         */ 
        private $descripcion;
        
        /**
         * @ORM\Column(type="string", length=255, nullable=false)
         * @Mapping(type="String")
         */ 
        private $titulo;
        
        public function __construct() {
            
            $this->reservas = new ArrayCollection();
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setHoraInicio($horaInicio) {
            
            $this->horaInicio = $horaInicio;
        }
        
        public function getHoraInicio() {
            
            return $this->horaInicio;
        }
        
        public function setHoraFin($horaFin) {
            
            $this->horaFin = $horaFin;
        }
        
        public function getHoraFin() {
            
            return $this->horaFin;
        }
        
        public function setFecha($fecha){
            
            $this->fecha = $fecha;
        }
        
        public function getFecha() {
            
            return $this->fecha;
        }
        
        public function setPlazasDisponibles($plazasDisponibles) {
            
            $this->plazasDisponibles = $plazasDisponibles;
        }
        
        public function getPlazasDisponibles() {
            
            return $this->plazasDisponibles;
        }
        
        public function setPlazasTotales($plazasTotales) {
            
            $this->plazasTotales = $plazasTotales;
        }
        
        public function getPlazasTotales() {
            
            return $this->plazasTotales;
        }
        
        public function setPrecio($precio) {
            
            $this->precio = $precio;
        }
        
        public function getPrecio() {
            
            return $this->precio;
        }
        
        public function getDomicilio() {
            
            return $this->domicilio;
        }
        
        public function setDomicilio($domicilio) {
            
            $this->domicilio = $domicilio;
        }
        
        public function setPlatos($platos) {
            
            $this->platos = $platos;
        }
        
        public function getPlatos() {
            
            return $this->platos;
        }
        
        public function setUsuario($usuario){
            
            $this->usuario = $usuario;
        }
        
        public function getUsuario() {
            
            return $this->usuario;
        }
        
        public function getFoto() {
            
            return $this->foto;
        }
        
        public function setFoto($foto) {
            
            $this->foto = $foto;
        }
        
        public function addReserva($reserva) {
            
            $this->reservas->add($reserva);
        }
        
        public function setReservas($reservas) {
            
            $this->reservas = $reservas;
        }
        
        public function getReservas() {
            
            return $this->reservas;
        }
        
        public function setCompleto($completo) {
            
            $this->completo = $completo;
        }
        
        public function getCompleto() {
            
            return $this->completo;
        }
        
        public function getDescripcion(){
            
            return $this->descripcion;
        }
        
        public function setDescripcion($descripcion){
            
            $this->descripcion = $descripcion;
        }
        
        public function setTitulo($titulo) {
            
            $this->titulo = $titulo;
        }
        
        public function getTitulo() {
            
            return $this->titulo;
        }
        
        public function toArray() {
            
            $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
                
                //Campo gestionado por el servidor no se envia al cliente
                if ( $key != 'plazasDisponibles' ) {
    
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
                        else if ( $value instanceof \DateTime ) {
                                
                            /*if ( strpos( $key, 'hora') !== FALSE ) {
                                
                                $info = $value->format('H:i:s');
                            }
                            else {
                                
                                $info = $value->format('d-m-Y');
                            }*/
                            $info = $value->format('d-m-Y H:i:s');
                        }
                        else {
                            
                            $info = $value->toArray();
                        }
                    }
                    else {
                           
                        
                        if ( strpos($key, 'foto') !== FALSE ) {
                        
                            $assets = AppConstantes::getAssetsURL('Publicacion');
                            $value  = $value ? $assets."/$value" : $assets."/publicacion-image-default.jpg";
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
            
                //Campo gestionado por el servidor no se recibe del cliente
                if ( $key != 'plazasDisponibles' ) {
                    
                    if ( $this->$key instanceof PersistentCollection && $value) {
            
                        $value = new ArrayCollection(
                            array_unique(array_merge($this->$key->toArray(), $value->toArray()), \SORT_REGULAR)
                        );
                        
                    }
                
                    $this->$key = $value;    
                }
            }
            
            //return $this;
        }
        
    }
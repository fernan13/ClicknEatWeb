<?php

    namespace AppBundle\Entity;
    
    use Doctrine\ORM\Mapping as ORM; 
    use Symfony\Component\Validator\Constraints as Assert;
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use AppBundle\Annotation\EntityMappingAnnotation as Mapping;
    
    //Nos permite gestionar el login y el registro de los usuarios
    use FOS\UserBundle\Model\User as BaseUser;
    
    //Con repositoryClass le estamos agregando un nuevo repositorio donde se incluyen custom querys
    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
     * @ORM\Table(name="usuario")
     */
    class Usuario extends BaseUser {
        
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         * @Mapping(type="Integer")
         */
        protected $id;
        
        /**
         * @ORM\Column(name="facebook_id", type="string", nullable=true)
         */
        private $facebook_id;
     
        /** 
         * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) 
         */
        private $facebook_access_token;
     
        /**
         * @ORM\Column(name="google_id", type="string", nullable=true)
         */
        private $google_id; 
        
        /**
         * @ORM\Column(name="google_access_token", type="string", nullable=true)
         */ 
        private $google_access_token;
        
        /**
         * @ORM\OneToOne(targetEntity="AppBundle\Entity\PerfilUsuario", mappedBy="usuario", cascade={"persist", "remove"})         
         * @Mapping(type="PerfilUsuario", collection= false, relationship={"export":true, "columnName": "usuario_id"})
         */
        private $perfil;
        
        /**
         * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Token", mappedBy="usuarios", cascade={"persist", "remove"})
         * @Mapping(type="Token", collection= true, relationship={"export":true, "columnName": "usuario_id"})
         */
        private $tokens;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Publicacion", mappedBy="usuario")
         * @Mapping(type="Publicacion", collection= true, relationship={"export":true, "columnName": "usuario_id"})
         * 
         */ 
         private $publicaciones;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reserva", mappedBy="usuario")
         * @Mapping(type="Reserva", collection= true, relationship={"export":true, "columnName": "usuario_id"})
         */ 
        private $reservas;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Conversacion", mappedBy="usuarioInicia")         
         * @Mapping(type="Conversacion", collection= true, relationship={"export":true, "columnName": "usuario_inicia_id"})
         */ 
        private $conversacionesIniciadas;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Conversacion", mappedBy="usuarioRecibe")
         * @Mapping(type="Conversacion", collection= true, relationship={"export":true, "columnName": "usuario_recibe_id"})
         */ 
        private $conversacionesRecibidas;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\Mensaje", mappedBy="usuarioEnvia")
         * @Mapping(type="Mensaje", collection= true, relationship={"export":true, "columnName": "usuario_envia_id"})
         */ 
        private $mensajes;
        
        /**
         * @ORM\OneToMany(targetEntity="AppBundle\Entity\ConversacionMetadata", mappedBy="usuario")
         * @Mapping(type="ConversacionMetadata", collection= true, relationship={"export":true, "columnName": "usuario_id"})
         */ 
        private $metadatas;
        
        
        public function __construct() {
            
            parent::__construct();
             
            //Las propiedades particulares de nuestro usuario
            $this->tokens                   = new ArrayCollection();
            $this->publicaciones            = new ArrayCollection();
            $this->reservas                 = new ArrayCollection();
            $this->conversacionesIniciadas  = new ArrayCollection();
            $this->conversacionesRecibidas  = new ArrayCollection();
            $this->mensajes                 = new ArrayCollection();
            $this->metadatas                = new ArrayCollection();

        }
        
        public function setId($id) {
            
            $this->id = $id;
        }
        
        public function getId() {
            
            return $this->id;
        }
        
        public function setFacebookId($facebook_id) {
            
            $this->facebook_id = $facebook_id;
        }
        
        public function getFacebookId() {
            
            return $this->facebook_id;
        }
        
        public function setFacebookAccessToken($facebook_access_token) {
            
            $this->facebook_access_token = $facebook_access_token;
        }
        
        public function getFacebookAccessToken() {
            
            return $this->facebook_access_token;
        }
        
        public function setGoogleId($google_id) {
            
            $this->google_id = $google_id;
        }
        
        public function getGoogleId() {
            
            return $this->google_id;
        }
        
        public function setGoogleAccessToken($google_access_token) {
            
            $this->google_access_token = $google_access_token;
        }
        
        public function getGoogleAccessToken() {
            
            return $this->google_access_token;
        }
        
        public function setPerfil($perfil) {
        
            $this->perfil = $perfil;
        }
        
        public function getPerfil() {
            
            return $this->perfil;
        }
        
        public function setTokens($token) {
            
            $this->tokens = $tokens;
        }
        
        public function addToken($tokenAdd) {
            
            /*$this->tokens->add($token);
            $this->tokens = new ArrayCollection(array_unique($this->tokens->toArray(), \SORT_REGULAR));*/
            $exists = false;
            
            foreach ( $this->tokens as $token ) {
                
                if ( $token->getId() === $tokenAdd->getId() ) {
                    
                    $exists = true;
                    break;
                }
                
            }
            
            if (!$exists) {
                
                $this->tokens->add($tokenAdd);
            }
            
        }
        
        public function getTokens(){
            
            return $this->tokens;
        }
        
        public function addPublicacion($publicacion) {
            
            $this->publicaciones->add($publicacion);
        }
        
        public function setPublicaciones($publicaciones) {
            
            $this->publicaciones = $publicaciones;
        }
        
        public function getPublicaciones() {
            
            return $this->publicaciones;
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
        
        public function addConversacionIniciada($conversacionIniciada) {
            
            $this->conversacionesIniciadas->add($conversacionIniciada);
        }
        
        public function setConversacionesIniciadas($conversacionIniciadas) {
            
            $this->conversacionesIniciadas = $conversacionIniciadas;
        }
        
        public function getConversacionesIniciadas() {
            
            return $this->conversacionesIniciadas;
        }
        
        public function addConversacionRecibida($conversacionRecibida) {
            
            $this->conversacionesRecibidas->add($conversacionRecibida);
        }
        
        public function setConversacionesRecibidas($conversacionesRecibidas) {
            
            $this->conversacionesRecibidas = $conversacionesRecibidas;
        }
        
        public function getConversacionesRecibidas() {
            
            return $this->conversacionesRecibidas;
        }
        
        public function getMensajes() {
            
            return $this->mensajes;
        }
        
        public function setMetadatas($metadatas){
            
            $this->metadatas = $metadatas;
        }
        
        public function getMetadatas() {
            
            return $this->metadatas;
        }
        
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
                    elseif ( $value instanceof \DateTime || $value instanceof \Date || $value instanceof \Time ) {
                        
                        $info = $value->format('d-m-Y H:i:s');
                    }
                    else {
                        
                        $info = $value->toArray();
                    }
                }
                else {
                    
                    $info = $value;
                }
                
                
                $nonValues = array('plainPassword', 'usernameCanonical', 'emailCanonical', 'salt');
                    
                if ( !in_array( $key, $nonValues) ) $json[$key] = $info;
                    
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
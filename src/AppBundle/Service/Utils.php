<?php

    namespace AppBundle\Service;
    
    use Doctrine\Common\Collections\ArrayCollection; 
    use Doctrine\ORM\PersistentCollection;
    use Doctrine\Common\Persistence\Proxy;
    use Doctrine\ORM\EntityManager;
    use Doctrine\Common\Annotations\AnnotationReader;
    use Symfony\Component\Finder\Finder;
    
    use AppBundle\Entity\Ubicacion;
    
    class Utils {
        
        private $em;
        private $api_geocode_key;
        private $router;
        
        public function __construct( EntityManager $em, $api_geocode_key, $router ) {
            
            $this->em               = $em;
            $this->api_geocode_key  = $api_geocode_key;
            $this->router           = $router;
        }
        
        /**
         * Función utilizada para obtener la ubicacion referente a una dirección en concreto
         * proveniente de la api de google maps
         * 
         * @params $address -> Direccion a consultar
         * @return Array con la respuesta de la api de google maps
         */ 
        public function getLocationAddress($address) {
            
            $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
            $key    = $this->api_geocode_key; 
            
            $urlUbc = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
            $responseUbc = file_get_contents($urlUbc);
             
            $jsonUbc = json_decode($responseUbc,TRUE); //generate array object from the response from the web
            
            if ( $jsonUbc['status'] === 'OK' ) {
                
                //Obtenemos la informacion necesaria del domicilio
                $pais       = $json['results'][0][5]['long_name'];
                $ciudad     = $json['results'][0][2]['long_name'];
                $ubicacion  = array( "lat" => $jsonUbc['results'][0]['geometry']['location']['lat'],
                                     "lng" => $jsonUbc['results'][0]['geometry']['location']['lng']);
                
                //Para obtener el barrio debemos de consultar a traves de la ubicacion a la api
                $urlGeo = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$ubicacion["lat"].",".$ubicacion["lng"]."&key=$key&result_type=neighborhood|postal_code|country";
                $responseGeo = file_get_contents($urlGeo);
                
                $jsonGeo = json_decode($responseGeo, TRUE);
                
                $data              = array();
                $ubicacionObj      = new Ubicacion();
                $ubicacionObj->fromArray($ubicacion);
                
                $data['ubicacion'] = $ubicacionObj;
                
                $arrIt   = new \RecursiveArrayIterator($jsonGeo["results"]);
                $parIt   = new \ParentIterator($arrIt);
                $it      = new \RecursiveIteratorIterator($parIt, \RecursiveIteratorIterator::SELF_FIRST);
                
                foreach ($it as $key => $value) {
                    
                    if ( array_key_exists('types', $value) ) {
                            
                        $type = $value['types'][0];
                        
                        switch ( $type ) {
                            
                            case 'neighborhood': {
                                
                                $data['barrio'] = $value['long_name']; 
                                break;
                            }
                            
                            case 'postal_code': {
                                
                                $data['cp'] = $value['long_name'];
                                break;
                            }
                            
                            case 'country': {
                                
                                $data['pais'] = $value['long_name'];
                                break;
                            }
                            
                            case 'locality': {
                                
                                $data['localidad'] = $value['long_name'];
                                break;
                            }
                        }
                        
                    }
                }
                return $data;
            }
            
            return null;
            
        }
       
        
        /**
         * Funcion utilizada para obtener la informacion referente a una direccion
         * consultando en la api de google maps
         * 
         * @params Direccion a consultar
         * @return Array 
         */ 
        public function getAddressInformation($address) {
            
            $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
             
            $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
            $response = file_get_contents($url);
             
            return json_decode($response,TRUE);
        }
        
        /**
         * Funcion utilizada para poder obtener el atributo de un objeto en un array
         * 
         * @param Object
         * @result Object
         */ 
         public function getObjectValueName( $object, $valueName ){
             
            $getter = 'get'.ucfirst(trim($valueName));
            
            /*
                bool method_exists ( mixed $object , string $method_name )
                
                Comprueba si existe el método de la clase en el 
                objeto dado por object
            */
            if ( method_exists( $object, $getter ) ) {
                
                $data = $object->$getter();
                
                //Comprobamos que tipo de dato tenemos almacenado en la variable $data
                if ( is_object($data) ) {
                   
                    //Es una coleccion de objetos
                    if ( $data instanceof PersistentCollection ) {
                        
                        $value = array();
                        
                        foreach ( $data as $object ) {
                            
                            $value[] = $object->toArray();
                        }
                    }
                    else if ( $data instanceof \DateTime ) {
                        
                        //Comprobamos si hemos pedido Fecha u Hora
                         $value = $data->format( stripos( $getter, 'hora') !== FALSE ? 'H:m:s' : 'd-m-Y');
                    }
                    else {
                        
                        $value = $data->toArray();
                    }
                    
                }
                else {
                    
                    $value = $data;
                }
                
                return $value;
            }
            else {
                
                throw new \Exception('Variable no encontrada en la clase, te has equivocado?');
            }
         }
         
        /**
         * Funcion utilizada para obtener el nombre de una clase a traves
         * del parametro de la URL. Si el nombre de la clase es compuesto
         * debe de estar separado por cualquier caracter que no sea una letra
         * 
         * @params Nombre de la cadena a convertir 
         * @result Nombre de la clase
         */ 
        public function toClassName($string) {
            
            $pattern = '/[^a-zA-Z0-9]/';
            
            if ( preg_match( $pattern , $string ) > 0 ) {
                
                $className = preg_replace( $pattern, ' ', $string);
                $classes   = explode( ' ', $className );
                
                for ( $i = 0; $i < count($classes); $i++ ) {
                    
                    $classes[$i] = ucfirst(strtolower($classes[$i]));
                }
                
                $className = implode($classes);
            }
            else {
               
                $className  = ucfirst(strtolower(trim($string)));    
                
            }
            
            return trim($className);
            
        }
        
        /**
         * Funcion que nos extrae nuestras propias anotaciones y que nos permiten
         * indicar el mapeo de nuestros objetos en la BBDD
         */ 
        public function getObjectMappingVars($className) {
            
            $reader         = new AnnotationReader();
            $class          = "AppBundle\Entity\\$className";
            
            if ( class_exists($class) ) {
                
                $reflectionObj  = new \ReflectionObject(new $class);
    		
        		$properties     = $this->em->getClassMetadata("AppBundle:$className")->getFieldNames();
                
                //En esta variable almacenamos el nombre de todos y cada unos de los atributos del objeto
                $data           = array_merge(
                                                $properties, 
                                                $this->em->getClassMetadata("AppBundle:$className")->getAssociationNames()
                                             );  
        		
        	    //Variable donde se almacenara el valor de las anotaciones
        	    $annotations    = array();
        	    
        		foreach($data as $property ) {
        		    
        			if($reflectionObj->hasProperty($property)) {
        			    
        				$reflectionProp = new \ReflectionProperty($class, $property);
        				$relation = $reader->getPropertyAnnotation($reflectionProp, 'AppBundle\\Annotation\EntityMappingAnnotation');
        
        				if($relation) {
        					
        					$annotations[$property] = $relation->toArray();
        				}
        			}
    		    }
    		    
    		    return $annotations;
            }
    		else {
    		    
    		    throw new \Exception("La clase $class no se encuentra definida");
    		}
		
        }
        
        /**
         * @param string|object $class
         *
         * @return boolean
         */
        public function isEntity($class) {
            
            $class = "AppBundle\Entity\\".$class;
            
            if (is_object($class)) {
                $class = ($class instanceof Proxy)
                    ? get_parent_class($class)
                    : get_class($class);
            }  
            
            return class_exists($class) ? !$this->em->getMetadataFactory()->isTransient($class) : false;
        }
        
        /**
         * Metodo utilizado para preparar los parametros para los objetos que
         * se actualizan o se insertan en nuestra BBDD
         * 
         * @params Array
         * @return Array
         */ 
        public function prepareParams($annotations, $params) {
            
            if ( !is_array($params) ) return $params;
            
            foreach( $params as $key=>$param ) {
                    
                $propertyAnnotation = $annotations[$key];
                $type               = $propertyAnnotation['type'];
                $isCollection       = $propertyAnnotation['collection'];
                    
                if ( !$isCollection && $this->isEntity($type) ) {
                        
                    /*
                        Obtenemos la referencia de la dependencia entre 
                        clases y se la agregamos a nuestro array
                    */
                    if ( is_numeric($param) && $param > 0) {
                        
                        $reference      = $this->em->getReference("AppBundle:$type", $param);
                        $params[$key]   = $reference;
                    }
                    else if ( is_array($param) ) {
                        
                        //Si es una entidad y el parametro dado es un JSON generamos su objeto correspondiente
                        $objectAnnotations  = $this->getObjectMappingVars($type);
                        
                        //LLamada recursiva que nos permite obtener todos los datos de esta entidad
                        $data               = $this->prepareParams($objectAnnotations, $param);
                        
                        //Cargamos los datos dentro del objeto
                        $class  = "AppBundle\Entity\\".$type;
                        $object = new $class();
                        $object->fromArray($data);
                        
                        $params[$key]   = $object;
                    }
                    
                }
                else if ( $isCollection && is_array($param) ) {
                    
                    //Generamos la lista correspondiente
                    $list = new ArrayCollection();
                    
                    if ( !$this->is_numeric_array($param) ) {
                        
                        //Observamos y recorremos todos los parametros existentes dentro del array
                        foreach ( $param as $parameter ) {
                            
                            //Generamos un objeto de dicha clase y obtenemos sus anotaciones
                            $class              = "AppBundle\Entity\\$type";
                            $object             = new $class();
                            $objectAnnotations  = $this->getObjectMappingVars($type);
                            
                            //LLamada recursiva que nos permite obtener todos los datos de esta entidad
                            $parameter          = $this->prepareParams($objectAnnotations, $parameter);
                            
                            //Cargamos los datos dentro del objeto
                            $object->fromArray($parameter);
                            
                            //Lo agregamos a la lista
                            $list->add($object);
                        }
                        
                    }
                    else {
                        
                        //Si introducimos una lista de identificadores
                        
                        foreach ( $param as $parameter ) {
                            
                            $object = $this->em->find("AppBundle:$type", $parameter);
                            
                            if ( $object ) {
                                
                                $list->add($object);
                            }
                        }
                        
                    }
                    
                    
                    $params[$key] = $list;
                }
                else if ( strpos( $type, 'Date') !== FALSE || strpos( $type, 'Time') !== FALSE ) {
                        
                    $fecha = date_create($param);
                        
                    if (!$fecha) {
                            
                        throw new \Exception("Campo $key fecha incorrecta");
                    }
                        
                    $params[$key]   = $fecha;
                }
                
            }
            
            return $params;
        }
        
        private function is_numeric_array($array) {
            
            $numbers = 0;
            
            foreach( $array as $key=> $value ) {
            
                is_numeric($value) ? $numbers++ : $numbers += 0;    
            }
            
            return $numbers === count($array);
            
        }
        
        public function getBreadcrumbs() {
            
            $web        = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
            $url        = $web.$_SERVER['REQUEST_URI'];
            $params_url = parse_url($url);
            
            $path       = array_filter(explode('/', $params_url['path']));
            sort($path);
            
            $response   = array( $web => 'home' );
            
            for ( $i = 0; $i < count($path); $i++ ) {
                
                $path_url = $web;
                
                for ( $j = 0; $j <= $i; $j++ ) {
                    
                    $path_url .= "/".$path[$j];    
                }
                
                if ( !is_numeric($path[$i] )) $response[$path_url] = $path[$i];
            }
            
            return $response;
            
        }
        
       
        
    }
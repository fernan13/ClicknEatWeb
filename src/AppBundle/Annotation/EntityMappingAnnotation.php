<?php

    namespace AppBundle\Annotation;

    use Doctrine\Common\Annotations\Annotation;
    
    /**
    * @Annotation
    * @Target("PROPERTY")
    */
    final class EntityMappingAnnotation extends Annotation {
        
        /*
            "type" => "Comentario",
            "collection" => true,
            "relationship" => array( "export" => true,
                                     "columnName" => ""))
        
        */
    	public $type;
    	public $collection;
    	public $relationship;
    	
    	public function toArray() {
    	    
    	    $vars  = get_object_vars($this);
            $json  = array(); 
            
            foreach( $vars as $key=>$value ) {
            
                $json[$key] = $value;    
            }
            
            return $json;
    	}
    	
    }
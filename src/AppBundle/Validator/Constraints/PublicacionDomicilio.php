<?php

    namespace AppBundle\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;

    /**
     * @Annotation
     */
    class PublicacionDomicilio extends Constraint
    {
        public $message = 'El domicilio con el id "%domicilio%" debe de estar registrado en el perfil de usuario';
        
        //Indicamos a Symfony el nombre del archivo que validará nuestra restriccion
        public function validatedBy() {
            
            return get_class($this).'Validator';
        }
    }
    
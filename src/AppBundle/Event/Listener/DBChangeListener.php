<?php

    namespace AppBundle\Event\Listener;
    
    use Doctrine\ORM\Event\LifecycleEventArgs;
    use Symfony\Component\DependencyInjection\ContainerInterface;
    use AppBundle\Validator\ValidatorListener;
    
    class DBChangeListener {
        
        protected $container;
        
        public function __construct(ContainerInterface $container) {
            
            $this->container = $container;
            
        }
    
        public function prePersist(LifecycleEventArgs $args) {
            
            $this->doValidate($args, 'insert');
        }
        
        public function preUpdate(LifecycleEventArgs $args) {
            
            $this->doValidate($args, 'update');
        }
        
        public function preRemove(LifecycleEventArgs $args) {
            
            $this->doValidate($args, 'remove');
        }
        
        private function doValidate(LifecycleEventArgs $args, $typeEvent) {
            
            $entity         = $args->getEntity();
            $entityManager  = $args->getEntityManager();
            
            //Creamos la clase que nos valida los datos
            $validator          = new ValidatorListener($this->container, $entityManager, $entity, $typeEvent);
            $validatorMethods   = get_class_methods('AppBundle\Validator\ValidatorListener');
            
            //Obtenemos el nombre de la clase
            $class          = str_replace('AppBundle\Entity\\', '', get_class($entity));
            
            //Ejecutamos su validador si se encuentra definido
            $method         = 'validate'.$class;
            
            foreach ( $validatorMethods as $validatorMethod ) {
                
                if ( $validatorMethod === $method ) {
                    
                    $validator->$method();
                    break;
                }    
            }
        }
        
    }
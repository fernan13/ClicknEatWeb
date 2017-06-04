<?php

    namespace AppBundle\Validator\Constraints;

    use Symfony\Component\Validator\Constraint;
    use Symfony\Component\Validator\ConstraintValidator;
    use AppBundle\Entity\PerfilUsuario;
    use AppBundle\Entity\Domicilio;

    class PublicacionDomicilioValidator extends ConstraintValidator
    {
        protected $em;
        
        public function __construct($em) {
            
            $this->em = $em;
        }
        
        public function validate($value, Constraint $constraint)
        {
            $repository     = $this->em->getRepository('AppBundle:PerfilUsuario');
            $perfil_id      = $value->getPerfil()->getId();
            
            $perfil_usuario = $repository->find($perfil_id);
            
            if (is_null($perfil_usuario)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('%domicilio%', $value->getId())
                    ->addViolation();
            }
        }
    }
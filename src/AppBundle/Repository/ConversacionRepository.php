<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    
    class ConversacionRepository extends AbstractRepository {
        
        
        public function getConversacionUsuarios($usuario1, $usuario2) {
            
            $result =   $this->createQueryBuilder('conversacion')
                             ->andWhere('conversacion.usuarioInicia = :usuarioInicia and conversacion.usuarioRecibe = :usuarioRecibe')
                             ->orWhere('conversacion.usuarioInicia = :usuarioRecibe and conversacion.usuarioRecibe = :usuarioInicia')
                             ->setParameter('usuarioInicia', $usuario1)
                             ->setParameter('usuarioRecibe', $usuario2)
                             ->getQuery()
                             ->execute();
                             
            return is_array($result) && !empty($result) ? $result[0] : false;
            
        }
    }
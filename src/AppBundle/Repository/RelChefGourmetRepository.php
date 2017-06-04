<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    
    class RelChefGourmetRepository extends AbstractRepository {
        
        /**
         * @param Usuario que comenta, Chef que recibe el comentario
         * 
         */ 
        public function areUsersRelated($usuarioDa, $usuarioRecibe) {
         
            $result =   $this->createQueryBuilder('rel_chef_gourmet')
                             ->andWhere('rel_chef_gourmet.chef = :chefRecibe and rel_chef_gourmet.gourmet = :gourmetDa')
                             ->orWhere('rel_chef_gourmet.chef = :chefDa and rel_chef_gourmet.gourmet = :gourmetRecibe')
                             ->setParameter('chefDa', $usuarioDa)
                             ->setParameter('chefRecibe', $usuarioRecibe)
                             ->setParameter('gourmetDa', $usuarioDa)
                             ->setParameter('gourmetRecibe', $usuarioRecibe)
                             ->getQuery()
                             ->execute();
                             
            return !empty($result);
        }
        
    }
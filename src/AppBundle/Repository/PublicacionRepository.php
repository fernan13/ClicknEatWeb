<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    use AppBundle\Entity\Publicacion;
    
    class PublicacionRepository extends AbstractRepository {
        
        public function getPublicacionesHarvesine( $lat, $lng, $distance, $metrics = 'm' ) {
            
            $distance = intval(abs($distance));
            
            switch ( $metrics ) {
                
                case 'm': {
                    
                    $distance *= 0.001;
                    break;
                }
                
                case 'dm': {
                    
                    $distance *= 0.01;
                    break;
                }
                
                case 'hm': {
                    
                    $distance *= 0.1;
                    break;
                }
            }
            
            /*$query =    "SELECT p . * , ( 6371 * ACOS( COS( RADIANS( $lat ) ) * COS( RADIANS( ubicacion_domicilio.lat ) ) * COS( RADIANS( ubicacion_domicilio.lng ) - RADIANS( $lng ) ) + SIN( RADIANS( $lat ) ) * SIN( RADIANS( ubicacion_domicilio.lat ) ) ) ) AS distance
                        FROM publicacion p
                        INNER JOIN domicilio ON p.domicilio_id = domicilio.id
                        INNER JOIN ubicacion_domicilio ON domicilio.id = ubicacion_domicilio.domicilio_id
                        HAVING distance < $distance";*/
            
            $queryBuilder = $this->createQueryBuilder("p");
            $queryBuilder = $queryBuilder
                            ->select(array("p", "( 6371 * ACOS( COS( RADIANS( $lat ) ) * COS( RADIANS( ub.lat ) ) * COS( RADIANS( ub.lng ) - RADIANS( $lng ) ) + SIN( RADIANS( $lat ) ) * SIN( RADIANS( ub.lat ) ) ) ) distance"))
                            ->innerJoin('AppBundle:Domicilio', 'do', 'WITH', 'do.id = p.domicilio')
                            ->innerJoin('AppBundle:Ubicacion', 'ub', 'WITH', 'do.id = ub.domicilio')
                            ->andWhere("p.completo = :parameter")
                            ->setParameter('parameter', false)
                            ->having("distance < $distance");
            $resultados    = $queryBuilder->getQuery()->execute();
            $publicaciones = array();
            
            foreach ( $resultados as $column => $values ) {
                
                foreach ( $values as $value ) {
                    
                    if ( $value instanceof Publicacion ) {
                        
                        $publicaciones[] = $value->toArray();
                    }
                }
            }
            
            return $publicaciones;          
        }
    }
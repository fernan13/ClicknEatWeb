<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    
    class TokenRepository extends AbstractRepository {
        
        public function insertRelationshipUsuarioToken( $idToken, $idUsuario ) {
            
            $connectionParams = array(
                'dbname'    => 'clickandeat',
                'user'      => 'fernan13',
                'password'  => '',
                'host'      => '127.0.0.1',
                'driver'    => 'pdo_mysql',
            );
            
            $conn   = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
            $query  =   'INSERT INTO token_users (token_id, usuario_id)
                        SELECT * FROM (SELECT :idToken, :idUsuario ) AS tmp
                        WHERE NOT EXISTS (
                            SELECT token_id, usuario_id FROM token_users WHERE token_id = :idToken AND usuario_id = :idUsuario
                        ) LIMIT 1';
                        
            //$query  = "INSERT INTO token_users (token_id, usuario_id) VALUES (:idToken, :idUsuario)";
            
            $stmt   = $conn->prepare($query);
            $stmt->bindParam(':idToken', $idToken);
            $stmt->bindParam(':idUsuario', $idUsuario);
            
            return $stmt->execute();
        }
        
    }
<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    
    class AbstractRepository extends EntityRepository {
        
        /**
         * @params $className( Nombre de la Clase), $params (Parametros pasados por GET)
         * @return className[]
         */
        public function findAllByRequestParams($className, $annotations, $params) {
            
            $queryBuilder = $this->createQueryBuilder($className);
            
            foreach ( $params as $key=>$param ) {
                
                switch ( $key ) {
                    
                    case 'limit': {
                        
                        if ( is_numeric($param) ) {
                            
                            $queryBuilder = $queryBuilder
                                            ->setMaxResults(intval(abs($param)));
                        }
                        
                        break;                
                    }
                    
                    case 'order': {
                        
                        /*
                            Orden en la URL para pasar los datos para indicar el orden
                                order[]=nombreColumna&order[]=tipoOrdenacion
                        */
                        $column = $param[0];
                        $type   = $param[1];
                        
                        $queryBuilder   = $queryBuilder
                                          ->orderBy("$className.$column", $type);
                                              
                        break;                 
                    }
                    
                    default: {
                        
                        $classInfo    = $annotations[$key];
                        $type         = $classInfo['type'];
                        $isCollection = $classInfo['collection'];
                        $em           = $this->getEntityManager();
                        
                        
                        if ( !$isCollection ) {
                            
                            if ( $this->isEntity($type) ) {
                                
                                $classTable = $em->getClassMetadata("AppBundle:$className")->getTableName();
                                $tableName  = $em->getClassMetadata("AppBundle:$type")->getTableName();
                        
                                $queryBuilder = $queryBuilder
                                                ->join("$className.$key", $tableName);
                                                
                                /*
                                
                                    Para separar varios campos en la API dentro
                                    de un parametro de busqueda utilizaremos
                                    el caracter , y para indicar el valor :
                                */
                                
                                if ( preg_match('/,|\:/', $param ) > 0) {
                                    
                                    //Debemos de comprobar si en la busqueda se ha introducido [] ya que significaria que seria un array
                                    if ( preg_match('[]', $param) > 0 ) {
                                        
                                        //Sintaxis array nombre[]: valor1,valor2,...
                                        $columnName = str_replace("[]", "", explode(':', $param)[0]);
                                        $values = explode(':', $param)[1];
                                        $values = explode(',', $values);
                                        $valuesFilter = array();
                                        
                                        //Limpiamos los espacios de cada string
                                        foreach ( $values as $value ) {
                                            
                                            $valuesFilter[] = trim($value);
                                        }
                                        
                                        $queryBuilder = $queryBuilder
                                                        ->andWhere("$tableName.$columnName IN (:$key)")
                                                        ->setParameter($key, $valuesFilter);
                                        
                                    }
                                    else {
                                        
                                        //Valores normales
                                        $values    = explode(',', $param);
                                    
                                        foreach( $values as $value ) {
                                            
                                            $elemens = explode( ':' , $value);
                                            $columnName   = $elemens[0];
                                            $columnValue  = $elemens[1];
                                            
                                            $queryBuilder = $queryBuilder
                                                            ->andWhere("$tableName.$columnName = :$key")
                                                            ->setParameter($key, $columnValue );
                                        }
                                        
                                    }
                                    
                                    
                                }
                                else {
                                    
                                    //Por defecto intenta buscar por el identificador
                                    $queryBuilder = $queryBuilder
                                                    ->andWhere("$tableName.id = :$key")
                                                    ->setParameter($key, $param );
                                                    
                                }
                                
                            }
                            else {
                                
                                //Aqui entrará cuando sea un valor normal string, integer ...
                                
                                if ( $type === 'Array' ) {
                                    
                                    /*
                                        Si el tipo a buscar es un array debe de pasarse como tal
                                        en la URL
                                    */    
                                    $queryBuilder = $queryBuilder
                                                ->andWhere("$className.$key IN (:$key)");
                                                
                                }
                                else {
                                    
                                    $queryBuilder = $queryBuilder
                                                ->andWhere("$className.$key = :$key");
                                }
                                
                                $queryBuilder = $queryBuilder
                                                ->setParameter($key, $param);
                            }
                            
                        }
                        else {
                            
                            $param  = preg_replace('/[^0-9]/', ' ', $param);
                            $strId  = array_filter(explode(' ', $param));
                            $ids    = array();
                            
                            foreach ( $strId as $id ) {
                                
                                $ids[] = intval($id);
                            }
                            
                            $tableName      = $em->getClassMetadata("AppBundle:$type")->getTableName();
                           
                            $queryBuilder   = $queryBuilder
                                              ->join("$className.$key", $tableName)
                                              ->andWhere("$tableName.id IN (:collection)")
                                              ->setParameter('collection', $ids);    
                        }
                            
                        break;        
                    }
                }
                
            }
            
            return $queryBuilder->getQuery()->execute();
        }
        
        
        /**
         * @param string|object $class
         *
         * @return boolean
         */
        private function isEntity($class) {
            
            $class = "AppBundle\Entity\\".$class;
            
            if (is_object($class)) {
                $class = ($class instanceof Proxy)
                    ? get_parent_class($class)
                    : get_class($class);
            }  
            
            return class_exists($class) ? !$this->getEntityManager()->getMetadataFactory()->isTransient($class) : false;
        }
        
        
        /**
         * 
         *  Funcion utilizada para obtener el ultimo id
         *  en la bbdd para la insercion de los nuevos 
         *  objetos
         * 
         *  @return id
         */ 
        
        public function getNextId($className) {
            
            $tableName = $this->getClassMetadata("AppBundle:$className")->getTableName();
            
            $connectionParams = array(
                'dbname'    => 'clickandeat',
                'user'      => 'fernan13',
                'password'  => '',
                'host'      => '127.0.0.1',
                'driver'    => 'pdo_mysql',
            );
            
            $conn   = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
            
            $stmt   = $conn->query("SHOW TABLE STATUS LIKE '$tableName'");
            $lastId = $stmt->fetchAll()[0]['Auto_increment'];
            
            //Con PDO se cierra la conexion eliminando el objeto
            $conn   = null;
            
            return intval($lastId);
        }
        
    }
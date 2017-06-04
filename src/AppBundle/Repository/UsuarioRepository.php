<?php

    namespace AppBundle\Repository;
    
    use Doctrine\ORM\EntityRepository;
    use Doctrine\Common\Collections\ArrayCollection; 
    
    class UsuarioRepository extends AbstractRepository  {
        
        
        public function getNumberOfConversationNoRead($usuario) {
            
            $convIni = $usuario->getConversacionesIniciadas();
            $convRec = $usuario->getConversacionesRecibidas();
            
            $conversaciones = new ArrayCollection(
                array_merge($convIni->toArray(), $convRec->toArray())
            );
         
            $indices = array();
            
            foreach( $conversaciones as $conversacion ) {
                
                $metadatas  = $conversacion->getMetadatas();
            
                foreach ( $metadatas as $metadata ) {
                    
                    if ( $metadata->getUsuario()->getId() === $usuario->getId() && $metadata->getMensajesNoLeidos() > 0 ) {
                        
                        if ( !in_array($conversacion->getId(), $indices) ) {
                            
                            $numberConv++;
                            $indices[] = $conversacion->getId();
                        }
                        
                        $numberMess += $metadata->getMensajesNoLeidos();
                    }
                    
                }
            }
            
            return array('conversaciones' => $numberConv, "mensajes" => $numberMess);
        }
        
        
    }
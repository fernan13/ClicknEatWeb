<?php

    namespace AppBundle\Security\Core\User;

    use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
    use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
    use Symfony\Component\Security\Core\User\UserInterface;
    use AppBundle\Entity\PerfilUsuario;
    use AppBundle\Service\Utils;
    
    class FOSUBUserProvider extends BaseClass {
    
        /**
         * {@inheritDoc}
         */
        public function connect(UserInterface $user, UserResponseInterface $response) {
            
            $property = $this->getProperty($response);
            
            $username = $response->getUsername();
            
            //on connect - get the access token and the user ID
            $service = $response->getResourceOwner()->getName();
            $setter = 'set'.ucfirst($service);
            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';
            
            //we "disconnect" previously connected users
            if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
                $previousUser->$setter_id(null);
                $previousUser->$setter_token(null);
                $this->userManager->updateUser($previousUser);
            }
            
            //we connect current user
            $user->$setter_id($username);
            $user->$setter_token($response->getAccessToken());
            $this->userManager->updateUser($user);
        }
        
        /**
         * {@inheritdoc}
         */
        public function loadUserByOAuthUserResponse(UserResponseInterface $response) {
            
            $username = $response->getUsername();
            $nickname = $response->getNickName();
            $email    = $response->getEmail();
            
            $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));
            
            //when the user is registrating
            if (null === $user) {
                
                $service = $response->getResourceOwner()->getName();
                $setter = 'set'.ucfirst($service);
                $setter_id = $setter.'Id';
                $setter_token = $setter.'AccessToken';
                
                // create new user here
                $user = $this->userManager->createUser();
                $user->$setter_id($username);
                $user->$setter_token($response->getAccessToken());
                
                //I have set all requested data with the user's username
                //modify here with relevant data
                $user->setUsername($nickname);
                $user->setEmail($email);
                $user->setPassword($username);
                $user->setEnabled(true);
                
                //Debemos de crear el perfil asociado a dicho usuario
                $perfil = new PerfilUsuario();
                $perfil->setUsuario($user);
                $perfil->setNombre($response->getRealName());
                
                //Nos descargamos la imagen de su perfil
                $imagen     = $response->getProfilePicture();
                
                if ( $imagen ) {
                    
                    $base64img  = base64_encode(file_get_contents($imagen));
                    $perfil->setImagen($base64img);
                    
                    //Asignamos el perfil al usuario
                    $user->setPerfil($perfil);
                
                    
                }
                
                //Se almacena el usuario
                $this->userManager->updateUser($user);
                
                return $user;
            }
            
            //if user exists - go with the HWIOAuth way
            $user        = parent::loadUserByOAuthUserResponse($response);
            
            //Nos descargamos de nuevo la foto de perfil por si el usuario la ha actualizado
            //Nos descargamos la imagen de su perfil
            $imagen     = $response->getProfilePicture();
                
            if ( $imagen ) {
                    
                $base64img  = base64_encode(file_get_contents($imagen));
                $user->getPerfil()->setImagen($base64img);
                    
            }
            
            $serviceName = $response->getResourceOwner()->getName();
            $setter      = 'set'.ucfirst($serviceName).'AccessToken';
            
            //update access token
            $user->$setter($response->getAccessToken());
            
            return $user;
        }
    }
<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/api')) {
            // app_abstractapidelete_deleteobjects
            if (preg_match('#^/api/(?P<className>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_abstractapidelete_deleteobjects;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_abstractapidelete_deleteobjects')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiDeleteController::deleteObjects',));
            }
            not_app_abstractapidelete_deleteobjects:

            // delete_request
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiDeleteController::deleteObject',));
            }
            not_delete_request:

            // api_get_all_request
            if (preg_match('#^/api/(?P<className>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_all_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiGetController::seeAllObjects',));
            }
            not_api_get_all_request:

            // api_get_request
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiGetController::seeOneObject',));
            }
            not_api_get_request:

            // api_get_value_request
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)/(?P<valueName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_value_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_value_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiGetController::seeValueNameObject',));
            }
            not_api_get_value_request:

            // post_all_request
            if (preg_match('#^/api/(?P<className>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_all_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_all_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiPostController::insertObject',));
            }
            not_post_all_request:

            // put_all_request
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_put_all_request;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_all_request')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiPutController::updateObject',));
            }
            not_put_all_request:

            // app_abstractapiput_updateattributeobject
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)/(?P<variableName>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_app_abstractapiput_updateattributeobject;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_abstractapiput_updateattributeobject')), array (  '_controller' => 'AppBundle\\Controller\\AbstractApiPutController::updateAttributeObject',));
            }
            not_app_abstractapiput_updateattributeobject:

            if (0 === strpos($pathinfo, '/api/conversacion')) {
                // app_conversacionapiget_seeallconversaciones
                if (preg_match('#^/api/conversacion(?P<attributeName>[^/]++)/usuario/(?P<idUsuario>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_conversacionapiget_seeallconversaciones;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_conversacionapiget_seeallconversaciones');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_conversacionapiget_seeallconversaciones')), array (  '_controller' => 'AppBundle\\Controller\\ConversacionApiGetController::seeAllConversaciones',));
                }
                not_app_conversacionapiget_seeallconversaciones:

                // app_conversacionapiget_seeconversacioninusuarios
                if (0 === strpos($pathinfo, '/api/conversacion/entre') && preg_match('#^/api/conversacion/entre/(?P<idUsuario1>[^/]++)/(?P<idUsuario2>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_conversacionapiget_seeconversacioninusuarios;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_conversacionapiget_seeconversacioninusuarios');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_conversacionapiget_seeconversacioninusuarios')), array (  '_controller' => 'AppBundle\\Controller\\ConversacionApiGetController::seeConversacionInUsuarios',));
                }
                not_app_conversacionapiget_seeconversacioninusuarios:

            }

            // app_loginapi_loginuser
            if ($pathinfo === '/api/usuario/login') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_loginapi_loginuser;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LoginApiController::loginUser',  '_route' => 'app_loginapi_loginuser',);
            }
            not_app_loginapi_loginuser:

            // app_publicacionesget_seeallpublicaciones
            if ($pathinfo === '/api/publicacion/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_publicacionesget_seeallpublicaciones;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PublicacionesGetController::seeAllPublicaciones',  '_route' => 'app_publicacionesget_seeallpublicaciones',);
            }
            not_app_publicacionesget_seeallpublicaciones:

            if (0 === strpos($pathinfo, '/api/usuario/re')) {
                // app_registeruserapi_registerusuario
                if ($pathinfo === '/api/usuario/register') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_registeruserapi_registerusuario;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RegisterUserApiController::registerUsuario',  '_route' => 'app_registeruserapi_registerusuario',);
                }
                not_app_registeruserapi_registerusuario:

                // app_resendapi_resend
                if ($pathinfo === '/api/usuario/resend') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_resendapi_resend;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ResendApiController::resendAction',  '_route' => 'app_resendapi_resend',);
                }
                not_app_resendapi_resend:

            }

            // app_reservasusuarioapi_deleteobjects
            if (0 === strpos($pathinfo, '/api/publicacion/reserva/usuario') && preg_match('#^/api/publicacion/reserva/usuario/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_reservasusuarioapi_deleteobjects;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_reservasusuarioapi_deleteobjects')), array (  '_controller' => 'AppBundle\\Controller\\ReservasUsuarioApiController::deleteObjects',));
            }
            not_app_reservasusuarioapi_deleteobjects:

            // app_reservasusuarioapi_deleteobject
            if (preg_match('#^/api/(?P<className>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_reservasusuarioapi_deleteobject;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_reservasusuarioapi_deleteobject')), array (  '_controller' => 'AppBundle\\Controller\\ReservasUsuarioApiController::deleteObject',));
            }
            not_app_reservasusuarioapi_deleteobject:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // profile_user
            if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_user')), array (  '_controller' => 'AppBundle\\Controller\\WebController::profileAction',));
            }

            if (0 === strpos($pathinfo, '/publicacion')) {
                // add_publicacion
                if ($pathinfo === '/publicacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WebController::addPublicacionAction',  '_route' => 'add_publicacion',);
                }

                // see_or_update_publicacion
                if (preg_match('#^/publicacion/(?P<publicacion>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'see_or_update_publicacion')), array (  '_controller' => 'AppBundle\\Controller\\WebController::seeOrEditPublicacionAction',));
                }

            }

        }

        // secure
        if ($pathinfo === '/^') {
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$this->context->getScheme()])) {
                return $this->redirect($pathinfo, 'secure', key($requiredSchemes));
            }

            return array('_route' => 'secure');
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/login/service') && preg_match('#^/login/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/login/registration') && preg_match('#^/login/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            if (0 === strpos($pathinfo, '/login/check-')) {
                // facebook_login
                if ($pathinfo === '/login/check-facebook') {
                    return array('_route' => 'facebook_login');
                }

                // google_login
                if ($pathinfo === '/login/check-google') {
                    return array('_route' => 'google_login');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

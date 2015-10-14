<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/hello')) {
            // cestom_store_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_store_homepage')), array (  '_controller' => 'Cestom\\StoreBundle\\Controller\\DefaultController::indexAction',));
            }

            // cestom_user_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_homepage')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/membre')) {
                // cestom_admin_homepage
                if ($pathinfo === '/admin/membre/gestionMembre') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionMembreController::membreAction',  '_route' => 'cestom_admin_homepage',);
                }

                // cestom_admin_ajouter_member
                if ($pathinfo === '/admin/membre/ajouterMembre') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterMembreController::ajouterMembreAction',  '_route' => 'cestom_admin_ajouter_member',);
                }

                // cestom_admin_modifier_member
                if (0 === strpos($pathinfo, '/admin/membre/modifierMembre') && preg_match('#^/admin/membre/modifierMembre/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_member')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierMembreController::modifierMembreAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/formation')) {
                // cestom_admin_modifier_formation
                if (0 === strpos($pathinfo, '/admin/formation/modifierFormation') && preg_match('#^/admin/formation/modifierFormation/(?P<idmembre>[^/]++)/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierFormationController::modifierFormationMembreAction',));
                }

                // cestom_admin_ajouter_formation
                if (0 === strpos($pathinfo, '/admin/formation/ajouterFormation') && preg_match('#^/admin/formation/ajouterFormation/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_ajouter_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterFormationController::ajouterFormationMembreAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/ville')) {
                // cestom_admin_ajouter_ville
                if ($pathinfo === '/admin/ville/gestionVille') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterVilleController::ajouterVilleAction',  '_route' => 'cestom_admin_ajouter_ville',);
                }

                // cestom_admin_modifier_ville
                if (0 === strpos($pathinfo, '/admin/ville/modifierVille') && preg_match('#^/admin/ville/modifierVille/(?P<idville>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_ville')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierVilleController::modifierVilleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/universite')) {
                // cestom_admin_ajouter_universite
                if ($pathinfo === '/admin/universite/gestionUniversite') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterUniversiteController::ajouterUniversiteAction',  '_route' => 'cestom_admin_ajouter_universite',);
                }

                // cestom_admin_modifier_universite
                if (0 === strpos($pathinfo, '/admin/universite/modifierUniversite') && preg_match('#^/admin/universite/modifierUniversite/(?P<iduniversite>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_universite')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierUniversiteController::modifierUniversiteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/ville')) {
                if (0 === strpos($pathinfo, '/admin/villeMembre')) {
                    // cestom_admin_ajouter_ville_membre
                    if (0 === strpos($pathinfo, '/admin/villeMembre/gestionVilleMembre') && preg_match('#^/admin/villeMembre/gestionVilleMembre/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_ajouter_ville_membre')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterVilleMembreController::ajouterVilleMembreAction',));
                    }

                    // cestom_admin_modifier_ville_membre
                    if (0 === strpos($pathinfo, '/admin/villeMembre/modifierVilleMembre') && preg_match('#^/admin/villeMembre/modifierVilleMembre/(?P<idmembre>[^/]++)/(?P<idvillemembre>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_ville_membre')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierVilleMembreController::modifierVilleMembreAction',));
                    }

                }

                // cestom_admin_ajouter_bureau
                if ($pathinfo === '/admin/ville/ajouterBureau') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterBureauController::ajouterBureauAction',  '_route' => 'cestom_admin_ajouter_bureau',);
                }

            }

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

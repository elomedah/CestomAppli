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

        // cestom_login_homepage
        if ($pathinfo === '/login/redirect/login') {
            return array (  '_controller' => 'CestomLoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cestom_login_homepage',);
        }

        if (0 === strpos($pathinfo, '/cms')) {
            if (0 === strpos($pathinfo, '/cms/article')) {
                // cestomarticlebundle_article
                if (rtrim($pathinfo, '/') === '/cms/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cestomarticlebundle_article');
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::indexAction',  '_route' => 'cestomarticlebundle_article',);
                }

                // cestomarticlebundle_article_show
                if (preg_match('#^/cms/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_article_show')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::showAction',));
                }

                // cestomarticlebundle_article_new
                if ($pathinfo === '/cms/article/new') {
                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::newAction',  '_route' => 'cestomarticlebundle_article_new',);
                }

                // cestomarticlebundle_article_create
                if ($pathinfo === '/cms/article/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cestomarticlebundle_article_create;
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::createAction',  '_route' => 'cestomarticlebundle_article_create',);
                }
                not_cestomarticlebundle_article_create:

                // cestomarticlebundle_article_edit
                if (preg_match('#^/cms/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_article_edit')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::editAction',));
                }

                // cestomarticlebundle_article_update
                if (preg_match('#^/cms/article/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cestomarticlebundle_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_article_update')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::updateAction',));
                }
                not_cestomarticlebundle_article_update:

                // cestomarticlebundle_article_delete
                if (preg_match('#^/cms/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cestomarticlebundle_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_article_delete')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_cestomarticlebundle_article_delete:

            }

            if (0 === strpos($pathinfo, '/cms/pays')) {
                // pays
                if (rtrim($pathinfo, '/') === '/cms/pays') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pays');
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::indexAction',  '_route' => 'pays',);
                }

                // pays_show
                if (preg_match('#^/cms/pays/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_show')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::showAction',));
                }

                // pays_new
                if ($pathinfo === '/cms/pays/new') {
                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::newAction',  '_route' => 'pays_new',);
                }

                // pays_create
                if ($pathinfo === '/cms/pays/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pays_create;
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::createAction',  '_route' => 'pays_create',);
                }
                not_pays_create:

                // pays_edit
                if (preg_match('#^/cms/pays/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_edit')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::editAction',));
                }

                // pays_update
                if (preg_match('#^/cms/pays/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pays_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_update')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::updateAction',));
                }
                not_pays_update:

                // pays_delete
                if (preg_match('#^/cms/pays/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pays_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_delete')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\PaysController::deleteAction',));
                }
                not_pays_delete:

            }

            if (0 === strpos($pathinfo, '/cms/categorie')) {
                // cestomarticlebundle_categorie
                if (rtrim($pathinfo, '/') === '/cms/categorie') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cestomarticlebundle_categorie');
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::indexAction',  '_route' => 'cestomarticlebundle_categorie',);
                }

                // cestomarticlebundle_categorie_show
                if (preg_match('#^/cms/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_categorie_show')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::showAction',));
                }

                // cestomarticlebundle_categorie_new
                if ($pathinfo === '/cms/categorie/new') {
                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::newAction',  '_route' => 'cestomarticlebundle_categorie_new',);
                }

                // cestomarticlebundle_categorie_create
                if ($pathinfo === '/cms/categorie/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cestomarticlebundle_categorie_create;
                    }

                    return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::createAction',  '_route' => 'cestomarticlebundle_categorie_create',);
                }
                not_cestomarticlebundle_categorie_create:

                // cestomarticlebundle_categorie_edit
                if (preg_match('#^/cms/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_categorie_edit')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::editAction',));
                }

                // cestomarticlebundle_categorie_update
                if (preg_match('#^/cms/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cestomarticlebundle_categorie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_categorie_update')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::updateAction',));
                }
                not_cestomarticlebundle_categorie_update:

                // cestomarticlebundle_categorie_delete
                if (preg_match('#^/cms/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cestomarticlebundle_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_categorie_delete')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_cestomarticlebundle_categorie_delete:

            }

        }

        // cestom_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cestom_home');
            }

            return array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\CmsController::indexAction',  '_route' => 'cestom_home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // cestom_user_homepage
            if ($pathinfo === '/user/monCompte') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionCompteController::gestionCompteAction',  '_route' => 'cestom_user_homepage',);
            }

            // cestom_user_gestion_formation
            if ($pathinfo === '/user/Formations') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionFormationController::gestionFormationAction',  '_route' => 'cestom_user_gestion_formation',);
            }

            // cestom_user_delete_formation
            if (0 === strpos($pathinfo, '/user/deleteFormation') && preg_match('#^/user/deleteFormation/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_delete_formation')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionFormationController::deleteFormationAction',));
            }

            // cestom_user_ajouter_formation
            if ($pathinfo === '/user/ajouterFormation') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionFormationController::ajouterFormationAction',  '_route' => 'cestom_user_ajouter_formation',);
            }

            // cestom_user_modifier_formation
            if (0 === strpos($pathinfo, '/user/modifierFormation') && preg_match('#^/user/modifierFormation/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_modifier_formation')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionFormationController::modifierFormationAction',));
            }

            // cestom_user_gestion_ville
            if ($pathinfo === '/user/Villes') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionVilleController::gestionVilleAction',  '_route' => 'cestom_user_gestion_ville',);
            }

            // cestom_user_delete_ville
            if (0 === strpos($pathinfo, '/user/deleteVille') && preg_match('#^/user/deleteVille/(?P<idvillemembre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_delete_ville')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionVilleController::deleteVilleAction',));
            }

            // cestom_user_ajouter_ville
            if ($pathinfo === '/user/ajouterVille') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionVilleController::ajouterVilleAction',  '_route' => 'cestom_user_ajouter_ville',);
            }

            // cestom_user_modifier_ville
            if (0 === strpos($pathinfo, '/user/modifierVille') && preg_match('#^/user/modifierVille/(?P<idvillemembre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_modifier_ville')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionVilleController::modifierVilleAction',));
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
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionMembreController::ajouterMembreAction',  '_route' => 'cestom_admin_ajouter_member',);
                }

                // cestom_admin_modifier_member
                if (0 === strpos($pathinfo, '/admin/membre/modifierMembre') && preg_match('#^/admin/membre/modifierMembre/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_member')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionMembreController::modifierMembreAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/formation')) {
                // cestom_admin_modifier_formation
                if (0 === strpos($pathinfo, '/admin/formation/modifierFormation') && preg_match('#^/admin/formation/modifierFormation/(?P<idmembre>[^/]++)/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionFormationController::modifierFormationMembreAction',));
                }

                // cestom_admin_ajouter_formation
                if (0 === strpos($pathinfo, '/admin/formation/ajouterFormation') && preg_match('#^/admin/formation/ajouterFormation/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_ajouter_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionFormationController::ajouterFormationMembreAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/ville')) {
                // cestom_admin_ajouter_ville
                if ($pathinfo === '/admin/ville/gestionVille') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionVilleController::ajouterVilleAction',  '_route' => 'cestom_admin_ajouter_ville',);
                }

                // cestom_admin_modifier_ville
                if (0 === strpos($pathinfo, '/admin/ville/modifierVille') && preg_match('#^/admin/ville/modifierVille/(?P<idville>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_ville')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionVilleController::modifierVilleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/universite')) {
                // cestom_admin_ajouter_universite
                if ($pathinfo === '/admin/universite/gestionUniversite') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionUniversiteController::ajouterUniversiteAction',  '_route' => 'cestom_admin_ajouter_universite',);
                }

                // cestom_admin_modifier_universite
                if (0 === strpos($pathinfo, '/admin/universite/modifierUniversite') && preg_match('#^/admin/universite/modifierUniversite/(?P<iduniversite>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_universite')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionUniversiteController::modifierUniversiteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/ville')) {
                if (0 === strpos($pathinfo, '/admin/villeMembre')) {
                    // cestom_admin_ajouter_ville_membre
                    if (0 === strpos($pathinfo, '/admin/villeMembre/gestionVilleMembre') && preg_match('#^/admin/villeMembre/gestionVilleMembre/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_ajouter_ville_membre')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionVilleMembreController::ajouterVilleMembreAction',));
                    }

                    // cestom_admin_modifier_ville_membre
                    if (0 === strpos($pathinfo, '/admin/villeMembre/modifierVilleMembre') && preg_match('#^/admin/villeMembre/modifierVilleMembre/(?P<idmembre>[^/]++)/(?P<idvillemembre>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_ville_membre')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionVilleMembreController::modifierVilleMembreAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ville/bureau')) {
                    // cestom_admin_ajouter_bureau_ville
                    if ($pathinfo === '/admin/ville/bureau/ajouterBureau') {
                        return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBureauController::ajouterBureauAction',  '_route' => 'cestom_admin_ajouter_bureau_ville',);
                    }

                    // cestom_admin_modifier_bureau_ville
                    if (0 === strpos($pathinfo, '/admin/ville/bureau/modifierBureau') && preg_match('#^/admin/ville/bureau/modifierBureau/(?P<idbureau>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_bureau_ville')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBureauController::modifierBureauAction',));
                    }

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

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/af6ed8a')) {
            // _assetic_af6ed8a
            if ($pathinfo === '/css/af6ed8a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6ed8a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_af6ed8a',);
            }

            if (0 === strpos($pathinfo, '/css/af6ed8a_')) {
                // _assetic_af6ed8a_0
                if ($pathinfo === '/css/af6ed8a_accueilStyles_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6ed8a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_af6ed8a_0',);
                }

                if (0 === strpos($pathinfo, '/css/af6ed8a_owl.')) {
                    // _assetic_af6ed8a_1
                    if ($pathinfo === '/css/af6ed8a_owl.carousel_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6ed8a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_af6ed8a_1',);
                    }

                    if (0 === strpos($pathinfo, '/css/af6ed8a_owl.t')) {
                        // _assetic_af6ed8a_2
                        if ($pathinfo === '/css/af6ed8a_owl.transitions_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6ed8a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_af6ed8a_2',);
                        }

                        // _assetic_af6ed8a_3
                        if ($pathinfo === '/css/af6ed8a_owl.theme_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af6ed8a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_af6ed8a_3',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/971d665')) {
            // _assetic_971d665
            if ($pathinfo === '/js/971d665.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '971d665',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_971d665',);
            }

            // _assetic_971d665_0
            if ($pathinfo === '/js/971d665_owl.carousel.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '971d665',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_971d665_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/f78f4db')) {
                // _assetic_f78f4db
                if ($pathinfo === '/css/f78f4db.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78f4db',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f78f4db',);
                }

                // _assetic_f78f4db_0
                if ($pathinfo === '/css/f78f4db_accueilStyles_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f78f4db',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f78f4db_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/6b5104b')) {
                // _assetic_6b5104b
                if ($pathinfo === '/css/6b5104b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6b5104b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6b5104b',);
                }

                if (0 === strpos($pathinfo, '/css/6b5104b_')) {
                    // _assetic_6b5104b_0
                    if ($pathinfo === '/css/6b5104b_accueilStyles_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6b5104b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6b5104b_0',);
                    }

                    // _assetic_6b5104b_1
                    if ($pathinfo === '/css/6b5104b_statuts_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6b5104b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6b5104b_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/d10e26c')) {
                // _assetic_d10e26c
                if ($pathinfo === '/images/d10e26c.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd10e26c',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_d10e26c',);
                }

                // _assetic_d10e26c_0
                if ($pathinfo === '/images/d10e26c_logo-cestom-entete_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd10e26c',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_d10e26c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/4ced26d')) {
                // _assetic_4ced26d
                if ($pathinfo === '/images/4ced26d.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4ced26d',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_4ced26d',);
                }

                // _assetic_4ced26d_0
                if ($pathinfo === '/images/4ced26d_logo-cestom-footer_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4ced26d',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_4ced26d_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/ec27934')) {
            // _assetic_ec27934
            if ($pathinfo === '/css/ec27934.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ec27934',);
            }

            if (0 === strpos($pathinfo, '/css/ec27934_')) {
                if (0 === strpos($pathinfo, '/css/ec27934_bootstrap')) {
                    // _assetic_ec27934_0
                    if ($pathinfo === '/css/ec27934_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ec27934_0',);
                    }

                    // _assetic_ec27934_1
                    if ($pathinfo === '/css/ec27934_bootstrap-theme.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ec27934_1',);
                    }

                }

                // _assetic_ec27934_2
                if ($pathinfo === '/css/ec27934_font-awesome.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_ec27934_2',);
                }

                // _assetic_ec27934_3
                if ($pathinfo === '/css/ec27934_colorbox_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_ec27934_3',);
                }

                // _assetic_ec27934_4
                if ($pathinfo === '/css/ec27934_accueilStyles_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec27934',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_ec27934_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/afbcea7')) {
            // _assetic_afbcea7
            if ($pathinfo === '/js/afbcea7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'afbcea7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_afbcea7',);
            }

            if (0 === strpos($pathinfo, '/js/afbcea7_')) {
                // _assetic_afbcea7_0
                if ($pathinfo === '/js/afbcea7_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'afbcea7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_afbcea7_0',);
                }

                // _assetic_afbcea7_1
                if ($pathinfo === '/js/afbcea7_script_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'afbcea7',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_afbcea7_1',);
                }

                // _assetic_afbcea7_2
                if ($pathinfo === '/js/afbcea7_jquery.colorbox-min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'afbcea7',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_afbcea7_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/e7a029c')) {
            // _assetic_e7a029c
            if ($pathinfo === '/images/e7a029c.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a029c',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_e7a029c',);
            }

            // _assetic_e7a029c_0
            if ($pathinfo === '/images/e7a029c_icone-site-cestom_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a029c',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_e7a029c_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/e9e056b')) {
            // _assetic_e9e056b
            if ($pathinfo === '/css/e9e056b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9e056b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e9e056b',);
            }

            if (0 === strpos($pathinfo, '/css/e9e056b_')) {
                if (0 === strpos($pathinfo, '/css/e9e056b_bootstrap')) {
                    // _assetic_e9e056b_0
                    if ($pathinfo === '/css/e9e056b_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9e056b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e9e056b_0',);
                    }

                    // _assetic_e9e056b_1
                    if ($pathinfo === '/css/e9e056b_bootstrap-theme.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9e056b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e9e056b_1',);
                    }

                }

                // _assetic_e9e056b_2
                if ($pathinfo === '/css/e9e056b_font-awesome.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9e056b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e9e056b_2',);
                }

                // _assetic_e9e056b_3
                if ($pathinfo === '/css/e9e056b_colorbox_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9e056b',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_e9e056b_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // cestom_test_homepage
        if (0 === strpos($pathinfo, '/sylvain') && preg_match('#^/sylvain/(?P<name>[^/]++)/(?P<prenom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_test_homepage')), array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/page')) {
            // cestom_test_Pages2
            if ($pathinfo === '/page2') {
                return array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\Page2Controller::page2Action',  '_route' => 'cestom_test_Pages2',);
            }

            // cestom_test_Pages1
            if ($pathinfo === '/page1') {
                return array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\Page1Controller::page1Action',  '_route' => 'cestom_test_Pages1',);
            }

        }

        // cestom_test_statuts
        if ($pathinfo === '/statuts') {
            return array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\StatutsController::statutsAction',  '_route' => 'cestom_test_statuts',);
        }

        // cestom_test_gestion_experience
        if ($pathinfo === '/gestionexperience') {
            return array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\GestionExperienceController::listeExperienceAction',  '_route' => 'cestom_test_gestion_experience',);
        }

        // cestom_user_delete_experience
        if (0 === strpos($pathinfo, '/deleteExperience') && preg_match('#^/deleteExperience/(?P<idexperience>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_delete_experience')), array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\GestionExperienceController::deleteExperienceAction',));
        }

        // cestom_user_ajouter_experience
        if ($pathinfo === '/ajouterExperience') {
            return array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\GestionExperienceController::ajouterExperienceAction',  '_route' => 'cestom_user_ajouter_experience',);
        }

        // cestom_user_modifier_experience
        if (0 === strpos($pathinfo, '/modifierExperience') && preg_match('#^/modifierExperience/(?P<idexperience>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_modifier_experience')), array (  '_controller' => 'Cestom\\Bundle\\TestBundle\\Controller\\GestionExperienceController::modifierExperienceAction',));
        }

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

                // cestomarticlebundle_article_showPublic
                if (preg_match('#^/cms/article/(?P<id>[^/]++)/showPublic$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestomarticlebundle_article_showPublic')), array (  '_controller' => 'Cestom\\ArticleBundle\\Controller\\ArticleController::showPublicAction',));
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

            // cestom_user_image
            if ($pathinfo === '/user/image/profil') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionCompteController::gestionImageAction',  '_route' => 'cestom_user_image',);
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

            // cestom_user_ajouter_fichier
            if ($pathinfo === '/user/gestionBourse') {
                return array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionBourseController::ajouterDocBourseAction',  '_route' => 'cestom_user_ajouter_fichier',);
            }

            // cestom_user_supprimer_fichier
            if (0 === strpos($pathinfo, '/user/deleteFichier') && preg_match('#^/user/deleteFichier/(?P<idbourse>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_user_supprimer_fichier')), array (  '_controller' => 'Cestom\\UserBundle\\Controller\\GestionBourseController::deleteDocBourseAction',));
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

            if (0 === strpos($pathinfo, '/admin/bourse')) {
                // cestom_admin_attente_bourse
                if ($pathinfo === '/admin/bourse/attenteValidation') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBourseController::listeAttenteBourseAction',  '_route' => 'cestom_admin_attente_bourse',);
                }

                // cestom_admin_valide_liste_bourse
                if ($pathinfo === '/admin/bourse/valide') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBourseController::listeValideBourseAction',  '_route' => 'cestom_admin_valide_liste_bourse',);
                }

                // cestom_admin_rejete_liste_bourse
                if ($pathinfo === '/admin/bourse/rejete') {
                    return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBourseController::listeRejeteBourseAction',  '_route' => 'cestom_admin_rejete_liste_bourse',);
                }

                if (0 === strpos($pathinfo, '/admin/bourse/valid')) {
                    // cestom_admin_valide_bourse
                    if (0 === strpos($pathinfo, '/admin/bourse/validation') && preg_match('#^/admin/bourse/validation/(?P<idbourse>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_valide_bourse')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBourseController::validerBourseAction',));
                    }

                    // cestom_admin_valide_mail
                    if ($pathinfo === '/admin/bourse/validemail') {
                        return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionBourseController::validMailAction',  '_route' => 'cestom_admin_valide_mail',);
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

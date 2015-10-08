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
            // cestom_admin_homepage
            if ($pathinfo === '/admin/gestionMembre') {
                return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionMembreController::membreAction',  '_route' => 'cestom_admin_homepage',);
            }

            // cestom_admin_ajouter_member
            if ($pathinfo === '/admin/ajouterMembre') {
                return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterMembreController::ajouterMembreAction',  '_route' => 'cestom_admin_ajouter_member',);
            }

            if (0 === strpos($pathinfo, '/admin/modifier')) {
                // cestom_admin_modifier_member
                if (0 === strpos($pathinfo, '/admin/modifierMembre') && preg_match('#^/admin/modifierMembre/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_member')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierMembreController::modifierMembreAction',));
                }

                // cestom_admin_modifier_formation
                if (0 === strpos($pathinfo, '/admin/modifierFormation') && preg_match('#^/admin/modifierFormation/(?P<idmembre>[^/]++)/(?P<idformation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierFormationController::modifierFormationMembreAction',));
                }

            }

            // cestom_admin_ajouter_formation
            if (0 === strpos($pathinfo, '/admin/ajouterFormation') && preg_match('#^/admin/ajouterFormation/(?P<idmembre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_ajouter_formation')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterFormationController::ajouterFormationMembreAction',));
            }

            // cestom_admin_ajouter_ville
            if (rtrim($pathinfo, '/') === '/admin/ville') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cestom_admin_ajouter_ville');
                }

                return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterVilleController::ajouterVilleAction',  '_route' => 'cestom_admin_ajouter_ville',);
            }

            // cestom_admin_modifier_ville
            if (0 === strpos($pathinfo, '/admin/modifierVille') && preg_match('#^/admin/modifierVille/(?P<idville>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_ville')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierVilleController::modifierVilleAction',));
            }

            // cestom_admin_ajouter_universite
            if (rtrim($pathinfo, '/') === '/admin/universite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cestom_admin_ajouter_universite');
                }

                return array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterUniversiteController::ajouterUniversiteAction',  '_route' => 'cestom_admin_ajouter_universite',);
            }

            // cestom_admin_modifier_universite
            if (0 === strpos($pathinfo, '/admin/modifierUniversite') && preg_match('#^/admin/modifierUniversite/(?P<iduniversite>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cestom_admin_modifier_universite')), array (  '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierUniversiteController::modifierUniversiteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

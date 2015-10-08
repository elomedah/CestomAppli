<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'cestom_store_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cestom\\StoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cestom\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\GestionMembreController::membreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/gestionMembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_ajouter_member' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterMembreController::ajouterMembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajouterMembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_modifier_member' => array (  0 =>   array (    0 => 'idmembre',  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierMembreController::modifierMembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'text',      1 => '/admin/modifierMembre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_modifier_formation' => array (  0 =>   array (    0 => 'idmembre',    1 => 'idformation',  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierFormationController::modifierFormationMembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idformation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    2 =>     array (      0 => 'text',      1 => '/admin/modifierFormation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_ajouter_formation' => array (  0 =>   array (    0 => 'idmembre',  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterFormationController::ajouterFormationMembreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmembre',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ajouterFormation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_ajouter_ville' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterVilleController::ajouterVilleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ville/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_modifier_ville' => array (  0 =>   array (    0 => 'idville',  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierVilleController::modifierVilleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idville',    ),    1 =>     array (      0 => 'text',      1 => '/admin/modifierVille',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_ajouter_universite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\AjouterUniversiteController::ajouterUniversiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/universite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cestom_admin_modifier_universite' => array (  0 =>   array (    0 => 'iduniversite',  ),  1 =>   array (    '_controller' => 'Cestom\\AdminBundle\\Controller\\ModifierUniversiteController::modifierUniversiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduniversite',    ),    1 =>     array (      0 => 'text',      1 => '/admin/modifierUniversite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

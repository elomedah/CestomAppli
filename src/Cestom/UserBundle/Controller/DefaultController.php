<?php

namespace Cestom\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CestomUserBundle:Default:index.html.twig', array('name' => $name));
    }
}

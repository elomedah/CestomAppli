<?php

namespace Cestom\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CestomStoreBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Cestom\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Page1Controller extends Controller{

    public function page1Action(){	
        return $this->render('CestomTestBundle:PagesTest:page1.html.twig');
    }
}

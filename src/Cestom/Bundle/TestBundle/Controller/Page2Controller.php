<?php

namespace Cestom\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Page2Controller extends Controller{

    public function page2Action(){	
        return $this->render('CestomTestBundle:PagesTest:page2.html.twig');
    }
}

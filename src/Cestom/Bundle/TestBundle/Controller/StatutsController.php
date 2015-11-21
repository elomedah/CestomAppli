<?php

namespace Cestom\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatutsController extends Controller
{
    public function statutsAction(){
		return $this->render('CestomTestBundle:StatutsCestom:statuts.html.twig');
    }
	
}

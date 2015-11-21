<?php

namespace Cestom\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
   
	public function indexAction($name,$prenom){	
	
	$test = null;
		if($name =="Ami")$test = $name." , ton prénom est: ";
		else $test="Vous n'êtes pas Ami";
        return $this->render('CestomTestBundle:Default:index.html.twig', array('nom' => $test,'prenom' => $prenom));
    }

    public function page1Action(){	
        return $this->render('CestomTestBundle:Default:page1.html.twig');
    }
    public function page2Action(){	
        return $this->render('CestomTestBundle:Default:page2.html.twig');
    }
	
}

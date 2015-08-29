<?php

namespace Cestom\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cestom\StoreBundle\Entity\VilleMaroc;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
	{
   	 $ville = new VilleMaroc();
    	
    	$ville->setNomville('Rabat');
  
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($ville);
    	$em->flush();

        return $this->render('CestomAdminBundle:Default:index.html.twig', array('ville' => $ville));
	}
}







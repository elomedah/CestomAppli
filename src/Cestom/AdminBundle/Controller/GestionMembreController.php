<?php

namespace Cestom\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cestom\StoreBundle\Entity\VilleMaroc;
use Symfony\Component\HttpFoundation\Response;

class GestionMembreController extends Controller
{
    public function membreAction()
	{

$em = $this->getDoctrine()->getManager();
 $membres = $em->getRepository('CestomStoreBundle:Membre')
	       ->findAll();

   return $this->render('CestomAdminBundle:GestionMembre:gestionMembre.html.twig', array('membres' => $membres));
	}
}







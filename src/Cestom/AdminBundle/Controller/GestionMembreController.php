<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\VilleMembre;
use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cestom\StoreBundle\Entity\VilleMaroc;
use Symfony\Component\HttpFoundation\Response;

class GestionMembreController extends Controller
{

// controlleur sollicité apres la connexion
// selon le profil on redirige sur la page de gestion ou sur le compte de l'utilisateur
    public function membreAction()
	{
//TO DO ACTIVATE FILTER
/*if (isset ($_POST['ville'])) {
  $ville = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Ville')
                        ->findOneBynomville(htmlspecialchars($_POST['ville']));
        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidville($ville->getIdville());
}*/



$em = $this->getDoctrine()->getManager();
 $membres = $em->getRepository('CestomStoreBundle:Membre')
	       ->findAll();

   return $this->render('CestomAdminBundle:GestionMembre:gestionMembre.html.twig', array('membres' => $membres));


	}
}







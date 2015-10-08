<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\VilleMembre;
use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ModifierVilleMembreController extends Controller
{
  public function modifierVilleMembreAction(Request $request,$idmembre,$idvillemembre
)
  {
    $em = $this->getDoctrine()->getManager();

        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidmembre($idmembre);
    $villemembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->find($idvillemembre);
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($villemembre)
      ->add('adresse',      'textarea', array( 'required' => true))
      ->add('idville', 'choice',array('required' => true, 'mapped'=> false ,'choices' => $this->collectVille()))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
if (isset ($_POST['dateDebut'])) {
   $villemembre->setDateDebut($_POST['dateDebut']);
}

$membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByidmembre($idmembre);
       $villemembre->setIdmembre($membre);
  $ville = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Ville')
                        ->findOneBynomville(htmlspecialchars($_POST['form']['idville']));
      $villemembre->setIdville($ville);
      $em->persist($villemembre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Ville du membre modifiée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville_membre',array('idmembre'=>$idmembre)));
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de modification de la ville du membre');
    return $this->render('CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebut'=>$villemembre->getDateDebut(),'villesmembre'=> $villesmembre,'idvillemembre'=>$idvillemembre
    ));
}

}
  
     return $this->render('CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebut'=>$villemembre->getDateDebut(),'villesmembre'=> $villesmembre,'idvillemembre'=>$idvillemembre
    ));
  }

public  function collectVille(){
 $repository = $this->getDoctrine()
		->getManager()
		->getRepository('CestomStoreBundle:Ville');
	
	    $villes=$repository->findAll();

  $listvilles= array(); 

   foreach ( $villes as $listville){
    $listvilles[$listville->getNomville()] =$listville->getNomville(); 
  
}
return $listvilles ;
}
}

<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ModifierMembreController extends Controller
{
  public function modifierMembreAction(Request $request,$idmembre)
  {
     $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->find($idmembre);
    
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($membre)
      ->add('emailMembre',      'email', array( 'required' => false))
      ->add('username',     'text', array( 'required' => false))
      ->add('nomMembre',   'text', array('required' => false))
      ->add('prenomMembre',    'text', array( 'required' => false))
      ->add('numeroPassportMembre',     'text', array( 'required' => false))
      ->add('promotionMembre',     'text', array('required' => false))
      ->add('contactUrgence',     'textarea', array( 'required' => false))
      ->add('infoComplementmembre',     'textarea', array( 'required' => false))
      ->add('photoMimMembre',     'file', array( 'required' => false))
      ->add('username',     'text', array( 'required' => false)) 
      ->getForm();

// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $membre->setDateNaissanceMembre(htmlspecialchars($_POST['datenaissance']))   ;
      $membre->setDateEtabMembre(htmlspecialchars($_POST['dateemission']))   ;
      $membre->setDateExpiMembre(htmlspecialchars($_POST['datereception']))   ;
      $membre->setSexe($_POST['sexe']);
 try {
      $em->persist($membre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Utilisateur modifié avec succès');
return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=> $idmembre,'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()));
  
} catch (\Exception $e) {
     $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification : Ces informations existent déjà pour un autre membre');
    return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=> $idmembre,'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()
  
    ));
    }  

  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification');
    return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=> $idmembre,'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()
  
    ));
}

}
   return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=> $idmembre,'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()
    ));

}

}

<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AjouterMembreController extends Controller
{
  public function ajouterMembreAction(Request $request)
  {
    // On crée un objet membre
    $membre = new Membre();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($membre)
      ->add('emailMembre',      'email', array( 'required' => true))
      ->add('username',     'text', array( 'required' => true))
      ->add('nomMembre',   'text', array('required' => true))
      ->add('prenomMembre',    'text', array( 'required' => true))
      ->add('numeroPassportMembre',     'text', array( 'required' => true))
      ->add('promotionMembre',     'text', array('required' => true))
      ->add('contactUrgence',     'textarea', array( 'required' => true))
      ->add('infoComplementmembre',     'textarea', array( 'required' => false))
      ->add('photoMimMembre',     'file', array( 'required' => false))
      ->add('username',     'text', array( 'required' => true)) 
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
      if ( isset($_POST['sexe']) ) { $membre->setSexe($_POST['sexe']) ;}
     

try {
       $em->persist($membre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Utilisateur ajouté avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_homepage'));

}
 catch (\Exception $e) {
$request->getSession()->getFlashBag()->add('messageerror', 'Utilisateur non ajouté avec succès. Membre existe déjà (email).');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
      'form' => $form->createView(),'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()));
  
}


  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Utilisateur non ajouté avec succès');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
      'form' => $form->createView(),'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()));
  
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
      'form' => $form->createView(),'sexe'=> $membre->getSexe(),'datenaissance'=>$membre->getDateNaissanceMembre(),'dateemission'=>$membre->getDateEtabMembre(),'dateexpiration'=>$membre->getDateExpiMembre()));
  
  }
}

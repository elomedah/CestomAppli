<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Cestom\StoreBundle\Entity\Fosuser;
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

      ->add('nomMembre',   'text', array('required' => true))
      ->add('prenomMembre',    'text', array( 'required' => true))
      ->add('numeroPassportMembre',     'text', array( 'required' => true))
      ->add('promotionMembre',     'text', array('required' => true))
      ->add('contactUrgence',     'textarea', array( 'required' => true))
      ->add('infoComplementmembre',     'textarea', array( 'required' => false))
      ->add('photoMimMembre',     'file', array( 'required' => false))
       ->add('telephonefirst',     'text', array( 'required' => false))
       ->add('telephonesecond',     'text', array( 'required' => false))
      ->add('dernierLyceeFrequente',     'text', array( 'required' => true)) 
      ->add('username', 'choice', array('mapped' => false,'choices' => $this->collectUsername()))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
$em = $this->getDoctrine()->getManager();
	if (isset($_POST['form']['username']) ){
   $user = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Fosuser')
                        ->findOneByusername(htmlspecialchars($_POST['form']['username']));
}else{
 $user= null;
}
      
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      
      
      $membre->setDateNaissanceMembre(htmlspecialchars($_POST['datenaissance']))   ;
      $membre->setDateEtabMembre(htmlspecialchars($_POST['dateemission']))   ;
      $membre->setDateExpiMembre(htmlspecialchars($_POST['datereception']))   ;
      if ( isset($_POST['sexe']) ) { $membre->setSexe($_POST['sexe']) ;}
     

try {

       $membre->setId($user);
       $em->persist($membre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Utilisateur ajouté avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_homepage'));

}
 catch (\Exception $e) {
$request->getSession()->getFlashBag()->add('messageerror', 'Utilisateur non ajouté. Le compte du membre n\'est pas activé ou le membre existe déjà');
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

public  function collectUsername(){
 $repository = $this->getDoctrine()
		->getManager()
		->getRepository('CestomStoreBundle:Fosuser');
	
	    $users=$repository->findAll();

  $listusers= array(); 

   foreach ( $users as $user){
    $listusers[$user->getUsername()] =$user->getUsername(); 
  
}
return $listusers ;
}
}

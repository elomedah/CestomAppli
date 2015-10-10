<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ModifierFormationController extends Controller
{
  public function modifierFormationMembreAction(Request $request,$idformation,$idmembre
)
  {
    $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($idmembre);
    $formation = $em->getRepository('CestomStoreBundle:Formation')
                ->find($idformation);
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($formation)
      ->add('libelleFormation',      'text', array( 'required' => false))
      ->add('iduniv', 'choice',array('mapped'=> false ,'choices' => $this->collectUniversite()))
      ->add('diplomeViseFormation',     'text', array( 'required' => false))
      ->add('programmeBourse',   'text', array('required' => false))
      ->add('dureeFormation',     'text', array( 'required' => false))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
if (isset ($_POST['dateDebutFormation'])) {
}
   $formation->setDateDebutFormation($_POST['dateDebutFormation']);
  $universite = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Universite')
                        ->findOneBynomuniv(htmlspecialchars($_POST['form']['iduniv']));
      $formation->setIduniv($universite);
 try {
      $em->persist($formation);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Formation modifiée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_formation',array('idmembre'=>$idmembre,'idformation'=>$idformation)));
} catch (\Exception $e) {
      $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification de la formation : Cette formation existe déjà');
    return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebutFormation'=>$formation->getDateDebutFormation(),'formations'=> $formations,'idformation'=>$idformation  ));
    }  
}else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification de la formation');
    return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebutFormation'=>$formation->getDateDebutFormation(),'formations'=> $formations,'idformation'=>$idformation
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebutFormation'=>$formation->getDateDebutFormation(), 'formations'=> $formations,'idformation'=>$idformation
    ));
  }

public  function collectUniversite(){
 $repository = $this->getDoctrine()
		->getManager()
		->getRepository('CestomStoreBundle:Universite');
	
	    $univs=$repository->findAll();

  $listuniv= array(); 

   foreach ( $univs as $univ){
    $listuniv[$univ->getNomuniv()] =$univ->getNomuniv(); 
  
}
return $listuniv ;
}
}

<?php
namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AjouterFormationController extends Controller
{
  public function ajouterFormationMembreAction(Request $request,$idmembre
)
  {
    $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($idmembre);
    $formation = new Formation();
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
$membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByidmembre($idmembre);
       $formation->setIdmembre($membre);
  $universite = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Universite')
                        ->findOneBynomuniv(htmlspecialchars($_POST['form']['iduniv']));
      $formation->setIduniv($universite);
      $em->persist($formation);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Formation ajoutée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_formation',array('idmembre'=>$idmembre)));
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la formation');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebutFormation'=>$formation->getDateDebutFormation(),'formations'=> $formations
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig', array(
      'form' => $form->createView(),'idmembre'=>$idmembre,'dateDebutFormation'=>$formation->getDateDebutFormation(), 'formations'=> $formations
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

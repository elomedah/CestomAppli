<?php
namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Formation;
use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class GestionFormationController extends Controller
{
  public function gestionFormationAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($membre->getIdmembre());
$formation = new Formation();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($formation)
      ->add('libelleFormation',      'text', array( 'required' => false))
      ->add('iduniv', 'choice',array('mapped'=> false ,'choices' => $this->collectUniversite()))
      ->add('diplomeViseFormation',     'text', array( 'required' => false))
      ->add('programmeBourse',   'text', array('required' => false))
      ->add('dureeFormation',     'text', array( 'required' => false))
      ->getForm();
  
    return $this->render('CestomUserBundle:GestionFormation:gestionFormation.html.twig', array(
      'form'=>$form->createView(),'formations'=> $formations,'dateDebutFormation'=>$formation->getDateDebutFormation()
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


public function deleteFormationAction(Request $request,$idformation)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
        $qb = $em->createQueryBuilder('f');
            $qb->select('f')
                    ->from('CestomStoreBundle:Formation', 'f')
                    ->where("f.idFormation =:idFormation AND f.idmembre =:idmembre")
                    ->setParameter('idFormation', $idformation)
                     ->setParameter('idmembre', $membre->getIdmembre());

             $query = $qb->getQuery();
            $formation = $query->getSingleResult();
           try {
            $em->remove($formation);

            $em->flush();

       $request->getSession()->getFlashBag()->add('messagesucces', 'Formation supprimée avec succès');
      return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));

} catch ( \Exception $e) {
  $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer la formation ');
      return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));

}
       }


public function ajouterFormationAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($membre->getIdmembre());
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
   $formation->setDateDebutFormation($_POST['dateDebutFormation']);
}

       $formation->setIdmembre($membre);
  $universite = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Universite')
                        ->findOneBynomuniv(htmlspecialchars($_POST['form']['iduniv']));
      $formation->setIduniv($universite);
try {
      $em->persist($formation);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Formation ajoutée avec succès');


      return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));

}
 catch (\Exception $e) {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la formation');
$request->getSession()->getFlashBag()->add('messageerror', 'Duplication de la formation pour le même membre');
    return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
      'form' => $form->createView(),'dateDebutFormation'=>$formation->getDateDebutFormation(),'formations'=> $formations
    ));
}
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la formation');
    return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
      'form' => $form->createView(),'dateDebutFormation'=>$formation->getDateDebutFormation(),'formations'=> $formations
    ));
}

}
  
    return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
      'form' => $form->createView(),'dateDebutFormation'=>$formation->getDateDebutFormation(), 'formations'=> $formations
    ));
  }


public function modifierFormationAction(Request $request,$idformation)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
   $qb = $em->createQueryBuilder('f');
            $qb->select('f')
                    ->from('CestomStoreBundle:Formation', 'f')
                    ->where("f.idFormation =:idFormation AND f.idmembre =:idmembre")
                    ->setParameter('idFormation', $idformation)
                     ->setParameter('idmembre', $membre->getIdmembre());

             $query = $qb->getQuery();
            $formation = $query->getSingleResult();
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
   $formation->setDateDebutFormation($_POST['dateDebutFormation']);
}

       $formation->setIdmembre($membre);
  $universite = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Universite')
                        ->findOneBynomuniv(htmlspecialchars($_POST['form']['iduniv']));
      $formation->setIduniv($universite);
try {
      $em->persist($formation);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Formation modifiéé avec succès');


      return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));

}
 catch (\Exception $e) {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de modfication de la formation');
$request->getSession()->getFlashBag()->add('messageerror', 'Duplication de la formation pour le même membre');
    return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
      'form' => $form->createView(),'idformation'=>$idformation,'dateDebutFormation'=>$formation->getDateDebutFormation()
    ));
}
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de modification de la formation');
    return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
      'form' => $form->createView(),'idformation'=>$idformation,'dateDebutFormation'=>$formation->getDateDebutFormation()
    ));
}

}
  
    return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
      'form' => $form->createView(),'idformation'=>$idformation,'dateDebutFormation'=>$formation->getDateDebutFormation()
    ));
  }

}

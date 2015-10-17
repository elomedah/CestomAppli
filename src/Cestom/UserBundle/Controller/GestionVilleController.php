<?php
namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\VilleMembre;
use Cestom\StoreBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class GestionVilleController extends Controller
{

public function gestionVilleAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

 $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidmembre($membre->getIdmembre());
    $villemembre = new VilleMembre();

    $form = $this->createFormBuilder($villemembre)
      ->add('adresse',      'textarea', array( 'required' => true))
      ->add('idville', 'choice',array('required' => true, 'mapped'=> false ,'choices' => $this->collectVille()))
      ->getForm();
  

     return $this->render('CestomUserBundle:GestionVille:gestionVille.html.twig', array(
      'form' => $form->createView(),'dateDebut'=>$villemembre->getDateDebut(),'villesmembre'=> $villesmembre
    ));
  }
  public function ajouterVilleAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

 $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
      
    $villemembre = new VilleMembre();
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


       $villemembre->setIdmembre($membre);
  $ville = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Ville')
                        ->findOneBynomville(htmlspecialchars($_POST['form']['idville']));
      $villemembre->setIdville($ville);
 try {
      $em->persist($villemembre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Ville ajoutée  avec succès');


      return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
      } catch (\Exception $e) {
       $request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la ville ');
       $request->getSession()->getFlashBag()->add('messageerror', 'Duplication de la donnée : veuillez vérifier les informations saisies');
    return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
      'form' => $form->createView(),'dateDebut'=>$villemembre->getDateDebut()
    ));
    }
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la ville');
    return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
      'form' => $form->createView(),'dateDebut'=>$villemembre->getDateDebut()
    ));
}

}
  
     return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
      'form' => $form->createView(),'dateDebut'=>$villemembre->getDateDebut()
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
public function deleteVilleAction(Request $request,$idvillemembre)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
        $qb = $em->createQueryBuilder('f');
            $qb->select('f')
                    ->from('CestomStoreBundle:VilleMembre', 'f')
                    ->where("f.idvillemembre =:idvillemembre AND f.idmembre =:idmembre")
                    ->setParameter('idvillemembre', $idvillemembre)
                     ->setParameter('idmembre', $membre->getIdmembre());

             $query = $qb->getQuery();
            $villemembre = $query->getSingleResult();
           try {
            $em->remove($villemembre);

            $em->flush();

       $request->getSession()->getFlashBag()->add('messagesucces', 'Ville supprimée avec succès');
      return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));

} catch ( \Exception $e) {
  $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer la ville  '.$e);
      return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));

}
       }




public function modifierVilleAction(Request $request,$idvillemembre)
  {
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
       
   $qb = $em->createQueryBuilder('f');
            $qb->select('f')
                    ->from('CestomStoreBundle:VilleMembre', 'f')
                    ->where("f.idvillemembre =:idvillemembre AND f.idmembre =:idmembre")
                    ->setParameter('idvillemembre', $idvillemembre)
                     ->setParameter('idmembre', $membre->getIdmembre());

             $query = $qb->getQuery();
            $villemembre = $query->getSingleResult();
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


       $villemembre->setIdmembre($membre);
  $ville = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CestomStoreBundle:Ville')
                        ->findOneBynomville(htmlspecialchars($_POST['form']['idville']));
      $villemembre->setIdville($ville);
 try {
      $em->persist($villemembre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('messagesucces', 'Ville modifiée  avec succès');


      return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
      } catch (\Exception $e) {
       $request->getSession()->getFlashBag()->add('messageerror', 'Echec de modification de la ville ');
       $request->getSession()->getFlashBag()->add('messageerror', 'Duplication de la donnée : veuillez vérifier les informations saisies');
    return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
      'form' => $form->createView(),'idvillemembre'=>$idvillemembre,'dateDebut'=>$villemembre->getDateDebut()
    ));
    }
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la ville');
    return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
      'form' => $form->createView(),'idvillemembre'=>$idvillemembre,'dateDebut'=>$villemembre->getDateDebut()
    ));
}

}
  
     return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
      'form' => $form->createView(),'idvillemembre'=>$idvillemembre,'dateDebut'=>$villemembre->getDateDebut()
    ));
  }


}

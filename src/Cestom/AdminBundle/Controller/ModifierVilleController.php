<?php
namespace Cestom\AdminBundle\Controller;


use Cestom\StoreBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ModifierVilleController extends Controller
{
  public function modifierVilleAction(Request $request,$idville)
  {
    $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('CestomStoreBundle:Ville')
                ->findAll();
    $ville = $em->getRepository('CestomStoreBundle:Ville')
                ->find($idville);
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($ville)
      ->add('nomville',      'text', array( 'required' => false))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
      $em->persist($ville);
 try {
      $em->flush();
      $request->getSession()->getFlashBag()->add('messagesucces', 'Ville modifiée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville'));
  } catch (\Exception $e) {
    
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de modification de la ville : ce nom de ville existe déjà');
    return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
      'form' => $form->createView(),'villes'=> $villes,'idville'=>$idville
    ));
    }}else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec de modification de la ville');
    return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
      'form' => $form->createView(),'villes'=> $villes,'idville'=>$idville
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
      'form' => $form->createView(), 'villes'=> $villes,'idville'=>$idville
    ));
  }
}

<?php
namespace Cestom\AdminBundle\Controller;


use Cestom\StoreBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AjouterVilleController extends Controller
{
  public function ajouterVilleAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('CestomStoreBundle:Ville')
                ->findAll();
    $ville = new Ville();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($ville)
      ->add('nomville',      'text', array( 'required' => true))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
 try {
      $em->persist($ville);
      $em->flush();
$request->getSession()->getFlashBag()->add('messagesucces', 'Ville ajoutée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville'));
      }
 catch (\Exception $e) {
       $request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la ville');
       $request->getSession()->getFlashBag()->add('messageerror', 'Duplication de la ville. Veuillez vérifier si la ville n\' existe déjà !!');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
      'form' => $form->createView(),'villes'=> $villes
    ));
    }



  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de la ville');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
      'form' => $form->createView(),'villes'=> $villes
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
      'form' => $form->createView(), 'villes'=> $villes
    ));
  }
}

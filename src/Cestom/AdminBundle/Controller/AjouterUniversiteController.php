<?php
namespace Cestom\AdminBundle\Controller;


use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AjouterUniversiteController extends Controller
{
  public function ajouterUniversiteAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

        $universites = $em->getRepository('CestomStoreBundle:Universite')
                ->findAll();
    $universite = new Universite();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($universite)
      ->add('nomuniv',      'text', array( 'required' => true))
      ->add('contactuniv',      'text', array( 'required' => false))
      ->add('addresseuniv',      'textarea', array( 'required' => false))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
      $em->persist($universite);
      $em->flush();
      $request->getSession()->getFlashBag()->add('messagesucces', 'Université ajoutée avec succès');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_universite'));
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout de l\' université');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig', array(
      'form' => $form->createView(), 'universites'=> $universites
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig', array(
      'form' => $form->createView(), 'universites'=> $universites
    ));
  }
}

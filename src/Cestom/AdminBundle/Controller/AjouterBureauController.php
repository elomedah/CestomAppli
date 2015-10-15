<?php
namespace Cestom\AdminBundle\Controller;


use Cestom\StoreBundle\Entity\BureauVille;
use Cestom\StoreBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AjouterBureauController extends Controller
{
  public function ajouterBureauAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

       $bureaux = $em->getRepository('CestomStoreBundle:BureauVille')
               ->findAll();
    $bureau = new BureauVille();

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->createFormBuilder($bureau)
      ->add('posteMembre',      'choice', array( 'required' => true,'choices' => $this->collectPoste()))
      ->add('idmembre',      'choice', array( 'required' => true,'choices' => $this->collectMembre()))
      ->add('idville',      'choice', array( 'required' => true,'choices' => $this->collectVille()))
      ->add('anneeScolaire',      'choice', array( 'required' => true,'choices' => $this->collectAnneeScolaire()))
      ->getForm();
  
// On récupère la requête
$request = $this->get('request');
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
       $form->bind($request);

      if ($form->isValid()) {
try{  
  

      $em->persist($bureau);
      $em->flush();
      $request->getSession()->getFlashBag()->add('messagesucces', 'Membre du Bureau ajouté avec succès ');


      return $this->redirect($this->generateUrl('cestom_admin_ajouter_bureau'));
}
 catch (\Exception $e) {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout du membre dans le bureau : Le membre occupe déjà cette fonction');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
      'form' => $form->createView(), 'bureaux'=>$bureaux
    ));
}
  }else {
$request->getSession()->getFlashBag()->add('messageerror', 'Echec d\'ajout du membre dans le bureau : Le membre occupe déjà cette fonction');
    return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
      'form' => $form->createView(), 'bureaux'=>$bureaux
    ));
}

}
  
    return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
      'form' => $form->createView(),'bureaux'=>$bureaux
    ));
  }


public  function collectVille(){
 $repository = $this->getDoctrine()
		->getManager()
		->getRepository('CestomStoreBundle:Ville');
	
	    $villes=$repository->findAll();

  $listvilles= array(); 

   foreach ( $villes as $listville){
    $listvilles[$listville->getNomville()] =$listville->getIdville() . " : " . $listville->getNomville(); 
  
}
return $listvilles ;
}

public  function collectMembre(){
 $repository = $this->getDoctrine()
		->getManager()
		->getRepository('CestomStoreBundle:Membre');
	
	    $membres=$repository->findAll();

  $listmembres= array(); 

   foreach ( $membres as $listmembre){
    $listmembres[$listmembre->getIdmembre()] =$listmembre->getIdmembre() . ": " . $listmembre->getNomMembre() . "  ". $listmembre->getPrenomMembre(); 
  
}
return $listmembres ;
}


public  function collectAnneeScolaire(){

   $anneeScolaire = array();
   for($i=0;$i<=10;$i++){ 
	if ( date("M") < 9 ) {
    $anneeScolaire[(date("Y")-$i) ."-". ( date("Y")+1-$i)]=(date("Y")-$i) ."-". ( date("Y")+1-$i); 
	} 
	else {
    $anneeScolaire[(date("Y")-1-$i) . ( date("Y")-$i)]=(date("Y")-1-$i) . ( date("Y")-$i); 
	}

}

return $anneeScolaire;
}

public  function collectPoste(){

   $postes = array();
   
    $postes['Président']=('Président') ; 
	
    $postes['Sécretaire']=('Sécretaire') ; 
	
return $postes;
}
}

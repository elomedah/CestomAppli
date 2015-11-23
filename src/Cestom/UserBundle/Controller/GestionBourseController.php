<?php

namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Bourse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class GestionBourseController extends Controller {

    /**
     * Formulaire d'ajout de fichier 
     */
    public function createFormBourse(Bourse $bourse) {
        $form = $this->createFormBuilder($bourse)
                 ->add('typeDoc', 'choice', array(
                       'required' => true, 'choices' => $this->collectTypeDoc()))
	        ->add('fichierBourse', 'vich_image', array('required' => true, 'allow_delete'  => false , 'download_link' => false))
                ->getForm();
        return $form;
    }
     /**
     * Ajouter d'un fichier Controlleur 
     */
    public function ajouterDocBourseAction() {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        if ($membre == null) {
                            return $this->redirectToRoute('cestom_user_homepage');
        }
		$bourses = $this->collectDocBourse($membre->getIdmembre());
//var_dump($bourses);
//return;
		$bourse = new Bourse();
        $form = $this->createFormBourse($bourse);

        $request = $this->get('request');
			// On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
                if ($form->isValid()) {
                try {                    
                    $bourse->setIdmembre($membre);
	            $bourse->setAnneeUniversitaire($this->anneeUniversitaire());
	            $bourse->setEtatDoc($this->etatDoc['attente']);
	            $bourse->setDateCreation(new \DateTime('now'));
                    $em->persist($bourse);
                    $em->flush();
					$this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);
                    return $this->redirectToRoute('cestom_user_ajouter_fichier');
                } catch (\Exception $e) {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
			return $this->render('CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig', array('form' => $form->createView(),'bourses'=>$bourses));
                }
            } else {
			$this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
			return $this->render('CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig', array('form' => $form->createView(),'bourses'=>$bourses));
			}
        }			     
			return $this->render('CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig', array('form' => $form->createView(),'bourses'=>$bourses));
   }
   
   public function deleteDocBourseAction(Request $request, $idbourse) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Bourse', 'f')
                ->where("f.idBourse =:idbourse AND f.idmembre =:idmembre")
                ->setParameter('idbourse', $idbourse)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $bourse = $query->getSingleResult();
        try {
            $em->remove($bourse);

            $em->flush();

            $request->getSession()->getFlashBag()->add('messagesucces', 'Fichier supprimé avec succès');
            return $this->redirect($this->generateUrl('cestom_user_ajouter_fichier'));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer le fichier');
            return $this->redirect($this->generateUrl('cestom_user_ajouter_fichier'));
        }
    }
    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le fichier est obligatoire',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le fichier est obligatoire',
            'integrity' => 'L\'upload du document est obligatoire | Ce document existe déjà | Veuillez vérifier et/ou supprimer. ',
        );
        $this->success = array(
            'validInsert' => 'Fichier ajouté avec succès',
            'validUpdate' => 'Info mises à jour avec succès',
        );
        $this->typeMessage = array(
            'error' => 'messageerror',
            'success' => 'messagesucces',
        );
       $this->etatDoc = array(
            'attente' => 'En attente',
            'valide' => 'Validé',
            'rejete' => 'Rejeté',

        );
    }
	/**
     * Les documents de l'utilisateur
     * @return string
     */
    public function collectDocBourse($idmembre) {

        $bourses =  array();
       
           $em = $this->getDoctrine()->getManager();
			$query = $em->createQuery(
					'SELECT b
					FROM CestomStoreBundle:Bourse b
					WHERE b.anneeUniversitaire =:anneeUniversitaire 
					AND b.idmembre=:idmembre
					ORDER BY b.idBourse ASC'
			)->setParameter('anneeUniversitaire', $this->anneeUniversitaire())
			 ->setParameter('idmembre',$idmembre) ;

        $bourses = $query->getResult();
        
        return $bourses;
    }
    /**
     * Message after a request to user/admin
     * @param type $request
     * @param type $typeMessage
     * @param type $message
     */
    public function messageAfterRequest($request, $typeMessage, $message) {

        $request->getSession()->getFlashBag()->add($typeMessage, $message);
    }
      /**
     * Generation des annee universitaire
     * @return string
     */
    public function anneeUniversitaire() {

        $annee = "";
       
            if (date("M") < 9) {
                $annee = date("Y")  . "-" . ( date("Y") + 1) ;
            } else {
                $annee = (date("Y")-1)  . "-" .  date("Y")  ;
            }
        

        return $annee;
    }
	
	  /**
     * Type de document
     * @return string
     */
    public function collectTypeDoc() {

        $type = array();
       
            $type["ATTESTATION_BOURSE"]=" Attestation de bourse";
			$type["ATTESTATION_INSCRIPTION"]=" Attestation d'inscription";


        return $type;
    }
}

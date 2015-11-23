<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Bourse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionBourseController extends Controller {


    /**
     * LIste des documents non validés
     */
    public function listeAttenteBourseAction() {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Bourse', 'f')
                ->where("f.etatDoc =:etatDoc")
                ->setParameter('etatDoc', $this->etatDoc['attente']);

        $query = $qb->getQuery();
        $bourses = $query->getResult();

      
        return $this->render('CestomAdminBundle:GestionBourse:listeAttenteBourse.html.twig', array(
                   'bourses' => $bourses
        ));
    }
    /**
     * LIste des documents  validés
     */
    public function listeValideBourseAction() {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Bourse', 'f')
                ->where("f.etatDoc =:etatDoc")
                ->setParameter('etatDoc', $this->etatDoc['valide']);

        $query = $qb->getQuery();
        $bourses = $query->getResult();

      
        return $this->render('CestomAdminBundle:GestionBourse:listeValideBourse.html.twig', array(
                   'bourses' => $bourses
        ));
    }
    /**
     * LIste des documents  rejetes
     */
    public function listeRejeteBourseAction() {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Bourse', 'f')
                ->where("f.etatDoc =:etatDoc")
                ->setParameter('etatDoc', $this->etatDoc['rejete']);

        $query = $qb->getQuery();
        $bourses = $query->getResult();

      
        return $this->render('CestomAdminBundle:GestionBourse:listeRejeteBourse.html.twig', array(
                   'bourses' => $bourses
        ));
    }

     /**
     * Valider un document 
     */
    public function validerBourseAction(Request $request, $idbourse) {
        $em = $this->getDoctrine()->getManager();


        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Bourse', 'f')
                ->where("f.idBourse =:idbourse")
                ->setParameter('idbourse',$idbourse);


        $query = $qb->getQuery();
        $bourse = $query->getSingleResult();
        try {
	            $bourse->setEtatDoc($this->etatDoc['valide']);
                    $em->persist($bourse);
                    $em->flush();
		$this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate'] . " : " . " Dossier numero " . $bourse->getIdbourse() . " de " . $bourse->getIdmembre()->getNomMembre() . " " . $bourse->getIdmembre()->getPrenomMembre() );
                    return $this->redirectToRoute('cestom_admin_attente_bourse');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('messageerror', $this->errors['integrity'] . " : " . " Dossier numero " . $bourse->getIdbourse() . " de " . $bourse->getIdmembre()->getNomMembre() . " " . $bourse->getIdmembre()->getPrenomMembre());
            return $this->redirect($this->generateUrl('cestom_admin_attente_bourse'));
        }

               
   }
/*
*Send mail valide 
*/
public function validMailAction()
{
    $message = \Swift_Message::newInstance()
        ->setSubject('Document Valide')
        ->setFrom('cestomtest@gmail.com')
        ->setTo('cestomtest@gmail.com')
        ->setBody(
            $this->renderView(
                'CestomAdminBundle:Email:validationDossier.html.twig',
                array('name' => 'Elom')
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('cestom_admin_attente_bourse'));
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

   public function __construct() {
        $this->errors = array(
            'integrity' => 'Echec de la validation du dossier  ',
        );
        $this->success = array(
            'validUpdate' => 'Dossier validé avec succès',
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
}

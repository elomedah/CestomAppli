<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Bourse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionBourseController extends Controller {


    /**
     * LIste des documents non validé
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
//var_dump($bourses[0]);
      
        return $this->render('CestomAdminBundle:GestionBourse:listeAttenteBourse.html.twig', array(
                   'bourses' => $bourses
        ));
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
        
       $this->etatDoc = array(
            'attente' => 'En attente',
            'valide' => 'Validé',
            'rejete' => 'Rejeté',

        );
    }
}

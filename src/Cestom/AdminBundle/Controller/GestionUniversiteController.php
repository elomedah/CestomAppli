<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionUniversiteController extends Controller {

    public function createFormUniversite(Universite $universite) {
        $form = $this->createFormBuilder($universite)
                ->add('nomuniv', 'text', array('required' => true))
                ->add('contactuniv', 'text', array('required' => false))
                ->add('addresseuniv', 'textarea', array('required' => false))
                ->getForm();
        return $form;
    }

    public function persistObjectUniversite($universite) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($universite);
        $em->flush();
        return $universite;
    }

    public function ajouterUniversiteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $universites = $em->getRepository('CestomStoreBundle:Universite')
                ->findAll();
        $universite = new Universite();
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormUniversite($universite);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectUniversite($universite);
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_universite'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig', array(
                            'form' => $form->createView(), 'universites' => $universites
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig', array(
                        'form' => $form->createView(), 'universites' => $universites
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig', array(
                    'form' => $form->createView(), 'universites' => $universites
        ));
    }

    public function modifierUniversiteAction(Request $request, $iduniversite) {
        $em = $this->getDoctrine()->getManager();

        $universites = $em->getRepository('CestomStoreBundle:Universite')
                ->findAll();
        $universite = $universite = $em->getRepository('CestomStoreBundle:Universite')
                ->find(htmlspecialcharS($iduniversite));
        $form = $this->createFormUniversite($universite);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectUniversite($universite);
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_universite'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomAdminBundle:GestionMembre:modifierUniversite.html.twig', array(
                            'form' => $form->createView(), 'universites' => $universites, 'iduniversite' => $iduniversite
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierUniversite.html.twig', array(
                        'form' => $form->createView(), 'universites' => $universites, 'iduniversite' => $iduniversite
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierUniversite.html.twig', array(
                    'form' => $form->createView(), 'universites' => $universites, 'iduniversite' => $iduniversite
        ));
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'L\'université existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Université ajoutée avec succès',
            'validUpdate' => 'Info mises à jour avec succès',
        );
        $this->typeMessage = array(
            'error' => 'messageerror',
            'success' => 'messagesucces',
        );
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

}

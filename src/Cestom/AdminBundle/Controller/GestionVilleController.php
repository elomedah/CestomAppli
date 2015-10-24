<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GestionVilleController extends Controller {

    public function createFormVille(Ville $ville) {
        $form = $this->createFormBuilder($ville)
      ->add('nomville',      'text', array( 'required' => false))
      ->getForm();
        return $form;
    }

    public function persistObjectVille($ville) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($ville);
        $em->flush();
        return $ville;
    }

    public function ajouterVilleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('CestomStoreBundle:Ville')
                ->findAll();
        $ville = new Ville();
        $form = $this->createFormVille($ville);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectVille($ville);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);


                return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
                            'form' => $form->createView(), 'villes' => $villes
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
                        'form' => $form->createView(), 'villes' => $villes
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterVille.html.twig', array(
                    'form' => $form->createView(), 'villes' => $villes
        ));
    }

    public function modifierVilleAction(Request $request, $idville) {
        $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('CestomStoreBundle:Ville')
                ->findAll();
        $ville = $em->getRepository('CestomStoreBundle:Ville')
                ->find($idville);
        $form = $this->createFormVille($ville);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectVille($ville);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);


                return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
                            'form' => $form->createView(), 'villes' => $villes, 'idville' => $idville
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpadte']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
                        'form' => $form->createView(), 'villes' => $villes, 'idville' => $idville
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierVille.html.twig', array(
                    'form' => $form->createView(), 'villes' => $villes, 'idville' => $idville
        ));
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'La ville existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Ville ajoutée avec succès',
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

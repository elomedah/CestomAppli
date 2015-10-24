<?php

namespace Cestom\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cestom\StoreBundle\Entity\Membre;


class GestionMembreController extends Controller {

    /**
     * List of fosuserBundle user 
     * Get in Fosuser Table
     * @return type
     */
    public function collectUsername() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomUserBundle:User');

        $users = $repository->findAll();

        $listusers = array();

        foreach ($users as $user) {
            $listusers[$user->getId()] = $user->getUsername() . " : " . $user->getEmail();
        }
        return $listusers;
    }

    /**
     * 
     * @param \Cestom\StoreBundle\Entity\Membre $membre
     * @param type $bool => false= modification, true= ajout
     * @return type
     */
    public function createMemberForm(Membre $membre, $bool) {
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($membre)
                ->add('nomMembre', 'text', array('required' => true))
                ->add('prenomMembre', 'text', array('required' => true))
                ->add('numeroPassportMembre', 'text', array('required' => true))
                ->add('promotionMembre', 'number', array('required' => true))
                ->add('contactUrgence', 'textarea', array('required' => true))
                ->add('infoComplementmembre', 'textarea', array('required' => false))
                ->add('photoMimMembre', 'file', array('required' => false))
                ->add('telephonefirst', 'text', array('required' => false))
                ->add('telephonesecond', 'text', array('required' => false))
                ->add('dernierLyceeFrequente', 'text', array('required' => true));
        if ($bool) {
            $form->add('username', 'choice', array('mapped' => false, 'choices' => $this->collectUsername()))
            ;
        } else {
            $form->add('username', 'text', array('mapped' => false, 'disabled' => true, 'data' => $membre->getId()->getUsername()))
            ;
        }


        return $form->getForm();
        ;
    }

    public function membreAction() {
//TO DO ACTIVATE FILTER
        /* if (isset ($_POST['ville'])) {
          $ville = $this->getDoctrine()
          ->getManager()
          ->getRepository('CestomStoreBundle:Ville')
          ->findOneBynomville(htmlspecialchars($_POST['ville']));
          $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
          ->findByidville($ville->getIdville());
          } */



        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('CestomStoreBundle:Membre')
                ->findAll();

        return $this->render('CestomAdminBundle:GestionMembre:gestionMembre.html.twig', array('membres' => $membres));
    }

    /**
     * Get all the value of member field to persist
     * @return type
     */
    public function persistObjectMembre($membre, $insert = true) {
        // Get the field not include in the form objet 
        if ($insert) {
            $id = htmlspecialchars($_POST['form']['username']);

            $user = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('CestomStoreBundle:Fosuser')
                    ->findOneByid($id);

            $membre->setId($user);
        }


        $membre->setDateNaissanceMembre(htmlspecialchars($_POST['datenaissance']));
        $membre->setDateEtabMembre(htmlspecialchars($_POST['dateemission']));
        $membre->setDateExpiMembre(htmlspecialchars($_POST['datereception']));

        $sexe = htmlspecialchars($_POST['sexe']);
        $membre->setSexe($sexe);


        $em = $this->getDoctrine()->getManager();
        $em->persist($membre);
        $em->flush();
        
        return $membre;
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     */
    public function ajouterMembreAction(Request $request) {
        // On crée un objet membre
        $membre = new Membre();
        $form = $this->createMemberForm($membre, true);
        $form->handleRequest($request);
        if ($form->isValid()) {
            try {

               $membre= $this->persistObjectMembre($membre);
                
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);
                return $this->redirect($this->generateUrl('cestom_admin_homepage'));
            } catch (\Exception $e) {

                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
                            'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
                        'form' => $form->createView(), 
                'sexe' => htmlspecialchars($_POST['sexe']), 
                'datenaissance' => htmlspecialchars($_POST['datenaissance']), 
                'dateemission' => htmlspecialchars($_POST['dateemission']), 
                'dateexpiration' => htmlspecialchars($_POST['dateexpiration'])));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterMembre.html.twig', array(
                    'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param type $idmembre
     * @return type
     */
    public function modifierMembreAction(Request $request, $idmembre) {
        // On crée un objet membre
        $membre = $this->getDoctrine()->getManager()->getRepository('CestomStoreBundle:Membre')->find($idmembre);
        $form = $this->createMemberForm($membre, false);
        $form->handleRequest($request);
        if ($form->isValid()) {
            try {

                $this->persistObjectMembre($membre, false);
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);
                return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
                            'form' => $form->createView(), 'idmembre' => $idmembre, 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
            } catch (\Exception $e) {

                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
                            'form' => $form->createView(), 'idmembre' => $idmembre, 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
                        'form' => $form->createView(), 'idmembre' => $idmembre, 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierMembre.html.twig', array(
                    'form' => $form->createView(), 'idmembre' => $idmembre, 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs',
            'integrity' => 'L\'utilisateur existe déjà. Veuillez vérifier',
        );
        $this->success = array(
            'validInsert' => 'Utilisateur ajouté avec succès',
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

<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Cestom\StoreBundle\Entity\Universite;
use Cestom\StoreBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionFormationController extends Controller {

    public function createFormFormation(Formation $formation) {
        $form = $this->createFormBuilder($formation)
                ->add('libelleFormation', 'text', array('required' => true))
                ->add('iduniv', 'choice', array(
                    'data'=> ($formation->getIduniv()!==null)?$formation->getIduniv()->getIduniv():"0",
                    'mapped' => false, 'required' => true, 'choices' => $this->collectUniversite()))
                ->add('diplomeViseFormation', 'text', array('required' => true))
                ->add('programmeBourse', 'text', array('required' => false))
                ->add('dureeFormation', 'number', array('required' => true))
                ->getForm();
        return $form;
    }

    public function persistObjectFormation($formation, $idmembre) {
        $em = $this->getDoctrine()->getManager();


        $formation->setDateDebutFormation(htmlspecialchars($_POST['dateDebutFormation']));
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByidmembre($idmembre);
        $formation->setIdmembre($membre);
        $universite = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Universite')
                ->findOneByiduniv(htmlspecialchars($_POST['form']['iduniv']));
        $formation->setIduniv($universite);

        $em->persist($formation);
        $em->flush();


        return $formation;
    }

    public function ajouterFormationMembreAction(Request $request, $idmembre
    ) {
        $formations = $this->getDoctrine()->getManager()->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre(htmlspecialchars($idmembre));
        $formation = new Formation();
        $form = $this->createFormFormation($formation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {

                $formation = $this->persistObjectFormation($formation, htmlspecialchars($idmembre));
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_formation', array('idmembre' => $idmembre)));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig', array(
                            'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebutFormation' => $formation->getDateDebutFormation(), 'formations' => $formations
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig', array(
                        'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebutFormation' => htmlspecialchars($_POST['dateDebutFormation']), 'formations' => $formations
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig', array(
                    'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebutFormation' => $formation->getDateDebutFormation(), 'formations' => $formations
        ));
    }

    public function modifierFormationMembreAction(Request $request, $idformation, $idmembre) {
        $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre(htmlspecialchars($idmembre));
        $formation = $em->getRepository('CestomStoreBundle:Formation')
                ->find(htmlspecialchars($idformation));
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormFormation($formation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {

                $formation = $this->persistObjectFormation($formation, htmlspecialchars($idmembre));
                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_formation', array('idmembre' => $idmembre)));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
                            'form' => $form->createView(), 'idformation' => $idformation, 'idmembre' => $idmembre, 'dateDebutFormation' => $formation->getDateDebutFormation(), 'formations' => $formations
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
                        'form' => $form->createView(), 'idformation' => $idformation, 'idmembre' => $idmembre, 'dateDebutFormation' => htmlspecialchars($_POST['dateDebutFormation']), 'formations' => $formations
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig', array(
                    'form' => $form->createView(), 'idformation' => $idformation, 'idmembre' => $idmembre, 'dateDebutFormation' => $formation->getDateDebutFormation(), 'formations' => $formations
        ));
    }

    public function collectUniversite() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Universite');

        $univs = $repository->findAll();

        $listuniv = array();

        foreach ($univs as $univ) {
            $listuniv[$univ->getIduniv()] = $univ->getNomuniv();
        }
        return $listuniv;
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'La formation existe déjà. Veuillez vérifier. Les contraintes ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Formation ajoutée avec succès',
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

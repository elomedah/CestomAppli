<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\VilleMembre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionVilleMembreController extends Controller {

    public function createFormVilleMembre(VilleMembre $villemembre) {
        $form = $this->createFormBuilder($villemembre)
                ->add('adresse', 'textarea', array('required' => true))
                ->add('idville', 'choice', array(
                    'data' => ($villemembre->getIdville() !== null) ? $villemembre->getIdville()->getIdville() : "0",
                    'required' => true, 'mapped' => false, 'choices' => $this->collectVille()))
                ->getForm();
        return $form;
    }

    public function persistObjectVilleMembre($villemembre, $idmembre) {
        $em = $this->getDoctrine()->getManager();


        $villemembre->setDateDebut(htmlspecialchars($_POST['dateDebut']));
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByidmembre(htmlspecialchars($idmembre));
        $villemembre->setIdmembre($membre);
        $ville = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Ville')
                ->findOneByidville(htmlspecialchars($_POST['form']['idville']));
        $villemembre->setIdville($ville);
        $em->persist($villemembre);
        $em->flush();
        return $villemembre;
    }

    public function ajouterVilleMembreAction(Request $request, $idmembre
    ) {
        $em = $this->getDoctrine()->getManager();

        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidmembre($idmembre);
        $villemembre = new VilleMembre();
        $form = $this->createFormVilleMembre($villemembre);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
               $villemembre= $this->persistObjectVilleMembre($villemembre,$idmembre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville_membre', array('idmembre' => $idmembre)));
            } catch (\Exception $e) {
                                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
 return $this->render('CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig', array(
                            'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig', array(
                        'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig', array(
                    'form' => $form->createView(), 'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
        ));
    }

    public function modifierVilleMembreAction(Request $request,$idmembre,$idvillemembre
) {
        $em = $this->getDoctrine()->getManager();

        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidmembre($idmembre);
    $villemembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->find($idvillemembre);
                $form = $this->createFormVilleMembre($villemembre);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
               $villemembre= $this->persistObjectVilleMembre($villemembre,$idmembre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);
                return $this->redirect($this->generateUrl('cestom_admin_ajouter_ville_membre', array('idmembre' => $idmembre)));
            } catch (\Exception $e) {
                                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
 return $this->render('CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig', array(
                            'form' => $form->createView(),'idvillemembre'=>$idvillemembre,'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig', array(
                        'form' => $form->createView(),'idvillemembre'=>$idvillemembre, 'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig', array(
                    'form' => $form->createView(), 'idvillemembre'=>$idvillemembre ,'idmembre' => $idmembre, 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
        ));
    }
    public function collectVille() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Ville');

        $villes = $repository->findAll();

        $listvilles = array();

        foreach ($villes as $listville) {
            $listvilles[$listville->getIdville()] = $listville->getNomville();
        }
        return $listvilles;
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'Cette information existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Ville ajoutée au membre avec succès',
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

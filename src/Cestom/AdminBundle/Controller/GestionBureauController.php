<?php

namespace Cestom\AdminBundle\Controller;

use Cestom\StoreBundle\Entity\BureauVille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionBureauController extends Controller {

    public function createFormBureauVille(BureauVille $bureauville) {
        $form = $this->createFormBuilder($bureauville)
                ->add('posteMembre', 'choice', array(
                       'data' => $bureauville->getPosteMembre(),
                       'required' => true, 'choices' => $this->collectPoste()))
                ->add('idmembre', 'choice', array(
                    'data'=>($bureauville->getIdmembre() !==null)?$bureauville->getIdmembre()->getIdmembre():"0",
                    'mapped' => false, 'required' => true, 'choices' => $this->collectMembre()))
                ->add('idville', 'choice', array(
                    'data'=>($bureauville->getIdville() !==null)?$bureauville->getIdville()->getIdville():"0",
                    'mapped' => false, 'required' => true, 'choices' => $this->collectVille()))
                ->add('anneeScolaire', 'choice', array(
                    'data'=>$bureauville->getAnneeScolaire(),
                    'required' => true, 'choices' => $this->collectAnneeScolaire()))
                ->getForm();
        return $form;
    }

    public function persistObjectBureauVille($bureauville) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->find(htmlspecialchars($_POST['form']['idmembre']));
        $bureauville->setIdmembre($membre);

        $ville = $em->getRepository('CestomStoreBundle:Ville')
                ->find(htmlspecialchars($_POST['form']['idville']));
        $bureauville->setIdville($ville);
        $em->persist($bureauville);
        $em->flush();
        return $bureauville;
    }

    public function ajouterBureauAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $bureaux = $em->getRepository('CestomStoreBundle:BureauVille')
                ->findAll();
        $bureau = new BureauVille();
        $form = $this->createFormBureauVille($bureau);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectBureauVille($bureau);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);


                return $this->redirect($this->generateUrl('cestom_admin_ajouter_bureau_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
                            'form' => $form->createView(), 'bureaux' => $bureaux
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
                        'form' => $form->createView(), 'bureaux' => $bureaux
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:ajouterBureau.html.twig', array(
                    'form' => $form->createView(), 'bureaux' => $bureaux
        ));
    }

    public function modifierBureauAction(Request $request, $idbureau) {
        $em = $this->getDoctrine()->getManager();

        $bureaux = $em->getRepository('CestomStoreBundle:BureauVille')
                ->findAll();
        $bureau = $em->getRepository('CestomStoreBundle:BureauVille')
                ->find($idbureau);
        $form = $this->createFormBureauVille($bureau);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $this->persistObjectBUreauVille($bureau);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);


                return $this->redirect($this->generateUrl('cestom_admin_ajouter_bureau_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity'] );
                return $this->render('CestomAdminBundle:GestionMembre:modifierBureau.html.twig', array(
                            'form' => $form->createView(), 'bureaux' => $bureaux, 'idbureau' => $idbureau
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomAdminBundle:GestionMembre:modifierBureau.html.twig', array(
                        'form' => $form->createView(), 'bureaux' => $bureaux, 'idbureau' => $idbureau
            ));
        }
        return $this->render('CestomAdminBundle:GestionMembre:modifierBureau.html.twig', array(
                    'form' => $form->createView(), 'bureaux' => $bureaux, 'idbureau' => $idbureau
        ));
    }

    /**
     * Liste des villes
     * @return string
     */
    public function collectVille() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Ville');

        $villes = $repository->findAll();

        $listvilles = array();

        foreach ($villes as $listville) {
            $listvilles[$listville->getIdville()] = $listville->getIdville() . " : " . $listville->getNomville();
        }
        return $listvilles;
    }

    /**
     * Liste des membres
     * @return string
     */
    public function collectMembre() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Membre');

        $membres = $repository->findAll();

        $listmembres = array();

        foreach ($membres as $listmembre) {
            $listmembres[$listmembre->getIdmembre()] = $listmembre->getIdmembre() . ": " . $listmembre->getNomMembre() . "  " . $listmembre->getPrenomMembre();
        }
        return $listmembres;
    }

    /**
     * Generation des annees scolaires
     * @return string
     */
    public function collectAnneeScolaire() {

        $anneeScolaire = array();
        for ($i = 0; $i <= 10; $i++) {
            if (date("M") < 9) {
                $anneeScolaire[(date("Y") - $i) . "-" . ( date("Y") + 1 - $i)] = (date("Y") - $i) . "-" . ( date("Y") + 1 - $i);
            } else {
                $anneeScolaire[(date("Y") - 1 - $i) . ( date("Y") - $i)] = (date("Y") - 1 - $i) . ( date("Y") - $i);
            }
        }

        return $anneeScolaire;
    }

    /**
     * Les postes de la CESTOM
     * @return type
     */
    public function collectPoste() {

        $postes = array();

        $postes['Président'] = ('Président');

        $postes['Sécretaire'] = ('Sécretaire');
        $postes['Sécretaire-Adjoint'] = ('Sécretaire-Adjoint');
        $postes['Trésorier'] = ('Trésorier');
        $postes['Trésorier-adjoint'] = ('Trésorier-adjoint');
        $postes['Conseiller'] = ('Conseiller');
        $postes['Membre du bureau'] = ('Membre du bureau');
        return $postes;
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'Le membre a déjà ce poste. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Membre du bureau ajouté avec succès',
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

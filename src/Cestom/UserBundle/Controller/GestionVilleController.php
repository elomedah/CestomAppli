<?php

namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\VilleMembre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionVilleController extends Controller {

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     */
    public function gestionVilleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        if ($membre == null) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Configuration initiale : Veuillez enregister vos informations ');
            return $this->redirect($this->generateUrl('cestom_user_homepage'));
        }
        $villesmembre = $em->getRepository('CestomStoreBundle:VilleMembre')
                ->findByidmembre($membre->getIdmembre());
        $villemembre = new VilleMembre();

        $form = $this->createFormBuilder($villemembre)
                ->add('adresse', 'textarea', array('required' => true))
                ->add('idville', 'choice', array('required' => true, 'mapped' => false, 'choices' => $this->collectVille()))
                ->getForm();


        return $this->render('CestomUserBundle:GestionVille:gestionVille.html.twig', array(
                    'form' => $form->createView(), 'dateDebut' => $villemembre->getDateDebut(), 'villesmembre' => $villesmembre
        ));
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     */
    public function ajouterVilleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $villemembre = new VilleMembre();
        $form = $this->createFormVille($villemembre);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $villemembre = $this->persistObjectVille($villemembre, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);


                return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
                            'form' => $form->createView(), 'dateDebut' => $villemembre->getDateDebut()
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
                        'form' => $form->createView(), 'dateDebut' => $villemembre->getDateDebut()
            ));
        }

        return $this->render('CestomUserBundle:GestionVille:ajouterVille.html.twig', array(
                    'form' => $form->createView(), 'dateDebut' => $villemembre->getDateDebut()
        ));
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param type $idvillemembre
     * @return type
     */
    public function deleteVilleAction(Request $request, $idvillemembre) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:VilleMembre', 'f')
                ->where("f.idvillemembre =:idvillemembre AND f.idmembre =:idmembre")
                ->setParameter('idvillemembre', $idvillemembre)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $villemembre = $query->getSingleResult();
        try {
            $em->remove($villemembre);

            $em->flush();

            $request->getSession()->getFlashBag()->add('messagesucces', 'Ville supprimée avec succès');
            return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer la ville  ');
            return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
        }
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param type $idvillemembre
     * @return type
     */
    public function modifierVilleAction(Request $request, $idvillemembre) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:VilleMembre', 'f')
                ->where("f.idvillemembre =:idvillemembre AND f.idmembre =:idmembre")
                ->setParameter('idvillemembre', $idvillemembre)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $villemembre = $query->getSingleResult();
        $form = $this->createFormVille($villemembre);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $villemembre = $this->persistObjectVille($villemembre, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);


                return $this->redirect($this->generateUrl('cestom_user_gestion_ville'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
                            'form' => $form->createView(), 'idvillemembre' => $idvillemembre, 'dateDebut' => $villemembre->getDateDebut()
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
                        'form' => $form->createView(), 'idvillemembre' => $idvillemembre, 'dateDebut' => $villemembre->getDateDebut()
            ));
        }
        return $this->render('CestomUserBundle:GestionVille:modifierVille.html.twig', array(
                    'form' => $form->createView(), 'idvillemembre' => $idvillemembre, 'dateDebut' => $villemembre->getDateDebut()
        ));
    }

    /**
     * Form builder
     * @param type $villemembre
     * @return type
     */
    public function createFormVille($villemembre) {
        $form = $this->createFormBuilder($villemembre)
                ->add('adresse', 'textarea', array('required' => true))
                ->add('idville', 'choice', array(
                    'data' => ($villemembre->getIdville() !== null) ? $villemembre->getIdville()->getIdville() : "0",
                    'required' => true, 'mapped' => false, 'choices' => $this->collectVille()))
                ->getForm();
        return $form;
    }

    /**
     * Method de persistence des donnes 
     * @param type $villemembre
     * @param type $membre
     * @return type
     */
    public function persistObjectVille($villemembre, $membre) {
        $em = $this->getDoctrine()->getManager();

        $villemembre->setDateDebut(htmlspecialchars($_POST['dateDebut']));
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

    /**
     * Liste des villes
     * @return type
     */
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

    /**
     * Constructeur
     */
    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. ',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. ',
            'integrity' => 'Cette information existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
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

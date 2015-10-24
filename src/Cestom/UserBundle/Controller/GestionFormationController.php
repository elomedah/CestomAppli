<?php

namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionFormationController extends Controller {

    public function createFormFormation(Formation $formation) {
        $form = $this->createFormBuilder($formation)
                ->add('libelleFormation', 'text', array('required' => true))
                ->add('iduniv', 'choice', array(
                    'data' => ($formation->getIduniv() !== null) ? $formation->getIduniv()->getIduniv() : "0",
                    'mapped' => false, 'choices' => $this->collectUniversite()))
                ->add('diplomeViseFormation', 'text', array('required' => true))
                ->add('programmeBourse', 'text', array('required' => false))
                ->add('dureeFormation', 'number', array('required' => true))
                ->getForm();
        return $form;
    }

    public function persistObjectFormation($formation, $membre) {
        $em = $this->getDoctrine()->getManager();

        $formation->setIdmembre($membre);

        $formation->setDateDebutFormation(htmlspecialchars($_POST['dateDebutFormation']));
        $universite = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Universite')
                ->findOneByiduniv(htmlspecialchars($_POST['form']['iduniv']));
        $formation->setIduniv($universite);

        $em->persist($formation);
        $em->flush();
        return $formation;
    }

    public function gestionFormationAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
        // Le membre n'est pas encore disponible dans la table des membres
        if ($membre == null) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Configuration initiale : Veuillez enregister vos informations ');
            return $this->redirect($this->generateUrl('cestom_user_homepage'));
        }
        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($membre->getIdmembre());

        $formation = new Formation();
        $form = $this->createFormFormation($formation);
        return $this->render('CestomUserBundle:GestionFormation:gestionFormation.html.twig', array(
                    'form' => $form->createView(), 'formations' => $formations, 'dateDebutFormation' => $formation->getDateDebutFormation()
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

    public function deleteFormationAction(Request $request, $idformation) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Formation', 'f')
                ->where("f.idFormation =:idFormation AND f.idmembre =:idmembre")
                ->setParameter('idFormation', $idformation)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $formation = $query->getSingleResult();
        try {
            $em->remove($formation);

            $em->flush();

            $request->getSession()->getFlashBag()->add('messagesucces', 'Formation supprimée avec succès');
            return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer la formation ');
            return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));
        }
    }

    public function ajouterFormationAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());


        $formations = $em->getRepository('CestomStoreBundle:Formation')
                ->findByidmembre($membre->getIdmembre());
        $formation = new Formation();
        $form = $this->createFormFormation($formation);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $formation = $this->persistObjectFormation($formation, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);

                return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
                            'form' => $form->createView(),
                            'dateDebutFormation' => $formation->getDateDebutFormation(),
                            'formations' => $formations
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
                        'form' => $form->createView(),
                        'dateDebutFormation' => $formation->getDateDebutFormation(),
                        'formations' => $formations
            ));
        }


        return $this->render('CestomUserBundle:GestionFormation:ajouterFormation.html.twig', array(
                    'form' => $form->createView(), 'dateDebutFormation' => $formation->getDateDebutFormation(), 'formations' => $formations
        ));
    }

    public function modifierFormationAction(Request $request, $idformation) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Formation', 'f')
                ->where("f.idFormation =:idFormation AND f.idmembre =:idmembre")
                ->setParameter('idFormation', $idformation)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $formation = $query->getSingleResult();
        $form = $this->createFormFormation($formation);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $formation = $this->persistObjectFormation($formation, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);

                return $this->redirect($this->generateUrl('cestom_user_gestion_formation'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
                            'form' => $form->createView(),
                            'dateDebutFormation' => $formation->getDateDebutFormation(),
                            'idformation' => $idformation,
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
                        'form' => $form->createView(),
                        'dateDebutFormation' => $formation->getDateDebutFormation(),
                        'idformation' => $idformation,
            ));
        }


        return $this->render('CestomUserBundle:GestionFormation:modifierFormation.html.twig', array(
                    'form' => $form->createView(),
                    'idformation' => $idformation,
                    'dateDebutFormation' => $formation->getDateDebutFormation()
        ));
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'Cette information existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
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

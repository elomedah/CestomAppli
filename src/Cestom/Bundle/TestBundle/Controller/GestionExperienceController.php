<?php

namespace Cestom\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionExperienceController extends Controller
{
    public function listeExperienceAction(){
		return $this->render('CestomTestBundle:GestionExperience:gestionExperience.html.twig');
    }
	
	public function createFormExperience(Experience $experience){
        $form = $this->createFormBuilder($experience)
                ->add('libelleExperience', 'text', array('required' => true))
                ->add('idsociete', 'choice', array(
                    'data' => ($experience->getIdsociete() !== null) ? $experience->getIdsociete()->getIdsociete() : "0",
                    'mapped' => false, 'choices' => $this->collectSociete()))
                ->add('competenceAcquise', 'text', array('required' => true))
                ->add('dureeExperience', 'number', array('required' => true))
                ->getForm();
        return $form;
    }

    public function persistObjectExperience($experience, $membre) {
        $em = $this->getDoctrine()->getManager();

        $experience->setIdmembre($membre);

        $experience->setDateDebutExperience(htmlspecialchars($_POST['dateDebutExperience']));
        $societe = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Societe')
                ->findOneByidsociete(htmlspecialchars($_POST['form']['idsociete']));
        $experience->setIdsociete($societe);

        $em->persist($experience);
        $em->flush();
        return $experience;
    }

    public function gestionExperienceAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());
        // Le membre n'est pas encore disponible dans la table des membres
        if ($membre == null) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Configuration initiale : Veuillez enregister vos informations ');
            return $this->redirect($this->generateUrl('cestom_user_homepage'));
        }
        $experiences = $em->getRepository('CestomStoreBundle:Experience')
                ->findByidmembre($membre->getIdmembre());

        $experience = new Experience();
        $form = $this->createFormExperience($experience);
        return $this->render('CestomTestBundle:GestionExperience:gestionExperience.html.twig', array(
                    'form' => $form->createView(), 'experiences' => $experiences, 'dateDebutExperience' => $experience->getDateDebutExperience()
        ));
    }

    public function collectSociete() {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('CestomStoreBundle:Societe');

        $societes = $repository->findAll();

        $listsociete = array();

        foreach ($societes as $societe) {
            $listsociete[$societe->getIdsociete()] = $societe->getNomsociete();
        }
        return $listsociete;
    }

    public function deleteExperienceAction(Request $request, $idexperience) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Experience', 'f')
                ->where("f.idExperience =:idExperience AND f.idmembre =:idmembre")
                ->setParameter('idExperience', $idexperience)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $experience = $query->getSingleResult();
        try {
            $em->remove($experience);

            $em->flush();

            $request->getSession()->getFlashBag()->add('messagesucces', 'Experience supprimée avec succès');
            return $this->redirect($this->generateUrl('cestom_user_gestion_experience'));
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('messagesucces', 'Impossible de supprimer l\'experience ');
            return $this->redirect($this->generateUrl('cestom_user_gestion_experience'));
        }
    }

    public function ajouterExperienceAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());


        $experiences = $em->getRepository('CestomStoreBundle:Experience')
                ->findByidmembre($membre->getIdmembre());
        $experience = new Experience();
        $form = $this->createFormExperience($experience);

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $experience = $this->persistObjectExperience($experience, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validInsert']);

                return $this->redirect($this->generateUrl('cestom_user_gestion_experience'));
				
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomTestBundle:GestionExperience:ajouterExperience.html.twig', array(
                            'form' => $form->createView(),
                            'dateDebutExperience' => $experience->getDateDebutExperience(),
                            'experiences' => $experiences
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidInsert']);
            return $this->render('CestomTestBundle:GestionExperience:ajouterExperience.html.twig', array(
                        'form' => $form->createView(),
                        'dateDebutExperience' => $experience->getDateDebutExperience(),
                        'experiences' => $experiences
            ));
        }


        return $this->render('CestomTestBundle:GestionExperience:ajouterExperience.html.twig', array(
                    'form' => $form->createView(), 'dateDebutExperience' => $experience->getDateDebutExperience(), 'experiences' => $experiences
        ));
    }

    public function modifierExperienceAction(Request $request, $idexperience) {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        $qb = $em->createQueryBuilder('f');
        $qb->select('f')
                ->from('CestomStoreBundle:Experience', 'f')
                ->where("f.idExperience =:idExperience AND f.idmembre =:idmembre")
                ->setParameter('idExperience', $idexperience)
                ->setParameter('idmembre', $membre->getIdmembre());

        $query = $qb->getQuery();
        $experience = $query->getSingleResult();
        $form = $this->createFormExperience($experience);

        $form->handleRequest($request);

        if ($form->isValid()){
            try{
                $experience = $this->persistObjectExperience($experience, $membre);

                $this->messageAfterRequest($request, $this->typeMessage['success'], $this->success['validUpdate']);

                return $this->redirect($this->generateUrl('cestom_user_gestion_experience'));
            } catch (\Exception $e) {
                $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['integrity']);
                return $this->render('CestomTestBundle:GestionExperience:modifierExperience.html.twig', array(
                            'form' => $form->createView(),
                            'dateDebutExperience' => $experience->getDateDebutExperience(),
                            'idexperience' => $idexperience,
                ));
            }
        } else if ($this->get('request')->getMethod() == 'POST') {
            $this->messageAfterRequest($request, $this->typeMessage['error'], $this->errors['notvalidUpdate']);
            return $this->render('CestomTestBundle:GestionExperience:modifierExperience.html.twig', array(
                        'form' => $form->createView(),
                        'dateDebutExperience' => $experience->getDateDebutExperience(),
                        'idexperience' => $idexperience,
            ));
        }


        return $this->render('CestomTestBundle:GestionExperience:modifierExperience.html.twig', array(
                    'form' => $form->createView(),
                    'idexperience' => $idexperience,
                    'dateDebutExperience' => $experience->getDateDebutExperience()
        ));
    }

    public function __construct() {
        $this->errors = array(
            'notvalidInsert' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'notvalidUpdate' => 'Le formulaire n\'est pas valide. Veuillez vérifier les champs. Le champ Durée doit être entier',
            'integrity' => 'Cette information existe déjà. Veuillez vérifier. Les contraintes d\'intégrité ne sont pas vérifiées.',
        );
        $this->success = array(
            'validInsert' => 'Experience ajoutée avec succès',
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

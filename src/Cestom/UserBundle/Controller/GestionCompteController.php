<?php

namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionCompteController extends Controller {

    public function gestionCompteAction() {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        if ($membre == null) {
            $membre = new Membre();
        }
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($membre)
                ->add('nomMembre', 'text', array('required' => true))
                ->add('prenomMembre', 'text', array('required' => true))
                ->add('numeroPassportMembre', 'text', array('required' => true))
                ->add('promotionMembre', 'text', array('required' => true))
                ->add('contactUrgence', 'textarea', array('required' => true))
                ->add('infoComplementmembre', 'textarea', array('required' => false))
                ->add('photoMimMembre', 'file', array('required' => false))
                ->add('telephonefirst', 'text', array('required' => true))
                ->add('telephonesecond', 'text', array('required' => false))
                ->add('dernierLyceeFrequente', 'text', array('required' => true))
                ->getForm();

// On récupère la requête
        $request = $this->get('request');
// On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {

                // On l'enregistre notre objet $advert dans la base de données
                $em = $this->getDoctrine()->getManager();
                $membre->setDateNaissanceMembre(htmlspecialchars($_POST['datenaissance']));
                $membre->setDateEtabMembre(htmlspecialchars($_POST['dateemission']));
                $membre->setDateExpiMembre(htmlspecialchars($_POST['datereception']));
                if (isset($_POST['sexe'])) {
                    $membre->setSexe($_POST['sexe']);
                }
                try {
                    $fosuser = $em->getRepository('CestomStoreBundle:FosUser')
                            ->find($this->getUser()->getId());
                    $membre->setId($fosuser);
                    $em->persist($membre);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('messagesucces', 'Les informations ont été modifiées avec succès');
                    return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                                'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
                } catch (\Exception $e) {
                    $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification : Veuillez vérifier la cohérence les données.');
                    return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                                'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
                }
            } else {
                $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification');
                return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                            'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
            }
        }
        return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                    'form' => $form->createView(), 'sexe' => $membre->getSexe(), 'datenaissance' => $membre->getDateNaissanceMembre(), 'dateemission' => $membre->getDateEtabMembre(), 'dateexpiration' => $membre->getDateExpiMembre()));
    }

}

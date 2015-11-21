<?php

namespace Cestom\UserBundle\Controller;

use Cestom\StoreBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionCompteController extends Controller {

    public function afficherCompteAction(){
    $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        if ($membre == null) {
 return $this->redirectToRoute('cestom_user_homepage');           
        }

      return $this->render('CestomUserBundle:GestionCompte:gestionafficherCompte.html.twig', array(
                     'membre' => $membre));
}
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
	        ->add('fichierPhotoMimMembre', 'vich_image', array('required' => false, 'allow_delete'  => false , 'download_link' => false))
          
                ->add('telephonefirst', 'text', array('required' => true))
                ->add('telephonesecond', 'text', array('required' => false))
                ->add('dernierLyceeFrequente', 'text', array('required' => true))
                ->getForm();

        $request = $this->get('request');
// On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                
                $membre->setDateNaissanceMembre(htmlspecialchars($_POST['datenaissance']));
                $membre->setDateEtabMembre(htmlspecialchars($_POST['dateemission']));
                $membre->setDateExpiMembre(htmlspecialchars($_POST['datereception']));
                if (isset($_POST['sexe'])) {
                    $membre->setSexe(htmlspecialchars($_POST['sexe']));
                }
                try {
                    $fosuser = $em->getRepository('CestomUserBundle:User')
                            ->find($this->getUser()->getId());
                    $membre->setId($fosuser);
                    $em->persist($membre);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('messagesucces', 'Les informations ont été modifiées avec succès');
                    return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                                'form' => $form->createView(),  'membre' => $membre));
                } catch (\Exception $e) {
                    $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification : Veuillez vérifier la cohérence les données.');
                    return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                                'form' => $form->createView(), 'membre' => $membre));
                }
            } else {
                $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification');
                return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                            'form' => $form->createView(), 'membre' => $membre));
            }
        }
        return $this->render('CestomUserBundle:GestionCompte:gestionCompte.html.twig', array(
                    'form' => $form->createView(), 'membre' => $membre));
    }



    public function gestionImageAction() {
        $em = $this->getDoctrine()->getManager();

        $membre = $em->getRepository('CestomStoreBundle:Membre')
                ->findOneByid($this->getUser()->getId());

        if ($membre == null) {
            $membre = new Membre();
        }
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($membre)
                
	        ->add('fichierPhotoMimMembre', 'vich_image', array('required' => false, 'allow_delete'  => false , 'download_link' => false))
                ->getForm();

        $request = $this->get('request');
// On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

                $em = $this->getDoctrine()->getManager();
               
                try {
                    $fosuser = $em->getRepository('CestomUserBundle:User')
                            ->find($this->getUser()->getId());
                    $membre->setId($fosuser);
                    $em->persist($membre);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('messagesucces', 'Photo  modifiée avec succès');
                    return $this->redirectToRoute('cestom_user_homepage');
                } catch (\Exception $e) {
                    $request->getSession()->getFlashBag()->add('messageerror', 'Echec de la modification : Veuillez vérifier la cohérence les données.');
                                        return $this->redirectToRoute('cestom_user_homepage');
                }
            } 
        
                            return $this->redirectToRoute('cestom_user_homepage');
   }
   
}

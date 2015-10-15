<?php

namespace Cestom\ArticleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cestom\ArticleBundle\Entity\Categorie;
use Cestom\ArticleBundle\Form\CategorieType;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{
	
	public function __construct()
	{
		$this->templates = array(
			'new'  => 'CestomArticleBundle:Categorie:new.html.twig',
			'edit' => 'CestomArticleBundle:Categorie:edit.html.twig',
			'index' => 'CestomArticleBundle:Categorie:index.html.twig',
			'show' => 'CestomArticleBundle:Categorie:show.html.twig',
		);
		$this->mesRoutes = array(
			'index'   => 'cestomarticlebundle_categorie',
			'new'     => 'cestomarticlebundle_categorie_new',
			'create'  => 'cestomarticlebundle_categorie_create',
			'show'    => 'cestomarticlebundle_categorie_show',
			'edit'    => 'cestomarticlebundle_categorie_edit',
			'update'  => 'cestomarticlebundle_categorie_update',
			'delete'  => 'cestomarticlebundle_categorie_delete',
		);
	}

    /**
     * Lists all Categorie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CestomArticleBundle:Categorie')->findAll();

        return $this->render($this->templates["index"], array(
            'entities' => $entities,
			'mesRoutes' => $this->mesRoutes,
        ));
    }
    /**
     * Creates a new Categorie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Categorie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl($this->mesRoutes["show"], array('id' => $entity->getId())));
        }

        return $this->render($this->templates["new"], array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl($this->mesRoutes["create"]),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createCreateForm($entity);

        return $this->render($this->templates["new"], array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }

    /**
     * Finds and displays a Categorie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render($this->templates["show"], array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render($this->templates["edit"], array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }

    /**
    * Creates a form to edit a Categorie entity.
    *
    * @param Categorie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl($this->mesRoutes["update"], array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Categorie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl($this->mesRoutes["show"], array('id' => $id)));
        }

        return $this->render($this->templates["edit"], array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }
    /**
     * Deletes a Categorie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CestomArticleBundle:Categorie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categorie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl($this->mesRoutes["index"]));
    }

    /**
     * Creates a form to delete a Categorie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($this->mesRoutes["delete"], array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

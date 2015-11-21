<?php

namespace Cestom\ArticleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cestom\ArticleBundle\Entity\Article;
use Cestom\ArticleBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
	public function __construct()
	{
		$this->templates = array(
			'new'  => 'CestomArticleBundle:Article:new.html.twig',
			'edit' => 'CestomArticleBundle:Article:edit.html.twig',
			'index' => 'CestomArticleBundle:Article:index.html.twig',
			'show' => 'CestomArticleBundle:Article:show.html.twig',
			'showPublic' => 'CestomArticleBundle:Article:showPublic.html.twig',
		);
		$this->mesRoutes = array(
			'index'   => 'cestomarticlebundle_article',
			'new'     => 'cestomarticlebundle_article_new',
			'create'  => 'cestomarticlebundle_article_create',
			'show'    => 'cestomarticlebundle_article_show',
			'edit'    => 'cestomarticlebundle_article_edit',
			'update'  => 'cestomarticlebundle_article_update',
			'delete'  => 'cestomarticlebundle_article_delete',
			'showPublic'  => 'cestomarticlebundle_article_showPublic'
		);
	}


    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CestomArticleBundle:Article')->findAll();

        return $this->render($this->templates["index"], array(
            'entities' => $entities,
			'mesRoutes' => $this->mesRoutes,
        ));
    }
    /**
     * Creates a new Article entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Article();
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
     * Creates a form to create a Article entity.
     *
     * @param Article $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl($this->mesRoutes["create"]),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Article entity.
     *
     */
    public function newAction()
    {
        $entity = new Article();
        $form   = $this->createCreateForm($entity);

        return $this->render($this->templates["new"], array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'mesRoutes' => $this->mesRoutes,
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render($this->templates["show"], array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'mesRoutes'   => $this->mesRoutes,
        ));
    }
	/**
     * Finds and displays a Article entity.
     *
     */
    public function showPublicAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        return $this->render($this->templates["showPublic"], array(
            'entity'      => $entity,
			'mesRoutes'   => $this->mesRoutes,
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render($this->templates["edit"], array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'mesRoutes'   => $this->mesRoutes,
        ));
    }

    /**
    * Creates a form to edit a Article entity.
    *
    * @param Article $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl($this->mesRoutes["update"], array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Article entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CestomArticleBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl($this->mesRoutes["edit"], array('id' => $id)));
        }

        return $this->render($this->templates["edit"], array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'mesRoutes'   => $this->mesRoutes,
        ));
    }
    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CestomArticleBundle:Article')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Article entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl($this->mesRoutes["index"]));
    }

    /**
     * Creates a form to delete a Article entity by id.
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
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}

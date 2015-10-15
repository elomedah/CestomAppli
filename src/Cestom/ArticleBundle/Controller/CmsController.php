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
class CmsController extends Controller
{
	private function parametrageHome(){
		$config = array(
			"pays_1" => 1,
			"pays_2" => 2,
		);
		
		$this->homeConfig = $config;
		return $config;
	}

	public function __construct()
	{
		$this->templates = array(
			'home'  => 'CestomArticleBundle:Cms:index.html.twig',
		);
		$this->mesRoutes = array(
			'home'            => 'cestom_home',
			'showArticle'     => 'cestomarticlebundle_article_show',
		);
	}

    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$config = $this->parametrageHome();
		$leadArticle = null;
		
		$pays1 = $em->getRepository('CestomArticleBundle:Pays')->find($config["pays_1"]);
		$pays2 = $em->getRepository('CestomArticleBundle:Pays')->find($config["pays_2"]);
		$articlesBlock1 = $em->getRepository('CestomArticleBundle:Article')->findBy(array("pays" => $config["pays_1"]), array("id" => "DESC"));
		$articlesBlock2 = $em->getRepository('CestomArticleBundle:Article')->findBy(array("pays" => $config["pays_2"]), array("id" => "DESC"));
		
		if (count($articlesBlock2) > 0)
		{
			$leadArticle = $articlesBlock2[0];
			unset($articlesBlock2[0]);
		}

        return $this->render('CestomArticleBundle:Cms:index.html.twig', array(
            'block1' => array("pays" => $pays1, "articles" => $articlesBlock1),
            'block2' => array("pays" => $pays2, "articles" => $articlesBlock2, "topArticle" => $leadArticle),
			'mesRoutes' => $this->mesRoutes,
        ));
    }
}

<?php

/* CestomArticleBundle:Categorie:new.html.twig */
class __TwigTemplate_6e7bf8f2f9f4d0c3c1bad9695589332fe5376436efce1fba85b06dcd9a2d2e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Categorie:new.html.twig", 1);
        $this->blocks = array(
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
    Création d'une nouvelle catégorie
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
\t<div class=\"container panel panel-default mypanel \">
\t\t<div class=\"row panel-body gray-black\">
\t\t<div class=\"record_actions btn btn-default\">
\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "index", array()));
        echo "\">
\t\t\t\tRetour
\t\t\t</a>
\t\t</div>
\t\t</div>
\t\t</div>
\t\t
\t<style>
\t\tbody{
\t\t\tbackground-color:#E8E8E8;
\t\t\tmargin:15px;
\t\t}
\t\th1\t{
\t\t\ttext-align:center;
\t\t\tvertical-align:middle;
\t\t\twidth:100%;
\t\t\ttext-decoration:underline;
\t\t}
\t\t.form-horizontal .control-label {
\t\t\tpadding-top: 7px;
\t\t\tmargin-bottom: 0;
\t\t\ttext-align: left;
\t\t\tfont-size: 16px;
\t\t}
\t<style>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  40 => 13,  37 => 11,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block soustitre %} */
/*     Création d'une nouvelle catégorie*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block content -%}*/
/* */
/*     {{ form(form) }}*/
/* 	<div class="container panel panel-default mypanel ">*/
/* 		<div class="row panel-body gray-black">*/
/* 		<div class="record_actions btn btn-default">*/
/* 			<a href="{{ path(mesRoutes.index) }}">*/
/* 				Retour*/
/* 			</a>*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>*/
/* 		*/
/* 	<style>*/
/* 		body{*/
/* 			background-color:#E8E8E8;*/
/* 			margin:15px;*/
/* 		}*/
/* 		h1	{*/
/* 			text-align:center;*/
/* 			vertical-align:middle;*/
/* 			width:100%;*/
/* 			text-decoration:underline;*/
/* 		}*/
/* 		.form-horizontal .control-label {*/
/* 			padding-top: 7px;*/
/* 			margin-bottom: 0;*/
/* 			text-align: left;*/
/* 			font-size: 16px;*/
/* 		}*/
/* 	<style>*/
/* {% endblock %}*/
/* */

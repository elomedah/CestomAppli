<?php

/* CestomArticleBundle:Categorie:edit.html.twig */
class __TwigTemplate_a77cb129f74abffafb1e19bf197c9eb37863b46b8ab4c28a8bd6bbd76acf8bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Categorie:edit.html.twig", 1);
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

    // line 5
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
    Modification de la catégorie
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

\t<div class=\"container panel panel-default mypanel\">
\t\t<div class=\"row panel-body\">
\t\t
\t\t\t<span class=\"record_actions btn btn-default\">
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : $this->getContext($context, "mesRoutes")), "index", array()));
        echo "\">
\t\t\t\tRetour
\t\t\t</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : $this->getContext($context, "mesRoutes")), "new", array()));
        echo "\"  class=\"btn btn-default \">
\t\t\t\tAjouter une nouvelle <strong>catégorie</strong>
\t\t\t</a>
\t\t\t</span>
\t
\t\t\t<span class=\"pull-right\"> 
\t\t\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</span>
\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  70 => 30,  66 => 29,  57 => 23,  49 => 18,  40 => 12,  37 => 10,  29 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/*  */
/* */
/* {% block soustitre %} */
/*     Modification de la catégorie*/
/* {% endblock %}*/
/* */
/* */
/* {% block content -%}*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/* 	<div class="container panel panel-default mypanel">*/
/* 		<div class="row panel-body">*/
/* 		*/
/* 			<span class="record_actions btn btn-default">*/
/* 			<a href="{{ path(mesRoutes.index) }}">*/
/* 				Retour*/
/* 			</a>*/
/* 			</span>*/
/* 			<span>*/
/* 			<a href="{{ path(mesRoutes.new) }}"  class="btn btn-default ">*/
/* 				Ajouter une nouvelle <strong>catégorie</strong>*/
/* 			</a>*/
/* 			</span>*/
/* 	*/
/* 			<span class="pull-right"> */
/* 						{{ form_start(delete_form) }}*/
/* 						{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 						{{ form_end(delete_form) }}*/
/* 			</span>*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

<?php

/* CestomArticleBundle:Article:edit.html.twig */
class __TwigTemplate_61adac25f393969cbbf7f0b6b517a80807a10ff3b7049c339c6e964af08408e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Article:edit.html.twig", 1);
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
    Modification d'un article
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
\t
\t\t<div class=\"container panel panel-default mypanel\">
\t\t\t<div class=\"row panel-body\">
\t\t\t\t<span class=\" record_actions btn btn-default\">
\t\t\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "index", array()));
        echo "\">
\t\t\t\t\t\t\t\tRetour
\t\t\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "new", array()));
        echo "\"  class=\"btn btn-success \">
\t\t\t\t\t\tAjouter un <strong>article</strong>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  68 => 28,  64 => 27,  56 => 22,  48 => 17,  40 => 12,  37 => 10,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*  */
/* */
/* {% block soustitre %} */
/*     Modification d'un article*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content -%}*/
/* */
/*     {{ form(edit_form) }}*/
/* 	*/
/* 		<div class="container panel panel-default mypanel">*/
/* 			<div class="row panel-body">*/
/* 				<span class=" record_actions btn btn-default">*/
/* 							<a href="{{ path(mesRoutes.index) }}">*/
/* 								Retour*/
/* 							</a>*/
/* 				</span>*/
/* 				<span>*/
/* 					<a href="{{ path(mesRoutes.new) }}"  class="btn btn-success ">*/
/* 						Ajouter un <strong>article</strong>*/
/* 					</a>*/
/* 				</span>*/
/* 				<div class="pull-right">*/
/* 							{{ form_start(delete_form) }}*/
/* 							{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 							{{ form_end(delete_form) }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* {% endblock %}*/
/* */

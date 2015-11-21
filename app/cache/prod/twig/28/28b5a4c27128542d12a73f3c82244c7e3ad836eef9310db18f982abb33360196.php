<?php

/* CestomArticleBundle:Pays:edit.html.twig */
class __TwigTemplate_946503ad2e6aff55bc226dcef09067b43bd8553614a46cd7e8cb4c002eeb9b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_articles.html.twig", "CestomArticleBundle:Pays:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_articles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Pays edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

    <div class=\"container panel panel-default mypanel\">
    <div class=\"row panel-body \">
\t\t<span class=\"btn btn-default\">
\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pays");
        echo "\">
\t\t\t\tRetour
\t\t\t</a>
\t\t</span>
\t\t<div class=\"pull-right\">
\t\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
\t\t</div>
\t</div> 
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Pays:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  55 => 17,  51 => 16,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base_articles.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Pays edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*     <div class="container panel panel-default mypanel">*/
/*     <div class="row panel-body ">*/
/* 		<span class="btn btn-default">*/
/* 			<a href="{{ path('pays') }}">*/
/* 				Retour*/
/* 			</a>*/
/* 		</span>*/
/* 		<div class="pull-right">*/
/* 			{{ form_start(delete_form) }}*/
/* 			{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 			{{ form_end(delete_form) }}*/
/* 		</div>*/
/* 	</div> */
/* 	</div>*/
/* {% endblock %}*/
/* */

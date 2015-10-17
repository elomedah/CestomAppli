<?php

/* CestomArticleBundle:Article:new.html.twig */
class __TwigTemplate_cea622d80e49a93d7f925cf4b7500eb2eef2a194902b9c6c844bda70658d5714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Article:new.html.twig", 1);
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
    Nouvel article
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
\t<div class=\"container panel panel-default mypanel\">
        <div class=\"row panel-body\">
\t\t<div class=\"record_actions retour btn btn-default \">
\t\t\t<div>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "index", array()));
        echo "\">
\t\t\t\t\tRetour
\t\t\t\t</a>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  40 => 11,  37 => 10,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*  */
/* */
/* {% block soustitre %} */
/*     Nouvel article*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content -%}*/
/* 	 {{ form(form) }}*/
/* 	<div class="container panel panel-default mypanel">*/
/*         <div class="row panel-body">*/
/* 		<div class="record_actions retour btn btn-default ">*/
/* 			<div>*/
/* 				<a href="{{ path(mesRoutes.index) }}">*/
/* 					Retour*/
/* 				</a>*/
/* 			</div>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* {% endblock %}*/
/* */

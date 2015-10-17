<?php

/* CestomArticleBundle:Pays:new.html.twig */
class __TwigTemplate_94e39fd8cd749c19f925056d8dc2fa45f80a393ddf9aefc7f0038a35728a1978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_articles.html.twig", "CestomArticleBundle:Pays:new.html.twig", 1);
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
        echo "<h1>Pays creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <div class=\"container panel panel-default mypanel\">
\t\t<div class=\"row panel-body\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pays");
        echo "\" class=\"btn btn-default\">
            Retour
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Pays:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base_articles.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Pays creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <div class="container panel panel-default mypanel">*/
/* 		<div class="row panel-body">*/
/*         <a href="{{ path('pays') }}" class="btn btn-default">*/
/*             Retour*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */

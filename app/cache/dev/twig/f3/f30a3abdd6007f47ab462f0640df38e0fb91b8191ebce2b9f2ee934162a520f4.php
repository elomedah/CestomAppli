<?php

/* CestomArticleBundle:Article:new.html.twig */
class __TwigTemplate_8d1a458544c87b888cd15f8c2f960bf20b998b9c82372d23e08ecf5ee79a3970 extends Twig_Template
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

    // line 3
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
    Nouvel article
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"container-fluid\">
\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t </div>
\t<style>
\t#cestom_articlebundle_article_submit:hover{
\t\tborder-color: #2196F3;
\t}
\t<style>
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
        return array (  43 => 11,  40 => 10,  37 => 9,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %} */
/* 	*/
/* {% block soustitre %} */
/*     Nouvel article*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content -%}*/
/* 	 <div class="container-fluid">*/
/* 		{{ form(form) }}*/
/* 	 </div>*/
/* 	<style>*/
/* 	#cestom_articlebundle_article_submit:hover{*/
/* 		border-color: #2196F3;*/
/* 	}*/
/* 	<style>*/
/* {% endblock %}*/

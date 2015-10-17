<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_91debecff5ba7099cd68d9e7a1ba98a185a2469c5903fd2f0ab4573139cf8fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_logo' => array($this, 'block_fos_user_logo'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_logo($context, array $blocks = array())
    {
        // line 6
        echo "                    <div class=\"center\">
\t\t\t\t\t\t\t\t<h1>
                                <img class=\"nav-user-photo\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/logo/cestom.jpg"), "html", null, true);
        echo "\" alt=\"Admin\" />
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t</div>
                                 ";
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  45 => 14,  36 => 8,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends "login.html.twig" %}*/
/* */
/* */
/* */
/*  {% block fos_user_logo %}*/
/*                     <div class="center">*/
/* 								<h1>*/
/*                                 <img class="nav-user-photo" src="{{asset('assets/logo/cestom.jpg')}}" alt="Admin" />*/
/* 									*/
/* 								</h1>*/
/* 							</div>*/
/*                                  {% endblock %}*/
/*       */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
/* */

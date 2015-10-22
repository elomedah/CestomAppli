<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5df70edc5d11dc9a4d024af92c752b63a0cf4bc0d40c51244cc28c4dd66f108f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
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

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"space-6\"></div>
    <div class=\"widget-body\">
        <div class=\"widget-main\">

            <h3 class=\"header green lighter bigger\">
                Le compte est crée avec succès. 
            </h3>
            <p>Nom d'utilisateur (username) : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
            <p>Email : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</p>



            <div class=\"clearfix\">

                <a style=\"color:white\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" data-target=\"#login-box\" class=\"\">

                    <button type=\"button\" class=\"width-35 pull-left btn btn-sm btn-success\">
                        <i class=\"ace-icon fa fa-arrow-left\"></i>
                        Connexion

                    </button>
                </a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  44 => 18,  40 => 17,  31 => 10,  28 => 9,  11 => 1,);
    }
}
/* {% extends "login.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/*     <div class="space-6"></div>*/
/*     <div class="widget-body">*/
/*         <div class="widget-main">*/
/* */
/*             <h3 class="header green lighter bigger">*/
/*                 Le compte est crée avec succès. */
/*             </h3>*/
/*             <p>Nom d'utilisateur (username) : {{  user.username  }}</p>*/
/*             <p>Email : {{  user.email  }}</p>*/
/* */
/* */
/* */
/*             <div class="clearfix">*/
/* */
/*                 <a style="color:white" href="{{ path('fos_user_security_login') }}" data-target="#login-box" class="">*/
/* */
/*                     <button type="button" class="width-35 pull-left btn btn-sm btn-success">*/
/*                         <i class="ace-icon fa fa-arrow-left"></i>*/
/*                         Connexion*/
/* */
/*                     </button>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */

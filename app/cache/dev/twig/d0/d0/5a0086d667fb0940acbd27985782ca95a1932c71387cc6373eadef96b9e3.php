<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d0d05a0086d667fb0940acbd27985782ca95a1932c71387cc6373eadef96b9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("login.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        echo "<div class=\"space-6\"></div>
<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">

\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"header green lighter bigger\">
\t\t\t\t\t\t\t\t\t\t\t\tLe compte est crée avec succès. 
\t\t\t\t\t\t\t\t\t\t\t</h3>
 \t\t\t\t\t\t\t\t\t\t\t<p>Nom d'utilisateur (username) : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Email : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>



<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    
                                                                                                                    <button type=\"button\" class=\"width-35 pull-left btn btn-sm btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:white\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" data-target=\"#login-box\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t\t\t\t\t</a>
                                                                                                                    </button>
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
        return array (  63 => 26,  52 => 18,  48 => 17,  39 => 10,  36 => 9,  11 => 1,);
    }
}

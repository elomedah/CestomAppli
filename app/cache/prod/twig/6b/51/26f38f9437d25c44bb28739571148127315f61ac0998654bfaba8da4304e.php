<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6b5126f38f9437d25c44bb28739571148127315f61ac0998654bfaba8da4304e extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "


    

<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<div id=\"login-box\" class=\"login-box visible widget-box no-border\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>
";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "    <div >
<span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo " </span>
</br>
<span style=\"color:red;\"> Mot de passe ou username incorrect </span>
</div>
";
        }
        // line 25
        echo "\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
 <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"_target_path\" value=\"account\" />


\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\"  id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

    

  



\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Se souvenir de moi</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t
    <input class=\"width-35 pull-right btn btn-sm btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" /> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-4\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!-- /.widget-main -->

\t\t\t\t\t\t\t\t\t\t<div class=\"toolbar clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tMot de passe oublié
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" data-target=\"#signup-box\" class=\"user-signup-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tS'enregistrer
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- /.widget-body -->
\t\t\t\t\t\t\t\t</div><!-- /.login-box -->

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!-- /.position-relative -->




";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 85,  82 => 34,  71 => 26,  66 => 25,  58 => 20,  55 => 19,  53 => 18,  39 => 6,  36 => 5,  11 => 1,);
    }
}

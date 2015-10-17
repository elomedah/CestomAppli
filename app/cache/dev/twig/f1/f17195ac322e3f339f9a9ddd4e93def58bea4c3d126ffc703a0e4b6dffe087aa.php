<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c2f4b51938bfd1be826f49f8e2d41d32a26b0ea1a253a33366bbcf2a2504ccfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "    <div >
<span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"_target_path\" value=\"account\" />


\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\"  id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        return array (  128 => 85,  74 => 34,  63 => 26,  58 => 25,  50 => 20,  47 => 19,  45 => 18,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'login.html.twig' %}*/
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* */
/*     */
/* */
/* <div class="position-relative">*/
/* 								<div id="login-box" class="login-box visible widget-box no-border">*/
/* 									<div class="widget-body">*/
/* 										<div class="widget-main">*/
/* 											*/
/* */
/* 											<div class="space-6"></div>*/
/* {% if error %}*/
/*     <div >*/
/* <span>{{ error.messageKey|trans(error.messageData, 'security') }} </span>*/
/* </br>*/
/* <span style="color:red;"> Mot de passe ou username incorrect </span>*/
/* </div>*/
/* {% endif %}*/
/* 											<form action="{{ path("fos_user_security_check") }}" method="post">*/
/*  <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     <input type="hidden" name="_target_path" value="account" />*/
/* */
/* */
/* 												<fieldset>*/
/* 													<label class="block clearfix">*/
/* 														<span class="block input-icon input-icon-right">*/
/* 				*/
/* 											<input type="text" class="form-control" placeholder="Email"  id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 															<i class="ace-icon fa fa-user"></i>*/
/* 														</span>*/
/* 													</label>*/
/* */
/*     */
/* */
/*   */
/* */
/* */
/* */
/* 													<label class="block clearfix">*/
/* 														<span class="block input-icon input-icon-right">*/
/* 															<input type="password" class="form-control" placeholder="Password" id="password" name="_password" required="required"/>*/
/* 															<i class="ace-icon fa fa-lock"></i>*/
/* 														</span>*/
/* 													</label>*/
/* */
/* 													<div class="space"></div>*/
/* */
/* 													<div class="clearfix">*/
/* 														<label class="inline">*/
/* 															<input type="checkbox" class="ace" id="remember_me" name="_remember_me" value="on" />*/
/* 															<span class="lbl"> Se souvenir de moi</span>*/
/* 														</label>*/
/* */
/* 		*/
/*     <input class="width-35 pull-right btn btn-sm btn-primary" type="submit" id="_submit" name="_submit" value="Se connecter" /> */
/* 														*/
/* */
/* */
/* 													</div>*/
/* */
/* 													<div class="space-4"></div>*/
/* 												</fieldset>*/
/* 											</form>*/
/* */
/* 											*/
/* */
/* 											*/
/* 										</div><!-- /.widget-main -->*/
/* */
/* 										<div class="toolbar clearfix">*/
/* 											<div>*/
/* 												<a href="#" data-target="#forgot-box" class="forgot-password-link">*/
/* 													<i class="ace-icon fa fa-arrow-left"></i>*/
/* 													Mot de passe oublié*/
/* 												</a>*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												<a href="{{path ('fos_user_registration_register') }}" data-target="#signup-box" class="user-signup-link">*/
/* 													S'enregistrer*/
/* 													<i class="ace-icon fa fa-arrow-right"></i>*/
/* 												</a>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div><!-- /.widget-body -->*/
/* 								</div><!-- /.login-box -->*/
/* */
/* 								*/
/* 							</div><!-- /.position-relative -->*/
/* */
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */

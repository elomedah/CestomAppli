<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_43ae4d6b36c1467cff2c8d11510dc515e62bed00c496587150233e10523147f4 extends Twig_Template
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
        <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
            <div class=\"widget-body\">
                <div class=\"widget-main\">


                    <div class=\"space-6\"></div>
                    ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "                        <div >
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
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"_target_path\" value=\"account\" />


                        <fieldset>
                            <label class=\"block clearfix\">
                                <span class=\"block input-icon input-icon-right\">

                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"  id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                                    <i class=\"ace-icon fa fa-user\"></i>
                                </span>
                            </label>







                            <label class=\"block clearfix\">
                                <span class=\"block input-icon input-icon-right\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\"/>
                                    <i class=\"ace-icon fa fa-lock\"></i>
                                </span>
                            </label>

                            <div class=\"space\"></div>

                            <div class=\"clearfix\">
                                <label class=\"inline\">
                                    <input type=\"checkbox\" class=\"ace\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    <span class=\"lbl\"> Se souvenir de moi</span>
                                </label>


                                <input class=\"width-35 pull-right btn btn-sm btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" /> 



                            </div>

                            <div class=\"space-4\"></div>
                        </fieldset>
                    </form>




                </div><!-- /.widget-main -->

                <div class=\"toolbar clearfix\">
                    <div>
                        <a href=\"#\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
                            Mot de passe oublié
                        </a>
                    </div>

                    <div>
                        <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" data-target=\"#signup-box\" class=\"user-signup-link\">
                            S'enregistrer
                        </a>
                    </div>
                </div>
            </div><!-- /.widget-body -->
        </div><!-- /.login-box -->


    </div><!-- /.position-relative -->




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
        return array (  127 => 84,  74 => 34,  63 => 26,  58 => 25,  50 => 20,  47 => 19,  45 => 18,  31 => 6,  28 => 5,  11 => 1,);
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
/* */
/* */
/*     <div class="position-relative">*/
/*         <div id="login-box" class="login-box visible widget-box no-border">*/
/*             <div class="widget-body">*/
/*                 <div class="widget-main">*/
/* */
/* */
/*                     <div class="space-6"></div>*/
/*                     {% if error %}*/
/*                         <div >*/
/*                             <span>{{ error.messageKey|trans(error.messageData, 'security') }} </span>*/
/*                             </br>*/
/*                             <span style="color:red;"> Mot de passe ou username incorrect </span>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <input type="hidden" name="_target_path" value="account" />*/
/* */
/* */
/*                         <fieldset>*/
/*                             <label class="block clearfix">*/
/*                                 <span class="block input-icon input-icon-right">*/
/* */
/*                                     <input type="text" class="form-control" placeholder="Email"  id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                                     <i class="ace-icon fa fa-user"></i>*/
/*                                 </span>*/
/*                             </label>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                             <label class="block clearfix">*/
/*                                 <span class="block input-icon input-icon-right">*/
/*                                     <input type="password" class="form-control" placeholder="Password" id="password" name="_password" required="required"/>*/
/*                                     <i class="ace-icon fa fa-lock"></i>*/
/*                                 </span>*/
/*                             </label>*/
/* */
/*                             <div class="space"></div>*/
/* */
/*                             <div class="clearfix">*/
/*                                 <label class="inline">*/
/*                                     <input type="checkbox" class="ace" id="remember_me" name="_remember_me" value="on" />*/
/*                                     <span class="lbl"> Se souvenir de moi</span>*/
/*                                 </label>*/
/* */
/* */
/*                                 <input class="width-35 pull-right btn btn-sm btn-primary" type="submit" id="_submit" name="_submit" value="Se connecter" /> */
/* */
/* */
/* */
/*                             </div>*/
/* */
/*                             <div class="space-4"></div>*/
/*                         </fieldset>*/
/*                     </form>*/
/* */
/* */
/* */
/* */
/*                 </div><!-- /.widget-main -->*/
/* */
/*                 <div class="toolbar clearfix">*/
/*                     <div>*/
/*                         <a href="#" data-target="#forgot-box" class="forgot-password-link">*/
/*                             Mot de passe oublié*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div>*/
/*                         <a href="{{path ('fos_user_registration_register') }}" data-target="#signup-box" class="user-signup-link">*/
/*                             S'enregistrer*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.widget-body -->*/
/*         </div><!-- /.login-box -->*/
/* */
/* */
/*     </div><!-- /.position-relative -->*/
/* */
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */

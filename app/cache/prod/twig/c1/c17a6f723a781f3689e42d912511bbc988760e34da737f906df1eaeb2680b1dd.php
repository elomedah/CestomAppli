<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b0390249e5f77881eb1c523cfb60fbfb87d9ce2b58a9cef43c9ea91b190007c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "



<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">


    <div class=\"widget-body\">
        <div class=\"widget-main\">
            <h3 class=\"header green lighter bigger\">
                <i class=\"ace-icon fa fa-users blue\"></i>
                S'enregistrer 
            </h3>


            <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"  method=\"POST\" >
                <fieldset>
                    ";
        // line 19
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()) != null)) {
            // line 20
            echo "
                        <span style=\"color:red;\"> Username ou email existe déjà </span>

                    ";
        }
        // line 24
        echo "                    <label class=\"block clearfix\">
                        <span class=\"block input-icon input-icon-right\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                            <i class=\"ace-icon fa fa-envelope\"></i>

                        </span>
                    </label>

                    <label class=\"block clearfix\">
                        <span class=\"block input-icon input-icon-right\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
                            <i class=\"ace-icon fa fa-user\"></i>
                        </span>
                    </label>

                    <label class=\"block clearfix\">
                        <span class=\"block input-icon input-icon-right\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "

                            <i class=\"ace-icon fa fa-lock\"></i>
                        </span>
                    </label>

                    <label class=\"block clearfix\">
                        <span class=\"block input-icon input-icon-right\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmer mot de passe")));
        echo "
                            <i class=\"ace-icon fa fa-retweet\"></i>
                        </span>
                    </label>

                    <label class=\"block\">
                        <input type=\"checkbox\" class=\"ace\" />
                        <span class=\"lbl\">

                            <a href=\"#\">J'accepte les conditions de la CESTOM</a>
                        </span>
                    </label>
                    <div class=\"clearfix\">

                        <input class=\"width-35 pull-right btn btn-sm btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"S'inscrire\" /> 

                        <a style=\"color:white\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" >
                            <button type=\"button\" class=\"width-35 pull-left btn btn-sm btn-success\">

                                <i class=\"ace-icon fa fa-arrow-left\"></i>
                                Connexion
                            </button>
                        </a>

                    </div>
                </fieldset>
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            </form>

        </div>

    </div><!-- /.widget-body -->


</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 75,  109 => 65,  90 => 49,  79 => 41,  69 => 34,  58 => 26,  54 => 24,  48 => 20,  46 => 19,  41 => 17,  25 => 6,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* */
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/* */
/* */
/*     <div class="widget-body">*/
/*         <div class="widget-main">*/
/*             <h3 class="header green lighter bigger">*/
/*                 <i class="ace-icon fa fa-users blue"></i>*/
/*                 S'enregistrer */
/*             </h3>*/
/* */
/* */
/*             <form action="{{ path('fos_user_registration_register') }}"  method="POST" >*/
/*                 <fieldset>*/
/*                     {% if form.email != null %}*/
/* */
/*                         <span style="color:red;"> Username ou email existe déjà </span>*/
/* */
/*                     {% endif %}*/
/*                     <label class="block clearfix">*/
/*                         <span class="block input-icon input-icon-right">*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder':'Email'}}) }}*/
/*                             <i class="ace-icon fa fa-envelope"></i>*/
/* */
/*                         </span>*/
/*                     </label>*/
/* */
/*                     <label class="block clearfix">*/
/*                         <span class="block input-icon input-icon-right">*/
/*                             {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder':'Username'}}) }}*/
/*                             <i class="ace-icon fa fa-user"></i>*/
/*                         </span>*/
/*                     </label>*/
/* */
/*                     <label class="block clearfix">*/
/*                         <span class="block input-icon input-icon-right">*/
/*                             {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder':'Mot de passe'}}) }}*/
/* */
/*                             <i class="ace-icon fa fa-lock"></i>*/
/*                         </span>*/
/*                     </label>*/
/* */
/*                     <label class="block clearfix">*/
/*                         <span class="block input-icon input-icon-right">*/
/*                             {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder':'Confirmer mot de passe'}}) }}*/
/*                             <i class="ace-icon fa fa-retweet"></i>*/
/*                         </span>*/
/*                     </label>*/
/* */
/*                     <label class="block">*/
/*                         <input type="checkbox" class="ace" />*/
/*                         <span class="lbl">*/
/* */
/*                             <a href="#">J'accepte les conditions de la CESTOM</a>*/
/*                         </span>*/
/*                     </label>*/
/*                     <div class="clearfix">*/
/* */
/*                         <input class="width-35 pull-right btn btn-sm btn-primary" type="submit" id="_submit" name="_submit" value="S'inscrire" /> */
/* */
/*                         <a style="color:white" href="{{ path('fos_user_security_login') }}" >*/
/*                             <button type="button" class="width-35 pull-left btn btn-sm btn-success">*/
/* */
/*                                 <i class="ace-icon fa fa-arrow-left"></i>*/
/*                                 Connexion*/
/*                             </button>*/
/*                         </a>*/
/* */
/*                     </div>*/
/*                 </fieldset>*/
/*                 {{ form_widget(form)}}*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div><!-- /.widget-body -->*/
/* */
/* */
/* </form>*/
/* */

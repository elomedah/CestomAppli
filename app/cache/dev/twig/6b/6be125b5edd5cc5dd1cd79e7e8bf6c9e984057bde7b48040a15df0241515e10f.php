<?php

/* login.html.twig */
class __TwigTemplate_612b7395194596afd6bf969a8ffa4c1d3f5ff0169e76075e027b54e4d45a35d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"utf-8\" />
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        <title>Connectez-vous, Cestom</title>

        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        
        <!-- page specific plugin styles -->

        <!-- text fonts -->
      <!--  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" /> -->

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 27
        $this->displayBlock('style', $context, $blocks);
        // line 28
        echo "    </head>

 <body class=\"container-fluid\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<span class=\"panel-heading\">
\t\t\t\t";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7a029c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a029c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e7a029c_icone-site-cestom_1.png");
            // line 34
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"etoile-cestom\" alt=\"etoile-cestom\"/>
\t\t\t\t";
        } else {
            // asset "e7a029c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a029c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e7a029c.png");
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"etoile-cestom\" alt=\"etoile-cestom\"/>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "Authentification</span>
\t\t\t";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "\t\t</div>
\t\t
        <!-- basic scripts -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 52
        echo "\t\t<style>
\t\t\t.login-box .toolbar {
\t\t\t\tbackground: #838383;
\t\t\t\tborder-top: 2px solid #838383;
\t\t\t}
\t\t\t.btn-primary, .btn-primary:active, .open .btn-primary.dropdown-toggle {
\t\t\t\tbackground-color: #4CAF50 !important;
\t\t\t\tborder-color: #4CAF50;
\t\t\t}
\t\t\t.login-box .user-signup-link {
\t\t\t\tcolor: #fff;
\t\t\t}
\t\t\tbody{
\t\t\t\tcolor:black;
\t\t\t\tbackground-color:white;
\t\t\t\tbackground-image: url(../../../images/icone-site-cestom.png);
\t\t\t}
\t\t\t.panel-primary>.panel-heading {
\t\t\t\tbackground-color: #838383;
\t\t\t\twidth: 50%;
\t\t\t\t/*color: black; */
\t\t\t\tborder-color: #838383;
\t\t\t\tfont-size:25px;
\t\t\t}
\t\t\t.panel-primary{
\t\t\t\tbackground-color: #838383;
\t\t\t\tborder-color: \t  #838383;
\t\t\t}
\t\t\t.panel{
\t\t\t\tmargin-top: 50px;
\t\t\t\twidth: 320px;
\t\t\t\tmargin-left: auto;
\t\t\t\tmargin-right: auto;
\t\t\t}
\t\t\t.panel-heading{
\t\t\t\tpadding:0px;
\t\t\t}
\t\t\t</style>
</body>
</html>
";
    }

    // line 27
    public function block_style($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 50,  189 => 49,  184 => 36,  178 => 27,  134 => 52,  132 => 49,  127 => 47,  122 => 45,  118 => 44,  113 => 42,  108 => 40,  103 => 37,  101 => 36,  98 => 35,  84 => 34,  80 => 33,  73 => 28,  71 => 27,  67 => 26,  62 => 24,  58 => 23,  54 => 22,  48 => 19,  39 => 13,  29 => 6,  22 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         <title>Connectez-vous, Cestom</title>*/
/* */
/*         <meta name="description" content="overview &amp; stats" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         */
/*         <!-- page specific plugin styles -->*/
/* */
/*         <!-- text fonts -->*/
/*       <!--  <link rel="stylesheet" href="{{ asset('assets/css/ace-fonts.css')}}" /> -->*/
/* */
/*         <!-- ace styles -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css')}}" />*/
/* */
/*         <script src="{{ asset('assets/js/ace-extra.min.js')}}"></script>*/
/*         {% block style %}  {% endblock %}*/
/*     </head>*/
/* */
/*  <body class="container-fluid">*/
/* 		<div class="panel panel-primary">*/
/* 			<span class="panel-heading">*/
/* 				{% image '@CestomArticleBundle/Resources/public/images/icone-site-cestom.png' %}*/
/* 					<img src="{{ asset_url }}" class="etoile-cestom" alt="etoile-cestom"/>*/
/* 				{% endimage %}Authentification</span>*/
/* 			{% block fos_user_content %}{% endblock %}*/
/* 		</div>*/
/* 		*/
/*         <!-- basic scripts -->*/
/*         <script src="{{ asset('assets/js/jquery.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/jquery-ui.custom.min.js')}}"></script>*/
/*         <script src="{{ asset('assets/js/ace-elements.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/ace.min.js')}}"></script>*/
/*                      */
/*         {% block javascript %}*/
/* */
/*         {% endblock %}*/
/* 		<style>*/
/* 			.login-box .toolbar {*/
/* 				background: #838383;*/
/* 				border-top: 2px solid #838383;*/
/* 			}*/
/* 			.btn-primary, .btn-primary:active, .open .btn-primary.dropdown-toggle {*/
/* 				background-color: #4CAF50 !important;*/
/* 				border-color: #4CAF50;*/
/* 			}*/
/* 			.login-box .user-signup-link {*/
/* 				color: #fff;*/
/* 			}*/
/* 			body{*/
/* 				color:black;*/
/* 				background-color:white;*/
/* 				background-image: url(../../../images/icone-site-cestom.png);*/
/* 			}*/
/* 			.panel-primary>.panel-heading {*/
/* 				background-color: #838383;*/
/* 				width: 50%;*/
/* 				/*color: black; *//* */
/* 				border-color: #838383;*/
/* 				font-size:25px;*/
/* 			}*/
/* 			.panel-primary{*/
/* 				background-color: #838383;*/
/* 				border-color: 	  #838383;*/
/* 			}*/
/* 			.panel{*/
/* 				margin-top: 50px;*/
/* 				width: 320px;*/
/* 				margin-left: auto;*/
/* 				margin-right: auto;*/
/* 			}*/
/* 			.panel-heading{*/
/* 				padding:0px;*/
/* 			}*/
/* 			</style>*/
/* </body>*/
/* </html>*/
/* */

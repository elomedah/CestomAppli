<?php

/* login.html.twig */
class __TwigTemplate_8ee28bf6a7be7e88634e960aa67b5633bd02d22b1b3a53c051230972c38f2d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_logo' => array($this, 'block_fos_user_logo'),
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
        <title>Admin Cestom</title>

        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        
        <!-- page specific plugin styles -->

        <!-- text fonts -->
      <!--  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" /> -->

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 26
        $this->displayBlock('style', $context, $blocks);
        // line 27
        echo "    </head>

 <body class=\"login-layout  blur-login\">
\t\t<div class=\"main-container\">
                    ";
        // line 31
        $this->displayBlock('fos_user_logo', $context, $blocks);
        // line 39
        echo "\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-1\">
\t\t\t\t\t\t<div class=\"login-container\">
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"space-6\"></div>
\t\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t</div><!-- /.row -->
\t\t\t</div><!-- /.main-content -->
                        
\t\t</div><!-- /.main-container -->

     
        <!-- basic scripts -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 67
        $this->displayBlock('javascript', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
    }

    // line 26
    public function block_style($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 31
    public function block_fos_user_logo($context, array $blocks = array())
    {
        // line 32
        echo "                    <div class=\"center\">
\t\t\t\t\t\t\t\t<h1>
                                <img class=\"nav-user-photo\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/logo/cestom.jpg"), "html", null, true);
        echo "\" alt=\"Admin\" />
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t</div>
                                 ";
    }

    // line 46
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 47
        echo "                                                            
                                                            ";
    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        // line 68
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
        return array (  165 => 68,  162 => 67,  157 => 47,  154 => 46,  145 => 34,  141 => 32,  138 => 31,  132 => 26,  126 => 70,  124 => 67,  119 => 65,  114 => 63,  110 => 62,  105 => 60,  100 => 58,  89 => 49,  87 => 46,  78 => 39,  76 => 31,  70 => 27,  68 => 26,  64 => 25,  59 => 23,  55 => 22,  51 => 21,  45 => 18,  36 => 12,  23 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>Admin Cestom</title>*/
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
/*  <body class="login-layout  blur-login">*/
/* 		<div class="main-container">*/
/*                     {% block fos_user_logo %}*/
/*                     <div class="center">*/
/* 								<h1>*/
/*                                 <img class="nav-user-photo" src="{{asset('assets/logo/cestom.jpg')}}" alt="Admin" />*/
/* 									*/
/* 								</h1>*/
/* 							</div>*/
/*                                  {% endblock %}*/
/* 			<div class="main-content">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-10 col-sm-offset-1">*/
/* 						<div class="login-container">*/
/* 							*/
/* */
/* 							<div class="space-6"></div>*/
/* 							{% block fos_user_content %}*/
/*                                                             */
/*                                                             {% endblock %}*/
/* 						</div>*/
/* 					</div><!-- /.col -->*/
/* 				</div><!-- /.row -->*/
/* 			</div><!-- /.main-content -->*/
/*                         */
/* 		</div><!-- /.main-container -->*/
/* */
/*      */
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
/* </body>*/
/* </html>*/
/* */

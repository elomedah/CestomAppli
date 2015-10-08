<?php

/* base.html.twig */
class __TwigTemplate_856be2c1880b256e2eb8f6d281bb4c3cd0b0d3a4b89cd067d4195ee24d9b381d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'tetiere' => array($this, 'block_tetiere'),
            'navigation' => array($this, 'block_navigation'),
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta charset=\"utf-8\" />
\t\t<title>Admin Cestom</title>

\t\t<meta name=\"description\" content=\"overview &amp; stats\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

\t\t<!-- bootstrap & fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
                \t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTable.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t\t<!-- page specific plugin styles -->

\t\t<!-- text fonts -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" />

\t\t<!-- ace styles -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 27
        $this->displayBlock('style', $context, $blocks);
        // line 28
        echo "\t</head>
         
\t<body class=\"no-skin\">
\t\t<!-- #section:basics/navbar.layout -->
\t\t";
        // line 32
        $this->displayBlock('tetiere', $context, $blocks);
        // line 71
        echo "\t\t<!-- /section:basics/navbar.layout -->
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<!-- #section:basics/sidebar -->
\t\t\t<div id=\"sidebar\" class=\"sidebar                  responsive\">
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\ttry{ace.settings.check('sidebar' , 'fixed')}catch(e){}
\t\t\t\t</script>

\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-user\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Gestion des membres </span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-money\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Bourse </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>

\t\t\t\t\t\t\t\t\tBoursier AMCI
\t\t\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tNon Boursier AMCI
\t\t\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t</li>

\t\t\t\t\t
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-credit-card\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Carte consulaire </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tDemandes
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tLivraisons
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-life-ring\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Prise en charge </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tDemandes
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tLivraisons
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul><!-- /.nav-list -->

\t\t\t\t<!-- #section:basics/sidebar.layout.minimize -->
\t\t\t\t<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
\t\t\t\t\t<i class=\"ace-icon fa fa-angle-double-left\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>

\t\t\t<!-- /section:basics/sidebar -->
\t\t\t<div class=\"main-content\">
\t\t\t\t<!-- #section:basics/content.breadcrumbs -->
\t\t\t\t
                                <div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t";
        // line 211
        $this->displayBlock('navigation', $context, $blocks);
        // line 214
        echo "\t\t\t\t\t<!-- #section:basics/content.searchbox -->
\t\t\t\t\t<div class=\"nav-search\" id=\"nav-search\">
\t\t\t\t\t\t<form class=\"form-search\">
\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-search nav-search-icon\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!-- /.nav-search -->

\t\t\t\t\t<!-- /section:basics/content.searchbox -->
\t\t\t\t</div>

                               
\t\t\t\t<!-- /section:basics/content.breadcrumbs -->
\t\t\t
                                <div class=\"page-content\">
\t\t\t\t\t<!-- #section:settings.box -->
\t\t\t\t\t
\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 236
        $this->displayBlock('soustitre', $context, $blocks);
        // line 239
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t</div><!-- /.page-header -->
                                 
                                
                                  ";
        // line 243
        $this->displayBlock('content', $context, $blocks);
        // line 246
        echo "\t\t\t\t\t\t\t
\t\t\t\t</div><!-- /.page-content -->
                              
                                
\t\t\t</div><!-- /.main-content -->

\t\t\t";
        // line 252
        $this->displayBlock('footer', $context, $blocks);
        // line 282
        echo "
\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t\t<!-- basic scripts -->

\t
\t
                <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
\t \t\t<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 300
        $this->displayBlock('javascript', $context, $blocks);
        // line 303
        echo "\t</html>
";
    }

    // line 27
    public function block_style($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 32
    public function block_tetiere($context, array $blocks = array())
    {
        // line 33
        echo "               <!-- #section:basics/navbar.layout -->
\t\t<div id=\"navbar\" class=\"navbar navbar-default\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('navbar' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<div class=\"navbar-container\" id=\"navbar-container\">
\t\t\t\t<!-- #section:basics/sidebar.mobile.toggle -->
\t\t\t\t<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\">
\t\t\t\t\t<span class=\"sr-only\">Toggle sidebar</span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>

\t\t\t\t<!-- /section:basics/sidebar.mobile.toggle -->
\t\t\t\t<div class=\"navbar-header pull-left\">
\t\t\t\t\t<!-- #section:basics/navbar.layout.brand -->
\t\t\t\t\t<a href=\"#\" class=\"navbar-brand\">
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t<i class=\"fa fa-leaf\"></i>
\t\t\t\t\t\t\tAdministration Cestom
\t\t\t\t\t\t</small>
\t\t\t\t\t</a>

\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<!-- #section:basics/navbar.dropdown -->
\t\t\t\t
\t\t\t\t<!-- /section:basics/navbar.dropdown -->
\t\t\t</div><!-- /.navbar-container -->
\t\t</div>

                ";
    }

    // line 211
    public function block_navigation($context, array $blocks = array())
    {
        // line 212
        echo "                                     
                                ";
    }

    // line 236
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
                                                            
                                                        ";
    }

    // line 243
    public function block_content($context, array $blocks = array())
    {
        // line 244
        echo "
                                  ";
    }

    // line 252
    public function block_footer($context, array $blocks = array())
    {
        // line 253
        echo "                        <div class=\"footer\">
\t\t\t\t<div class=\"footer-inner\">
\t\t\t\t\t<!-- #section:basics/footer -->
\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">Cestom</span>
\t\t\t\t\t\t\tApplication &copy; 2014-2015
\t\t\t\t\t\t</span>

\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t<span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /section:basics/footer -->
\t\t\t\t</div>
\t\t\t</div>
                        ";
    }

    // line 300
    public function block_javascript($context, array $blocks = array())
    {
        // line 301
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 301,  430 => 300,  398 => 253,  395 => 252,  390 => 244,  387 => 243,  379 => 236,  374 => 212,  371 => 211,  330 => 33,  327 => 32,  321 => 27,  316 => 303,  314 => 300,  310 => 299,  305 => 297,  301 => 296,  296 => 294,  291 => 292,  279 => 282,  277 => 252,  269 => 246,  267 => 243,  261 => 239,  259 => 236,  235 => 214,  233 => 211,  104 => 85,  88 => 71,  86 => 32,  80 => 28,  78 => 27,  74 => 26,  69 => 24,  65 => 23,  61 => 22,  55 => 19,  47 => 14,  43 => 13,  39 => 12,  26 => 1,);
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_856be2c1880b256e2eb8f6d281bb4c3cd0b0d3a4b89cd067d4195ee24d9b381d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tetiere' => array($this, 'block_tetiere'),
            'notification' => array($this, 'block_notification'),
            'listenotification' => array($this, 'block_listenotification'),
            'message' => array($this, 'block_message'),
            'listemessage' => array($this, 'block_listemessage'),
            'navigation' => array($this, 'block_navigation'),
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t\t<!-- page specific plugin styles -->

\t\t<!-- text fonts -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" />

\t\t<!-- ace styles -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

\t</head>

\t<body class=\"no-skin\">
\t\t<!-- #section:basics/navbar.layout -->
\t\t";
        // line 31
        $this->displayBlock('tetiere', $context, $blocks);
        // line 169
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
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-user\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Gestion des membres </span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-desktop\"></i>
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
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-pencil-square-o\"></i>
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
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-pencil-square-o\"></i>
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
        // line 309
        $this->displayBlock('navigation', $context, $blocks);
        // line 312
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
        // line 334
        $this->displayBlock('soustitre', $context, $blocks);
        // line 337
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t</div><!-- /.page-header -->
                                 
                                
                                  ";
        // line 341
        $this->displayBlock('content', $context, $blocks);
        // line 344
        echo "\t\t\t\t\t\t\t
\t\t\t\t</div><!-- /.page-content -->
                              
                                
\t\t\t</div><!-- /.main-content -->

\t\t\t";
        // line 350
        $this->displayBlock('footer', $context, $blocks);
        // line 380
        echo "
\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t\t<!-- basic scripts -->

\t
\t
                <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
\t
\t\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t
\t</html>
";
    }

    // line 31
    public function block_tetiere($context, array $blocks = array())
    {
        // line 32
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
\t\t\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t\t\t

\t\t\t\t\t\t<li class=\"purple\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-important\">
\t\t\t\t\t\t\t\t\t";
        // line 72
        $this->displayBlock('notification', $context, $blocks);
        // line 73
        echo "                                                                </span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 78
        $this->displayBlock('listenotification', $context, $blocks);
        // line 82
        echo "
\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tVoir toutes les  notifications
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">
                                                                    ";
        // line 96
        $this->displayBlock('message', $context, $blocks);
        // line 99
        echo "                                                                </span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t";
        // line 107
        $this->displayBlock('listemessage', $context, $blocks);
        // line 110
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\t\t\tVoir tous les messages
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- #section:basics/navbar.user_menu -->
\t\t\t\t\t\t<li class=\"light-blue\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"../assets/avatars/user.jpg\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Bienvenue ,</small>
\t\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\tParamètres
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-power-off\"></i>
\t\t\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- /section:basics/navbar.user_menu -->
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- /section:basics/navbar.dropdown -->
\t\t\t</div><!-- /.navbar-container -->
\t\t</div>

                ";
    }

    // line 72
    public function block_notification($context, array $blocks = array())
    {
        echo " NA ";
    }

    // line 78
    public function block_listenotification($context, array $blocks = array())
    {
        echo " 
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t ";
    }

    // line 96
    public function block_message($context, array $blocks = array())
    {
        echo " 
                                                                        
                                                                     ";
    }

    // line 107
    public function block_listemessage($context, array $blocks = array())
    {
        echo " \t
                                                                           
                                                                        ";
    }

    // line 309
    public function block_navigation($context, array $blocks = array())
    {
        // line 310
        echo "                                     
                                ";
    }

    // line 334
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
                                                            
                                                        ";
    }

    // line 341
    public function block_content($context, array $blocks = array())
    {
        // line 342
        echo "
                                  ";
    }

    // line 350
    public function block_footer($context, array $blocks = array())
    {
        // line 351
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
        return array (  513 => 351,  510 => 350,  505 => 342,  502 => 341,  494 => 334,  489 => 310,  486 => 309,  478 => 107,  470 => 96,  461 => 78,  455 => 72,  393 => 110,  391 => 107,  381 => 99,  379 => 96,  363 => 82,  361 => 78,  354 => 73,  352 => 72,  310 => 32,  307 => 31,  298 => 396,  293 => 394,  288 => 392,  283 => 390,  271 => 380,  269 => 350,  261 => 344,  259 => 341,  253 => 337,  251 => 334,  227 => 312,  225 => 309,  83 => 169,  81 => 31,  72 => 25,  67 => 23,  63 => 22,  59 => 21,  53 => 18,  45 => 13,  41 => 12,  28 => 1,);
    }
}

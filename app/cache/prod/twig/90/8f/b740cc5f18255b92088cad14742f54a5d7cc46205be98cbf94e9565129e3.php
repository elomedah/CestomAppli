<?php

/* CestomAdminBundle::layout.html.twig */
class __TwigTemplate_908fb740cc5f18255b92088cad14742f54a5d7cc46205be98cbf94e9565129e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tetiere' => array($this, 'block_tetiere'),
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

\t\t<!--[if lte IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

\t\t<!--[if lte IE 9]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->

\t\t<!-- inline styles related to this page -->

\t\t<!-- ace settings handler -->
\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

\t\t<!--[if lte IE 8]>
\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t</head>

\t<body class=\"no-skin\">
\t\t<!-- #section:basics/navbar.layout -->
\t\t";
        // line 48
        $this->displayBlock('tetiere', $context, $blocks);
        // line 310
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

\t\t\t\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
\t\t\t\t\t

\t\t\t\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t\t\t\t<span class=\"btn btn-danger\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.sidebar-shortcuts -->

\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"membre.html\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Membres </span>
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
\t\t\t\t\t\t\t\t<a href=\"boursierAmci.html\" class=\"dropdown-toggle\">
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
\t\t\t\t";
        // line 462
        $this->displayBlock('navigation', $context, $blocks);
        // line 488
        echo "\t\t\t\t<!-- /section:basics/content.breadcrumbs -->
\t\t\t\t";
        // line 489
        $this->displayBlock('soustitre', $context, $blocks);
        // line 509
        echo "                                
\t\t\t</div><!-- /.main-content -->

\t\t\t";
        // line 512
        $this->displayBlock('footer', $context, $blocks);
        // line 542
        echo "
\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='../assets/js/jquery1x.min.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->
\t\t
\t\t<script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"../assets/js/excanvas.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
\t
\t\t<script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->

\t
\t</html>
";
    }

    // line 48
    public function block_tetiere($context, array $blocks = array())
    {
        // line 49
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

\t\t\t\t\t<!-- /section:basics/navbar.layout.brand -->

\t\t\t\t\t<!-- #section:basics/navbar.toggle -->

\t\t\t\t\t<!-- /section:basics/navbar.toggle -->
\t\t\t\t</div>

\t\t\t\t<!-- #section:basics/navbar.dropdown -->
\t\t\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t\t\t

\t\t\t\t\t\t<li class=\"purple\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs btn-primary fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/avatars/avatar.png\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/avatars/avatar3.png\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/avatars/avatar4.png\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/avatars/avatar2.png\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../assets/avatars/avatar5.png\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\t\t\tSee all messages
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
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
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
\t\t\t\t\t\t\t\t\t\tLogout
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

    // line 462
    public function block_navigation($context, array $blocks = array())
    {
        // line 463
        echo "                                <div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t

\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-home home-icon\"></i>
\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Bourse</li>
\t\t\t\t\t</ul><!-- /.breadcrumb -->

\t\t\t\t\t<!-- #section:basics/content.searchbox -->
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

                                ";
    }

    // line 489
    public function block_soustitre($context, array $blocks = array())
    {
        // line 490
        echo "                                <div class=\"page-content\">
\t\t\t\t\t<!-- #section:settings.box -->
\t\t\t\t\t
\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tBourse
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-angle-double-right\"></i>
\t\t\t\t\t\t\t\tBoursier AMCI
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div><!-- /.page-header -->
";
        // line 503
        $this->displayBlock('content', $context, $blocks);
        // line 506
        echo "\t\t\t\t\t\t\t
\t\t\t\t</div><!-- /.page-content -->
                                ";
    }

    // line 503
    public function block_content($context, array $blocks = array())
    {
        // line 504
        echo "
";
    }

    // line 512
    public function block_footer($context, array $blocks = array())
    {
        // line 513
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
        return "CestomAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 513,  660 => 512,  655 => 504,  652 => 503,  646 => 506,  644 => 503,  629 => 490,  626 => 489,  598 => 463,  595 => 462,  331 => 49,  328 => 48,  317 => 572,  312 => 570,  302 => 563,  288 => 552,  276 => 542,  274 => 512,  269 => 509,  267 => 489,  264 => 488,  262 => 462,  108 => 310,  106 => 48,  97 => 42,  93 => 41,  85 => 36,  76 => 30,  70 => 27,  66 => 26,  61 => 24,  55 => 21,  49 => 18,  41 => 13,  37 => 12,  24 => 1,);
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_7f1ebcf96b8302f68a67fa475ed991e4ff988d3946d67bbc65bae3bec48c5cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'tetiere' => array($this, 'block_tetiere'),
            'user' => array($this, 'block_user'),
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
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"utf-8\" />
        <title>Admin Cestom</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTable.min.css"), "html", null, true);
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

    <body class=\"no-skin\">
        <!-- #section:basics/navbar.layout -->
        ";
        // line 32
        $this->displayBlock('tetiere', $context, $blocks);
        // line 115
        echo "        <!-- /section:basics/navbar.layout -->
        <div class=\"main-container\" id=\"main-container\">
            <script type=\"text/javascript\">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <!-- #section:basics/sidebar -->
            <div id=\"sidebar\" class=\"sidebar                  responsive\">
                <script type=\"text/javascript\">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class=\"nav nav-list\">
                    <li id=\"menu_membre\" class=\" main \">
                        <a class=\"mainactive \" href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">
                            <i class=\"menu-icon fa fa-user\"></i>
                            <span class=\"menu-text\"> Membres </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\" main \">
                        <a href=\"#\" class=\"mainactive \">
                            <i class=\"menu-icon fa fa-money\"></i>
                            <span class=\"menu-text\"> Bourse </span>


                        </a>



                    </li>


                    <li id=\"menu_carteconsulaire\" class=\" main \">
                        <a href=\"#\" class=\"mainactive \">
                            <i class=\"menu-icon fa fa-credit-card\"></i>
                            <span class=\"menu-text\"> Carte consulaire </span>


                        </a>

                    </li>
                    <li id=\"menu_prisecharge\" class=\"main\">
                        <a href=\"#\" class=\"mainactive\">
                            <i class=\"menu-icon fa fa-life-ring\"></i>
                            <span class=\"menu-text\"> Prise en charge </span>

                        </a>


                    </li>
                    <li id=\"menu_ville\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                            <i class=\"menu-icon fa fa-building\"></i>
                            <span class=\"menu-text\"> Gestion des villes </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                   

                    <li id=\"menu_universite\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">
                            <i class=\"menu-icon fa fa-graduation-cap\"></i>
                            <span class=\"menu-text\"> Universités </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li id=\"menu_articles\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("cestomarticlebundle_article");
        echo "\">
                            <i class=\"menu-icon fa fa-newspaper-o\"></i>
                            <span class=\"menu-text\"> Articles </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>


                    <li id=\"menu_articles\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("cestomarticlebundle_categorie");
        echo "\">      
                            <i class=\"menu-icon fa fa-th-list\"></i>
                            <span class=\"menu-text\"> Categories </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                </ul>
            

                <!-- #section:basics/sidebar.layout.minimize -->
                <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
                    <i class=\"ace-icon fa fa-angle-double-left\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
                </div>


            </div>

            <!-- /section:basics/sidebar -->
            <div class=\"main-content\">
                <!-- #section:basics/content.breadcrumbs -->

                <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                    ";
        // line 229
        $this->displayBlock('navigation', $context, $blocks);
        // line 232
        echo "                   

                    <!-- /section:basics/content.searchbox -->
                </div>


                <!-- /section:basics/content.breadcrumbs -->

                <div class=\"page-content\">
                    <!-- #section:settings.box -->

                    <!-- /section:settings.box -->
                    <div class=\"page-header\">
                        <h1>
                            ";
        // line 246
        $this->displayBlock('soustitre', $context, $blocks);
        // line 249
        echo "                        </h1>
                    </div><!-- /.page-header -->


                    ";
        // line 253
        $this->displayBlock('content', $context, $blocks);
        // line 256
        echo "
                </div><!-- /.page-content -->


            </div><!-- /.main-content -->

            ";
        // line 262
        $this->displayBlock('footer', $context, $blocks);
        // line 292
        echo "
            <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
                <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 308
        $this->displayBlock('javascript', $context, $blocks);
        // line 311
        echo "    </body>
</html>
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
        echo "            <!-- #section:basics/navbar.layout -->
            <div id=\"navbar\" class=\"navbar navbar-default\">
                <script type=\"text/javascript\">
                    try {
                        ace.settings.check('navbar', 'fixed')
                    } catch (e) {
                    }
                </script>

                <div class=\"navbar-container\" id=\"navbar-container\">
                    <!-- #section:basics/sidebar.mobile.toggle -->
                    <button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\">
                        <span class=\"sr-only\">Toggle sidebar</span>

                        <span class=\"icon-bar\"></span>

                        <span class=\"icon-bar\"></span>

                        <span class=\"icon-bar\"></span>
                    </button>

                    <!-- /section:basics/sidebar.mobile.toggle -->
                    <div class=\"navbar-header pull-left\">
                        <!-- #section:basics/navbar.layout.brand -->
                        <a href=\"#\" class=\"navbar-brand\">
                            <small>
                                <i class=\"fa fa-leaf\"></i>
                                Administration Cestom
                            </small>
                        </a>


                    </div>

                    <!-- #section:basics/navbar.dropdown -->
 <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
                <ul class=\"nav ace-nav\">
\t\t
                    ";
        // line 71
        $this->displayBlock('user', $context, $blocks);
        // line 106
        echo "                </ul>

            </div>

                    <!-- /section:basics/navbar.dropdown -->
                </div><!-- /.navbar-container -->
            </div>

        ";
    }

    // line 71
    public function block_user($context, array $blocks = array())
    {
        // line 72
        echo "                        <!-- #section:basics/navbar.user_menu -->
                        <li class=\"light-blue\">
                            <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                <img class=\"nav-user-photo\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/avatars/avatar2.png"), "html", null, true);
        echo "\" alt=\"Admin\" />
                                <span class=\"user-info\">
                                    <small>Bienvenue,</small>
                                    ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                </span>

                                <i class=\"ace-icon fa fa-caret-down\"></i>
                            </a>


                            <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

                                <li>
                                    <a href=\"#\">
                                        <i class=\"ace-icon fa fa-user\"></i>
                                        Mon compte
                                    </a>
                                </li>

                                <li class=\"divider\"></li>

                                <li>
                                    <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                        <i class=\"ace-icon fa fa-power-off\"></i>
                                        Se deconnecter
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ #section:basics/navbar.user_menu -->
                    ";
    }

    // line 229
    public function block_navigation($context, array $blocks = array())
    {
        // line 230
        echo "
                    ";
    }

    // line 246
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

                            ";
    }

    // line 253
    public function block_content($context, array $blocks = array())
    {
        // line 254
        echo "
                    ";
    }

    // line 262
    public function block_footer($context, array $blocks = array())
    {
        // line 263
        echo "                <div class=\"footer\">
                    <div class=\"footer-inner\">
                        <!-- #section:basics/footer -->
                        <div class=\"footer-content\">
                            <span class=\"bigger-120\">
                                <span class=\"blue bolder\">Cestom</span>
                                Application &copy; 2014-2015
                            </span>

                            &nbsp; &nbsp;
                            <span class=\"action-buttons\">
                                <a href=\"#\">
                                    <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                </a>

                                <a href=\"#\">
                                    <i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
                                </a>

                                <a href=\"#\">
                                    <i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
                                </a>
                            </span>
                        </div>

                        <!-- /section:basics/footer -->
                    </div>
                </div>
            ";
    }

    // line 308
    public function block_javascript($context, array $blocks = array())
    {
        // line 309
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 309,  470 => 308,  438 => 263,  435 => 262,  430 => 254,  427 => 253,  419 => 246,  414 => 230,  411 => 229,  398 => 97,  376 => 78,  370 => 75,  365 => 72,  362 => 71,  350 => 106,  348 => 71,  308 => 33,  305 => 32,  299 => 27,  293 => 311,  291 => 308,  286 => 306,  281 => 304,  277 => 303,  272 => 301,  267 => 299,  258 => 292,  256 => 262,  248 => 256,  246 => 253,  240 => 249,  238 => 246,  222 => 232,  220 => 229,  193 => 205,  180 => 195,  168 => 186,  154 => 175,  111 => 135,  89 => 115,  87 => 32,  81 => 28,  79 => 27,  75 => 26,  70 => 24,  66 => 23,  62 => 22,  56 => 19,  47 => 13,  43 => 12,  35 => 7,  27 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>Admin Cestom</title>*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         <meta name="description" content="overview &amp; stats" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/dataTable.min.css')}}" />*/
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
/*     <body class="no-skin">*/
/*         <!-- #section:basics/navbar.layout -->*/
/*         {% block tetiere %}*/
/*             <!-- #section:basics/navbar.layout -->*/
/*             <div id="navbar" class="navbar navbar-default">*/
/*                 <script type="text/javascript">*/
/*                     try {*/
/*                         ace.settings.check('navbar', 'fixed')*/
/*                     } catch (e) {*/
/*                     }*/
/*                 </script>*/
/* */
/*                 <div class="navbar-container" id="navbar-container">*/
/*                     <!-- #section:basics/sidebar.mobile.toggle -->*/
/*                     <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">*/
/*                         <span class="sr-only">Toggle sidebar</span>*/
/* */
/*                         <span class="icon-bar"></span>*/
/* */
/*                         <span class="icon-bar"></span>*/
/* */
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/* */
/*                     <!-- /section:basics/sidebar.mobile.toggle -->*/
/*                     <div class="navbar-header pull-left">*/
/*                         <!-- #section:basics/navbar.layout.brand -->*/
/*                         <a href="#" class="navbar-brand">*/
/*                             <small>*/
/*                                 <i class="fa fa-leaf"></i>*/
/*                                 Administration Cestom*/
/*                             </small>*/
/*                         </a>*/
/* */
/* */
/*                     </div>*/
/* */
/*                     <!-- #section:basics/navbar.dropdown -->*/
/*  <div class="navbar-buttons navbar-header pull-right" role="navigation">*/
/*                 <ul class="nav ace-nav">*/
/* 		*/
/*                     {% block user %}*/
/*                         <!-- #section:basics/navbar.user_menu -->*/
/*                         <li class="light-blue">*/
/*                             <a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/*                                 <img class="nav-user-photo" src="{{asset('assets/avatars/avatar2.png')}}" alt="Admin" />*/
/*                                 <span class="user-info">*/
/*                                     <small>Bienvenue,</small>*/
/*                                     {{ app.user.username }}*/
/*                                 </span>*/
/* */
/*                                 <i class="ace-icon fa fa-caret-down"></i>*/
/*                             </a>*/
/* */
/* */
/*                             <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* */
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="ace-icon fa fa-user"></i>*/
/*                                         Mon compte*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                                 <li class="divider"></li>*/
/* */
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                                         <i class="ace-icon fa fa-power-off"></i>*/
/*                                         Se deconnecter*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!--/ #section:basics/navbar.user_menu -->*/
/*                     {% endblock %}*/
/*                 </ul>*/
/* */
/*             </div>*/
/* */
/*                     <!-- /section:basics/navbar.dropdown -->*/
/*                 </div><!-- /.navbar-container -->*/
/*             </div>*/
/* */
/*         {% endblock %}*/
/*         <!-- /section:basics/navbar.layout -->*/
/*         <div class="main-container" id="main-container">*/
/*             <script type="text/javascript">*/
/*                 try {*/
/*                     ace.settings.check('main-container', 'fixed')*/
/*                 } catch (e) {*/
/*                 }*/
/*             </script>*/
/* */
/*             <!-- #section:basics/sidebar -->*/
/*             <div id="sidebar" class="sidebar                  responsive">*/
/*                 <script type="text/javascript">*/
/*                     try {*/
/*                         ace.settings.check('sidebar', 'fixed')*/
/*                     } catch (e) {*/
/*                     }*/
/*                 </script>*/
/* */
/*                 <ul class="nav nav-list">*/
/*                     <li id="menu_membre" class=" main ">*/
/*                         <a class="mainactive " href="{{ path('cestom_admin_homepage')  }}">*/
/*                             <i class="menu-icon fa fa-user"></i>*/
/*                             <span class="menu-text"> Membres </span>*/
/*                         </a>*/
/* */
/*                         <b class="arrow"></b>*/
/*                     </li>*/
/* */
/*                     <li class=" main ">*/
/*                         <a href="#" class="mainactive ">*/
/*                             <i class="menu-icon fa fa-money"></i>*/
/*                             <span class="menu-text"> Bourse </span>*/
/* */
/* */
/*                         </a>*/
/* */
/* */
/* */
/*                     </li>*/
/* */
/* */
/*                     <li id="menu_carteconsulaire" class=" main ">*/
/*                         <a href="#" class="mainactive ">*/
/*                             <i class="menu-icon fa fa-credit-card"></i>*/
/*                             <span class="menu-text"> Carte consulaire </span>*/
/* */
/* */
/*                         </a>*/
/* */
/*                     </li>*/
/*                     <li id="menu_prisecharge" class="main">*/
/*                         <a href="#" class="mainactive">*/
/*                             <i class="menu-icon fa fa-life-ring"></i>*/
/*                             <span class="menu-text"> Prise en charge </span>*/
/* */
/*                         </a>*/
/* */
/* */
/*                     </li>*/
/*                     <li id="menu_ville" class="main">*/
/*                         <a class="mainactive" href="{{ path('cestom_admin_ajouter_ville')  }}">*/
/*                             <i class="menu-icon fa fa-building"></i>*/
/*                             <span class="menu-text"> Gestion des villes </span>*/
/*                         </a>*/
/* */
/*                         <b class="arrow"></b>*/
/*                     </li>*/
/* */
/*                    */
/* */
/*                     <li id="menu_universite" class="main">*/
/*                         <a class="mainactive" href="{{ path('cestom_admin_ajouter_universite')  }}">*/
/*                             <i class="menu-icon fa fa-graduation-cap"></i>*/
/*                             <span class="menu-text"> Universités </span>*/
/*                         </a>*/
/* */
/*                         <b class="arrow"></b>*/
/*                     </li>*/
/* */
/*                     <li id="menu_articles" class="main">*/
/*                         <a class="mainactive" href="{{ path('cestomarticlebundle_article')  }}">*/
/*                             <i class="menu-icon fa fa-newspaper-o"></i>*/
/*                             <span class="menu-text"> Articles </span>*/
/*                         </a>*/
/* */
/*                         <b class="arrow"></b>*/
/*                     </li>*/
/* */
/* */
/*                     <li id="menu_articles" class="main">*/
/*                         <a class="mainactive" href="{{ path('cestomarticlebundle_categorie')  }}">      */
/*                             <i class="menu-icon fa fa-th-list"></i>*/
/*                             <span class="menu-text"> Categories </span>*/
/*                         </a>*/
/* */
/*                         <b class="arrow"></b>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             */
/* */
/*                 <!-- #section:basics/sidebar.layout.minimize -->*/
/*                 <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">*/
/*                     <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*             <!-- /section:basics/sidebar -->*/
/*             <div class="main-content">*/
/*                 <!-- #section:basics/content.breadcrumbs -->*/
/* */
/*                 <div class="breadcrumbs" id="breadcrumbs">*/
/*                     {% block navigation %}*/
/* */
/*                     {% endblock %}*/
/*                    */
/* */
/*                     <!-- /section:basics/content.searchbox -->*/
/*                 </div>*/
/* */
/* */
/*                 <!-- /section:basics/content.breadcrumbs -->*/
/* */
/*                 <div class="page-content">*/
/*                     <!-- #section:settings.box -->*/
/* */
/*                     <!-- /section:settings.box -->*/
/*                     <div class="page-header">*/
/*                         <h1>*/
/*                             {% block soustitre %} */
/* */
/*                             {% endblock %}*/
/*                         </h1>*/
/*                     </div><!-- /.page-header -->*/
/* */
/* */
/*                     {% block content %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 </div><!-- /.page-content -->*/
/* */
/* */
/*             </div><!-- /.main-content -->*/
/* */
/*             {% block footer %}*/
/*                 <div class="footer">*/
/*                     <div class="footer-inner">*/
/*                         <!-- #section:basics/footer -->*/
/*                         <div class="footer-content">*/
/*                             <span class="bigger-120">*/
/*                                 <span class="blue bolder">Cestom</span>*/
/*                                 Application &copy; 2014-2015*/
/*                             </span>*/
/* */
/*                             &nbsp; &nbsp;*/
/*                             <span class="action-buttons">*/
/*                                 <a href="#">*/
/*                                     <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>*/
/*                                 </a>*/
/* */
/*                                 <a href="#">*/
/*                                     <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>*/
/*                                 </a>*/
/* */
/*                                 <a href="#">*/
/*                                     <i class="ace-icon fa fa-rss-square orange bigger-150"></i>*/
/*                                 </a>*/
/*                             </span>*/
/*                         </div>*/
/* */
/*                         <!-- /section:basics/footer -->*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/* */
/*             <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">*/
/*                 <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>*/
/*             </a>*/
/*         </div><!-- /.main-container -->*/
/* */
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
/*     </body>*/
/* </html>*/
/* */

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
                            <span class=\"menu-text\"> Gestion des membres </span>
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
        // line 184
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">
                            <i class=\"menu-icon fa fa-graduation-cap\"></i>
                            <span class=\"menu-text\"> Universités </span>
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
        // line 208
        $this->displayBlock('navigation', $context, $blocks);
        // line 211
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
        // line 225
        $this->displayBlock('soustitre', $context, $blocks);
        // line 228
        echo "                        </h1>
                    </div><!-- /.page-header -->


                    ";
        // line 232
        $this->displayBlock('content', $context, $blocks);
        // line 235
        echo "
                </div><!-- /.page-content -->


            </div><!-- /.main-content -->

            ";
        // line 241
        $this->displayBlock('footer', $context, $blocks);
        // line 271
        echo "
            <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
                <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 287
        $this->displayBlock('javascript', $context, $blocks);
        // line 290
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

    // line 208
    public function block_navigation($context, array $blocks = array())
    {
        // line 209
        echo "
                    ";
    }

    // line 225
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

                            ";
    }

    // line 232
    public function block_content($context, array $blocks = array())
    {
        // line 233
        echo "
                    ";
    }

    // line 241
    public function block_footer($context, array $blocks = array())
    {
        // line 242
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

    // line 287
    public function block_javascript($context, array $blocks = array())
    {
        // line 288
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
        return array (  443 => 288,  440 => 287,  408 => 242,  405 => 241,  400 => 233,  397 => 232,  389 => 225,  384 => 209,  381 => 208,  368 => 97,  346 => 78,  340 => 75,  335 => 72,  332 => 71,  320 => 106,  318 => 71,  278 => 33,  275 => 32,  269 => 27,  263 => 290,  261 => 287,  256 => 285,  251 => 283,  247 => 282,  242 => 280,  237 => 278,  228 => 271,  226 => 241,  218 => 235,  216 => 232,  210 => 228,  208 => 225,  192 => 211,  190 => 208,  163 => 184,  151 => 175,  108 => 135,  86 => 115,  84 => 32,  78 => 28,  76 => 27,  72 => 26,  67 => 24,  63 => 23,  59 => 22,  53 => 19,  44 => 13,  40 => 12,  27 => 1,);
    }
}

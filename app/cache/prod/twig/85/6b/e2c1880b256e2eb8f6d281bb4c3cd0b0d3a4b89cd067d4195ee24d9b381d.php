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
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" />

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

    <body class=\"no-skin\">
        <!-- #section:basics/navbar.layout -->
        ";
        // line 31
        $this->displayBlock('tetiere', $context, $blocks);
        // line 73
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
                    <li class=\" main active\">
                        <a class=\"mainactive \" href=\"";
        // line 93
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


                    <li class=\" main \">
                        <a href=\"#\" class=\"mainactive \">
                            <i class=\"menu-icon fa fa-credit-card\"></i>
                            <span class=\"menu-text\"> Carte consulaire </span>


                        </a>

                    </li>
                    <li class=\"main\">
                        <a href=\"#\" class=\"mainactive\">
                            <i class=\"menu-icon fa fa-life-ring\"></i>
                            <span class=\"menu-text\"> Prise en charge </span>

                        </a>


                    </li>
                    <li class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                            <i class=\"menu-icon fa fa-building\"></i>
                            <span class=\"menu-text\"> Gestion des villes </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">
                            <i class=\"menu-icon fa fa-graduation-cap\"></i>
                            <span class=\"menu-text\"> Universités </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                </ul>
                </li>
                </ul><!-- /.nav-list -->

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
        // line 167
        $this->displayBlock('navigation', $context, $blocks);
        // line 170
        echo "                    <!-- #section:basics/content.searchbox -->
                    <div class=\"nav-search\" id=\"nav-search\">
                        <form class=\"form-search\">
                            <span class=\"input-icon\">
                                <input type=\"text\" placeholder=\"Search ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>


                <!-- /section:basics/content.breadcrumbs -->

                <div class=\"page-content\">
                    <!-- #section:settings.box -->

                    <!-- /section:settings.box -->
                    <div class=\"page-header\">
                        <h1>
                            ";
        // line 192
        $this->displayBlock('soustitre', $context, $blocks);
        // line 195
        echo "                        </h1>
                    </div><!-- /.page-header -->


                    ";
        // line 199
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "
                </div><!-- /.page-content -->


            </div><!-- /.main-content -->

            ";
        // line 208
        $this->displayBlock('footer', $context, $blocks);
        // line 238
        echo "
            <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
                <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 254
        $this->displayBlock('javascript', $context, $blocks);
        // line 257
        echo "</html>
";
    }

    // line 26
    public function block_style($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 31
    public function block_tetiere($context, array $blocks = array())
    {
        // line 32
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

                    <!-- /section:basics/navbar.dropdown -->
                </div><!-- /.navbar-container -->
            </div>

        ";
    }

    // line 167
    public function block_navigation($context, array $blocks = array())
    {
        // line 168
        echo "
                    ";
    }

    // line 192
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

                            ";
    }

    // line 199
    public function block_content($context, array $blocks = array())
    {
        // line 200
        echo "
                    ";
    }

    // line 208
    public function block_footer($context, array $blocks = array())
    {
        // line 209
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

    // line 254
    public function block_javascript($context, array $blocks = array())
    {
        // line 255
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
        return array (  390 => 255,  387 => 254,  355 => 209,  352 => 208,  347 => 200,  344 => 199,  336 => 192,  331 => 168,  328 => 167,  284 => 32,  281 => 31,  275 => 26,  270 => 257,  268 => 254,  263 => 252,  258 => 250,  254 => 249,  249 => 247,  244 => 245,  235 => 238,  233 => 208,  225 => 202,  223 => 199,  217 => 195,  215 => 192,  191 => 170,  189 => 167,  161 => 142,  149 => 133,  106 => 93,  84 => 73,  82 => 31,  76 => 27,  74 => 26,  70 => 25,  65 => 23,  61 => 22,  57 => 21,  51 => 18,  43 => 13,  39 => 12,  26 => 1,);
    }
}

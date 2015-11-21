<?php

/* ::base.html.twig */
class __TwigTemplate_c58c3f25214a91c5080757f14677ee1e3e6540f9e1191595017e62effb61349f extends Twig_Template
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
\t\t<!-- Articles new-edit-show-style -->
       <!-- <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/gestion_article.css"), "html", null, true);
        echo "\" /> -->

        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
\t<style>
\t\t.bordertable{ 
\t\tborder : solid 1px darkgrey ;padding:5px
\t\t}
\t\t.navbar{ 
\t\tbackground-color:#337ab7
\t\t}
 \t\t.table-header{ 
\t\tbackground-color:#337ab7
\t\t}
\t</style>
        ";
        // line 40
        $this->displayBlock('style', $context, $blocks);
        // line 41
        echo "    </head>

    <body class=\"no-skin\">
        <!-- #section:basics/navbar.layout -->
        ";
        // line 45
        $this->displayBlock('tetiere', $context, $blocks);
        // line 122
        echo "        <!-- /section:basics/navbar.layout -->
        <div class=\"main-container\" id=\"main-container\">
           
            <div id=\"sidebar\" class=\"sidebar                  responsive\">
               

                <ul class=\"nav nav-list\">
                    <li id=\"menu_membre\" class=\" main \">
                        <a class=\"mainactive \" href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">
                            <i class=\"menu-icon fa fa-user\"></i>
                            <span class=\"menu-text\"> Membres </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\" main \">
                        <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("cestom_admin_attente_bourse");
        echo "\" class=\"mainactive \">
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
        // line 170
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                            <i class=\"menu-icon fa fa-building\"></i>
                            <span class=\"menu-text\"> Gestion des villes </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                   

                    <li id=\"menu_universite\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">
                            <i class=\"menu-icon fa fa-graduation-cap\"></i>
                            <span class=\"menu-text\"> Universités </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li id=\"menu_articles\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("cestomarticlebundle_article");
        echo "\">
                            <i class=\"menu-icon fa fa-newspaper-o\"></i>
                            <span class=\"menu-text\"> Articles </span>
                        </a>

                        <b class=\"arrow\"></b>
                    </li>


                    <li id=\"menu_articles\" class=\"main\">
                        <a class=\"mainactive\" href=\"";
        // line 200
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

            <div class=\"main-content\">

                <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                    ";
        // line 222
        $this->displayBlock('navigation', $context, $blocks);
        // line 225
        echo "                   
                </div>



                <div class=\"page-content\">
                    
                    <div class=\"page-header\">
                        <h1>
                            ";
        // line 234
        $this->displayBlock('soustitre', $context, $blocks);
        // line 237
        echo "                        </h1>
                    </div>

                    ";
        // line 240
        $this->displayBlock('content', $context, $blocks);
        // line 243
        echo "
                </div><!-- /.page-content -->


            </div><!-- /.main-content -->

            ";
        // line 249
        $this->displayBlock('footer', $context, $blocks);
        // line 279
        echo "
            <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
                <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
            </a>
        </div><!-- /.main-container -->
\t\t
\t\t<!--style-->
\t\t<style>
\t\t\t.table-header,.form-actions{
\t\t\t\tbackground-color:#838383;
\t\t\t\ttext-align:center;
\t\t\t\tfont-size:xx-large;
\t\t\t}
\t\t\t.page-header h1{
\t\t\t\tcolor: black;
\t\t\t}
\t\t</style>
        <!-- basic scripts -->
        <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
                     
        ";
        // line 306
        $this->displayBlock('javascript', $context, $blocks);
        // line 309
        echo "    </body>
</html>
";
    }

    // line 40
    public function block_style($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 45
    public function block_tetiere($context, array $blocks = array())
    {
        // line 46
        echo "            <!-- #section:basics/navbar.layout -->
            <div id=\"navbar\"  class=\" navbar navbar-default\">
                
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
                                ";
        // line 66
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7a029c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a029c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e7a029c_icone-site-cestom_1.png");
            // line 67
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"etoile-cestom\" alt=\"etoile-cestom\"/>
\t\t\t\t\t\t\t\t";
        } else {
            // asset "e7a029c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7a029c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e7a029c.png");
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" class=\"etoile-cestom\" alt=\"etoile-cestom\"/>
\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 69
        echo "                                Administration Cestom
                            </small>
                        </a>
                    </div>
\t\t\t\t\t
                    <!-- #section:basics/navbar.dropdown -->
 <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
                <ul class=\"nav ace-nav\">
\t\t
                    ";
        // line 78
        $this->displayBlock('user', $context, $blocks);
        // line 113
        echo "                </ul>

            </div>

                    <!-- /section:basics/navbar.dropdown -->
                </div><!-- /.navbar-container -->
            </div>

        ";
    }

    // line 78
    public function block_user($context, array $blocks = array())
    {
        // line 79
        echo "                        <!-- #section:basics/navbar.user_menu -->
                        <li class=\"gray-black\">
                            <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                <img class=\"nav-user-photo\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/avatars/avatar2.png"), "html", null, true);
        echo "\" alt=\"Admin\" />
                                <span class=\"user-info\">
                                    <small>Bienvenue,</small>
                                    ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                </span>

                                <i class=\"ace-icon fa fa-caret-down\"></i>
                            </a>


                            <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

                                <li>
                                    <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("cestom_home");
        echo "\">
                                        <i class=\"ace-icon fa fa-user\"></i>
                                       Site Web
                                    </a>
                                </li>

                                <li class=\"divider\"></li>

                                <li>
                                    <a href=\"";
        // line 104
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

    // line 222
    public function block_navigation($context, array $blocks = array())
    {
        // line 223
        echo "
                    ";
    }

    // line 234
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

                            ";
    }

    // line 240
    public function block_content($context, array $blocks = array())
    {
        // line 241
        echo "
                    ";
    }

    // line 249
    public function block_footer($context, array $blocks = array())
    {
        // line 250
        echo "                <div class=\"footer\">
                    <div class=\"footer-inner\">
                        <!-- #section:basics/footer -->
                        <div class=\"footer-content\">
                            <span class=\"bigger-120\">
                                <span class=\"blue bolder\">CESTOM</span>
                                Application &copy; 2014-2015
                            </span>

                            &nbsp; &nbsp;
                            <span class=\"action-buttons\">
                                <a href=\"#\">
                                    <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                </a>

                                <a href=\"https://www.facebook.com/groups/CESTOM228/\">
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

    // line 306
    public function block_javascript($context, array $blocks = array())
    {
        // line 307
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
        return array (  497 => 307,  494 => 306,  462 => 250,  459 => 249,  454 => 241,  451 => 240,  443 => 234,  438 => 223,  435 => 222,  422 => 104,  410 => 95,  397 => 85,  391 => 82,  386 => 79,  383 => 78,  371 => 113,  369 => 78,  358 => 69,  344 => 67,  340 => 66,  318 => 46,  315 => 45,  309 => 40,  303 => 309,  301 => 306,  296 => 304,  291 => 302,  287 => 301,  282 => 299,  277 => 297,  257 => 279,  255 => 249,  247 => 243,  245 => 240,  240 => 237,  238 => 234,  227 => 225,  225 => 222,  200 => 200,  187 => 190,  175 => 181,  161 => 170,  127 => 139,  115 => 130,  105 => 122,  103 => 45,  97 => 41,  95 => 40,  80 => 28,  75 => 26,  70 => 24,  66 => 23,  62 => 22,  56 => 19,  47 => 13,  43 => 12,  35 => 7,  27 => 1,);
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
/* 		<!-- Articles new-edit-show-style -->*/
/*        <!-- <link rel="stylesheet" href="{{ asset('assets/css/gestion_article.css')}}" /> -->*/
/* */
/*         <script src="{{ asset('assets/js/ace-extra.min.js')}}"></script>*/
/* 	<style>*/
/* 		.bordertable{ */
/* 		border : solid 1px darkgrey ;padding:5px*/
/* 		}*/
/* 		.navbar{ */
/* 		background-color:#337ab7*/
/* 		}*/
/*  		.table-header{ */
/* 		background-color:#337ab7*/
/* 		}*/
/* 	</style>*/
/*         {% block style %}  {% endblock %}*/
/*     </head>*/
/* */
/*     <body class="no-skin">*/
/*         <!-- #section:basics/navbar.layout -->*/
/*         {% block tetiere %}*/
/*             <!-- #section:basics/navbar.layout -->*/
/*             <div id="navbar"  class=" navbar navbar-default">*/
/*                 */
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
/*                                 {% image '@CestomArticleBundle/Resources/public/images/icone-site-cestom.png' %}*/
/* 									<img src="{{ asset_url }}" class="etoile-cestom" alt="etoile-cestom"/>*/
/* 								{% endimage %}*/
/*                                 Administration Cestom*/
/*                             </small>*/
/*                         </a>*/
/*                     </div>*/
/* 					*/
/*                     <!-- #section:basics/navbar.dropdown -->*/
/*  <div class="navbar-buttons navbar-header pull-right" role="navigation">*/
/*                 <ul class="nav ace-nav">*/
/* 		*/
/*                     {% block user %}*/
/*                         <!-- #section:basics/navbar.user_menu -->*/
/*                         <li class="gray-black">*/
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
/*                                     <a href="{{ path('cestom_home')}}">*/
/*                                         <i class="ace-icon fa fa-user"></i>*/
/*                                        Site Web*/
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
/*            */
/*             <div id="sidebar" class="sidebar                  responsive">*/
/*                */
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
/*                         <a href="{{path('cestom_admin_attente_bourse')}}" class="mainactive ">*/
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
/*             <div class="main-content">*/
/* */
/*                 <div class="breadcrumbs" id="breadcrumbs">*/
/*                     {% block navigation %}*/
/* */
/*                     {% endblock %}*/
/*                    */
/*                 </div>*/
/* */
/* */
/* */
/*                 <div class="page-content">*/
/*                     */
/*                     <div class="page-header">*/
/*                         <h1>*/
/*                             {% block soustitre %} */
/* */
/*                             {% endblock %}*/
/*                         </h1>*/
/*                     </div>*/
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
/*                                 <span class="blue bolder">CESTOM</span>*/
/*                                 Application &copy; 2014-2015*/
/*                             </span>*/
/* */
/*                             &nbsp; &nbsp;*/
/*                             <span class="action-buttons">*/
/*                                 <a href="#">*/
/*                                     <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>*/
/*                                 </a>*/
/* */
/*                                 <a href="https://www.facebook.com/groups/CESTOM228/">*/
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
/* 		*/
/* 		<!--style-->*/
/* 		<style>*/
/* 			.table-header,.form-actions{*/
/* 				background-color:#838383;*/
/* 				text-align:center;*/
/* 				font-size:xx-large;*/
/* 			}*/
/* 			.page-header h1{*/
/* 				color: black;*/
/* 			}*/
/* 		</style>*/
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

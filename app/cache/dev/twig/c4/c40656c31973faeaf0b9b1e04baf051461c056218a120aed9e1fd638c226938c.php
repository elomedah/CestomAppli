<?php

/* ::base_user.html.twig */
class __TwigTemplate_cd5f1cacf74e26767939913e45e1f360c19be7132fdd513957f26687f1c1904e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'user' => array($this, 'block_user'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTable.min.css"), "html", null, true);
        echo "\" />
        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

        <!-- text fonts -->
      <!--  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" /> -->

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>   

        <!-- Date picker css -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />\t
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 115
        echo "


        ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 223
        echo "
        <!-- Ace script -->
        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>


        ";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 238
        echo "
    </body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CESTOM";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "        ";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "            <header>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 logo-slogan\">
                            <div style=\"padding:20px\" class=\"defit\">Rélevons le défi</div>
                            ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c_logo-cestom-entete_1.png");
            // line 38
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
                            ";
        } else {
            // asset "d10e26c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c.png");
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
                            ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "                            <div class=\"coordination\">
                                <span>COORDINATION DES</span>
                                <span>ETUDIANTS ET</span>
                                <span>STAGIAIRES TOGOLAIS</span>
                                <span>AU MAROC</span>
                            </div>
                        </div>
                        <div class=\"col-sm-6 text-right boutons_header\" >
                            <span class=\"fa fa-2x fa-bars option_bars\"></span>
                            <span class=\"fa fa-2x fa-search \"></span>

                            <a style=\"color:white\" data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                <span class=\"fa fa-2x fa-user \"></span>
                                <span class=\"\">
                                    Bienvenue, ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                </span> 

                            </a>

                            ";
        // line 59
        $this->displayBlock('user', $context, $blocks);
        // line 81
        echo "
                        </div>
                    </div>
                </div>
            </header>

        ";
    }

    // line 59
    public function block_user($context, array $blocks = array())
    {
        // line 60
        echo "
                                <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

                                    <li>
                                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("cestom_home");
        echo "\">
                                            <i class=\"ace-icon fa fa-user\"></i>
                                            Site Web
                                        </a>
                                    </li>

                                    <li class=\"divider\"></li>

                                    <li>
                                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                            <i class=\"ace-icon fa fa-power-off\"></i>
                                            Se deconnecter
                                        </a>
                                    </li>
                                </ul>
                                <!--/ #section:basics/navbar.user_menu -->
                            ";
    }

    // line 88
    public function block_menu($context, array $blocks = array())
    {
        // line 89
        echo "            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>

                        </button>\t\t\t\t\t
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li ><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("cestom_user_homepage");
        echo "\" >Mon compte </a></li>
                            <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_formation");
        echo "\" >Mes formations </a></li>
                            <li><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_ville");
        echo "\"> Mes villes </a></li>
                            <li><a href=\"#\">Dossier bourse </a></li>
                            <li><a href=\"#\">Prise en charge</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        ";
    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
        // line 119
        echo "
        ";
    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        // line 123
        echo "            <footer>
                <div class=\"bureau_executif\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <i class=\"fa fa-database fa-5x boutons_footer\"></i>
                                <h3>LE BUREAU EXECUTIF</h3>
                                <h2><a href=\"#\">TOYI LENNAH</a></h2>
                                <div>Le Sécrétaire générale</div>
                                <div>Téléphone: 0021234578964</div>
                                <div>Email: tlennah@gmail.com</div>
                            </div>
                            <div class=\"col-sm-2\">
                                <a href=\"#\"><span class=\"fa fa-search-plus fa-5x boutons_footer\"></span></a>
                                <h3>REHERCHER</h3>
                                <div><a href=\"#\">RETROUVER UN MEMBRE</a></div>
                            </div>
                            <div class=\"col-sm-3 newsletter\">
                                <div ><h3>ETRE INFORME DES DERNIERES NOUVELLES
                                        S'INSCRIRE A LA NEWSLETTER</h3>
                                    <input type=\"email\" name=\"newsletter_email\" class=\"input-mail\" placeholder=\"exemple@cestom.org\" size=\"30\" maxlength=\"50\" />
                                    <input type=\"submit\" value=\"ENREGISTRER\" class=\"boutton_enregistrer\" />
                                </div>
                                <div>NOUS SUIVRE SUR:
                                    <a href=\"https://www.facebook.com/groups/CESTOM228/1094096120618025\" class=\"fa fa-facebook fa-2x reseaux-sociaux\"></a>
                                    <i class=\"fa fa-twitter fa-2x reseaux-sociaux\"></i>

                                </div>
                            </div>
                            <div class=\"col-sm-2 liens-utils\">
                                <a href=\"#\" class=\"fa fa-info-circle fa-5x boutons_footer\"></a>
                                <h3>INFOS PRATIQUES</h3>
                                <div><a href=\"#\">Retrouvez un ensemble de liens utiles</a></div>
                            </div>
                            <div class=\"col-sm-2\">
                                <i class=\"fa fa-home fa-5x boutons_footer\"></i>
                                <h3>LE CONSULAT</h3>
                                <div><a href=\"#\">CONTACTER LE CONSULAT</a></div>
                                <div>Téléphone: 0522396048</div>
                                <a href=\"www.ambassadedutogoaumaroc.org\">Site:www.consultogomaroc.org</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"nous_contacter\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h3>Coordination</h3>
                                <div><a  class=\"intro\" href=\"#\">Présentation</a></div>
                                <div><a  class=\"intro\" href=\"#\">Historique</a></div>
                                <div><a  class=\"intro\" href=\"#\">le bureau exécutif</a></div>
                                <div><a  class=\"intro\" href=\"#\">Les sections</a></div>
                                <div><a  class=\"intro\" href=\"#\">Autres organes</a></div>
                            </div>
                            <div class=\"col-sm-3\">
                                <h3>INFOS PRATIQUES</h3>
                                <div><a  class=\"intro\" href=\"#\" class=\"intro\">Le TOGO</a></div>
                                <div><a  class=\"intro\" href=\"#\">Etudier au MAROC</a></div>
                                <div><a  class=\"intro\" href=\"#\">Aller au TOGO</a></div>
                                <div><a  class=\"intro\" href=\"#\">Paser ses vaccances au TOGO</a></div>
                                <div><a  class=\"intro\" href=\"#\">Carte de séjour au MAROC</a></div>\t
                            </div>
                            <div class=\"col-sm-3\">
                                <h3>LE CONSULAT</h3>
                                <div><a  class=\"intro\" href=\"#\">Présentation</a></div>
                                <div><a  class=\"intro\" href=\"#\">Carte d'imatriculation consulaire</a></div>
                                <div><a  class=\"intro\" href=\"#\">Attestations de prise en charge</a></div>
                                <div><a  class=\"intro\" href=\"#\">Légalisations et Authentifications</a></div>
                                <div><a  class=\"intro\" href=\"#\">Laisser passer</a></div>
                                <div><a  class=\"intro\" href=\"#\">Contacter le consulat</a></div>
                            </div>
                            <div class=\"col-sm-3\">

                                <div class=\"row\">
                                    <div class=\"footer-coordinations\">
                                        <span class=\"col-sm-6 logo-cestom-footer\">
                                            ";
        // line 200
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d_logo-cestom-footer_1.png");
            // line 201
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                                            ";
        } else {
            // asset "4ced26d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d.png");
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                                            ";
        }
        unset($context["asset_url"]);
        // line 203
        echo "                                        </span>
                                        <span class=\"col-sm-6 coordination\">
                                            <span>Coordination des</span>
                                            <span>Etudiants et</span>
                                            <span>Stagiaires Togolais</span>
                                            <span>au Maroc</span>
                                        </span>
                                    </div>

                                </div>
                                <div class=\"cestom-mail\">
                                    email: <a href=\"https:mail.yahoo.com\">cestom_be@yahoo.fr</a>/<a href=\"https://mail.google.com\">cestom.be@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label class=\"copiright\">© 2009-2015, CESTOM. Certains droits réservés.</label>
            </footer>
        ";
    }

    // line 235
    public function block_javascripts($context, array $blocks = array())
    {
        // line 236
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 236,  432 => 235,  409 => 203,  395 => 201,  391 => 200,  312 => 123,  309 => 122,  304 => 119,  301 => 118,  289 => 107,  285 => 106,  281 => 105,  263 => 89,  260 => 88,  248 => 73,  236 => 64,  230 => 60,  227 => 59,  217 => 81,  215 => 59,  207 => 54,  191 => 40,  177 => 38,  173 => 37,  166 => 32,  163 => 31,  159 => 28,  156 => 27,  150 => 5,  142 => 238,  140 => 235,  134 => 232,  129 => 230,  125 => 229,  120 => 227,  115 => 225,  111 => 223,  109 => 122,  106 => 121,  104 => 118,  99 => 115,  96 => 88,  94 => 31,  90 => 29,  88 => 27,  83 => 25,  79 => 24,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  54 => 14,  46 => 9,  42 => 8,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}CESTOM{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/dataTable.min.css')}}" />*/
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*         <!-- text fonts -->*/
/*       <!--  <link rel="stylesheet" href="{{ asset('assets/css/ace-fonts.css')}}" /> -->*/
/* */
/*         <!-- ace styles -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css')}}" />*/
/* */
/*         <script src="{{ asset('assets/js/ace-extra.min.js')}}"></script>   */
/* */
/*         <!-- Date picker css -->*/
/*         <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />	*/
/*         <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.css')}}" />*/
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6 logo-slogan">*/
/*                             <div style="padding:20px" class="defit">Rélevons le défi</div>*/
/*                             {% image '@CestomArticleBundle/Resources/public/images/logo-cestom-entete.png' %}*/
/*                             <img src="{{ asset_url }}" alt="logo-CESTOM"/>*/
/*                             {% endimage %}*/
/*                             <div class="coordination">*/
/*                                 <span>COORDINATION DES</span>*/
/*                                 <span>ETUDIANTS ET</span>*/
/*                                 <span>STAGIAIRES TOGOLAIS</span>*/
/*                                 <span>AU MAROC</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-6 text-right boutons_header" >*/
/*                             <span class="fa fa-2x fa-bars option_bars"></span>*/
/*                             <span class="fa fa-2x fa-search "></span>*/
/* */
/*                             <a style="color:white" data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/*                                 <span class="fa fa-2x fa-user "></span>*/
/*                                 <span class="">*/
/*                                     Bienvenue, {{ app.user.username }}*/
/*                                 </span> */
/* */
/*                             </a>*/
/* */
/*                             {% block user %}*/
/* */
/*                                 <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* */
/*                                     <li>*/
/*                                         <a href="{{ path('cestom_home')}}">*/
/*                                             <i class="ace-icon fa fa-user"></i>*/
/*                                             Site Web*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_logout') }}">*/
/*                                             <i class="ace-icon fa fa-power-off"></i>*/
/*                                             Se deconnecter*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <!--/ #section:basics/navbar.user_menu -->*/
/*                             {% endblock %}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* */
/*         {% endblock %}*/
/*         {% block menu %}*/
/*             <nav class="navbar navbar-default">*/
/*                 <div class="container-fluid">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                             <span class="sr-only">Navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/* */
/*                         </button>					*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li ><a href="{{path ('cestom_user_homepage') }}" >Mon compte </a></li>*/
/*                             <li><a href="{{ path ('cestom_user_gestion_formation') }}" >Mes formations </a></li>*/
/*                             <li><a href="{{ path ('cestom_user_gestion_ville') }}"> Mes villes </a></li>*/
/*                             <li><a href="#">Dossier bourse </a></li>*/
/*                             <li><a href="#">Prise en charge</a></li>*/
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/*                 </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/* */
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="bureau_executif">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-3">*/
/*                                 <i class="fa fa-database fa-5x boutons_footer"></i>*/
/*                                 <h3>LE BUREAU EXECUTIF</h3>*/
/*                                 <h2><a href="#">TOYI LENNAH</a></h2>*/
/*                                 <div>Le Sécrétaire générale</div>*/
/*                                 <div>Téléphone: 0021234578964</div>*/
/*                                 <div>Email: tlennah@gmail.com</div>*/
/*                             </div>*/
/*                             <div class="col-sm-2">*/
/*                                 <a href="#"><span class="fa fa-search-plus fa-5x boutons_footer"></span></a>*/
/*                                 <h3>REHERCHER</h3>*/
/*                                 <div><a href="#">RETROUVER UN MEMBRE</a></div>*/
/*                             </div>*/
/*                             <div class="col-sm-3 newsletter">*/
/*                                 <div ><h3>ETRE INFORME DES DERNIERES NOUVELLES*/
/*                                         S'INSCRIRE A LA NEWSLETTER</h3>*/
/*                                     <input type="email" name="newsletter_email" class="input-mail" placeholder="exemple@cestom.org" size="30" maxlength="50" />*/
/*                                     <input type="submit" value="ENREGISTRER" class="boutton_enregistrer" />*/
/*                                 </div>*/
/*                                 <div>NOUS SUIVRE SUR:*/
/*                                     <a href="https://www.facebook.com/groups/CESTOM228/1094096120618025" class="fa fa-facebook fa-2x reseaux-sociaux"></a>*/
/*                                     <i class="fa fa-twitter fa-2x reseaux-sociaux"></i>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-2 liens-utils">*/
/*                                 <a href="#" class="fa fa-info-circle fa-5x boutons_footer"></a>*/
/*                                 <h3>INFOS PRATIQUES</h3>*/
/*                                 <div><a href="#">Retrouvez un ensemble de liens utiles</a></div>*/
/*                             </div>*/
/*                             <div class="col-sm-2">*/
/*                                 <i class="fa fa-home fa-5x boutons_footer"></i>*/
/*                                 <h3>LE CONSULAT</h3>*/
/*                                 <div><a href="#">CONTACTER LE CONSULAT</a></div>*/
/*                                 <div>Téléphone: 0522396048</div>*/
/*                                 <a href="www.ambassadedutogoaumaroc.org">Site:www.consultogomaroc.org</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="nous_contacter">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-3">*/
/*                                 <h3>Coordination</h3>*/
/*                                 <div><a  class="intro" href="#">Présentation</a></div>*/
/*                                 <div><a  class="intro" href="#">Historique</a></div>*/
/*                                 <div><a  class="intro" href="#">le bureau exécutif</a></div>*/
/*                                 <div><a  class="intro" href="#">Les sections</a></div>*/
/*                                 <div><a  class="intro" href="#">Autres organes</a></div>*/
/*                             </div>*/
/*                             <div class="col-sm-3">*/
/*                                 <h3>INFOS PRATIQUES</h3>*/
/*                                 <div><a  class="intro" href="#" class="intro">Le TOGO</a></div>*/
/*                                 <div><a  class="intro" href="#">Etudier au MAROC</a></div>*/
/*                                 <div><a  class="intro" href="#">Aller au TOGO</a></div>*/
/*                                 <div><a  class="intro" href="#">Paser ses vaccances au TOGO</a></div>*/
/*                                 <div><a  class="intro" href="#">Carte de séjour au MAROC</a></div>	*/
/*                             </div>*/
/*                             <div class="col-sm-3">*/
/*                                 <h3>LE CONSULAT</h3>*/
/*                                 <div><a  class="intro" href="#">Présentation</a></div>*/
/*                                 <div><a  class="intro" href="#">Carte d'imatriculation consulaire</a></div>*/
/*                                 <div><a  class="intro" href="#">Attestations de prise en charge</a></div>*/
/*                                 <div><a  class="intro" href="#">Légalisations et Authentifications</a></div>*/
/*                                 <div><a  class="intro" href="#">Laisser passer</a></div>*/
/*                                 <div><a  class="intro" href="#">Contacter le consulat</a></div>*/
/*                             </div>*/
/*                             <div class="col-sm-3">*/
/* */
/*                                 <div class="row">*/
/*                                     <div class="footer-coordinations">*/
/*                                         <span class="col-sm-6 logo-cestom-footer">*/
/*                                             {% image '@CestomArticleBundle/Resources/public/images/logo-cestom-footer.png' %}*/
/*                                             <img src="{{ asset_url }}"/>*/
/*                                             {% endimage %}*/
/*                                         </span>*/
/*                                         <span class="col-sm-6 coordination">*/
/*                                             <span>Coordination des</span>*/
/*                                             <span>Etudiants et</span>*/
/*                                             <span>Stagiaires Togolais</span>*/
/*                                             <span>au Maroc</span>*/
/*                                         </span>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="cestom-mail">*/
/*                                     email: <a href="https:mail.yahoo.com">cestom_be@yahoo.fr</a>/<a href="https://mail.google.com">cestom.be@gmail.com</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <label class="copiright">© 2009-2015, CESTOM. Certains droits réservés.</label>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         <!-- Ace script -->*/
/*         <script src="{{ asset('assets/js/jquery.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/jquery-ui.custom.min.js')}}"></script>*/
/*         <script src="{{ asset('assets/js/ace-elements.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/ace.min.js')}}"></script>*/
/* */
/* */
/*         {% block javascripts %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */

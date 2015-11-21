<?php

/* ::base_user.html.twig */
class __TwigTemplate_8a54be4174da5bdc70c0430a8af38cc134c88fcc663cbb15e117b34dddfd1339 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTable.min.css"), "html", null, true);
        echo "\" />
        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

        <!-- text fonts -->
      <!--  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" /> -->

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>   

        <!-- Date picker css -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />\t
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
<style>
\t\t
\t\t.navbar{ 
\t\tbackground-color:#337ab7
\t\t}
 \t\t
\t</style>
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    </head>
    <body>
        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 170
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 258
        echo "


        <div class=\"widget-body col-sm-12\">
        ";
        // line 262
        $this->displayBlock('body', $context, $blocks);
        // line 265
        echo "       </div>

        ";
        // line 267
        $this->displayBlock('footer', $context, $blocks);
        // line 368
        echo "
        <!-- Ace script -->
        <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\t\t\t\t\$(\"a.zoom\").colorbox();
\t\t\t\tfunction afficheMasquerMenup(){
\t\t\t\t\tif(document.getElementById('menu-p').style.display == 'block')
\t\t\t\t\t\tdocument.getElementById('menu-p').style.display='none';
\t\t\t\t\t\telse document.getElementById('menu-p').style.display='block';
\t\t\t\t\tdocument.getElementById('search-in').style.display='none';
\t\t\t\t}
\t\t\t\tfunction afficheMasquerRechercher(){
\t\t\t\t\tif(document.getElementById('search-in').style.display == 'block')
\t\t\t\t\t\tdocument.getElementById('search-in').style.display='none';
\t\t\t\t\t\telse document.getElementById('search-in').style.display='block';
\t\t\t\t\t\tdocument.getElementById('menu-p').style.display='none';
\t\t\t\t}
\t\t\t</script>

\t\t";
        // line 394
        $this->displayBlock('javascripts', $context, $blocks);
        // line 397
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

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "          <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 logo-slogan\">
                    <div class=\"defit\">Rélevons le défi</div>
                    ";
        // line 43
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c_logo-cestom-entete_1.png");
            // line 44
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
                    ";
        } else {
            // asset "d10e26c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 46
        echo "                    <div class=\"coordination\">
                        <span>COORDINATION DES</span>
                        <span>ETUDIANTS ET</span>
                        <span>STAGIAIRES TOGOLAIS</span>
                        <span>AU MAROC</span>
                    </div>
                </div>
                <div class=\"col-sm-6 text-right boutons_header\" >
                    <a href=\"#\" onclick=\"afficheMasquerMenup()\">
\t\t\t\t\t\t<span class=\"fa fa-2x fa-bars option_bars\" title=\"cliquer pour développer\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" onclick=\"afficheMasquerRechercher()\">
\t\t\t\t\t\t<span class=\"fa fa-2x fa-search search-icon\" title=\"Rechercher sur ce site\"></span>
\t\t\t\t\t</a>
 <a style=\"color:white\" data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                <span class=\"fa fa-2x fa-user \"></span>
                                <span class=\"\">
                                    Bienvenue, ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                </span> 

                            </a>

                            ";
        // line 68
        $this->displayBlock('user', $context, $blocks);
        // line 90
        echo "\t\t\t\t</div>
\t\t\t\t
            </div>
        </div>
    </header>
\t
\t<!--MENU PRINCIPAL-->
\t\t<div class=\"container menu-principal\" id=\"menu-p\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>ACCUEIL</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a  class=\"\" href=\"#\">AG 2015</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a  class=\"\" href=\"#\">27 Avril</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a  class=\"\" href=\"#\">JETM 2015</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>ACTUALITES</h3>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"aller aux actualités du Togo\">Togo</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\"title=\"aller aux actualités du Maroc\">Maroc</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>CORDINATION</h3>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Présentation</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Historique</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Le Bureau Exécutif</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Les sections</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Autres organes</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>Membres</h3>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Devenir membre</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Bourses</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Laisser passer</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Passport</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Carte consulaire</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\" title=\"Dossiers à fournir\">Carte de séjour</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>INFOS PRATIQUES</h3>
\t\t\t\t\t<div><a  href=\"#\">Le Togo</a></div>
\t\t\t\t\t<div><a  href=\"#\">Etudier au Maroc</a></div>
\t\t\t\t\t<div><a  href=\"#\">Bourses et aides</a></div>
\t\t\t\t\t<div><a  href=\"#\">Liens utils</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<h3>LE CONSULAT</h3>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Présentation</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Carte consulaire</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Prise en charge</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Légalisations</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Authentifications</a></div>
\t\t\t\t\t<div><a  class=\"\" href=\"#\">Laisser passer</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!--REHERCHER-->
\t<div class=\"search-input\" id=\"search-in\">
\t\t<div class=\"input-group\">
\t\t  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
\t\t  <span class=\"input-group-btn\">
\t\t\t<a class=\"btn btn-default\" href=\"#\" >
\t\t\t\t<span class=\"fa fa-search \"></span>
\t\t\t</a>
\t\t  </span>
\t\t</div>
\t</div>
\t
\t
\t
\t
\t
\t
\t
        ";
    }

    // line 68
    public function block_user($context, array $blocks = array())
    {
        // line 69
        echo "
                                <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

                                    <li>
                                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("cestom_home");
        echo "\">
                                            <i class=\"ace-icon fa fa-user\"></i>
                                            Site Web
                                        </a>
                                    </li>

                                    <li class=\"divider\"></li>

                                    <li>
                                        <a href=\"";
        // line 82
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

    // line 170
    public function block_menu($context, array $blocks = array())
    {
        // line 171
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
        // line 187
        echo $this->env->getExtension('routing')->getPath("cestom_user_homepage");
        echo "\" >Mon compte </a></li>
                            <li>
\t\t\t\t\t\t\t\t<!--<a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_formation");
        echo "\" >Mes formations</a>-->
\t\t\t\t\t\t\t\t<a style=\"color:white\" data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\tMes formations
\t\t\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

\t\t\t\t\t\t\t\t\t<li>
                                        <a href=\"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_formation");
        echo "\">
                                            Formations
                                        </a>
                                    </li>

                                    <li class=\"divider\"></li>

                                    <li>
                                        <a href=\"#\">
                                            Expériences
                                        </a>
                                    </li>
                                </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
                            <li><a href=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_ville");
        echo "\"> Mes villes </a></li>
                           <!-- <li><a href=\"#\">Mes dossiers</a></li>-->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a style=\"color:white\" data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t\t\t\tMes dossiers
\t\t\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">

\t\t\t\t\t\t\t\t\t<li>
                                        <a href=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_fichier");
        echo "\"\">
                                            Bourse
                                        </a>
                                    </li>

                                    <li class=\"divider\"></li>

                                    <li>
                                        <a href=\"#\">
                                            Prise en charge
                                        </a>
                                    </li>
\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

                                    <li>
                                        <a href=\"#\">
                                            Laisser passer
                                        </a>
                                    </li>
\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

                                    <li>
                                        <a href=\"#\">
                                            Authentifications
                                        </a>
                                    </li>
                                </ul>
\t\t\t\t\t\t\t</li>
                            <li><a href=\"#\">Messages<span class=\"badge\">5</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        ";
    }

    // line 262
    public function block_body($context, array $blocks = array())
    {
        // line 263
        echo "
        ";
    }

    // line 267
    public function block_footer($context, array $blocks = array())
    {
        // line 268
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
        // line 345
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d_logo-cestom-footer_1.png");
            // line 346
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
        // line 348
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

    // line 394
    public function block_javascripts($context, array $blocks = array())
    {
        // line 395
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
        return array (  602 => 395,  599 => 394,  576 => 348,  562 => 346,  558 => 345,  479 => 268,  476 => 267,  471 => 263,  468 => 262,  430 => 224,  416 => 213,  398 => 198,  386 => 189,  381 => 187,  363 => 171,  360 => 170,  348 => 82,  336 => 73,  330 => 69,  327 => 68,  244 => 90,  242 => 68,  234 => 63,  215 => 46,  201 => 44,  197 => 43,  190 => 38,  187 => 37,  182 => 34,  176 => 5,  168 => 397,  166 => 394,  146 => 377,  141 => 375,  137 => 374,  132 => 372,  127 => 370,  123 => 368,  121 => 267,  117 => 265,  115 => 262,  109 => 258,  106 => 170,  104 => 37,  100 => 35,  98 => 34,  87 => 26,  83 => 25,  77 => 22,  72 => 20,  68 => 19,  64 => 18,  58 => 15,  50 => 10,  46 => 9,  42 => 8,  37 => 6,  33 => 5,  27 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('assets/css/formulaires.css')}}" />*/
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
/* <style>*/
/* 		*/
/* 		.navbar{ */
/* 		background-color:#337ab7*/
/* 		}*/
/*  		*/
/* 	</style>*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*           <header>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 logo-slogan">*/
/*                     <div class="defit">Rélevons le défi</div>*/
/*                     {% image '@CestomArticleBundle/Resources/public/images/logo-cestom-entete.png' %}*/
/*                     <img src="{{ asset_url }}" alt="logo-CESTOM"/>*/
/*                     {% endimage %}*/
/*                     <div class="coordination">*/
/*                         <span>COORDINATION DES</span>*/
/*                         <span>ETUDIANTS ET</span>*/
/*                         <span>STAGIAIRES TOGOLAIS</span>*/
/*                         <span>AU MAROC</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right boutons_header" >*/
/*                     <a href="#" onclick="afficheMasquerMenup()">*/
/* 						<span class="fa fa-2x fa-bars option_bars" title="cliquer pour développer"></span>*/
/* 					</a>*/
/* 					<a href="#" onclick="afficheMasquerRechercher()">*/
/* 						<span class="fa fa-2x fa-search search-icon" title="Rechercher sur ce site"></span>*/
/* 					</a>*/
/*  <a style="color:white" data-toggle="dropdown" href="#" class="dropdown-toggle">*/
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
/* 				</div>*/
/* 				*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* 	*/
/* 	<!--MENU PRINCIPAL-->*/
/* 		<div class="container menu-principal" id="menu-p">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-2">*/
/* 					<h3>ACCUEIL</h3>*/
/* 					<div>*/
/* 						<a  class="" href="#">AG 2015</a>*/
/* 					</div>*/
/* 					<div>*/
/* 						<a  class="" href="#">27 Avril</a>*/
/* 					</div>*/
/* 					<div>*/
/* 						<a  class="" href="#">JETM 2015</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-2">*/
/* 					<h3>ACTUALITES</h3>*/
/* 					<div><a  class="" href="#" title="aller aux actualités du Togo">Togo</a></div>*/
/* 					<div><a  class="" href="#"title="aller aux actualités du Maroc">Maroc</a></div>*/
/* 				</div>*/
/* 				<div class="col-sm-2">*/
/* 					<h3>CORDINATION</h3>*/
/* 					<div><a  class="" href="#">Présentation</a></div>*/
/* 					<div><a  class="" href="#">Historique</a></div>*/
/* 					<div><a  class="" href="#">Le Bureau Exécutif</a></div>*/
/* 					<div><a  class="" href="#">Les sections</a></div>*/
/* 					<div><a  class="" href="#">Autres organes</a></div>*/
/* 				</div>*/
/* 				<div class="col-sm-2">*/
/* 					<h3>Membres</h3>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Devenir membre</a></div>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Bourses</a></div>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Laisser passer</a></div>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Passport</a></div>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Carte consulaire</a></div>*/
/* 					<div><a  class="" href="#" title="Dossiers à fournir">Carte de séjour</a></div>*/
/* 				</div>*/
/* 				<div class="col-sm-2">*/
/* 					<h3>INFOS PRATIQUES</h3>*/
/* 					<div><a  href="#">Le Togo</a></div>*/
/* 					<div><a  href="#">Etudier au Maroc</a></div>*/
/* 					<div><a  href="#">Bourses et aides</a></div>*/
/* 					<div><a  href="#">Liens utils</a></div>*/
/* 				</div>*/
/* 				<div class="col-sm-2">*/
/* 					<h3>LE CONSULAT</h3>*/
/* 					<div><a  class="" href="#">Présentation</a></div>*/
/* 					<div><a  class="" href="#">Carte consulaire</a></div>*/
/* 					<div><a  class="" href="#">Prise en charge</a></div>*/
/* 					<div><a  class="" href="#">Légalisations</a></div>*/
/* 					<div><a  class="" href="#">Authentifications</a></div>*/
/* 					<div><a  class="" href="#">Laisser passer</a></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!--REHERCHER-->*/
/* 	<div class="search-input" id="search-in">*/
/* 		<div class="input-group">*/
/* 		  <input type="text" class="form-control" placeholder="Rechercher">*/
/* 		  <span class="input-group-btn">*/
/* 			<a class="btn btn-default" href="#" >*/
/* 				<span class="fa fa-search "></span>*/
/* 			</a>*/
/* 		  </span>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
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
/*                             <li>*/
/* 								<!--<a href="{{ path ('cestom_user_gestion_formation') }}" >Mes formations</a>-->*/
/* 								<a style="color:white" data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* 									<span class="">*/
/* 										Mes formations*/
/* 									</span> */
/* 								</a>*/
/* 								<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* */
/* 									<li>*/
/*                                         <a href="{{ path ('cestom_user_gestion_formation') }}">*/
/*                                             Formations*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             Expériences*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/* 							</li>*/
/* 							*/
/*                             <li><a href="{{ path ('cestom_user_gestion_ville') }}"> Mes villes </a></li>*/
/*                            <!-- <li><a href="#">Mes dossiers</a></li>-->*/
/* 							<li>*/
/* 								<a style="color:white" data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* 									<span class="">*/
/* 										Mes dossiers*/
/* 									</span> */
/* 								</a>*/
/* 								<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* */
/* 									<li>*/
/*                                         <a href="{{ path ('cestom_user_ajouter_fichier') }}"">*/
/*                                             Bourse*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             Prise en charge*/
/*                                         </a>*/
/*                                     </li>*/
/* 									<li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             Laisser passer*/
/*                                         </a>*/
/*                                     </li>*/
/* 									<li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             Authentifications*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/* 							</li>*/
/*                             <li><a href="#">Messages<span class="badge">5</span></a></li>*/
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/*                 </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*         {% endblock %}*/
/* */
/* */
/* */
/*         <div class="widget-body col-sm-12">*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*        </div>*/
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
/* 		<script type="text/javascript">*/
/* 				$("a.zoom").colorbox();*/
/* 				function afficheMasquerMenup(){*/
/* 					if(document.getElementById('menu-p').style.display == 'block')*/
/* 						document.getElementById('menu-p').style.display='none';*/
/* 						else document.getElementById('menu-p').style.display='block';*/
/* 					document.getElementById('search-in').style.display='none';*/
/* 				}*/
/* 				function afficheMasquerRechercher(){*/
/* 					if(document.getElementById('search-in').style.display == 'block')*/
/* 						document.getElementById('search-in').style.display='none';*/
/* 						else document.getElementById('search-in').style.display='block';*/
/* 						document.getElementById('menu-p').style.display='none';*/
/* 				}*/
/* 			</script>*/
/* */
/* 		{% block javascripts %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */

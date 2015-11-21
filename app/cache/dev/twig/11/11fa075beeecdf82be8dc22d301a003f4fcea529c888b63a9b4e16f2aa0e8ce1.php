<?php

/* ::base_public.html.twig */
class __TwigTemplate_0654c49e1c7d342d728588384d48be1895892bbbcc00690d3b8dedcb8bc13a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
\t<header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 logo-slogan\">
                    <div class=\"defit\">Rélevons le défi</div>
                    ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c_logo-cestom-entete_1.png");
            // line 29
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
        // line 31
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
                    <!--<a style=\"color:white\" data-toggle=\"dropdown\" href=\"#\" 
\t\t\t\t\tonclick=\"javascript:getPage('";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "','main-block');\"
\t\t\t\t\tclass=\"dropdown-toggle\">
                        <span class=\"fa fa-2x fa-user \"></span>
                    </a>-->
\t\t\t\t\t<a style=\"color:white\" data-toggle=\"dropdown\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" 
\t\t\t\t\t\tclass=\"dropdown-toggle\">
                        <span class=\"fa fa-2x fa-user \"></span>
                    </a>
\t\t\t\t</div>
\t\t\t\t
            </div>
        </div>
    </header>
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
\t\t\t\t\t<h3>COORDINATION</h3>
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
\t\t";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "\t
\t <!--Pied de page -->
\t<footer>
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
        // line 208
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d_logo-cestom-footer_1.png");
            // line 209
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                                    ";
        } else {
            // asset "4ced26d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d.png");
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 211
        echo "                                </span>
                                <span class=\"col-sm-6 coordination\">
                                    <span>Coordination des</span>
                                    <span>Etudiants et</span>
                                    <span>Stagiaires Togolais</span>
                                    <span>au Maroc</span>
                                </span>
                            </div>

                        </div>
                        <div class=\"cestom-mail\">
\t\t\t\t\t\t\t<div>Nous contacter: </div>
                            <a href=\"https:mail.yahoo.com\">cestom_be@yahoo.fr</a>
\t\t\t\t\t\t\t<a href=\"https://mail.google.com\">cestom.be@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label class=\"copiright\">
\t\t© 2009-2015, CESTOM. Certains
\t\t<a href=\"#\">droits réservés.</a></label>
    </footer>
\t
\t\t";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 262
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "CESTOM";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec27934_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934_bootstrap.min_1.css");
            // line 18
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "ec27934_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934_bootstrap-theme.min_2.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "ec27934_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934_font-awesome.min_3.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "ec27934_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934_colorbox_4.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "ec27934_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934_accueilStyles_5.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        } else {
            // asset "ec27934"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec27934") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ec27934.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 20
        echo "\t\t";
    }

    // line 126
    public function block_body($context, array $blocks = array())
    {
        // line 127
        echo "\t\t
\t\t";
    }

    // line 235
    public function block_javascripts($context, array $blocks = array())
    {
        // line 236
        echo "\t\t\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"/>
\t\t\t";
        // line 237
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "afbcea7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/afbcea7_bootstrap.min_1.js");
            // line 242
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/afbcea7_script_2.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/afbcea7_jquery.colorbox-min_3.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "afbcea7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/afbcea7.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 244
        echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
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
    }

    public function getTemplateName()
    {
        return "::base_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 244,  381 => 242,  377 => 237,  374 => 236,  371 => 235,  366 => 127,  363 => 126,  359 => 20,  321 => 18,  316 => 11,  313 => 10,  307 => 8,  301 => 262,  299 => 235,  273 => 211,  259 => 209,  255 => 208,  174 => 129,  172 => 126,  93 => 50,  86 => 46,  69 => 31,  55 => 29,  51 => 28,  42 => 21,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}CESTOM{% endblock %}</title>*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         {% block stylesheets %}*/
/* 			{% stylesheets filter='cssrewrite'*/
/* 				'bundles/cestomarticle/css/bootstrap.min.css'*/
/* 				'bundles/cestomarticle/css/bootstrap-theme.min.css'*/
/* 				'bundles/cestomarticle/css/font-awesome.min.css'*/
/* 				'bundles/cestomarticle/css/colorbox.css'*/
/* 				'bundles/cestomarticle/css/accueilStyles.css'*/
/* 			%}*/
/* 				<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 			{% endstylesheets %}*/
/* 		{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* 	<header>*/
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
/*                     <!--<a style="color:white" data-toggle="dropdown" href="#" */
/* 					onclick="javascript:getPage('{{ path('fos_user_security_login') }}','main-block');"*/
/* 					class="dropdown-toggle">*/
/*                         <span class="fa fa-2x fa-user "></span>*/
/*                     </a>-->*/
/* 					<a style="color:white" data-toggle="dropdown" href="{{ path('fos_user_security_login') }}" */
/* 						class="dropdown-toggle">*/
/*                         <span class="fa fa-2x fa-user "></span>*/
/*                     </a>*/
/* 				</div>*/
/* 				*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
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
/* 					<h3>COORDINATION</h3>*/
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
/* 		{% block body %}*/
/* 		*/
/* 		{% endblock %}*/
/* 	*/
/* 	 <!--Pied de page -->*/
/* 	<footer>*/
/*         <div class="bureau_executif">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3">*/
/*                         <i class="fa fa-database fa-5x boutons_footer"></i>*/
/*                         <h3>LE BUREAU EXECUTIF</h3>*/
/*                         <h2><a href="#">TOYI LENNAH</a></h2>*/
/*                         <div>Le Sécrétaire générale</div>*/
/*                         <div>Téléphone: 0021234578964</div>*/
/*                         <div>Email: tlennah@gmail.com</div>*/
/*                     </div>*/
/*                     <div class="col-sm-2">*/
/*                         <a href="#"><span class="fa fa-search-plus fa-5x boutons_footer"></span></a>*/
/*                         <h3>REHERCHER</h3>*/
/*                         <div><a href="#">RETROUVER UN MEMBRE</a></div>*/
/*                     </div>*/
/*                     <div class="col-sm-3 newsletter">*/
/*                         <div ><h3>ETRE INFORME DES DERNIERES NOUVELLES*/
/*                                 S'INSCRIRE A LA NEWSLETTER</h3>*/
/*                             <input type="email" name="newsletter_email" class="input-mail" placeholder="exemple@cestom.org" size="30" maxlength="50" />*/
/*                             <input type="submit" value="ENREGISTRER" class="boutton_enregistrer" />*/
/*                         </div>*/
/*                         <div>NOUS SUIVRE SUR:*/
/*                             <a href="https://www.facebook.com/groups/CESTOM228/1094096120618025" class="fa fa-facebook fa-2x reseaux-sociaux"></a>*/
/*                             <i class="fa fa-twitter fa-2x reseaux-sociaux"></i>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-2 liens-utils">*/
/*                         <a href="#" class="fa fa-info-circle fa-5x boutons_footer"></a>*/
/*                         <h3>INFOS PRATIQUES</h3>*/
/*                         <div><a href="#">Retrouvez un ensemble de liens utiles</a></div>*/
/*                     </div>*/
/*                     <div class="col-sm-2">*/
/*                         <i class="fa fa-home fa-5x boutons_footer"></i>*/
/*                         <h3>LE CONSULAT</h3>*/
/*                         <div><a href="#">CONTACTER LE CONSULAT</a></div>*/
/*                         <div>Téléphone: 0522396048</div>*/
/*                         <a href="www.ambassadedutogoaumaroc.org">Site:www.consultogomaroc.org</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="nous_contacter">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3">*/
/*                         <h3>Coordination</h3>*/
/*                         <div><a  class="intro" href="#">Présentation</a></div>*/
/*                         <div><a  class="intro" href="#">Historique</a></div>*/
/*                         <div><a  class="intro" href="#">le bureau exécutif</a></div>*/
/*                         <div><a  class="intro" href="#">Les sections</a></div>*/
/*                         <div><a  class="intro" href="#">Autres organes</a></div>*/
/*                     </div>*/
/*                     <div class="col-sm-3">*/
/*                         <h3>INFOS PRATIQUES</h3>*/
/*                         <div><a  class="intro" href="#" class="intro">Le TOGO</a></div>*/
/*                         <div><a  class="intro" href="#">Etudier au MAROC</a></div>*/
/*                         <div><a  class="intro" href="#">Aller au TOGO</a></div>*/
/*                         <div><a  class="intro" href="#">Paser ses vaccances au TOGO</a></div>*/
/*                         <div><a  class="intro" href="#">Carte de séjour au MAROC</a></div>	*/
/*                     </div>*/
/*                     <div class="col-sm-3">*/
/*                         <h3>LE CONSULAT</h3>*/
/*                         <div><a  class="intro" href="#">Présentation</a></div>*/
/*                         <div><a  class="intro" href="#">Carte d'imatriculation consulaire</a></div>*/
/*                         <div><a  class="intro" href="#">Attestations de prise en charge</a></div>*/
/*                         <div><a  class="intro" href="#">Légalisations et Authentifications</a></div>*/
/*                         <div><a  class="intro" href="#">Laisser passer</a></div>*/
/*                         <div><a  class="intro" href="#">Contacter le consulat</a></div>*/
/*                     </div>*/
/*                     <div class="col-sm-3">*/
/* */
/*                         <div class="row">*/
/*                             <div class="footer-coordinations">*/
/*                                 <span class="col-sm-6 logo-cestom-footer">*/
/*                                     {% image '@CestomArticleBundle/Resources/public/images/logo-cestom-footer.png' %}*/
/*                                     <img src="{{ asset_url }}"/>*/
/*                                     {% endimage %}*/
/*                                 </span>*/
/*                                 <span class="col-sm-6 coordination">*/
/*                                     <span>Coordination des</span>*/
/*                                     <span>Etudiants et</span>*/
/*                                     <span>Stagiaires Togolais</span>*/
/*                                     <span>au Maroc</span>*/
/*                                 </span>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="cestom-mail">*/
/* 							<div>Nous contacter: </div>*/
/*                             <a href="https:mail.yahoo.com">cestom_be@yahoo.fr</a>*/
/* 							<a href="https://mail.google.com">cestom.be@gmail.com</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <label class="copiright">*/
/* 		© 2009-2015, CESTOM. Certains*/
/* 		<a href="#">droits réservés.</a></label>*/
/*     </footer>*/
/* 	*/
/* 		{% block javascripts %}*/
/* 			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"/>*/
/* 			{% javascripts */
/* 				'@CestomArticleBundle/Resources/public/js/bootstrap.min.js'*/
/* 				'@CestomArticleBundle/Resources/public/js/script.js'*/
/* 				'@CestomArticleBundle/Resources/public/js/jquery.colorbox-min.js'*/
/* 			%}*/
/* 				<script src="{{ asset_url }}" type="text/javascript"></script>*/
/* 			{% endjavascripts %}*/
/* 			*/
/* 			<script type="text/javascript">*/
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
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

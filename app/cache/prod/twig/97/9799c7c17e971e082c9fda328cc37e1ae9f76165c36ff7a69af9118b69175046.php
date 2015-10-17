<?php

/* CestomArticleBundle:Cms:index.html.twig */
class __TwigTemplate_86a792ca916c856c5011cee4acf6100e1469d51db2a8c224c5bf1d6caf69c43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_public.html.twig", "CestomArticleBundle:Cms:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af6ed8a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_0") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_accueilStyles_1.css");
            // line 12
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_1") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.carousel_2.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_2") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.transitions_3.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_3") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.theme_4.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        } else {
            // asset "af6ed8a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 logo-slogan\">
\t\t\t\t\t<div class=\"defit\">Rélevons le défit</div>
\t\t\t\t\t";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("images/d10e26c_logo-cestom-entete_1.png");
            // line 23
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
\t\t\t\t\t";
        } else {
            // asset "d10e26c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c") : $this->env->getExtension('assets')->getAssetUrl("images/d10e26c.png");
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 25
        echo "\t\t\t\t\t<div class=\"coordination\">
\t\t\t\t\t\t<span>COORDINATION DES</span>
\t\t\t\t\t\t<span>ETUDIANTS ET</span>
\t\t\t\t\t\t<span>STAGIAIRES TOGOLAIS</span>
\t\t\t\t\t\t<span>AU MAROC</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 text-right boutons_header\" >
\t\t\t\t\t<span class=\"fa fa-2x fa-bars option_bars\"></span>
\t\t\t\t\t<span class=\"fa fa-2x fa-search \"></span>
\t\t\t\t\t<span class=\"fa fa-2x fa-user \"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t
\t<!--ACTUALITES AU TOGO ET AU MAROC-->
\t
\t<!-- Bloc Actualités du TOGO-->
\t<div class=\"actu_togo\">
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block1"]) ? $context["block1"] : null), "pays", array()), "pays", array()), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"owl-carousel\" id=\"owl_carousel\">
\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block1"]) ? $context["block1"] : null), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 50
            echo "\t\t\t\t\t<div class=\"actu_item\">
\t\t\t\t\t\t\t<div class=\"banieres\">
\t\t\t\t\t\t\t\t<div class =\"banieresTogo\">
\t\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"articles_appercu\">
\t\t\t\t\t\t\t\t<h3 class=\"titre-actualite\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "showArticle", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo " class=\"titre-actualite\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t<span class=\"intro\">
\t\t\t\t\t\t\t\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!-- Bloc Actualités du Maroc-->
\t
\t<div class=\"bloc-maroc\">\t
\t
\t\t<section class=\"container\">
\t\t\t<div class=\"titre_le_maroc clearfix\">
\t\t<h1 class=\"titre_maroc_droite\">
\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "pays", array()), "pays", array()), "html", null, true);
        echo "
\t\t</h1>
\t</div>
\t<div class=\"container-fluid\">
\t\t\t<h3 class=\"titre-actualite\">
\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array()), "titre", array()), "html", null, true);
        echo "
\t\t\t</h3>\t
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 85
        if ($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array())) {
            // line 86
            echo "\t\t\t\t\t<article class=\"col-sm-7\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class='actu_avance' >
\t\t\t\t\t\t\t\t<div class =\"banieresMaroc\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array()), "categorie", array()), "categorie", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array()), "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"into-top-actualite\">
\t\t\t\t\t\t\t\t<span>\t
\t\t\t\t\t\t\t\t<a  class=\"intro\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "showArticle", array()), array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "topArticle", array()), "introduction", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</article >
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t
\t\t\t\t<aside class=\"col-sm-5 aside-article-show\">
\t\t\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block2"]) ? $context["block2"] : null), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 107
            echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image de l'article\" class=\"image_actualites\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8 \">
\t\t\t\t\t\t\t\t<div class=\"titre_actu_maroc\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"intro intro-annexe\">\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "showArticle", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t</aside>
\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t
\t<!--Pied de page -->
\t
\t<footer>
\t\t<div class=\"bureau_executif\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t <i class=\"fa fa-database fa-5x boutons_footer\"></i>
\t\t\t\t\t\t<h3>LE BUREAU EXECUTIF</h3>
\t\t\t\t\t\t<h2><a href=\"#\">TOYI LENNAH</a></h2>
\t\t\t\t\t\t<div>Le Sécrétaire générale</div>
\t\t\t\t\t\t<div>Téléphone: 0021234578964</div>
\t\t\t\t\t\t<div>Email: tlennah@gmail.com</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-search-plus fa-5x boutons_footer\"></span></a>
\t\t\t\t\t\t<h3>REHERCHER</h3>
\t\t\t\t\t\t<div><a href=\"#\">RETROUVER UN MEMBRE</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 newsletter\">
\t\t\t\t\t\t<div ><h3>ETRE INFORME DES DERNIERES NOUVELLES
\t\t\t\t\t\t\tS'INSCRIRE A LA NEWSLETTER</h3>
\t\t\t\t\t\t\t<input type=\"email\" name=\"newsletter_email\" class=\"input-mail\" placeholder=\"exemple@cestom.org\" size=\"30\" maxlength=\"50\" />
\t\t\t\t\t\t\t<input type=\"submit\" value=\"ENREGISTRER\" class=\"boutton_enregistrer\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>NOUS SUIVRE SUR:
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/groups/CESTOM228/1094096120618025\" class=\"fa fa-facebook fa-2x reseaux-sociaux\"></a>
\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x reseaux-sociaux\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 liens-utils\">
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-info-circle fa-5x boutons_footer\"></a>
\t\t\t\t\t\t<h3>INFOS PRATIQUES</h3>
\t\t\t\t\t\t<div><a href=\"#\">Retrouvez un ensemble de liens utiles</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<i class=\"fa fa-home fa-5x boutons_footer\"></i>
\t\t\t\t\t\t<h3>LE CONSULAT</h3>
\t\t\t\t\t\t<div><a href=\"#\">CONTACTER LE CONSULAT</a></div>
\t\t\t\t\t\t<div>Téléphone: 0522396048</div>
\t\t\t\t\t\t<a href=\"www.ambassadedutogoaumaroc.org\">Site:www.consultogomaroc.org</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"nous_contacter\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>Coordination</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Présentation</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Historique</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">le bureau exécutif</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Les sections</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Autres organes</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>INFOS PRATIQUES</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\" class=\"intro\">Le TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Etudier au MAROC</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Aller au TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Paser ses vaccances au TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Carte de séjour au MAROC</a></div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>LE CONSULAT</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Présentation</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Carte d'imatriculation consulaire</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Attestations de prise en charge</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Légalisations et Authentifications</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Laisser passer</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Contacter le consulat</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"footer-coordinations\">
\t\t\t\t\t\t\t\t<span class=\"col-sm-6 logo-cestom-footer\">
\t\t\t\t\t\t\t\t\t";
        // line 209
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("images/4ced26d_logo-cestom-footer_1.png");
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "4ced26d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d") : $this->env->getExtension('assets')->getAssetUrl("images/4ced26d.png");
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 212
        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"col-sm-6 coordination\">
\t\t\t\t\t\t\t\t\t<span>Coordination des</span>
\t\t\t\t\t\t\t\t\t<span>Etudiants et</span>
\t\t\t\t\t\t\t\t\t<span>Stagiaires Togolais</span>
\t\t\t\t\t\t\t\t\t<span>au Maroc</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cestom-mail\">
\t\t\t\t\t\t\temail: <a href=\"https:mail.yahoo.com\">cestom_be@yahoo.fr</a>/<a href=\"https://mail.google.com\">cestom.be@gmail.com</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<label class=\"copiright\">© 2009-2015, CESTOM. Certains droits réservés.</label>
\t</footer>
";
    }

    // line 233
    public function block_javascripts($context, array $blocks = array())
    {
        // line 234
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 235
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "971d665_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665_0") : $this->env->getExtension('assets')->getAssetUrl("js/971d665_owl.carousel.min_1.js");
            // line 236
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        } else {
            // asset "971d665"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665") : $this->env->getExtension('assets')->getAssetUrl("js/971d665.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 238
        echo "\t
\t
\t<script>
\t\t\$(document).ready(function(){
\t\t\t
\t\t\t\$('#owl_carousel').owlCarousel({
\t\t\t\tloop:true,
\t\t\t\titems: 4,
\t\t\t\tmargin:10,
\t\t\t\tnavigation: true,
\t\t\t\tpagination: false,
\t\t\t\tnavigationText : [\"<div class='navicon'></div>\",\"<div class='navicon'></div>\"],
\t\t\t\tbeforeUpdate: function(){
\t\t\t\t\tresetEqualHeight();
\t\t\t\t},
\t\t\t\tafterInit: function(){
\t\t\t\t\tmakeEqualHeight();
\t\t\t\t},
\t\t\t\tafterUpdate: function(){
\t\t\t\t\tmakeEqualHeight();
\t\t\t\t},
\t\t\t});
\t\t\tfunction resetEqualHeight(){
\t\t\t\t\$('#owl_carousel .actu_item').css('height', '');
\t\t\t}
\t\t\tfunction makeEqualHeight(){
\t\t\t\tvar tallest = 0 ;
\t\t\t\tresetEqualHeight();
\t\t\t\t\$('#owl_carousel .actu_item').each(function(i, el){
\t\t\t\t\tel = \$(el);
\t\t\t\t\tif(el.height() > tallest)
\t\t\t\t\t{
\t\t\t\t\t\ttallest = el.height();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$('#owl_carousel .actu_item').css(\"height\", tallest + \"px\");
\t\t\t}
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Cms:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 238,  415 => 236,  411 => 235,  406 => 234,  403 => 233,  380 => 212,  366 => 210,  362 => 209,  275 => 124,  262 => 117,  258 => 116,  252 => 113,  246 => 110,  241 => 107,  237 => 106,  233 => 104,  223 => 97,  219 => 96,  212 => 92,  207 => 90,  201 => 86,  199 => 85,  193 => 82,  185 => 77,  171 => 65,  160 => 60,  153 => 58,  147 => 55,  142 => 53,  137 => 50,  133 => 49,  127 => 46,  104 => 25,  90 => 23,  86 => 22,  79 => 17,  76 => 16,  42 => 12,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_public.html.twig' %} */
/* */
/* */
/*  {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	{% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.carousel.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.transitions.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.theme.css'*/
/* 	%}*/
/* 		<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/* 	<header>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-6 logo-slogan">*/
/* 					<div class="defit">Rélevons le défit</div>*/
/* 					{% image '@CestomArticleBundle/Resources/public/images/logo-cestom-entete.png' %}*/
/* 						<img src="{{ asset_url }}" alt="logo-CESTOM"/>*/
/* 					{% endimage %}*/
/* 					<div class="coordination">*/
/* 						<span>COORDINATION DES</span>*/
/* 						<span>ETUDIANTS ET</span>*/
/* 						<span>STAGIAIRES TOGOLAIS</span>*/
/* 						<span>AU MAROC</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6 text-right boutons_header" >*/
/* 					<span class="fa fa-2x fa-bars option_bars"></span>*/
/* 					<span class="fa fa-2x fa-search "></span>*/
/* 					<span class="fa fa-2x fa-user "></span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</header>*/
/* 	*/
/* 	<!--ACTUALITES AU TOGO ET AU MAROC-->*/
/* 	*/
/* 	<!-- Bloc Actualités du TOGO-->*/
/* 	<div class="actu_togo">*/
/* 		<div class="container">*/
/* 			<h1>{{block1.pays.pays}}</h1>*/
/* 			<div class="row">*/
/* 				<div class="owl-carousel" id="owl_carousel">*/
/* 					{% for entity in block1.articles %}*/
/* 					<div class="actu_item">*/
/* 							<div class="banieres">*/
/* 								<div class ="banieresTogo">*/
/* 									{{ entity.categorie.categorie }}*/
/* 								</div>*/
/* 								<img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="Image article" class="image_actualites"/>*/
/* 							</div>*/
/* 							<div class="articles_appercu">*/
/* 								<h3 class="titre-actualite"><a href="{{ path(mesRoutes.showArticle, { 'id': entity.id }) }} class="titre-actualite">{{ entity.titre }}</a></h3>*/
/* 								<span class="intro">*/
/* 										{{ entity.introduction }}*/
/* 							</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- Bloc Actualités du Maroc-->*/
/* 	*/
/* 	<div class="bloc-maroc">	*/
/* 	*/
/* 		<section class="container">*/
/* 			<div class="titre_le_maroc clearfix">*/
/* 		<h1 class="titre_maroc_droite">*/
/* 			{{block2.pays.pays}}*/
/* 		</h1>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 			<h3 class="titre-actualite">*/
/* 				{{block2.topArticle.titre}}*/
/* 			</h3>	*/
/* 			<div class="row">*/
/* 				{% if block2.topArticle %}*/
/* 					<article class="col-sm-7">*/
/* 						<div>*/
/* 							<div class='actu_avance' >*/
/* 								<div class ="banieresMaroc">*/
/* 									{{block2.topArticle.categorie.categorie}}*/
/* 								</div>*/
/* 								<img src="{{ vich_uploader_asset(block2.topArticle, 'introImgFile') }}" alt="Image article" class="image_actualites"/>					*/
/* 							</div>*/
/* 							<div class="into-top-actualite">*/
/* 								<span>	*/
/* 								<a  class="intro" href="{{ path(mesRoutes.showArticle, { 'id': block2.topArticle.id }) }}">*/
/* 								{{block2.topArticle.introduction}}*/
/* 								</a>*/
/* 								</span>							*/
/* 							</div>					*/
/* 						</div>					*/
/* 					</article >*/
/* 				{% endif %}*/
/* 				*/
/* 				<aside class="col-sm-5 aside-article-show">*/
/* 					{% for entity in block2.articles %}*/
/* 					*/
/* 						<div class="row">*/
/* 							<div class="col-sm-4">*/
/* 							<img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="Image de l'article" class="image_actualites"/>*/
/* 							</div>*/
/* 							<div class="col-sm-8 ">*/
/* 								<div class="titre_actu_maroc">{{entity.categorie.categorie}}</div>*/
/* 								<div>*/
/* 									<span class="intro intro-annexe">	*/
/* 										<a href="{{ path(mesRoutes.showArticle, { 'id': entity.id }) }}">*/
/* 											{{entity.introduction}}*/
/* 										</a>*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</aside>*/
/* 			</div>*/
/* 			</div>*/
/* 		</section>*/
/* 	</div>*/
/* 	*/
/* 	<!--Pied de page -->*/
/* 	*/
/* 	<footer>*/
/* 		<div class="bureau_executif">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3">*/
/* 						 <i class="fa fa-database fa-5x boutons_footer"></i>*/
/* 						<h3>LE BUREAU EXECUTIF</h3>*/
/* 						<h2><a href="#">TOYI LENNAH</a></h2>*/
/* 						<div>Le Sécrétaire générale</div>*/
/* 						<div>Téléphone: 0021234578964</div>*/
/* 						<div>Email: tlennah@gmail.com</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 						<a href="#"><span class="fa fa-search-plus fa-5x boutons_footer"></span></a>*/
/* 						<h3>REHERCHER</h3>*/
/* 						<div><a href="#">RETROUVER UN MEMBRE</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 newsletter">*/
/* 						<div ><h3>ETRE INFORME DES DERNIERES NOUVELLES*/
/* 							S'INSCRIRE A LA NEWSLETTER</h3>*/
/* 							<input type="email" name="newsletter_email" class="input-mail" placeholder="exemple@cestom.org" size="30" maxlength="50" />*/
/* 							<input type="submit" value="ENREGISTRER" class="boutton_enregistrer" />*/
/* 						</div>*/
/* 						<div>NOUS SUIVRE SUR:*/
/* 							<a href="https://www.facebook.com/groups/CESTOM228/1094096120618025" class="fa fa-facebook fa-2x reseaux-sociaux"></a>*/
/* 							<i class="fa fa-twitter fa-2x reseaux-sociaux"></i>*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 liens-utils">*/
/* 						<a href="#" class="fa fa-info-circle fa-5x boutons_footer"></a>*/
/* 						<h3>INFOS PRATIQUES</h3>*/
/* 						<div><a href="#">Retrouvez un ensemble de liens utiles</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 						<i class="fa fa-home fa-5x boutons_footer"></i>*/
/* 						<h3>LE CONSULAT</h3>*/
/* 						<div><a href="#">CONTACTER LE CONSULAT</a></div>*/
/* 						<div>Téléphone: 0522396048</div>*/
/* 						<a href="www.ambassadedutogoaumaroc.org">Site:www.consultogomaroc.org</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="nous_contacter">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3">*/
/* 							<h3>Coordination</h3>*/
/* 							<div><a  class="intro" href="#">Présentation</a></div>*/
/* 							<div><a  class="intro" href="#">Historique</a></div>*/
/* 							<div><a  class="intro" href="#">le bureau exécutif</a></div>*/
/* 							<div><a  class="intro" href="#">Les sections</a></div>*/
/* 							<div><a  class="intro" href="#">Autres organes</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 							<h3>INFOS PRATIQUES</h3>*/
/* 							<div><a  class="intro" href="#" class="intro">Le TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Etudier au MAROC</a></div>*/
/* 							<div><a  class="intro" href="#">Aller au TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Paser ses vaccances au TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Carte de séjour au MAROC</a></div>	*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 							<h3>LE CONSULAT</h3>*/
/* 							<div><a  class="intro" href="#">Présentation</a></div>*/
/* 							<div><a  class="intro" href="#">Carte d'imatriculation consulaire</a></div>*/
/* 							<div><a  class="intro" href="#">Attestations de prise en charge</a></div>*/
/* 							<div><a  class="intro" href="#">Légalisations et Authentifications</a></div>*/
/* 							<div><a  class="intro" href="#">Laisser passer</a></div>*/
/* 							<div><a  class="intro" href="#">Contacter le consulat</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 					*/
/* 						<div class="row">*/
/* 							<div class="footer-coordinations">*/
/* 								<span class="col-sm-6 logo-cestom-footer">*/
/* 									{% image '@CestomArticleBundle/Resources/public/images/logo-cestom-footer.png' %}*/
/* 										<img src="{{ asset_url }}"/>*/
/* 									{% endimage %}*/
/* 								</span>*/
/* 								<span class="col-sm-6 coordination">*/
/* 									<span>Coordination des</span>*/
/* 									<span>Etudiants et</span>*/
/* 									<span>Stagiaires Togolais</span>*/
/* 									<span>au Maroc</span>*/
/* 								</span>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						<div class="cestom-mail">*/
/* 							email: <a href="https:mail.yahoo.com">cestom_be@yahoo.fr</a>/<a href="https://mail.google.com">cestom.be@gmail.com</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<label class="copiright">© 2009-2015, CESTOM. Certains droits réservés.</label>*/
/* 	</footer>*/
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	{% javascripts  '@CestomArticleBundle/Resources/public/js/owl.carousel.min.js' %}*/
/* 			<script src="{{ asset_url }}" type="text/javascript"></script>*/
/* 	{% endjavascripts %}*/
/* 	*/
/* 	*/
/* 	<script>*/
/* 		$(document).ready(function(){*/
/* 			*/
/* 			$('#owl_carousel').owlCarousel({*/
/* 				loop:true,*/
/* 				items: 4,*/
/* 				margin:10,*/
/* 				navigation: true,*/
/* 				pagination: false,*/
/* 				navigationText : ["<div class='navicon'></div>","<div class='navicon'></div>"],*/
/* 				beforeUpdate: function(){*/
/* 					resetEqualHeight();*/
/* 				},*/
/* 				afterInit: function(){*/
/* 					makeEqualHeight();*/
/* 				},*/
/* 				afterUpdate: function(){*/
/* 					makeEqualHeight();*/
/* 				},*/
/* 			});*/
/* 			function resetEqualHeight(){*/
/* 				$('#owl_carousel .actu_item').css('height', '');*/
/* 			}*/
/* 			function makeEqualHeight(){*/
/* 				var tallest = 0 ;*/
/* 				resetEqualHeight();*/
/* 				$('#owl_carousel .actu_item').each(function(i, el){*/
/* 					el = $(el);*/
/* 					if(el.height() > tallest)*/
/* 					{*/
/* 						tallest = el.height();*/
/* 					}*/
/* 				});*/
/* 				$('#owl_carousel .actu_item').css("height", tallest + "px");*/
/* 			}*/
/* 		});*/
/* 	</script>*/
/* {% endblock %}*/
/* */

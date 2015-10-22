<?php

/* CestomArticleBundle:Cms:index.html.twig */
class __TwigTemplate_5151aa945ff8c122e341f054ea8f19d8b0fa7efe2306a2677102fd2b3843a6cb extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af6ed8a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_accueilStyles_1.css");
            // line 12
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
            // asset "af6ed8a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.carousel_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
            // asset "af6ed8a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.transitions_3.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
            // asset "af6ed8a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.theme_4.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        } else {
            // asset "af6ed8a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 logo-slogan\">
                    <div class=\"defit\">Rélevons le défit</div>
                    ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c_logo-cestom-entete_1.png");
            // line 23
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
        // line 25
        echo "                    <div class=\"coordination\">
                        <span>COORDINATION DES</span>
                        <span>ETUDIANTS ET</span>
                        <span>STAGIAIRES TOGOLAIS</span>
                        <span>AU MAROC</span>
                    </div>
                </div>
                <div class=\"col-sm-6 text-right boutons_header\" >
                    <span class=\"fa fa-2x fa-bars option_bars\"></span>
                    <span class=\"fa fa-2x fa-search \"></span>
                    <a style=\"color:white\" data-toggle=\"dropdown\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"dropdown-toggle\">
                        <span class=\"fa fa-2x fa-user \"></span>

                    </a>


                </div>
            </div>
        </div>
    </header>

    <!--ACTUALITES AU TOGO ET AU MAROC-->

    <!-- Bloc Actualités du TOGO-->
    <div class=\"actu_togo\">
        <div class=\"container\">
            <h1>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block1"]) ? $context["block1"] : $this->getContext($context, "block1")), "pays", array()), "pays", array()), "html", null, true);
        echo "</h1>
            <div class=\"row\">
                <div class=\"owl-carousel\" id=\"owl_carousel\">
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block1"]) ? $context["block1"] : $this->getContext($context, "block1")), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 55
            echo "                        <div class=\"actu_item\">
                            <div class=\"banieres\">
                                <div class =\"banieresTogo\">
                                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "
                                </div>
                                <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>
                            </div>
                            <div class=\"articles_appercu\">
                                <h3 class=\"titre-actualite\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : $this->getContext($context, "mesRoutes")), "showArticle", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo " class=\"titre-actualite\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                <span class=\"intro\">
                                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
                                </span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </div>
            </div>
        </div>
    </div>

    <!-- Bloc Actualités du Maroc-->

    <div class=\"bloc-maroc\">\t

        <section class=\"container\">
            <div class=\"titre_le_maroc clearfix\">
                <h1 class=\"titre_maroc_droite\">
                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "pays", array()), "pays", array()), "html", null, true);
        echo "
                </h1>
            </div>
            <div class=\"container-fluid\">
                <h3 class=\"titre-actualite\">
                    ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "titre", array()), "html", null, true);
        echo "
                </h3>\t
                <div class=\"row\">
                    ";
        // line 90
        if ($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array())) {
            // line 91
            echo "                        <article class=\"col-sm-7\">
                            <div>
                                <div class='actu_avance' >
                                    <div class =\"banieresMaroc\">
                                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "categorie", array()), "categorie", array()), "html", null, true);
            echo "
                                    </div>
                                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>\t\t\t\t\t
                                </div>
                                <div class=\"into-top-actualite\">
                                    <span>\t
                                        <a  class=\"intro\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : $this->getContext($context, "mesRoutes")), "showArticle", array()), array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "id", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "introduction", array()), "html", null, true);
            echo "
                                        </a>
                                    </span>\t\t\t\t\t\t\t
                                </div>\t\t\t\t\t
                            </div>\t\t\t\t\t
                        </article >
                    ";
        }
        // line 109
        echo "
                    <aside class=\"col-sm-5 aside-article-show\">
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 112
            echo "
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image de l'article\" class=\"image_actualites\"/>
                                </div>
                                <div class=\"col-sm-8 \">
                                    <div class=\"titre_actu_maroc\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "</div>
                                    <div>
                                        <span class=\"intro intro-annexe\">\t
                                            <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : $this->getContext($context, "mesRoutes")), "showArticle", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </aside>
                </div>
            </div>
        </section>
    </div>

    <!--Pied de page -->

    <footer>
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
        // line 214
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d_logo-cestom-footer_1.png");
            // line 215
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
        // line 217
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

    // line 238
    public function block_javascripts($context, array $blocks = array())
    {
        // line 239
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 240
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "971d665_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/971d665_owl.carousel.min_1.js");
            // line 241
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "971d665"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/971d665.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 243
        echo "

    <script>
        \$(document).ready(function() {

            \$('#owl_carousel').owlCarousel({
                loop: true,
                items: 4,
                margin: 10,
                navigation: true,
                pagination: false,
                navigationText: [\"<div class='navicon'></div>\", \"<div class='navicon'></div>\"],
                beforeUpdate: function() {
                    resetEqualHeight();
                },
                afterInit: function() {
                    makeEqualHeight();
                },
                afterUpdate: function() {
                    makeEqualHeight();
                },
            });
            function resetEqualHeight() {
                \$('#owl_carousel .actu_item').css('height', '');
            }
            function makeEqualHeight() {
                var tallest = 0;
                resetEqualHeight();
                \$('#owl_carousel .actu_item').each(function(i, el) {
                    el = \$(el);
                    if (el.height() > tallest)
                    {
                        tallest = el.height();
                    }
                });
                \$('#owl_carousel .actu_item').css(\"height\", tallest + \"px\");
            }
        });
    </script>
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
        return array (  437 => 243,  423 => 241,  419 => 240,  414 => 239,  411 => 238,  388 => 217,  374 => 215,  370 => 214,  283 => 129,  270 => 122,  266 => 121,  260 => 118,  254 => 115,  249 => 112,  245 => 111,  241 => 109,  231 => 102,  227 => 101,  220 => 97,  215 => 95,  209 => 91,  207 => 90,  201 => 87,  193 => 82,  179 => 70,  168 => 65,  161 => 63,  155 => 60,  150 => 58,  145 => 55,  141 => 54,  135 => 51,  116 => 35,  104 => 25,  90 => 23,  86 => 22,  79 => 17,  76 => 16,  42 => 12,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_public.html.twig' %} */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.carousel.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.transitions.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.theme.css'*/
/*     %}*/
/*     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <header>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 logo-slogan">*/
/*                     <div class="defit">Rélevons le défit</div>*/
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
/*                     <span class="fa fa-2x fa-bars option_bars"></span>*/
/*                     <span class="fa fa-2x fa-search "></span>*/
/*                     <a style="color:white" data-toggle="dropdown" href="{{ path('fos_user_security_login') }}" class="dropdown-toggle">*/
/*                         <span class="fa fa-2x fa-user "></span>*/
/* */
/*                     </a>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <!--ACTUALITES AU TOGO ET AU MAROC-->*/
/* */
/*     <!-- Bloc Actualités du TOGO-->*/
/*     <div class="actu_togo">*/
/*         <div class="container">*/
/*             <h1>{{block1.pays.pays}}</h1>*/
/*             <div class="row">*/
/*                 <div class="owl-carousel" id="owl_carousel">*/
/*                     {% for entity in block1.articles %}*/
/*                         <div class="actu_item">*/
/*                             <div class="banieres">*/
/*                                 <div class ="banieresTogo">*/
/*                                     {{ entity.categorie.categorie }}*/
/*                                 </div>*/
/*                                 <img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="Image article" class="image_actualites"/>*/
/*                             </div>*/
/*                             <div class="articles_appercu">*/
/*                                 <h3 class="titre-actualite"><a href="{{ path(mesRoutes.showArticle, { 'id': entity.id }) }} class="titre-actualite">{{ entity.titre }}</a></h3>*/
/*                                 <span class="intro">*/
/*                                     {{ entity.introduction }}*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Bloc Actualités du Maroc-->*/
/* */
/*     <div class="bloc-maroc">	*/
/* */
/*         <section class="container">*/
/*             <div class="titre_le_maroc clearfix">*/
/*                 <h1 class="titre_maroc_droite">*/
/*                     {{block2.pays.pays}}*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="container-fluid">*/
/*                 <h3 class="titre-actualite">*/
/*                     {{block2.topArticle.titre}}*/
/*                 </h3>	*/
/*                 <div class="row">*/
/*                     {% if block2.topArticle %}*/
/*                         <article class="col-sm-7">*/
/*                             <div>*/
/*                                 <div class='actu_avance' >*/
/*                                     <div class ="banieresMaroc">*/
/*                                         {{block2.topArticle.categorie.categorie}}*/
/*                                     </div>*/
/*                                     <img src="{{ vich_uploader_asset(block2.topArticle, 'introImgFile') }}" alt="Image article" class="image_actualites"/>					*/
/*                                 </div>*/
/*                                 <div class="into-top-actualite">*/
/*                                     <span>	*/
/*                                         <a  class="intro" href="{{ path(mesRoutes.showArticle, { 'id': block2.topArticle.id }) }}">*/
/*                                             {{block2.topArticle.introduction}}*/
/*                                         </a>*/
/*                                     </span>							*/
/*                                 </div>					*/
/*                             </div>					*/
/*                         </article >*/
/*                     {% endif %}*/
/* */
/*                     <aside class="col-sm-5 aside-article-show">*/
/*                         {% for entity in block2.articles %}*/
/* */
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="Image de l'article" class="image_actualites"/>*/
/*                                 </div>*/
/*                                 <div class="col-sm-8 ">*/
/*                                     <div class="titre_actu_maroc">{{entity.categorie.categorie}}</div>*/
/*                                     <div>*/
/*                                         <span class="intro intro-annexe">	*/
/*                                             <a href="{{ path(mesRoutes.showArticle, { 'id': entity.id }) }}">*/
/*                                                 {{entity.introduction}}*/
/*                                             </a>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </aside>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     </div>*/
/* */
/*     <!--Pied de page -->*/
/* */
/*     <footer>*/
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
/*                             email: <a href="https:mail.yahoo.com">cestom_be@yahoo.fr</a>/<a href="https://mail.google.com">cestom.be@gmail.com</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <label class="copiright">© 2009-2015, CESTOM. Certains droits réservés.</label>*/
/*     </footer>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts  '@CestomArticleBundle/Resources/public/js/owl.carousel.min.js' %}*/
/*     <script src="{{ asset_url }}" type="text/javascript"></script>*/
/*     {% endjavascripts %}*/
/* */
/* */
/*     <script>*/
/*         $(document).ready(function() {*/
/* */
/*             $('#owl_carousel').owlCarousel({*/
/*                 loop: true,*/
/*                 items: 4,*/
/*                 margin: 10,*/
/*                 navigation: true,*/
/*                 pagination: false,*/
/*                 navigationText: ["<div class='navicon'></div>", "<div class='navicon'></div>"],*/
/*                 beforeUpdate: function() {*/
/*                     resetEqualHeight();*/
/*                 },*/
/*                 afterInit: function() {*/
/*                     makeEqualHeight();*/
/*                 },*/
/*                 afterUpdate: function() {*/
/*                     makeEqualHeight();*/
/*                 },*/
/*             });*/
/*             function resetEqualHeight() {*/
/*                 $('#owl_carousel .actu_item').css('height', '');*/
/*             }*/
/*             function makeEqualHeight() {*/
/*                 var tallest = 0;*/
/*                 resetEqualHeight();*/
/*                 $('#owl_carousel .actu_item').each(function(i, el) {*/
/*                     el = $(el);*/
/*                     if (el.height() > tallest)*/
/*                     {*/
/*                         tallest = el.height();*/
/*                     }*/
/*                 });*/
/*                 $('#owl_carousel .actu_item').css("height", tallest + "px");*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

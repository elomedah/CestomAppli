<?php

/* CestomArticleBundle:Cms:index.html.twig */
class __TwigTemplate_98d9717950a7d9b808ac78bf750e1413ed7c943c39c7637230f28bed88904fc4 extends Twig_Template
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
        echo "\t\t\t\t
\t<!--ACTUALITES AU TOGO ET AU MAROC-->
\t<!-- Bloc Actualités du TOGO-->
\t<div id=\"main-block\">
    <div class=\"actu_togo\">
        <div class=\"container\" id=\"block-togo\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block1"]) ? $context["block1"] : $this->getContext($context, "block1")), "pays", array()), "pays", array()), "html", null, true);
        echo "</h1>
            <div class=\"row\">
                <div class=\"owl-carousel\" id=\"owl_carousel\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block1"]) ? $context["block1"] : $this->getContext($context, "block1")), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                        <div class=\"actu_item\">
                            <div class=\"banieres\">
                                <div class =\"banieresTogo\">
                                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "
                                </div>
                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>
                            </div>
                            <div class=\"articles_appercu\">
                                <h3 class=\"titre-actualite\">
\t\t\t\t\t\t\t\t\t<!--<a  href=\"#\" class=\"titre-actualite\" onclick=\"javascript:getPage('";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "','main-block');\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a>--><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"titre-actualite\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h3>
                                <span class=\"intro\">
                                    ";
            // line 39
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
        // line 44
        echo "                </div>
            </div>
        </div>
    </div>
\t<!-- Bloc Actualités du Maroc-->
    <div class=\"bloc-maroc\">\t

        <section class=\"container\">
            <div class=\"titre_le_maroc clearfix\">
                <h1 class=\"titre_maroc_droite\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "pays", array()), "pays", array()), "html", null, true);
        echo "
                </h1>
            </div>
            <div class=\"container-fluid\">
                <h3 class=\"titre-actualite\">
                    <!--<a href=\"#\"
\t\t\t\t\t\tonclick=\"javascript:getPage('";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "id", array()))), "html", null, true);
        echo "','main-block');\">
\t\t\t\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "titre", array()), "html", null, true);
        echo "
\t\t\t\t\t</a>-->
\t\t\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "id", array()))), "html", null, true);
        echo "\"
\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "titre", array()), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t
                </h3>\t
                <div class=\"row\">
                    ";
        // line 69
        if ($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array())) {
            // line 70
            echo "                        <article class=\"col-sm-7\">
                            <div>
                                <div class='actu_avance' >
                                    <div class =\"banieresMaroc\">
                                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "categorie", array()), "categorie", array()), "html", null, true);
            echo "
                                    </div>
                                    <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "introImgFile"), "html", null, true);
            echo "\" alt=\"Image article\" class=\"image_actualites\"/>\t\t\t\t\t
                                </div>
                                <div class=\"into-top-actualite\">
                                    <span>\t
                                       <!-- <a  class=\"intro\" href=\"#\"
\t\t\t\t\t\t\t\t\t\tonclick=\"javascript:getPage('";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "id", array()))), "html", null, true);
            echo "','main-block');\"> 
                                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "introduction", array()), "html", null, true);
            echo "
                                        </a>-->
                                        <a  class=\"intro\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "topArticle", array()), "introduction", array()), "html", null, true);
            echo "
                                        </a>
                                    </span>\t\t\t\t\t\t\t
                                </div>\t\t\t\t\t
                            </div>\t\t\t\t\t
                        </article >
                    ";
        }
        // line 92
        echo "
                    <aside class=\"col-sm-5 aside-article-show\">
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block2"]) ? $context["block2"] : $this->getContext($context, "block2")), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 95
            echo "
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"Image de l'article\" class=\"image_actualites\"/>
                                </div>
                                <div class=\"col-sm-8 \">
                                    <div class=\"titre_actu_maroc\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "</div>
                                    <div>
                                        <span class=\"intro intro-annexe\">\t
                                            <a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"javascript:getPage('";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "','main-block');\">
                                                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t
                                        </span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </aside>
                </div>
            </div>
        </section>
    </div>
\t</div>
    ";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 127
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "971d665_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/971d665_owl.carousel.min_1.js");
            // line 130
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ajax-html.js"), "html", null, true);
            echo "\"></script>
       
    ";
        } else {
            // asset "971d665"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_971d665") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/971d665.js");
            // line 130
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ajax-html.js"), "html", null, true);
            echo "\"></script>
       
    ";
        }
        unset($context["asset_url"]);
        // line 134
        echo "

    <script>
        \$(document).ready(function(){

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
\t\t\t</script>
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
        return array (  323 => 134,  316 => 131,  311 => 130,  303 => 131,  298 => 130,  294 => 127,  289 => 126,  286 => 125,  276 => 117,  262 => 109,  258 => 108,  253 => 106,  249 => 105,  242 => 101,  236 => 98,  231 => 95,  227 => 94,  223 => 92,  213 => 85,  209 => 84,  204 => 82,  200 => 81,  192 => 76,  187 => 74,  181 => 70,  179 => 69,  171 => 64,  167 => 63,  162 => 61,  158 => 60,  149 => 54,  137 => 44,  126 => 39,  114 => 36,  107 => 32,  102 => 30,  97 => 27,  93 => 26,  87 => 23,  79 => 17,  76 => 16,  42 => 12,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
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
/* {% block body %}*/
/* 				*/
/* 	<!--ACTUALITES AU TOGO ET AU MAROC-->*/
/* 	<!-- Bloc Actualités du TOGO-->*/
/* 	<div id="main-block">*/
/*     <div class="actu_togo">*/
/*         <div class="container" id="block-togo">*/
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
/*                                 <h3 class="titre-actualite">*/
/* 									<!--<a  href="#" class="titre-actualite" onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id }) }}','main-block');">{{ entity.titre }}</a>--><a  href="{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id }) }}" class="titre-actualite" >{{ entity.titre }}</a>*/
/* 								</h3>*/
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
/* 	<!-- Bloc Actualités du Maroc-->*/
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
/*                     <!--<a href="#"*/
/* 						onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': block2.topArticle.id }) }}','main-block');">*/
/* 						{{block2.topArticle.titre}}*/
/* 					</a>-->*/
/* 					<a href="{{ path('cestomarticlebundle_article_showPublic', { 'id': block2.topArticle.id }) }}"*/
/* 						{{block2.topArticle.titre}}*/
/* 					</a>*/
/* 					*/
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
/*                                        <!-- <a  class="intro" href="#"*/
/* 										onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': block2.topArticle.id }) }}','main-block');"> */
/*                                             {{block2.topArticle.introduction}}*/
/*                                         </a>-->*/
/*                                         <a  class="intro" href="{{ path('cestomarticlebundle_article_showPublic', { 'id': block2.topArticle.id }) }}">*/
/* 											{{block2.topArticle.introduction}}*/
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
/*                                             <a href="#"*/
/* 												onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id }) }}','main-block');">*/
/*                                                 {{entity.introduction}}*/
/*                                             </a>*/
/* 											<a href="{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id }) }}">*/
/* 												{{entity.introduction}}*/
/*                                             </a>*/
/* 											*/
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
/* 	</div>*/
/*     {% endblock %}*/
/* */
/* 	{% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts  */
/* 		'@CestomArticleBundle/Resources/public/js/owl.carousel.min.js'*/
/* 		%}*/
/*     <script src="{{ asset_url }}" type="text/javascript"></script>*/
/* 	<script src="{{ asset('assets/js/ajax-html.js')}}"></script>*/
/*        */
/*     {% endjavascripts %}*/
/* */
/* */
/*     <script>*/
/*         $(document).ready(function(){*/
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
/* 			</script>*/
/* {% endblock %}*/
/* */

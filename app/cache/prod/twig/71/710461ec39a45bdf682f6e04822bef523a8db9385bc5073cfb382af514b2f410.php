<?php

/* ::base_articles.html.twig */
class __TwigTemplate_29d03734d5e5d5fc897bdd3ebb1209400ca744c8d848913de521998cd183516c extends Twig_Template
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "    </head>
    <body>
\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li ><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("cestom_home");
        echo "\" target=\"_blank\" >Espace public </a></li>
\t\t\t\t\t\t<li ><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\" >Articles </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\" >Catégories </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("pays");
        echo "\">Pays </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Espace utilisateurs </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Annonces </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
\t\t
\t\t";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "\t
\t\t";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "\t\t
\t\t
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CESTOM";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9e056b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_0") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_bootstrap.min_1.css");
            // line 14
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_1") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_bootstrap-theme.min_2.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_2") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_font-awesome.min_3.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_3") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_colorbox_4.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        } else {
            // asset "e9e056b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "\t\t\t<style>
\t\t\t\th1{
\t\t\t\t\ttext-align:center;
\t\t\t\t\tvertical-align:middle;
\t\t\t\t\twidth:100%;
\t\t\t\t\ttext-decoration:underline;
\t\t\t\t}
\t\t\t\tbody{
\t\t\t\t\t\tbackground-color:#E8E8E8;
\t\t\t\t\t\tmargin:15px;
\t\t\t\t\t}
\t\t\t\t.h1, h1 {
\t\t\t\t\tfont-size: 36px;
\t\t\t\t\tvertical-align: middle;
\t\t\t\t\twidth: 100%;
\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\tcolor: rebeccapurple;
\t\t\t\t\ttext-align: center;
\t\t\t\t}
\t\t\t\t.form-horizontal .control-label {
\t\t\t\t\tpadding-top: 7px;
\t\t\t\t\tmargin-bottom: 0;
\t\t\t\t\ttext-align: left;
\t\t\t\t\tfont-size: 16px;
\t\t\t\t}
\t\t\t\tinput[type=file] {
\t\t\t\t\tdisplay: block;
\t\t\t\t\tfont-family: \"roboto condensed\";
\t\t\t\t}
\t\t\t\t#cestom_articlebundle_article_submit{
\t\t\t\tmargin-left:20px;
\t\t\t\tposition:relative;
\t\t\t\ttop:10px;
\t\t\t\t}
\t\t\t\t.retour{
\t\t\t\t\tmargin-top:15px;
\t\t\t\t\tmargin-bottom:5px;
\t\t\t\t\tvertical-align:middle;
\t\t\t\t\ttext-align:center;
\t\t\t\t}
\t\t\t\tbody{
\t\t\t\t\tmargin:15px;
\t\t\t\t\tbackground-color:#E8E8E8;
\t\t\t\t}
\t\t\t</style>
\t\t";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        // line 91
        echo "\t\t
\t\t";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "\t\t\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"/>
\t\t\t";
        // line 96
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "afbcea7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_0") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_bootstrap.min_1.js");
            // line 101
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_1") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_script_2.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_2") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_jquery.colorbox-min_3.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "afbcea7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 103
        echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(\"a.zoom\").colorbox();
\t\t\t</script>

\t\t";
    }

    public function getTemplateName()
    {
        return "::base_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 103,  209 => 101,  205 => 96,  202 => 95,  199 => 94,  194 => 91,  191 => 90,  142 => 16,  110 => 14,  105 => 8,  102 => 7,  96 => 5,  88 => 109,  86 => 94,  83 => 93,  81 => 90,  70 => 82,  66 => 81,  62 => 80,  58 => 79,  39 => 62,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}CESTOM{% endblock %}</title>*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         {% block stylesheets %}*/
/* 			{% stylesheets filter='cssrewrite'*/
/* 				'bundles/cestomarticle/css/bootstrap.min.css'*/
/* 				'bundles/cestomarticle/css/bootstrap-theme.min.css'*/
/* 				'bundles/cestomarticle/css/font-awesome.min.css'*/
/* 				'bundles/cestomarticle/css/colorbox.css'*/
/* 			%}*/
/* 				<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 			{% endstylesheets %}*/
/* 			<style>*/
/* 				h1{*/
/* 					text-align:center;*/
/* 					vertical-align:middle;*/
/* 					width:100%;*/
/* 					text-decoration:underline;*/
/* 				}*/
/* 				body{*/
/* 						background-color:#E8E8E8;*/
/* 						margin:15px;*/
/* 					}*/
/* 				.h1, h1 {*/
/* 					font-size: 36px;*/
/* 					vertical-align: middle;*/
/* 					width: 100%;*/
/* 					text-decoration: underline;*/
/* 					color: rebeccapurple;*/
/* 					text-align: center;*/
/* 				}*/
/* 				.form-horizontal .control-label {*/
/* 					padding-top: 7px;*/
/* 					margin-bottom: 0;*/
/* 					text-align: left;*/
/* 					font-size: 16px;*/
/* 				}*/
/* 				input[type=file] {*/
/* 					display: block;*/
/* 					font-family: "roboto condensed";*/
/* 				}*/
/* 				#cestom_articlebundle_article_submit{*/
/* 				margin-left:20px;*/
/* 				position:relative;*/
/* 				top:10px;*/
/* 				}*/
/* 				.retour{*/
/* 					margin-top:15px;*/
/* 					margin-bottom:5px;*/
/* 					vertical-align:middle;*/
/* 					text-align:center;*/
/* 				}*/
/* 				body{*/
/* 					margin:15px;*/
/* 					background-color:#E8E8E8;*/
/* 				}*/
/* 			</style>*/
/* 		{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* 		<nav class="navbar navbar-default">*/
/* 			<div class="container-fluid">*/
/* 			<!-- Brand and toggle get grouped for better mobile display -->*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 						<span class="sr-only">Navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>					*/
/* 				</div>*/
/* */
/* 			<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li ><a href="{{ path('cestom_home') }}" target="_blank" >Espace public </a></li>*/
/* 						<li ><a href="{{ path('article') }}" >Articles </a></li>*/
/* 						<li><a href="{{ path('categorie') }}" >Catégories </a></li>*/
/* 						<li><a href="{{ path('pays') }}">Pays </a></li>*/
/* 						<li><a href="#">Espace utilisateurs </a></li>*/
/* 						<li><a href="#">Annonces </a></li>*/
/* 					</ul>*/
/* 				</div><!-- /.navbar-collapse -->*/
/* 			</div><!-- /.container-fluid -->*/
/* 		</nav>*/
/* 		*/
/* 		{% block body %}*/
/* 		*/
/* 		{% endblock %}*/
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
/* 			</script>*/
/* */
/* 		{% endblock %}*/
/* 		*/
/* 		*/
/*     </body>*/
/* </html>*/
/* */

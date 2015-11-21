<?php

/* CestomArticleBundle:Article:showPublic.html.twig */
class __TwigTemplate_3ec98ce06eb4234324de7a81754b5678602486ea4f5ceccf483b6b52c2c63ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t<!--Affichage de l'article-->
\t
\t<div clas=\"container\">
\t<div class=\"panel panel-primary\">
\t\t<div class=\"categorie-label\">
\t\t\t<h3>
\t\t\t\t<span>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pays", array()), "pays", array()), "html", null, true);
        echo "</span>
\t\t\t\t<i class=\"fa fa-caret-right\"></i>
\t\t\t\t<span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categorie", array()), "categorie", array()), "html", null, true);
        echo "</span>
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel panel-titre\"><h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titre", array()), "html", null, true);
        echo "</h1></div>
\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["entity"]) ? $context["entity"] : null), "introImgFile"), "html", null, true);
        echo "\" alt=\"image article\" class=\"img-responsive images_articles img-rounded \"/>
\t\t<p class=\"contenu-article\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contenu", array()), "html", null, true);
        echo "</p>

\t\t<span class=\"date-article\">
\t\t\tPublié le ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
\t\t</span>
\t\t<div>
\t\t\t<span>Lire d'autres articles ou <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cestom_home");
        echo "\"> retourner à l'accueil</a> </span>
\t\t\t
\t\t\t<nav>
\t\t\t  <ul class=\"pager\">
\t\t\t\t<li><a href=\"#\" title=\"Aller à l'article précédent\" onclick=\"javascript:getPage('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()) - 1))), "html", null, true);
        echo "','main-block');\">Précédent</a></li>
\t\t\t\t<li><a href=\"#\" title=\"Aller à l'article suivant\" onclick=\"javascript:getPage('";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestomarticlebundle_article_showPublic", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()) + 1))), "html", null, true);
        echo "','main-block');\" >Suivant</a></li>
\t\t\t  </ul>
\t\t\t</nav>
\t\t</div>
\t\t
\t</div>
\t
\t<style>
\t\tp {
\t\t\tmargin: 0 0 10px;
\t\t\ttext-indent: 50px;
\t\t\tfont-family: \"palatino linotype\", palatino, georgia, serif;
\t\t\ttext-align: justify;
\t\t\tfont-size: 1em;
\t\t\tline-height: 1.4em;
\t\t\tcolor: #333;
\t\t\ttext-shadow: white 1px 1px 0px;
\t\t\tpadding: 20px;
\t\t}
\t\t
\t\t.date-article{
\t\t\tvertical-align:center;
\t\t\tmargin-top:30px;
\t\t\tfont-size:12px;
\t\t\tcolor: #ECBE0E;
\t\t}
\t\timg.images_articles{
\t\t\tfloat: left;
\t\t\tposition: relative;
\t\t\t/* left: 10px; */
\t\t\t/* margin: 15px; */
\t\t\tmargin-right: 30px;
\t\t\twidth: 100%;
\t\t\tmax-height: 600px;
\t\t\tmax-width: 600px;
\t\t\tvertical-align: text-top;
\t\t}
\t\t.categorie-label{
\t\t\tbackground-color:#838383;
\t\t\tborder-color:#838383;
\t\t\tcolor: #fff;
\t\t\tborder-radius: 15px;
\t\t\ttext-decoration:uppercase;
\t\t}
\t\t.panel-primary {
\t\t\tpadding: 10px;
\t\t\tmargin: 10px;
\t\t\tmax-width: 70%;
\t\t\tposition: relative;
\t\t\tleft: 15%;
\t\t\tvertical-align: middle;
\t\t\tborder-color: #838383;
\t\t\tfont-size: 16px;
\t\t\t-webkit-box-shadow: 3px 3px 6px #A9A9A9;
\t\t\tbox-shadow: 3px 3px 6px 0 #A9A9A9;
\t\t\tbackground-color: #F3F3F3;
\t\t}\t
\t\t.panel-primary>.panel-heading-article {
\t\t\tcolor: #fff;
\t\t\tbackground-color: #838383;
\t\t\tborder-color: #838383;
\t\t\ttext-decoration: uppercase;\t\t
\t\t}
\t\t.panel-titre {
\t\t\tmargin: 10px;
\t\t\tbackground-color: #E9EEF3;
\t\t\ttext-align: center;
\t\t}
\t\t.panel-titre,.panel-primary>.panel-heading,.panel-primary{
\t\t\tborder-radius:10px;
\t\t}
\t\t.rigth {
\t\t\ttext-align: right;
\t\t}
\t\t.left {
\t\t\ttext-align: left;
\t\t}
\t\t.pager li>a, .pager li>span {
\t\t\tborder: 1px solid #838383;
\t\t}
\t\tspan a {
\t\t\tcolor: blue;
\t\t}
\t\t.pager li>span: hover, .pager li>a:hover{
\t\t\tbackground-color: #ECBE0E;
\t\t}
\t\t.categorie-label h3>span,.categorie-label h3>i{
\t\t\tpadding: 10px;
\t\t\tcolor: #fff;
\t\t\t
\t\t}
\t\t.categorie-label h3>span{
\t\t\ttext-decoration:underline;
\t\t}
\t</style>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Article:showPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  66 => 25,  59 => 21,  53 => 18,  47 => 15,  43 => 14,  39 => 13,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* */
/* 	<!--Affichage de l'article-->*/
/* 	*/
/* 	<div clas="container">*/
/* 	<div class="panel panel-primary">*/
/* 		<div class="categorie-label">*/
/* 			<h3>*/
/* 				<span>{{ entity.pays.pays }}</span>*/
/* 				<i class="fa fa-caret-right"></i>*/
/* 				<span>{{ entity.categorie.categorie }}</span>*/
/* 			</h3>*/
/* 		</div>*/
/* 		<div class="panel panel-titre"><h1>{{ entity.titre }}</h1></div>*/
/* 		<img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="image article" class="img-responsive images_articles img-rounded "/>*/
/* 		<p class="contenu-article">{{ entity.contenu }}</p>*/
/* */
/* 		<span class="date-article">*/
/* 			Publié le {{ entity.creation|date('Y-m-d H:i:s') }}*/
/* 		</span>*/
/* 		<div>*/
/* 			<span>Lire d'autres articles ou <a href="{{path('cestom_home')}}"> retourner à l'accueil</a> </span>*/
/* 			*/
/* 			<nav>*/
/* 			  <ul class="pager">*/
/* 				<li><a href="#" title="Aller à l'article précédent" onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id - 1 }) }}','main-block');">Précédent</a></li>*/
/* 				<li><a href="#" title="Aller à l'article suivant" onclick="javascript:getPage('{{ path('cestomarticlebundle_article_showPublic', { 'id': entity.id + 1 }) }}','main-block');" >Suivant</a></li>*/
/* 			  </ul>*/
/* 			</nav>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 	<style>*/
/* 		p {*/
/* 			margin: 0 0 10px;*/
/* 			text-indent: 50px;*/
/* 			font-family: "palatino linotype", palatino, georgia, serif;*/
/* 			text-align: justify;*/
/* 			font-size: 1em;*/
/* 			line-height: 1.4em;*/
/* 			color: #333;*/
/* 			text-shadow: white 1px 1px 0px;*/
/* 			padding: 20px;*/
/* 		}*/
/* 		*/
/* 		.date-article{*/
/* 			vertical-align:center;*/
/* 			margin-top:30px;*/
/* 			font-size:12px;*/
/* 			color: #ECBE0E;*/
/* 		}*/
/* 		img.images_articles{*/
/* 			float: left;*/
/* 			position: relative;*/
/* 			/* left: 10px; *//* */
/* 			/* margin: 15px; *//* */
/* 			margin-right: 30px;*/
/* 			width: 100%;*/
/* 			max-height: 600px;*/
/* 			max-width: 600px;*/
/* 			vertical-align: text-top;*/
/* 		}*/
/* 		.categorie-label{*/
/* 			background-color:#838383;*/
/* 			border-color:#838383;*/
/* 			color: #fff;*/
/* 			border-radius: 15px;*/
/* 			text-decoration:uppercase;*/
/* 		}*/
/* 		.panel-primary {*/
/* 			padding: 10px;*/
/* 			margin: 10px;*/
/* 			max-width: 70%;*/
/* 			position: relative;*/
/* 			left: 15%;*/
/* 			vertical-align: middle;*/
/* 			border-color: #838383;*/
/* 			font-size: 16px;*/
/* 			-webkit-box-shadow: 3px 3px 6px #A9A9A9;*/
/* 			box-shadow: 3px 3px 6px 0 #A9A9A9;*/
/* 			background-color: #F3F3F3;*/
/* 		}	*/
/* 		.panel-primary>.panel-heading-article {*/
/* 			color: #fff;*/
/* 			background-color: #838383;*/
/* 			border-color: #838383;*/
/* 			text-decoration: uppercase;		*/
/* 		}*/
/* 		.panel-titre {*/
/* 			margin: 10px;*/
/* 			background-color: #E9EEF3;*/
/* 			text-align: center;*/
/* 		}*/
/* 		.panel-titre,.panel-primary>.panel-heading,.panel-primary{*/
/* 			border-radius:10px;*/
/* 		}*/
/* 		.rigth {*/
/* 			text-align: right;*/
/* 		}*/
/* 		.left {*/
/* 			text-align: left;*/
/* 		}*/
/* 		.pager li>a, .pager li>span {*/
/* 			border: 1px solid #838383;*/
/* 		}*/
/* 		span a {*/
/* 			color: blue;*/
/* 		}*/
/* 		.pager li>span: hover, .pager li>a:hover{*/
/* 			background-color: #ECBE0E;*/
/* 		}*/
/* 		.categorie-label h3>span,.categorie-label h3>i{*/
/* 			padding: 10px;*/
/* 			color: #fff;*/
/* 			*/
/* 		}*/
/* 		.categorie-label h3>span{*/
/* 			text-decoration:underline;*/
/* 		}*/
/* 	</style>*/
/* 	</div>*/
/* */

<?php

/* CestomArticleBundle:Article:show.html.twig */
class __TwigTemplate_b6c40c70f842a1383a220d4384f576ead9d7ba447b092824872d2462060c155d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Article:show.html.twig", 1);
        $this->blocks = array(
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titre", array()), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"article-show\">

\t\t<table class=\"table table-hover table-striped table-bordered table-responsive\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<td >";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<!--<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "introImg", array()), "html", null, true);
        echo "</td>-->
\t\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["entity"]) ? $context["entity"] : null), "introImgFile"), "html", null, true);
        echo "\" title=\"Cliquez pour agrandir\" class=\"zoom\">
\t\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["entity"]) ? $context["entity"] : null), "introImgFile"), "html", null, true);
        echo "\" alt=\"image article\" class=\"img-responsive img-thumbnail image-articles zoom \"/>
\t\t\t\t\t</a>
\t\t\t\t</td> 
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Introduction</th>
\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "introduction", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Contenu</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"contenu\">
\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contenu", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Création</th>
\t\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "creation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Début de publication</th>
\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "debutDePublication", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Fin de publication</th>
\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "finDePublication", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"container panel panel-default mypanel\">
\t\t\t<div class=\"row panel-body\">
\t\t\t\t\t<span class=\" record_actions btn btn-default\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "index", array()));
        echo "\">
\t\t\t\t\t\t\t\t\tRetour
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t\t<span>
\t\t\t\t<a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "new", array()));
        echo "\"  class=\"btn btn-default \">
\t\t\t\t\tAjouter un nouveau <strong>article</strong>
\t\t\t\t</a>
\t\t\t</span>
\t\t\t<span class=\"btn-edit\">
\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "edit", array()), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-edit \">
\t\t\t\t\t\tEditer
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t\t\t\t";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<style>
\t\t\t.image-articles{
\t\t\t\twidth:150px;
\t\t\t\theight:150px;
\t\t\t}
\t\t\t.contenu{
\t\t\t\tfont-family:\"roboto condensed\";
\t\t\t\ttext-decoration:none;
\t\t\t\t
\t\t\t}
\t\t\t.btn-edit{
\t\t\t\tbackground-color: #D0881D
\t\t\t\tborder-bottom-color:#D0881D;
\t\t\t}
\t\t</style>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 78,  153 => 77,  149 => 76,  141 => 71,  133 => 66,  125 => 61,  115 => 54,  108 => 50,  101 => 46,  92 => 40,  83 => 34,  74 => 28,  70 => 27,  65 => 25,  58 => 21,  51 => 17,  43 => 11,  40 => 10,  34 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*  */
/*  */
/* */
/* {% block soustitre %} */
/*     {{ entity.titre }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content -%}*/
/*     <div class="article-show">*/
/* */
/* 		<table class="table table-hover table-striped table-bordered table-responsive">*/
/* 			<tbody>*/
/* 				<tr>*/
/* 					<th>Id</th>*/
/* 					<td>{{ entity.id }}</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Titre</th>*/
/* 					<td >{{ entity.titre }}</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Image</th>*/
/* 					<!--<td>{{ entity.introImg }}</td>-->*/
/* 					<td>*/
/* 					<a href="{{ vich_uploader_asset(entity, 'introImgFile') }}" title="Cliquez pour agrandir" class="zoom">*/
/* 						<img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="image article" class="img-responsive img-thumbnail image-articles zoom "/>*/
/* 					</a>*/
/* 				</td> */
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Introduction</th>*/
/* 					<td>{{ entity.introduction }}</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Contenu</th>*/
/* 					<td>*/
/* 						<div class="contenu">*/
/* 							{{ entity.contenu }}*/
/* 						</div>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Création</th>*/
/* 					<td>{{ entity.creation|date('Y-m-d H:i:s') }}</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Début de publication</th>*/
/* 					<td>{{ entity.debutDePublication|date('Y-m-d H:i:s') }}</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Fin de publication</th>*/
/* 					<td>{{ entity.finDePublication|date('Y-m-d H:i:s') }}</td>*/
/* 				</tr>*/
/* 			</tbody>*/
/* 		</table>*/
/* 		<div class="container panel panel-default mypanel">*/
/* 			<div class="row panel-body">*/
/* 					<span class=" record_actions btn btn-default">*/
/* 								<a href="{{ path(mesRoutes.index) }}">*/
/* 									Retour*/
/* 								</a>*/
/* 					</span>*/
/* 					<span>*/
/* 				<a href="{{ path(mesRoutes.new) }}"  class="btn btn-default ">*/
/* 					Ajouter un nouveau <strong>article</strong>*/
/* 				</a>*/
/* 			</span>*/
/* 			<span class="btn-edit">*/
/* 					<a href="{{ path(mesRoutes.edit, { 'id': entity.id }) }}" class="btn btn-edit ">*/
/* 						Editer*/
/* 					</a>*/
/* 				</span>*/
/* 					<span class="pull-right">*/
/* 						{{ form_start(delete_form) }}*/
/* 						{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 						{{ form_end(delete_form) }}*/
/* 					</span>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		<style>*/
/* 			.image-articles{*/
/* 				width:150px;*/
/* 				height:150px;*/
/* 			}*/
/* 			.contenu{*/
/* 				font-family:"roboto condensed";*/
/* 				text-decoration:none;*/
/* 				*/
/* 			}*/
/* 			.btn-edit{*/
/* 				background-color: #D0881D*/
/* 				border-bottom-color:#D0881D;*/
/* 			}*/
/* 		</style>*/
/* {% endblock %}*/

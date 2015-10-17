<?php

/* CestomArticleBundle:Article:index.html.twig */
class __TwigTemplate_21746bf66f47ab4e0be21b5c662c0a5cc4b50a1f8bf5fe54e6357f71da698dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Article:index.html.twig", 1);
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

    // line 4
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 
    Liste des articles
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<table class=\"table table-hover table-striped table-bordered .table-responsive\">
        <thead>
            <tr>
                <th>Images</th> 
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Catégorie</th>
                <th>Introduction</th>
                <th>Crée le</th>
                <th>Actions</th>
             </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "  
            <tr>
                <td>
\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" title=\"Cliquez pour agrandir\" class=\"zoom\">
\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["entity"], "introImgFile"), "html", null, true);
            echo "\" alt=\"image article\" class=\"img-responsive img-thumbnail image-liste-articles zoom \"/>
\t\t\t\t\t</a>
\t\t\t\t</td> 
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "show", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "categorie", array()), "html", null, true);
            echo "</td>
\t\t\t\t <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "introduction", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "creation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "creation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t<div style=\"white-space:nowrap\">
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "show", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info \"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "edit", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-warning \"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <div class=\"container panel panel-default mypanel\">
\t\t<div class=\"row panel-body\">
\t\t\t<div class=\"ajouter-nouvelle-article\">
\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "new", array()));
        echo "\" class=\"btn btn-default \">
                Ajouter un nouveau article
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
    </div>
\t<a href=\"#\" title=\"Haut de page\"><i class=\"fa fa-caret-square-o-up haut-page\" ></i></a>
\t<style>
\t.image-liste-articles{
\t\t\twidth:50px;
\t\t\theight:50px;
\t\t}
\t\t.haut-page{
\t\t\tposition:fixed;
\t\t\tbottom:0px;
\t\t\tleft:0px;
\t\t\tbackground-color:black;
\t\t\tcolor:white;
\t\t\twidth:40px;
\t\t\theight:40px;
\t\t\t-moz-border-radius:\t0px 10px 0px 0px; 
\t\t\tborder-radius:\t\t0px 10px 0px 0px;
\t\t\tfont-size:30px;
\t\t\tvertical-align:middle;
\t\t\ttext-align:center;
\t\t\tpadding-top:5px;
\t\t\tpadding-right:5px;\t\t\t
\t\t}
\t</style>
\t
    ";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  110 => 44,  99 => 39,  95 => 38,  86 => 34,  82 => 33,  78 => 32,  72 => 31,  66 => 28,  62 => 27,  54 => 24,  40 => 12,  37 => 9,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*  */
/*  */
/* {% block soustitre %} */
/*     Liste des articles*/
/* {% endblock %}*/
/* */
/* */
/* {% block content -%}*/
/* 	*/
/* */
/*     <table class="table table-hover table-striped table-bordered .table-responsive">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Images</th> */
/* 				<th>Titre</th>*/
/* 				<th>Catégorie</th>*/
/*                 <th>Introduction</th>*/
/*                 <th>Crée le</th>*/
/*                 <th>Actions</th>*/
/*              </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}  */
/*             <tr>*/
/*                 <td>*/
/* 					<a href="{{ vich_uploader_asset(entity, 'introImgFile') }}" title="Cliquez pour agrandir" class="zoom">*/
/* 						<img src="{{ vich_uploader_asset(entity, 'introImgFile') }}" alt="image article" class="img-responsive img-thumbnail image-liste-articles zoom "/>*/
/* 					</a>*/
/* 				</td> */
/*                 <td><a href="{{ path(mesRoutes.show, { 'id': entity.id }) }}">{{ entity.titre }}</a></td>*/
/* 				<td>{{ entity.categorie.categorie }}</td>*/
/* 				 <td>{{ entity.introduction }}</td>*/
/*                 <td>{% if entity.creation %}{{ entity.creation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 				*/
/* 				<td>*/
/* 					<div style="white-space:nowrap">*/
/* 							<a href="{{ path(mesRoutes.show, { 'id': entity.id }) }}" class="btn btn-info "><i class="fa fa-eye"></i></a>*/
/* 							<a href="{{ path(mesRoutes.edit, { 'id': entity.id }) }}"  class="btn btn-warning "><i class="fa fa-pencil"></i></a>*/
/* 					</div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="container panel panel-default mypanel">*/
/* 		<div class="row panel-body">*/
/* 			<div class="ajouter-nouvelle-article">*/
/* 				<a href="{{ path(mesRoutes.new) }}" class="btn btn-default ">*/
/*                 Ajouter un nouveau article*/
/* 				</a>*/
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* 	<a href="#" title="Haut de page"><i class="fa fa-caret-square-o-up haut-page" ></i></a>*/
/* 	<style>*/
/* 	.image-liste-articles{*/
/* 			width:50px;*/
/* 			height:50px;*/
/* 		}*/
/* 		.haut-page{*/
/* 			position:fixed;*/
/* 			bottom:0px;*/
/* 			left:0px;*/
/* 			background-color:black;*/
/* 			color:white;*/
/* 			width:40px;*/
/* 			height:40px;*/
/* 			-moz-border-radius:	0px 10px 0px 0px; */
/* 			border-radius:		0px 10px 0px 0px;*/
/* 			font-size:30px;*/
/* 			vertical-align:middle;*/
/* 			text-align:center;*/
/* 			padding-top:5px;*/
/* 			padding-right:5px;			*/
/* 		}*/
/* 	</style>*/
/* 	*/
/*     {% endblock %}*/
/* */

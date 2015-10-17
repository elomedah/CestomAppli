<?php

/* CestomArticleBundle:Categorie:index.html.twig */
class __TwigTemplate_49b69647cf77f32c15622b96260c802f2f9d8f8365d5b3652dc565d4950fde95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Categorie:index.html.twig", 1);
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
    Liste des catégories
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"tab\">
\t\t<table class=\"table table-hover table-striped table-bordered .table-responsive \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "show", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categorie", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<div style=\"white-space:nowrap\"> 
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "show", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-info \">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "edit", array()), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning \">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<div class=\"container panel panel-default mypanel pan\">
\t\t\t<div class=\"row panel-body\">
\t\t
\t\t\t<div>
\t\t\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "new", array()));
        echo "\"  class=\"btn btn-default \">
\t\t\t\t\tAjouter une nouvelle <strong>catégorie</strong>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div> 
\t\t</div>
\t</div>
\t<style>
\t
\tth {
\t\twidth:50%;
\t\tmax-height:150px;
\t}
\tbody{
\t\tmargin:15px;
\t\tfont-family:roboto;
\t\tcolor:black;
\t}
\t</style>
    ";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  89 => 38,  76 => 31,  70 => 28,  59 => 24,  55 => 22,  51 => 21,  40 => 12,  37 => 11,  29 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/*     Liste des catégories*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content -%}*/
/* 	<div class="tab">*/
/* 		<table class="table table-hover table-striped table-bordered .table-responsive ">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>Catégorie</th>*/
/* 					<th class="act">Actions</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% for entity in entities %}*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path(mesRoutes.show, { 'id': entity.id }) }}">[{{ entity.id }}] {{ entity.categorie }}</a>*/
/* 					</td>*/
/* 					<td >*/
/* 						<div style="white-space:nowrap"> */
/* 							<a href="{{ path(mesRoutes.show, { 'id': entity.id }) }}"class="btn btn-info ">*/
/* 								<i class="fa fa-eye"></i>*/
/* 							</a>*/
/* 							<a href="{{ path(mesRoutes.edit, { 'id': entity.id }) }}" class="btn btn-warning ">*/
/* 								<i class="fa fa-pencil"></i>*/
/* 							</a>						*/
/* 						</div>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		*/
/* 		<div class="container panel panel-default mypanel pan">*/
/* 			<div class="row panel-body">*/
/* 		*/
/* 			<div>*/
/* 				<a href="{{ path(mesRoutes.new) }}"  class="btn btn-default ">*/
/* 					Ajouter une nouvelle <strong>catégorie</strong>*/
/* 				</a>*/
/* 			</div>*/
/* 		</div> */
/* 		</div>*/
/* 	</div>*/
/* 	<style>*/
/* 	*/
/* 	th {*/
/* 		width:50%;*/
/* 		max-height:150px;*/
/* 	}*/
/* 	body{*/
/* 		margin:15px;*/
/* 		font-family:roboto;*/
/* 		color:black;*/
/* 	}*/
/* 	</style>*/
/*     {% endblock %}*/
/* */

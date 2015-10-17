<?php

/* CestomArticleBundle:Categorie:show.html.twig */
class __TwigTemplate_00ac77546d7b164ffa2629d3dd70acedc0aa9fcf7e119f96cd373897a2b78c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CestomArticleBundle:Categorie:show.html.twig", 1);
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
    Categorie
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<table class=\"table table-hover table-striped table-bordered .table-responsive \">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
\t<div class=\"container panel panel-default mypanel\">
\t\t<div class=\"row panel-body\">
\t\t\t<div class=\"record_actions\">
\t\t\t\t<span >
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "index", array()));
        echo "\"  class=\"btn btn-default \">
\t\t\t\t\t\tRetour
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "new", array()));
        echo "\"  class=\"btn btn-default \">
\t\t\t\t\tAjouter une nouvelle <strong>catégorie</strong>
\t\t\t\t</a>
\t\t\t  </span>
\t\t\t\t<span>
\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["mesRoutes"]) ? $context["mesRoutes"] : null), "edit", array()), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"  class=\"btn btn-default \">
\t\t\t\t\t\tModifier
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"pull-right\"> 
\t\t\t\t\t\t\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 46,  92 => 45,  88 => 44,  80 => 39,  72 => 34,  64 => 29,  53 => 21,  46 => 17,  40 => 13,  37 => 11,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block soustitre %} */
/*     Categorie*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block content -%}*/
/* */
/*     <table class="table table-hover table-striped table-bordered .table-responsive ">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categorie</th>*/
/*                 <td>{{ entity.categorie }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* 	<div class="container panel panel-default mypanel">*/
/* 		<div class="row panel-body">*/
/* 			<div class="record_actions">*/
/* 				<span >*/
/* 					<a href="{{ path(mesRoutes.index) }}"  class="btn btn-default ">*/
/* 						Retour*/
/* 					</a>*/
/* 				</span>*/
/* 				<span>*/
/* 				<a href="{{ path(mesRoutes.new) }}"  class="btn btn-default ">*/
/* 					Ajouter une nouvelle <strong>catégorie</strong>*/
/* 				</a>*/
/* 			  </span>*/
/* 				<span>*/
/* 					<a href="{{ path(mesRoutes.edit, { 'id': entity.id }) }}"  class="btn btn-default ">*/
/* 						Modifier*/
/* 					</a>*/
/* 				</span>*/
/* 				<span class="pull-right"> */
/* 								{{ form_start(delete_form) }}*/
/* 								{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 								{{ form_end(delete_form) }}*/
/* 				</span>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

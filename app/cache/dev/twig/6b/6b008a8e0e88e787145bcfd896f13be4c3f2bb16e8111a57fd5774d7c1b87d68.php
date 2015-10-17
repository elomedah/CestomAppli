<?php

/* CestomArticleBundle:Pays:show.html.twig */
class __TwigTemplate_f7f29edd2009248edf189d40ce96cbc1738cb8c07a0154ef276e458d4c4386a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_articles.html.twig", "CestomArticleBundle:Pays:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_articles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Pays</h1>

    <table class=\"table table-hover table-striped table-bordered .table-responsive\">
        <tbody>
            <tr> 
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"container panel panel-default mypanel\">
\t\t<div class=\"row panel-body\">
\t\t\t<span class=\"btn btn-default\">
\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pays");
        echo "\">
\t\t\t\t\tRetour
\t\t\t\t</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pays_new");
        echo "\"  class=\"btn btn-default \">
                Ajouter un nouveau <strong>Pays</strong>
\t\t\t\t</a>
\t\t\t</span>
\t\t\t<span class=\"btn btn-default\">
\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\tModifier
\t\t\t\t</a>
\t\t\t</span>
\t\t\t<span title=\"Supprimer\" class=\"pull-right\">
\t\t\t\t\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t\t\t\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t\t</span>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Pays:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  85 => 38,  81 => 37,  73 => 32,  65 => 27,  57 => 22,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base_articles.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Pays</h1>*/
/* */
/*     <table class="table table-hover table-striped table-bordered .table-responsive">*/
/*         <tbody>*/
/*             <tr> */
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pays</th>*/
/*                 <td>{{ entity.pays }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="container panel panel-default mypanel">*/
/* 		<div class="row panel-body">*/
/* 			<span class="btn btn-default">*/
/* 				<a href="{{ path('pays') }}">*/
/* 					Retour*/
/* 				</a>*/
/* 			</span>*/
/* 			<span>*/
/* 				<a href="{{ path('pays_new') }}"  class="btn btn-default ">*/
/*                 Ajouter un nouveau <strong>Pays</strong>*/
/* 				</a>*/
/* 			</span>*/
/* 			<span class="btn btn-default">*/
/* 				<a href="{{ path('pays_edit', { 'id': entity.id }) }}">*/
/* 					Modifier*/
/* 				</a>*/
/* 			</span>*/
/* 			<span title="Supprimer" class="pull-right">*/
/* 					{{ form_start(delete_form) }}*/
/* 					{{ form_widget(delete_form.submit, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 					{{ form_end(delete_form) }}*/
/* 				</span>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

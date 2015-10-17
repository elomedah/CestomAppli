<?php

/* CestomArticleBundle:Pays:index.html.twig */
class __TwigTemplate_9a30ff198a767b3a7c60823937eab96e7a3ece911dbf23ec6ef4b7a3996935e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_articles.html.twig", "CestomArticleBundle:Pays:index.html.twig", 1);
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
        echo "<h1>Liste des pays</h1>

    <table class=\"table table-hover table-striped table-bordered .table-responsive\">
        <thead>
            <tr>
                <th>Pays</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</a></td>
                <td>
\t\t\t\t\t<div style=\"white-space:nowrap\">
\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info \"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-warning \"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t</div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

    <div class=\"container panel panel-default mypanel\">
        <div class=\"row panel-body\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("pays_new");
        echo "\" class=\"btn btn-default\">
                Ajouter un pays
            </a>
        </div>
    </div>
    
\t
    ";
    }

    public function getTemplateName()
    {
        return "CestomArticleBundle:Pays:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  75 => 25,  64 => 20,  60 => 19,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base_articles.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Liste des pays</h1>*/
/* */
/*     <table class="table table-hover table-striped table-bordered .table-responsive">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Pays</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pays_show', { 'id': entity.id }) }}">[{{ entity.id }}] {{ entity.pays }}</a></td>*/
/*                 <td>*/
/* 					<div style="white-space:nowrap">*/
/* 							<a href="{{ path('pays_show', { 'id': entity.id }) }}" class="btn btn-info "><i class="fa fa-eye"></i></a>*/
/* 							<a href="{{ path('pays_edit', { 'id': entity.id }) }}"  class="btn btn-warning "><i class="fa fa-pencil"></i></a>*/
/* 					</div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="container panel panel-default mypanel">*/
/*         <div class="row panel-body">*/
/*             <a href="{{ path('pays_new') }}" class="btn btn-default">*/
/*                 Ajouter un pays*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     */
/* 	*/
/*     {% endblock %}*/
/* */

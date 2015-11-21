<?php

/* CestomAdminBundle:GestionMembre:formulaireFormation.html.twig */
class __TwigTemplate_02493efaf3d91749a149ecff86302be0ce85f901d4a0dec5011dc4b3e7947f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<div class=\"col-sm-10 widget-main\">

    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelleFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label label-fromation"), "label" => "Libelle de la formation"));
        echo "

    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelleFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5 label-fromation")));
        echo "
 
</div>

<div class=\"col-sm-10 widget-main\">

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "iduniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label label-fromation"), "label" => "Université"));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "iduniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5 label-fromation")));
        echo "

</div>
<div class=\"col-sm-10 widget-main\">

    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diplomeViseFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label label-fromation"), "label" => "Diplôme visé "));
        echo "

    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diplomeViseFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5 label-fromation")));
        echo "

</div>

<div class=\"col-sm-10 widget-main\">

    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dureeFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label label-fromation"), "label" => "Durée de la formation "));
        echo "

    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dureeFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5 label-fromation")));
        echo "

</div>

<div class=\"col-sm-10 widget-main\">

    <label class = \"col-sm-3 control-label bold\" for=\"dateDebutFormation\">
        Date début formation
    </label>

    <div class=\"input-group col-xs-10 col-sm-5\">
        <input value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["dateDebutFormation"]) ? $context["dateDebutFormation"] : null), "html", null, true);
        echo "\" name=\"dateDebutFormation\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
        <span class=\"input-group-addon\">
            <i class=\"fa fa-calendar bigger-110\"></i>
        </span>
    </div>
</div>


<div class=\"col-sm-10 widget-main\">

    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "programmeBourse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label label-fromation"), "label" => "Programme de bourse "));
        echo "

    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "programmeBourse", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5 label-fromation")));
        echo "

</div>

";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        echo " 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 2,  120 => 1,  116 => 60,  109 => 56,  104 => 54,  91 => 44,  77 => 33,  72 => 31,  63 => 25,  58 => 23,  50 => 18,  45 => 16,  36 => 10,  31 => 8,  25 => 5,  22 => 4,  20 => 1,);
    }
}
/* {% block style %} */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaires.css')}}" />*/
/* {% endblock %}*/
/* */
/* {{ form_errors(form) }}*/
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.libelleFormation, "Libelle de la formation", {'label_attr': {'class': 'col-sm-3 control-label label-fromation'}}) }}*/
/* */
/*     {{ form_widget(form.libelleFormation, {'attr': {'class': 'col-xs-10 col-sm-5 label-fromation'}}) }}*/
/*  */
/* </div>*/
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.iduniv, "Université", {'label_attr': {'class': 'col-sm-3 control-label label-fromation'}}) }}*/
/* */
/*     {{ form_widget(form.iduniv, {'attr': {'class': 'col-xs-10 col-sm-5 label-fromation'}}) }}*/
/* */
/* </div>*/
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.diplomeViseFormation, "Diplôme visé ", {'label_attr': {'class': 'col-sm-3 control-label label-fromation'}}) }}*/
/* */
/*     {{ form_widget(form.diplomeViseFormation, {'attr': {'class': 'col-xs-10 col-sm-5 label-fromation'}}) }}*/
/* */
/* </div>*/
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.dureeFormation, "Durée de la formation ", {'label_attr': {'class': 'col-sm-3 control-label label-fromation'}}) }}*/
/* */
/*     {{ form_widget(form.dureeFormation, {'attr': {'class': 'col-xs-10 col-sm-5 label-fromation'}}) }}*/
/* */
/* </div>*/
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     <label class = "col-sm-3 control-label bold" for="dateDebutFormation">*/
/*         Date début formation*/
/*     </label>*/
/* */
/*     <div class="input-group col-xs-10 col-sm-5">*/
/*         <input value="{{dateDebutFormation}}" name="dateDebutFormation" class=" required form-control date-picker" id="datenaissance" type="text" data-date-format="dd-mm-yyyy" />*/
/*         <span class="input-group-addon">*/
/*             <i class="fa fa-calendar bigger-110"></i>*/
/*         </span>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.programmeBourse, "Programme de bourse ", {'label_attr': {'class': 'col-sm-3 control-label label-fromation'}}) }}*/
/* */
/*     {{ form_widget(form.programmeBourse, {'attr': {'class': 'col-xs-10 col-sm-5 label-fromation'}}) }}*/
/* */
/* </div>*/
/* */
/* {{ form_rest(form) }}*/

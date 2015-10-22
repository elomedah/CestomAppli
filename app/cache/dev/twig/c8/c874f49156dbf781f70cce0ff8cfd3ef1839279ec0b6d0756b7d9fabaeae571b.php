<?php

/* CestomAdminBundle:GestionMembre:formulaireFormation.html.twig */
class __TwigTemplate_fe77256dc8dc02427eade83bfc240382b1c7cdf1ad7dd3a3e37ab30f5f4fc0bb extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"col-sm-10 widget-main\">

    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Libelle de la formation"));
        echo "

    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

</div>

<div class=\"col-sm-10 widget-main\">

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iduniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Université"));
        echo "

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iduniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

</div>
<div class=\"col-sm-10 widget-main\">

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomeViseFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Diplôme visé "));
        echo "

    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomeViseFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

</div>

<div class=\"col-sm-10 widget-main\">

    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeFormation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Durée de la formation "));
        echo "

    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeFormation", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

</div>

<div class=\"col-sm-10 widget-main\">

    <label class = \"col-sm-3 control-label bold\" for=\"dateDebutFormation\">
        Date début formation
    </label>

    <div class=\"input-group col-xs-10 col-sm-5\">
        <input value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["dateDebutFormation"]) ? $context["dateDebutFormation"] : $this->getContext($context, "dateDebutFormation")), "html", null, true);
        echo "\" name=\"dateDebutFormation\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
        <span class=\"input-group-addon\">
            <i class=\"fa fa-calendar bigger-110\"></i>
        </span>
    </div>
</div>


<div class=\"col-sm-10 widget-main\">

    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeBourse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Programme de bourse "));
        echo "

    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeBourse", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

</div>

";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


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
        return array (  110 => 56,  103 => 52,  98 => 50,  85 => 40,  71 => 29,  66 => 27,  57 => 21,  52 => 19,  44 => 14,  39 => 12,  30 => 6,  25 => 4,  19 => 1,);
    }
}
/* {{ form_errors(form) }}*/
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.libelleFormation, "Libelle de la formation", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*     {{ form_widget(form.libelleFormation, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* </div>*/
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.iduniv, "Université", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*     {{ form_widget(form.iduniv, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* </div>*/
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.diplomeViseFormation, "Diplôme visé ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*     {{ form_widget(form.diplomeViseFormation, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* </div>*/
/* */
/* <div class="col-sm-10 widget-main">*/
/* */
/*     {{ form_label(form.dureeFormation, "Durée de la formation ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*     {{ form_widget(form.dureeFormation, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
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
/*     {{ form_label(form.programmeBourse, "Programme de bourse ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*     {{ form_widget(form.programmeBourse, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* </div>*/
/* */
/* {{ form_rest(form) }}*/
/* */
/* */
/* */

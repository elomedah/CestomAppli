<?php

/* CestomTestBundle:GestionExperience:formulaireExperience.html.twig */
class __TwigTemplate_284d273b0fea0540b03ef4c3b28d9921d84b45455ab242a0eefb6e5223c15365 extends Twig_Template
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
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t<fieldset >\t
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelleExperience", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Expérience"));
        echo "

\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelleExperience", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

\t\t</div>

\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "iduniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Société"));
        echo "

\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "iduniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

\t\t</div>
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenceAcquise", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Compétance acquise "));
        echo "

\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "competenceAcquise", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

\t\t</div>

\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dureeExperience", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Durée "));
        echo "

\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dureeExperience", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

\t\t</div>
\t\t   
\t\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t\t\t\t<label class = \"col-sm-3 control-label bold\" for=\"dateDebutExperience\">
\t\t\t\t\t\t\tDébut
\t\t\t\t\t\t</label>

\t\t\t\t\t\t<div class=\"input-group col-xs-10 col-sm-5\">
\t\t\t\t\t\t\t<input value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["dateDebutExperience"]) ? $context["dateDebutExperience"] : null), "html", null, true);
        echo "\" name=\"dateDebutExperience\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t</div>
\t</fieldset>
\t\t\t\t
\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomTestBundle:GestionExperience:formulaireExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 49,  87 => 41,  73 => 30,  68 => 28,  59 => 22,  54 => 20,  46 => 15,  41 => 13,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/*  {{ form_errors(form) }}*/
/* 	<fieldset >	*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.libelleExperience, "Expérience", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.libelleExperience, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.iduniv, "Société", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.iduniv, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* 		</div>*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.competenceAcquise, "Compétance acquise ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.competenceAcquise, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.dureeExperience, "Durée ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.dureeExperience, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/* 		</div>*/
/* 		   */
/* 			<div class="col-sm-10 widget-main">*/
/* */
/* 						<label class = "col-sm-3 control-label bold" for="dateDebutExperience">*/
/* 							Début*/
/* 						</label>*/
/* */
/* 						<div class="input-group col-xs-10 col-sm-5">*/
/* 							<input value="{{dateDebutExperience}}" name="dateDebutExperience" class=" required form-control date-picker" id="datenaissance" type="text" data-date-format="dd-mm-yyyy" />*/
/* 													<span class="input-group-addon">*/
/* 														<i class="fa fa-calendar bigger-110"></i>*/
/* 													</span>*/
/* 						</div>*/
/* 			</div>*/
/* 	</fieldset>*/
/* 				*/
/* 	{{ form_rest(form) }}*/
/* */
/*                 */
/* */

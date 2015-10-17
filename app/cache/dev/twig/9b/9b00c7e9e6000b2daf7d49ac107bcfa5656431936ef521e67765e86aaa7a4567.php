<?php

/* CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig */
class __TwigTemplate_9fa97a627c9772e5953a7bfc33fadb77a67a0dda06ebb731393be6d6854ad70f extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                 \t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Ville "));
        echo "

                        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idville", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Adresse"));
        echo "

                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    

                       
                        <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"dateDebut\">
                                        Date d'arrivée 
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input required value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "html", null, true);
        echo "\" name=\"dateDebut\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                        </div>
                       
             
                        
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 37,  62 => 28,  46 => 15,  41 => 13,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/*  {{ form_errors(form) }}*/
/*                  			*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.idville, "Ville ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.idville, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.adresse, "Adresse", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.adresse, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                     */
/* */
/*                        */
/*                         <div class="col-sm-10 widget-main">*/
/* */
/*                                     <label class = "col-sm-3 control-label bold" for="dateDebut">*/
/*                                         Date d'arrivée */
/*                                     </label>*/
/* */
/*                                     <div class="input-group col-xs-10 col-sm-5">*/
/*                                         <input required value="{{dateDebut}}" name="dateDebut" class=" required form-control date-picker" id="datenaissance" type="text" data-date-format="dd-mm-yyyy" />*/
/* 																<span class="input-group-addon">*/
/* 																	<i class="fa fa-calendar bigger-110"></i>*/
/* 																</span>*/
/*                                     </div>*/
/*                         </div>*/
/*                        */
/*              */
/*                         */
/*             {{ form_rest(form) }}*/
/* */
/*                 */
/* */

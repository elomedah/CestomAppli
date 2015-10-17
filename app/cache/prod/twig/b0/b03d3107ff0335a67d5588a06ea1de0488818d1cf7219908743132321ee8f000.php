<?php

/* CestomAdminBundle:GestionMembre:formulaireBureau.html.twig */
class __TwigTemplate_efc750895b0f39e5917f401ca0122d72c52ed25aa93195ff6785963c1fad5385 extends Twig_Template
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
                 \t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Ville "));
        echo "

                        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idville", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anneeScolaire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Année scolaire"));
        echo "

                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "anneeScolaire", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    
                     <div class=\"col-sm-10 widget-main\">

                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idmembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom du membre"));
        echo "

                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idmembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                       <div class=\"col-sm-10 widget-main\">

                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "posteMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Poste du membre"));
        echo "

                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "posteMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                      
                </fieldset>
                        
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireBureau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  74 => 31,  69 => 29,  60 => 23,  55 => 21,  46 => 15,  41 => 13,  32 => 7,  27 => 5,  19 => 1,);
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
/*                         {{ form_label(form.anneeScolaire, "Année scolaire", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.anneeScolaire, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                     */
/*                      <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.idmembre, "Nom du membre", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.idmembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                        <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.posteMembre, "Poste du membre", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.posteMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                       */
/*                 </fieldset>*/
/*                         */
/*             {{ form_rest(form) }}*/
/* */
/*                 */
/* */

<?php

/* CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig */
class __TwigTemplate_b530728583368d8c19f5d5835e43ad8b11542be358a49a664f4c19505729e5ae extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomuniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom de l'université/Ecole"));
        echo "

                        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomuniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactuniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Contact de l'université"));
        echo "

                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactuniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresseuniv", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Adresse "));
        echo "

                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresseuniv", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                  
                </fieldset>
                        
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 29,  59 => 22,  54 => 20,  46 => 15,  41 => 13,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/*  {{ form_errors(form) }}*/
/* 			*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.nomuniv, "Nom de l'université/Ecole", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.nomuniv, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.contactuniv, "Contact de l'université", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.contactuniv, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.addresseuniv, "Adresse ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.addresseuniv, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                   */
/*                 </fieldset>*/
/*                         */
/*             {{ form_rest(form) }}*/
/* */
/*                 */
/* */

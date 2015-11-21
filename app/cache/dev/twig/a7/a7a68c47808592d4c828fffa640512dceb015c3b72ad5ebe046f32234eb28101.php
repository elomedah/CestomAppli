<?php

/* CestomUserBundle:GestionBourse:formulaireBourse.html.twig */
class __TwigTemplate_bec35f3fd125d4ffdbd53ebc7f9399081862ed42cec260869b30ce951ae65d08 extends Twig_Template
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
                 \t\t\t<fieldset>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDoc", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Type de document "));
        echo "

                        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeDoc", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                 
\t\t\t\t\t\t\t\t<div class=\"  col-sm-10 widget-main\">
\t\t\t\t\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t\t\t\t<input class= \" col-xs-10 col-sm-5 \"  type=\"file\" 
\t\t\t\t\t\t\t\t\tid=\"form_fichierBourse_file\" name=\"form[fichierBourse][file]\" />
\t\t\t\t\t\t\t\t        </div>    
\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input id=\"annuler\" class=\" pull-right btn btn-sm btn-cancel\" type=\"button\"  value=\"Annuler\" /> 
\t\t\t\t\t\t\t    <input id=\"valider\" class=\" pull-left btn btn-sm btn-primary\" type=\"submit\"  value=\"Valider\" />                                                                                                                  
\t\t\t\t\t\t\t</div>
\t\t\t
             </fieldset>
                        
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionBourse:formulaireBourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 26,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/*  {{ form_errors(form) }}*/
/*                  			<fieldset>*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.typeDoc, "Type de document ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.typeDoc, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                  */
/* 								<div class="  col-sm-10 widget-main">*/
/* 									<div class="center">*/
/* 									<input class= " col-xs-10 col-sm-5 "  type="file" */
/* 									id="form_fichierBourse_file" name="form[fichierBourse][file]" />*/
/* 								        </div>    */
/* 								</div>    */
/* 							*/
/* 							<div class="clearfix">														*/
/* 								<input id="annuler" class=" pull-right btn btn-sm btn-cancel" type="button"  value="Annuler" /> */
/* 							    <input id="valider" class=" pull-left btn btn-sm btn-primary" type="submit"  value="Valider" />                                                                                                                  */
/* 							</div>*/
/* 			*/
/*              </fieldset>*/
/*                         */
/* {{ form_widget(form._token) }}*/
/* */
/*                 */
/* */

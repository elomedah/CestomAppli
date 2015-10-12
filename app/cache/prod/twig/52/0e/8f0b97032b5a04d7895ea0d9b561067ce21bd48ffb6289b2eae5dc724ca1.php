<?php

/* CestomAdminBundle:GestionMembre:formulaireVille.html.twig */
class __TwigTemplate_520e8f0b97032b5a04d7895ea0d9b561067ce21bd48ffb6289b2eae5dc724ca1 extends Twig_Template
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
                 <fieldset >
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Gestion ville
                        </h4>
                    </div>\t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Ville"));
        echo "

                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomville", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    
                </fieldset>
                        
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                ";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireVille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  37 => 12,  32 => 10,  19 => 1,);
    }
}

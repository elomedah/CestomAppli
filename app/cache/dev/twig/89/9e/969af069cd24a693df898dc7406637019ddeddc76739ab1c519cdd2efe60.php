<?php

/* CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig */
class __TwigTemplate_899e969af069cd24a693df898dc7406637019ddeddc76739ab1c519cdd2efe60 extends Twig_Template
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
                 <fieldset >
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Gestion des villes du membre
                        </h4>
                    </div>\t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Ville "));
        echo "

                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idville", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Adresse"));
        echo "

                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    

                       
                        <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"dateDebut\">
                                        Date d'arrivée 
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input required value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "html", null, true);
        echo "\" name=\"dateDebut\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                        </div>
                       
                      
                </fieldset>
                        
            ";
        // line 43
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
        return array (  80 => 43,  67 => 33,  51 => 20,  46 => 18,  37 => 12,  32 => 10,  19 => 1,);
    }
}

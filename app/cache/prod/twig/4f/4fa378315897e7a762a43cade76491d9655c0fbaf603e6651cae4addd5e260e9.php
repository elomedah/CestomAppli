<?php

/* CestomUserBundle:GestionCompte:formulaireUserImage.html.twig */
class __TwigTemplate_ab9ec6488eb0197d2d41e567628baf860cab84ff2f1ce58ee79ab231c440348a extends Twig_Template
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
        echo "<div id=\"fichier\" class=\" hidden  col-sm-4\">
                        ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fichierPhotoMimMembre", array()), 'widget', array("attr" => array("class" => " col-xs-10 col-sm-5")));
        echo "\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionCompte:formulaireUserImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="fichier" class=" hidden  col-sm-4">*/
/*                         {{ form_widget(form.fichierPhotoMimMembre, {'attr': {'class': ' col-xs-10 col-sm-5'}}) }}		*/
/* 	</div>*/
/* */

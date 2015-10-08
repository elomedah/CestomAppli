<?php

/* CestomAdminBundle:GestionMembre:formulaireMembre.html.twig */
class __TwigTemplate_830b94c7eff60637ec79ce540d14401861a512d1b71abd69c1874e00fdccebac extends Twig_Template
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
                            Général
                        </h4>
                    </div>\t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom usuel"));
        echo "

                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Email"));
        echo "

                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom "));
        echo "

                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Prénom (s) "));
        echo "

                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                        <div class=\"col-sm-10 widget-main\">
                        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">Sexe</label>
                                                                                        <div class=\" row \">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<input  value=\"M\" name=\"sexe\" type=\"radio\" class=\"ace\" ";
        // line 47
        if (((isset($context["sexe"]) ? $context["sexe"] : null) == "M")) {
            // line 48
            echo "   checked
";
        }
        // line 49
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Masculin</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"F\" name=\"sexe\" type=\"radio\" class=\"ace\" ";
        // line 54
        if (((isset($context["sexe"]) ? $context["sexe"] : null) == "F")) {
            // line 55
            echo "   checked
";
        }
        // line 56
        echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Féminin</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
        
                        <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"datenaissance\">
                                        Date de naissance
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["datenaissance"]) ? $context["datenaissance"] : null), "html", null, true);
        echo "\" name=\"datenaissance\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                        </div>
                       
                        
\t\t\t

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotionMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Promotion "));
        echo "

                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotionMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "photoMimMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Photo du membre "));
        echo "

                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "photoMimMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                 
                </fieldset>
                <fieldset >
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Info Passport
                        </h4>
                    </div>\t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroPassportMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Numéro Passport"));
        echo "

                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroPassportMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                                               <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"dateemission\">
                                        Date d'émission 
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input value=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["dateemission"]) ? $context["dateemission"] : null), "html", null, true);
        echo "\" name=\"dateemission\" class=\"form-control date-picker\" id=\"dateemission\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>


                                            <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"dateexpiration\">
                                        Date d 'expiration
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input value=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["dateexpiration"]) ? $context["dateexpiration"] : null), "html", null, true);
        echo "\" name=\"datereception\" class=\"form-control date-picker\" id=\"dateexpiration\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>

                </fieldset>

                <fieldset >
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Contact d'urgence
                        </h4>
                    </div>\t\t\t
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactUrgence", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom et numéro (tel) urgence "));
        echo "

                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactUrgence", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "infoComplementmembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Informations supplémentaires"));
        echo "

                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "infoComplementmembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                </fieldset>
                        
            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

                
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:formulaireMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 164,  253 => 159,  248 => 157,  240 => 152,  235 => 150,  215 => 133,  197 => 118,  183 => 107,  178 => 105,  162 => 92,  157 => 90,  149 => 85,  144 => 83,  129 => 71,  112 => 56,  108 => 55,  106 => 54,  99 => 49,  95 => 48,  93 => 47,  79 => 36,  74 => 34,  65 => 28,  60 => 26,  52 => 21,  47 => 19,  38 => 13,  33 => 11,  19 => 1,);
    }
}

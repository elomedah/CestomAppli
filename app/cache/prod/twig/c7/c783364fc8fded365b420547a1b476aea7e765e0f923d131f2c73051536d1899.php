<?php

/* CestomAdminBundle:GestionMembre:formulaireMembre.html.twig */
class __TwigTemplate_3361d4c1074ffbd1cb9cf8e8fccecdefb86650c1adb2f91231f0b95418531b1a extends Twig_Template
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
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Username "));
        echo "

                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>   
                        
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom "));
        echo "

                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Prénom (s) "));
        echo "

                        ";
        // line 30
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
        // line 41
        if (((isset($context["sexe"]) ? $context["sexe"] : null) == "M")) {
            // line 42
            echo "   checked
";
        }
        // line 43
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Masculin</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"F\" name=\"sexe\" type=\"radio\" class=\"ace\" ";
        // line 48
        if (((isset($context["sexe"]) ? $context["sexe"] : null) == "F")) {
            // line 49
            echo "   checked
";
        }
        // line 50
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
        // line 65
        echo twig_escape_filter($this->env, (isset($context["datenaissance"]) ? $context["datenaissance"] : null), "html", null, true);
        echo "\" name=\"datenaissance\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                        </div>
                       
                        
\t\t\t  <div class=\"col-sm-10 widget-main\">

                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephonefirst", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Télephone 1 "));
        echo "

                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephonefirst", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div> 
  <div class=\"col-sm-10 widget-main\">

                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephonesecond", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Télephone 2 "));
        echo "

                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephonesecond", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div> 

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotionMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Promotion "));
        echo "

                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotionMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                        
                        <div class=\"col-sm-10 widget-main\">

                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dernierLyceeFrequente", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Dernier lycée fréquenté "));
        echo "

                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dernierLyceeFrequente", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "photoMimMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Photo du membre "));
        echo "

                        ";
        // line 107
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
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroPassportMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Numéro Passport"));
        echo "

                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroPassportMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>

                                               <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-3 control-label bold\" for=\"dateemission\">
                                        Date d'émission 
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-5\">
                                        <input value=\"";
        // line 133
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
        // line 148
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
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactUrgence", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Nom et numéro (tel) urgence "));
        echo "

                        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contactUrgence", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "infoComplementmembre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label "), "label" => "Informations supplémentaires"));
        echo "

                        ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "infoComplementmembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "

                    </div>
                </fieldset>
                        
            ";
        // line 179
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
        return array (  288 => 179,  280 => 174,  275 => 172,  267 => 167,  262 => 165,  242 => 148,  224 => 133,  210 => 122,  205 => 120,  189 => 107,  184 => 105,  176 => 100,  171 => 98,  162 => 92,  157 => 90,  148 => 84,  143 => 82,  135 => 77,  130 => 75,  117 => 65,  100 => 50,  96 => 49,  94 => 48,  87 => 43,  83 => 42,  81 => 41,  67 => 30,  62 => 28,  53 => 22,  48 => 20,  39 => 14,  34 => 12,  19 => 1,);
    }
}
/*  {{ form_errors(form) }}*/
/* */
/*                 <fieldset >*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Général*/
/*                         </h4>*/
/*                     </div>			*/
/*                     */
/*                      <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.username, "Username ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.username, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>   */
/*                         */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.nomMembre, "Nom ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.nomMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.prenomMembre, "Prénom (s) ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.prenomMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                         <div class="col-sm-10 widget-main">*/
/*                         */
/* 										*/
/* 											<label class="col-sm-3 control-label">Sexe</label>*/
/*                                                                                         <div class=" row ">*/
/* 											*/
/* 												<label>*/
/* */
/* 													<input  value="M" name="sexe" type="radio" class="ace" {% if sexe=='M' %}*/
/*    checked*/
/* {% endif %} />*/
/* 													<span class="lbl">Masculin</span>*/
/* 												</label>*/
/* 											*/
/* 												<label>*/
/* 													<input value="F" name="sexe" type="radio" class="ace" {% if sexe=='F' %}*/
/*    checked*/
/* {% endif %}/>*/
/* 													<span class="lbl">Féminin</span>*/
/* 												</label>*/
/* 																						*/
/*                                                                                         </div>*/
/* 									</div>*/
/* 								*/
/*         */
/*                         <div class="col-sm-10 widget-main">*/
/* */
/*                                     <label class = "col-sm-3 control-label bold" for="datenaissance">*/
/*                                         Date de naissance*/
/*                                     </label>*/
/* */
/*                                     <div class="input-group col-xs-10 col-sm-5">*/
/*                                         <input value="{{datenaissance }}" name="datenaissance" class=" required form-control date-picker" id="datenaissance" type="text" data-date-format="dd-mm-yyyy" />*/
/* 																<span class="input-group-addon">*/
/* 																	<i class="fa fa-calendar bigger-110"></i>*/
/* 																</span>*/
/*                                     </div>*/
/*                         </div>*/
/*                        */
/*                         */
/* 			  <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.telephonefirst, "Télephone 1 ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.telephonefirst, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div> */
/*   <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.telephonesecond, "Télephone 2 ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.telephonesecond, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div> */
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.promotionMembre, "Promotion ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.promotionMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                         */
/*                         <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.dernierLyceeFrequente, "Dernier lycée fréquenté ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.dernierLyceeFrequente, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.photoMimMembre, "Photo du membre ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.photoMimMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                  */
/*                 </fieldset>*/
/*                 <fieldset >*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Info Passport*/
/*                         </h4>*/
/*                     </div>			*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.numeroPassportMembre, "Numéro Passport", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.numeroPassportMembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                                                <div class="col-sm-10 widget-main">*/
/* */
/*                                     <label class = "col-sm-3 control-label bold" for="dateemission">*/
/*                                         Date d'émission */
/*                                     </label>*/
/* */
/*                                     <div class="input-group col-xs-10 col-sm-5">*/
/*                                         <input value="{{dateemission}}" name="dateemission" class="form-control date-picker" id="dateemission" type="text" data-date-format="dd-mm-yyyy" />*/
/* 																<span class="input-group-addon">*/
/* 																	<i class="fa fa-calendar bigger-110"></i>*/
/* 																</span>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/* */
/*                                             <div class="col-sm-10 widget-main">*/
/* */
/*                                     <label class = "col-sm-3 control-label bold" for="dateexpiration">*/
/*                                         Date d 'expiration*/
/*                                     </label>*/
/* */
/*                                     <div class="input-group col-xs-10 col-sm-5">*/
/*                                         <input value="{{dateexpiration}}" name="datereception" class="form-control date-picker" id="dateexpiration" type="text" data-date-format="dd-mm-yyyy" />*/
/* 																<span class="input-group-addon">*/
/* 																	<i class="fa fa-calendar bigger-110"></i>*/
/* 																</span>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                 </fieldset>*/
/* */
/*                 <fieldset >*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Contact d'urgence*/
/*                         </h4>*/
/*                     </div>			*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.contactUrgence, "Nom et numéro (tel) urgence ", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.contactUrgence, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.infoComplementmembre, "Informations supplémentaires", {'label_attr': {'class': 'col-sm-3 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.infoComplementmembre, {'attr': {'class': 'col-xs-10 col-sm-5'}}) }}*/
/* */
/*                     </div>*/
/*                 </fieldset>*/
/*                         */
/*             {{ form_rest(form) }}*/
/* */
/*                 */
/* */

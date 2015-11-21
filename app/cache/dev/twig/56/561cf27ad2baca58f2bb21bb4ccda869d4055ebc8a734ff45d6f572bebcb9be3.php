<?php

/* CestomUserBundle:GestionCompte:formulaireUser.html.twig */
class __TwigTemplate_e162a18dd40f4bd836f8b935520bd6826b1f77bdcf21f60b9dac81acf065ab06 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t<fieldset >
\t<div class=\"col-sm-10 widget-main\">
\t\t<h4 class=\"header red bolder smaller\">
\t\t\tGénéral
\t\t</h4>
\t</div>\t\t\t
\t<div class=\"row row-no-padding\">

\t\t<span class=\"col-sm-8\">

\t\t    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Nom "));
        echo "

                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div>

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Prénom (s) "));
        echo "

                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div>
                        <div class=\"col-sm-10 widget-main\">
                        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Sexe</label>
                                                                                        <div class=\" row \">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<input  value=\"M\" name=\"sexe\" type=\"radio\" class=\"ace\" ";
        // line 35
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe", array()) == "M")) {
            // line 36
            echo "   checked
";
        }
        // line 37
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Masculin</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input value=\"F\" name=\"sexe\" type=\"radio\" class=\"ace\" ";
        // line 42
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe", array()) == "F")) {
            // line 43
            echo "   checked
";
        }
        // line 44
        echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Féminin</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
        
                        <div class=\"col-sm-10 widget-main\">

                                    <label class = \"col-sm-4 control-label bold\" for=\"datenaissance\">
                                        Date de naissance
                                    </label>

                                    <div class=\"input-group col-xs-10 col-sm-6\">
                                        <input value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateNaissanceMembre", array()), "html", null, true);
        echo "\" name=\"datenaissance\" class=\" required form-control date-picker\" id=\"datenaissance\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                        </div>
                       
                        
\t\t\t  <div class=\"col-sm-10 widget-main\">

                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephonefirst", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Télephone 1 "));
        echo "

                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephonefirst", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div> 
  <div class=\"col-sm-10 widget-main\">

                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephonesecond", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Télephone 2 "));
        echo "

                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephonesecond", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div> 

                    <div class=\"col-sm-10 widget-main\">

                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotionMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Promotion "));
        echo "

                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotionMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div>
                        
                        <div class=\"col-sm-10 widget-main\">

                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierLyceeFrequente", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Dernier lycée fréquenté "));
        echo "

                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierLyceeFrequente", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

                    </div>\t 
\t\t</span>
\t\t\t
\t\t
\t</fieldset>
\t<fieldset >
\t\t<div class=\"col-sm-10 widget-main\">
\t\t\t<h4 class=\"header red bolder smaller\">
\t\t\t\tInfo Passport
\t\t\t</h4>
\t\t</div>\t\t\t
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPassportMembre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Numéro Passport"));
        echo "

\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPassportMembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

\t\t</div>

\t\t<div class=\"col-sm-10 widget-main\">
\t\t\t<label class = \"col-sm-4 control-label bold\" for=\"dateemission\">
\t\t\t\tDate d'émission 
\t\t\t</label>

\t\t\t<div class=\"input-group col-xs-10 col-sm-6\">
\t\t\t\t<input value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateEtabMembre", array()), "html", null, true);
        echo "\" name=\"dateemission\" class=\"form-control date-picker\" id=\"dateemission\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t<label class = \"col-sm-4 control-label bold\" for=\"dateexpiration\">
\t\t\t\tDate d 'expiration
\t\t\t</label>

\t\t\t<div class=\"input-group col-xs-10 col-sm-6\">
\t\t\t\t<input value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "dateExpiMembre", array()), "html", null, true);
        echo "\" name=\"datereception\" class=\"form-control date-picker\" id=\"dateexpiration\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>

\t</fieldset>
\t
\t<fieldset >
\t\t<div class=\"col-sm-10 widget-main\">
\t\t\t<h4 class=\"header red bolder smaller\">
\t\t\t\tContact d'urgence
\t\t\t</h4>
\t\t</div>\t\t\t
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactUrgence", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Nom et numéro (tel) urgence "));
        echo "

\t\t\t";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactUrgence", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

\t\t</div>
\t\t<div class=\"col-sm-10 widget-main\">

\t\t\t";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infoComplementmembre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label "), "label" => "Informations supplémentaires"));
        echo "

\t\t\t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infoComplementmembre", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-6")));
        echo "

\t\t</div>
\t</fieldset>
\t
";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionCompte:formulaireUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 165,  253 => 160,  248 => 158,  240 => 153,  235 => 151,  215 => 134,  199 => 121,  186 => 111,  181 => 109,  163 => 94,  158 => 92,  149 => 86,  144 => 84,  135 => 78,  130 => 76,  122 => 71,  117 => 69,  104 => 59,  87 => 44,  83 => 43,  81 => 42,  74 => 37,  70 => 36,  68 => 35,  54 => 24,  49 => 22,  40 => 16,  35 => 14,  19 => 1,);
    }
}
/* {{ form_errors(form) }}*/
/* 		<fieldset >*/
/* 	<div class="col-sm-10 widget-main">*/
/* 		<h4 class="header red bolder smaller">*/
/* 			Général*/
/* 		</h4>*/
/* 	</div>			*/
/* 	<div class="row row-no-padding">*/
/* */
/* 		<span class="col-sm-8">*/
/* */
/* 		    <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.nomMembre, "Nom ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.nomMembre, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.prenomMembre, "Prénom (s) ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.prenomMembre, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div>*/
/*                         <div class="col-sm-10 widget-main">*/
/*                         */
/* 										*/
/* 											<label class="col-sm-4 control-label">Sexe</label>*/
/*                                                                                         <div class=" row ">*/
/* 											*/
/* 												<label>*/
/* */
/* 													<input  value="M" name="sexe" type="radio" class="ace" {% if membre.sexe=='M' %}*/
/*    checked*/
/* {% endif %} />*/
/* 													<span class="lbl">Masculin</span>*/
/* 												</label>*/
/* 											*/
/* 												<label>*/
/* 													<input value="F" name="sexe" type="radio" class="ace" {% if membre.sexe=='F' %}*/
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
/*                                     <label class = "col-sm-4 control-label bold" for="datenaissance">*/
/*                                         Date de naissance*/
/*                                     </label>*/
/* */
/*                                     <div class="input-group col-xs-10 col-sm-6">*/
/*                                         <input value="{{membre.dateNaissanceMembre }}" name="datenaissance" class=" required form-control date-picker" id="datenaissance" type="text" data-date-format="dd-mm-yyyy" />*/
/* 																<span class="input-group-addon">*/
/* 																	<i class="fa fa-calendar bigger-110"></i>*/
/* 																</span>*/
/*                                     </div>*/
/*                         </div>*/
/*                        */
/*                         */
/* 			  <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.telephonefirst, "Télephone 1 ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.telephonefirst, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div> */
/*   <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.telephonesecond, "Télephone 2 ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.telephonesecond, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div> */
/* */
/*                     <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.promotionMembre, "Promotion ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.promotionMembre, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div>*/
/*                         */
/*                         <div class="col-sm-10 widget-main">*/
/* */
/*                         {{ form_label(form.dernierLyceeFrequente, "Dernier lycée fréquenté ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/*                         {{ form_widget(form.dernierLyceeFrequente, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/*                     </div>	 */
/* 		</span>*/
/* 			*/
/* 		*/
/* 	</fieldset>*/
/* 	<fieldset >*/
/* 		<div class="col-sm-10 widget-main">*/
/* 			<h4 class="header red bolder smaller">*/
/* 				Info Passport*/
/* 			</h4>*/
/* 		</div>			*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.numeroPassportMembre, "Numéro Passport", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.numeroPassportMembre, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-10 widget-main">*/
/* 			<label class = "col-sm-4 control-label bold" for="dateemission">*/
/* 				Date d'émission */
/* 			</label>*/
/* */
/* 			<div class="input-group col-xs-10 col-sm-6">*/
/* 				<input value="{{membre.dateEtabMembre}}" name="dateemission" class="form-control date-picker" id="dateemission" type="text" data-date-format="dd-mm-yyyy" />*/
/* 										<span class="input-group-addon">*/
/* 											<i class="fa fa-calendar bigger-110"></i>*/
/* 										</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			<label class = "col-sm-4 control-label bold" for="dateexpiration">*/
/* 				Date d 'expiration*/
/* 			</label>*/
/* */
/* 			<div class="input-group col-xs-10 col-sm-6">*/
/* 				<input value="{{membre.dateExpiMembre}}" name="datereception" class="form-control date-picker" id="dateexpiration" type="text" data-date-format="dd-mm-yyyy" />*/
/* 				<span class="input-group-addon">*/
/* 					<i class="fa fa-calendar bigger-110"></i>*/
/* 				</span>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</fieldset>*/
/* 	*/
/* 	<fieldset >*/
/* 		<div class="col-sm-10 widget-main">*/
/* 			<h4 class="header red bolder smaller">*/
/* 				Contact d'urgence*/
/* 			</h4>*/
/* 		</div>			*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.contactUrgence, "Nom et numéro (tel) urgence ", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.contactUrgence, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/* 		</div>*/
/* 		<div class="col-sm-10 widget-main">*/
/* */
/* 			{{ form_label(form.infoComplementmembre, "Informations supplémentaires", {'label_attr': {'class': 'col-sm-4 control-label '}}) }}*/
/* */
/* 			{{ form_widget(form.infoComplementmembre, {'attr': {'class': 'col-xs-10 col-sm-6'}}) }}*/
/* */
/* 		</div>*/
/* 	</fieldset>*/
/* 	*/
/* {{ form_widget(form._token) }}*/
/* */
/* */

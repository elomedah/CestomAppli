<?php

/* CestomUserBundle:GestionCompte:gestionCompte.html.twig */
class __TwigTemplate_a0a9426a7e2fc1a058d81c1e0dc9dbd874db47d5ca47c3068206cb2f1a316492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_user.html.twig", "CestomUserBundle:GestionCompte:gestionCompte.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af6ed8a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_accueilStyles_1.css");
            // line 12
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.carousel_2.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.transitions_3.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a_owl.theme_4.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        } else {
            // asset "af6ed8a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/af6ed8a.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
\t ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "<div class=\"alert alert-block alert-success\">
<div class=\"flash-notice\">

";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "<div class=\"alert alert-block alert-danger\">
<div class=\"flash-notice\">

";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  
<div class=\"col-sm-12 \">
<div class=\"  col-sm-4\">
<div class=\" widget-main\">
<form ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_user_image");
        echo "\">
<fieldset>
\t


";
        // line 44
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photoMimMembre", array()) == null)) {
            // line 45
            echo "<img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/avatars/avatarbig.jpg"), "html", null, true);
            echo "\" alt=\"profil\" class=\"img-responsive img-thumbnail  zoom \"/>
";
        } else {
            // line 47
            echo "<img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "fichierPhotoMimMembre"), "html", null, true);
            echo "\" alt=\"profil\" class=\"img-responsive img-thumbnail  zoom \"/>
";
        }
        // line 49
        echo "<div class=\"row\" style=\"margin-top:10px\">
<input id=\"upload\"  class=\"  btn btn-sm btn-success\" type=\"button\"  value=\"Modifier\"/>
</div>
                        <div id=\"fichier\" style=\"padding:10px\" class=\"  hidden col-sm-12\">
\t\t\t\t\t\t\t<div class=\"vich-image\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 widget-main\">
\t\t\t\t\t\t\t\t<input class= \" col-sm-10 \" style=\"padding:10px\" type=\"file\" id=\"form_fichierPhotoMimMembre_file\" name=\"form[fichierPhotoMimMembre][file]\" />
\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input id=\"annuler\" class=\" pull-right btn btn-sm btn-cancel\" type=\"button\"  value=\"Annuler\" /> 
\t\t\t\t\t\t\t    <input id=\"valider\" class=\" pull-left btn btn-sm btn-primary\" type=\"submit\"  value=\"Valider\" />                                                                                                                  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
</fieldset>
</form>
</div>
</div>
<div class=\"  col-sm-8\">
        <div class=\"widget-main \">
            <form ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_user_homepage");
        echo "\">

                ";
        // line 71
        $this->loadTemplate("CestomUserBundle:GestionCompte:formulaireUser.html.twig", "CestomUserBundle:GestionCompte:gestionCompte.html.twig", 71)->display($context);
        // line 72
        echo "<fieldset>  
<div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Enregistrer
                                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
   
   </fieldset>
            </form>
        </div>
     
    </div>
                                                                                     
\t </div>
     
    </div>
            \t\t\t\t\t\t
\t</div>\t


";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "\t
\t <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
              < script src = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">
\$(document).ready(function() {

           \$('#upload').click( function(e) { 

\t\t \$('#fichier').removeClass('hidden');
\$('#upload').hide();
\t\t} );

 \$('#annuler').click( function(e) { 
                      e.preventDefault();
\t\t \$('#fichier').addClass('hidden');
               \$('#upload').show();
\t\t} );
            \$('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
                    //show datepicker when clicking on the icon
                    .next().on(ace.click_event, function() {
                \$(this).prev().focus();
            });
           
\t   
        });
        </script>
";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionCompte:gestionCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 102,  235 => 101,  231 => 100,  227 => 99,  223 => 98,  219 => 97,  215 => 96,  212 => 95,  209 => 94,  184 => 72,  182 => 71,  175 => 69,  153 => 49,  147 => 47,  141 => 45,  139 => 44,  129 => 39,  123 => 35,  113 => 31,  108 => 28,  104 => 27,  101 => 26,  91 => 22,  86 => 19,  82 => 18,  79 => 17,  76 => 16,  42 => 12,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_user.html.twig' %} */
/* */
/* */
/*  {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	{% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.carousel.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.transitions.css'*/
/* 		'bundles/cestomarticle/css/owlcarousel/owl.theme.css'*/
/* 	%}*/
/* 		<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	 {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
/* <div class="alert alert-block alert-success">*/
/* <div class="flash-notice">*/
/* */
/* {{ flashMessage }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('messageerror') %}*/
/* <div class="alert alert-block alert-danger">*/
/* <div class="flash-notice">*/
/* */
/* {{ flashMessage }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/*   */
/* <div class="col-sm-12 ">*/
/* <div class="  col-sm-4">*/
/* <div class=" widget-main">*/
/* <form {{ form_enctype(form) }}  method = "POST"  action = "{{path('cestom_user_image')}}">*/
/* <fieldset>*/
/* 	*/
/* */
/* */
/* {% if membre.photoMimMembre == null  %}*/
/* <img  src="{{ asset('assets/avatars/avatarbig.jpg') }}" alt="profil" class="img-responsive img-thumbnail  zoom "/>*/
/* {% else %}*/
/* <img  src="{{ vich_uploader_asset(membre, 'fichierPhotoMimMembre') }}" alt="profil" class="img-responsive img-thumbnail  zoom "/>*/
/* {% endif %}*/
/* <div class="row" style="margin-top:10px">*/
/* <input id="upload"  class="  btn btn-sm btn-success" type="button"  value="Modifier"/>*/
/* </div>*/
/*                         <div id="fichier" style="padding:10px" class="  hidden col-sm-12">*/
/* 							<div class="vich-image">*/
/* 								<div class="col-sm-10 widget-main">*/
/* 								<input class= " col-sm-10 " style="padding:10px" type="file" id="form_fichierPhotoMimMembre_file" name="form[fichierPhotoMimMembre][file]" />*/
/* 								</div>    */
/* 							</div>*/
/* 							<div class="clearfix">														*/
/* 								<input id="annuler" class=" pull-right btn btn-sm btn-cancel" type="button"  value="Annuler" /> */
/* 							    <input id="valider" class=" pull-left btn btn-sm btn-primary" type="submit"  value="Valider" />                                                                                                                  */
/* 							</div>*/
/* 						</div>	*/
/* </fieldset>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* <div class="  col-sm-8">*/
/*         <div class="widget-main ">*/
/*             <form {{ form_enctype(form) }}  method = "POST"  action = "{{path('cestom_user_homepage')}}">*/
/* */
/*                 {% include "CestomUserBundle:GestionCompte:formulaireUser.html.twig" %}*/
/* <fieldset>  */
/* <div class="form-actions center">*/
/*                                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                             Enregistrer*/
/*                                                             <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*    */
/*    </fieldset>*/
/*             </form>*/
/*         </div>*/
/*      */
/*     </div>*/
/*                                                                                      */
/* 	 </div>*/
/*      */
/*     </div>*/
/*             						*/
/* 	</div>	*/
/* */
/* */
/* {% endblock %}*/
/*  {% block javascripts %}*/
/* 	*/
/* 	 <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/moment.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-datetimepicker.min.js')}}">< /script>*/
/*               < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/* <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/* */
/* 	<script type="text/javascript">*/
/* $(document).ready(function() {*/
/* */
/*            $('#upload').click( function(e) { */
/* */
/* 		 $('#fichier').removeClass('hidden');*/
/* $('#upload').hide();*/
/* 		} );*/
/* */
/*  $('#annuler').click( function(e) { */
/*                       e.preventDefault();*/
/* 		 $('#fichier').addClass('hidden');*/
/*                $('#upload').show();*/
/* 		} );*/
/*             $('.date-picker').datepicker({*/
/*                 autoclose: true,*/
/*                 todayHighlight: true*/
/*             })*/
/*                     //show datepicker when clicking on the icon*/
/*                     .next().on(ace.click_event, function() {*/
/*                 $(this).prev().focus();*/
/*             });*/
/*            */
/* 	   */
/*         });*/
/*         </script>*/
/* {% endblock %}*/
/* */

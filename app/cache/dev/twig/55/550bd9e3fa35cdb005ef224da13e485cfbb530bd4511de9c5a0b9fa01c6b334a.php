<?php

/* CestomUserBundle:GestionFormation:gestionFormation.html.twig */
class __TwigTemplate_1a35b5fa1e86ee0b42c8075bc7f9a68ddfb4724b72d588a52a2f4a95f341cec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_user.html.twig", "CestomUserBundle:GestionFormation:gestionFormation.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f78f4db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db_accueilStyles_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "f78f4db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"widget-body widget-main no-padding\">
         <h1 class=\"center\">
            Liste des formations
        </h1>
    </div><!-- /.page-header -->




    <div>
        <div class=\"widget-body \">
            <div class=\"widget-main no-padding \">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "                    <div class=\"alert alert-block alert-success\">
                        <div class=\"flash-notice\">

                            ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "                    <div class=\"alert alert-block alert-danger\">
                        <div class=\"flash-notice\">

                            ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                <br>
                <br>

                ";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations"))) > 0)) {
            // line 51
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 52
                echo "                        <div class=\"container\">

                            <div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
                                    <div class=\"panel-heading\">
                                        <!--<div class=\"col-sm-3\">-->
\t\t\t\t\t\t\t\t\t\t\t<a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_modifier_formation", array("idformation" => $this->getAttribute($context["formation"], "idformation", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"padding:10px;\" class=\"red delete\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_delete_formation", array("idformation" => $this->getAttribute($context["formation"], "idformation", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a> 

\t\t\t\t\t\t\t\t\t\t\t<a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 65
                echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_formation");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-plus bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a> 
                                      <!--  </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"titre-formaction col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>-->
                                    </div>
                                    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\"> Formation   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6  label-formation \"> ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
                                        <label class=\"col-sm-6  label-formation\">Université </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
                echo "</span> <br>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Diplôme visé </label>    <span class=\"col-sm-6  label-formation\"> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
                echo "</span> <br>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Durée  </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
                                        <div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Début </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
                                        <div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Programme de bourse </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                ";
        } else {
            // line 101
            echo "                    <form ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "  method = \"POST\"  action =\"";
            echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_formation");
            echo "\">\t

                        ";
            // line 103
            $this->loadTemplate("CestomUserBundle:GestionFormation:formulaireFormation.html.twig", "CestomUserBundle:GestionFormation:gestionFormation.html.twig", 103)->display($context);
            // line 104
            echo "                        <div class=\"form-actions center\">
                            <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                Ajouter
                                <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 112
        echo "
            </div> 
        </div>
    </div>   

";
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        // line 120
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>  
       <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>  
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
                                                                    < script src = \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
           
            \$(\".delete\").click(function(e) {
                var path = \$(this);
                        e.preventDefault();
                BootstrapDialog.confirm('Voulez-vous supprimer la formation ?', function(result) {
                    
                    if (result) {
                         
                        window.location.href = path.attr(\"href\");
                    }
                });
            });
            
              //link
                                                                \$('.date-picker').datepicker({
                                                                    autoclose: true,
                                                                    todayHighlight: true
                                                                })
                                                                        //show datepicker when clicking on the icon
                                                                        .next().on(ace.click_event, function() {
                                                                    \$(this).prev().focus();
                                                                });
        });


    </script>
  

";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionFormation:gestionFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 127,  278 => 126,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  256 => 120,  253 => 119,  244 => 112,  234 => 104,  232 => 103,  224 => 101,  221 => 100,  207 => 92,  201 => 89,  195 => 86,  189 => 83,  183 => 80,  177 => 77,  168 => 71,  159 => 65,  152 => 61,  146 => 58,  138 => 52,  133 => 51,  131 => 50,  125 => 46,  115 => 42,  110 => 39,  106 => 38,  103 => 37,  93 => 33,  88 => 30,  84 => 29,  70 => 17,  67 => 16,  59 => 11,  54 => 10,  47 => 11,  42 => 10,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_user.html.twig' %} */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		*/
/*     %}*/
/*     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaires.css')}}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div class="widget-body widget-main no-padding">*/
/*          <h1 class="center">*/
/*             Liste des formations*/
/*         </h1>*/
/*     </div><!-- /.page-header -->*/
/* */
/* */
/* */
/* */
/*     <div>*/
/*         <div class="widget-body ">*/
/*             <div class="widget-main no-padding ">*/
/*                 {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
/*                     <div class="alert alert-block alert-success">*/
/*                         <div class="flash-notice">*/
/* */
/*                             {{ flashMessage }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('messageerror') %}*/
/*                     <div class="alert alert-block alert-danger">*/
/*                         <div class="flash-notice">*/
/* */
/*                             {{ flashMessage }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/*                 {% if  formations|length > 0 %}*/
/*                     {% for formation in formations %}*/
/*                         <div class="container">*/
/* */
/*                             <div class="panel-group ">*/
/*                                 <div class="panel panel-primary">*/
/*                                     <div class="panel-heading">*/
/*                                         <!--<div class="col-sm-3">-->*/
/* 											<a style="padding:10px;" class="white" href="{{path('cestom_user_modifier_formation',{'idformation':formation.idformation})}}">*/
/* 												<i class="ace-icon fa fa-pencil bigger-160"></i>*/
/* 											</a>*/
/* 											<a style="padding:10px;" class="red delete" href="{{path('cestom_user_delete_formation',{'idformation':formation.idformation})}}">*/
/* 												<i class="ace-icon fa fa-trash bigger-160"></i>*/
/* 											</a> */
/* */
/* 											<a style="padding:10px;" class="white" href="{{path('cestom_user_ajouter_formation')}}">*/
/* 												<i class="ace-icon fa fa-plus bigger-160"></i>*/
/* 											</a> */
/*                                       <!--  </div>*/
/* 										*/
/* 										<div class="titre-formaction col-sm-9">*/
/* 											{{ 	formation.libelleFormation}}*/
/* 										</div>-->*/
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation"> Formation   </label>*/
/* 											<span class="col-sm-6  label-formation "> {{ 	formation.libelleFormation}}</span> <br>*/
/* 										</div>*/
/* 										<div class="row white-background">*/
/*                                         <label class="col-sm-6  label-formation">Université </label>   <span class="col-sm-6  label-formation"> {{formation.iduniv.nomuniv}}</span> <br>*/
/*                                         </div>*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Diplôme visé </label>    <span class="col-sm-6  label-formation"> {{formation.diplomeViseFormation}}</span> <br>*/
/*                                         </div>*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Durée  </label>   <span class="col-sm-6  label-formation"> {{formation.dureeFormation}}</span> <br>*/
/* 										</div>*/
/*                                         <div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Début </label>   <span class="col-sm-6  label-formation"> {{formation.dateDebutFormation}}</span> <br>*/
/* 										</div>*/
/*                                         <div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Programme de bourse </label>   <span class="col-sm-6  label-formation"> {{formation.programmeBourse}}</span> <br>*/
/* 										</div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <form {{ form_enctype(form) }}  method = "POST"  action ="{{path ('cestom_user_ajouter_formation') }}">	*/
/* */
/*                         {% include "CestomUserBundle:GestionFormation:formulaireFormation.html.twig" %}*/
/*                         <div class="form-actions center">*/
/*                             <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                 Ajouter*/
/*                                 <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                             </button>*/
/*                         </div>*/
/*                     </form>*/
/*                 {% endif %}*/
/* */
/*             </div> */
/*         </div>*/
/*     </div>   */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*  <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>*/
/*        <script src="{{asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>  */
/*        <script src="{{asset('assets/js/bootstrap-dialog.min.js')}}"></script>  */
/*         <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*                                                                     < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/* */
/*     <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*            */
/*             $(".delete").click(function(e) {*/
/*                 var path = $(this);*/
/*                         e.preventDefault();*/
/*                 BootstrapDialog.confirm('Voulez-vous supprimer la formation ?', function(result) {*/
/*                     */
/*                     if (result) {*/
/*                          */
/*                         window.location.href = path.attr("href");*/
/*                     }*/
/*                 });*/
/*             });*/
/*             */
/*               //link*/
/*                                                                 $('.date-picker').datepicker({*/
/*                                                                     autoclose: true,*/
/*                                                                     todayHighlight: true*/
/*                                                                 })*/
/*                                                                         //show datepicker when clicking on the icon*/
/*                                                                         .next().on(ace.click_event, function() {*/
/*                                                                     $(this).prev().focus();*/
/*                                                                 });*/
/*         });*/
/* */
/* */
/*     </script>*/
/*   */
/* */
/* {% endblock %}*/

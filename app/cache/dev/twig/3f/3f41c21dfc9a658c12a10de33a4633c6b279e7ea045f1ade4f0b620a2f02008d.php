<?php

/* CestomTestBundle:GestionExperience:gestionExperience.html.twig */
class __TwigTemplate_318e941019ecc4a88cb133bb642f4eeb6c8c07ab8284158aaf2206ba6d310f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_user.html.twig", "CestomTestBundle:GestionExperience:gestionExperience.html.twig", 1);
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
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "f78f4db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"widget-body widget-main no-padding\">
         <h1 class=\"center\">
            Liste des Expériences
        </h1>
    </div>




    <div>
        <div class=\"widget-body \">
            <div class=\"widget-main no-padding \">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                    <div class=\"alert alert-block alert-success\">
                        <div class=\"flash-notice\">

                            ";
            // line 32
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "                    <div class=\"alert alert-block alert-danger\">
                        <div class=\"flash-notice\">
\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                <br>
                <br>

                ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["experiences"]) ? $context["experiences"] : $this->getContext($context, "experiences"))) > 0)) {
            // line 49
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) ? $context["experiences"] : $this->getContext($context, "experiences")));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 50
                echo "                        <div class=\"container\">

                            <div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
                                    <div class=\"panel-heading\">
                                         <a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_modifier_experience", array("idexperience" => $this->getAttribute($context["experience"], "idexperience", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"padding:10px;\" class=\"red delete\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_delete_experience", array("idexperience" => $this->getAttribute($context["experience"], "idexperience", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a> 

\t\t\t\t\t\t\t\t\t\t\t<a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_experience");
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-plus bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a> 
                                    </div>
                                    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\"> Expérience  </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6  label-formation \"> ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "libelleExperience", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
                                        <label class=\"col-sm-6  label-formation\">Société</label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["experience"], "idSociete", array()), "nomsociete", array()), "html", null, true);
                echo "</span> <br>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Compétance acquise </label>    <span class=\"col-sm-6  label-formation\"> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "competenceAcquise", array()), "html", null, true);
                echo "</span> <br>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Durée  </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "dureeExperience", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
                                        <div class=\"row white-background\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  label-formation\">Début </label>   <span class=\"col-sm-6  label-formation\"> ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "dateDebutExperience", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                ";
        } else {
            // line 90
            echo "                    <form ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "  method = \"POST\"  action =\"";
            echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_experience");
            echo "\">\t

                        ";
            // line 92
            $this->loadTemplate("CestomTestBundle:GestionExperience:formulaireExperience.html.twig", "CestomTestBundle:GestionExperience:gestionExperience.html.twig", 92)->display($context);
            // line 93
            echo "                        <div class=\"form-actions center\">
                            <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                Ajouter
                                <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 101
        echo "
            </div> 
        </div>
    </div>   

";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        // line 109
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>  
       <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>  
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
                                                                    < script src = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
           
            \$(\".delete\").click(function(e) {
                var path = \$(this);
                        e.preventDefault();
                BootstrapDialog.confirm(\"Voulez-vous supprimer l'expérience ?\", function(result) {
                    
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
        return "CestomTestBundle:GestionExperience:gestionExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 116,  262 => 115,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  240 => 109,  237 => 108,  228 => 101,  218 => 93,  216 => 92,  208 => 90,  205 => 89,  191 => 81,  185 => 78,  179 => 75,  173 => 72,  167 => 69,  157 => 62,  150 => 58,  144 => 55,  137 => 50,  132 => 49,  130 => 48,  124 => 44,  114 => 40,  110 => 38,  106 => 37,  103 => 36,  93 => 32,  88 => 29,  84 => 28,  70 => 16,  67 => 15,  59 => 10,  54 => 9,  47 => 10,  42 => 9,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_user.html.twig' %} */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 	%}*/
/*     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/formulaires.css')}}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div class="widget-body widget-main no-padding">*/
/*          <h1 class="center">*/
/*             Liste des Expériences*/
/*         </h1>*/
/*     </div>*/
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
/* 							{{ flashMessage }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/*                 {% if  experiences|length > 0 %}*/
/*                     {% for experience in experiences %}*/
/*                         <div class="container">*/
/* */
/*                             <div class="panel-group ">*/
/*                                 <div class="panel panel-primary">*/
/*                                     <div class="panel-heading">*/
/*                                          <a style="padding:10px;" class="white" href="{{path('cestom_user_modifier_experience',{'idexperience':experience.idexperience})}}">*/
/* 												<i class="ace-icon fa fa-pencil bigger-160"></i>*/
/* 											</a>*/
/* 											<a style="padding:10px;" class="red delete" href="{{path('cestom_user_delete_experience',{'idexperience':experience.idexperience})}}">*/
/* 												<i class="ace-icon fa fa-trash bigger-160"></i>*/
/* 											</a> */
/* */
/* 											<a style="padding:10px;" class="white" href="{{path('cestom_user_ajouter_experience')}}">*/
/* 												<i class="ace-icon fa fa-plus bigger-160"></i>*/
/* 											</a> */
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation"> Expérience  </label>*/
/* 											<span class="col-sm-6  label-formation "> {{ 	experience.libelleExperience}}</span> <br>*/
/* 										</div>*/
/* 										<div class="row white-background">*/
/*                                         <label class="col-sm-6  label-formation">Société</label>   <span class="col-sm-6  label-formation"> {{experience.idSociete.nomsociete}}</span> <br>*/
/*                                         </div>*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Compétance acquise </label>    <span class="col-sm-6  label-formation"> {{experience.competenceAcquise}}</span> <br>*/
/*                                         </div>*/
/* 										<div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Durée  </label>   <span class="col-sm-6  label-formation"> {{experience.dureeExperience}}</span> <br>*/
/* 										</div>*/
/*                                         <div class="row white-background">*/
/* 											<label class="col-sm-6  label-formation">Début </label>   <span class="col-sm-6  label-formation"> {{experience.dateDebutExperience}}</span> <br>*/
/* 										</div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <form {{ form_enctype(form) }}  method = "POST"  action ="{{path ('cestom_user_ajouter_experience') }}">	*/
/* */
/*                         {% include "CestomTestBundle:GestionExperience:formulaireExperience.html.twig" %}*/
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
/*                 BootstrapDialog.confirm("Voulez-vous supprimer l'expérience ?", function(result) {*/
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

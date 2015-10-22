<?php

/* CestomUserBundle:GestionFormation:gestionFormation.html.twig */
class __TwigTemplate_6e7edd51a93380d1fcc682bd4d39f73cc9169a609618106dd434ca9b00ca71c9 extends Twig_Template
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
    ";
        } else {
            // asset "f78f4db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
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
            Liste des formations
        </h1>
    </div><!-- /.page-header -->




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

                            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                <br>
                <br>

                ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations"))) > 0)) {
            // line 50
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 51
                echo "                        <div class=\"container\">

                            <div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
                                    <div class=\"panel-heading\">
                                        <a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_modifier_formation", array("idformation" => $this->getAttribute($context["formation"], "idformation", array()))), "html", null, true);
                echo "\">
                                            <i class=\"ace-icon fa fa-pencil bigger-160\"></i>
                                        </a>
                                        <a style=\"padding:10px;\" class=\"red delete\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_delete_formation", array("idformation" => $this->getAttribute($context["formation"], "idformation", array()))), "html", null, true);
                echo "\">
                                            <i class=\"ace-icon fa fa-trash bigger-160\"></i>
                                        </a> 

                                        <a style=\"padding:10px;\" class=\"white\" href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_formation");
                echo "\">
                                            <i class=\"ace-icon fa fa-plus bigger-160\"></i>
                                        </a> 

                                    </div>
                                    <div class=\"panel-body\">


                                        <label> Libelle de la formation</label> : <span> ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
                echo "</span> <br>
                                        <label>Université </label> : <span> ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
                echo "</span> <br>
                                        <label>Diplôme visé </label> :  <span> ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
                echo "</span> <br>
                                        <label>Durée de la formation </label> : <span> ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
                echo "</span> <br>
                                        <label>Date début formation </label> : <span> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
                echo "</span> <br>
                                        <label>Programme de bourse </label> : <span> ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
                echo "</span> <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                    <form ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "  method = \"POST\"  action =\"";
            echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_formation");
            echo "\">\t

                        ";
            // line 86
            $this->loadTemplate("CestomUserBundle:GestionFormation:formulaireFormation.html.twig", "CestomUserBundle:GestionFormation:gestionFormation.html.twig", 86)->display($context);
            // line 87
            echo "                        <div class=\"form-actions center\">
                            <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                Ajouter
                                <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 95
        echo "
            </div> 
        </div>
    </div>   

";
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        // line 103
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>  
       <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>  
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
                                                                    < script src = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
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
        return array (  254 => 110,  250 => 109,  245 => 107,  241 => 106,  237 => 105,  233 => 104,  228 => 103,  225 => 102,  216 => 95,  206 => 87,  204 => 86,  196 => 84,  193 => 83,  180 => 76,  176 => 75,  172 => 74,  168 => 73,  164 => 72,  160 => 71,  149 => 63,  142 => 59,  136 => 56,  129 => 51,  124 => 50,  122 => 49,  116 => 45,  106 => 41,  101 => 38,  97 => 37,  94 => 36,  84 => 32,  79 => 29,  75 => 28,  61 => 16,  58 => 15,  42 => 10,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
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
/*                                         <a style="padding:10px;" class="white" href="{{path('cestom_user_modifier_formation',{'idformation':formation.idformation})}}">*/
/*                                             <i class="ace-icon fa fa-pencil bigger-160"></i>*/
/*                                         </a>*/
/*                                         <a style="padding:10px;" class="red delete" href="{{path('cestom_user_delete_formation',{'idformation':formation.idformation})}}">*/
/*                                             <i class="ace-icon fa fa-trash bigger-160"></i>*/
/*                                         </a> */
/* */
/*                                         <a style="padding:10px;" class="white" href="{{path('cestom_user_ajouter_formation')}}">*/
/*                                             <i class="ace-icon fa fa-plus bigger-160"></i>*/
/*                                         </a> */
/* */
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/* */
/* */
/*                                         <label> Libelle de la formation</label> : <span> {{ formation.libelleFormation}}</span> <br>*/
/*                                         <label>Université </label> : <span> {{formation.iduniv.nomuniv}}</span> <br>*/
/*                                         <label>Diplôme visé </label> :  <span> {{formation.diplomeViseFormation}}</span> <br>*/
/*                                         <label>Durée de la formation </label> : <span> {{formation.dureeFormation}}</span> <br>*/
/*                                         <label>Date début formation </label> : <span> {{formation.dateDebutFormation}}</span> <br>*/
/*                                         <label>Programme de bourse </label> : <span> {{formation.programmeBourse}}</span> <br>*/
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
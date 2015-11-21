<?php

/* CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig */
class __TwigTemplate_b5494d855c3e533fc9d7de01a66e51da42613bc50b462cb73677e6a30fba478d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_user.html.twig", "CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig", 1);
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
            // asset "f78f4db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db_accueilStyles_1.css");
            // line 10
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
<style>
.delete { 
padding:10px;
}
.label-doc{
padding :9px;
margin-left :15px;
font-size: 20px;
font-family: cursive;
font-color: black;
}
</style>
\t";
        } else {
            // asset "f78f4db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f78f4db.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
<style>
.delete { 
padding:10px;
}
.label-doc{
padding :9px;
margin-left :15px;
font-size: 20px;
font-family: cursive;
font-color: black;
}
</style>
\t";
        }
        unset($context["asset_url"]);
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "\t <div>
                        <h1 class=\"center\">
                            Gestion bourse
                        </h1>
                    </div>
    <div class=\"widget-body \">
       <div class=\"widget-main no-padding \">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "<div class=\"alert alert-block alert-success\">
<div class=\"flash-notice\">

";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "<div class=\"alert alert-block alert-danger\">
<div class=\"flash-notice\">

";
            // line 47
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
  <div class=\"col-md-12 col-xs-12 col-sm-12 widget-main row \">
    <div class=\"col-md-6 col-xs-6 col-sm-6  \">
\t";
        // line 54
        if ((twig_length_filter($this->env, (isset($context["bourses"]) ? $context["bourses"] : $this->getContext($context, "bourses"))) > 0)) {
            // line 55
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bourses"]) ? $context["bourses"] : $this->getContext($context, "bourses")));
            foreach ($context['_seq'] as $context["_key"] => $context["bourse"]) {
                // line 56
                echo "
                            <div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
                                    <div class=\"panel-heading\">
                                        
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a  class=\"red delete\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_user_supprimer_fichier", array("idbourse" => $this->getAttribute($context["bourse"], "idBourse", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-160\"></i> 
\t\t\t\t\t\t\t\t\t\t\t</a> 

\t\t\t\t\t\t\t\t<span class=\" \"> ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "typeDoc", array()), "html", null, true);
                echo "</span> \t\t\t
                                     
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t                                 <div style=\"background:white\" class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  \"> Type de document   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 \"> ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "typeDoc", array()), "html", null, true);
                echo "</span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  \"> Etat validation   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 \"> <span class=\"label label-sm label-warning\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "etatDoc", array()), "html", null, true);
                echo "</span></span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  \"> Année universitaire   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 \"> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "anneeUniversitaire", array()), "html", null, true);
                echo " <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  \"> Date d'upload   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 \"> ";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bourse"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                echo " <br>
\t\t\t\t\t\t\t\t\t\t</div>
<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6  \"> Télécharger   </label>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 \"> <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["bourse"], "fichierBourse"), "html", null, true);
                echo " \" target=\"_blank\">Cliquer</a></span></span> <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t

                                    </div>
                                
                                </div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bourse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                ";
        } else {
            // line 101
            echo "<div class=\"panel-group \">
                    <div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
<div class=\"panel-heading\">
                                        
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<span class=\" \"> Aucun document</span>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
                                     
                                    </div>
\t<div class=\"row\">
\t\t<label class=\" label-doc\"> Veuillez ajouter un document <i class=\" blue ace-icon fa fa-plus bigger-120\">  </i> </label>  
        </div>
       <div class=\"row \">
\t\t<label class=\" label-doc\"> <i class=\" green ace-icon fa fa-check bigger-50\"></i> Choisir le type de document  </label>  
       </div>
       <div class=\"row\">
\t\t<label class=\" label-doc\"> <i class=\"green ace-icon fa fa-check bigger-50\"> </i>  Choisir le fichier correspondant   </label>
       </div>
       <div class=\"row\">
\t\t<label class=\" label-doc\"> <i class=\"green ace-icon fa fa-check bigger-50\"> </i>  Valider ... </label>
       </div>
\t\t
\t\t
\t\t\t\t</div>
\t\t</div>\t\t
</div>
                ";
        }
        // line 130
        echo "     </div>
\t    <div class=\"col-md-6 col-xs-6  col-sm-6   \">
\t\t\t<div class=\"panel-group \">
                                <div class=\"panel panel-primary\">
<div class=\"panel-heading\">
                                        
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-plus bigger-160\"></i>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
                                     
                                    </div>
\t\t\t\t<form ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action =\"";
        echo $this->env->getExtension('routing')->getPath("cestom_user_ajouter_fichier");
        echo "\">\t
              
\t\t\t\t\t";
        // line 145
        $this->loadTemplate("CestomUserBundle:GestionBourse:formulaireBourse.html.twig", "CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig", 145)->display($context);
        // line 146
        echo "
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
</div>
</div>                                           
";
    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        // line 157
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
                                                                    < script src = \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
       <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>  

    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
        jQuery(function(\$) {
           
            \$(\".delete\").click(function(e) {
                var path = \$(this);
                        e.preventDefault();
                BootstrapDialog.confirm('Voulez-vous supprimer ce document ?', function(result) {
                    
                    if (result) {
                         
                        window.location.href = path.attr(\"href\");
                    }
                });
            });
            
        });


    </script>
";
    }

    public function getTemplateName()
    {
        return "CestomUserBundle:GestionBourse:ajouterDocBourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 162,  304 => 161,  299 => 159,  295 => 158,  290 => 157,  287 => 156,  275 => 146,  273 => 145,  266 => 143,  251 => 130,  220 => 101,  217 => 100,  202 => 91,  195 => 87,  188 => 83,  181 => 79,  173 => 74,  162 => 66,  155 => 62,  147 => 56,  142 => 55,  140 => 54,  135 => 51,  125 => 47,  120 => 44,  116 => 43,  113 => 42,  103 => 38,  98 => 35,  94 => 34,  85 => 27,  82 => 26,  42 => 10,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_user.html.twig' %} */
/* */
/* */
/*  {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	{% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		*/
/* 	%}*/
/* 		<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* <style>*/
/* .delete { */
/* padding:10px;*/
/* }*/
/* .label-doc{*/
/* padding :9px;*/
/* margin-left :15px;*/
/* font-size: 20px;*/
/* font-family: cursive;*/
/* font-color: black;*/
/* }*/
/* </style>*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	 <div>*/
/*                         <h1 class="center">*/
/*                             Gestion bourse*/
/*                         </h1>*/
/*                     </div>*/
/*     <div class="widget-body ">*/
/*        <div class="widget-main no-padding ">*/
/* {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
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
/* */
/*   <div class="col-md-12 col-xs-12 col-sm-12 widget-main row ">*/
/*     <div class="col-md-6 col-xs-6 col-sm-6  ">*/
/* 	{% if  bourses|length > 0 %}*/
/*                     {% for bourse in bourses %}*/
/* */
/*                             <div class="panel-group ">*/
/*                                 <div class="panel panel-primary">*/
/*                                     <div class="panel-heading">*/
/*                                         */
/* 											*/
/* 											<a  class="red delete" href="{{ path ('cestom_user_supprimer_fichier',{'idbourse': bourse.idBourse }) }}">*/
/* 												<i class="ace-icon fa fa-trash bigger-160"></i> */
/* 											</a> */
/* */
/* 								<span class=" "> {{ bourse.typeDoc}}</span> 			*/
/*                                      */
/*                                     </div>*/
/* 									*/
/* 								*/
/* 	                                 <div style="background:white" class="panel-body">*/
/* 										<div class="row ">*/
/* 											<label class="col-sm-6  "> Type de document   </label>*/
/* 											<span class="col-sm-6 "> {{ bourse.typeDoc}}</span> <br>*/
/* 										</div>*/
/* 										*/
/* 										<div class="row ">*/
/* 											<label class="col-sm-6  "> Etat validation   </label>*/
/* 											<span class="col-sm-6 "> <span class="label label-sm label-warning">{{bourse.etatDoc }}</span></span> <br>*/
/* 										</div>*/
/* 										<div class="row ">*/
/* 											<label class="col-sm-6  "> Année universitaire   </label>*/
/* 											<span class="col-sm-6 "> {{ bourse.anneeUniversitaire}} <br>*/
/* 										</div>*/
/* 										<div class="row ">*/
/* 											<label class="col-sm-6  "> Date d'upload   </label>*/
/* 											<span class="col-sm-6 "> {{ bourse.dateCreation | date ('d/m/Y')}} <br>*/
/* 										</div>*/
/* <div class="row ">*/
/* 											<label class="col-sm-6  "> Télécharger   </label>*/
/* 											<span class="col-sm-6 "> <a href="{{ vich_uploader_asset(bourse, 'fichierBourse') }} " target="_blank">Cliquer</a></span></span> <br>*/
/* 										</div>*/
/* 										*/
/* */
/*                                     </div>*/
/*                                 */
/*                                 </div>*/
/*                             </div>*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/* <div class="panel-group ">*/
/*                     <div class="panel-group ">*/
/*                                 <div class="panel panel-primary">*/
/* <div class="panel-heading">*/
/*                                         */
/* 											*/
/* 											<span class=" "> Aucun document</span>*/
/* 											*/
/* 											*/
/*                                      */
/*                                     </div>*/
/* 	<div class="row">*/
/* 		<label class=" label-doc"> Veuillez ajouter un document <i class=" blue ace-icon fa fa-plus bigger-120">  </i> </label>  */
/*         </div>*/
/*        <div class="row ">*/
/* 		<label class=" label-doc"> <i class=" green ace-icon fa fa-check bigger-50"></i> Choisir le type de document  </label>  */
/*        </div>*/
/*        <div class="row">*/
/* 		<label class=" label-doc"> <i class="green ace-icon fa fa-check bigger-50"> </i>  Choisir le fichier correspondant   </label>*/
/*        </div>*/
/*        <div class="row">*/
/* 		<label class=" label-doc"> <i class="green ace-icon fa fa-check bigger-50"> </i>  Valider ... </label>*/
/*        </div>*/
/* 		*/
/* 		*/
/* 				</div>*/
/* 		</div>		*/
/* </div>*/
/*                 {% endif %}*/
/*      </div>*/
/* 	    <div class="col-md-6 col-xs-6  col-sm-6   ">*/
/* 			<div class="panel-group ">*/
/*                                 <div class="panel panel-primary">*/
/* <div class="panel-heading">*/
/*                                         */
/* 											*/
/* 											*/
/* 												<i class="ace-icon fa fa-plus bigger-160"></i>*/
/* 											*/
/* 											*/
/*                                      */
/*                                     </div>*/
/* 				<form {{ form_enctype(form) }}  method = "POST"  action ="{{path ('cestom_user_ajouter_fichier') }}">	*/
/*               */
/* 					{% include "CestomUserBundle:GestionBourse:formulaireBourse.html.twig" %}*/
/* */
/* 				</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* </div>                                           */
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* 	<script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*                                                                     < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/*        <script src="{{asset('assets/js/bootstrap-dialog.min.js')}}"></script>  */
/* */
/*     <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/* <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*            */
/*             $(".delete").click(function(e) {*/
/*                 var path = $(this);*/
/*                         e.preventDefault();*/
/*                 BootstrapDialog.confirm('Voulez-vous supprimer ce document ?', function(result) {*/
/*                     */
/*                     if (result) {*/
/*                          */
/*                         window.location.href = path.attr("href");*/
/*                     }*/
/*                 });*/
/*             });*/
/*             */
/*         });*/
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */

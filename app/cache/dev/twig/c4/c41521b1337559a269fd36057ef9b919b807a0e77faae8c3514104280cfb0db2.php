<?php

/* CestomAdminBundle:GestionMembre:modifierMembre.html.twig */
class __TwigTemplate_88313aa46549b4c2ecc4bb4b91cc24754c06f3a86c410181418ebe1ec64bdb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierMembre.html.twig", 3);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'navigation' => array($this, 'block_navigation'),
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_style($context, array $blocks = array())
    {
        echo " 
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />
\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
 ";
    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        // line 13
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
         <li>
            
            <a href=\"#\">Gestion des membres</a>
        </li>
       
        <li class=\"active\">Mise à jour info</li>
    </ul>

";
    }

    // line 32
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Mise à jour des infos 

";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "    
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 41
            echo "<div class=\"alert alert-block alert-success\">
<div class=\"flash-notice\">

";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "<div class=\"alert alert-block alert-danger\">
<div class=\"flash-notice\">

";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">
          
      <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<!-- #section:elements.tab -->
\t\t\t\t\t\t\t\t\t<div class=\"tabbable\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-user bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tInfos Génerales Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-building bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                    Villes du Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-graduation-cap bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                    Formations du Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"home\" class=\"tab-pane in active\">
                                                                                      <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">
            <form ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">\t
              
                ";
        // line 103
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireMembre.html.twig", "CestomAdminBundle:GestionMembre:modifierMembre.html.twig", 103)->display($context);
        // line 104
        echo "<div class=\"form-actions center\">
                    <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                        Modifier
                        <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
                                                                                        </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- /section:elements.tab -->
\t\t\t\t\t\t\t\t</div><!-- /.col -->

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!-- /.row -->

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\tvar \$path_assets = \"../assets\";//this will be used in gritter alerts containing images
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t</div><!-- /.row -->
        </div>
    </div>


";
    }

    // line 139
    public function block_javascript($context, array $blocks = array())
    {
        // line 140
        echo "             <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script  src = \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
//datepicker plugin
            //link
            \$('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
                    //show datepicker when clicking on the icon
                    .next().on(ace.click_event, function() {
                \$(this).prev().focus();
            });
            \$('#date-debut').datetimepicker().next().on(ace.click_event, function() {
                \$(this).prev().focus();
            });
        });
        </script>
        
            ";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:modifierMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 150,  269 => 149,  265 => 148,  261 => 147,  257 => 146,  253 => 145,  249 => 144,  244 => 142,  240 => 141,  235 => 140,  232 => 139,  195 => 104,  193 => 103,  186 => 101,  169 => 87,  156 => 77,  146 => 70,  131 => 57,  121 => 53,  116 => 50,  112 => 49,  109 => 48,  99 => 44,  94 => 41,  90 => 40,  87 => 39,  84 => 38,  74 => 32,  55 => 13,  52 => 12,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/*  {% block style %} */
/* <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.custom.min.css')}}" />*/
/* 		<link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />*/
/* 		*/
/* 		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.css')}}" />*/
/*  {% endblock %}*/
/* */
/* */
/* {% block navigation %}*/
/* */
/* */
/*     <ul class="breadcrumb">*/
/*         <li>*/
/*             <i class="ace-icon fa fa-home home-icon"></i>*/
/*             <a href="#">Home</a>*/
/*         </li>*/
/*          <li>*/
/*             */
/*             <a href="#">Gestion des membres</a>*/
/*         </li>*/
/*        */
/*         <li class="active">Mise à jour info</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Mise à jour des infos */
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     */
/*     {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
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
/*     <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/*           */
/*       <div class="row">*/
/* 						<div class="col-xs-12">*/
/* 							<!-- PAGE CONTENT BEGINS -->*/
/* 							<div class="row">*/
/* 								<div class="col-sm-12">*/
/* 									<!-- #section:elements.tab -->*/
/* 									<div class="tabbable">*/
/* 										<ul class="nav nav-tabs" id="myTab">*/
/* 											<li class="active">*/
/* 												<a  href="{{path('cestom_admin_modifier_member',{'idmembre':idmembre})}}">*/
/* 													<i class="green ace-icon fa fa-user bigger-120"></i>*/
/* 													Infos Génerales Membre*/
/* 												</a>*/
/* 											</li>*/
/* */
/* 											<li class="dropdown">*/
/* 												<a  href="{{path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">*/
/* 													<i class="green ace-icon fa fa-building bigger-120"></i>*/
/* 													*/
/*                                                                                                     Villes du Membre*/
/* 												</a>*/
/* */
/* 												*/
/* 											</li>*/
/* */
/* 											<li class="dropdown">*/
/* 												<a  href="{{path('cestom_admin_ajouter_formation',{'idmembre':idmembre})}}">*/
/* 													<i class="green ace-icon fa fa-graduation-cap bigger-120"></i>*/
/* 													*/
/*                                                                                                     Formations du Membre*/
/* 												</a>*/
/* */
/* 												*/
/* 											</li>*/
/* 										</ul>*/
/* */
/* 										<div class="tab-content">*/
/* 											<div id="home" class="tab-pane in active">*/
/*                                                                                       <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/*             <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_member',{idmembre:idmembre})}}">	*/
/*               */
/*                 {% include "CestomAdminBundle:GestionMembre:formulaireMembre.html.twig" %}*/
/* <div class="form-actions center">*/
/*                     <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                         Modifier*/
/*                         <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*                                                                                         </div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<!-- /section:elements.tab -->*/
/* 								</div><!-- /.col -->*/
/* */
/* 								*/
/* 								*/
/* 							</div><!-- /.row -->*/
/* */
/* 							*/
/* */
/* 							<script type="text/javascript">*/
/* 								var $path_assets = "../assets";//this will be used in gritter alerts containing images*/
/* 							</script>*/
/* */
/* 							<!-- PAGE CONTENT ENDS -->*/
/* 						</div><!-- /.col -->*/
/* 					</div><!-- /.row -->*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*              <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/moment.min.js')}}"></script>*/
/* */
/*     <script src="{{asset('assets/js/date-time/bootstrap-datetimepicker.min.js')}}">< /script>*/
/*                 < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/*     <script  src = "{{asset('assets/js/jquery.ui.addresspicker.js')}}"></script>*/
/*     <script src="{{asset('assets/js/jquery.maskedinput.min.js')}}"></script>*/
/*    <script src="{{asset('assets/js/bootstrap-tag.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* //datepicker plugin*/
/*             //link*/
/*             $('.date-picker').datepicker({*/
/*                 autoclose: true,*/
/*                 todayHighlight: true*/
/*             })*/
/*                     //show datepicker when clicking on the icon*/
/*                     .next().on(ace.click_event, function() {*/
/*                 $(this).prev().focus();*/
/*             });*/
/*             $('#date-debut').datetimepicker().next().on(ace.click_event, function() {*/
/*                 $(this).prev().focus();*/
/*             });*/
/*         });*/
/*         </script>*/
/*         */
/*             {% endblock %}*/
/* */
/* */
/* */

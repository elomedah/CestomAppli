<?php

/* CestomAdminBundle:GestionMembre:ajouterMembre.html.twig */
class __TwigTemplate_357851272a06170ad34213f9607dd8ff08933c089ac4272b817c1a8560f3fe25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterMembre.html.twig", 3);
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

    // line 13
    public function block_navigation($context, array $blocks = array())
    {
        // line 14
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
         <li>
            
            <a href=\"#\">Gestion des membres</a>
        </li>
       
        <li class=\"active\">Ajouter un membre</li>
    </ul>

";
    }

    // line 33
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Ajout d'un nouveau membre

";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "    
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "<div class=\"alert alert-block alert-danger\">
<div class=\"flash-notice\">

";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "


    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">
            <form ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \" ";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_member");
        echo "\">\t
              
                ";
        // line 56
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireMembre.html.twig", "CestomAdminBundle:GestionMembre:ajouterMembre.html.twig", 56)->display($context);
        // line 57
        echo "<div class=\"form-actions center\">
                    <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                        Ajouter
                        <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "             <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script  src = \"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
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
        return "CestomAdminBundle:GestionMembre:ajouterMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  177 => 80,  173 => 79,  169 => 78,  165 => 77,  161 => 76,  157 => 75,  152 => 73,  148 => 72,  143 => 71,  140 => 70,  125 => 57,  123 => 56,  116 => 54,  109 => 49,  99 => 45,  94 => 42,  90 => 41,  87 => 40,  84 => 39,  74 => 33,  55 => 14,  52 => 13,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*         <li class="active">Ajouter un membre</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Ajout d'un nouveau membre*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     */
/*     {% for flashMessage in app.session.flashbag.get('messageerror') %}*/
/* <div class="alert alert-block alert-danger">*/
/* <div class="flash-notice">*/
/* */
/* {{ flashMessage }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* */
/* */
/* */
/*     <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/*             <form {{ form_enctype(form) }}  method = "POST"  action = " {{ path('cestom_admin_ajouter_member')  }}">	*/
/*               */
/*                 {% include "CestomAdminBundle:GestionMembre:formulaireMembre.html.twig" %}*/
/* <div class="form-actions center">*/
/*                     <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                         Ajouter*/
/*                         <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </form>*/
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

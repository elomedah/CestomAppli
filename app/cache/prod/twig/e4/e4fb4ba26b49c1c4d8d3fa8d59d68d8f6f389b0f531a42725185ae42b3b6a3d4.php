<?php

/* CestomUserBundle:GestionCompte:gestionCompte.html.twig */
class __TwigTemplate_82b55fb58a763c4d947337f2d0f7d2ce154f0612ab34272c7b188ed5a7a643a4 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_0") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_accueilStyles_1.css");
            // line 12
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_1") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.carousel_2.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_2") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.transitions_3.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
            // asset "af6ed8a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a_3") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a_owl.theme_4.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        } else {
            // asset "af6ed8a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af6ed8a") : $this->env->getExtension('assets')->getAssetUrl("css/af6ed8a.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t
\t ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
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
     <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">
            <form ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"\">\t
              
                ";
        // line 40
        $this->loadTemplate("CestomUserBundle:GestionCompte:formulaireUser.html.twig", "CestomUserBundle:GestionCompte:gestionCompte.html.twig", 40)->display($context);
        // line 41
        echo "<div class=\"form-actions center\">
                    <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                        Modifier
                        <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
                                                                                     
\t\t\t\t\t\t\t
\t
\t
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "\t
\t <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
              < script src = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
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
        return array (  182 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  155 => 57,  152 => 56,  135 => 41,  133 => 40,  128 => 38,  123 => 35,  113 => 31,  108 => 28,  104 => 27,  101 => 26,  91 => 22,  86 => 19,  82 => 18,  79 => 17,  76 => 16,  42 => 12,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
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
/* 	*/
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
/* */
/*      <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/*             <form {{ form_enctype(form) }}  method = "POST"  action = "">	*/
/*               */
/*                 {% include "CestomUserBundle:GestionCompte:formulaireUser.html.twig" %}*/
/* <div class="form-actions center">*/
/*                     <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                         Modifier*/
/*                         <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*                                                                                      */
/* 							*/
/* 	*/
/* 	*/
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* 	*/
/* 	 <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/moment.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-datetimepicker.min.js')}}">< /script>*/
/*               < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/* <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/* <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/* 	<script type="text/javascript">*/
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
/*            */
/*         });*/
/*         </script>*/
/* {% endblock %}*/
/* */

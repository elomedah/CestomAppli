<?php

/* CestomAdminBundle:GestionMembre:modifierMembre.html.twig */
class __TwigTemplate_4df2d5f61e09ec20f97d667332ced77a91c826a2df9842e22695e2ea4e95de50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

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
        $context['_parent'] = (array) $context;
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
        $context['_parent'] = (array) $context;
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
        $this->env->loadTemplate("CestomAdminBundle:GestionMembre:formulaireMembre.html.twig")->display($context);
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
        return array (  281 => 150,  277 => 149,  273 => 148,  269 => 147,  265 => 146,  261 => 145,  257 => 144,  252 => 142,  248 => 141,  243 => 140,  240 => 139,  203 => 104,  201 => 103,  194 => 101,  177 => 87,  164 => 77,  154 => 70,  139 => 57,  129 => 53,  124 => 50,  120 => 49,  117 => 48,  107 => 44,  102 => 41,  98 => 40,  95 => 39,  92 => 38,  82 => 32,  63 => 13,  60 => 12,  54 => 8,  49 => 6,  45 => 5,  40 => 4,  11 => 3,);
    }
}

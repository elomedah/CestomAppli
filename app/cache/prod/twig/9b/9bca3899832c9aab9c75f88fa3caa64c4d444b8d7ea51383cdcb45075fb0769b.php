<?php

/* ::base_public.html.twig */
class __TwigTemplate_79c71ae5414f9dea86ebe7578723c5de09247e887ccd90b8861aaf400d82bd0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "\t
\t\t";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "\t\t
\t\t
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "CESTOM";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9e056b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_0") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_bootstrap.min_1.css");
            // line 17
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_1") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_bootstrap-theme.min_2.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_2") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_font-awesome.min_3.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
            // asset "e9e056b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b_3") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b_colorbox_4.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        } else {
            // asset "e9e056b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9e056b") : $this->env->getExtension('assets')->getAssetUrl("css/e9e056b.css");
            echo "\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 19
        echo "\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t\t
\t\t";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"/>
\t\t\t";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "afbcea7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_0") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_bootstrap.min_1.js");
            // line 33
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_1") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_script_2.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "afbcea7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7_2") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7_jquery.colorbox-min_3.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "afbcea7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_afbcea7") : $this->env->getExtension('assets')->getAssetUrl("js/afbcea7.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(\"a.zoom\").colorbox();
\t\t\t</script>

\t\t";
    }

    public function getTemplateName()
    {
        return "::base_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 35,  129 => 33,  125 => 28,  122 => 27,  119 => 26,  114 => 23,  111 => 22,  107 => 19,  75 => 17,  70 => 11,  67 => 10,  61 => 8,  53 => 41,  51 => 26,  48 => 25,  46 => 22,  42 => 20,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}CESTOM{% endblock %}</title>*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         {% block stylesheets %}*/
/* 			{% stylesheets filter='cssrewrite'*/
/* 				'bundles/cestomarticle/css/bootstrap.min.css'*/
/* 				'bundles/cestomarticle/css/bootstrap-theme.min.css'*/
/* 				'bundles/cestomarticle/css/font-awesome.min.css'*/
/* 				'bundles/cestomarticle/css/colorbox.css'*/
/* 			%}*/
/* 				<link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/* 			{% endstylesheets %}*/
/* 		{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* 		{% block body %}*/
/* 		*/
/* 		{% endblock %}*/
/* 	*/
/* 		{% block javascripts %}*/
/* 			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"/>*/
/* 			{% javascripts */
/* 				'@CestomArticleBundle/Resources/public/js/bootstrap.min.js'*/
/* 				'@CestomArticleBundle/Resources/public/js/script.js'*/
/* 				'@CestomArticleBundle/Resources/public/js/jquery.colorbox-min.js'*/
/* 			%}*/
/* 				<script src="{{ asset_url }}" type="text/javascript"></script>*/
/* 			{% endjavascripts %}*/
/* 			*/
/* 			<script type="text/javascript">*/
/* 				$("a.zoom").colorbox();*/
/* 			</script>*/
/* */
/* 		{% endblock %}*/
/* 		*/
/* 		*/
/*     </body>*/
/* </html>*/
/* */

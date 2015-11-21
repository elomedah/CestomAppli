<?php

/* CestomTestBundle:Default:index.html.twig */
class __TwigTemplate_5810ae6fcaf67b30d198fbf21df45e0464832194751805b45746f0278e87b323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_user.html.twig", "CestomTestBundle:Default:index.html.twig", 1);
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f78f4db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db_0") : $this->env->getExtension('assets')->getAssetUrl("css/f78f4db_accueilStyles_1.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "f78f4db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f78f4db") : $this->env->getExtension('assets')->getAssetUrl("css/f78f4db.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/formulaires.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\tBonjour ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true);
        echo "
\t<div title=\"Test content\">
\t\t<span class=\"mar-right-30\">
\t\t\t<a class=\"mar-right-30\" href=\"#\" onclick=\"javascript:getPage('/page1','boite7');\">Page1</a>
\t\t</span>
\t\t<span>
\t\t\t<a class=\"mar-right-30\" href=\"#\" onclick=\"javascript:getPage('/page2','boite8');\">Page2</a>
\t\t</span>
\t\t<div id=\"boite7\" class=\"blue mar-30\">div1</div>
\t\t<div id=\"boite8\" class=\"yellow mar-30\">div2</div>
\t\t
\t</div>
\t<style>
\t.blue{
\tcolor: blue;
}
.yellow{
\tcolor: yellow;
}
.red{
\tcolor: red;
}
.hiden{
\tdisplay:none;
}

.blue-bg{
\tbackground-color: blue;
}
.left-5{
\tleft:5px;
}
.left-10{
\tleft:10px;
}
.left-20{
\tleft:20px;
}
.left-25{
\tleft:25px;
}
.left-30{
\tleft:30px;
}
.right-5{
\tright:5px;
}
.right-10{
\tright:10px;
}
.right-20{
\tright:20px;
}
.right-25{
\tright:25px;
}
.right-30{
\tright:30px;
}
.top-5{
\ttop:5px;
}
.top-10{
\ttop:10px;
}
.top-20{
\ttop:20px;
}
.top-25{
\ttop:25px;
}
.top-30{
\ttop:30px;
}
.bottom-5{
\tbottom:5px;
}
.bottom-10{
\tbottom:10px;
}
.bottom-20{
\tbottom:20px;
}
.bottom-25{
\tbottom:25px;
}
.bottom-30{
\tbottom:30px;
}
.mar-left-5{
\tmargin-left:5px;
}
.mar-left-10{
\tmargin-left:10px;
}
.mar-left-20{
\tmargin-left:20px;
}
.mar-left-25{
\tmargin-left:25px;
}
.mar-left-30{
\tmargin-left:30px;
}.mar-30{
\tmargin:30px;
}
.mar-right-5{
\tmargin-right:5px;
}
.mar-right-10{
\tmargin-right:10px;
}
.mar-right-20{
\tmargin-right:20px;
}
.mar-right-25{
\tmargin-right:25px;
}
.mar-right-30{
\tmargin-right:30px;
}
.mar-top-5{
\tmargin-top:5px;
}
.mar-top-10{
\tmargin-top:10px;
}
.mar-top-20{
\tmargin-top:20px;
}
.mar-top-25{
\tmargin-top:25px;
}
.mar-top-30{
\tmargin-top:30px;
}
.mar-bottom-5{
\tmargin-bottom:5px;
}
.mar-bottom-10{
\tmargin-bottom:10px;
}
.mar-bottom-20{
\tmargin-bottom:20px;
}
.mar-bottom-25{
\tmargin-bottom:25px;
}
.mar-bottom-30{
\tmargin-bottom:30px;
}
.pad-left-5{
\tpadding-left:5px;
}
.pad-left-10{
\tpadding-left:10px;
}
.pad-left-20{
\tpadding-left:20px;
}
.pad-left-25{
\tpadding-left:25px;
}
.pad-left-30{
\tpadding-left:30px;
}
.pad-right-5{
\tpadding-right:5px;
}
.pad-right-10{
\tpadding-right:10px;
}
.pad-right-20{
\tpadding-right:20px;
}
.pad-right-25{
\tpadding-right:25px;
}
.pad-30{
\tpadding:30px;
}
.pad-right-30{
\tpadding-right:30px;
}
.pad-top-5{
\tpadding-top:5px;
}
.pad-top-10{
\tpadding-top:10px;
}
.pad-top-20{
\tpadding-top:20px;
}
.pad-top-25{
\tpadding-top:25px;
}
.pad-top-30{
\tpadding-top:30px;
}
.pad-bottom-5{
\tpadding-bottom:5px;
}
.pad-bottom-10{
\tpadding-bottom:10px;
}
.pad-bottom-20{
\tpadding-bottom:20px;
}
.pad-bottom-25{
\tpadding-bottom:25px;
}
.pad-bottom-30{
\tpadding-bottom:30px;
}
.underline{
\ttext-decoration:underline;
}
.center{
\ttext-align:center;
}



\t</style>
";
    }

    // line 240
    public function block_javascripts($context, array $blocks = array())
    {
        // line 241
        echo "<script>

</script>
";
    }

    public function getTemplateName()
    {
        return "CestomTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 241,  302 => 240,  70 => 14,  67 => 13,  59 => 9,  54 => 8,  47 => 9,  42 => 8,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base_user.html.twig' %} */
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
/* {% block body %}*/
/* 	Bonjour {{nom}} {{prenom}}*/
/* 	<div title="Test content">*/
/* 		<span class="mar-right-30">*/
/* 			<a class="mar-right-30" href="#" onclick="javascript:getPage('/page1','boite7');">Page1</a>*/
/* 		</span>*/
/* 		<span>*/
/* 			<a class="mar-right-30" href="#" onclick="javascript:getPage('/page2','boite8');">Page2</a>*/
/* 		</span>*/
/* 		<div id="boite7" class="blue mar-30">div1</div>*/
/* 		<div id="boite8" class="yellow mar-30">div2</div>*/
/* 		*/
/* 	</div>*/
/* 	<style>*/
/* 	.blue{*/
/* 	color: blue;*/
/* }*/
/* .yellow{*/
/* 	color: yellow;*/
/* }*/
/* .red{*/
/* 	color: red;*/
/* }*/
/* .hiden{*/
/* 	display:none;*/
/* }*/
/* */
/* .blue-bg{*/
/* 	background-color: blue;*/
/* }*/
/* .left-5{*/
/* 	left:5px;*/
/* }*/
/* .left-10{*/
/* 	left:10px;*/
/* }*/
/* .left-20{*/
/* 	left:20px;*/
/* }*/
/* .left-25{*/
/* 	left:25px;*/
/* }*/
/* .left-30{*/
/* 	left:30px;*/
/* }*/
/* .right-5{*/
/* 	right:5px;*/
/* }*/
/* .right-10{*/
/* 	right:10px;*/
/* }*/
/* .right-20{*/
/* 	right:20px;*/
/* }*/
/* .right-25{*/
/* 	right:25px;*/
/* }*/
/* .right-30{*/
/* 	right:30px;*/
/* }*/
/* .top-5{*/
/* 	top:5px;*/
/* }*/
/* .top-10{*/
/* 	top:10px;*/
/* }*/
/* .top-20{*/
/* 	top:20px;*/
/* }*/
/* .top-25{*/
/* 	top:25px;*/
/* }*/
/* .top-30{*/
/* 	top:30px;*/
/* }*/
/* .bottom-5{*/
/* 	bottom:5px;*/
/* }*/
/* .bottom-10{*/
/* 	bottom:10px;*/
/* }*/
/* .bottom-20{*/
/* 	bottom:20px;*/
/* }*/
/* .bottom-25{*/
/* 	bottom:25px;*/
/* }*/
/* .bottom-30{*/
/* 	bottom:30px;*/
/* }*/
/* .mar-left-5{*/
/* 	margin-left:5px;*/
/* }*/
/* .mar-left-10{*/
/* 	margin-left:10px;*/
/* }*/
/* .mar-left-20{*/
/* 	margin-left:20px;*/
/* }*/
/* .mar-left-25{*/
/* 	margin-left:25px;*/
/* }*/
/* .mar-left-30{*/
/* 	margin-left:30px;*/
/* }.mar-30{*/
/* 	margin:30px;*/
/* }*/
/* .mar-right-5{*/
/* 	margin-right:5px;*/
/* }*/
/* .mar-right-10{*/
/* 	margin-right:10px;*/
/* }*/
/* .mar-right-20{*/
/* 	margin-right:20px;*/
/* }*/
/* .mar-right-25{*/
/* 	margin-right:25px;*/
/* }*/
/* .mar-right-30{*/
/* 	margin-right:30px;*/
/* }*/
/* .mar-top-5{*/
/* 	margin-top:5px;*/
/* }*/
/* .mar-top-10{*/
/* 	margin-top:10px;*/
/* }*/
/* .mar-top-20{*/
/* 	margin-top:20px;*/
/* }*/
/* .mar-top-25{*/
/* 	margin-top:25px;*/
/* }*/
/* .mar-top-30{*/
/* 	margin-top:30px;*/
/* }*/
/* .mar-bottom-5{*/
/* 	margin-bottom:5px;*/
/* }*/
/* .mar-bottom-10{*/
/* 	margin-bottom:10px;*/
/* }*/
/* .mar-bottom-20{*/
/* 	margin-bottom:20px;*/
/* }*/
/* .mar-bottom-25{*/
/* 	margin-bottom:25px;*/
/* }*/
/* .mar-bottom-30{*/
/* 	margin-bottom:30px;*/
/* }*/
/* .pad-left-5{*/
/* 	padding-left:5px;*/
/* }*/
/* .pad-left-10{*/
/* 	padding-left:10px;*/
/* }*/
/* .pad-left-20{*/
/* 	padding-left:20px;*/
/* }*/
/* .pad-left-25{*/
/* 	padding-left:25px;*/
/* }*/
/* .pad-left-30{*/
/* 	padding-left:30px;*/
/* }*/
/* .pad-right-5{*/
/* 	padding-right:5px;*/
/* }*/
/* .pad-right-10{*/
/* 	padding-right:10px;*/
/* }*/
/* .pad-right-20{*/
/* 	padding-right:20px;*/
/* }*/
/* .pad-right-25{*/
/* 	padding-right:25px;*/
/* }*/
/* .pad-30{*/
/* 	padding:30px;*/
/* }*/
/* .pad-right-30{*/
/* 	padding-right:30px;*/
/* }*/
/* .pad-top-5{*/
/* 	padding-top:5px;*/
/* }*/
/* .pad-top-10{*/
/* 	padding-top:10px;*/
/* }*/
/* .pad-top-20{*/
/* 	padding-top:20px;*/
/* }*/
/* .pad-top-25{*/
/* 	padding-top:25px;*/
/* }*/
/* .pad-top-30{*/
/* 	padding-top:30px;*/
/* }*/
/* .pad-bottom-5{*/
/* 	padding-bottom:5px;*/
/* }*/
/* .pad-bottom-10{*/
/* 	padding-bottom:10px;*/
/* }*/
/* .pad-bottom-20{*/
/* 	padding-bottom:20px;*/
/* }*/
/* .pad-bottom-25{*/
/* 	padding-bottom:25px;*/
/* }*/
/* .pad-bottom-30{*/
/* 	padding-bottom:30px;*/
/* }*/
/* .underline{*/
/* 	text-decoration:underline;*/
/* }*/
/* .center{*/
/* 	text-align:center;*/
/* }*/
/* */
/* */
/* */
/* 	</style>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */

<?php

/* ::base_user.html.twig */
class __TwigTemplate_cd5f1cacf74e26767939913e45e1f360c19be7132fdd513957f26687f1c1904e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icone-site-cestom.ico"), "html", null, true);
        echo "\" />
        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTable.min.css"), "html", null, true);
        echo "\" />
   <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        
        <!-- text fonts -->
      <!--  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-fonts.css"), "html", null, true);
        echo "\" /> -->

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>   
       
<!-- Date picker css -->
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
      
";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
              ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "              ";
        $this->displayBlock('menu', $context, $blocks);
        // line 84
        echo "
                  

\t\t";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "                
\t\t";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 192
        echo "\t
<!-- Ace script -->
   <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
       
 
\t\t";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 207
        echo "\t\t
    </body>
  
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CESTOM";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "\t\t";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 logo-slogan\">
\t\t\t\t\t<div style=\"padding:20px\" class=\"defit\">Rélevons le défi</div>
\t\t\t\t\t";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d10e26c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c_logo-cestom-entete_1.png");
            // line 38
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
\t\t\t\t\t";
        } else {
            // asset "d10e26c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d10e26c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/d10e26c.png");
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo-CESTOM\"/>
\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 40
        echo "\t\t\t\t\t<div class=\"coordination\">
\t\t\t\t\t\t<span>COORDINATION DES</span>
\t\t\t\t\t\t<span>ETUDIANTS ET</span>
\t\t\t\t\t\t<span>STAGIAIRES TOGOLAIS</span>
\t\t\t\t\t\t<span>AU MAROC</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 text-right boutons_header\" >
\t\t\t\t\t<span class=\"fa fa-2x fa-bars option_bars\"></span>
\t\t\t\t\t<span class=\"fa fa-2x fa-search \"></span>
\t\t\t\t\t<span class=\"fa fa-2x fa-user \"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t
\t\t";
    }

    // line 57
    public function block_menu($context, array $blocks = array())
    {
        // line 58
        echo "\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t
\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li ><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("cestom_user_homepage");
        echo "\" >Mon compte </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_formation");
        echo "\" >Mes formations </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("cestom_user_gestion_ville");
        echo "\"> Mes villes </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Dossier bourse </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Prise en charge</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
\t\t";
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        // line 88
        echo "\t\t
\t\t";
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "                 <footer>
\t\t<div class=\"bureau_executif\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t <i class=\"fa fa-database fa-5x boutons_footer\"></i>
\t\t\t\t\t\t<h3>LE BUREAU EXECUTIF</h3>
\t\t\t\t\t\t<h2><a href=\"#\">TOYI LENNAH</a></h2>
\t\t\t\t\t\t<div>Le Sécrétaire générale</div>
\t\t\t\t\t\t<div>Téléphone: 0021234578964</div>
\t\t\t\t\t\t<div>Email: tlennah@gmail.com</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-search-plus fa-5x boutons_footer\"></span></a>
\t\t\t\t\t\t<h3>REHERCHER</h3>
\t\t\t\t\t\t<div><a href=\"#\">RETROUVER UN MEMBRE</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 newsletter\">
\t\t\t\t\t\t<div ><h3>ETRE INFORME DES DERNIERES NOUVELLES
\t\t\t\t\t\t\tS'INSCRIRE A LA NEWSLETTER</h3>
\t\t\t\t\t\t\t<input type=\"email\" name=\"newsletter_email\" class=\"input-mail\" placeholder=\"exemple@cestom.org\" size=\"30\" maxlength=\"50\" />
\t\t\t\t\t\t\t<input type=\"submit\" value=\"ENREGISTRER\" class=\"boutton_enregistrer\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>NOUS SUIVRE SUR:
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/groups/CESTOM228/1094096120618025\" class=\"fa fa-facebook fa-2x reseaux-sociaux\"></a>
\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x reseaux-sociaux\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2 liens-utils\">
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-info-circle fa-5x boutons_footer\"></a>
\t\t\t\t\t\t<h3>INFOS PRATIQUES</h3>
\t\t\t\t\t\t<div><a href=\"#\">Retrouvez un ensemble de liens utiles</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<i class=\"fa fa-home fa-5x boutons_footer\"></i>
\t\t\t\t\t\t<h3>LE CONSULAT</h3>
\t\t\t\t\t\t<div><a href=\"#\">CONTACTER LE CONSULAT</a></div>
\t\t\t\t\t\t<div>Téléphone: 0522396048</div>
\t\t\t\t\t\t<a href=\"www.ambassadedutogoaumaroc.org\">Site:www.consultogomaroc.org</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"nous_contacter\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>Coordination</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Présentation</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Historique</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">le bureau exécutif</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Les sections</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Autres organes</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>INFOS PRATIQUES</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\" class=\"intro\">Le TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Etudier au MAROC</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Aller au TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Paser ses vaccances au TOGO</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Carte de séjour au MAROC</a></div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<h3>LE CONSULAT</h3>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Présentation</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Carte d'imatriculation consulaire</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Attestations de prise en charge</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Légalisations et Authentifications</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Laisser passer</a></div>
\t\t\t\t\t\t\t<div><a  class=\"intro\" href=\"#\">Contacter le consulat</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"footer-coordinations\">
\t\t\t\t\t\t\t\t<span class=\"col-sm-6 logo-cestom-footer\">
\t\t\t\t\t\t\t\t\t";
        // line 169
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ced26d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d_logo-cestom-footer_1.png");
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "4ced26d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ced26d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/4ced26d.png");
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 172
        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"col-sm-6 coordination\">
\t\t\t\t\t\t\t\t\t<span>Coordination des</span>
\t\t\t\t\t\t\t\t\t<span>Etudiants et</span>
\t\t\t\t\t\t\t\t\t<span>Stagiaires Togolais</span>
\t\t\t\t\t\t\t\t\t<span>au Maroc</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cestom-mail\">
\t\t\t\t\t\t\temail: <a href=\"https:mail.yahoo.com\">cestom_be@yahoo.fr</a>/<a href=\"https://mail.google.com\">cestom.be@gmail.com</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<label class=\"copiright\">© 2009-2015, CESTOM. Certains droits réservés.</label>
\t</footer>
                 ";
    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        // line 205
        echo "\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "::base_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 205,  382 => 204,  359 => 172,  345 => 170,  341 => 169,  262 => 92,  259 => 91,  254 => 88,  251 => 87,  239 => 76,  235 => 75,  231 => 74,  213 => 58,  210 => 57,  190 => 40,  176 => 38,  172 => 37,  165 => 32,  162 => 31,  158 => 28,  155 => 27,  149 => 5,  141 => 207,  139 => 204,  133 => 201,  128 => 199,  124 => 198,  119 => 196,  114 => 194,  110 => 192,  108 => 91,  105 => 90,  103 => 87,  98 => 84,  95 => 57,  93 => 31,  89 => 29,  87 => 27,  82 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  53 => 14,  45 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}CESTOM{% endblock %}</title>*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('icone-site-cestom.ico') }}" />*/
/*         */
/*         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/dataTable.min.css')}}" />*/
/*    <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         */
/*         <!-- text fonts -->*/
/*       <!--  <link rel="stylesheet" href="{{ asset('assets/css/ace-fonts.css')}}" /> -->*/
/* */
/*         <!-- ace styles -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css')}}" />*/
/* */
/*         <script src="{{ asset('assets/js/ace-extra.min.js')}}"></script>   */
/*        */
/* <!-- Date picker css -->*/
/* <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />	*/
/* 		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.css')}}" />*/
/*       */
/* {% block stylesheets %}*/
/* 		{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*               {% block header %}*/
/* <header>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-6 logo-slogan">*/
/* 					<div style="padding:20px" class="defit">Rélevons le défi</div>*/
/* 					{% image '@CestomArticleBundle/Resources/public/images/logo-cestom-entete.png' %}*/
/* 						<img src="{{ asset_url }}" alt="logo-CESTOM"/>*/
/* 					{% endimage %}*/
/* 					<div class="coordination">*/
/* 						<span>COORDINATION DES</span>*/
/* 						<span>ETUDIANTS ET</span>*/
/* 						<span>STAGIAIRES TOGOLAIS</span>*/
/* 						<span>AU MAROC</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6 text-right boutons_header" >*/
/* 					<span class="fa fa-2x fa-bars option_bars"></span>*/
/* 					<span class="fa fa-2x fa-search "></span>*/
/* 					<span class="fa fa-2x fa-user "></span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</header>*/
/* 	*/
/* 		{% endblock %}*/
/*               {% block menu %}*/
/* 		<nav class="navbar navbar-default">*/
/* 			<div class="container-fluid">*/
/* 			<!-- Brand and toggle get grouped for better mobile display -->*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 						<span class="sr-only">Navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						*/
/* 					</button>					*/
/* 				</div>*/
/* */
/* 			<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li ><a href="{{path ('cestom_user_homepage') }}" >Mon compte </a></li>*/
/* 						<li><a href="{{ path ('cestom_user_gestion_formation') }}" >Mes formations </a></li>*/
/* 						<li><a href="{{ path ('cestom_user_gestion_ville') }}"> Mes villes </a></li>*/
/* 						<li><a href="#">Dossier bourse </a></li>*/
/* 						<li><a href="#">Prise en charge</a></li>*/
/* 					</ul>*/
/* 				</div><!-- /.navbar-collapse -->*/
/* 			</div><!-- /.container-fluid -->*/
/* 		</nav>*/
/* 		{% endblock %}*/
/* */
/*                   */
/* */
/* 		{% block body %}*/
/* 		*/
/* 		{% endblock %}*/
/*                 */
/* 		{% block footer %}*/
/*                  <footer>*/
/* 		<div class="bureau_executif">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3">*/
/* 						 <i class="fa fa-database fa-5x boutons_footer"></i>*/
/* 						<h3>LE BUREAU EXECUTIF</h3>*/
/* 						<h2><a href="#">TOYI LENNAH</a></h2>*/
/* 						<div>Le Sécrétaire générale</div>*/
/* 						<div>Téléphone: 0021234578964</div>*/
/* 						<div>Email: tlennah@gmail.com</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 						<a href="#"><span class="fa fa-search-plus fa-5x boutons_footer"></span></a>*/
/* 						<h3>REHERCHER</h3>*/
/* 						<div><a href="#">RETROUVER UN MEMBRE</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3 newsletter">*/
/* 						<div ><h3>ETRE INFORME DES DERNIERES NOUVELLES*/
/* 							S'INSCRIRE A LA NEWSLETTER</h3>*/
/* 							<input type="email" name="newsletter_email" class="input-mail" placeholder="exemple@cestom.org" size="30" maxlength="50" />*/
/* 							<input type="submit" value="ENREGISTRER" class="boutton_enregistrer" />*/
/* 						</div>*/
/* 						<div>NOUS SUIVRE SUR:*/
/* 							<a href="https://www.facebook.com/groups/CESTOM228/1094096120618025" class="fa fa-facebook fa-2x reseaux-sociaux"></a>*/
/* 							<i class="fa fa-twitter fa-2x reseaux-sociaux"></i>*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-2 liens-utils">*/
/* 						<a href="#" class="fa fa-info-circle fa-5x boutons_footer"></a>*/
/* 						<h3>INFOS PRATIQUES</h3>*/
/* 						<div><a href="#">Retrouvez un ensemble de liens utiles</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-2">*/
/* 						<i class="fa fa-home fa-5x boutons_footer"></i>*/
/* 						<h3>LE CONSULAT</h3>*/
/* 						<div><a href="#">CONTACTER LE CONSULAT</a></div>*/
/* 						<div>Téléphone: 0522396048</div>*/
/* 						<a href="www.ambassadedutogoaumaroc.org">Site:www.consultogomaroc.org</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="nous_contacter">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-3">*/
/* 							<h3>Coordination</h3>*/
/* 							<div><a  class="intro" href="#">Présentation</a></div>*/
/* 							<div><a  class="intro" href="#">Historique</a></div>*/
/* 							<div><a  class="intro" href="#">le bureau exécutif</a></div>*/
/* 							<div><a  class="intro" href="#">Les sections</a></div>*/
/* 							<div><a  class="intro" href="#">Autres organes</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 							<h3>INFOS PRATIQUES</h3>*/
/* 							<div><a  class="intro" href="#" class="intro">Le TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Etudier au MAROC</a></div>*/
/* 							<div><a  class="intro" href="#">Aller au TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Paser ses vaccances au TOGO</a></div>*/
/* 							<div><a  class="intro" href="#">Carte de séjour au MAROC</a></div>	*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 							<h3>LE CONSULAT</h3>*/
/* 							<div><a  class="intro" href="#">Présentation</a></div>*/
/* 							<div><a  class="intro" href="#">Carte d'imatriculation consulaire</a></div>*/
/* 							<div><a  class="intro" href="#">Attestations de prise en charge</a></div>*/
/* 							<div><a  class="intro" href="#">Légalisations et Authentifications</a></div>*/
/* 							<div><a  class="intro" href="#">Laisser passer</a></div>*/
/* 							<div><a  class="intro" href="#">Contacter le consulat</a></div>*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 					*/
/* 						<div class="row">*/
/* 							<div class="footer-coordinations">*/
/* 								<span class="col-sm-6 logo-cestom-footer">*/
/* 									{% image '@CestomArticleBundle/Resources/public/images/logo-cestom-footer.png' %}*/
/* 										<img src="{{ asset_url }}"/>*/
/* 									{% endimage %}*/
/* 								</span>*/
/* 								<span class="col-sm-6 coordination">*/
/* 									<span>Coordination des</span>*/
/* 									<span>Etudiants et</span>*/
/* 									<span>Stagiaires Togolais</span>*/
/* 									<span>au Maroc</span>*/
/* 								</span>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						<div class="cestom-mail">*/
/* 							email: <a href="https:mail.yahoo.com">cestom_be@yahoo.fr</a>/<a href="https://mail.google.com">cestom.be@gmail.com</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<label class="copiright">© 2009-2015, CESTOM. Certains droits réservés.</label>*/
/* 	</footer>*/
/*                  {% endblock %}*/
/* 	*/
/* <!-- Ace script -->*/
/*    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/jquery-ui.custom.min.js')}}"></script>*/
/*         <script src="{{ asset('assets/js/ace-elements.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('assets/js/ace.min.js')}}"></script>*/
/*        */
/*  */
/* 		{% block javascripts %}*/
/* 			*/
/* 		{% endblock %}*/
/* 		*/
/*     </body>*/
/*   */
/* </html>*/
/* */

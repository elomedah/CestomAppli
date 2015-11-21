<?php

/* CestomAdminBundle:GestionMembre:ajouterVille.html.twig */
class __TwigTemplate_ddbe0168134daed9e362a1979f52e775798340ba5490829dcbc485ddead68512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterVille.html.twig", 3);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" />

";
    }

    // line 11
    public function block_navigation($context, array $blocks = array())
    {
        // line 12
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Home</a>
        </li>
        <li>

            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">Gestion des villes</a>
        </li>


        <li class=\"active\">Ville</li>
    </ul>

";
    }

    // line 32
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

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
            echo "        <div class=\"alert alert-block alert-success\">
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
            echo "        <div class=\"alert alert-block alert-danger\">
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
                <div class=\"col-xs-12\">

                    <!-- #section:elements.tab -->
                    <div class=\"tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\" active\">
                                <a  href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                    <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                    Ville
                                </a>
                            </li>



                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">
                                    <i class=\"green ace-icon fa fa-star bigger-120\"></i>
                                    Bureau de la ville
                                </a>


                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"formation\" class=\"tab-pane in active\">
                                <div class=\"widget-body\">

                                    <div class=\"table-header gray-cestom\">
                                        Liste des villes
                                    </div>
                                    <br>
                                    <div class=\"table-responsive\">
                                        <table id=\"listville\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                            <thead>
                                                <tr>

                                                    <th> Action</th>
                                                    <th>Nom de la ville  </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 107
            echo "                                                    <tr>


                                                        <td>

                                                            <a class=\"green\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville", array("idville" => $this->getAttribute($context["ville"], "idville", array()))), "html", null, true);
            echo "\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomville", array()), "html", null, true);
            echo "</td>


                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <form ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">\t

                                        <fieldset>
                                            <div class=\"col-sm-12 widget-main\">
                                                <h4 class=\"header bolder smaller\">
                                                    Ajouter une ville
                                                </h4>
                                            </div>
                                            ";
        // line 134
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVille.html.twig", "CestomAdminBundle:GestionMembre:ajouterVille.html.twig", 134)->display($context);
        // line 135
        echo "                                            </fieldset>
                                            <div class=\"form-actions center\">
                                                <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                    Ajouter
                                                    <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                </button>
                                            </div>
                                       
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- /section:elements.tab -->
                </div><!-- /.col -->



            </div><!-- /.row -->



            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
\t<style>/*
\t\t.gray-cestom{
\t\t\tbackground-color:#838383;
\t\t}*/
\t\t.page-header h1{
\t\t\tcolor: black;
\t\t}
\t</style>
";
    }

    // line 174
    public function block_javascript($context, array $blocks = array())
    {
        // line 175
        echo "
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {

            \$('.main').removeClass('active');
            \$('#menu_ville').addClass('active');
            \$('#listville').DataTable({
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ lignes\",
                    \"zeroRecords\": \"Aucune donnée retrouvée\",
                    \"sSearch\": \"Rechercher\",
                    \"info\": \"Page _PAGE_ sur _PAGES_\",
                    \"infoEmpty\": \"Aucune donnée\",
                    \"oPaginate\": {
                        \"sFirst\": \"Premier\",
                        \"sLast\": \"Fin\",
                        \"sNext\": \"  Suivant  \",
                        \"sPrevious\": \"  Précédent  \"
                    },
                    \"infoFiltered\": \"(filtré sur _MAX_ total lignes)\"
                }
            });


        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:ajouterVille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 177,  289 => 176,  286 => 175,  283 => 174,  242 => 135,  240 => 134,  227 => 126,  222 => 123,  211 => 118,  202 => 112,  195 => 107,  191 => 106,  159 => 77,  147 => 68,  134 => 57,  124 => 53,  119 => 50,  115 => 49,  112 => 48,  102 => 44,  97 => 41,  93 => 40,  90 => 39,  87 => 38,  77 => 32,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css')}}" />*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block navigation %}*/
/* */
/* */
/*     <ul class="breadcrumb">*/
/*         <li>*/
/*             <i class="ace-icon fa fa-home home-icon"></i>*/
/*             <a href="{{path('cestom_admin_homepage')}}">Home</a>*/
/*         </li>*/
/*         <li>*/
/* */
/*             <a href="{{path('cestom_admin_ajouter_ville')}}">Gestion des villes</a>*/
/*         </li>*/
/* */
/* */
/*         <li class="active">Ville</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Gestion des villes*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
/*         <div class="alert alert-block alert-success">*/
/*             <div class="flash-notice">*/
/* */
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('messageerror') %}*/
/*         <div class="alert alert-block alert-danger">*/
/*             <div class="flash-notice">*/
/* */
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/* */
/*                     <!-- #section:elements.tab -->*/
/*                     <div class="tabbable">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class=" active">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_ville')}}">*/
/*                                     <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                     Ville*/
/*                                 </a>*/
/*                             </li>*/
/* */
/* */
/* */
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_bureau_ville')}}">*/
/*                                     <i class="green ace-icon fa fa-star bigger-120"></i>*/
/*                                     Bureau de la ville*/
/*                                 </a>*/
/* */
/* */
/*                             </li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content">*/
/*                             <div id="formation" class="tab-pane in active">*/
/*                                 <div class="widget-body">*/
/* */
/*                                     <div class="table-header gray-cestom">*/
/*                                         Liste des villes*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div class="table-responsive">*/
/*                                         <table id="listville" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/* */
/*                                                     <th> Action</th>*/
/*                                                     <th>Nom de la ville  </th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for ville in villes %}*/
/*                                                     <tr>*/
/* */
/* */
/*                                                         <td>*/
/* */
/*                                                             <a class="green" href="{{path('cestom_admin_modifier_ville',{'idville': ville.idville})}}">*/
/*                                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                             </a>*/
/* */
/*                                                         </td>*/
/* */
/*                                                         <td>{{ ville.nomville}}</td>*/
/* */
/* */
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                     <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_ville')}}">	*/
/* */
/*                                         <fieldset>*/
/*                                             <div class="col-sm-12 widget-main">*/
/*                                                 <h4 class="header bolder smaller">*/
/*                                                     Ajouter une ville*/
/*                                                 </h4>*/
/*                                             </div>*/
/*                                             {% include "CestomAdminBundle:GestionMembre:formulaireVille.html.twig" %}*/
/*                                             </fieldset>*/
/*                                             <div class="form-actions center">*/
/*                                                 <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                     Ajouter*/
/*                                                     <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                 </button>*/
/*                                             </div>*/
/*                                        */
/*                                     </form>*/
/* */
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- /section:elements.tab -->*/
/*                 </div><!-- /.col -->*/
/* */
/* */
/* */
/*             </div><!-- /.row -->*/
/* */
/* */
/* */
/*             <!-- PAGE CONTENT ENDS -->*/
/*         </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
/* 	<style>/**/
/* 		.gray-cestom{*/
/* 			background-color:#838383;*/
/* 		}*//* */
/* 		.page-header h1{*/
/* 			color: black;*/
/* 		}*/
/* 	</style>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* */
/*             $('.main').removeClass('active');*/
/*             $('#menu_ville').addClass('active');*/
/*             $('#listville').DataTable({*/
/*                 "language": {*/
/*                     "lengthMenu": "Afficher _MENU_ lignes",*/
/*                     "zeroRecords": "Aucune donnée retrouvée",*/
/*                     "sSearch": "Rechercher",*/
/*                     "info": "Page _PAGE_ sur _PAGES_",*/
/*                     "infoEmpty": "Aucune donnée",*/
/*                     "oPaginate": {*/
/*                         "sFirst": "Premier",*/
/*                         "sLast": "Fin",*/
/*                         "sNext": "  Suivant  ",*/
/*                         "sPrevious": "  Précédent  "*/
/*                     },*/
/*                     "infoFiltered": "(filtré sur _MAX_ total lignes)"*/
/*                 }*/
/*             });*/
/* */
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

<?php

/* CestomAdminBundle:GestionMembre:ajouterBureau.html.twig */
class __TwigTemplate_c19c189ebeaddfdb8daf3775e1a89c770949338ddb5dbf02aa6a48450d696e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterBureau.html.twig", 3);
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

        <li class=\"active\">Bureau de ville</li>
    </ul>

";
    }

    // line 31
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 52
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <!-- #section:elements.tab -->
                            <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"dropdown \">
                                        <a  href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                            <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                            Ville
                                        </a>
                                    </li>



                                    <li class=\"active\">
                                        <a  href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">
                                            <i class=\"green ace-icon fa fa-star bigger-120\"></i>
                                            Bureau de la ville
                                        </a>


                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    <div id=\"bureau\" class=\"tab-pane in active\">
                                        <div class=\"widget-body\">


                                            <div class=\"table-header\">
                                                Liste des villes
                                            </div>
                                            <br>
                                            <div class=\"table-responsive\">

                                                <table id=\"listbureau\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                                    <thead>
                                                        <tr>

                                                            <th> Action</th>
                                                            <th>Nom de la ville  </th>
                                                            <th>Membre  </th>
                                                            <th>Poste  </th>
                                                            <th>Année universitaire  </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bureaux"]) ? $context["bureaux"] : $this->getContext($context, "bureaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bureau"]) {
            // line 113
            echo "                                                            <tr>
                                                                <td>
                                                                    <a class=\"green\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_bureau_ville", array("idbureau" => $this->getAttribute($context["bureau"], "idbureau", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idville", array()), "nomVille", array()), "html", null, true);
            echo "</td>

                                                                <th>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idmembre", array()), "nomMembre", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idmembre", array()), "prenomMembre", array()), "html", null, true);
            echo "</th>
                                                                <th>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "posteMembre", array()), "html", null, true);
            echo "  </th>
                                                                <th>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "anneeScolaire", array()), "html", null, true);
            echo "  </th>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bureau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <form ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">\t

                                                <fieldset >
                                                    <div class=\"col-sm-12 widget-main\">
                                                        <h4 class=\"header blue bolder smaller\">
                                                            Ajouter un nouveau poste à un membre
                                                        </h4>
                                                    </div>
                                                    ";
        // line 139
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireBureau.html.twig", "CestomAdminBundle:GestionMembre:ajouterBureau.html.twig", 139)->display($context);
        // line 140
        echo "
                                                    <fieldset >
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
                                                        </div>
                                                        </div>


                                                    ";
    }

    // line 176
    public function block_javascript($context, array $blocks = array())
    {
        // line 177
        echo "
                                                        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script type=\"text/javascript\"src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

                                                        <script type=\"text/javascript\">
                                                            jQuery(function(\$) {

                                                                \$('.main').removeClass('active');
                                                                \$('#menu_ville').addClass('active');
                                                                \$('#listbureau').DataTable({
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
        return "CestomAdminBundle:GestionMembre:ajouterBureau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 179,  302 => 178,  299 => 177,  296 => 176,  258 => 140,  256 => 139,  243 => 131,  238 => 128,  229 => 125,  225 => 124,  219 => 123,  214 => 121,  205 => 115,  201 => 113,  197 => 112,  160 => 78,  148 => 69,  133 => 56,  123 => 52,  118 => 49,  114 => 48,  111 => 47,  101 => 43,  96 => 40,  92 => 39,  89 => 38,  86 => 37,  76 => 31,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*         <li class="active">Bureau de ville</li>*/
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
/*                     <!-- PAGE CONTENT BEGINS -->*/
/*                     <div class="row">*/
/*                         <div class="col-sm-12">*/
/*                             <!-- #section:elements.tab -->*/
/*                             <div class="tabbable">*/
/*                                 <ul class="nav nav-tabs" id="myTab">*/
/*                                     <li class="dropdown ">*/
/*                                         <a  href="{{path('cestom_admin_ajouter_ville')}}">*/
/*                                             <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                             Ville*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/* */
/* */
/*                                     <li class="active">*/
/*                                         <a  href="{{path('cestom_admin_ajouter_bureau_ville')}}">*/
/*                                             <i class="green ace-icon fa fa-star bigger-120"></i>*/
/*                                             Bureau de la ville*/
/*                                         </a>*/
/* */
/* */
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                                 <div class="tab-content">*/
/*                                     <div id="bureau" class="tab-pane in active">*/
/*                                         <div class="widget-body">*/
/* */
/* */
/*                                             <div class="table-header">*/
/*                                                 Liste des villes*/
/*                                             </div>*/
/*                                             <br>*/
/*                                             <div class="table-responsive">*/
/* */
/*                                                 <table id="listbureau" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                                     <thead>*/
/*                                                         <tr>*/
/* */
/*                                                             <th> Action</th>*/
/*                                                             <th>Nom de la ville  </th>*/
/*                                                             <th>Membre  </th>*/
/*                                                             <th>Poste  </th>*/
/*                                                             <th>Année universitaire  </th>*/
/* */
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for bureau in bureaux %}*/
/*                                                             <tr>*/
/*                                                                 <td>*/
/*                                                                     <a class="green" href="{{path('cestom_admin_modifier_bureau_ville',{'idbureau': bureau.idbureau})}}">*/
/*                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                     </a>*/
/* */
/*                                                                 </td>*/
/* */
/*                                                                 <td>{{ bureau.idville.nomVille}}</td>*/
/* */
/*                                                                 <th>{{ bureau.idmembre.nomMembre}}  {{ bureau.idmembre.prenomMembre}}</th>*/
/*                                                                 <th>{{ bureau.posteMembre}}  </th>*/
/*                                                                 <th>{{ bureau.anneeScolaire}}  </th>*/
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/*                                             </div>*/
/*                                             <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_bureau_ville')}}">	*/
/* */
/*                                                 <fieldset >*/
/*                                                     <div class="col-sm-12 widget-main">*/
/*                                                         <h4 class="header blue bolder smaller">*/
/*                                                             Ajouter un nouveau poste à un membre*/
/*                                                         </h4>*/
/*                                                     </div>*/
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireBureau.html.twig" %}*/
/* */
/*                                                     <fieldset >*/
/*                                                         <div class="form-actions center">*/
/*                                                             <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                                 Ajouter*/
/*                                                                 <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                             </button>*/
/*                                                         </div>*/
/* */
/*                                                         </form>*/
/* */
/* */
/*                                                         </div>*/
/*                                                         </div>*/
/* */
/*                                                         </div>*/
/*                                                         </div>*/
/* */
/*                                                         <!-- /section:elements.tab -->*/
/*                                                         </div><!-- /.col -->*/
/* */
/* */
/* */
/*                                                         </div><!-- /.row -->*/
/* */
/* */
/* */
/*                                                         <!-- PAGE CONTENT ENDS -->*/
/*                                                         </div><!-- /.col -->*/
/*                                                         </div><!-- /.row -->*/
/*                                                         </div>*/
/*                                                         </div>*/
/* */
/* */
/*                                                     {% endblock %}*/
/* */
/*                                                     {% block javascript %}*/
/* */
/*                                                         <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*                                                         <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/* */
/*                                                         <script type="text/javascript">*/
/*                                                             jQuery(function($) {*/
/* */
/*                                                                 $('.main').removeClass('active');*/
/*                                                                 $('#menu_ville').addClass('active');*/
/*                                                                 $('#listbureau').DataTable({*/
/*                                                                     "language": {*/
/*                                                                         "lengthMenu": "Afficher _MENU_ lignes",*/
/*                                                                         "zeroRecords": "Aucune donnée retrouvée",*/
/*                                                                         "sSearch": "Rechercher",*/
/*                                                                         "info": "Page _PAGE_ sur _PAGES_",*/
/*                                                                         "infoEmpty": "Aucune donnée",*/
/*                                                                         "oPaginate": {*/
/*                                                                             "sFirst": "Premier",*/
/*                                                                             "sLast": "Fin",*/
/*                                                                             "sNext": "  Suivant  ",*/
/*                                                                             "sPrevious": "  Précédent  "*/
/*                                                                         },*/
/*                                                                         "infoFiltered": "(filtré sur _MAX_ total lignes)"*/
/*                                                                     }*/
/*                                                                 });*/
/* */
/* */
/*                                                             });*/
/*                                                         </script>*/
/* */
/*                                                     {% endblock %}*/
/* */
/* */
/* */

<?php

/* CestomAdminBundle:GestionMembre:modifierBureau.html.twig */
class __TwigTemplate_45e8999bca7c2567ea0d36f913eacff54df601d15c1615fc26925f9b8a2cf849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierBureau.html.twig", 3);
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

        <li>

            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">Gestion des bureaux</a>
        </li>
        
        <li class=\"active\">Bureau de ville</li>
    </ul>

";
    }

    // line 36
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 57
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">
                    
                            <!-- #section:elements.tab -->
                            <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"dropdown \">
                                        <a  href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                            <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                            Ville
                                        </a>
                                    </li>



                                    <li class=\"active\">
                                        <a  href=\"";
        // line 81
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


                                            <form ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_bureau_ville", array("idbureau" => (isset($context["idbureau"]) ? $context["idbureau"] : $this->getContext($context, "idbureau")))), "html", null, true);
        echo "\">\t

                                                <fieldset >
                                                    <div class=\"col-sm-12 widget-main\">
                                                        <h4 class=\"header blue bolder smaller\">
                                                            Modifier un bureau de ville
                                                        </h4>
                                                    </div>
                                                    ";
        // line 103
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireBureau.html.twig", "CestomAdminBundle:GestionMembre:modifierBureau.html.twig", 103)->display($context);
        // line 104
        echo "
                                                    </fieldset >
                                                        <div class=\"form-actions center\">
                                                            <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                                Modifier
                                                                <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                            </button>
                                                        </div>

                                                        </form>





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
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bureaux"]) ? $context["bureaux"] : $this->getContext($context, "bureaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bureau"]) {
            // line 139
            echo "                                                                        <tr>

                                                                           
                                                                            <td>

                                                                                <a class=\"green\" href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_bureau_ville", array("idbureau" => $this->getAttribute($context["bureau"], "idbureau", array()))), "html", null, true);
            echo "\">
                                                                                    <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                                </a>

                                                                            </td>

                                                                            <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idville", array()), "nomVille", array()), "html", null, true);
            echo "</td>

                                                                            <th>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idmembre", array()), "nomMembre", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bureau"], "idmembre", array()), "prenomMembre", array()), "html", null, true);
            echo "</th>
                                                                            <th>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "posteMembre", array()), "html", null, true);
            echo "  </th>
                                                                            <th>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "anneeScolaire", array()), "html", null, true);
            echo "  </th>
                                                                        </tr>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bureau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                                                </tbody>
                                                            </table>
                                                        </div>

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
                                                       


                                                    ";
    }

    // line 184
    public function block_javascript($context, array $blocks = array())
    {
        // line 185
        echo "
                                                        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script type=\"text/javascript\"src=\"";
        // line 187
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
        return "CestomAdminBundle:GestionMembre:modifierBureau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 187,  313 => 186,  310 => 185,  307 => 184,  278 => 157,  269 => 154,  265 => 153,  259 => 152,  254 => 150,  245 => 144,  238 => 139,  234 => 138,  198 => 104,  196 => 103,  183 => 95,  166 => 81,  154 => 72,  141 => 61,  131 => 57,  126 => 54,  122 => 53,  119 => 52,  109 => 48,  104 => 45,  100 => 44,  97 => 43,  94 => 42,  84 => 36,  73 => 26,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*         <li>*/
/* */
/*             <a href="{{path('cestom_admin_ajouter_bureau_ville')}}">Gestion des bureaux</a>*/
/*         </li>*/
/*         */
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
/*                     */
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
/*                                             <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_bureau_ville',{'idbureau': idbureau})}}">	*/
/* */
/*                                                 <fieldset >*/
/*                                                     <div class="col-sm-12 widget-main">*/
/*                                                         <h4 class="header blue bolder smaller">*/
/*                                                             Modifier un bureau de ville*/
/*                                                         </h4>*/
/*                                                     </div>*/
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireBureau.html.twig" %}*/
/* */
/*                                                     </fieldset >*/
/*                                                         <div class="form-actions center">*/
/*                                                             <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                                 Modifier*/
/*                                                                 <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                             </button>*/
/*                                                         </div>*/
/* */
/*                                                         </form>*/
/* */
/* */
/* */
/* */
/* */
/*                                                         <div class="table-header">*/
/*                                                             Liste des villes*/
/*                                                         </div>*/
/*                                                         <br>*/
/*                                                         <div class="table-responsive">*/
/* */
/*                                                             <table id="listbureau" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                                                 <thead>*/
/*                                                                     <tr>*/
/*                                                                                                                                                <th> Action</th>*/
/*                                                                         <th>Nom de la ville  </th>*/
/*                                                                         <th>Membre  </th>*/
/*                                                                         <th>Poste  </th>*/
/*                                                                         <th>Année universitaire  </th>*/
/* */
/*                                                                     </tr>*/
/*                                                                 </thead>*/
/* */
/*                                                                 <tbody>*/
/*                                                                     {% for bureau in bureaux %}*/
/*                                                                         <tr>*/
/* */
/*                                                                            */
/*                                                                             <td>*/
/* */
/*                                                                                 <a class="green" href="{{path('cestom_admin_modifier_bureau_ville',{'idbureau': bureau.idbureau})}}">*/
/*                                                                                     <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                                 </a>*/
/* */
/*                                                                             </td>*/
/* */
/*                                                                             <td>{{ bureau.idville.nomVille}}</td>*/
/* */
/*                                                                             <th>{{ bureau.idmembre.nomMembre}}  {{ bureau.idmembre.prenomMembre}}</th>*/
/*                                                                             <th>{{ bureau.posteMembre}}  </th>*/
/*                                                                             <th>{{ bureau.anneeScolaire}}  </th>*/
/*                                                                         </tr>*/
/*                                                                     {% endfor %}*/
/*                                                                 </tbody>*/
/*                                                             </table>*/
/*                                                         </div>*/
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
/*                                                        */
/* */
/* */
/*                                                     {% endblock %}*/
/* */
/*                                                     {% block javascript %}*/
/* */
/*                                                         <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*                                                         <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/*  <script type="text/javascript">*/
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

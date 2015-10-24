<?php

/* CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig */
class __TwigTemplate_a7c525e232e0a2fba27ebe257d2d87d11c6253d5e66c35803c25f8f1923f5ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig", 3);
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
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" />

";
    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        // line 16
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Home</a>
        </li>
        <li>

            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Gestion des membres</a>
        </li>
        <li>

            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">Formations</a>
        </li>
        <li class=\"active\">Ajouter une formation au membre</li>

    </ul>

";
    }

    // line 39
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Consulter ou  Ajouter une nouvelle formation 

";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 51
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 57
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 60
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <div class=\"tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"blue ace-icon fa fa-user bigger-120\"></i>
                                    Infos Génerales Membre
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-building bigger-120\"></i>

                                    Villes du Membre
                                </a>


                            </li>


                            <li class=\"active\">
                                <a  href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-graduation-cap bigger-120\"></i>

                                    Formations du Membre
                                </a>


                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"formation\" class=\"tab-pane in active\">
                                <div class=\"widget-body\">

                                    <div class=\"table-header\">
                                        Liste des formations
                                    </div>
                                    <br>
                                    <div class=\"table-responsive\">
                                        <table id=\"listformation\" style= \"border : solid 1px darkgrey; \"class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr>

                                                    <th> </th>
                                                      <th>Libellé  </th>
                                                    <th>Université</th>
                                                    <th>Diplôme visé </th>
                                                    <th>Durée</th>
                                                    <th>Date début</th>
                                                    <th>Programme de bourse</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 127
            echo "                                                    <tr>

                                                        <td>

                                                            <a class=\"green\" href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idformation" => $this->getAttribute($context["formation"], "idFormation", array()))), "html", null, true);
            echo "\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
            echo "</td>

                                                        <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
            echo "</td>

                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <form ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">\t
                                        <fieldset>
                                            <div class=\"col-sm-12 widget-main\">
                                                <h4 class=\"header blue bolder smaller\">
                                                    Ajouter une formation
                                                </h4>
                                            </div>
                                            ";
        // line 157
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireFormation.html.twig", "CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig", 157)->display($context);
        // line 158
        echo "                                        </fieldset>

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

        </div>
    </div>


";
    }

    // line 186
    public function block_javascript($context, array $blocks = array())
    {
        // line 187
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
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

            \$('#listformation').DataTable({
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


            \$('.main').removeClass('active');
            \$('#menu_membre').addClass('active');

        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:ajouterFormationMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 196,  358 => 195,  354 => 194,  350 => 193,  346 => 192,  342 => 191,  338 => 190,  333 => 188,  328 => 187,  325 => 186,  295 => 158,  293 => 157,  281 => 150,  276 => 147,  266 => 143,  262 => 142,  257 => 140,  253 => 139,  249 => 138,  245 => 137,  236 => 131,  230 => 127,  226 => 126,  188 => 91,  174 => 80,  165 => 74,  153 => 64,  143 => 60,  138 => 57,  134 => 56,  131 => 55,  121 => 51,  116 => 48,  112 => 47,  109 => 46,  106 => 45,  96 => 39,  85 => 29,  78 => 25,  71 => 21,  64 => 16,  61 => 15,  54 => 10,  50 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*     <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.custom.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />*/
/* */
/*     <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.css')}}" />*/
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
/*             <a href="{{path('cestom_admin_homepage')}}">Gestion des membres</a>*/
/*         </li>*/
/*         <li>*/
/* */
/*             <a href="{{path('cestom_admin_ajouter_formation',{'idmembre': idmembre })}}">Formations</a>*/
/*         </li>*/
/*         <li class="active">Ajouter une formation au membre</li>*/
/* */
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Consulter ou  Ajouter une nouvelle formation */
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
/*                     <div class="tabbable">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_modifier_member',{'idmembre':idmembre})}}">*/
/*                                     <i class="blue ace-icon fa fa-user bigger-120"></i>*/
/*                                     Infos Génerales Membre*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">*/
/*                                     <i class="green ace-icon fa fa-building bigger-120"></i>*/
/* */
/*                                     Villes du Membre*/
/*                                 </a>*/
/* */
/* */
/*                             </li>*/
/* */
/* */
/*                             <li class="active">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_formation',{'idmembre':idmembre})}}">*/
/*                                     <i class="green ace-icon fa fa-graduation-cap bigger-120"></i>*/
/* */
/*                                     Formations du Membre*/
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
/*                                     <div class="table-header">*/
/*                                         Liste des formations*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div class="table-responsive">*/
/*                                         <table id="listformation" style= "border : solid 1px darkgrey; "class="table table-striped table-bordered table-hover">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/* */
/*                                                     <th> </th>*/
/*                                                       <th>Libellé  </th>*/
/*                                                     <th>Université</th>*/
/*                                                     <th>Diplôme visé </th>*/
/*                                                     <th>Durée</th>*/
/*                                                     <th>Date début</th>*/
/*                                                     <th>Programme de bourse</th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for formation in formations %}*/
/*                                                     <tr>*/
/* */
/*                                                         <td>*/
/* */
/*                                                             <a class="green" href="{{path('cestom_admin_modifier_formation',{'idmembre': idmembre,'idformation': formation.idFormation})}}">*/
/*                                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                             </a>*/
/* */
/*                                                         </td>*/
/* */
/*                                                         <td>{{ formation.libelleFormation}}</td>*/
/*                                                         <td>{{formation.iduniv.nomuniv}}</td>*/
/*                                                         <td>{{formation.diplomeViseFormation}} </td>*/
/*                                                         <td>{{formation.dureeFormation}}</td>*/
/* */
/*                                                         <td>{{formation.dateDebutFormation}}</td>*/
/*                                                         <td>{{formation.programmeBourse}}</td>*/
/* */
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                     <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_formation',{idmembre:idmembre})}}">	*/
/*                                         <fieldset>*/
/*                                             <div class="col-sm-12 widget-main">*/
/*                                                 <h4 class="header blue bolder smaller">*/
/*                                                     Ajouter une formation*/
/*                                                 </h4>*/
/*                                             </div>*/
/*                                             {% include "CestomAdminBundle:GestionMembre:formulaireFormation.html.twig" %}*/
/*                                         </fieldset>*/
/* */
/*                                         <div class="form-actions center">*/
/*                                             <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                 Ajouter*/
/*                                                 <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                             </button>*/
/*                                         </div>*/
/*                                     </form>*/
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
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/* */
/*     <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/moment.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-datetimepicker.min.js')}}">< /script>*/
/*                 < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/*     <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
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
/* */
/*             $('#listformation').DataTable({*/
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
/*             $('.main').removeClass('active');*/
/*             $('#menu_membre').addClass('active');*/
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */

<?php

/* CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig */
class __TwigTemplate_2ffbda9d56ee4c6b01ffb02f0ef1a487b801b649365bb4f2675275e1dcff898c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig", 3);
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

        <li class=\"active\">Modifier une formation du membre</li>
    </ul>

";
    }

    // line 39
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Modifier une  formation 

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
                    <!-- #section:elements.tab -->
                    <div class=\"tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                    Infos Génerales Membre
                                </a>
                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 81
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

                                    <fieldset>
                                        <div class=\"col-sm-12 widget-main\">
                                            <h4 class=\"header blue bolder smaller\">
                                                Modifier une formation
                                            </h4>
                                        </div>

                                        <form ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idformation" => (isset($context["idformation"]) ? $context["idformation"] : null))), "html", null, true);
        echo "\">\t

                                            ";
        // line 114
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireFormation.html.twig", "CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig", 114)->display($context);
        // line 115
        echo "                                    </fieldset>
                                    <div class=\"form-actions center\">
                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                            Modifier
                                            <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                        </button>
                                    </div>

                                    </form>


                                    <div class=\"table-header\">
                                        Liste des formations
                                    </div>
                                    <br>
                                    <div class=\"table-responsive\">
                                        <table id=\"listformation\" style= \"border : solid 1px darkgrey; \"class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr>
                                                    <th class=\"center\">
                                                        <label class=\"position-relative\">
                                                            <input type=\"checkbox\" class=\"ace\" />
                                                            <span class=\"lbl\"></span>
                                                        </label>
                                                    </th>

                                                    <th> </th>
                                                    <th>Libellé  </th>
                                                    <th>Université</th>
                                                    <th>Durée </th>
                                                    <th>Date début</th>
                                                    <th>Programme de bourse</th>
                                                    <th>Diplôme visé</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 154
            echo "                                                    <tr>

                                                        <td class=\"center\">
                                                            <label class=\"position-relative\">
                                                                <input type=\"checkbox\" class=\"ace\" />
                                                                <span class=\"lbl\"></span>
                                                            </label>
                                                        </td >


                                                        <td>



                                                            <a class=\"green\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idformation" => $this->getAttribute($context["formation"], "idFormation", array()))), "html", null, true);
            echo "\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
            echo "</td>

                                                        <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
            echo "</td>

                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                                            </tbody>
                                        </table>
                                    </div>
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

    // line 207
    public function block_javascript($context, array $blocks = array())
    {
        // line 208
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
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
        return "CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 217,  379 => 216,  375 => 215,  371 => 214,  367 => 213,  363 => 212,  359 => 211,  354 => 209,  349 => 208,  346 => 207,  321 => 184,  311 => 180,  307 => 179,  302 => 177,  298 => 176,  294 => 175,  290 => 174,  281 => 168,  265 => 154,  261 => 153,  221 => 115,  219 => 114,  212 => 112,  188 => 91,  175 => 81,  165 => 74,  153 => 64,  143 => 60,  138 => 57,  134 => 56,  131 => 55,  121 => 51,  116 => 48,  112 => 47,  109 => 46,  106 => 45,  96 => 39,  85 => 29,  78 => 25,  71 => 21,  64 => 16,  61 => 15,  54 => 10,  50 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/* */
/*         <li class="active">Modifier une formation du membre</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Modifier une  formation */
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
/*                     <!-- #section:elements.tab -->*/
/*                     <div class="tabbable">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_modifier_member',{'idmembre':idmembre})}}">*/
/*                                     <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                     Infos Génerales Membre*/
/*                                 </a>*/
/*                             </li>*/
/* */
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
/*                                     <fieldset>*/
/*                                         <div class="col-sm-12 widget-main">*/
/*                                             <h4 class="header blue bolder smaller">*/
/*                                                 Modifier une formation*/
/*                                             </h4>*/
/*                                         </div>*/
/* */
/*                                         <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_formation',{'idmembre':idmembre,'idformation':idformation})}}">	*/
/* */
/*                                             {% include "CestomAdminBundle:GestionMembre:formulaireFormation.html.twig" %}*/
/*                                     </fieldset>*/
/*                                     <div class="form-actions center">*/
/*                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                             Modifier*/
/*                                             <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                                         </button>*/
/*                                     </div>*/
/* */
/*                                     </form>*/
/* */
/* */
/*                                     <div class="table-header">*/
/*                                         Liste des formations*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div class="table-responsive">*/
/*                                         <table id="listformation" style= "border : solid 1px darkgrey; "class="table table-striped table-bordered table-hover">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th class="center">*/
/*                                                         <label class="position-relative">*/
/*                                                             <input type="checkbox" class="ace" />*/
/*                                                             <span class="lbl"></span>*/
/*                                                         </label>*/
/*                                                     </th>*/
/* */
/*                                                     <th> </th>*/
/*                                                     <th>Libellé  </th>*/
/*                                                     <th>Université</th>*/
/*                                                     <th>Durée </th>*/
/*                                                     <th>Date début</th>*/
/*                                                     <th>Programme de bourse</th>*/
/*                                                     <th>Diplôme visé</th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for formation in formations %}*/
/*                                                     <tr>*/
/* */
/*                                                         <td class="center">*/
/*                                                             <label class="position-relative">*/
/*                                                                 <input type="checkbox" class="ace" />*/
/*                                                                 <span class="lbl"></span>*/
/*                                                             </label>*/
/*                                                         </td >*/
/* */
/* */
/*                                                         <td>*/
/* */
/* */
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
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

<?php

/* CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig */
class __TwigTemplate_c9e3597419571f33a11269db9f0094c3c61f9135c3b877cea03877ac92d60f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig", 3);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">Ville du Membre</a>
        </li>

        <li class=\"active\">Ville du membre</li>
    </ul>

";
    }

    // line 35
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Ajouter une ville au membre 

";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 47
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                    Infos Génerales Membre
                                </a>
                            </li>

                            <li class=\"active\">
                                <a  href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-building bigger-120\"></i>

                                    Villes du Membre
                                </a>


                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-graduation-cap bigger-120\"></i>

                                    Formations du Membre
                                </a>


                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"villemembre\" class=\"tab-pane in active\">

                                <form ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">\t
                                    <fieldset >
                                        <div class=\"col-sm-12 widget-main\">
                                            <h4 class=\"header blue bolder smaller\">
                                                Ajouter une ville au membre
                                            </h4>
                                        </div>

                                        ";
        // line 109
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig", "CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig", 109)->display($context);
        // line 110
        echo "                                    </fieldset>
                                    <div class=\"form-actions center\">
                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                            Ajouter
                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                        </button>
                                    </div>

                                </form>


                                <div class=\"table-header\">
                                    Liste des villes du membre
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
                                                <th> Ville  </th>
                                                <th>adresse</th>
                                                <th>Date du début de séjour </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villesmembre"]) ? $context["villesmembre"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["villemembre"]) {
            // line 146
            echo "                                                <tr>

                                                    <td class=\"center\">
                                                        <label class=\"position-relative\">
                                                            <input type=\"checkbox\" class=\"ace\" />
                                                            <span class=\"lbl\"></span>
                                                        </label>
                                                    </td >


                                                    <td>



                                                        <a class=\"green\" href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idvillemembre" => $this->getAttribute($context["villemembre"], "idvillemembre", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                        </a>

                                                    </td>

                                                    <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["villemembre"], "idville", array()), "nomville", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["villemembre"], "adresse", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["villemembre"], "dateDebut", array()), "html", null, true);
            echo " </td>


                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villemembre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                        </tbody>
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



";
    }

    // line 197
    public function block_javascript($context, array $blocks = array())
    {
        // line 198
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        jQuery(function(\$) {

            \$('.main').removeClass('active');
            \$('#menu_membre').addClass('active');
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


        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 207,  357 => 206,  353 => 205,  349 => 204,  345 => 203,  341 => 202,  337 => 201,  332 => 199,  327 => 198,  324 => 197,  298 => 173,  287 => 168,  283 => 167,  279 => 166,  270 => 160,  254 => 146,  250 => 145,  213 => 110,  211 => 109,  198 => 101,  182 => 88,  169 => 78,  159 => 71,  146 => 60,  136 => 56,  131 => 53,  127 => 52,  124 => 51,  114 => 47,  109 => 44,  105 => 43,  102 => 42,  99 => 41,  89 => 35,  78 => 25,  71 => 21,  64 => 16,  61 => 15,  54 => 10,  50 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*             <a href="{{path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">Ville du Membre</a>*/
/*         </li>*/
/* */
/*         <li class="active">Ville du membre</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Ajouter une ville au membre */
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
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_modifier_member',{'idmembre':idmembre})}}">*/
/*                                     <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                     Infos Génerales Membre*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             <li class="active">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_ville',{'idmembre':idmembre})}}">*/
/*                                     <i class="green ace-icon fa fa-building bigger-120"></i>*/
/* */
/*                                     Villes du Membre*/
/*                                 </a>*/
/* */
/* */
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
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
/*                             <div id="villemembre" class="tab-pane in active">*/
/* */
/*                                 <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">	*/
/*                                     <fieldset >*/
/*                                         <div class="col-sm-12 widget-main">*/
/*                                             <h4 class="header blue bolder smaller">*/
/*                                                 Ajouter une ville au membre*/
/*                                             </h4>*/
/*                                         </div>*/
/* */
/*                                         {% include "CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig" %}*/
/*                                     </fieldset>*/
/*                                     <div class="form-actions center">*/
/*                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                             Ajouter*/
/*                                             <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                         </button>*/
/*                                     </div>*/
/* */
/*                                 </form>*/
/* */
/* */
/*                                 <div class="table-header">*/
/*                                     Liste des villes du membre*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="table-responsive">*/
/*                                     <table id="listformation" style= "border : solid 1px darkgrey; "class="table table-striped table-bordered table-hover">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th class="center">*/
/*                                                     <label class="position-relative">*/
/*                                                         <input type="checkbox" class="ace" />*/
/*                                                         <span class="lbl"></span>*/
/*                                                     </label>*/
/*                                                 </th>*/
/* */
/*                                                 <th> </th>*/
/*                                                 <th> Ville  </th>*/
/*                                                 <th>adresse</th>*/
/*                                                 <th>Date du début de séjour </th>*/
/* */
/*                                             </tr>*/
/*                                         </thead>*/
/* */
/*                                         <tbody>*/
/*                                             {% for villemembre in villesmembre %}*/
/*                                                 <tr>*/
/* */
/*                                                     <td class="center">*/
/*                                                         <label class="position-relative">*/
/*                                                             <input type="checkbox" class="ace" />*/
/*                                                             <span class="lbl"></span>*/
/*                                                         </label>*/
/*                                                     </td >*/
/* */
/* */
/*                                                     <td>*/
/* */
/* */
/* */
/*                                                         <a class="green" href="{{path('cestom_admin_modifier_ville_membre',{'idmembre': idmembre,'idvillemembre': villemembre.idvillemembre})}}">*/
/*                                                             <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                         </a>*/
/* */
/*                                                     </td>*/
/* */
/*                                                     <td>{{ villemembre.idville.nomville}}</td>*/
/*                                                     <td>{{villemembre.adresse}}</td>*/
/*                                                     <td>{{villemembre.dateDebut}} </td>*/
/* */
/* */
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- /section:elements.tab -->*/
/*             </div><!-- /.col -->*/
/* */
/* */
/* */
/*         </div><!-- /.row -->*/
/* */
/* */
/*         <!-- PAGE CONTENT ENDS -->*/
/*     </div><!-- /.col -->*/
/* */
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
/* */
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* */
/*             $('.main').removeClass('active');*/
/*             $('#menu_membre').addClass('active');*/
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
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

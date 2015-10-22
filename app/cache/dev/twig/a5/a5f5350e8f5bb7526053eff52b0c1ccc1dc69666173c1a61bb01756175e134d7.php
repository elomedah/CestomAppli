<?php

/* CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig */
class __TwigTemplate_66f5c0dcca359e7a1dcf0794c06948b1e6ea7f14d4650b9efc373c4a68405aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig", 3);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">Ville du Membre</a>
        </li>

        <li class=\"active\">Ville du membre : modification</li>
    </ul>

";
    }

    // line 33
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Modifier une ville du membre 

";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 51
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 54
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
                                    <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                    Infos Génerales Membre
                                </a>
                            </li>

                            <li class=\"active\">
                                <a  href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-building bigger-120\"></i>

                                    Villes du Membre
                                </a>


                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
                                    <i class=\"green ace-icon fa fa-graduation-cap bigger-120\"></i>

                                    Formations du Membre
                                </a>


                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"villemembre\" class=\"tab-pane in active\">
                                <div class=\"widget-body\">



                                    <form ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")), "idvillemembre" => (isset($context["idvillemembre"]) ? $context["idvillemembre"] : $this->getContext($context, "idvillemembre")))), "html", null, true);
        echo "\">\t
                                        <fieldset >
                                            <div class=\"col-sm-12 widget-main\">
                                                <h4 class=\"header blue bolder smaller\">
                                                    Modifier la ville du membre
                                                </h4>
                                            </div>
                                            ";
        // line 108
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig", "CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig", 108)->display($context);
        // line 109
        echo "                                        </fieldset >
                                        <div class=\"form-actions center\">
                                            <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                Modifier
                                                <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
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
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villesmembre"]) ? $context["villesmembre"] : $this->getContext($context, "villesmembre")));
        foreach ($context['_seq'] as $context["_key"] => $context["villemembre"]) {
            // line 145
            echo "                                                    <tr>

                                                        <td class=\"center\">
                                                            <label class=\"position-relative\">
                                                                <input type=\"checkbox\" class=\"ace\" />
                                                                <span class=\"lbl\"></span>
                                                            </label>
                                                        </td >


                                                        <td>



                                                            <a class=\"green\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")), "idvillemembre" => $this->getAttribute($context["villemembre"], "idvillemembre", array()))), "html", null, true);
            echo "\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["villemembre"], "idville", array()), "nomville", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["villemembre"], "adresse", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["villemembre"], "dateDebut", array()), "html", null, true);
            echo " </td>


                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villemembre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
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


            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->


";
    }

    // line 199
    public function block_javascript($context, array $blocks = array())
    {
        // line 200
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                < script src = \"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
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
        return "CestomAdminBundle:GestionMembre:modifierVilleMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 209,  361 => 208,  357 => 207,  353 => 206,  349 => 205,  345 => 204,  341 => 203,  336 => 201,  331 => 200,  328 => 199,  299 => 172,  288 => 167,  284 => 166,  280 => 165,  271 => 159,  255 => 145,  251 => 144,  214 => 109,  212 => 108,  200 => 101,  181 => 85,  168 => 75,  158 => 68,  146 => 58,  136 => 54,  131 => 51,  127 => 50,  124 => 49,  114 => 45,  109 => 42,  105 => 41,  102 => 40,  99 => 39,  89 => 33,  78 => 25,  71 => 21,  64 => 16,  61 => 15,  54 => 10,  50 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*         <li class="active">Ville du membre : modification</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* {% block soustitre %} */
/* */
/*     Modifier une ville du membre */
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
/*                                 <div class="widget-body">*/
/* */
/* */
/* */
/*                                     <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_ville_membre',{'idmembre':idmembre,'idvillemembre':idvillemembre})}}">	*/
/*                                         <fieldset >*/
/*                                             <div class="col-sm-12 widget-main">*/
/*                                                 <h4 class="header blue bolder smaller">*/
/*                                                     Modifier la ville du membre*/
/*                                                 </h4>*/
/*                                             </div>*/
/*                                             {% include "CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig" %}*/
/*                                         </fieldset >*/
/*                                         <div class="form-actions center">*/
/*                                             <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                 Modifier*/
/*                                                 <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                                             </button>*/
/*                                         </div>*/
/* */
/*                                     </form>*/
/* */
/* */
/*                                     <div class="table-header">*/
/*                                         Liste des villes du membre*/
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
/*                                                     <th> Ville  </th>*/
/*                                                     <th>adresse</th>*/
/*                                                     <th>Date du début de séjour </th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for villemembre in villesmembre %}*/
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
/*                                                             <a class="green" href="{{path('cestom_admin_modifier_ville_membre',{'idmembre': idmembre,'idvillemembre': villemembre.idvillemembre})}}">*/
/*                                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                             </a>*/
/* */
/*                                                         </td>*/
/* */
/*                                                         <td>{{ villemembre.idville.nomville}}</td>*/
/*                                                         <td>{{villemembre.adresse}}</td>*/
/*                                                         <td>{{villemembre.dateDebut}} </td>*/
/* */
/* */
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/* */
/* */
/*                                     </div>*/
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
/*             <!-- PAGE CONTENT ENDS -->*/
/*         </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
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

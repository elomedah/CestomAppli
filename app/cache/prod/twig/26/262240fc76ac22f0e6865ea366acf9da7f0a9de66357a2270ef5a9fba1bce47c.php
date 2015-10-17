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
";
    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        // line 13
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
        <li>

            <a href=\"#\">Gestion des membres</a>
        </li>

        <li class=\"active\">Ville du membre</li>
    </ul>

";
    }

    // line 32
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Ajouter une ville au membre 
    
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
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
                    <!-- PAGE CONTENT BEGINS -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <!-- #section:elements.tab -->
                            <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"dropdown\">
                                        <a  href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
                                            <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                            Infos Génerales Membre
                                        </a>
                                    </li>

\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-building bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                    Villes du Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>

                                    <li class=\"dropdown\">
                                        <a  href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
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
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">\t
<fieldset >
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Ajouter une ville au membre
                        </h4>
                    </div>
                                                    ";
        // line 110
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig", "CestomAdminBundle:GestionMembre:ajouterVilleMembre.html.twig", 110)->display($context);
        // line 111
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Ajouter
                                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
</fieldset>
                                                </form>
                                                    
                                                    
                                                <div class=\"table-header\">
                                                    Liste des villes du membre
                                                </div>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["villesmembre"]) ? $context["villesmembre"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["villemembre"]) {
            // line 145
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idvillemembre" => $this->getAttribute($context["villemembre"], "idvillemembre", array()))), "html", null, true);
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
        echo "                                                    </tbody>
                                                </table>




                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                            <!-- /section:elements.tab -->
                        </div><!-- /.col -->



                    </div><!-- /.row -->



                    <script type=\"text/javascript\">
                        var \$path_assets = \"../assets\";//this will be used in gritter alerts containing images
                    </script>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>


";
    }

    // line 206
    public function block_javascript($context, array $blocks = array())
    {
        // line 207
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                                                                    < script src = \"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script  src = \"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
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
            \"sFirst\":    \"Premier\",
            \"sLast\":    \"FIn\",
            \"sNext\":    \"Suivant\",
            \"sPrevious\": \"Précédent\"
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
        return array (  370 => 219,  366 => 218,  362 => 217,  358 => 216,  354 => 215,  350 => 214,  346 => 213,  342 => 212,  338 => 211,  333 => 209,  329 => 208,  324 => 207,  321 => 206,  285 => 172,  274 => 167,  270 => 166,  266 => 165,  257 => 159,  241 => 145,  237 => 144,  202 => 111,  200 => 110,  188 => 103,  169 => 87,  156 => 77,  146 => 70,  131 => 57,  121 => 53,  116 => 50,  112 => 49,  109 => 48,  99 => 44,  94 => 41,  90 => 40,  87 => 39,  84 => 38,  74 => 32,  55 => 13,  52 => 12,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/* {% endblock %}*/
/* */
/* */
/* {% block navigation %}*/
/* */
/* */
/*     <ul class="breadcrumb">*/
/*         <li>*/
/*             <i class="ace-icon fa fa-home home-icon"></i>*/
/*             <a href="#">Home</a>*/
/*         </li>*/
/*         <li>*/
/* */
/*             <a href="#">Gestion des membres</a>*/
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
/*     */
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
/*                                     <li class="dropdown">*/
/*                                         <a  href="{{path('cestom_admin_modifier_member',{'idmembre':idmembre})}}">*/
/*                                             <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                             Infos Génerales Membre*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/* 					<li class="active">*/
/* 												<a  href="{{path('cestom_admin_ajouter_ville',{'idmembre':idmembre})}}">*/
/* 													<i class="green ace-icon fa fa-building bigger-120"></i>*/
/* 													*/
/*                                                                                                     Villes du Membre*/
/* 												</a>*/
/* */
/* 												*/
/* 											</li>*/
/* */
/*                                     <li class="dropdown">*/
/*                                         <a  href="{{path('cestom_admin_ajouter_formation',{'idmembre':idmembre})}}">*/
/*                                             <i class="green ace-icon fa fa-graduation-cap bigger-120"></i>*/
/* */
/*                                             Formations du Membre*/
/*                                         </a>*/
/* */
/* */
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                                 <div class="tab-content">*/
/*                                     <div id="villemembre" class="tab-pane in active">*/
/*                                         <div class="widget-body">*/
/* */
/*                                             */
/* */
/*                                                 <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">	*/
/* <fieldset >*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Ajouter une ville au membre*/
/*                         </h4>*/
/*                     </div>*/
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireVilleMembre.html.twig" %}*/
/*                                                     <div class="form-actions center">*/
/*                                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                             Ajouter*/
/*                                                             <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/* </fieldset>*/
/*                                                 </form>*/
/*                                                     */
/*                                                     */
/*                                                 <div class="table-header">*/
/*                                                     Liste des villes du membre*/
/*                                                 </div>*/
/* */
/*                                                 <table id="listformation" style= "border : solid 1px darkgrey; "class="table table-striped table-bordered table-hover">*/
/*                                                     <thead>*/
/*                                                         <tr>*/
/*                                                             <th class="center">*/
/*                                                                 <label class="position-relative">*/
/*                                                                     <input type="checkbox" class="ace" />*/
/*                                                                     <span class="lbl"></span>*/
/*                                                                 </label>*/
/*                                                             </th>*/
/* */
/*                                                             <th> </th>*/
/*                                                             <th> Ville  </th>*/
/*                                                             <th>adresse</th>*/
/*                                                             <th>Date du début de séjour </th>*/
/*                                                             */
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for villemembre in villesmembre %}*/
/*                                                             <tr>*/
/* */
/*                                                                 <td class="center">*/
/*                                                                     <label class="position-relative">*/
/*                                                                         <input type="checkbox" class="ace" />*/
/*                                                                         <span class="lbl"></span>*/
/*                                                                     </label>*/
/*                                                                 </td >*/
/* */
/* */
/*                                                                 <td>*/
/* */
/* */
/* */
/*                                                                     <a class="green" href="{{path('cestom_admin_modifier_ville_membre',{'idmembre': idmembre,'idvillemembre': villemembre.idvillemembre})}}">*/
/*                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                     </a>*/
/* */
/*                                                                 </td>*/
/* */
/*                                                                 <td>{{ villemembre.idville.nomville}}</td>*/
/*                                                                 <td>{{villemembre.adresse}}</td>*/
/*                                                                 <td>{{villemembre.dateDebut}} </td>*/
/*                                                                 */
/* */
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/* */
/* */
/* */
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!-- /section:elements.tab -->*/
/*                         </div><!-- /.col -->*/
/* */
/* */
/* */
/*                     </div><!-- /.row -->*/
/* */
/* */
/* */
/*                     <script type="text/javascript">*/
/*                         var $path_assets = "../assets";//this will be used in gritter alerts containing images*/
/*                     </script>*/
/* */
/*                     <!-- PAGE CONTENT ENDS -->*/
/*                 </div><!-- /.col -->*/
/*             </div><!-- /.row -->*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/date-time/moment.min.js')}}"></script>*/
/* */
/*     <script src="{{asset('assets/js/date-time/bootstrap-datetimepicker.min.js')}}">< /script>*/
/*                                                                     < script src = "{{asset('assets/js/jquery.autosize.min.js')}}" ></script>*/
/*     <script  src = "{{asset('assets/js/jquery.ui.addresspicker.js')}}"></script>*/
/*     <script src="{{asset('assets/js/jquery.maskedinput.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/bootstrap-tag.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/ace.min.js')}}"></script>*/
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script	src="{{asset('assets/js/jquery.dataTables.bootstrap.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*                                                             jQuery(function($) {*/
/*                       */
/*                                   $('.main').removeClass('active');*/
/*                                   $('#menu_membre').addClass('active');*/
/*                                                                 //link*/
/*                                                                 $('.date-picker').datepicker({*/
/*                                                                     autoclose: true,*/
/*                                                                     todayHighlight: true*/
/*                                                                 })*/
/*                                                                         //show datepicker when clicking on the icon*/
/*                                                                         .next().on(ace.click_event, function() {*/
/*                                                                     $(this).prev().focus();*/
/*                                                                 });*/
/*                                                                 $('#date-debut').datetimepicker().next().on(ace.click_event, function() {*/
/*                                                                     $(this).prev().focus();*/
/*                                                                 });*/
/* */
/*                                                                 $('#listformation').DataTable({*/
/*                                                                     */
/*                                                                     "language": {*/
/*             "lengthMenu": "Afficher _MENU_ lignes",*/
/*             "zeroRecords": "Aucune donnée retrouvée",*/
/*              "sSearch": "Rechercher",*/
/*             "info": "Page _PAGE_ sur _PAGES_",*/
/*             "infoEmpty": "Aucune donnée",*/
/*             "oPaginate": {*/
/*             "sFirst":    "Premier",*/
/*             "sLast":    "FIn",*/
/*             "sNext":    "Suivant",*/
/*             "sPrevious": "Précédent"*/
/*         },*/
/*             "infoFiltered": "(filtré sur _MAX_ total lignes)"*/
/*         }*/
/*                                                                 });*/
/*                                                                 */
/*                                                 */
/*                                                             });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

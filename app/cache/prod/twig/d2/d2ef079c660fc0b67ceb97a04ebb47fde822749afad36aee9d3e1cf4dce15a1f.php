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

        <li class=\"active\">Formation</li>
    </ul>

";
    }

    // line 32
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Modifier une  formation 

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

\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-building bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                    Villes du Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>

                                    <li class=\"active\">
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
                                    <div id=\"formation\" class=\"tab-pane in active\">
                                        <div class=\"widget-body\">

                                             <fieldset>
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Modifier une formation
                        </h4>
                    </div>

                                                <form ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idformation" => (isset($context["idformation"]) ? $context["idformation"] : null))), "html", null, true);
        echo "\">\t

                                                    ";
        // line 110
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireFormation.html.twig", "CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig", 110)->display($context);
        // line 111
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Modifier
                                                            <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
 </fieldset>
                                                </form>
                                                    
                                                    
                                                <div class=\"table-header\">
                                                    Liste des formations
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
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 148
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : null), "idformation" => $this->getAttribute($context["formation"], "idFormation", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
            echo "</td>

                                                                <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
            echo "</td>

                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
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

    // line 212
    public function block_javascript($context, array $blocks = array())
    {
        // line 213
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                                                                    < script src = \"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script  src = \"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
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
            \"sFirst\":    \"Premier\",
            \"sLast\":    \"FIn\",
            \"sNext\":    \"Suivant\",
            \"sPrevious\": \"Précédent\"
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
        return array (  385 => 225,  381 => 224,  377 => 223,  373 => 222,  369 => 221,  365 => 220,  361 => 219,  357 => 218,  353 => 217,  348 => 215,  344 => 214,  339 => 213,  336 => 212,  300 => 178,  290 => 174,  286 => 173,  281 => 171,  277 => 170,  273 => 169,  269 => 168,  260 => 162,  244 => 148,  240 => 147,  202 => 111,  200 => 110,  193 => 108,  169 => 87,  156 => 77,  146 => 70,  131 => 57,  121 => 53,  116 => 50,  112 => 49,  109 => 48,  99 => 44,  94 => 41,  90 => 40,  87 => 39,  84 => 38,  74 => 32,  55 => 13,  52 => 12,  46 => 8,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*         <li class="active">Formation</li>*/
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
/* 					<li class="dropdown">*/
/* 												<a  href="{{path('cestom_admin_ajouter_ville_membre',{'idmembre':idmembre})}}">*/
/* 													<i class="green ace-icon fa fa-building bigger-120"></i>*/
/* 													*/
/*                                                                                                     Villes du Membre*/
/* 												</a>*/
/* */
/* 												*/
/* 											</li>*/
/* */
/*                                     <li class="active">*/
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
/*                                     <div id="formation" class="tab-pane in active">*/
/*                                         <div class="widget-body">*/
/* */
/*                                              <fieldset>*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Modifier une formation*/
/*                         </h4>*/
/*                     </div>*/
/* */
/*                                                 <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_formation',{'idmembre':idmembre,'idformation':idformation})}}">	*/
/* */
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireFormation.html.twig" %}*/
/*                                                     <div class="form-actions center">*/
/*                                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                             Modifier*/
/*                                                             <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*  </fieldset>*/
/*                                                 </form>*/
/*                                                     */
/*                                                     */
/*                                                 <div class="table-header">*/
/*                                                     Liste des formations*/
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
/*                                                             <th>Libellé  </th>*/
/*                                                             <th>Université</th>*/
/*                                                             <th>Durée </th>*/
/*                                                             <th>Date début</th>*/
/*                                                             <th>Programme de bourse</th>*/
/*                                                             <th>Diplôme visé</th>*/
/* */
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for formation in formations %}*/
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
/*                                                                     <a class="green" href="{{path('cestom_admin_modifier_formation',{'idmembre': idmembre,'idformation': formation.idFormation})}}">*/
/*                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                     </a>*/
/* */
/*                                                                 </td>*/
/* */
/*                                                                 <td>{{ formation.libelleFormation}}</td>*/
/*                                                                 <td>{{formation.iduniv.nomuniv}}</td>*/
/*                                                                 <td>{{formation.diplomeViseFormation}} </td>*/
/*                                                                 <td>{{formation.dureeFormation}}</td>*/
/* */
/*                                                                 <td>{{formation.dateDebutFormation}}</td>*/
/*                                                                 <td>{{formation.programmeBourse}}</td>*/
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
/* //datepicker plugin*/
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
/*                                                                         */
/*                                   $('.main').removeClass('active');*/
/*                                   $('#menu_membre').addClass('active');*/
/*                                                             });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

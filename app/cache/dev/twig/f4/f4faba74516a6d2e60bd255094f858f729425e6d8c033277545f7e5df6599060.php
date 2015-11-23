<?php

/* CestomAdminBundle:GestionBourse:listeAttenteBourse.html.twig */
class __TwigTemplate_bcb898a83f6ea38596e61d276b3302914ef6a03c049df957be11c03ec6f51296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionBourse:listeAttenteBourse.html.twig", 3);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/jquery-ui.min.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>
\t<style>
\t\t
 \t\t.table-header{ 
\t\tbackground-color:#337ab7
\t\t}
\t</style>
";
    }

    // line 18
    public function block_navigation($context, array $blocks = array())
    {
        // line 19
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Home</a>
        </li>
        <li>

            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("cestom_admin_attente_bourse");
        echo "\">Gestion des Bourses</a>
        </li>

        <li class=\"active\">Dossier en attente de validation</li>
    </ul>

";
    }

    // line 38
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des bourses

";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 56
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 59
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <!-- #section:elements.tab -->
                    <div class=\"tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\" active \">
                                <a  href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("cestom_admin_attente_bourse");
        echo "\">
                                    <i class=\"blue ace-icon fa fa-pause bigger-120\"></i>
                                    En attente
                                </a>
                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("cestom_admin_valide_liste_bourse");
        echo "\">
                                    <i class=\"green ace-icon fa fa-check bigger-120\"></i>
                                    Validé
                                </a>
                            </li>
\t\t\t    <li class=\"dropdown \">
                                <a  href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("cestom_admin_rejete_liste_bourse");
        echo "\">
                                    <i class=\"red ace-icon fa fa-ban bigger-120\"></i>
                                    Rejeté
                                </a>
                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"formation\" class=\"tab-pane in active\">
                                <div class=\"widget-body\">
                                          
                                    <div style=\"background-color:#337ab7\" class=\"table-header\">
                                        Liste des documents en attente de validation
                                    </div>
                                    <br>
                                    <div  class=\" bordertable table-responsive\">
                                        <table id=\"listbourse\" style= \"border : solid 1px darkgrey; \" class=\" table table-striped  table-hover  bordertable\">
                                            <thead>
                                                <tr>


                                                    <th>Nom & Prénom  </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Type de doc </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Date d'upload </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Ouvrir </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Statut </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Validation </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th> Rejet </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t

                                                </tr>
                                            </thead>

                                            <tbody>
                                                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bourses"]) ? $context["bourses"] : $this->getContext($context, "bourses")));
        foreach ($context['_seq'] as $context["_key"] => $context["bourse"]) {
            // line 122
            echo "                                                    <tr>
                                                        
                                                        <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bourse"], "idmembre", array()), "nomMembre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bourse"], "idmembre", array()), "prenomMembre", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "typeDoc", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bourse"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                                        <td><span class=\"label label-sm label-info arrowed arrowed-righ\"><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["bourse"], "fichierBourse"), "html", null, true);
            echo " \" style=\"color:white\" target=\"_blank\">Cliquer ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "docBourse", array()), "html", null, true);
            echo "</a></span> </td>
                                                        <td> <span class=\"label label-sm label-warning\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "etatDoc", array()), "html", null, true);
            echo "</span> </td>
                                                        <td><a class=\"validerDoc\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_valide_bourse", array("idbourse" => $this->getAttribute($context["bourse"], "idbourse", array()))), "html", null, true);
            echo "\"> <button  class=\" btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-120\"></i>Valider
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button></a></td>
                                                        <td><button class=\"btn btn-xs btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-ban red bigger-130\"></i>\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-sm label-inverse arrowed-in\">Rejeter</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bourse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
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

<div id=\"dialog-form\" title=\"Valider le dossier\">
\t<h4 class=\"validateTips\">Attention! Vous êtes sur le point de valider le dossier. Veuillez ouvrir le document au moins une seule fois. </h4>

\t<form>
\t\t<fieldset>
\t\t\t\t\t\t<input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">

\t\t</fieldset>
\t</form>
</div> 

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
    <script type=\"text/javascript\"src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            \$('.main').removeClass('active');
            \$('#menu_bourse').addClass('active');
            \$('#listbourse').DataTable({
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

              var dialog, form,theHREF;
\t\t\t

\t\tfunction valider() {
\t\t\tvar valid = true;
\t\t\t window.location.href = theHREF;
\t\t\tdialog.dialog( \"close\" );
\t\t\treturn valid;
\t\t}


\t\tdialog = \$( \"#dialog-form\" ).dialog({
\t\t\tautoOpen: false,
\t\t\theight: 200,
\t\t\twidth: 400,
\t\t\tmodal: true,
\t\t\tbuttons: {
\t\t\t\t\"Valider\": valider,
\t\t\t\tAnnuler: function(event) {

\t\t\t\t\tdialog.dialog( \"close\" );
\t\t\t\t}
\t\t\t},
\t\t\tclose: function() {
\t\t\t\tform[ 0 ].reset();

\t\t\t}
\t\t});

\t\tform = dialog.find( \"form\" ).on( \"submit\", function( event ) {

\t\t\t
\t\t});
         \$(\".validerDoc\" ).on( \"click\", function(e) {
                       \te.preventDefault();
\t\t\t theHREF = \$(this).attr(\"href\");
\t\t\tdialog.dialog( \"open\" );
\t\t});
\t\t
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionBourse:listeAttenteBourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 178,  310 => 177,  306 => 176,  303 => 175,  300 => 174,  263 => 139,  247 => 129,  243 => 128,  237 => 127,  233 => 126,  229 => 125,  223 => 124,  219 => 122,  215 => 121,  178 => 87,  169 => 81,  159 => 74,  146 => 63,  136 => 59,  131 => 56,  127 => 55,  124 => 54,  114 => 50,  109 => 47,  105 => 46,  102 => 45,  99 => 44,  89 => 38,  78 => 28,  71 => 24,  64 => 19,  61 => 18,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.min.css')}}" />*/
/*         <script src="{{ asset('assets/js/ace-extra.min.js')}}"></script>*/
/* 	<style>*/
/* 		*/
/*  		.table-header{ */
/* 		background-color:#337ab7*/
/* 		}*/
/* 	</style>*/
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
/*             <a href="{{path('cestom_admin_attente_bourse')}}">Gestion des Bourses</a>*/
/*         </li>*/
/* */
/*         <li class="active">Dossier en attente de validation</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Gestion des bourses*/
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
/*                             <li class=" active ">*/
/*                                 <a  href="{{path('cestom_admin_attente_bourse')}}">*/
/*                                     <i class="blue ace-icon fa fa-pause bigger-120"></i>*/
/*                                     En attente*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_valide_liste_bourse')}}">*/
/*                                     <i class="green ace-icon fa fa-check bigger-120"></i>*/
/*                                     Validé*/
/*                                 </a>*/
/*                             </li>*/
/* 			    <li class="dropdown ">*/
/*                                 <a  href="{{path('cestom_admin_rejete_liste_bourse')}}">*/
/*                                     <i class="red ace-icon fa fa-ban bigger-120"></i>*/
/*                                     Rejeté*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content">*/
/*                             <div id="formation" class="tab-pane in active">*/
/*                                 <div class="widget-body">*/
/*                                           */
/*                                     <div style="background-color:#337ab7" class="table-header">*/
/*                                         Liste des documents en attente de validation*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div  class=" bordertable table-responsive">*/
/*                                         <table id="listbourse" style= "border : solid 1px darkgrey; " class=" table table-striped  table-hover  bordertable">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/* */
/* */
/*                                                     <th>Nom & Prénom  </th>*/
/* 													<th> Type de doc </th>*/
/* 													<th> Date d'upload </th>*/
/* 													<th> Ouvrir </th>*/
/* 													<th> Statut </th>*/
/* 													<th> Validation </th>*/
/* 													<th> Rejet </th>*/
/* 													*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for bourse in bourses %}*/
/*                                                     <tr>*/
/*                                                         */
/*                                                         <td>{{bourse.idmembre.nomMembre }} {{bourse.idmembre.prenomMembre }}</td>*/
/*                                                         <td>{{bourse.typeDoc }} </td>*/
/*                                                         <td>{{bourse.dateCreation | date("d/m/Y") }} </td>*/
/*                                                         <td><span class="label label-sm label-info arrowed arrowed-righ"><a href="{{ vich_uploader_asset(bourse, 'fichierBourse') }} " style="color:white" target="_blank">Cliquer {{bourse.docBourse }}</a></span> </td>*/
/*                                                         <td> <span class="label label-sm label-warning">{{bourse.etatDoc }}</span> </td>*/
/*                                                         <td><a class="validerDoc" href="{{path ('cestom_admin_valide_bourse',{'idbourse':bourse.idbourse})}}"> <button  class=" btn btn-xs btn-success">*/
/* 															<i class="ace-icon fa fa-check bigger-120"></i>Valider*/
/* 														</button></a></td>*/
/*                                                         <td><button class="btn btn-xs btn-default">*/
/* 															<i class="ace-icon fa fa-ban red bigger-130"></i>														<span class="label label-sm label-inverse arrowed-in">Rejeter</span>*/
/* */
/* 														</button></td>*/
/* 														*/
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
/* */
/*             <!-- PAGE CONTENT ENDS -->*/
/*         </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
/* */
/* <div id="dialog-form" title="Valider le dossier">*/
/* 	<h4 class="validateTips">Attention! Vous êtes sur le point de valider le dossier. Veuillez ouvrir le document au moins une seule fois. </h4>*/
/* */
/* 	<form>*/
/* 		<fieldset>*/
/* 						<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">*/
/* */
/* 		</fieldset>*/
/* 	</form>*/
/* </div> */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/jquery-ui.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*             $('.main').removeClass('active');*/
/*             $('#menu_bourse').addClass('active');*/
/*             $('#listbourse').DataTable({*/
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
/*               var dialog, form,theHREF;*/
/* 			*/
/* */
/* 		function valider() {*/
/* 			var valid = true;*/
/* 			 window.location.href = theHREF;*/
/* 			dialog.dialog( "close" );*/
/* 			return valid;*/
/* 		}*/
/* */
/* */
/* 		dialog = $( "#dialog-form" ).dialog({*/
/* 			autoOpen: false,*/
/* 			height: 200,*/
/* 			width: 400,*/
/* 			modal: true,*/
/* 			buttons: {*/
/* 				"Valider": valider,*/
/* 				Annuler: function(event) {*/
/* */
/* 					dialog.dialog( "close" );*/
/* 				}*/
/* 			},*/
/* 			close: function() {*/
/* 				form[ 0 ].reset();*/
/* */
/* 			}*/
/* 		});*/
/* */
/* 		form = dialog.find( "form" ).on( "submit", function( event ) {*/
/* */
/* 			*/
/* 		});*/
/*          $(".validerDoc" ).on( "click", function(e) {*/
/*                        	e.preventDefault();*/
/* 			 theHREF = $(this).attr("href");*/
/* 			dialog.dialog( "open" );*/
/* 		});*/
/* 		*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

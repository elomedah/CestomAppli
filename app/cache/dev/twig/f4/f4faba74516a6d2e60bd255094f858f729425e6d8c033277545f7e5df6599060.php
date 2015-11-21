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
        <script src=\"";
        // line 7
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

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Home</a>
        </li>
        <li>

            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">Gestion des Bourses</a>
        </li>

        <li class=\"active\">Dossier en attente de validation</li>
    </ul>

";
    }

    // line 37
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 49
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 58
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        // line 73
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                    <i class=\"blue ace-icon fa fa-pause bigger-120\"></i>
                                    En attente
                                </a>
                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">
                                    <i class=\"green ace-icon fa fa-check bigger-120\"></i>
                                    Validé
                                </a>
                            </li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
                                <a  href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
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

                                                    <th> Action</th>
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bourses"]) ? $context["bourses"] : $this->getContext($context, "bourses")));
        foreach ($context['_seq'] as $context["_key"] => $context["bourse"]) {
            // line 121
            echo "                                                    <tr>
                                                        <td>

                                                            <a class=\"green\" href=\"#\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bourse"], "idmembre", array()), "nomMembre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bourse"], "idmembre", array()), "prenomMembre", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "typeDoc", array()), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bourse"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                                        <td><span class=\"label label-sm label-info arrowed arrowed-righ\"><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["bourse"], "fichierBourse"), "html", null, true);
            echo " \" style=\"color:white\" target=\"_blank\">Cliquer ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "docBourse", array()), "html", null, true);
            echo "</a></span> </td>
                                                        <td> <span class=\"label label-sm label-warning\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["bourse"], "etatDoc", array()), "html", null, true);
            echo "</span> </td>
                                                        <td><button  class=\"validerDoc btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-120\"></i>Valider
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button></td>
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
        // line 145
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

<div id=\"dialog-form\" title=\"Create new user\">
\t<p class=\"validateTips\">All form fields are required.</p>

\t<form>
\t\t<fieldset>
\t\t\t<label for=\"name\">Name</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" value=\"Jane Smith\" class=\"text ui-widget-content ui-corner-all\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"text\" name=\"email\" id=\"email\" value=\"jane@smith.com\" class=\"text ui-widget-content ui-corner-all\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"password\" value=\"xxxxxxx\" class=\"text ui-widget-content ui-corner-all\">

\t\t\t<!-- Allow form submission with keyboard without duplicating the dialog button -->
\t\t\t<input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
\t\t</fieldset>
\t</form>
</div>

";
    }

    // line 187
    public function block_javascript($context, array $blocks = array())
    {
        // line 188
        echo "
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
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

var dialog, form,
\t\t
\t\t\tallFields = \$( [] ).add( name ).add( email ).add( password );
\t\t\t

\t\tfunction addUser() {
\t\t\tvar valid = true;
\t\t\t
\t\t\treturn valid;
\t\t}

\t\tdialog = \$( \"#dialog-form\" ).dialog({
\t\t\tautoOpen: false,
\t\t\theight: 300,
\t\t\twidth: 350,
\t\t\tmodal: true,
\t\t\tbuttons: {
\t\t\t\t\"Create an account\": addUser,
\t\t\t\tCancel: function() {
\t\t\t\t\tdialog.dialog( \"close\" );
\t\t\t\t}
\t\t\t},
\t\t\tclose: function() {
\t\t\t\tform[ 0 ].reset();
\t\t\t\tallFields.removeClass( \"ui-state-error\" );
\t\t\t}
\t\t});

\t\tform = dialog.find( \"form\" ).on( \"submit\", function( event ) {
\t\t\tevent.preventDefault();
\t\t\taddUser();
\t\t});

\t\t\$(\".validerDoc\" ).button().on( \"click\", function() {
                        alert(\"jjjj\");
\t\t\tdialog.dialog( \"open\" );
\t\t});

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
        return array (  317 => 190,  313 => 189,  310 => 188,  307 => 187,  263 => 145,  246 => 134,  240 => 133,  236 => 132,  232 => 131,  226 => 130,  215 => 121,  211 => 120,  174 => 86,  165 => 80,  155 => 73,  142 => 62,  132 => 58,  127 => 55,  123 => 54,  120 => 53,  110 => 49,  105 => 46,  101 => 45,  98 => 44,  95 => 43,  85 => 37,  74 => 27,  67 => 23,  60 => 18,  57 => 17,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css')}}" />*/
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
/*             <a href="{{path('cestom_admin_ajouter_ville')}}">Gestion des Bourses</a>*/
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
/*                                     <i class="blue ace-icon fa fa-pause bigger-120"></i>*/
/*                                     En attente*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_bureau_ville')}}">*/
/*                                     <i class="green ace-icon fa fa-check bigger-120"></i>*/
/*                                     Validé*/
/*                                 </a>*/
/*                             </li>*/
/* 							<li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_bureau_ville')}}">*/
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
/*                                                     <th> Action</th>*/
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
/*                                                         <td>*/
/* */
/*                                                             <a class="green" href="#">*/
/*                                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                             </a>*/
/* */
/*                                                         </td>*/
/* */
/*                                                         <td>{{bourse.idmembre.nomMembre }} {{bourse.idmembre.prenomMembre }}</td>*/
/*                                                         <td>{{bourse.typeDoc }} </td>*/
/*                                                         <td>{{bourse.dateCreation | date("d/m/Y") }} </td>*/
/*                                                         <td><span class="label label-sm label-info arrowed arrowed-righ"><a href="{{ vich_uploader_asset(bourse, 'fichierBourse') }} " style="color:white" target="_blank">Cliquer {{bourse.docBourse }}</a></span> </td>*/
/*                                                         <td> <span class="label label-sm label-warning">{{bourse.etatDoc }}</span> </td>*/
/*                                                         <td><button  class="validerDoc btn btn-xs btn-success">*/
/* 															<i class="ace-icon fa fa-check bigger-120"></i>Valider*/
/* 														</button></td>*/
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
/* <div id="dialog-form" title="Create new user">*/
/* 	<p class="validateTips">All form fields are required.</p>*/
/* */
/* 	<form>*/
/* 		<fieldset>*/
/* 			<label for="name">Name</label>*/
/* 			<input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">*/
/* 			<label for="email">Email</label>*/
/* 			<input type="text" name="email" id="email" value="jane@smith.com" class="text ui-widget-content ui-corner-all">*/
/* 			<label for="password">Password</label>*/
/* 			<input type="password" name="password" id="password" value="xxxxxxx" class="text ui-widget-content ui-corner-all">*/
/* */
/* 			<!-- Allow form submission with keyboard without duplicating the dialog button -->*/
/* 			<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">*/
/* 		</fieldset>*/
/* 	</form>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/* */
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
/* var dialog, form,*/
/* 		*/
/* 			allFields = $( [] ).add( name ).add( email ).add( password );*/
/* 			*/
/* */
/* 		function addUser() {*/
/* 			var valid = true;*/
/* 			*/
/* 			return valid;*/
/* 		}*/
/* */
/* 		dialog = $( "#dialog-form" ).dialog({*/
/* 			autoOpen: false,*/
/* 			height: 300,*/
/* 			width: 350,*/
/* 			modal: true,*/
/* 			buttons: {*/
/* 				"Create an account": addUser,*/
/* 				Cancel: function() {*/
/* 					dialog.dialog( "close" );*/
/* 				}*/
/* 			},*/
/* 			close: function() {*/
/* 				form[ 0 ].reset();*/
/* 				allFields.removeClass( "ui-state-error" );*/
/* 			}*/
/* 		});*/
/* */
/* 		form = dialog.find( "form" ).on( "submit", function( event ) {*/
/* 			event.preventDefault();*/
/* 			addUser();*/
/* 		});*/
/* */
/* 		$(".validerDoc" ).button().on( "click", function() {*/
/*                         alert("jjjj");*/
/* 			dialog.dialog( "open" );*/
/* 		});*/
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

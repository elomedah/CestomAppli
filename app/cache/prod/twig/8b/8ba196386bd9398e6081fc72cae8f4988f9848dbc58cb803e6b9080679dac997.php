<?php

/* CestomAdminBundle:GestionMembre:ajouterVille.html.twig */
class __TwigTemplate_55e27b3a057b4653642db091afde8e836dd9ab80b8adc1cf2ec5f6a942e04865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterVille.html.twig", 3);
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

";
    }

    // line 10
    public function block_navigation($context, array $blocks = array())
    {
        // line 11
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
        <li>

            <a href=\"#\">Gestion des villes</a>
        </li>

        <li class=\"active\">Ville</li>
    </ul>

";
    }

    // line 30
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "        <div class=\"alert alert-block alert-danger\">
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
                                    <li class=\" active\">
                                        <a  href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                            <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                            Ville
                                        </a>
                                    </li>



                                    <li class=\"dropdown\">
                                        <a  href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_bureau_ville");
        echo "\">
                                            <i class=\"green ace-icon fa fa-star bigger-120\"></i>
                                            Bureau de la ville
                                        </a>


                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    <div id=\"formation\" class=\"tab-pane in active\">
                                        <div class=\"widget-body\">

                                            

                                               
                                                    
                                                    
                                                <div class=\"table-header\">
                                                    Liste des villes
                                                </div>

                                                <table id=\"listville\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"center\">
                                                                <label class=\"position-relative\">
                                                                    <input type=\"checkbox\" class=\"ace\" />
                                                                    <span class=\"lbl\"></span>
                                                                </label>
                                                            </th>

                                                            <th> Action</th>
                                                            <th>Nom de la ville  </th>
                                                           
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 117
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville", array("idville" => $this->getAttribute($context["ville"], "idville", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomville", array()), "html", null, true);
            echo "</td>
                                                                

                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                                    </tbody>
                                                </table>

 <form ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">\t

 <fieldset>
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Ajouter une ville
                        </h4>
                    </div>
                                                    ";
        // line 153
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVille.html.twig", "CestomAdminBundle:GestionMembre:ajouterVille.html.twig", 153)->display($context);
        // line 154
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Ajouter
                                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
 </fieldset>
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

    // line 188
    public function block_javascript($context, array $blocks = array())
    {
        // line 189
        echo "    
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                                            jQuery(function(\$) {
                                 
                                  \$('.main').removeClass('active');
                                  \$('#menu_ville').addClass('active');
                                                                \$('#listville').DataTable({
                                                                    
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
        return "CestomAdminBundle:GestionMembre:ajouterVille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 191,  294 => 190,  291 => 189,  288 => 188,  252 => 154,  250 => 153,  237 => 145,  232 => 142,  221 => 137,  212 => 131,  196 => 117,  192 => 116,  150 => 77,  138 => 68,  123 => 55,  113 => 51,  108 => 48,  104 => 47,  101 => 46,  91 => 42,  86 => 39,  82 => 38,  79 => 37,  76 => 36,  66 => 30,  47 => 11,  44 => 10,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*     <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.custom.min.css')}}" />*/
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
/*             <a href="#">Home</a>*/
/*         </li>*/
/*         <li>*/
/* */
/*             <a href="#">Gestion des villes</a>*/
/*         </li>*/
/* */
/*         <li class="active">Ville</li>*/
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
/*                                     <li class=" active">*/
/*                                         <a  href="{{path('cestom_admin_ajouter_ville')}}">*/
/*                                             <i class="gblue ace-icon fa fa-user bigger-120"></i>*/
/*                                             Ville*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/* */
/* */
/*                                     <li class="dropdown">*/
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
/*                                     <div id="formation" class="tab-pane in active">*/
/*                                         <div class="widget-body">*/
/* */
/*                                             */
/* */
/*                                                */
/*                                                     */
/*                                                     */
/*                                                 <div class="table-header">*/
/*                                                     Liste des villes*/
/*                                                 </div>*/
/* */
/*                                                 <table id="listville" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                                     <thead>*/
/*                                                         <tr>*/
/*                                                             <th class="center">*/
/*                                                                 <label class="position-relative">*/
/*                                                                     <input type="checkbox" class="ace" />*/
/*                                                                     <span class="lbl"></span>*/
/*                                                                 </label>*/
/*                                                             </th>*/
/* */
/*                                                             <th> Action</th>*/
/*                                                             <th>Nom de la ville  </th>*/
/*                                                            */
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for ville in villes %}*/
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
/*                                                                     <a class="green" href="{{path('cestom_admin_modifier_ville',{'idville': ville.idville})}}">*/
/*                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                     </a>*/
/* */
/*                                                                 </td>*/
/* */
/*                                                                 <td>{{ ville.nomville}}</td>*/
/*                                                                 */
/* */
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/* */
/*  <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_ville')}}">	*/
/* */
/*  <fieldset>*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Ajouter une ville*/
/*                         </h4>*/
/*                     </div>*/
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireVille.html.twig" %}*/
/*                                                     <div class="form-actions center">*/
/*                                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                             Ajouter*/
/*                                                             <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*  </fieldset>*/
/*                                                 </form>*/
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
/*     */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script	src="{{asset('assets/js/jquery.dataTables.bootstrap.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*                                                             jQuery(function($) {*/
/*                                  */
/*                                   $('.main').removeClass('active');*/
/*                                   $('#menu_ville').addClass('active');*/
/*                                                                 $('#listville').DataTable({*/
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
/*                                        */
/*                                                             });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

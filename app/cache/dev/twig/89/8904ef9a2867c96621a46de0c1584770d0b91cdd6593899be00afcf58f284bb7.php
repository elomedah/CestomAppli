<?php

/* CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig */
class __TwigTemplate_bb7e0923abd93ca9f5783cf73eed927cdcd46322ad4a3ad072c34a9d0232b7ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig", 3);
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

            <a href=\"#\">Gestion des universités</a>
        </li>

        <li class=\"active\">Liste des universités</li>
    </ul>

";
    }

    // line 30
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des universités/Ecole

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
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
                                                                       
                                                <div class=\"table-header\">
                                                    Liste des universités
                                                </div>

                            
                                 <table id=\"listuniv\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                          
                                     <thead >
                                                        <tr>
                                                            <th class=\"center\">
                                                                <label class=\"position-relative\">
                                                                    <input type=\"checkbox\" class=\"ace\" />
                                                                    <span class=\"lbl\"></span>
                                                                </label>
                                                            </th>

                                                            <th> Action</th>
                                                            <th>Nom de l'université  </th>
                                                                                                                       <th>Contact </th>
                                                            <th>Adresse </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universites"]) ? $context["universites"] : $this->getContext($context, "universites")));
        foreach ($context['_seq'] as $context["_key"] => $context["universite"]) {
            // line 92
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => $this->getAttribute($context["universite"], "iduniv", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "nomuniv", array()), "html", null, true);
            echo "</td>
                                                                                                                                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "contactuniv", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "addresseuniv", array()), "html", null, true);
            echo "</td>


                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['universite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                                    </tbody>
                                                    
                                                </table>
                           

 <form ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">\t
 <fieldset>
                    <div class=\"col-sm-10 widget-main\">
                        <h4 class=\"header blue bolder smaller\">
                            Ajouter une nouvelle université
                        </h4>
                    </div>
                                                    ";
        // line 131
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig", "CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig", 131)->display($context);
        // line 132
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Ajouter
                                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
 </fieldset>
                                                </form>
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

    // line 158
    public function block_javascript($context, array $blocks = array())
    {
        // line 159
        echo "    
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                                            jQuery(function(\$) {
//datepicker plugin
                                                          
                             
                                  \$('.main').removeClass('active');
                                  \$('#menu_universite').addClass('active');
                                                                \$('#listuniv').DataTable({
                                                                    
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
        return "CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 161,  264 => 160,  261 => 159,  258 => 158,  230 => 132,  228 => 131,  216 => 124,  209 => 119,  198 => 114,  194 => 113,  190 => 112,  181 => 106,  165 => 92,  161 => 91,  123 => 55,  113 => 51,  108 => 48,  104 => 47,  101 => 46,  91 => 42,  86 => 39,  82 => 38,  79 => 37,  76 => 36,  66 => 30,  47 => 11,  44 => 10,  37 => 5,  32 => 4,  11 => 3,);
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
/*             <a href="#">Gestion des universités</a>*/
/*         </li>*/
/* */
/*         <li class="active">Liste des universités</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Gestion des universités/Ecole*/
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
/*                                                                        */
/*                                                 <div class="table-header">*/
/*                                                     Liste des universités*/
/*                                                 </div>*/
/* */
/*                             */
/*                                  <table id="listuniv" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                           */
/*                                      <thead >*/
/*                                                         <tr>*/
/*                                                             <th class="center">*/
/*                                                                 <label class="position-relative">*/
/*                                                                     <input type="checkbox" class="ace" />*/
/*                                                                     <span class="lbl"></span>*/
/*                                                                 </label>*/
/*                                                             </th>*/
/* */
/*                                                             <th> Action</th>*/
/*                                                             <th>Nom de l'université  </th>*/
/*                                                                                                                        <th>Contact </th>*/
/*                                                             <th>Adresse </th>*/
/* */
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for universite in universites %}*/
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
/*                                                                     <a class="green" href="{{path('cestom_admin_modifier_universite',{'iduniversite': universite.iduniv})}}">*/
/*                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                                     </a>*/
/* */
/*                                                                 </td>*/
/* */
/*                                                                 <td>{{ universite.nomuniv}}</td>*/
/*                                                                                                                                 <td>{{ universite.contactuniv}}</td>*/
/*                                                                 <td>{{ universite.addresseuniv}}</td>*/
/* */
/* */
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                     */
/*                                                 </table>*/
/*                            */
/* */
/*  <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_universite')}}">	*/
/*  <fieldset>*/
/*                     <div class="col-sm-10 widget-main">*/
/*                         <h4 class="header blue bolder smaller">*/
/*                             Ajouter une nouvelle université*/
/*                         </h4>*/
/*                     </div>*/
/*                                                     {% include "CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig" %}*/
/*                                                     <div class="form-actions center">*/
/*                                                         <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                             Ajouter*/
/*                                                             <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*  </fieldset>*/
/*                                                 </form>*/
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
/* //datepicker plugin*/
/*                                                           */
/*                              */
/*                                   $('.main').removeClass('active');*/
/*                                   $('#menu_universite').addClass('active');*/
/*                                                                 $('#listuniv').DataTable({*/
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
/*                                                             });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */

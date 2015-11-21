<?php

/* CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig */
class __TwigTemplate_5da5c45bbc12ac68cfde4734f8579ac4c29f264f09fb4c078a96655a72a11523 extends Twig_Template
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
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" />

";
    }

    // line 11
    public function block_navigation($context, array $blocks = array())
    {
        // line 12
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\">Home</a>
        </li>
        <li>

            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">Gestion des universités</a>
        </li>

        <li class=\"active\">Liste des universités</li>
    </ul>

";
    }

    // line 31
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des universités/Ecole

";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 52
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">
                   
                            <!-- #section:elements.tab -->
                                                                       
                                                <div class=\"table-header\">
                                                    Liste des universités
                                                </div>
 <br>
                                    <div class=\"table-responsive\">
                            
                                 <table id=\"listuniv\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                          
                                     <thead >
                                                        <tr>
                                                       
                                                            <th> Action</th>
                                                            <th>Nom de l'université  </th>
                                                                                                                       <th>Contact </th>
                                                            <th>Adresse </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universites"]) ? $context["universites"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["universite"]) {
            // line 86
            echo "                                                            <tr>

                                                                <td>

                                                                    <a class=\"green\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => $this->getAttribute($context["universite"], "iduniv", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "nomuniv", array()), "html", null, true);
            echo "</td>
                                                                                                                                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "contactuniv", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "addresseuniv", array()), "html", null, true);
            echo "</td>


                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['universite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                                    </tbody>
                                                    
                                                </table>
                           
                                    </div>
 <form ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_universite");
        echo "\">\t
 <fieldset>
                    <div class=\"col-sm-12 widget-main\">
                        <h4 class=\"header  bolder smaller\">
                            Ajouter une nouvelle université
                        </h4>
                    </div>
                                                    ";
        // line 115
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig", "CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig", 115)->display($context);
        // line 116
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
      
";
    }

    // line 139
    public function block_javascript($context, array $blocks = array())
    {
        // line 140
        echo "    
     <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
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
            \"sLast\":    \"Fin\",
            \"sNext\":    \"  Suivant  \",
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
        return "CestomAdminBundle:GestionMembre:ajouterUniversite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 142,  254 => 141,  251 => 140,  248 => 139,  223 => 116,  221 => 115,  209 => 108,  202 => 103,  191 => 98,  187 => 97,  183 => 96,  174 => 90,  168 => 86,  164 => 85,  133 => 56,  123 => 52,  118 => 49,  114 => 48,  111 => 47,  101 => 43,  96 => 40,  92 => 39,  89 => 38,  86 => 37,  76 => 31,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
/*       <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}" />*/
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
/*             <a href="{{path('cestom_admin_ajouter_universite')}}">Gestion des universités</a>*/
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
/*                    */
/*                             <!-- #section:elements.tab -->*/
/*                                                                        */
/*                                                 <div class="table-header">*/
/*                                                     Liste des universités*/
/*                                                 </div>*/
/*  <br>*/
/*                                     <div class="table-responsive">*/
/*                             */
/*                                  <table id="listuniv" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                                           */
/*                                      <thead >*/
/*                                                         <tr>*/
/*                                                        */
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
/*                                                                 <td>*/
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
/*                                     </div>*/
/*  <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_ajouter_universite')}}">	*/
/*  <fieldset>*/
/*                     <div class="col-sm-12 widget-main">*/
/*                         <h4 class="header  bolder smaller">*/
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
/*       */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     */
/*      <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
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
/*             "sLast":    "Fin",*/
/*             "sNext":    "  Suivant  ",*/
/*             "sPrevious": "  Précédent  "*/
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

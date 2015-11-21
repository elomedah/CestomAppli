<?php

/* CestomAdminBundle:GestionMembre:modifierUniversite.html.twig */
class __TwigTemplate_54e402551925ef97d5190a4bc2430d4bb496981e122d299bd4b6b9be1f97d36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierUniversite.html.twig", 3);
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

        <li class=\"active\">
            <a href=\"#\">Modifier une université</a>
        </li>

    </ul>

";
    }

    // line 34
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des universités/Ecole

";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageerror"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <form ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => (isset($context["iduniversite"]) ? $context["iduniversite"] : $this->getContext($context, "iduniversite")))), "html", null, true);
        echo "\">\t
                        <fieldset>
                            <div class=\"col-sm-12 widget-main\">
                                <h4 class=\"header blue bolder smaller\">
                                    Modifier les infos de l' université
                                </h4>
                            </div>
                            ";
        // line 73
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig", "CestomAdminBundle:GestionMembre:modifierUniversite.html.twig", 73)->display($context);
        // line 74
        echo "                            <div class=\"form-actions center\">
                                <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                    Modifier
                                    <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>

                    <div class=\"table-header\">
                        Liste des universités
                    </div>
                    <br>
                    <div class=\"table-responsive\">
                        <table id=\"listuniv\"style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                            <thead>
                                <tr>

                                    <th> Action</th>
                                    <th>Nom de l'université  </th>
                                    <th>Contact </th>
                                    <th>Adresse </th>

                                </tr>
                            </thead>

                            <tbody>
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universites"]) ? $context["universites"] : $this->getContext($context, "universites")));
        foreach ($context['_seq'] as $context["_key"] => $context["universite"]) {
            // line 102
            echo "                                    <tr>
                                        <td>



                                            <a class=\"green\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => $this->getAttribute($context["universite"], "iduniv", array()))), "html", null, true);
            echo "\">
                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                            </a>

                                        </td>

                                        <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "nomuniv", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "contactuniv", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "addresseuniv", array()), "html", null, true);
            echo "</td>


                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['universite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            </tbody>
                        </table>
                    </div>
                    <!-- /section:elements.tab -->
                </div><!-- /.col -->



            </div><!-- /.row -->



            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

";
    }

    // line 138
    public function block_javascript($context, array $blocks = array())
    {
        // line 139
        echo "
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 141
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
        return "CestomAdminBundle:GestionMembre:modifierUniversite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 141,  253 => 140,  250 => 139,  247 => 138,  227 => 120,  216 => 115,  212 => 114,  208 => 113,  199 => 107,  192 => 102,  188 => 101,  159 => 74,  157 => 73,  145 => 66,  136 => 59,  126 => 55,  121 => 52,  117 => 51,  114 => 50,  104 => 46,  99 => 43,  95 => 42,  92 => 41,  89 => 40,  79 => 34,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
    }
}
/* */
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block style %} */
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
/*             <a href="{{path('cestom_admin_ajouter_universite')}}">Gestion des universités</a>*/
/*         </li>*/
/* */
/*         <li class="active">*/
/*             <a href="#">Modifier une université</a>*/
/*         </li>*/
/* */
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
/* */
/*                     <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_universite',{'iduniversite':iduniversite})}}">	*/
/*                         <fieldset>*/
/*                             <div class="col-sm-12 widget-main">*/
/*                                 <h4 class="header blue bolder smaller">*/
/*                                     Modifier les infos de l' université*/
/*                                 </h4>*/
/*                             </div>*/
/*                             {% include "CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig" %}*/
/*                             <div class="form-actions center">*/
/*                                 <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                     Modifier*/
/*                                     <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </fieldset>*/
/*                     </form>*/
/* */
/*                     <div class="table-header">*/
/*                         Liste des universités*/
/*                     </div>*/
/*                     <br>*/
/*                     <div class="table-responsive">*/
/*                         <table id="listuniv"style= "border : solid 1px darkgrey; " class="table table-striped table-bordered ">*/
/*                             <thead>*/
/*                                 <tr>*/
/* */
/*                                     <th> Action</th>*/
/*                                     <th>Nom de l'université  </th>*/
/*                                     <th>Contact </th>*/
/*                                     <th>Adresse </th>*/
/* */
/*                                 </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*                                 {% for universite in universites %}*/
/*                                     <tr>*/
/*                                         <td>*/
/* */
/* */
/* */
/*                                             <a class="green" href="{{path('cestom_admin_modifier_universite',{'iduniversite': universite.iduniv})}}">*/
/*                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                             </a>*/
/* */
/*                                         </td>*/
/* */
/*                                         <td>{{ universite.nomuniv}}</td>*/
/*                                         <td>{{ universite.contactuniv}}</td>*/
/*                                         <td>{{ universite.addresseuniv}}</td>*/
/* */
/* */
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
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
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* //datepicker plugin*/
/* */
/*             $('.main').removeClass('active');*/
/*             $('#menu_universite').addClass('active');*/
/* */
/*             $('#listuniv').DataTable({*/
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

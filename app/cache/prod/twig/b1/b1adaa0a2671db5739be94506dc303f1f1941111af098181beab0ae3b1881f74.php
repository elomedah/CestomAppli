<?php

/* CestomAdminBundle:GestionMembre:modifierVille.html.twig */
class __TwigTemplate_ff389c478135aacf1d1299830676d69a5ee442c62f8bdfcc21da3b81940e3524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:modifierVille.html.twig", 3);
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
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">Gestion des villes</a>
        </li>

        <li class=\"active\">Ville</li>
    </ul>

";
    }

    // line 31
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des villes

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
                    <div class=\"tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\" active\">
                                <a  href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
        echo "\">
                                    <i class=\"gblue ace-icon fa fa-building bigger-120\"></i>
                                    Ville
                                </a>
                            </li>

                            <li class=\"dropdown\">
                                <a  href=\"";
        // line 74
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
                                    <form ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville", array("idville" => (isset($context["idville"]) ? $context["idville"] : null))), "html", null, true);
        echo "\">\t
                                        <fieldset >
                                            <div class=\"col-sm-12 widget-main\">
                                                <h4 class=\"header blue bolder smaller\">
                                                    Modifier une ville
                                                </h4>
                                            </div>
                                            ";
        // line 91
        $this->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVille.html.twig", "CestomAdminBundle:GestionMembre:modifierVille.html.twig", 91)->display($context);
        // line 92
        echo "                                             </fieldset >
                                            <div class=\"form-actions center\">
                                                <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                    Modifier
                                                    <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                                </button>
                                            </div>
                                      
                                    </form>

                                    <br>        
                                    <div class=\"table-header\">
                                        Liste des villes
                                    </div>
                                    <br>
                                    <div class=\"table-responsive\">
                                        <table id=\"listville\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr>

                                                    <th> Action</th>
                                                    <th>Nom de la ville  </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 120
            echo "                                                    <tr>


                                                        <td>

                                                            <a class=\"green\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_ville", array("idville" => $this->getAttribute($context["ville"], "idville", array()))), "html", null, true);
            echo "\">
                                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                            </a>

                                                        </td>

                                                        <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomville", array()), "html", null, true);
            echo "</td>


                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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

    // line 162
    public function block_javascript($context, array $blocks = array())
    {
        // line 163
        echo "
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
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
        return "CestomAdminBundle:GestionMembre:modifierVille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 165,  277 => 164,  274 => 163,  271 => 162,  243 => 136,  232 => 131,  223 => 125,  216 => 120,  212 => 119,  183 => 92,  181 => 91,  169 => 84,  156 => 74,  146 => 67,  133 => 56,  123 => 52,  118 => 49,  114 => 48,  111 => 47,  101 => 43,  96 => 40,  92 => 39,  89 => 38,  86 => 37,  76 => 31,  65 => 21,  58 => 17,  51 => 12,  48 => 11,  41 => 6,  37 => 5,  32 => 4,  11 => 3,);
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
/*             <a href="{{path('cestom_admin_ajouter_ville')}}">Gestion des villes</a>*/
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
/* */
/*                     <!-- #section:elements.tab -->*/
/*                     <div class="tabbable">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class=" active">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_ville')}}">*/
/*                                     <i class="gblue ace-icon fa fa-building bigger-120"></i>*/
/*                                     Ville*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a  href="{{path('cestom_admin_ajouter_bureau_ville')}}">*/
/*                                     <i class="green ace-icon fa fa-star bigger-120"></i>*/
/*                                     Bureau de la ville*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content">*/
/*                             <div id="formation" class="tab-pane in active">*/
/*                                 <div class="widget-body">*/
/*                                     <form {{ form_enctype(form) }}  method = "POST"  action = "{{ path('cestom_admin_modifier_ville',{'idville':idville})}}">	*/
/*                                         <fieldset >*/
/*                                             <div class="col-sm-12 widget-main">*/
/*                                                 <h4 class="header blue bolder smaller">*/
/*                                                     Modifier une ville*/
/*                                                 </h4>*/
/*                                             </div>*/
/*                                             {% include "CestomAdminBundle:GestionMembre:formulaireVille.html.twig" %}*/
/*                                              </fieldset >*/
/*                                             <div class="form-actions center">*/
/*                                                 <button id="valider" type="submit" class="btn btn-sm btn-success">*/
/*                                                     Modifier*/
/*                                                     <i class="ace-icon fa fa-pencil icon-on-right bigger-110"></i>*/
/*                                                 </button>*/
/*                                             </div>*/
/*                                       */
/*                                     </form>*/
/* */
/*                                     <br>        */
/*                                     <div class="table-header">*/
/*                                         Liste des villes*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div class="table-responsive">*/
/*                                         <table id="listville" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered table-hover">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/* */
/*                                                     <th> Action</th>*/
/*                                                     <th>Nom de la ville  </th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/* */
/*                                             <tbody>*/
/*                                                 {% for ville in villes %}*/
/*                                                     <tr>*/
/* */
/* */
/*                                                         <td>*/
/* */
/*                                                             <a class="green" href="{{path('cestom_admin_modifier_ville',{'idville': ville.idville})}}">*/
/*                                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                                             </a>*/
/* */
/*                                                         </td>*/
/* */
/*                                                         <td>{{ ville.nomville}}</td>*/
/* */
/* */
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
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* */
/*     <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*             $('.main').removeClass('active');*/
/*             $('#menu_ville').addClass('active');*/
/*             $('#listville').DataTable({*/
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

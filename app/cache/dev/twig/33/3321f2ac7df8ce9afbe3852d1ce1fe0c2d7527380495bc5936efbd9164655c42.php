<?php

/* CestomAdminBundle:GestionMembre:gestionMembre.html.twig */
class __TwigTemplate_c4179af3f1e03cdbf7b0c7cc559159fd3cc55ff82f3d45597c613b8f86fb8d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CestomAdminBundle:GestionMembre:gestionMembre.html.twig", 2);
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
        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" />
    <style type=\"text/css\">

    </style>
";
    }

    // line 13
    public function block_navigation($context, array $blocks = array())
    {
        // line 14
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
        <li class=\"active\">Gestion des membres</li>
    </ul>

";
    }

    // line 27
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Liste des membres

";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\"> 
            <div class=\"row\">

                <div class=\"col-xs-14\">


                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "                        <div class=\"alert alert-block alert-success\">
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageechec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 51
            echo "                        <div class=\"alert alert-block alert-danger\">
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
        echo "                    <div>
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_member");
        echo "\">
                            <button id=\"ajouter\" type=\"button\" class=\"btn btn-sm btn-success\">
                                Ajouter nouveau
                            </button>
                        </a>


                    </div>
                    <br>
                    <div>
                        <div class=\"nav-search\" id=\"nav-search\">
                            <form   method = \"POST\"  action = \"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\"class=\"form-search\">
                                <span class=\"input-icon\">
                                    <input name=\"ville\" type=\"choice\" placeholder=\"Ville ...\" class=\"nav-search-input\" id=\"ville\" autocomplete=\"off\" />
                                    <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                                </span>
                                <span class=\"input-icon\">
                                    <input name=\"universite\" type=\"text\" placeholder=\"Université ...\" class=\"nav-search-input\" id=\"universite\" autocomplete=\"off\" />
                                    <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                                </span>
                                <button class=\"nav-search-button\" id=\"ajouter\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                    Rechercher
                                </button>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class=\"table-header col-xs-14\"  width=\"100%\">
                        Les membres
                    </div>
                    <br>
                    <div class=\"table-responsive\">

                        <table id=\"listuser\" style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered\"  cellspacing=\"0\" width=\"100%\">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Nom </th>
                                    <th>Prénom</th>
                                    <th>Username</th>
                                    <th>Sexe</th>
                                    <th>Numéro Passeport</th>
                                    <th>Date émission</th>
                                    <th>Date d'expiration</th>
                                    <th>Promotion</th>
                                    <th>Contact d'urgence</th>
                                    <th>Lycée fréquenté</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 114
            echo "                                    <tr>


                                        <td>



                                            <a class=\"green\" href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => $this->getAttribute($context["membre"], "idmembre", array()))), "html", null, true);
            echo "\">
                                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                            </a>

                                        </td>
                                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nomMembre", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenomMembre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "id", array()), "username", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "sexe", array()), "html", null, true);
            echo "</td>

                                        <th>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "numeroPassportMembre", array()), "html", null, true);
            echo "</th>
                                        <th>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateExpiMembre", array()), "html", null, true);
            echo "</th>
                                        <th>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateEtabMembre", array()), "html", null, true);
            echo "</th>
                                        <th>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "promotionMembre", array()), "html", null, true);
            echo "</th>
                                        <th>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "contactUrgence", array()), "html", null, true);
            echo "</th>
                                        <th>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dernierLyceeFrequente", array()), "html", null, true);
            echo "</th>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
";
    }

    // line 150
    public function block_javascript($context, array $blocks = array())
    {
        // line 151
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\" charset=\"utf-8\">
        jQuery(function(\$) {

           

            \$('#listuser').DataTable({
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ lignes\",
                    \"zeroRecords\": \"Aucune donnée retrouvée\",
                    \"sSearch\": \"Rechercher\",
                    \"info\": \"Page _PAGE_ sur _PAGES_\",
                    \"infoEmpty\": \"Aucune donnée\",
                    \"oPaginate\": {
                        \"sFirst\": \"Premier\",
                        \"sLast\": \"FIn\",
                        \"sNext\": \" Suivant  \",
                        \"sPrevious\": \" Précedent  \"
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
        return "CestomAdminBundle:GestionMembre:gestionMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 152,  275 => 151,  272 => 150,  259 => 139,  250 => 136,  246 => 135,  242 => 134,  238 => 133,  234 => 132,  230 => 131,  225 => 129,  221 => 128,  217 => 127,  213 => 126,  205 => 121,  196 => 114,  192 => 113,  146 => 70,  132 => 59,  129 => 58,  119 => 54,  114 => 51,  110 => 50,  107 => 49,  97 => 45,  92 => 42,  88 => 41,  79 => 34,  76 => 33,  66 => 27,  52 => 14,  49 => 13,  40 => 6,  35 => 5,  32 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block style %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css')}}" />*/
/*     <style type="text/css">*/
/* */
/*     </style>*/
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
/*         <li class="active">Gestion des membres</li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block soustitre %} */
/* */
/*     Liste des membres*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="widget-body">*/
/*         <div class="widget-main no-padding"> */
/*             <div class="row">*/
/* */
/*                 <div class="col-xs-14">*/
/* */
/* */
/*                     {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
/*                         <div class="alert alert-block alert-success">*/
/*                             <div class="flash-notice">*/
/* */
/*                                 {{ flashMessage }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                     {% for flashMessage in app.session.flashbag.get('messageechec') %}*/
/*                         <div class="alert alert-block alert-danger">*/
/*                             <div class="flash-notice">*/
/* */
/*                                 {{ flashMessage }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <div>*/
/*                         <a href="{{ path('cestom_admin_ajouter_member')}}">*/
/*                             <button id="ajouter" type="button" class="btn btn-sm btn-success">*/
/*                                 Ajouter nouveau*/
/*                             </button>*/
/*                         </a>*/
/* */
/* */
/*                     </div>*/
/*                     <br>*/
/*                     <div>*/
/*                         <div class="nav-search" id="nav-search">*/
/*                             <form   method = "POST"  action = "{{ path('cestom_admin_homepage')}}"class="form-search">*/
/*                                 <span class="input-icon">*/
/*                                     <input name="ville" type="choice" placeholder="Ville ..." class="nav-search-input" id="ville" autocomplete="off" />*/
/*                                     <i class="ace-icon fa fa-search nav-search-icon"></i>*/
/*                                 </span>*/
/*                                 <span class="input-icon">*/
/*                                     <input name="universite" type="text" placeholder="Université ..." class="nav-search-input" id="universite" autocomplete="off" />*/
/*                                     <i class="ace-icon fa fa-search nav-search-icon"></i>*/
/*                                 </span>*/
/*                                 <button class="nav-search-button" id="ajouter" type="submit" class="btn btn-sm btn-success">*/
/*                                     Rechercher*/
/*                                 </button>*/
/*                             </form>*/
/*                         </div><!-- /.nav-search -->*/
/*                     </div>*/
/*                     <br>*/
/*                     <br>*/
/*                     <br>*/
/* */
/*                     <div class="table-header col-xs-14"  width="100%">*/
/*                         Les membres*/
/*                     </div>*/
/*                     <br>*/
/*                     <div class="table-responsive">*/
/* */
/*                         <table id="listuser" style= "border : solid 1px darkgrey; " class="table table-striped table-bordered"  cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th> </th>*/
/*                                     <th>Nom </th>*/
/*                                     <th>Prénom</th>*/
/*                                     <th>Username</th>*/
/*                                     <th>Sexe</th>*/
/*                                     <th>Numéro Passeport</th>*/
/*                                     <th>Date émission</th>*/
/*                                     <th>Date d'expiration</th>*/
/*                                     <th>Promotion</th>*/
/*                                     <th>Contact d'urgence</th>*/
/*                                     <th>Lycée fréquenté</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*                                 {% for membre in membres %}*/
/*                                     <tr>*/
/* */
/* */
/*                                         <td>*/
/* */
/* */
/* */
/*                                             <a class="green" href="{{path('cestom_admin_modifier_member',{'idmembre': membre.idmembre})}}">*/
/*                                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                                             </a>*/
/* */
/*                                         </td>*/
/*                                         <td>{{ membre.nomMembre}} </td>*/
/*                                         <td>{{membre.prenomMembre}}</td>*/
/*                                         <td>{{membre.id.username}} </td>*/
/*                                         <td>{{membre.sexe}}</td>*/
/* */
/*                                         <th>{{membre.numeroPassportMembre}}</th>*/
/*                                         <th>{{membre.dateExpiMembre}}</th>*/
/*                                         <th>{{membre.dateEtabMembre}}</th>*/
/*                                         <th>{{membre.promotionMembre}}</th>*/
/*                                         <th>{{membre.contactUrgence}}</th>*/
/*                                         <th>{{membre.dernierLyceeFrequente}}</th>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script type="text/javascript"src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>*/
/* */
/* */
/*     <script type="text/javascript" charset="utf-8">*/
/*         jQuery(function($) {*/
/* */
/*            */
/* */
/*             $('#listuser').DataTable({*/
/*                 "language": {*/
/*                     "lengthMenu": "Afficher _MENU_ lignes",*/
/*                     "zeroRecords": "Aucune donnée retrouvée",*/
/*                     "sSearch": "Rechercher",*/
/*                     "info": "Page _PAGE_ sur _PAGES_",*/
/*                     "infoEmpty": "Aucune donnée",*/
/*                     "oPaginate": {*/
/*                         "sFirst": "Premier",*/
/*                         "sLast": "FIn",*/
/*                         "sNext": " Suivant  ",*/
/*                         "sPrevious": " Précedent  "*/
/*                     },*/
/*                     "infoFiltered": "(filtré sur _MAX_ total lignes)"*/
/*                 }*/
/*             });*/
/* */
/*             $('.main').removeClass('active');*/
/*             $('#menu_membre').addClass('active');*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */

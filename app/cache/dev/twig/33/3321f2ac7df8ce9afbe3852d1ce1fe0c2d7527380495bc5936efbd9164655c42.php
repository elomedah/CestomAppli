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
    public function block_navigation($context, array $blocks = array())
    {
        // line 5
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

    // line 18
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Liste des membres
    
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
      ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "<div class=\"alert alert-block alert-success\">
<div class=\"flash-notice\">

";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
 ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageechec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 36
            echo "<div class=\"alert alert-block alert-danger\">
<div class=\"flash-notice\">

";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">
 <div class=\"row\">

                <div class=\"col-xs-12\">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

<div class=\"nav-search\" id=\"nav-search\">
                        <form   method = \"POST\"  action = \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("cestom_admin_homepage");
        echo "\"class=\"form-search\">
                            <span class=\"input-icon\">
                                <input name=\"ville\" type=\"choice\" placeholder=\"Ville ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                            </span>
                            <span class=\"input-icon\">
                                <input name=\"universite\" type=\"text\" placeholder=\"Université ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                            </span>
                            
                              <button id=\"ajouter\" type=\"submit\" class=\"btn btn-sm btn-success\">
                             Rechercher
                             </button>
                        </form>
                    </div><!-- /.nav-search -->
    <div> 
    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_member");
        echo "\"> 
        <button id=\"ajouter\" type=\"button\" class=\"btn btn-sm btn-success\">
                        Ajouter nouveau
                    </button>
    </a>
        
         
    </div>
        <br>
    
    <div>
        <div class=\"table-header\">
           Les membres
\t</div>
        <table id=\"listuser\"  style= \"border : solid 1px darkgrey; \"  class=\"table table-striped table-bordered table-hover \" >
            <thead>
                <tr>
                    <th class=\"center\">
                        <label class=\"position-relative\">
                            <input type=\"checkbox\" class=\"ace\" />
                            <span class=\"lbl\"></span>
                        </label>
                    </th>
                     
\t\t    <th> </th>
                    <th>Nom </th>
                    <th>Prénom</th>
\t\t    <th>Username</th>
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 111
            echo "                <tr>

                    <td class=\"center\">
                        <label class=\"position-relative\">
                            <input type=\"checkbox\" class=\"ace\" />
                            <span class=\"lbl\"></span>
                        </label>
                    </td >
                   
                   
<td>
                       
                          

                            <a class=\"green\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => $this->getAttribute($context["membre"], "idmembre", array()))), "html", null, true);
            echo "\">
                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                            </a>

                    </td>
                    <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nomMembre", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenomMembre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "id", array()), "username", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "sexe", array()), "html", null, true);
            echo "</td>
                    
                    <th>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "numeroPassportMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateExpiMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateEtabMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "promotionMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "contactUrgence", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dernierLyceeFrequente", array()), "html", null, true);
            echo "</th>
                </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            </tbody>
        </table>
    </div>
     </div> 
 </div>
     </div>   
 </div> 
 </div>
     </div>       
";
    }

    // line 154
    public function block_javascript($context, array $blocks = array())
    {
        // line 155
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script\tsrc=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('#listuser').DataTable({
                                                                    
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
            \"sPrevious\": \"Précedent\"
        },
            \"infoFiltered\": \"(filtré sur _MAX_ total lignes)\"
        }
                                                                });
\t\t\t\t
                                  \$('.main').removeClass('active');
                                  \$('#menu_membre').addClass('active');
\t\t\t    } );
                      
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
        return array (  275 => 156,  270 => 155,  267 => 154,  254 => 143,  245 => 140,  241 => 139,  237 => 138,  233 => 137,  229 => 136,  225 => 135,  220 => 133,  216 => 132,  212 => 131,  208 => 130,  200 => 125,  184 => 111,  180 => 110,  136 => 69,  117 => 53,  105 => 43,  95 => 39,  90 => 36,  86 => 35,  83 => 34,  73 => 30,  68 => 27,  64 => 26,  61 => 25,  58 => 24,  48 => 18,  34 => 5,  31 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/blog/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
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
/*     */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*       {% for flashMessage in app.session.flashbag.get('messagesucces') %}*/
/* <div class="alert alert-block alert-success">*/
/* <div class="flash-notice">*/
/* */
/* {{ flashMessage }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* */
/*  {% for flashMessage in app.session.flashbag.get('messageechec') %}*/
/* <div class="alert alert-block alert-danger">*/
/* <div class="flash-notice">*/
/* */
/* {{ flashMessage }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/*     <div class="widget-body">*/
/*         <div class="widget-main no-padding">*/
/*  <div class="row">*/
/* */
/*                 <div class="col-xs-12">*/
/*                     <!-- PAGE CONTENT BEGINS -->*/
/*                     <div class="row">*/
/*                         <div class="col-sm-12">*/
/* */
/* <div class="nav-search" id="nav-search">*/
/*                         <form   method = "POST"  action = "{{ path('cestom_admin_homepage')}}"class="form-search">*/
/*                             <span class="input-icon">*/
/*                                 <input name="ville" type="choice" placeholder="Ville ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />*/
/*                                 <i class="ace-icon fa fa-search nav-search-icon"></i>*/
/*                             </span>*/
/*                             <span class="input-icon">*/
/*                                 <input name="universite" type="text" placeholder="Université ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />*/
/*                                 <i class="ace-icon fa fa-search nav-search-icon"></i>*/
/*                             </span>*/
/*                             */
/*                               <button id="ajouter" type="submit" class="btn btn-sm btn-success">*/
/*                              Rechercher*/
/*                              </button>*/
/*                         </form>*/
/*                     </div><!-- /.nav-search -->*/
/*     <div> */
/*     <a href="{{ path('cestom_admin_ajouter_member')}}"> */
/*         <button id="ajouter" type="button" class="btn btn-sm btn-success">*/
/*                         Ajouter nouveau*/
/*                     </button>*/
/*     </a>*/
/*         */
/*          */
/*     </div>*/
/*         <br>*/
/*     */
/*     <div>*/
/*         <div class="table-header">*/
/*            Les membres*/
/* 	</div>*/
/*         <table id="listuser"  style= "border : solid 1px darkgrey; "  class="table table-striped table-bordered table-hover " >*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th class="center">*/
/*                         <label class="position-relative">*/
/*                             <input type="checkbox" class="ace" />*/
/*                             <span class="lbl"></span>*/
/*                         </label>*/
/*                     </th>*/
/*                      */
/* 		    <th> </th>*/
/*                     <th>Nom </th>*/
/*                     <th>Prénom</th>*/
/* 		    <th>Username</th>*/
/*                     <th>Sexe</th>*/
/*                     <th>Numéro Passeport</th>*/
/*                     <th>Date émission</th>*/
/*                     <th>Date d'expiration</th>*/
/*                     <th>Promotion</th>*/
/*                     <th>Contact d'urgence</th>*/
/*                     <th>Lycée fréquenté</th>*/
/* */
/*                     */
/*                 </tr>*/
/*             </thead>*/
/* */
/*             <tbody>*/
/*               {% for membre in membres %}*/
/*                 <tr>*/
/* */
/*                     <td class="center">*/
/*                         <label class="position-relative">*/
/*                             <input type="checkbox" class="ace" />*/
/*                             <span class="lbl"></span>*/
/*                         </label>*/
/*                     </td >*/
/*                    */
/*                    */
/* <td>*/
/*                        */
/*                           */
/* */
/*                             <a class="green" href="{{path('cestom_admin_modifier_member',{'idmembre': membre.idmembre})}}">*/
/*                                 <i class="ace-icon fa fa-pencil bigger-130"></i>*/
/*                             </a>*/
/* */
/*                     </td>*/
/*                     <td>{{ membre.nomMembre}} </td>*/
/*                     <td>{{membre.prenomMembre}}</td>*/
/*                     <td>{{membre.id.username}} </td>*/
/*                     <td>{{membre.sexe}}</td>*/
/*                     */
/*                     <th>{{membre.numeroPassportMembre}}</th>*/
/*                     <th>{{membre.dateExpiMembre}}</th>*/
/*                     <th>{{membre.dateEtabMembre}}</th>*/
/*                     <th>{{membre.promotionMembre}}</th>*/
/*                     <th>{{membre.contactUrgence}}</th>*/
/*                     <th>{{membre.dernierLyceeFrequente}}</th>*/
/*                 </tr>*/
/*              {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*      </div> */
/*  </div>*/
/*      </div>   */
/*  </div> */
/*  </div>*/
/*      </div>       */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>*/
/* 	<script	src="{{asset('assets/js/jquery.dataTables.bootstrap.js')}}"></script>*/
/* <script type="text/javascript">*/
/* 			jQuery(function($) {*/
/* 				$('#listuser').DataTable({*/
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
/*             "sPrevious": "Précedent"*/
/*         },*/
/*             "infoFiltered": "(filtré sur _MAX_ total lignes)"*/
/*         }*/
/*                                                                 });*/
/* 				*/
/*                                   $('.main').removeClass('active');*/
/*                                   $('#menu_membre').addClass('active');*/
/* 			    } );*/
/*                       */
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */

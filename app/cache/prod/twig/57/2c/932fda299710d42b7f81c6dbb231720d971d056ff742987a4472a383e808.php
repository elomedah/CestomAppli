<?php

/* CestomAdminBundle:GestionMembre:gestionMembre.html.twig */
class __TwigTemplate_572c932fda299710d42b7f81c6dbb231720d971d056ff742987a4472a383e808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

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
    
     <!-- #section:basics/content.searchbox -->
                   

";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
      ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "<div class=\"alert alert-block alert-success\">
<div class=\"flash-notice\">

";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
 ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageechec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "<div class=\"alert alert-block alert-danger\">
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
        echo "<div class=\"nav-search\" id=\"nav-search\">
                        <form   method = \"POST\"  action = \"";
        // line 47
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
        // line 63
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
        <table id=\"listuser\" class=\"table table-striped table-bordered table-hover \" >
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
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 105
            echo "                <tr>

                    <td class=\"center\">
                        <label class=\"position-relative\">
                            <input type=\"checkbox\" class=\"ace\" />
                            <span class=\"lbl\"></span>
                        </label>
                    </td >
                   
                   
<td>
                       
                          

                            <a class=\"green\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => $this->getAttribute($context["membre"], "idmembre", array()))), "html", null, true);
            echo "\">
                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                            </a>

                    </td>
                    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nomMembre", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenomMembre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "id", array()), "username", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "sexe", array()), "html", null, true);
            echo "</td>
                    
                    <th>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "numeroPassportMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateExpiMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateEtabMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "promotionMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "contactUrgence", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dernierLyceeFrequente", array()), "html", null, true);
            echo "</th>
                </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </tbody>
        </table>
    </div>
             
";
    }

    // line 143
    public function block_javascript($context, array $blocks = array())
    {
        // line 144
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script\tsrc=\"";
        // line 145
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
        return array (  272 => 145,  267 => 144,  264 => 143,  256 => 137,  247 => 134,  243 => 133,  239 => 132,  235 => 131,  231 => 130,  227 => 129,  222 => 127,  218 => 126,  214 => 125,  210 => 124,  202 => 119,  186 => 105,  182 => 104,  138 => 63,  119 => 47,  116 => 46,  106 => 42,  101 => 39,  97 => 38,  94 => 37,  84 => 33,  79 => 30,  75 => 29,  72 => 28,  69 => 27,  56 => 18,  42 => 5,  39 => 4,  11 => 2,);
    }
}

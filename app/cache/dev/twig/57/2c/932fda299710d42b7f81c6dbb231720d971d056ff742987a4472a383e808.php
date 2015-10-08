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

";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
      ";
        // line 26
        $context['_parent'] = (array) $context;
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
        $context['_parent'] = (array) $context;
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
        echo "    <div> 
    <a href=\"";
        // line 44
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
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 84
            echo "                <tr>

                    <td class=\"center\">
                        <label class=\"position-relative\">
                            <input type=\"checkbox\" class=\"ace\" />
                            <span class=\"lbl\"></span>
                        </label>
                    </td >
                   
                   
<td>
                       
                          

                            <a class=\"green\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => $this->getAttribute($context["membre"], "idMembre", array()))), "html", null, true);
            echo "\">
                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                            </a>

                    </td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nomMembre", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenomMembre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "username", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "sexe", array()), "html", null, true);
            echo "</td>
                    
                    <th>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "numeroPassportMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateExpiMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dateEtabMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "promotionMembre", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "contactUrgence", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "dernierLyceeFrequente", array()), "html", null, true);
            echo "</th>
                </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </tbody>
        </table>
    </div>
             
";
    }

    // line 122
    public function block_javascript($context, array $blocks = array())
    {
        // line 123
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script\tsrc=\"";
        // line 124
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
            \"infoEmpty\": \"Aucune données\",
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
        return array (  248 => 124,  243 => 123,  240 => 122,  232 => 116,  223 => 113,  219 => 112,  215 => 111,  211 => 110,  207 => 109,  203 => 108,  198 => 106,  194 => 105,  190 => 104,  186 => 103,  178 => 98,  162 => 84,  158 => 83,  116 => 44,  113 => 43,  103 => 39,  98 => 36,  94 => 35,  91 => 34,  81 => 30,  76 => 27,  72 => 26,  69 => 25,  66 => 24,  56 => 18,  42 => 5,  39 => 4,  11 => 2,);
    }
}

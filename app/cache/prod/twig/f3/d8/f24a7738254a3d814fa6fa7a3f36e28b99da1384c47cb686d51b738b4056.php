<?php

/* CestomAdminBundle:GestionMembre:ajouterVille.html.twig */
class __TwigTemplate_f3d8f24a7738254a3d814fa6fa7a3f36e28b99da1384c47cb686d51b738b4056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

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
        $context['_parent'] = (array) $context;
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
        $context['_parent'] = (array) $context;
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
        echo $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville");
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
        $context['_parent'] = (array) $context;
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

                                                    ";
        // line 147
        $this->env->loadTemplate("CestomAdminBundle:GestionMembre:formulaireVille.html.twig")->display($context);
        // line 148
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Ajouter
                                                            <i class=\"ace-icon fa fa-save icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
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

    // line 181
    public function block_javascript($context, array $blocks = array())
    {
        // line 182
        echo "    
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 184
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
        return array (  299 => 184,  295 => 183,  292 => 182,  289 => 181,  254 => 148,  252 => 147,  245 => 145,  240 => 142,  229 => 137,  220 => 131,  204 => 117,  200 => 116,  158 => 77,  146 => 68,  131 => 55,  121 => 51,  116 => 48,  112 => 47,  109 => 46,  99 => 42,  94 => 39,  90 => 38,  87 => 37,  84 => 36,  74 => 30,  55 => 11,  52 => 10,  45 => 5,  40 => 4,  11 => 3,);
    }
}

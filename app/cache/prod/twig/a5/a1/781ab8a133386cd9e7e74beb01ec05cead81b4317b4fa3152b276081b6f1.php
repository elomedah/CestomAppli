<?php

/* CestomAdminBundle:GestionMembre:modifierUniversite.html.twig */
class __TwigTemplate_a5a1781ab8a133386cd9e7e74beb01ec05cead81b4317b4fa3152b276081b6f1 extends Twig_Template
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

            <a href=\"#\">Gestion des universités</a>
        </li>

        <li class=\"active\">
            <a href=\"#\">Liste des universités</a>
            </li>
        
                <li class=\"active\">Modification</li>

    </ul>

";
    }

    // line 35
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Gestion des universités/Ecole

";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "
    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 47
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "messageechec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    <div class=\"widget-body\">
        <div class=\"widget-main no-padding\">

            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <!-- #section:elements.tab -->
                                                         
 <form ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => (isset($context["iduniversite"]) ? $context["iduniversite"] : null))), "html", null, true);
        echo "\">\t

                                                    ";
        // line 73
        $this->env->loadTemplate("CestomAdminBundle:GestionMembre:formulaireUniversite.html.twig")->display($context);
        // line 74
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Modifier
                                                            <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                    
                                                <div class=\"table-header\">
                                                    Liste des universités
                                                </div>

                                                <table id=\"listuniv\"style= \"border : solid 1px darkgrey; \" class=\"table table-striped table-bordered \">
                                                    <thead>
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
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["universites"]) ? $context["universites"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["universite"]) {
            // line 106
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_universite", array("iduniversite" => $this->getAttribute($context["universite"], "iduniv", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "nomuniv", array()), "html", null, true);
            echo "</td>
                                                                                                                                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "contactuniv", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["universite"], "addresseuniv", array()), "html", null, true);
            echo "</td>


                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['universite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                                    </tbody>
                                                </table>

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

    // line 154
    public function block_javascript($context, array $blocks = array())
    {
        // line 155
        echo "    
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                                            jQuery(function(\$) {
//datepicker plugin
                                                          

                                                                \$('#listuniv').DataTable();
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
        return array (  272 => 157,  268 => 156,  265 => 155,  262 => 154,  239 => 133,  228 => 128,  224 => 127,  220 => 126,  211 => 120,  195 => 106,  191 => 105,  158 => 74,  156 => 73,  149 => 71,  136 => 60,  126 => 56,  121 => 53,  117 => 52,  114 => 51,  104 => 47,  99 => 44,  95 => 43,  92 => 42,  89 => 41,  79 => 35,  55 => 11,  52 => 10,  45 => 5,  40 => 4,  11 => 3,);
    }
}

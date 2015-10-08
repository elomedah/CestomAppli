<?php

/* CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig */
class __TwigTemplate_e405eff56eeba22f6fd2c8b02a8ed8e90312ec4a2ce5bde5f41a0fdeb38eec44 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        // line 13
        echo "

    <ul class=\"breadcrumb\">
        <li>
            <i class=\"ace-icon fa fa-home home-icon\"></i>
            <a href=\"#\">Home</a>
        </li>
        <li>

            <a href=\"#\">Gestion des membres</a>
        </li>

        <li class=\"active\">Formation</li>
    </ul>

";
    }

    // line 32
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Modifier une  formation 

";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messagesucces"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 41
            echo "        <div class=\"alert alert-block alert-success\">
            <div class=\"flash-notice\">

                ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "messageechec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 50
            echo "        <div class=\"alert alert-block alert-danger\">
            <div class=\"flash-notice\">

                ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
                                    <li class=\"dropdown\">
                                        <a  href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_member", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
                                            <i class=\"gblue ace-icon fa fa-user bigger-120\"></i>
                                            Infos Génerales Membre
                                        </a>
                                    </li>

\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_ville_membre", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"green ace-icon fa fa-building bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                    Villes du Membre
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>

                                    <li class=\"active\">
                                        <a  href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_ajouter_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")))), "html", null, true);
        echo "\">
                                            <i class=\"green ace-icon fa fa-graduation-cap bigger-120\"></i>

                                            Formations du Membre
                                        </a>


                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    <div id=\"formation\" class=\"tab-pane in active\">
                                        <div class=\"widget-body\">

                                            

                                                <form ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method = \"POST\"  action = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")), "idformation" => (isset($context["idformation"]) ? $context["idformation"] : $this->getContext($context, "idformation")))), "html", null, true);
        echo "\">\t

                                                    ";
        // line 105
        $this->env->loadTemplate("CestomAdminBundle:GestionMembre:formulaireFormation.html.twig")->display($context);
        // line 106
        echo "                                                    <div class=\"form-actions center\">
                                                        <button id=\"valider\" type=\"submit\" class=\"btn btn-sm btn-success\">
                                                            Modifier
                                                            <i class=\"ace-icon fa fa-pencil icon-on-right bigger-110\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                    
                                                    
                                                <div class=\"table-header\">
                                                    Liste des formations
                                                </div>

                                                <table id=\"listformation\" style= \"border : solid 1px darkgrey; \"class=\"table table-striped table-bordered table-hover\">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"center\">
                                                                <label class=\"position-relative\">
                                                                    <input type=\"checkbox\" class=\"ace\" />
                                                                    <span class=\"lbl\"></span>
                                                                </label>
                                                            </th>

                                                            <th> </th>
                                                            <th>Libellé  </th>
                                                            <th>Université</th>
                                                            <th>Durée </th>
                                                            <th>Date début</th>
                                                            <th>Programme de bourse</th>
                                                            <th>Diplôme visé</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 142
            echo "                                                            <tr>

                                                                <td class=\"center\">
                                                                    <label class=\"position-relative\">
                                                                        <input type=\"checkbox\" class=\"ace\" />
                                                                        <span class=\"lbl\"></span>
                                                                    </label>
                                                                </td >


                                                                <td>



                                                                    <a class=\"green\" href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cestom_admin_modifier_formation", array("idmembre" => (isset($context["idmembre"]) ? $context["idmembre"] : $this->getContext($context, "idmembre")), "idformation" => $this->getAttribute($context["formation"], "idFormation", array()))), "html", null, true);
            echo "\">
                                                                        <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                                                                    </a>

                                                                </td>

                                                                <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelleFormation", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "iduniv", array()), "nomuniv", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "diplomeViseFormation", array()), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dureeFormation", array()), "html", null, true);
            echo "</td>

                                                                <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "dateDebutFormation", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "programmeBourse", array()), "html", null, true);
            echo "</td>

                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                                                    </tbody>
                                                </table>




                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                            <!-- /section:elements.tab -->
                        </div><!-- /.col -->



                    </div><!-- /.row -->



                    <script type=\"text/javascript\">
                        var \$path_assets = \"../assets\";//this will be used in gritter alerts containing images
                    </script>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>


";
    }

    // line 206
    public function block_javascript($context, array $blocks = array())
    {
        // line 207
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\">< /script>
                                                                    < script src = \"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\" ></script>
    <script  src = \"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script\tsrc=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                                            jQuery(function(\$) {
//datepicker plugin
                                                                //link
                                                                \$('.date-picker').datepicker({
                                                                    autoclose: true,
                                                                    todayHighlight: true
                                                                })
                                                                        //show datepicker when clicking on the icon
                                                                        .next().on(ace.click_event, function() {
                                                                    \$(this).prev().focus();
                                                                });
                                                                \$('#date-debut').datetimepicker().next().on(ace.click_event, function() {
                                                                    \$(this).prev().focus();
                                                                });

                                                                \$('#listformation').DataTable();
                                                                
                                                                        
                                  \$('.main').removeClass('active');
                                  \$('#menu_membre').addClass('active');
                                                            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:GestionMembre:modifierFormationMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 219,  383 => 218,  379 => 217,  375 => 216,  371 => 215,  367 => 214,  363 => 213,  359 => 212,  355 => 211,  350 => 209,  346 => 208,  341 => 207,  338 => 206,  302 => 172,  292 => 168,  288 => 167,  283 => 165,  279 => 164,  275 => 163,  271 => 162,  262 => 156,  246 => 142,  242 => 141,  205 => 106,  203 => 105,  196 => 103,  177 => 87,  164 => 77,  154 => 70,  139 => 57,  129 => 53,  124 => 50,  120 => 49,  117 => 48,  107 => 44,  102 => 41,  98 => 40,  95 => 39,  92 => 38,  82 => 32,  63 => 13,  60 => 12,  54 => 8,  49 => 6,  45 => 5,  40 => 4,  11 => 3,);
    }
}

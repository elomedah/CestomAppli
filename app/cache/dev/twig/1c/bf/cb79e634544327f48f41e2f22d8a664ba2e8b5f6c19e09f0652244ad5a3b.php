<?php

/* CestomAdminBundle:Default:index.html.twig */
class __TwigTemplate_1cbfcb79e634544327f48f41e2f22d8a664ba2e8b5f6c19e09f0652244ad5a3b extends Twig_Template
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
            'notification' => array($this, 'block_notification'),
            'listenotification' => array($this, 'block_listenotification'),
            'message' => array($this, 'block_message'),
            'listemessage' => array($this, 'block_listemessage'),
            'navigation' => array($this, 'block_navigation'),
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
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
    public function block_notification($context, array $blocks = array())
    {
        echo " 1 ";
    }

    // line 6
    public function block_listenotification($context, array $blocks = array())
    {
        echo " 
    <li>
        <a href=\"#\">
            <i class=\"btn btn-xs btn-primary fa fa-user\"></i>
            Elom just signed up as an editor ...
        </a>
    </li> 
";
    }

    // line 16
    public function block_message($context, array $blocks = array())
    {
        echo " 1 ";
    }

    // line 18
    public function block_listemessage($context, array $blocks = array())
    {
        echo " 
    <li>
        <a href=\"#\">
            <span class=\"msg-body\">
                <span class=\"msg-title\">
                    <span class=\"blue\">Alex:</span>
                    Je veux savoir c'est quand la bourse
                </span>

                <span class=\"msg-time\">
                    <i class=\"ace-icon fa fa-clock-o\"></i>
                    <span>a moment ago</span>
                </span>
            </span>
        </a>
    </li>
";
    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        // line 38
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

    // line 51
    public function block_soustitre($context, array $blocks = array())
    {
        echo " 

    Liste des membres

";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "
    <!-- <div class=\"table-responsive\"> -->

    <!-- <div class=\"dataTables_borderWrap\"> -->
    <div>
        <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
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
                    <th>Sexe</th>
                    <th>Promotion</th>
                    <th>Ville</th>
                    <th>Université/Ecole</th>
                    
                </tr>
            </thead>

            <tbody>

                <tr>

                    <td class=\"center\">
                        <label class=\"position-relative\">
                            <input type=\"checkbox\" class=\"ace\" />
                            <span class=\"lbl\"></span>
                        </label>
                   </td>
<td>
                        <div class=\"hidden-sm hidden-xs action-buttons\">
                            <a class=\"blue\" href=\"#\">
                                <i class=\"ace-icon fa fa-eye bigger-130\"></i>
                            </a>

                            <a class=\"green\" href=\"#\">
                                <i class=\"ace-icon fa fa-pencil bigger-130\"></i>
                            </a>

                            <a class=\"red\" href=\"#\">
                                <i class=\"ace-icon fa fa-envelope-o bigger-130\"></i>
                            </a>

                        </div>

                        <div class=\"hidden-md hidden-lg\">
                            <div class=\"inline position-relative\">
                                <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\" data-position=\"auto\">
                                    <i class=\"ace-icon fa fa-caret-down icon-only bigger-120\"></i>
                                </button>

                                <ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">
                                    <li>
                                        <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                            <span class=\"blue\">
                                                <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                            <span class=\"green\">
                                                <i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                            <span class=\"red\">
                                                <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                            <span class=\"red\">
                                                <i class=\"ace-icon fa envelope-o bigger-120\"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href=\"#\">EDAH</a>
                    </td>
                    <td>Elom</td>
                    <td>M</td>
                    <td>2010</span></td>
                    <td >
                        <span >Rabat</span>
                    </td>
\t\t    <td>ENSIAS </td>
                 
                </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CestomAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  116 => 57,  106 => 51,  92 => 38,  89 => 37,  67 => 18,  61 => 16,  48 => 6,  42 => 4,  11 => 2,);
    }
}

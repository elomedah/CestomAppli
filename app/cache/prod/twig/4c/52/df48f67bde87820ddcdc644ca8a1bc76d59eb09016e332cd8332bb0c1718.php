<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4c52df48f67bde87820ddcdc644ca8a1bc76d59eb09016e332cd8332bb0c1718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("login.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_logo' => array($this, 'block_fos_user_logo'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_logo($context, array $blocks = array())
    {
        // line 6
        echo "                    <div class=\"center\">
\t\t\t\t\t\t\t\t<h1>
                                <img class=\"nav-user-photo\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/logo/cestom.jpg"), "html", null, true);
        echo "\" alt=\"Admin\" />
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t</div>
                                 ";
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  44 => 8,  40 => 6,  37 => 5,  11 => 1,);
    }
}

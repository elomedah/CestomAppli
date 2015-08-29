<?php

/* cestomsiteBundle:Default:index.html.twig */
class __TwigTemplate_c5e6c17f8f710a51fab76cb0b39afd8f8824b43ddc8d9dc73325bc46cee8e8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("cestomsiteBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'soustitre' => array($this, 'block_soustitre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cestomsiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navigation($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 11
    public function block_soustitre($context, array $blocks = array())
    {
        // line 12
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "cestomsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  54 => 16,  49 => 12,  46 => 11,  41 => 7,  38 => 6,  11 => 2,);
    }
}

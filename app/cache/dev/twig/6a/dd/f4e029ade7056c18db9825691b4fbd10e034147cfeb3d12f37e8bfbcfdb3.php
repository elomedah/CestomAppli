<?php

/* ::layout.html.twig */
class __TwigTemplate_6addf4e029ade7056c18db9825691b4fbd10e034147cfeb3d12f37e8bfbcfdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "        </div>

        <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/blog\">Blog</a></li>
                </ul>
            ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  60 => 11,  57 => 10,  51 => 6,  44 => 20,  42 => 19,  37 => 16,  35 => 10,  28 => 6,  22 => 2,);
    }
}

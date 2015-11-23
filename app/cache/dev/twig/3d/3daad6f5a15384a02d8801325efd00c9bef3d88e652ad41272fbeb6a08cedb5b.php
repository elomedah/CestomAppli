<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_e170aa8f73b7c02625dc446c3a82e96188673041a011345fc7f69b572ca79536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "




";
        // line 9
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        echo "Resetting your  password";
    }

    // line 9
    public function block_body_html($context, array $blocks = array())
    {
        // line 10
        echo "
    

<span>Hello ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " !</span>

You can reset your password by accessing 
<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl")), "html", null, true);
        echo " </a>

Greetings,
the App team

";
    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  51 => 13,  46 => 10,  43 => 9,  37 => 3,  33 => 9,  26 => 4,  24 => 3,  21 => 2,);
    }
}
/* {# app/Resources/views/email/password_resetting.email.twig #}*/
/* */
/* {% block subject %}Resetting your  password{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block body_html %}*/
/* */
/*     */
/* */
/* <span>Hello {{ user.username }} !</span>*/
/* */
/* You can reset your password by accessing */
/* <a href="{{ confirmationUrl }}"> {{ confirmationUrl }} </a>*/
/* */
/* Greetings,*/
/* the App team*/
/* */
/* {% endblock %}*/
/* */

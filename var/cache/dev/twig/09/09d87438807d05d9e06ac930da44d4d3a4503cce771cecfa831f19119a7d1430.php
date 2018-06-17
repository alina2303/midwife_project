<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_58e186296ed5dee6a82c5d36c3fee0264e3e28f17dcf7e37862793f0262874be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5346ee380f9decb795d274220a80a4d3b2d5e3602a4cab80efc7009632376d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5346ee380f9decb795d274220a80a4d3b2d5e3602a4cab80efc7009632376d13->enter($__internal_5346ee380f9decb795d274220a80a4d3b2d5e3602a4cab80efc7009632376d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5346ee380f9decb795d274220a80a4d3b2d5e3602a4cab80efc7009632376d13->leave($__internal_5346ee380f9decb795d274220a80a4d3b2d5e3602a4cab80efc7009632376d13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}

<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5f8f7bdb1f60acab8c85a9604d31e9b26d878970ae74e8c443e0d68d704099f2 extends Twig_Template
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
        $__internal_ed8d73dacec35bc6d3bde554e82d7a633e22dd4204229b1b3bc30627d611a38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8d73dacec35bc6d3bde554e82d7a633e22dd4204229b1b3bc30627d611a38c->enter($__internal_ed8d73dacec35bc6d3bde554e82d7a633e22dd4204229b1b3bc30627d611a38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ed8d73dacec35bc6d3bde554e82d7a633e22dd4204229b1b3bc30627d611a38c->leave($__internal_ed8d73dacec35bc6d3bde554e82d7a633e22dd4204229b1b3bc30627d611a38c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}

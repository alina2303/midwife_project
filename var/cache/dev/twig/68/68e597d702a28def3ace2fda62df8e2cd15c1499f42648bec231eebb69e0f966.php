<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f7acac41d0525a5e7cce7a73f42c6a1d77c232c34503630826a1e712dc732930 extends Twig_Template
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
        $__internal_ade8292dea97252bc1902da19815aa36ecf376ca8006a6acc1cff90a09b08d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade8292dea97252bc1902da19815aa36ecf376ca8006a6acc1cff90a09b08d77->enter($__internal_ade8292dea97252bc1902da19815aa36ecf376ca8006a6acc1cff90a09b08d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ade8292dea97252bc1902da19815aa36ecf376ca8006a6acc1cff90a09b08d77->leave($__internal_ade8292dea97252bc1902da19815aa36ecf376ca8006a6acc1cff90a09b08d77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}

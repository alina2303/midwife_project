<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7a9589991cb3466acb2b7986ade9699e9ad477c521fe7d7aad836035bc3cc6d9 extends Twig_Template
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
        $__internal_9c5766a8bd5ed11a1e5921f6602e38c535cac0482e38d178280e1860dbf1bf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5766a8bd5ed11a1e5921f6602e38c535cac0482e38d178280e1860dbf1bf22->enter($__internal_9c5766a8bd5ed11a1e5921f6602e38c535cac0482e38d178280e1860dbf1bf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9c5766a8bd5ed11a1e5921f6602e38c535cac0482e38d178280e1860dbf1bf22->leave($__internal_9c5766a8bd5ed11a1e5921f6602e38c535cac0482e38d178280e1860dbf1bf22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}

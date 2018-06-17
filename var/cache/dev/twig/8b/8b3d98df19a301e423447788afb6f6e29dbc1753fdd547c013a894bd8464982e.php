<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6f220183a85671851e218ab3bdc6963d6515d9aef1658618bd0cd94ebdf4cdaa extends Twig_Template
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
        $__internal_cd7d5f8c003bc9ef65714a28ac094f3e3c375d5f89281f93d80af4d2a998784e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7d5f8c003bc9ef65714a28ac094f3e3c375d5f89281f93d80af4d2a998784e->enter($__internal_cd7d5f8c003bc9ef65714a28ac094f3e3c375d5f89281f93d80af4d2a998784e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_cd7d5f8c003bc9ef65714a28ac094f3e3c375d5f89281f93d80af4d2a998784e->leave($__internal_cd7d5f8c003bc9ef65714a28ac094f3e3c375d5f89281f93d80af4d2a998784e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}

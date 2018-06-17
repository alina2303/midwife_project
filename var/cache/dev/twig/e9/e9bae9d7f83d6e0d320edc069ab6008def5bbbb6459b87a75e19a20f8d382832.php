<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f293ffc745bf67faff1283e2f21586fc19b318502c1ee756b21c71e2c20a8a54 extends Twig_Template
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
        $__internal_6c5d032d3388482a72b4f28ba7234d8373cdf7500d4f467fdfec7835742f71d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5d032d3388482a72b4f28ba7234d8373cdf7500d4f467fdfec7835742f71d7->enter($__internal_6c5d032d3388482a72b4f28ba7234d8373cdf7500d4f467fdfec7835742f71d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6c5d032d3388482a72b4f28ba7234d8373cdf7500d4f467fdfec7835742f71d7->leave($__internal_6c5d032d3388482a72b4f28ba7234d8373cdf7500d4f467fdfec7835742f71d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}

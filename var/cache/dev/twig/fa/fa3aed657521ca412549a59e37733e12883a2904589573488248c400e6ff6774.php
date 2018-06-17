<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7f324f3d387b0c68d2a7c7611025b15a63d95527b90d16693ddb2c0a1512098b extends Twig_Template
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
        $__internal_beeb8019d8f48f8e352441ed475aeb8daec8677127bbcda1c232a68195377048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeb8019d8f48f8e352441ed475aeb8daec8677127bbcda1c232a68195377048->enter($__internal_beeb8019d8f48f8e352441ed475aeb8daec8677127bbcda1c232a68195377048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_beeb8019d8f48f8e352441ed475aeb8daec8677127bbcda1c232a68195377048->leave($__internal_beeb8019d8f48f8e352441ed475aeb8daec8677127bbcda1c232a68195377048_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}

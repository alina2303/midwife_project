<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_adf45bdd5999b2019c2f4069256128a624efba068000a04dacb1015ace62b120 extends Twig_Template
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
        $__internal_258ba2b3f184b2353c0f55ff3cf32d7d00fded78e13c1b04f80bcf3e67d79014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258ba2b3f184b2353c0f55ff3cf32d7d00fded78e13c1b04f80bcf3e67d79014->enter($__internal_258ba2b3f184b2353c0f55ff3cf32d7d00fded78e13c1b04f80bcf3e67d79014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_258ba2b3f184b2353c0f55ff3cf32d7d00fded78e13c1b04f80bcf3e67d79014->leave($__internal_258ba2b3f184b2353c0f55ff3cf32d7d00fded78e13c1b04f80bcf3e67d79014_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}

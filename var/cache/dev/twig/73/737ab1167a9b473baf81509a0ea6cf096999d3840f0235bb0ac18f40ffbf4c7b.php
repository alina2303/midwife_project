<?php

/* Default/index.html.twig */
class __TwigTemplate_d1d205d6fa5a9c5bed6592d4cd1fc650a9a1a0f4b84d0678315d75dfdf40dd45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c186f04a08e1ba340df7e4b4b9a4b1f6d567babdaeb86742bace9e2f80e99668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c186f04a08e1ba340df7e4b4b9a4b1f6d567babdaeb86742bace9e2f80e99668->enter($__internal_c186f04a08e1ba340df7e4b4b9a4b1f6d567babdaeb86742bace9e2f80e99668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c186f04a08e1ba340df7e4b4b9a4b1f6d567babdaeb86742bace9e2f80e99668->leave($__internal_c186f04a08e1ba340df7e4b4b9a4b1f6d567babdaeb86742bace9e2f80e99668_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_003dc00120a8d4ff0523bb3581f23e2514739379c026905f694e9e4749b876ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003dc00120a8d4ff0523bb3581f23e2514739379c026905f694e9e4749b876ae->enter($__internal_003dc00120a8d4ff0523bb3581f23e2514739379c026905f694e9e4749b876ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"root\"></div>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_003dc00120a8d4ff0523bb3581f23e2514739379c026905f694e9e4749b876ae->leave($__internal_003dc00120a8d4ff0523bb3581f23e2514739379c026905f694e9e4749b876ae_prof);

    }

    public function getTemplateName()
    {
        return "Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"root\"></div>
<script type=\"text/javascript\" src=\"{{ asset('build/app.js') }}\"></script>
{% endblock %}", "Default/index.html.twig", "/Users/alina/Desktop/UCN/midwife_project/templates/Default/index.html.twig");
    }
}

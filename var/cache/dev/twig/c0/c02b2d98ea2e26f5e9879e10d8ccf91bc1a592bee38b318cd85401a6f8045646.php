<?php

/* base.html.twig */
class __TwigTemplate_a4f941bd8eb83b6f65adad7940ef87677f1569900be0f5eb34a43d3b6d157a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07bc1433732fb1e9e0b99cd2e79229ad982b75aa9493badd290b49f7d1e67b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bc1433732fb1e9e0b99cd2e79229ad982b75aa9493badd290b49f7d1e67b44->enter($__internal_07bc1433732fb1e9e0b99cd2e79229ad982b75aa9493badd290b49f7d1e67b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <footer class=\"footer\">
            <p>Check out the full post on <a href=\"https://www.modernjsforphpdevs.com/react-symfony-4-starter-repo/\">Modern JS for PHP Devs</a></p>
        </footer>
    </body>
</html>
";
        
        $__internal_07bc1433732fb1e9e0b99cd2e79229ad982b75aa9493badd290b49f7d1e67b44->leave($__internal_07bc1433732fb1e9e0b99cd2e79229ad982b75aa9493badd290b49f7d1e67b44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a9d35a5a88313eb56a235505385cd68b4a4c14296234bfc6a1f703b3c8a852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a9d35a5a88313eb56a235505385cd68b4a4c14296234bfc6a1f703b3c8a852->enter($__internal_24a9d35a5a88313eb56a235505385cd68b4a4c14296234bfc6a1f703b3c8a852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to React Symfony 4 Starter!";
        
        $__internal_24a9d35a5a88313eb56a235505385cd68b4a4c14296234bfc6a1f703b3c8a852->leave($__internal_24a9d35a5a88313eb56a235505385cd68b4a4c14296234bfc6a1f703b3c8a852_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25d632447f02e6b51ef69ed4bff5fa910e52ae4b10eb9055df52d7d22eab037e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d632447f02e6b51ef69ed4bff5fa910e52ae4b10eb9055df52d7d22eab037e->enter($__internal_25d632447f02e6b51ef69ed4bff5fa910e52ae4b10eb9055df52d7d22eab037e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_25d632447f02e6b51ef69ed4bff5fa910e52ae4b10eb9055df52d7d22eab037e->leave($__internal_25d632447f02e6b51ef69ed4bff5fa910e52ae4b10eb9055df52d7d22eab037e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b72cd973bb5d8043354bb448e9966ff187c448051ab85bf5434c84740d39fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b72cd973bb5d8043354bb448e9966ff187c448051ab85bf5434c84740d39fd3->enter($__internal_9b72cd973bb5d8043354bb448e9966ff187c448051ab85bf5434c84740d39fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b72cd973bb5d8043354bb448e9966ff187c448051ab85bf5434c84740d39fd3->leave($__internal_9b72cd973bb5d8043354bb448e9966ff187c448051ab85bf5434c84740d39fd3_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b41c946d812591278fa4a17293138dc51e7128db5a513586568d703244b32fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b41c946d812591278fa4a17293138dc51e7128db5a513586568d703244b32fd->enter($__internal_0b41c946d812591278fa4a17293138dc51e7128db5a513586568d703244b32fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b41c946d812591278fa4a17293138dc51e7128db5a513586568d703244b32fd->leave($__internal_0b41c946d812591278fa4a17293138dc51e7128db5a513586568d703244b32fd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 12,  87 => 11,  77 => 7,  71 => 6,  59 => 5,  47 => 13,  44 => 12,  42 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome to React Symfony 4 Starter!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <footer class=\"footer\">
            <p>Check out the full post on <a href=\"https://www.modernjsforphpdevs.com/react-symfony-4-starter-repo/\">Modern JS for PHP Devs</a></p>
        </footer>
    </body>
</html>
", "base.html.twig", "/Users/alina/Desktop/UCN/midwife_project/templates/base.html.twig");
    }
}

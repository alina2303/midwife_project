<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_852766702d6e30ae199d8e6650ebc1d7998b65446350afdd14c1e633d1c59587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfeedeb16c96e59477f14a6950c9a822b092fc72af18f9628d9e5c55b6f26185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeedeb16c96e59477f14a6950c9a822b092fc72af18f9628d9e5c55b6f26185->enter($__internal_dfeedeb16c96e59477f14a6950c9a822b092fc72af18f9628d9e5c55b6f26185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dfeedeb16c96e59477f14a6950c9a822b092fc72af18f9628d9e5c55b6f26185->leave($__internal_dfeedeb16c96e59477f14a6950c9a822b092fc72af18f9628d9e5c55b6f26185_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_174821dcbca7407a3bd55fe217b01030c8494133fdf9bcdd447fabc40e3c0167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174821dcbca7407a3bd55fe217b01030c8494133fdf9bcdd447fabc40e3c0167->enter($__internal_174821dcbca7407a3bd55fe217b01030c8494133fdf9bcdd447fabc40e3c0167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_174821dcbca7407a3bd55fe217b01030c8494133fdf9bcdd447fabc40e3c0167->leave($__internal_174821dcbca7407a3bd55fe217b01030c8494133fdf9bcdd447fabc40e3c0167_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_28c6ea3974801c0b2cb07dd16d31e32ada8c2efe106b6ed59d82f5503e0b012c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c6ea3974801c0b2cb07dd16d31e32ada8c2efe106b6ed59d82f5503e0b012c->enter($__internal_28c6ea3974801c0b2cb07dd16d31e32ada8c2efe106b6ed59d82f5503e0b012c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_28c6ea3974801c0b2cb07dd16d31e32ada8c2efe106b6ed59d82f5503e0b012c->leave($__internal_28c6ea3974801c0b2cb07dd16d31e32ada8c2efe106b6ed59d82f5503e0b012c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe7b27f620f80f5201f89246a10e57d0ded55f3fb2f1ce51cf48140371c1a6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7b27f620f80f5201f89246a10e57d0ded55f3fb2f1ce51cf48140371c1a6f7->enter($__internal_fe7b27f620f80f5201f89246a10e57d0ded55f3fb2f1ce51cf48140371c1a6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe7b27f620f80f5201f89246a10e57d0ded55f3fb2f1ce51cf48140371c1a6f7->leave($__internal_fe7b27f620f80f5201f89246a10e57d0ded55f3fb2f1ce51cf48140371c1a6f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}

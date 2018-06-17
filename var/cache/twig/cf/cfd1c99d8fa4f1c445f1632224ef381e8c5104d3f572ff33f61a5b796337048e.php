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
        $__internal_04c462a934db215bfa7263c59d48854887c8d4e1a81c6c16fd8b293f22f04c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c462a934db215bfa7263c59d48854887c8d4e1a81c6c16fd8b293f22f04c4a->enter($__internal_04c462a934db215bfa7263c59d48854887c8d4e1a81c6c16fd8b293f22f04c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_04c462a934db215bfa7263c59d48854887c8d4e1a81c6c16fd8b293f22f04c4a->leave($__internal_04c462a934db215bfa7263c59d48854887c8d4e1a81c6c16fd8b293f22f04c4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d84f4b258f53f2c97c1680156c7ebfecd4cd708e17baf980fdc29c8c7027b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d84f4b258f53f2c97c1680156c7ebfecd4cd708e17baf980fdc29c8c7027b5->enter($__internal_e9d84f4b258f53f2c97c1680156c7ebfecd4cd708e17baf980fdc29c8c7027b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e9d84f4b258f53f2c97c1680156c7ebfecd4cd708e17baf980fdc29c8c7027b5->leave($__internal_e9d84f4b258f53f2c97c1680156c7ebfecd4cd708e17baf980fdc29c8c7027b5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8024b4a89f8e7a7b5c39ff61f4a866323d85865a2ceb9802e6a062254fcffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8024b4a89f8e7a7b5c39ff61f4a866323d85865a2ceb9802e6a062254fcffac->enter($__internal_d8024b4a89f8e7a7b5c39ff61f4a866323d85865a2ceb9802e6a062254fcffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d8024b4a89f8e7a7b5c39ff61f4a866323d85865a2ceb9802e6a062254fcffac->leave($__internal_d8024b4a89f8e7a7b5c39ff61f4a866323d85865a2ceb9802e6a062254fcffac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_50854cdd4f4fd7cb9d255ede76306cd64cbe8d4e2e01487778a24427024ab3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50854cdd4f4fd7cb9d255ede76306cd64cbe8d4e2e01487778a24427024ab3e6->enter($__internal_50854cdd4f4fd7cb9d255ede76306cd64cbe8d4e2e01487778a24427024ab3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50854cdd4f4fd7cb9d255ede76306cd64cbe8d4e2e01487778a24427024ab3e6->leave($__internal_50854cdd4f4fd7cb9d255ede76306cd64cbe8d4e2e01487778a24427024ab3e6_prof);

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

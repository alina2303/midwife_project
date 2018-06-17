<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3bca407f64885f413e71ac58f3063e7d846e2992ebb3c5390ecaade580eb6c5b extends Twig_Template
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
        $__internal_6879b33789cac9f3676f69344933bf27d3e0a36c6a95068d490a347cf1c7cc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6879b33789cac9f3676f69344933bf27d3e0a36c6a95068d490a347cf1c7cc98->enter($__internal_6879b33789cac9f3676f69344933bf27d3e0a36c6a95068d490a347cf1c7cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6879b33789cac9f3676f69344933bf27d3e0a36c6a95068d490a347cf1c7cc98->leave($__internal_6879b33789cac9f3676f69344933bf27d3e0a36c6a95068d490a347cf1c7cc98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}

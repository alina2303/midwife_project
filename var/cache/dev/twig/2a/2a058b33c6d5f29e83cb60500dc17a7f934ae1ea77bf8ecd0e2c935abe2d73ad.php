<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b49b0882747f8cb5073a707017400840101932fe5515d3cd280c4bf7866e4a82 extends Twig_Template
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
        $__internal_fe2632624863a731be7845410d5af2b8478452ef88b05bd057010c44853e9c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2632624863a731be7845410d5af2b8478452ef88b05bd057010c44853e9c23->enter($__internal_fe2632624863a731be7845410d5af2b8478452ef88b05bd057010c44853e9c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fe2632624863a731be7845410d5af2b8478452ef88b05bd057010c44853e9c23->leave($__internal_fe2632624863a731be7845410d5af2b8478452ef88b05bd057010c44853e9c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}

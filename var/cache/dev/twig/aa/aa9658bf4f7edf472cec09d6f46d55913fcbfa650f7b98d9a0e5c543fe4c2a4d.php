<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_510d937139446aa275b9573718e8400d29f32109ebcdc887d297d5c12b5ee28b extends Twig_Template
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
        $__internal_e2be20fb58fbbeb2a1542b345d41c8f86aa32bb3813cf6ec126477a267c2e0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2be20fb58fbbeb2a1542b345d41c8f86aa32bb3813cf6ec126477a267c2e0c1->enter($__internal_e2be20fb58fbbeb2a1542b345d41c8f86aa32bb3813cf6ec126477a267c2e0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e2be20fb58fbbeb2a1542b345d41c8f86aa32bb3813cf6ec126477a267c2e0c1->leave($__internal_e2be20fb58fbbeb2a1542b345d41c8f86aa32bb3813cf6ec126477a267c2e0c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

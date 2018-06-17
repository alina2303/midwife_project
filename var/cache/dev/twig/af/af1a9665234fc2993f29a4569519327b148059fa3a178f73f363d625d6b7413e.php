<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b0bf44113b0b0e3c87f3d1b594c5fb9d86f998b5cfba4cdf09fd2c5ae23a873 extends Twig_Template
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
        $__internal_704742ef85734b23b114e4435e844d9c991937fe9458aa4b8e8faef25be40b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704742ef85734b23b114e4435e844d9c991937fe9458aa4b8e8faef25be40b8e->enter($__internal_704742ef85734b23b114e4435e844d9c991937fe9458aa4b8e8faef25be40b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_704742ef85734b23b114e4435e844d9c991937fe9458aa4b8e8faef25be40b8e->leave($__internal_704742ef85734b23b114e4435e844d9c991937fe9458aa4b8e8faef25be40b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}

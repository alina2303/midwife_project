<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_ca57335b3d6d801142f364aba9d8a858317051f18376f6fd0f7ef6885d6b1f76 extends Twig_Template
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
        $__internal_72276c13642649840ef577373e5e2abc19c9fb244192dbcbeead7bc09bf34548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72276c13642649840ef577373e5e2abc19c9fb244192dbcbeead7bc09bf34548->enter($__internal_72276c13642649840ef577373e5e2abc19c9fb244192dbcbeead7bc09bf34548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_72276c13642649840ef577373e5e2abc19c9fb244192dbcbeead7bc09bf34548->leave($__internal_72276c13642649840ef577373e5e2abc19c9fb244192dbcbeead7bc09bf34548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}

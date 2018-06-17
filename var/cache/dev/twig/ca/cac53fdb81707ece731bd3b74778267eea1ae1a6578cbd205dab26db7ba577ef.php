<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ecabea987d11d5ee4a771d83833920cef5a142b1079f234f6f9cea8e7b462a3 extends Twig_Template
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
        $__internal_7935c9bc6a0991e8bee4b613beffbc4be81408799a404c919fe8584a495188d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7935c9bc6a0991e8bee4b613beffbc4be81408799a404c919fe8584a495188d5->enter($__internal_7935c9bc6a0991e8bee4b613beffbc4be81408799a404c919fe8584a495188d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7935c9bc6a0991e8bee4b613beffbc4be81408799a404c919fe8584a495188d5->leave($__internal_7935c9bc6a0991e8bee4b613beffbc4be81408799a404c919fe8584a495188d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}

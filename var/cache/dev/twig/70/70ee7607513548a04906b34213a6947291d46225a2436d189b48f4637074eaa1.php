<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ee7c9304801cefd98fe4d43fed890869fcfb6d45bbdac443b82dccc9c4b42f97 extends Twig_Template
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
        $__internal_de4684b0d5fac4a2686e0b18ce5403918ee00df0947a9dc1f8079639e1f2f4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4684b0d5fac4a2686e0b18ce5403918ee00df0947a9dc1f8079639e1f2f4f2->enter($__internal_de4684b0d5fac4a2686e0b18ce5403918ee00df0947a9dc1f8079639e1f2f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_de4684b0d5fac4a2686e0b18ce5403918ee00df0947a9dc1f8079639e1f2f4f2->leave($__internal_de4684b0d5fac4a2686e0b18ce5403918ee00df0947a9dc1f8079639e1f2f4f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}

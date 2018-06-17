<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_aa71db78594ddfbbedcc136f9958d349d70af564022cc963511e4354e540505d extends Twig_Template
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
        $__internal_2d0790c878d1bde38df938d556fbfc41cd7a9f473204526c3c989dfa1b685a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0790c878d1bde38df938d556fbfc41cd7a9f473204526c3c989dfa1b685a7b->enter($__internal_2d0790c878d1bde38df938d556fbfc41cd7a9f473204526c3c989dfa1b685a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2d0790c878d1bde38df938d556fbfc41cd7a9f473204526c3c989dfa1b685a7b->leave($__internal_2d0790c878d1bde38df938d556fbfc41cd7a9f473204526c3c989dfa1b685a7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f331ebe075e64e35d9d3fca11b71285252fade1426c480f596805d902c92e84d extends Twig_Template
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
        $__internal_89fa76dd4497b6110eee78a4a7f5b745249b77b6909a1e1f9d2909da3d89e11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fa76dd4497b6110eee78a4a7f5b745249b77b6909a1e1f9d2909da3d89e11d->enter($__internal_89fa76dd4497b6110eee78a4a7f5b745249b77b6909a1e1f9d2909da3d89e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_89fa76dd4497b6110eee78a4a7f5b745249b77b6909a1e1f9d2909da3d89e11d->leave($__internal_89fa76dd4497b6110eee78a4a7f5b745249b77b6909a1e1f9d2909da3d89e11d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}

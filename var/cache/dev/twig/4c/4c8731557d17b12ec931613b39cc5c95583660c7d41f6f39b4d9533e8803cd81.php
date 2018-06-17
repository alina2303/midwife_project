<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c3c4494702140c56514845d91efd10c5ea28bfd65fff5659813b49d861cb0638 extends Twig_Template
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
        $__internal_7a43940e3a52b148fc0e50bd51eb595c463ebe0c9620e616978058cce66905cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43940e3a52b148fc0e50bd51eb595c463ebe0c9620e616978058cce66905cf->enter($__internal_7a43940e3a52b148fc0e50bd51eb595c463ebe0c9620e616978058cce66905cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7a43940e3a52b148fc0e50bd51eb595c463ebe0c9620e616978058cce66905cf->leave($__internal_7a43940e3a52b148fc0e50bd51eb595c463ebe0c9620e616978058cce66905cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}

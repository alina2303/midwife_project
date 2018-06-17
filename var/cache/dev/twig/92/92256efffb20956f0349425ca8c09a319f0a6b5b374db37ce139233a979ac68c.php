<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e3776cd78b0f30ac4ab2ba11fc20146e77e7c21850c148e7948018a8f25cdda7 extends Twig_Template
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
        $__internal_c918635389b1c5cda8cd6fec94d28b02b9d88c1c6e6caffe10ad45e29092a790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c918635389b1c5cda8cd6fec94d28b02b9d88c1c6e6caffe10ad45e29092a790->enter($__internal_c918635389b1c5cda8cd6fec94d28b02b9d88c1c6e6caffe10ad45e29092a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c918635389b1c5cda8cd6fec94d28b02b9d88c1c6e6caffe10ad45e29092a790->leave($__internal_c918635389b1c5cda8cd6fec94d28b02b9d88c1c6e6caffe10ad45e29092a790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}

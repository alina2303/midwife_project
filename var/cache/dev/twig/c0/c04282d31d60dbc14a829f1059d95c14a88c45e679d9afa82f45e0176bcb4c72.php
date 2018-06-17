<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_612c415205b7e33d23d3cf0c64e33eafbc41cf3d8802d2e8a3452587f8afba0c extends Twig_Template
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
        $__internal_38653621af27f7b39e53ee3fc3918945015ee9d522e0ae4d3bbf1ef692a8b5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38653621af27f7b39e53ee3fc3918945015ee9d522e0ae4d3bbf1ef692a8b5f1->enter($__internal_38653621af27f7b39e53ee3fc3918945015ee9d522e0ae4d3bbf1ef692a8b5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_38653621af27f7b39e53ee3fc3918945015ee9d522e0ae4d3bbf1ef692a8b5f1->leave($__internal_38653621af27f7b39e53ee3fc3918945015ee9d522e0ae4d3bbf1ef692a8b5f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

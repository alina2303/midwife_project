<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d861817b21339814f5f8429ba2122969b13e34621323c3ee15e984a0da817533 extends Twig_Template
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
        $__internal_f5eff1efb98963f382998ecad171da28e9ec76fb683e2a195f6ce95df35b5e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eff1efb98963f382998ecad171da28e9ec76fb683e2a195f6ce95df35b5e42->enter($__internal_f5eff1efb98963f382998ecad171da28e9ec76fb683e2a195f6ce95df35b5e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f5eff1efb98963f382998ecad171da28e9ec76fb683e2a195f6ce95df35b5e42->leave($__internal_f5eff1efb98963f382998ecad171da28e9ec76fb683e2a195f6ce95df35b5e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}

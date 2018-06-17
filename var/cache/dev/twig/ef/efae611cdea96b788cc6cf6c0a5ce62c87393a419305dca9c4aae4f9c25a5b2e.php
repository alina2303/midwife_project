<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e4d8f0b8f7f70ae00359d3f8f9b48b073d7186757e203b6e10045a1a112c1557 extends Twig_Template
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
        $__internal_f222f8598be76b51634d86d8f56dbe4688782b377fec675bb7c41000d153c4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f222f8598be76b51634d86d8f56dbe4688782b377fec675bb7c41000d153c4d3->enter($__internal_f222f8598be76b51634d86d8f56dbe4688782b377fec675bb7c41000d153c4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f222f8598be76b51634d86d8f56dbe4688782b377fec675bb7c41000d153c4d3->leave($__internal_f222f8598be76b51634d86d8f56dbe4688782b377fec675bb7c41000d153c4d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}

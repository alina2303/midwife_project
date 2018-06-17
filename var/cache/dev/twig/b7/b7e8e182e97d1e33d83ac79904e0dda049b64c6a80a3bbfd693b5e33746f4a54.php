<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3ac7b84020282d98de121e97325e87aa55cb6370d19320659a2edfbafafcad07 extends Twig_Template
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
        $__internal_b422fd48b200a946b02a31b463bd07c8ed899300225ad2e683ea416389c6ef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b422fd48b200a946b02a31b463bd07c8ed899300225ad2e683ea416389c6ef96->enter($__internal_b422fd48b200a946b02a31b463bd07c8ed899300225ad2e683ea416389c6ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b422fd48b200a946b02a31b463bd07c8ed899300225ad2e683ea416389c6ef96->leave($__internal_b422fd48b200a946b02a31b463bd07c8ed899300225ad2e683ea416389c6ef96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}

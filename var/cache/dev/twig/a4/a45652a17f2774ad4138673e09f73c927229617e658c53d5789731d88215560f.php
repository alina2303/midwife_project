<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7a5ab90b83579e36ab789f3b6a3735beda540218b45b872d267257e9bb571352 extends Twig_Template
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
        $__internal_853fc451c19d7b881272cc08d6b33231baeb6c60738e1bdd55bba936ebeeedf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853fc451c19d7b881272cc08d6b33231baeb6c60738e1bdd55bba936ebeeedf1->enter($__internal_853fc451c19d7b881272cc08d6b33231baeb6c60738e1bdd55bba936ebeeedf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_853fc451c19d7b881272cc08d6b33231baeb6c60738e1bdd55bba936ebeeedf1->leave($__internal_853fc451c19d7b881272cc08d6b33231baeb6c60738e1bdd55bba936ebeeedf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1cc890e43b607527f9f3895401961c043f182721bd1374591888707f88be73f2 extends Twig_Template
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
        $__internal_7c73e73d684a3969e404243b5772e0951c9fb9f58e27192d9537a5ffcf78a4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c73e73d684a3969e404243b5772e0951c9fb9f58e27192d9537a5ffcf78a4fc->enter($__internal_7c73e73d684a3969e404243b5772e0951c9fb9f58e27192d9537a5ffcf78a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7c73e73d684a3969e404243b5772e0951c9fb9f58e27192d9537a5ffcf78a4fc->leave($__internal_7c73e73d684a3969e404243b5772e0951c9fb9f58e27192d9537a5ffcf78a4fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}

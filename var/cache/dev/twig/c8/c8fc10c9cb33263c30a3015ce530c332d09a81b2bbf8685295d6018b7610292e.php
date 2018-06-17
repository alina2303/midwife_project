<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4f40b0e84cc10235ce1847a08a95a26e79049953837d9b06ec1be752a3bb61e4 extends Twig_Template
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
        $__internal_9f8b5fb20b2dfe03c884cafb7a6a158b6f95e610cbf75f12b0cae81f5784610c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8b5fb20b2dfe03c884cafb7a6a158b6f95e610cbf75f12b0cae81f5784610c->enter($__internal_9f8b5fb20b2dfe03c884cafb7a6a158b6f95e610cbf75f12b0cae81f5784610c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9f8b5fb20b2dfe03c884cafb7a6a158b6f95e610cbf75f12b0cae81f5784610c->leave($__internal_9f8b5fb20b2dfe03c884cafb7a6a158b6f95e610cbf75f12b0cae81f5784610c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

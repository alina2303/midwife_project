<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e9c5e140e4e105b094bda4b2ff72bf10195bc12782539e29f1c66e88923da32a extends Twig_Template
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
        $__internal_2638ef1ee65b750174e6e0690445346037dbece5286fa47c3a99f4dd3acb48b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2638ef1ee65b750174e6e0690445346037dbece5286fa47c3a99f4dd3acb48b0->enter($__internal_2638ef1ee65b750174e6e0690445346037dbece5286fa47c3a99f4dd3acb48b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2638ef1ee65b750174e6e0690445346037dbece5286fa47c3a99f4dd3acb48b0->leave($__internal_2638ef1ee65b750174e6e0690445346037dbece5286fa47c3a99f4dd3acb48b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}

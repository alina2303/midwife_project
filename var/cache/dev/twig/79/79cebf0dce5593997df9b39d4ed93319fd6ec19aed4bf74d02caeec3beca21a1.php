<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_539d8f9c16102fd8aaa78c97aff51722ddb8c094752183f24d0629ac2627afb7 extends Twig_Template
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
        $__internal_bcc0cbd5f476971b94c54485b58b53e46e76fc9f0be669e4b72d26a031ac5a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc0cbd5f476971b94c54485b58b53e46e76fc9f0be669e4b72d26a031ac5a85->enter($__internal_bcc0cbd5f476971b94c54485b58b53e46e76fc9f0be669e4b72d26a031ac5a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bcc0cbd5f476971b94c54485b58b53e46e76fc9f0be669e4b72d26a031ac5a85->leave($__internal_bcc0cbd5f476971b94c54485b58b53e46e76fc9f0be669e4b72d26a031ac5a85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}

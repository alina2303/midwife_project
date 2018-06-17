<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cf0fbeec32969564cc925b2c65a451810dd7979ecb802a14120bfe4e4ee01472 extends Twig_Template
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
        $__internal_545622b622bf4562508a798b8969715906a3fc8645aad8008b0ead6584b29312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545622b622bf4562508a798b8969715906a3fc8645aad8008b0ead6584b29312->enter($__internal_545622b622bf4562508a798b8969715906a3fc8645aad8008b0ead6584b29312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_545622b622bf4562508a798b8969715906a3fc8645aad8008b0ead6584b29312->leave($__internal_545622b622bf4562508a798b8969715906a3fc8645aad8008b0ead6584b29312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}

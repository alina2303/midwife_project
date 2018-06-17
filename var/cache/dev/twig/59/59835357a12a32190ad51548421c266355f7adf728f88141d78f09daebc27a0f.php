<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_893251fb7f0d07e83fe52f21d722e9de8e478df3b293f36bb6c05f81fb362a48 extends Twig_Template
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
        $__internal_08505111f0a6ea259ab759aeb6347fbe2545961ad243f8232a256ee0f05959cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08505111f0a6ea259ab759aeb6347fbe2545961ad243f8232a256ee0f05959cd->enter($__internal_08505111f0a6ea259ab759aeb6347fbe2545961ad243f8232a256ee0f05959cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_08505111f0a6ea259ab759aeb6347fbe2545961ad243f8232a256ee0f05959cd->leave($__internal_08505111f0a6ea259ab759aeb6347fbe2545961ad243f8232a256ee0f05959cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}

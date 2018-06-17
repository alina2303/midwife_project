<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_265ad2074e38c28a9710b73f69162e3cfd487a093cc1faf8bed7f0af4d873d34 extends Twig_Template
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
        $__internal_90fe63d4fdaaeda6f2615aea65488f92c3726748f165458307f54f5e732757ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fe63d4fdaaeda6f2615aea65488f92c3726748f165458307f54f5e732757ef->enter($__internal_90fe63d4fdaaeda6f2615aea65488f92c3726748f165458307f54f5e732757ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_90fe63d4fdaaeda6f2615aea65488f92c3726748f165458307f54f5e732757ef->leave($__internal_90fe63d4fdaaeda6f2615aea65488f92c3726748f165458307f54f5e732757ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}

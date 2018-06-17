<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_35c9332f854739646cfc4db8f8dc1690b53e2173ae452948c33b1d0f99e8294d extends Twig_Template
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
        $__internal_531b0af156902c0af5a391b2ade9c120baa5c5c1c29d22a0c4b82c89eaa2e0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531b0af156902c0af5a391b2ade9c120baa5c5c1c29d22a0c4b82c89eaa2e0f1->enter($__internal_531b0af156902c0af5a391b2ade9c120baa5c5c1c29d22a0c4b82c89eaa2e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_531b0af156902c0af5a391b2ade9c120baa5c5c1c29d22a0c4b82c89eaa2e0f1->leave($__internal_531b0af156902c0af5a391b2ade9c120baa5c5c1c29d22a0c4b82c89eaa2e0f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}

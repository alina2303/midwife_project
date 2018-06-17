<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7f3f4f8d90cf9481eeed59bd1e4462766a822096b128d7696cde6fc45c368bb6 extends Twig_Template
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
        $__internal_71903f2dd66c64199e76978b03e6dc79979ee468e6f4d3ec44cccead07a9e504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71903f2dd66c64199e76978b03e6dc79979ee468e6f4d3ec44cccead07a9e504->enter($__internal_71903f2dd66c64199e76978b03e6dc79979ee468e6f4d3ec44cccead07a9e504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_71903f2dd66c64199e76978b03e6dc79979ee468e6f4d3ec44cccead07a9e504->leave($__internal_71903f2dd66c64199e76978b03e6dc79979ee468e6f4d3ec44cccead07a9e504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}

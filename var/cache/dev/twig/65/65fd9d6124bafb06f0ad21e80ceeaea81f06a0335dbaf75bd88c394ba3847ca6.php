<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5f84652232dd4f7c6fd6d88e64607120dedc322210653ac2f023ec81732e33e2 extends Twig_Template
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
        $__internal_d10c7d0f0e56b3abaab0c459afb25598260bf4c4172771d1a340d0f142787f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10c7d0f0e56b3abaab0c459afb25598260bf4c4172771d1a340d0f142787f61->enter($__internal_d10c7d0f0e56b3abaab0c459afb25598260bf4c4172771d1a340d0f142787f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d10c7d0f0e56b3abaab0c459afb25598260bf4c4172771d1a340d0f142787f61->leave($__internal_d10c7d0f0e56b3abaab0c459afb25598260bf4c4172771d1a340d0f142787f61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}

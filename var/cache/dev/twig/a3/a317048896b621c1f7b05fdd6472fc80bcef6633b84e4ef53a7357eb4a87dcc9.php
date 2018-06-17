<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_90cdda411d1f30a129ba7d8e8e2bd94db5c8fc454a123c87e5eb492683784221 extends Twig_Template
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
        $__internal_d1ceb61112011d81d4a7fb57272d276b1ead3a5f60043abef4c8429c680dc628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ceb61112011d81d4a7fb57272d276b1ead3a5f60043abef4c8429c680dc628->enter($__internal_d1ceb61112011d81d4a7fb57272d276b1ead3a5f60043abef4c8429c680dc628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d1ceb61112011d81d4a7fb57272d276b1ead3a5f60043abef4c8429c680dc628->leave($__internal_d1ceb61112011d81d4a7fb57272d276b1ead3a5f60043abef4c8429c680dc628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

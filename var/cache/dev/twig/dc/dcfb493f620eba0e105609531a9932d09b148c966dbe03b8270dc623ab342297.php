<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_db96a634b5804991a484334b808de2f881cb3c6e9fbe4d78ecc4711684ce5df7 extends Twig_Template
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
        $__internal_cf1aa2be78f34d3f972600b9c9cc20bb33eba7035366079199b0ec5b1821f804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1aa2be78f34d3f972600b9c9cc20bb33eba7035366079199b0ec5b1821f804->enter($__internal_cf1aa2be78f34d3f972600b9c9cc20bb33eba7035366079199b0ec5b1821f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cf1aa2be78f34d3f972600b9c9cc20bb33eba7035366079199b0ec5b1821f804->leave($__internal_cf1aa2be78f34d3f972600b9c9cc20bb33eba7035366079199b0ec5b1821f804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}

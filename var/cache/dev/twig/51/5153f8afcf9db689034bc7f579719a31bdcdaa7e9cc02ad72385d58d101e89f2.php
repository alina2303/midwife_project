<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a892d2e5d7a4ce9b732f2f2098a6e7881f99eaedd78cba1ecde17b36a70550aa extends Twig_Template
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
        $__internal_63fd40759a0ed2c2986e6f6ac54866e61054e0df1e7aa430693a791abe8eb24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fd40759a0ed2c2986e6f6ac54866e61054e0df1e7aa430693a791abe8eb24a->enter($__internal_63fd40759a0ed2c2986e6f6ac54866e61054e0df1e7aa430693a791abe8eb24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63fd40759a0ed2c2986e6f6ac54866e61054e0df1e7aa430693a791abe8eb24a->leave($__internal_63fd40759a0ed2c2986e6f6ac54866e61054e0df1e7aa430693a791abe8eb24a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_753cc4fb12c1d17d9bd6e9b9b80b7027e3e4ecfe5cdb3735883ebf6bd4b3e906 extends Twig_Template
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
        $__internal_d94a0f396ac02ca4250ac0af3ad8581831f5123723eabc9dfacf959db19e57a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94a0f396ac02ca4250ac0af3ad8581831f5123723eabc9dfacf959db19e57a5->enter($__internal_d94a0f396ac02ca4250ac0af3ad8581831f5123723eabc9dfacf959db19e57a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d94a0f396ac02ca4250ac0af3ad8581831f5123723eabc9dfacf959db19e57a5->leave($__internal_d94a0f396ac02ca4250ac0af3ad8581831f5123723eabc9dfacf959db19e57a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}

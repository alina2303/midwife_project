<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_365de5d2b902a2caa3d24d732f6544a046e9aeaf7024aa3eec967d60a5847de6 extends Twig_Template
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
        $__internal_538f9d6612467a85e08d53360ee887835f1a201c457fdde4e111b861cc312a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538f9d6612467a85e08d53360ee887835f1a201c457fdde4e111b861cc312a27->enter($__internal_538f9d6612467a85e08d53360ee887835f1a201c457fdde4e111b861cc312a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_538f9d6612467a85e08d53360ee887835f1a201c457fdde4e111b861cc312a27->leave($__internal_538f9d6612467a85e08d53360ee887835f1a201c457fdde4e111b861cc312a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}

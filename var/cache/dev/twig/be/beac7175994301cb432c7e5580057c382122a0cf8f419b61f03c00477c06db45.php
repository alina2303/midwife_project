<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1566f2d503f92b6dbc510673ef3a9f353a294b1b2b8fc01d2b923346078854b0 extends Twig_Template
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
        $__internal_26ecc3b884b5a24834ce2cabf2042e41a6e50de912fc5725cfcbe5c5ddbd142f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ecc3b884b5a24834ce2cabf2042e41a6e50de912fc5725cfcbe5c5ddbd142f->enter($__internal_26ecc3b884b5a24834ce2cabf2042e41a6e50de912fc5725cfcbe5c5ddbd142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_26ecc3b884b5a24834ce2cabf2042e41a6e50de912fc5725cfcbe5c5ddbd142f->leave($__internal_26ecc3b884b5a24834ce2cabf2042e41a6e50de912fc5725cfcbe5c5ddbd142f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/alina/Desktop/UCN/midwife_project/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}

<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8f07c9b12789231f34a2a0185abea7317fe812c4a590b3aab88d21f75b3b455c extends Twig_Template
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
        $__internal_8d809985f56fad6ff114cbf39e4fa33f60f313cf31dd0f2d9610e5aa1497b518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d809985f56fad6ff114cbf39e4fa33f60f313cf31dd0f2d9610e5aa1497b518->enter($__internal_8d809985f56fad6ff114cbf39e4fa33f60f313cf31dd0f2d9610e5aa1497b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_54fdc08769af1b645c934561586b7eee445e45d825adbcd2df4a9f11a062d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fdc08769af1b645c934561586b7eee445e45d825adbcd2df4a9f11a062d01c->enter($__internal_54fdc08769af1b645c934561586b7eee445e45d825adbcd2df4a9f11a062d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8d809985f56fad6ff114cbf39e4fa33f60f313cf31dd0f2d9610e5aa1497b518->leave($__internal_8d809985f56fad6ff114cbf39e4fa33f60f313cf31dd0f2d9610e5aa1497b518_prof);

        
        $__internal_54fdc08769af1b645c934561586b7eee445e45d825adbcd2df4a9f11a062d01c->leave($__internal_54fdc08769af1b645c934561586b7eee445e45d825adbcd2df4a9f11a062d01c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

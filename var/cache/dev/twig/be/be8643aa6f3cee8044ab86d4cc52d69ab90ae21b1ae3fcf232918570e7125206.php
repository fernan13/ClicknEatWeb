<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8b72763b9fecd09edaed0676af5e49b4788c3bcf745547d1decf5955322b38d5 extends Twig_Template
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
        $__internal_4a33095cfb7284a39ffea69a852a0e1623d7eaa40a29b876f6f38491b86f9f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a33095cfb7284a39ffea69a852a0e1623d7eaa40a29b876f6f38491b86f9f2c->enter($__internal_4a33095cfb7284a39ffea69a852a0e1623d7eaa40a29b876f6f38491b86f9f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c00c6476674616979d33889b80e961e2285fdfa7cba5926e3cee573063055833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00c6476674616979d33889b80e961e2285fdfa7cba5926e3cee573063055833->enter($__internal_c00c6476674616979d33889b80e961e2285fdfa7cba5926e3cee573063055833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4a33095cfb7284a39ffea69a852a0e1623d7eaa40a29b876f6f38491b86f9f2c->leave($__internal_4a33095cfb7284a39ffea69a852a0e1623d7eaa40a29b876f6f38491b86f9f2c_prof);

        
        $__internal_c00c6476674616979d33889b80e961e2285fdfa7cba5926e3cee573063055833->leave($__internal_c00c6476674616979d33889b80e961e2285fdfa7cba5926e3cee573063055833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

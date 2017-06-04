<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_408e496b5868cd26cc74128b2a077605bd2773f2ca7bb5f4d47feba9d0c3a9fd extends Twig_Template
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
        $__internal_59ddab88d0cb5f5eca1765c6130cfcf83882d90aaefd5644211726dfebf08bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ddab88d0cb5f5eca1765c6130cfcf83882d90aaefd5644211726dfebf08bdc->enter($__internal_59ddab88d0cb5f5eca1765c6130cfcf83882d90aaefd5644211726dfebf08bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_206ed3867242bef9e670e8fa9a0661d50c49b95f2807abe15121a460b6cc0690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206ed3867242bef9e670e8fa9a0661d50c49b95f2807abe15121a460b6cc0690->enter($__internal_206ed3867242bef9e670e8fa9a0661d50c49b95f2807abe15121a460b6cc0690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59ddab88d0cb5f5eca1765c6130cfcf83882d90aaefd5644211726dfebf08bdc->leave($__internal_59ddab88d0cb5f5eca1765c6130cfcf83882d90aaefd5644211726dfebf08bdc_prof);

        
        $__internal_206ed3867242bef9e670e8fa9a0661d50c49b95f2807abe15121a460b6cc0690->leave($__internal_206ed3867242bef9e670e8fa9a0661d50c49b95f2807abe15121a460b6cc0690_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

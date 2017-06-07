<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fc9ad643f3bfc8b104ae26ca22289a56dfe375efd2eb1a81910a7c199150458d extends Twig_Template
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
        $__internal_572f0d7af616bd78c5ee1eff1dda06664fd0a5b0c01fab1cef0a36c5af0a3893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572f0d7af616bd78c5ee1eff1dda06664fd0a5b0c01fab1cef0a36c5af0a3893->enter($__internal_572f0d7af616bd78c5ee1eff1dda06664fd0a5b0c01fab1cef0a36c5af0a3893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_264c2c1e58bddb3f5791cfeeb70557fa458ded1c80d86cc9d86a2de9de4e754d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264c2c1e58bddb3f5791cfeeb70557fa458ded1c80d86cc9d86a2de9de4e754d->enter($__internal_264c2c1e58bddb3f5791cfeeb70557fa458ded1c80d86cc9d86a2de9de4e754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_572f0d7af616bd78c5ee1eff1dda06664fd0a5b0c01fab1cef0a36c5af0a3893->leave($__internal_572f0d7af616bd78c5ee1eff1dda06664fd0a5b0c01fab1cef0a36c5af0a3893_prof);

        
        $__internal_264c2c1e58bddb3f5791cfeeb70557fa458ded1c80d86cc9d86a2de9de4e754d->leave($__internal_264c2c1e58bddb3f5791cfeeb70557fa458ded1c80d86cc9d86a2de9de4e754d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

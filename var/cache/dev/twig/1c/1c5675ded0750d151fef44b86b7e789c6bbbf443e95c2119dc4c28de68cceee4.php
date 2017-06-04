<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2ddb94b94d7fa1745a8b241205ef8eabef3cc4a40961ae910beb5ed02ebff032 extends Twig_Template
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
        $__internal_f6a261f32e5c4ec630602f8d9d92cdabdf31b89bfb2a6b5db1f2c6e486a589a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a261f32e5c4ec630602f8d9d92cdabdf31b89bfb2a6b5db1f2c6e486a589a3->enter($__internal_f6a261f32e5c4ec630602f8d9d92cdabdf31b89bfb2a6b5db1f2c6e486a589a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_51f717aee0433d99b6e13f1919b36ab391e4e4e2781a5116dd308b997ae577c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f717aee0433d99b6e13f1919b36ab391e4e4e2781a5116dd308b997ae577c7->enter($__internal_51f717aee0433d99b6e13f1919b36ab391e4e4e2781a5116dd308b997ae577c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f6a261f32e5c4ec630602f8d9d92cdabdf31b89bfb2a6b5db1f2c6e486a589a3->leave($__internal_f6a261f32e5c4ec630602f8d9d92cdabdf31b89bfb2a6b5db1f2c6e486a589a3_prof);

        
        $__internal_51f717aee0433d99b6e13f1919b36ab391e4e4e2781a5116dd308b997ae577c7->leave($__internal_51f717aee0433d99b6e13f1919b36ab391e4e4e2781a5116dd308b997ae577c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

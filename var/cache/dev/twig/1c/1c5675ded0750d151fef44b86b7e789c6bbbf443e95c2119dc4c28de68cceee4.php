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
        $__internal_cd31c7ef0421d96bb6b5304c902aa4016b1d6afffb7d8d10cbc17f413d26b841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd31c7ef0421d96bb6b5304c902aa4016b1d6afffb7d8d10cbc17f413d26b841->enter($__internal_cd31c7ef0421d96bb6b5304c902aa4016b1d6afffb7d8d10cbc17f413d26b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c358d02ac46499d5f8c9a7dfdbeccdee7e2be59cbf38efca5ea2bd65a1a5e4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c358d02ac46499d5f8c9a7dfdbeccdee7e2be59cbf38efca5ea2bd65a1a5e4c1->enter($__internal_c358d02ac46499d5f8c9a7dfdbeccdee7e2be59cbf38efca5ea2bd65a1a5e4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cd31c7ef0421d96bb6b5304c902aa4016b1d6afffb7d8d10cbc17f413d26b841->leave($__internal_cd31c7ef0421d96bb6b5304c902aa4016b1d6afffb7d8d10cbc17f413d26b841_prof);

        
        $__internal_c358d02ac46499d5f8c9a7dfdbeccdee7e2be59cbf38efca5ea2bd65a1a5e4c1->leave($__internal_c358d02ac46499d5f8c9a7dfdbeccdee7e2be59cbf38efca5ea2bd65a1a5e4c1_prof);

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

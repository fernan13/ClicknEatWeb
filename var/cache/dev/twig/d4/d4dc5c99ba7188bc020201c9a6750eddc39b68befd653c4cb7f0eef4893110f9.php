<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9c149be035ffe77694641e543282f6a478ef6365d003e45d9c8c96d4d8bee714 extends Twig_Template
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
        $__internal_57212430e71c0ef576241770eb30b5bdc03f0a9df885d17a6d185a118eb886e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57212430e71c0ef576241770eb30b5bdc03f0a9df885d17a6d185a118eb886e0->enter($__internal_57212430e71c0ef576241770eb30b5bdc03f0a9df885d17a6d185a118eb886e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_cf5aebd8aa66c79cde68be9db92eb629bb618d168e8d072316beb6b6b600b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5aebd8aa66c79cde68be9db92eb629bb618d168e8d072316beb6b6b600b30f->enter($__internal_cf5aebd8aa66c79cde68be9db92eb629bb618d168e8d072316beb6b6b600b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_57212430e71c0ef576241770eb30b5bdc03f0a9df885d17a6d185a118eb886e0->leave($__internal_57212430e71c0ef576241770eb30b5bdc03f0a9df885d17a6d185a118eb886e0_prof);

        
        $__internal_cf5aebd8aa66c79cde68be9db92eb629bb618d168e8d072316beb6b6b600b30f->leave($__internal_cf5aebd8aa66c79cde68be9db92eb629bb618d168e8d072316beb6b6b600b30f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

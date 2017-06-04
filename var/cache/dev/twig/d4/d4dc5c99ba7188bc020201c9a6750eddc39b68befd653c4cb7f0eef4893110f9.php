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
        $__internal_f8290b278eb8356a126d7829a50de6f57102f3060b7470c1b31c240995af37a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8290b278eb8356a126d7829a50de6f57102f3060b7470c1b31c240995af37a7->enter($__internal_f8290b278eb8356a126d7829a50de6f57102f3060b7470c1b31c240995af37a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2df3d40291df41fce6dc4f89b6163d44ffebbd6ef0c46d987ebfe6ca44c8da96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df3d40291df41fce6dc4f89b6163d44ffebbd6ef0c46d987ebfe6ca44c8da96->enter($__internal_2df3d40291df41fce6dc4f89b6163d44ffebbd6ef0c46d987ebfe6ca44c8da96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f8290b278eb8356a126d7829a50de6f57102f3060b7470c1b31c240995af37a7->leave($__internal_f8290b278eb8356a126d7829a50de6f57102f3060b7470c1b31c240995af37a7_prof);

        
        $__internal_2df3d40291df41fce6dc4f89b6163d44ffebbd6ef0c46d987ebfe6ca44c8da96->leave($__internal_2df3d40291df41fce6dc4f89b6163d44ffebbd6ef0c46d987ebfe6ca44c8da96_prof);

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

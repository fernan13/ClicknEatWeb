<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b3dd6ddf833a12bc05c0869b7e4fe653b0378c1dc29cdb9acef64875da4c3993 extends Twig_Template
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
        $__internal_eb53be2cf0603eede119e144d0a1f6eaff63e443c1474e982126fef68319b1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb53be2cf0603eede119e144d0a1f6eaff63e443c1474e982126fef68319b1f1->enter($__internal_eb53be2cf0603eede119e144d0a1f6eaff63e443c1474e982126fef68319b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_303a836b0b0601ef27a8f0fa6433787f44c4c0878c0294f0260b0fc81578df9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303a836b0b0601ef27a8f0fa6433787f44c4c0878c0294f0260b0fc81578df9b->enter($__internal_303a836b0b0601ef27a8f0fa6433787f44c4c0878c0294f0260b0fc81578df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_eb53be2cf0603eede119e144d0a1f6eaff63e443c1474e982126fef68319b1f1->leave($__internal_eb53be2cf0603eede119e144d0a1f6eaff63e443c1474e982126fef68319b1f1_prof);

        
        $__internal_303a836b0b0601ef27a8f0fa6433787f44c4c0878c0294f0260b0fc81578df9b->leave($__internal_303a836b0b0601ef27a8f0fa6433787f44c4c0878c0294f0260b0fc81578df9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

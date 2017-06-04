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
        $__internal_f41149f3334d944c52cd439f2c92edd4e20f47e80b17e7cea667fdc73e5bbba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41149f3334d944c52cd439f2c92edd4e20f47e80b17e7cea667fdc73e5bbba0->enter($__internal_f41149f3334d944c52cd439f2c92edd4e20f47e80b17e7cea667fdc73e5bbba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fb168a33d00460cccde70694bd3f83a36dc8afebf4c762a89a2a2f1496aafceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb168a33d00460cccde70694bd3f83a36dc8afebf4c762a89a2a2f1496aafceb->enter($__internal_fb168a33d00460cccde70694bd3f83a36dc8afebf4c762a89a2a2f1496aafceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f41149f3334d944c52cd439f2c92edd4e20f47e80b17e7cea667fdc73e5bbba0->leave($__internal_f41149f3334d944c52cd439f2c92edd4e20f47e80b17e7cea667fdc73e5bbba0_prof);

        
        $__internal_fb168a33d00460cccde70694bd3f83a36dc8afebf4c762a89a2a2f1496aafceb->leave($__internal_fb168a33d00460cccde70694bd3f83a36dc8afebf4c762a89a2a2f1496aafceb_prof);

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

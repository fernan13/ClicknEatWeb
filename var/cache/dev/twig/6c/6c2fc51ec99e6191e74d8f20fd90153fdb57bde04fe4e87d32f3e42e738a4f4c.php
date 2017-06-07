<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9e743e9e7244c021f8aa1ba79b12a7be29c8cd5d05c5dc7613a2145565f8255f extends Twig_Template
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
        $__internal_6dbb1d130072095d55d0eba05d4c4339a0043b49f06fb5b8636a0a6dbe14f4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbb1d130072095d55d0eba05d4c4339a0043b49f06fb5b8636a0a6dbe14f4a5->enter($__internal_6dbb1d130072095d55d0eba05d4c4339a0043b49f06fb5b8636a0a6dbe14f4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3c6775e8d65009097ad5781473952f1405836f307ba04d09afb73b82b55b01b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6775e8d65009097ad5781473952f1405836f307ba04d09afb73b82b55b01b7->enter($__internal_3c6775e8d65009097ad5781473952f1405836f307ba04d09afb73b82b55b01b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6dbb1d130072095d55d0eba05d4c4339a0043b49f06fb5b8636a0a6dbe14f4a5->leave($__internal_6dbb1d130072095d55d0eba05d4c4339a0043b49f06fb5b8636a0a6dbe14f4a5_prof);

        
        $__internal_3c6775e8d65009097ad5781473952f1405836f307ba04d09afb73b82b55b01b7->leave($__internal_3c6775e8d65009097ad5781473952f1405836f307ba04d09afb73b82b55b01b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

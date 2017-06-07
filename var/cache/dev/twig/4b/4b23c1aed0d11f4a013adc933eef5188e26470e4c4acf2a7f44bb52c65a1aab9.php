<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1a7c222181ebe37d366365d069fede45958b8195bf612b20a4289d312c20e87a extends Twig_Template
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
        $__internal_428407922202d6df6ea0a368e81ede781eadf2a6da23322f1e89019086ba5c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428407922202d6df6ea0a368e81ede781eadf2a6da23322f1e89019086ba5c61->enter($__internal_428407922202d6df6ea0a368e81ede781eadf2a6da23322f1e89019086ba5c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_92eb2540d94b9deaede72c80744236e0ea96589ae34b54a8ac87a09fc9650daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92eb2540d94b9deaede72c80744236e0ea96589ae34b54a8ac87a09fc9650daf->enter($__internal_92eb2540d94b9deaede72c80744236e0ea96589ae34b54a8ac87a09fc9650daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_428407922202d6df6ea0a368e81ede781eadf2a6da23322f1e89019086ba5c61->leave($__internal_428407922202d6df6ea0a368e81ede781eadf2a6da23322f1e89019086ba5c61_prof);

        
        $__internal_92eb2540d94b9deaede72c80744236e0ea96589ae34b54a8ac87a09fc9650daf->leave($__internal_92eb2540d94b9deaede72c80744236e0ea96589ae34b54a8ac87a09fc9650daf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

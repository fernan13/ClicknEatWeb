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
        $__internal_f1313b409e247eb8237d3f35fe375323406a2293b96505c3be45d0c1b6c6b7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1313b409e247eb8237d3f35fe375323406a2293b96505c3be45d0c1b6c6b7e4->enter($__internal_f1313b409e247eb8237d3f35fe375323406a2293b96505c3be45d0c1b6c6b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_40271f97b6b6489ed05056ddd0cca21ce5f171e118344193e4a9f42259468ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40271f97b6b6489ed05056ddd0cca21ce5f171e118344193e4a9f42259468ae1->enter($__internal_40271f97b6b6489ed05056ddd0cca21ce5f171e118344193e4a9f42259468ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f1313b409e247eb8237d3f35fe375323406a2293b96505c3be45d0c1b6c6b7e4->leave($__internal_f1313b409e247eb8237d3f35fe375323406a2293b96505c3be45d0c1b6c6b7e4_prof);

        
        $__internal_40271f97b6b6489ed05056ddd0cca21ce5f171e118344193e4a9f42259468ae1->leave($__internal_40271f97b6b6489ed05056ddd0cca21ce5f171e118344193e4a9f42259468ae1_prof);

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

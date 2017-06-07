<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_59ee3c8a7fad523b81c457f64b331a4c58ecbc04ff0cac7dbbe42fff71094566 extends Twig_Template
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
        $__internal_70386a1d9d83f06fecf112cdedd04848ba60e4821eeccc2baab86a7b20b8b46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70386a1d9d83f06fecf112cdedd04848ba60e4821eeccc2baab86a7b20b8b46d->enter($__internal_70386a1d9d83f06fecf112cdedd04848ba60e4821eeccc2baab86a7b20b8b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_56530163329dec255cc31b413921e6f575a0c06b7ac6048f60f449d9ab517bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56530163329dec255cc31b413921e6f575a0c06b7ac6048f60f449d9ab517bb8->enter($__internal_56530163329dec255cc31b413921e6f575a0c06b7ac6048f60f449d9ab517bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_70386a1d9d83f06fecf112cdedd04848ba60e4821eeccc2baab86a7b20b8b46d->leave($__internal_70386a1d9d83f06fecf112cdedd04848ba60e4821eeccc2baab86a7b20b8b46d_prof);

        
        $__internal_56530163329dec255cc31b413921e6f575a0c06b7ac6048f60f449d9ab517bb8->leave($__internal_56530163329dec255cc31b413921e6f575a0c06b7ac6048f60f449d9ab517bb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

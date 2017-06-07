<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cb8e8c5b99789fc92df22a57f698378f089d9747adf6b0487a9f7d7455a7bc79 extends Twig_Template
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
        $__internal_73ef4206404ea9d036f3039f3c93498db5adc93bc25ac4754680edc1e483139a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ef4206404ea9d036f3039f3c93498db5adc93bc25ac4754680edc1e483139a->enter($__internal_73ef4206404ea9d036f3039f3c93498db5adc93bc25ac4754680edc1e483139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_87e5ea6439effcefc8833e3715714762703c6dcc32c3b7f8099d87c4a52ddf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e5ea6439effcefc8833e3715714762703c6dcc32c3b7f8099d87c4a52ddf8b->enter($__internal_87e5ea6439effcefc8833e3715714762703c6dcc32c3b7f8099d87c4a52ddf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_73ef4206404ea9d036f3039f3c93498db5adc93bc25ac4754680edc1e483139a->leave($__internal_73ef4206404ea9d036f3039f3c93498db5adc93bc25ac4754680edc1e483139a_prof);

        
        $__internal_87e5ea6439effcefc8833e3715714762703c6dcc32c3b7f8099d87c4a52ddf8b->leave($__internal_87e5ea6439effcefc8833e3715714762703c6dcc32c3b7f8099d87c4a52ddf8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

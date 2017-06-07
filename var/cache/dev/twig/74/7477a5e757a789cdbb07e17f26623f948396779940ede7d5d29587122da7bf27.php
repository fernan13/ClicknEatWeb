<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8d4e9b874fb8c6f9fdf99257f5a8a5bfadc0161dd9465bba44cf708919c567bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89d8d30e1588fa5503f43eeb14cbb94ad7723fd497d5d655195b11b6dad57982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d8d30e1588fa5503f43eeb14cbb94ad7723fd497d5d655195b11b6dad57982->enter($__internal_89d8d30e1588fa5503f43eeb14cbb94ad7723fd497d5d655195b11b6dad57982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d41d93f45ddf1525405b863817a92d3a87b930b40d474a9d3280e1e5684c829d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41d93f45ddf1525405b863817a92d3a87b930b40d474a9d3280e1e5684c829d->enter($__internal_d41d93f45ddf1525405b863817a92d3a87b930b40d474a9d3280e1e5684c829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89d8d30e1588fa5503f43eeb14cbb94ad7723fd497d5d655195b11b6dad57982->leave($__internal_89d8d30e1588fa5503f43eeb14cbb94ad7723fd497d5d655195b11b6dad57982_prof);

        
        $__internal_d41d93f45ddf1525405b863817a92d3a87b930b40d474a9d3280e1e5684c829d->leave($__internal_d41d93f45ddf1525405b863817a92d3a87b930b40d474a9d3280e1e5684c829d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf305dba1b4b4bd0b267fc958e0e348d8edc1cb30c56558cf6c8899c983e82c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf305dba1b4b4bd0b267fc958e0e348d8edc1cb30c56558cf6c8899c983e82c5->enter($__internal_bf305dba1b4b4bd0b267fc958e0e348d8edc1cb30c56558cf6c8899c983e82c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc7ea409f5c5f8ab9574da8806721d3e862e15a020599921bbd5e5350e643c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7ea409f5c5f8ab9574da8806721d3e862e15a020599921bbd5e5350e643c76->enter($__internal_cc7ea409f5c5f8ab9574da8806721d3e862e15a020599921bbd5e5350e643c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc7ea409f5c5f8ab9574da8806721d3e862e15a020599921bbd5e5350e643c76->leave($__internal_cc7ea409f5c5f8ab9574da8806721d3e862e15a020599921bbd5e5350e643c76_prof);

        
        $__internal_bf305dba1b4b4bd0b267fc958e0e348d8edc1cb30c56558cf6c8899c983e82c5->leave($__internal_bf305dba1b4b4bd0b267fc958e0e348d8edc1cb30c56558cf6c8899c983e82c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

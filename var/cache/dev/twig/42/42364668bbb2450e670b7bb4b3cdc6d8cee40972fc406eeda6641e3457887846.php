<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8c5bd7645f3a7b7e60836c00a6dfc893fd85d713510da47d522bfdcf617f0967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d378bba4c58fcc8614e2813f94dc48c7ce70d71ecabc733280e2c57b3bbc1901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d378bba4c58fcc8614e2813f94dc48c7ce70d71ecabc733280e2c57b3bbc1901->enter($__internal_d378bba4c58fcc8614e2813f94dc48c7ce70d71ecabc733280e2c57b3bbc1901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_00517c6d0b08941a3a93dc6c5d383e9d286d6e73994611b8ab5c46c764d343cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00517c6d0b08941a3a93dc6c5d383e9d286d6e73994611b8ab5c46c764d343cc->enter($__internal_00517c6d0b08941a3a93dc6c5d383e9d286d6e73994611b8ab5c46c764d343cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d378bba4c58fcc8614e2813f94dc48c7ce70d71ecabc733280e2c57b3bbc1901->leave($__internal_d378bba4c58fcc8614e2813f94dc48c7ce70d71ecabc733280e2c57b3bbc1901_prof);

        
        $__internal_00517c6d0b08941a3a93dc6c5d383e9d286d6e73994611b8ab5c46c764d343cc->leave($__internal_00517c6d0b08941a3a93dc6c5d383e9d286d6e73994611b8ab5c46c764d343cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bf1716d8f0c5c49e8ef1a1eed25824fb2c632adbd1eea1095b4747f69f8800e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf1716d8f0c5c49e8ef1a1eed25824fb2c632adbd1eea1095b4747f69f8800e->enter($__internal_0bf1716d8f0c5c49e8ef1a1eed25824fb2c632adbd1eea1095b4747f69f8800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54da7a7b9e0b66158385141f9c88d471124807958ea8bfcd7d32eb40642860f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54da7a7b9e0b66158385141f9c88d471124807958ea8bfcd7d32eb40642860f7->enter($__internal_54da7a7b9e0b66158385141f9c88d471124807958ea8bfcd7d32eb40642860f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_54da7a7b9e0b66158385141f9c88d471124807958ea8bfcd7d32eb40642860f7->leave($__internal_54da7a7b9e0b66158385141f9c88d471124807958ea8bfcd7d32eb40642860f7_prof);

        
        $__internal_0bf1716d8f0c5c49e8ef1a1eed25824fb2c632adbd1eea1095b4747f69f8800e->leave($__internal_0bf1716d8f0c5c49e8ef1a1eed25824fb2c632adbd1eea1095b4747f69f8800e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_370e6df8f06b6e8a5e5974b0ab75631f4886aed59735da1ab872a57a43c1c947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370e6df8f06b6e8a5e5974b0ab75631f4886aed59735da1ab872a57a43c1c947->enter($__internal_370e6df8f06b6e8a5e5974b0ab75631f4886aed59735da1ab872a57a43c1c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dcfa67403346068831159b19810875fdb90671c146db532c827dfd90597b310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcfa67403346068831159b19810875fdb90671c146db532c827dfd90597b310->enter($__internal_4dcfa67403346068831159b19810875fdb90671c146db532c827dfd90597b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4dcfa67403346068831159b19810875fdb90671c146db532c827dfd90597b310->leave($__internal_4dcfa67403346068831159b19810875fdb90671c146db532c827dfd90597b310_prof);

        
        $__internal_370e6df8f06b6e8a5e5974b0ab75631f4886aed59735da1ab872a57a43c1c947->leave($__internal_370e6df8f06b6e8a5e5974b0ab75631f4886aed59735da1ab872a57a43c1c947_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

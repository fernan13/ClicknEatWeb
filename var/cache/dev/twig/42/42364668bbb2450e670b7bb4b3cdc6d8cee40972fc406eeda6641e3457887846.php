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
        $__internal_09fe988df3e3477941434db8d6fb1b7dd1284717fe03c98f17be7ed77a7a94cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fe988df3e3477941434db8d6fb1b7dd1284717fe03c98f17be7ed77a7a94cb->enter($__internal_09fe988df3e3477941434db8d6fb1b7dd1284717fe03c98f17be7ed77a7a94cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_def5d05602ecb5783fa1caf48d60af72d2c595e56e94e63f4ee8922c5f6946b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def5d05602ecb5783fa1caf48d60af72d2c595e56e94e63f4ee8922c5f6946b9->enter($__internal_def5d05602ecb5783fa1caf48d60af72d2c595e56e94e63f4ee8922c5f6946b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fe988df3e3477941434db8d6fb1b7dd1284717fe03c98f17be7ed77a7a94cb->leave($__internal_09fe988df3e3477941434db8d6fb1b7dd1284717fe03c98f17be7ed77a7a94cb_prof);

        
        $__internal_def5d05602ecb5783fa1caf48d60af72d2c595e56e94e63f4ee8922c5f6946b9->leave($__internal_def5d05602ecb5783fa1caf48d60af72d2c595e56e94e63f4ee8922c5f6946b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d4848b4bd301739c52ad1a9afc199f274a235e4cdcce7e7ca66deea2516792a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4848b4bd301739c52ad1a9afc199f274a235e4cdcce7e7ca66deea2516792a->enter($__internal_1d4848b4bd301739c52ad1a9afc199f274a235e4cdcce7e7ca66deea2516792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1ceebdc7af5a886f68df437f1cdc8adcf2344d6917680c9e6351c9db22e0d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ceebdc7af5a886f68df437f1cdc8adcf2344d6917680c9e6351c9db22e0d2d->enter($__internal_a1ceebdc7af5a886f68df437f1cdc8adcf2344d6917680c9e6351c9db22e0d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a1ceebdc7af5a886f68df437f1cdc8adcf2344d6917680c9e6351c9db22e0d2d->leave($__internal_a1ceebdc7af5a886f68df437f1cdc8adcf2344d6917680c9e6351c9db22e0d2d_prof);

        
        $__internal_1d4848b4bd301739c52ad1a9afc199f274a235e4cdcce7e7ca66deea2516792a->leave($__internal_1d4848b4bd301739c52ad1a9afc199f274a235e4cdcce7e7ca66deea2516792a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_677cb751f10de81e21b9242f14dcfbcbabae119ddbd80ec82814eb2b248c16f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677cb751f10de81e21b9242f14dcfbcbabae119ddbd80ec82814eb2b248c16f3->enter($__internal_677cb751f10de81e21b9242f14dcfbcbabae119ddbd80ec82814eb2b248c16f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6665909c143ffe299004fcc01ef8bcb1fd37cfbd7c6ed372a88c3d5f736ddb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6665909c143ffe299004fcc01ef8bcb1fd37cfbd7c6ed372a88c3d5f736ddb5->enter($__internal_e6665909c143ffe299004fcc01ef8bcb1fd37cfbd7c6ed372a88c3d5f736ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6665909c143ffe299004fcc01ef8bcb1fd37cfbd7c6ed372a88c3d5f736ddb5->leave($__internal_e6665909c143ffe299004fcc01ef8bcb1fd37cfbd7c6ed372a88c3d5f736ddb5_prof);

        
        $__internal_677cb751f10de81e21b9242f14dcfbcbabae119ddbd80ec82814eb2b248c16f3->leave($__internal_677cb751f10de81e21b9242f14dcfbcbabae119ddbd80ec82814eb2b248c16f3_prof);

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

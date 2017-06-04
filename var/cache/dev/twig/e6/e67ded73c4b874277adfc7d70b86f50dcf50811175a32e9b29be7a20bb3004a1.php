<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_40a24ed4f95ca717bc8204f5c7c900ccb7a53cbf0819114bed2488575d6227d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fb99d3a29df9ccf51341efba8707dbb0a5e5f1f2375dbcc9ed918343757d678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb99d3a29df9ccf51341efba8707dbb0a5e5f1f2375dbcc9ed918343757d678->enter($__internal_1fb99d3a29df9ccf51341efba8707dbb0a5e5f1f2375dbcc9ed918343757d678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_98e1be68fc2948b276cc393a8c35e18341b77aec54bf8c8423cdfb89465ec2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e1be68fc2948b276cc393a8c35e18341b77aec54bf8c8423cdfb89465ec2f8->enter($__internal_98e1be68fc2948b276cc393a8c35e18341b77aec54bf8c8423cdfb89465ec2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb99d3a29df9ccf51341efba8707dbb0a5e5f1f2375dbcc9ed918343757d678->leave($__internal_1fb99d3a29df9ccf51341efba8707dbb0a5e5f1f2375dbcc9ed918343757d678_prof);

        
        $__internal_98e1be68fc2948b276cc393a8c35e18341b77aec54bf8c8423cdfb89465ec2f8->leave($__internal_98e1be68fc2948b276cc393a8c35e18341b77aec54bf8c8423cdfb89465ec2f8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f58eca8c3023232284631a5daed3c4666f480620b6306d756ed5a432cfd854ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58eca8c3023232284631a5daed3c4666f480620b6306d756ed5a432cfd854ab->enter($__internal_f58eca8c3023232284631a5daed3c4666f480620b6306d756ed5a432cfd854ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_27109309b079cb1c2fa786c645e4de2d48ab154356167d68e54739f71817762f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27109309b079cb1c2fa786c645e4de2d48ab154356167d68e54739f71817762f->enter($__internal_27109309b079cb1c2fa786c645e4de2d48ab154356167d68e54739f71817762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_27109309b079cb1c2fa786c645e4de2d48ab154356167d68e54739f71817762f->leave($__internal_27109309b079cb1c2fa786c645e4de2d48ab154356167d68e54739f71817762f_prof);

        
        $__internal_f58eca8c3023232284631a5daed3c4666f480620b6306d756ed5a432cfd854ab->leave($__internal_f58eca8c3023232284631a5daed3c4666f480620b6306d756ed5a432cfd854ab_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0629b7db3dc9762243c9925443f15f51acd7dfae7752335482ac4327c18db174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0629b7db3dc9762243c9925443f15f51acd7dfae7752335482ac4327c18db174->enter($__internal_0629b7db3dc9762243c9925443f15f51acd7dfae7752335482ac4327c18db174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bce52112abf2e18b5c8f4195f98c027c690028baee3e01d4b77f0c1c48297286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce52112abf2e18b5c8f4195f98c027c690028baee3e01d4b77f0c1c48297286->enter($__internal_bce52112abf2e18b5c8f4195f98c027c690028baee3e01d4b77f0c1c48297286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bce52112abf2e18b5c8f4195f98c027c690028baee3e01d4b77f0c1c48297286->leave($__internal_bce52112abf2e18b5c8f4195f98c027c690028baee3e01d4b77f0c1c48297286_prof);

        
        $__internal_0629b7db3dc9762243c9925443f15f51acd7dfae7752335482ac4327c18db174->leave($__internal_0629b7db3dc9762243c9925443f15f51acd7dfae7752335482ac4327c18db174_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

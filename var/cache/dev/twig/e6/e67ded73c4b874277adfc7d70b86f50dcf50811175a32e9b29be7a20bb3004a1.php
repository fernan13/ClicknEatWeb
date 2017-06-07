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
        $__internal_3d8112b4b646f91d8a32320394210e0a10b7b9c21519567a00d0c11f7cbb98e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8112b4b646f91d8a32320394210e0a10b7b9c21519567a00d0c11f7cbb98e6->enter($__internal_3d8112b4b646f91d8a32320394210e0a10b7b9c21519567a00d0c11f7cbb98e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_036013e5a0f2c8efcc9a2292d3c75035f30f5405022eda0977b39f4e760bdc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036013e5a0f2c8efcc9a2292d3c75035f30f5405022eda0977b39f4e760bdc03->enter($__internal_036013e5a0f2c8efcc9a2292d3c75035f30f5405022eda0977b39f4e760bdc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d8112b4b646f91d8a32320394210e0a10b7b9c21519567a00d0c11f7cbb98e6->leave($__internal_3d8112b4b646f91d8a32320394210e0a10b7b9c21519567a00d0c11f7cbb98e6_prof);

        
        $__internal_036013e5a0f2c8efcc9a2292d3c75035f30f5405022eda0977b39f4e760bdc03->leave($__internal_036013e5a0f2c8efcc9a2292d3c75035f30f5405022eda0977b39f4e760bdc03_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8c960a869ff01467e8a809835aa74ab7ad051c1fd49eeb7d2c3018d0267cbb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c960a869ff01467e8a809835aa74ab7ad051c1fd49eeb7d2c3018d0267cbb2c->enter($__internal_8c960a869ff01467e8a809835aa74ab7ad051c1fd49eeb7d2c3018d0267cbb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b013b1b40a66c6aa78ad113e802fe00db8d9fa15b0b13f541b7b4b8b27b1d339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b013b1b40a66c6aa78ad113e802fe00db8d9fa15b0b13f541b7b4b8b27b1d339->enter($__internal_b013b1b40a66c6aa78ad113e802fe00db8d9fa15b0b13f541b7b4b8b27b1d339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b013b1b40a66c6aa78ad113e802fe00db8d9fa15b0b13f541b7b4b8b27b1d339->leave($__internal_b013b1b40a66c6aa78ad113e802fe00db8d9fa15b0b13f541b7b4b8b27b1d339_prof);

        
        $__internal_8c960a869ff01467e8a809835aa74ab7ad051c1fd49eeb7d2c3018d0267cbb2c->leave($__internal_8c960a869ff01467e8a809835aa74ab7ad051c1fd49eeb7d2c3018d0267cbb2c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6ac73a68e305af4921b8c4169de9868a144337d024fef2f7a31a75ce71d2f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ac73a68e305af4921b8c4169de9868a144337d024fef2f7a31a75ce71d2f87->enter($__internal_e6ac73a68e305af4921b8c4169de9868a144337d024fef2f7a31a75ce71d2f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d3940ec7bb22aad071a655fb6551ee9bef09c495327727c3b258e53eb1bf65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3940ec7bb22aad071a655fb6551ee9bef09c495327727c3b258e53eb1bf65a->enter($__internal_4d3940ec7bb22aad071a655fb6551ee9bef09c495327727c3b258e53eb1bf65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4d3940ec7bb22aad071a655fb6551ee9bef09c495327727c3b258e53eb1bf65a->leave($__internal_4d3940ec7bb22aad071a655fb6551ee9bef09c495327727c3b258e53eb1bf65a_prof);

        
        $__internal_e6ac73a68e305af4921b8c4169de9868a144337d024fef2f7a31a75ce71d2f87->leave($__internal_e6ac73a68e305af4921b8c4169de9868a144337d024fef2f7a31a75ce71d2f87_prof);

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

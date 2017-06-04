<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8433771ad6864ef31aebfd77d806175c3631d9e2649ec76e5114223b4c0fe520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9cbfffb6480203e3d97f6b69a2e87aaaaffbf0fa98a206eee24103bd401038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9cbfffb6480203e3d97f6b69a2e87aaaaffbf0fa98a206eee24103bd401038->enter($__internal_6a9cbfffb6480203e3d97f6b69a2e87aaaaffbf0fa98a206eee24103bd401038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ec246a6d72648e8d31621043d4a4cbadd52a9a8194a4d9d40d4aa207bcbc8f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec246a6d72648e8d31621043d4a4cbadd52a9a8194a4d9d40d4aa207bcbc8f0d->enter($__internal_ec246a6d72648e8d31621043d4a4cbadd52a9a8194a4d9d40d4aa207bcbc8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9cbfffb6480203e3d97f6b69a2e87aaaaffbf0fa98a206eee24103bd401038->leave($__internal_6a9cbfffb6480203e3d97f6b69a2e87aaaaffbf0fa98a206eee24103bd401038_prof);

        
        $__internal_ec246a6d72648e8d31621043d4a4cbadd52a9a8194a4d9d40d4aa207bcbc8f0d->leave($__internal_ec246a6d72648e8d31621043d4a4cbadd52a9a8194a4d9d40d4aa207bcbc8f0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e8bacf69e08cbe01cfe9e5fd42cbfa9f1866756221a872c0b05f64014dcb353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8bacf69e08cbe01cfe9e5fd42cbfa9f1866756221a872c0b05f64014dcb353->enter($__internal_6e8bacf69e08cbe01cfe9e5fd42cbfa9f1866756221a872c0b05f64014dcb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f0cb15dfc7e29c1641f238e29190b43be326355c6f5b5c4a102476a4e294a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0cb15dfc7e29c1641f238e29190b43be326355c6f5b5c4a102476a4e294a0a->enter($__internal_8f0cb15dfc7e29c1641f238e29190b43be326355c6f5b5c4a102476a4e294a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f0cb15dfc7e29c1641f238e29190b43be326355c6f5b5c4a102476a4e294a0a->leave($__internal_8f0cb15dfc7e29c1641f238e29190b43be326355c6f5b5c4a102476a4e294a0a_prof);

        
        $__internal_6e8bacf69e08cbe01cfe9e5fd42cbfa9f1866756221a872c0b05f64014dcb353->leave($__internal_6e8bacf69e08cbe01cfe9e5fd42cbfa9f1866756221a872c0b05f64014dcb353_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fc0a03618a4add0d45a75b371e93cee5a66d8e7fbef53f50d6156f8954864db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc0a03618a4add0d45a75b371e93cee5a66d8e7fbef53f50d6156f8954864db->enter($__internal_4fc0a03618a4add0d45a75b371e93cee5a66d8e7fbef53f50d6156f8954864db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbf889fa7170512ddea64af553376074c58d97135abb4c4ed14a1dc5920c7e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf889fa7170512ddea64af553376074c58d97135abb4c4ed14a1dc5920c7e40->enter($__internal_fbf889fa7170512ddea64af553376074c58d97135abb4c4ed14a1dc5920c7e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fbf889fa7170512ddea64af553376074c58d97135abb4c4ed14a1dc5920c7e40->leave($__internal_fbf889fa7170512ddea64af553376074c58d97135abb4c4ed14a1dc5920c7e40_prof);

        
        $__internal_4fc0a03618a4add0d45a75b371e93cee5a66d8e7fbef53f50d6156f8954864db->leave($__internal_4fc0a03618a4add0d45a75b371e93cee5a66d8e7fbef53f50d6156f8954864db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ef8e9e8acc8ccb65bfa70f567a23cecc6ded8357de9be6555de437805a95bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef8e9e8acc8ccb65bfa70f567a23cecc6ded8357de9be6555de437805a95bda->enter($__internal_4ef8e9e8acc8ccb65bfa70f567a23cecc6ded8357de9be6555de437805a95bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8ed90e8e203fc380eee9f7a4f051e76d7445cd1bfa517ff915a18b75f33364b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ed90e8e203fc380eee9f7a4f051e76d7445cd1bfa517ff915a18b75f33364b->enter($__internal_c8ed90e8e203fc380eee9f7a4f051e76d7445cd1bfa517ff915a18b75f33364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c8ed90e8e203fc380eee9f7a4f051e76d7445cd1bfa517ff915a18b75f33364b->leave($__internal_c8ed90e8e203fc380eee9f7a4f051e76d7445cd1bfa517ff915a18b75f33364b_prof);

        
        $__internal_4ef8e9e8acc8ccb65bfa70f567a23cecc6ded8357de9be6555de437805a95bda->leave($__internal_4ef8e9e8acc8ccb65bfa70f567a23cecc6ded8357de9be6555de437805a95bda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

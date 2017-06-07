<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a1b82a808774d9fc0b9009430fcf3ece98d13d176bdab5c827db8f158eef447c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd61e4927ef4ed7d963e90e437128bb93d03e5ef41b5ae9b95d8b34819d0b311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd61e4927ef4ed7d963e90e437128bb93d03e5ef41b5ae9b95d8b34819d0b311->enter($__internal_bd61e4927ef4ed7d963e90e437128bb93d03e5ef41b5ae9b95d8b34819d0b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d7c3766df76113b3747232ed4732423bddbacd4aabb2192b45fa50ab61e419c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c3766df76113b3747232ed4732423bddbacd4aabb2192b45fa50ab61e419c7->enter($__internal_d7c3766df76113b3747232ed4732423bddbacd4aabb2192b45fa50ab61e419c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd61e4927ef4ed7d963e90e437128bb93d03e5ef41b5ae9b95d8b34819d0b311->leave($__internal_bd61e4927ef4ed7d963e90e437128bb93d03e5ef41b5ae9b95d8b34819d0b311_prof);

        
        $__internal_d7c3766df76113b3747232ed4732423bddbacd4aabb2192b45fa50ab61e419c7->leave($__internal_d7c3766df76113b3747232ed4732423bddbacd4aabb2192b45fa50ab61e419c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50adfe40315b94551442533acc30dfcaafb2031401e13470ae0c6b1c6fdd0919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50adfe40315b94551442533acc30dfcaafb2031401e13470ae0c6b1c6fdd0919->enter($__internal_50adfe40315b94551442533acc30dfcaafb2031401e13470ae0c6b1c6fdd0919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d929e0925e99293a54894a12d6e7f67cf0768a88594fd9b777821a9ce88fa9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d929e0925e99293a54894a12d6e7f67cf0768a88594fd9b777821a9ce88fa9d7->enter($__internal_d929e0925e99293a54894a12d6e7f67cf0768a88594fd9b777821a9ce88fa9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d929e0925e99293a54894a12d6e7f67cf0768a88594fd9b777821a9ce88fa9d7->leave($__internal_d929e0925e99293a54894a12d6e7f67cf0768a88594fd9b777821a9ce88fa9d7_prof);

        
        $__internal_50adfe40315b94551442533acc30dfcaafb2031401e13470ae0c6b1c6fdd0919->leave($__internal_50adfe40315b94551442533acc30dfcaafb2031401e13470ae0c6b1c6fdd0919_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

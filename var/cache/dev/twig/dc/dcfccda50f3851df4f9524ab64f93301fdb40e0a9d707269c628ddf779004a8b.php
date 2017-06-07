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
        $__internal_2b90b46114e8ca49f5dfd683a74cca7454d8988528dd6ef4286f7642f2d0a3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b90b46114e8ca49f5dfd683a74cca7454d8988528dd6ef4286f7642f2d0a3a4->enter($__internal_2b90b46114e8ca49f5dfd683a74cca7454d8988528dd6ef4286f7642f2d0a3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_18494a63aa50b506365ee43a2cdb90e04c1022667d90e14a7a5a3abe317e047d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18494a63aa50b506365ee43a2cdb90e04c1022667d90e14a7a5a3abe317e047d->enter($__internal_18494a63aa50b506365ee43a2cdb90e04c1022667d90e14a7a5a3abe317e047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b90b46114e8ca49f5dfd683a74cca7454d8988528dd6ef4286f7642f2d0a3a4->leave($__internal_2b90b46114e8ca49f5dfd683a74cca7454d8988528dd6ef4286f7642f2d0a3a4_prof);

        
        $__internal_18494a63aa50b506365ee43a2cdb90e04c1022667d90e14a7a5a3abe317e047d->leave($__internal_18494a63aa50b506365ee43a2cdb90e04c1022667d90e14a7a5a3abe317e047d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73547b275e81ecc5a57b46fdd7120b3328ee39404b44fcff62ead649dfc8d0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73547b275e81ecc5a57b46fdd7120b3328ee39404b44fcff62ead649dfc8d0c1->enter($__internal_73547b275e81ecc5a57b46fdd7120b3328ee39404b44fcff62ead649dfc8d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59b327f39622adf725255a5607bb44946ed8c0a53544a1c3a27f408ab81a29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b327f39622adf725255a5607bb44946ed8c0a53544a1c3a27f408ab81a29d5->enter($__internal_59b327f39622adf725255a5607bb44946ed8c0a53544a1c3a27f408ab81a29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_59b327f39622adf725255a5607bb44946ed8c0a53544a1c3a27f408ab81a29d5->leave($__internal_59b327f39622adf725255a5607bb44946ed8c0a53544a1c3a27f408ab81a29d5_prof);

        
        $__internal_73547b275e81ecc5a57b46fdd7120b3328ee39404b44fcff62ead649dfc8d0c1->leave($__internal_73547b275e81ecc5a57b46fdd7120b3328ee39404b44fcff62ead649dfc8d0c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b2c0797243d0e1ddefd9e3fcfb3516934783490e62aec2b08baf1452e6569a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2c0797243d0e1ddefd9e3fcfb3516934783490e62aec2b08baf1452e6569a4->enter($__internal_0b2c0797243d0e1ddefd9e3fcfb3516934783490e62aec2b08baf1452e6569a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_48bfaadd03c5d1c46899a1cb7afd99ad26a9af15ceba3faa94f2c8f3d91fce71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bfaadd03c5d1c46899a1cb7afd99ad26a9af15ceba3faa94f2c8f3d91fce71->enter($__internal_48bfaadd03c5d1c46899a1cb7afd99ad26a9af15ceba3faa94f2c8f3d91fce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_48bfaadd03c5d1c46899a1cb7afd99ad26a9af15ceba3faa94f2c8f3d91fce71->leave($__internal_48bfaadd03c5d1c46899a1cb7afd99ad26a9af15ceba3faa94f2c8f3d91fce71_prof);

        
        $__internal_0b2c0797243d0e1ddefd9e3fcfb3516934783490e62aec2b08baf1452e6569a4->leave($__internal_0b2c0797243d0e1ddefd9e3fcfb3516934783490e62aec2b08baf1452e6569a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6f1d24ad53c63d6f5d322c7e17c209372172bd917566c00063d686a2cc1c083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f1d24ad53c63d6f5d322c7e17c209372172bd917566c00063d686a2cc1c083->enter($__internal_a6f1d24ad53c63d6f5d322c7e17c209372172bd917566c00063d686a2cc1c083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20350c19a10fbc4579d2c104a79312ef4637c1a0c76bbe787c3224bd40a720af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20350c19a10fbc4579d2c104a79312ef4637c1a0c76bbe787c3224bd40a720af->enter($__internal_20350c19a10fbc4579d2c104a79312ef4637c1a0c76bbe787c3224bd40a720af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_20350c19a10fbc4579d2c104a79312ef4637c1a0c76bbe787c3224bd40a720af->leave($__internal_20350c19a10fbc4579d2c104a79312ef4637c1a0c76bbe787c3224bd40a720af_prof);

        
        $__internal_a6f1d24ad53c63d6f5d322c7e17c209372172bd917566c00063d686a2cc1c083->leave($__internal_a6f1d24ad53c63d6f5d322c7e17c209372172bd917566c00063d686a2cc1c083_prof);

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

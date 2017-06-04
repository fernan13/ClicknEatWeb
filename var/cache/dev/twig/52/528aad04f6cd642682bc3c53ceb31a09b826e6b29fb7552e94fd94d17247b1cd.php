<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fa149ac79bd26fb86c23fb861a3ca24d0ec11df8101cfa2428d0a862796db8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9d8396f515787c2edaff219e834a7b1fdbd1d6a830c0780cd815d9f446675842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8396f515787c2edaff219e834a7b1fdbd1d6a830c0780cd815d9f446675842->enter($__internal_9d8396f515787c2edaff219e834a7b1fdbd1d6a830c0780cd815d9f446675842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3d5018c981aa74ee9627ff3d2d746cb73d62c5d3a684d9ac067614da13c5ea8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5018c981aa74ee9627ff3d2d746cb73d62c5d3a684d9ac067614da13c5ea8d->enter($__internal_3d5018c981aa74ee9627ff3d2d746cb73d62c5d3a684d9ac067614da13c5ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8396f515787c2edaff219e834a7b1fdbd1d6a830c0780cd815d9f446675842->leave($__internal_9d8396f515787c2edaff219e834a7b1fdbd1d6a830c0780cd815d9f446675842_prof);

        
        $__internal_3d5018c981aa74ee9627ff3d2d746cb73d62c5d3a684d9ac067614da13c5ea8d->leave($__internal_3d5018c981aa74ee9627ff3d2d746cb73d62c5d3a684d9ac067614da13c5ea8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_207812c98c447a4cb15b8be969488634b042456a5c2ccac8221e192209f99f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207812c98c447a4cb15b8be969488634b042456a5c2ccac8221e192209f99f7a->enter($__internal_207812c98c447a4cb15b8be969488634b042456a5c2ccac8221e192209f99f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60aa8da59dca5768281f2b8c7694e612d6ae7a22a4fca1dd43bb68a4b5123284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60aa8da59dca5768281f2b8c7694e612d6ae7a22a4fca1dd43bb68a4b5123284->enter($__internal_60aa8da59dca5768281f2b8c7694e612d6ae7a22a4fca1dd43bb68a4b5123284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60aa8da59dca5768281f2b8c7694e612d6ae7a22a4fca1dd43bb68a4b5123284->leave($__internal_60aa8da59dca5768281f2b8c7694e612d6ae7a22a4fca1dd43bb68a4b5123284_prof);

        
        $__internal_207812c98c447a4cb15b8be969488634b042456a5c2ccac8221e192209f99f7a->leave($__internal_207812c98c447a4cb15b8be969488634b042456a5c2ccac8221e192209f99f7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac5d797013e5bd6fe5319213031d296186854e0b60dc3832458dc0d9c81fd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac5d797013e5bd6fe5319213031d296186854e0b60dc3832458dc0d9c81fd02->enter($__internal_eac5d797013e5bd6fe5319213031d296186854e0b60dc3832458dc0d9c81fd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7dbfd219cfa3c224513832872df5d14a390553b222e79c0583abba20f7c40704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbfd219cfa3c224513832872df5d14a390553b222e79c0583abba20f7c40704->enter($__internal_7dbfd219cfa3c224513832872df5d14a390553b222e79c0583abba20f7c40704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dbfd219cfa3c224513832872df5d14a390553b222e79c0583abba20f7c40704->leave($__internal_7dbfd219cfa3c224513832872df5d14a390553b222e79c0583abba20f7c40704_prof);

        
        $__internal_eac5d797013e5bd6fe5319213031d296186854e0b60dc3832458dc0d9c81fd02->leave($__internal_eac5d797013e5bd6fe5319213031d296186854e0b60dc3832458dc0d9c81fd02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09f8589a88154936844f073c17fb8057cb924c8ad52b152bba75c3a5ea920847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f8589a88154936844f073c17fb8057cb924c8ad52b152bba75c3a5ea920847->enter($__internal_09f8589a88154936844f073c17fb8057cb924c8ad52b152bba75c3a5ea920847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5eb2142edf3be13f4337760ecc69e304bc9534ea2cfa8ae326c8e4ee3a5b5ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb2142edf3be13f4337760ecc69e304bc9534ea2cfa8ae326c8e4ee3a5b5ad5->enter($__internal_5eb2142edf3be13f4337760ecc69e304bc9534ea2cfa8ae326c8e4ee3a5b5ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5eb2142edf3be13f4337760ecc69e304bc9534ea2cfa8ae326c8e4ee3a5b5ad5->leave($__internal_5eb2142edf3be13f4337760ecc69e304bc9534ea2cfa8ae326c8e4ee3a5b5ad5_prof);

        
        $__internal_09f8589a88154936844f073c17fb8057cb924c8ad52b152bba75c3a5ea920847->leave($__internal_09f8589a88154936844f073c17fb8057cb924c8ad52b152bba75c3a5ea920847_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

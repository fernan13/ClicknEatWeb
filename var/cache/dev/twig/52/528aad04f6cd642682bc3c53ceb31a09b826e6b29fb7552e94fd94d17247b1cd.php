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
        $__internal_3dcb4598501ecbd735c48f04f32ac9748463d4471eb1699be658574f923a2bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcb4598501ecbd735c48f04f32ac9748463d4471eb1699be658574f923a2bdb->enter($__internal_3dcb4598501ecbd735c48f04f32ac9748463d4471eb1699be658574f923a2bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_609f7503acfdf62d01d1e5057cff9aa1d867f1d57446320e5ed18476e21d63d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609f7503acfdf62d01d1e5057cff9aa1d867f1d57446320e5ed18476e21d63d8->enter($__internal_609f7503acfdf62d01d1e5057cff9aa1d867f1d57446320e5ed18476e21d63d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dcb4598501ecbd735c48f04f32ac9748463d4471eb1699be658574f923a2bdb->leave($__internal_3dcb4598501ecbd735c48f04f32ac9748463d4471eb1699be658574f923a2bdb_prof);

        
        $__internal_609f7503acfdf62d01d1e5057cff9aa1d867f1d57446320e5ed18476e21d63d8->leave($__internal_609f7503acfdf62d01d1e5057cff9aa1d867f1d57446320e5ed18476e21d63d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6b7f17fc6d2bdd1cfbf7c77fddea00358395564e848d9510f1198a430575a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b7f17fc6d2bdd1cfbf7c77fddea00358395564e848d9510f1198a430575a77->enter($__internal_b6b7f17fc6d2bdd1cfbf7c77fddea00358395564e848d9510f1198a430575a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88fd267c553fea5823cb30cc244b5437321fe604c6c4483a9b7c3489a003a0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd267c553fea5823cb30cc244b5437321fe604c6c4483a9b7c3489a003a0de->enter($__internal_88fd267c553fea5823cb30cc244b5437321fe604c6c4483a9b7c3489a003a0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88fd267c553fea5823cb30cc244b5437321fe604c6c4483a9b7c3489a003a0de->leave($__internal_88fd267c553fea5823cb30cc244b5437321fe604c6c4483a9b7c3489a003a0de_prof);

        
        $__internal_b6b7f17fc6d2bdd1cfbf7c77fddea00358395564e848d9510f1198a430575a77->leave($__internal_b6b7f17fc6d2bdd1cfbf7c77fddea00358395564e848d9510f1198a430575a77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa6bfab3f8bb3a0fd9969dd452fd41a6792bde6d855a2bfbb6ddc357969eeb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6bfab3f8bb3a0fd9969dd452fd41a6792bde6d855a2bfbb6ddc357969eeb98->enter($__internal_aa6bfab3f8bb3a0fd9969dd452fd41a6792bde6d855a2bfbb6ddc357969eeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_273236ed7fc1b389e8a7b0cd12fa163f8715f14fe49e53a355c6236307d936b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273236ed7fc1b389e8a7b0cd12fa163f8715f14fe49e53a355c6236307d936b3->enter($__internal_273236ed7fc1b389e8a7b0cd12fa163f8715f14fe49e53a355c6236307d936b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_273236ed7fc1b389e8a7b0cd12fa163f8715f14fe49e53a355c6236307d936b3->leave($__internal_273236ed7fc1b389e8a7b0cd12fa163f8715f14fe49e53a355c6236307d936b3_prof);

        
        $__internal_aa6bfab3f8bb3a0fd9969dd452fd41a6792bde6d855a2bfbb6ddc357969eeb98->leave($__internal_aa6bfab3f8bb3a0fd9969dd452fd41a6792bde6d855a2bfbb6ddc357969eeb98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0223c7318b6df6400fcc00e68fe944060bb83cd152bec0039ce32416d23a3a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0223c7318b6df6400fcc00e68fe944060bb83cd152bec0039ce32416d23a3a8a->enter($__internal_0223c7318b6df6400fcc00e68fe944060bb83cd152bec0039ce32416d23a3a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af985d72e6c40e4f6b6b9370767a5ced03ff86b134d82eceb9b186b7fd983c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af985d72e6c40e4f6b6b9370767a5ced03ff86b134d82eceb9b186b7fd983c6d->enter($__internal_af985d72e6c40e4f6b6b9370767a5ced03ff86b134d82eceb9b186b7fd983c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af985d72e6c40e4f6b6b9370767a5ced03ff86b134d82eceb9b186b7fd983c6d->leave($__internal_af985d72e6c40e4f6b6b9370767a5ced03ff86b134d82eceb9b186b7fd983c6d_prof);

        
        $__internal_0223c7318b6df6400fcc00e68fe944060bb83cd152bec0039ce32416d23a3a8a->leave($__internal_0223c7318b6df6400fcc00e68fe944060bb83cd152bec0039ce32416d23a3a8a_prof);

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

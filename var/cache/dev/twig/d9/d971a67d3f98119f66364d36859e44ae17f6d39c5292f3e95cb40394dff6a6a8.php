<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba284aaff94beb8fba1f95bf8311356df5719d130f7ed1dbba2cbd9219dd1922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_838729cc46280b9cf1e0b7820f0264378bc44328d7389a19847746eb64aa455a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838729cc46280b9cf1e0b7820f0264378bc44328d7389a19847746eb64aa455a->enter($__internal_838729cc46280b9cf1e0b7820f0264378bc44328d7389a19847746eb64aa455a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_86c395fdd13c806202b9b06d6b8bd7f49353317c38fbbf50b594fd6a1192fc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c395fdd13c806202b9b06d6b8bd7f49353317c38fbbf50b594fd6a1192fc31->enter($__internal_86c395fdd13c806202b9b06d6b8bd7f49353317c38fbbf50b594fd6a1192fc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838729cc46280b9cf1e0b7820f0264378bc44328d7389a19847746eb64aa455a->leave($__internal_838729cc46280b9cf1e0b7820f0264378bc44328d7389a19847746eb64aa455a_prof);

        
        $__internal_86c395fdd13c806202b9b06d6b8bd7f49353317c38fbbf50b594fd6a1192fc31->leave($__internal_86c395fdd13c806202b9b06d6b8bd7f49353317c38fbbf50b594fd6a1192fc31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b1893a6d7447d5b76c0059cb140d6bdc45ebb8f88ed1fabc5751c584aa3ef81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1893a6d7447d5b76c0059cb140d6bdc45ebb8f88ed1fabc5751c584aa3ef81->enter($__internal_2b1893a6d7447d5b76c0059cb140d6bdc45ebb8f88ed1fabc5751c584aa3ef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_891b1c53d3b6c5dceb32cba7ce654c5a4f2f43de3d9f1a9da7ec71d346f6bf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891b1c53d3b6c5dceb32cba7ce654c5a4f2f43de3d9f1a9da7ec71d346f6bf29->enter($__internal_891b1c53d3b6c5dceb32cba7ce654c5a4f2f43de3d9f1a9da7ec71d346f6bf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_891b1c53d3b6c5dceb32cba7ce654c5a4f2f43de3d9f1a9da7ec71d346f6bf29->leave($__internal_891b1c53d3b6c5dceb32cba7ce654c5a4f2f43de3d9f1a9da7ec71d346f6bf29_prof);

        
        $__internal_2b1893a6d7447d5b76c0059cb140d6bdc45ebb8f88ed1fabc5751c584aa3ef81->leave($__internal_2b1893a6d7447d5b76c0059cb140d6bdc45ebb8f88ed1fabc5751c584aa3ef81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e089d50bef2e5fcf8ad41161599b39fd302fc33cd2f33afc48bda9bf15e4d15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e089d50bef2e5fcf8ad41161599b39fd302fc33cd2f33afc48bda9bf15e4d15f->enter($__internal_e089d50bef2e5fcf8ad41161599b39fd302fc33cd2f33afc48bda9bf15e4d15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cac3d9048ae010e83c62f8a1afd17029082db15fd66f8ced528809ecc7bc423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cac3d9048ae010e83c62f8a1afd17029082db15fd66f8ced528809ecc7bc423->enter($__internal_6cac3d9048ae010e83c62f8a1afd17029082db15fd66f8ced528809ecc7bc423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6cac3d9048ae010e83c62f8a1afd17029082db15fd66f8ced528809ecc7bc423->leave($__internal_6cac3d9048ae010e83c62f8a1afd17029082db15fd66f8ced528809ecc7bc423_prof);

        
        $__internal_e089d50bef2e5fcf8ad41161599b39fd302fc33cd2f33afc48bda9bf15e4d15f->leave($__internal_e089d50bef2e5fcf8ad41161599b39fd302fc33cd2f33afc48bda9bf15e4d15f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

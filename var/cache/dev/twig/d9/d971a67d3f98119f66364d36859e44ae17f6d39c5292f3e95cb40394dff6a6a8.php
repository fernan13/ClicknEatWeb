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
        $__internal_f6786269873b77bb0935d09f4e6210f59d9297276c566fcadb52b38338afd628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6786269873b77bb0935d09f4e6210f59d9297276c566fcadb52b38338afd628->enter($__internal_f6786269873b77bb0935d09f4e6210f59d9297276c566fcadb52b38338afd628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_dbf683df552c8b9638b0e73f0c73a0dad33570ad80c91b23307cc16cd77ebe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf683df552c8b9638b0e73f0c73a0dad33570ad80c91b23307cc16cd77ebe9c->enter($__internal_dbf683df552c8b9638b0e73f0c73a0dad33570ad80c91b23307cc16cd77ebe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6786269873b77bb0935d09f4e6210f59d9297276c566fcadb52b38338afd628->leave($__internal_f6786269873b77bb0935d09f4e6210f59d9297276c566fcadb52b38338afd628_prof);

        
        $__internal_dbf683df552c8b9638b0e73f0c73a0dad33570ad80c91b23307cc16cd77ebe9c->leave($__internal_dbf683df552c8b9638b0e73f0c73a0dad33570ad80c91b23307cc16cd77ebe9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8de112cee74ce82f538c701e0a998210f12aeb12acb47f26fa7df681fbd37e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de112cee74ce82f538c701e0a998210f12aeb12acb47f26fa7df681fbd37e42->enter($__internal_8de112cee74ce82f538c701e0a998210f12aeb12acb47f26fa7df681fbd37e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfb730eb1b26055b5b1ea84f916b8545df8ecf06de4553fd50dad571e3a5f4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb730eb1b26055b5b1ea84f916b8545df8ecf06de4553fd50dad571e3a5f4a1->enter($__internal_bfb730eb1b26055b5b1ea84f916b8545df8ecf06de4553fd50dad571e3a5f4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bfb730eb1b26055b5b1ea84f916b8545df8ecf06de4553fd50dad571e3a5f4a1->leave($__internal_bfb730eb1b26055b5b1ea84f916b8545df8ecf06de4553fd50dad571e3a5f4a1_prof);

        
        $__internal_8de112cee74ce82f538c701e0a998210f12aeb12acb47f26fa7df681fbd37e42->leave($__internal_8de112cee74ce82f538c701e0a998210f12aeb12acb47f26fa7df681fbd37e42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43d35ac225b03152ef8252e262db6bf3bb62cf88040a53ac7086ce680c4e9c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d35ac225b03152ef8252e262db6bf3bb62cf88040a53ac7086ce680c4e9c45->enter($__internal_43d35ac225b03152ef8252e262db6bf3bb62cf88040a53ac7086ce680c4e9c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_671682858ff26dc2647d85c64c942b6535b130bb1eea54e4dc9a3e33b3719dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671682858ff26dc2647d85c64c942b6535b130bb1eea54e4dc9a3e33b3719dea->enter($__internal_671682858ff26dc2647d85c64c942b6535b130bb1eea54e4dc9a3e33b3719dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_671682858ff26dc2647d85c64c942b6535b130bb1eea54e4dc9a3e33b3719dea->leave($__internal_671682858ff26dc2647d85c64c942b6535b130bb1eea54e4dc9a3e33b3719dea_prof);

        
        $__internal_43d35ac225b03152ef8252e262db6bf3bb62cf88040a53ac7086ce680c4e9c45->leave($__internal_43d35ac225b03152ef8252e262db6bf3bb62cf88040a53ac7086ce680c4e9c45_prof);

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

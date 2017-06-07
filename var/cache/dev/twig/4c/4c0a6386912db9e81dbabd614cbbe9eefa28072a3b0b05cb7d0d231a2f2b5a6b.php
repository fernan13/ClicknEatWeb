<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_08dadd2506fa500ce00bbe765f2e5304f64d1d2756bbd6857b1aa71daaa8e752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9477f752db8c5fd0322b4e3e64c141ef17e6f82de74b16ffd0067325a1919ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9477f752db8c5fd0322b4e3e64c141ef17e6f82de74b16ffd0067325a1919ad4->enter($__internal_9477f752db8c5fd0322b4e3e64c141ef17e6f82de74b16ffd0067325a1919ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1efbdc6395b85fbbc42895dde2ac5ceda043cf1b52471c456a91626960f81d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efbdc6395b85fbbc42895dde2ac5ceda043cf1b52471c456a91626960f81d9e->enter($__internal_1efbdc6395b85fbbc42895dde2ac5ceda043cf1b52471c456a91626960f81d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9477f752db8c5fd0322b4e3e64c141ef17e6f82de74b16ffd0067325a1919ad4->leave($__internal_9477f752db8c5fd0322b4e3e64c141ef17e6f82de74b16ffd0067325a1919ad4_prof);

        
        $__internal_1efbdc6395b85fbbc42895dde2ac5ceda043cf1b52471c456a91626960f81d9e->leave($__internal_1efbdc6395b85fbbc42895dde2ac5ceda043cf1b52471c456a91626960f81d9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b0b6b67e24514d2d894c965eb43da97114f4279492e61dac5d328fe46e7be50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0b6b67e24514d2d894c965eb43da97114f4279492e61dac5d328fe46e7be50->enter($__internal_9b0b6b67e24514d2d894c965eb43da97114f4279492e61dac5d328fe46e7be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af7feaae7feef84077017b40319b8403d3f830c23c602ba282bb544d9c6bf6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7feaae7feef84077017b40319b8403d3f830c23c602ba282bb544d9c6bf6c3->enter($__internal_af7feaae7feef84077017b40319b8403d3f830c23c602ba282bb544d9c6bf6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_af7feaae7feef84077017b40319b8403d3f830c23c602ba282bb544d9c6bf6c3->leave($__internal_af7feaae7feef84077017b40319b8403d3f830c23c602ba282bb544d9c6bf6c3_prof);

        
        $__internal_9b0b6b67e24514d2d894c965eb43da97114f4279492e61dac5d328fe46e7be50->leave($__internal_9b0b6b67e24514d2d894c965eb43da97114f4279492e61dac5d328fe46e7be50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}

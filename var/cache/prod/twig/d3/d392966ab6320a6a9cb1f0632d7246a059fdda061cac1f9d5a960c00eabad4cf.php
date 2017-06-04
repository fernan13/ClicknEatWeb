<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_09146f1e48622cf3bdf0a12de44b5cb5a1a86cc78aec44c458dbdd7ee51e72fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_edec6056a723b37e869a64662a102e3d7ba8f6f01bbf510d3d56da44f54c27d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edec6056a723b37e869a64662a102e3d7ba8f6f01bbf510d3d56da44f54c27d4->enter($__internal_edec6056a723b37e869a64662a102e3d7ba8f6f01bbf510d3d56da44f54c27d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edec6056a723b37e869a64662a102e3d7ba8f6f01bbf510d3d56da44f54c27d4->leave($__internal_edec6056a723b37e869a64662a102e3d7ba8f6f01bbf510d3d56da44f54c27d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3e6450d292d3492401f390ed20e356445c2adbf3c24be5faabd25571dc610a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e6450d292d3492401f390ed20e356445c2adbf3c24be5faabd25571dc610a5->enter($__internal_e3e6450d292d3492401f390ed20e356445c2adbf3c24be5faabd25571dc610a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e3e6450d292d3492401f390ed20e356445c2adbf3c24be5faabd25571dc610a5->leave($__internal_e3e6450d292d3492401f390ed20e356445c2adbf3c24be5faabd25571dc610a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

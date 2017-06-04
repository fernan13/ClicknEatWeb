<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0a999cf1bb754d5c11f213d8076f621c3302773a93ffcadff1d02af4288d2d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d9eca6f6e5a32906798af256488994b3292cd598d8122b1984b8da7e5acf6f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eca6f6e5a32906798af256488994b3292cd598d8122b1984b8da7e5acf6f2a->enter($__internal_d9eca6f6e5a32906798af256488994b3292cd598d8122b1984b8da7e5acf6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9eca6f6e5a32906798af256488994b3292cd598d8122b1984b8da7e5acf6f2a->leave($__internal_d9eca6f6e5a32906798af256488994b3292cd598d8122b1984b8da7e5acf6f2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba906c704b31de6fca075790a05ec3be8a1cef68689e2aa86c83d9e67755c301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba906c704b31de6fca075790a05ec3be8a1cef68689e2aa86c83d9e67755c301->enter($__internal_ba906c704b31de6fca075790a05ec3be8a1cef68689e2aa86c83d9e67755c301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ba906c704b31de6fca075790a05ec3be8a1cef68689e2aa86c83d9e67755c301->leave($__internal_ba906c704b31de6fca075790a05ec3be8a1cef68689e2aa86c83d9e67755c301_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

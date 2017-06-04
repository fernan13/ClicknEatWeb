<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_255cc58362492a04ae2bd53caed6be649d1c60ed0d6e8f38506589b8dfc7fbcb extends Twig_Template
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
        $__internal_2aa9863bf80aa8bf8394589f3f06dc63422e643a7dc28da879adc1ba9f4a41f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa9863bf80aa8bf8394589f3f06dc63422e643a7dc28da879adc1ba9f4a41f6->enter($__internal_2aa9863bf80aa8bf8394589f3f06dc63422e643a7dc28da879adc1ba9f4a41f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa9863bf80aa8bf8394589f3f06dc63422e643a7dc28da879adc1ba9f4a41f6->leave($__internal_2aa9863bf80aa8bf8394589f3f06dc63422e643a7dc28da879adc1ba9f4a41f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbadea6318165a027b9c2028957b657ba34b9b9aa82cc6dafcec16c5a2659950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadea6318165a027b9c2028957b657ba34b9b9aa82cc6dafcec16c5a2659950->enter($__internal_cbadea6318165a027b9c2028957b657ba34b9b9aa82cc6dafcec16c5a2659950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cbadea6318165a027b9c2028957b657ba34b9b9aa82cc6dafcec16c5a2659950->leave($__internal_cbadea6318165a027b9c2028957b657ba34b9b9aa82cc6dafcec16c5a2659950_prof);

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
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_97f1cfdb6e440715039ccad550dcdb6c0d25af5a0cdf5176160b802ed6a4fe67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_fe9a14e318df390b52c825082effe5b7be693e03b4c457fa9e1b9c88ec29cce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9a14e318df390b52c825082effe5b7be693e03b4c457fa9e1b9c88ec29cce2->enter($__internal_fe9a14e318df390b52c825082effe5b7be693e03b4c457fa9e1b9c88ec29cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_6d12d4653dcfe950e1c871fa438cd4a12f165f951cbfb2c057e6f751039ec899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d12d4653dcfe950e1c871fa438cd4a12f165f951cbfb2c057e6f751039ec899->enter($__internal_6d12d4653dcfe950e1c871fa438cd4a12f165f951cbfb2c057e6f751039ec899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe9a14e318df390b52c825082effe5b7be693e03b4c457fa9e1b9c88ec29cce2->leave($__internal_fe9a14e318df390b52c825082effe5b7be693e03b4c457fa9e1b9c88ec29cce2_prof);

        
        $__internal_6d12d4653dcfe950e1c871fa438cd4a12f165f951cbfb2c057e6f751039ec899->leave($__internal_6d12d4653dcfe950e1c871fa438cd4a12f165f951cbfb2c057e6f751039ec899_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3d4c6efb770727f05f921aaa08ffe5f39521c144b6cbc2f2b334d5039b0ecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d4c6efb770727f05f921aaa08ffe5f39521c144b6cbc2f2b334d5039b0ecf5->enter($__internal_e3d4c6efb770727f05f921aaa08ffe5f39521c144b6cbc2f2b334d5039b0ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f4e6ae2f07a5a9480517e5f9ebcb732e2df2c9ce9aaefc5a07352e1705f8a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4e6ae2f07a5a9480517e5f9ebcb732e2df2c9ce9aaefc5a07352e1705f8a4a->enter($__internal_1f4e6ae2f07a5a9480517e5f9ebcb732e2df2c9ce9aaefc5a07352e1705f8a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1f4e6ae2f07a5a9480517e5f9ebcb732e2df2c9ce9aaefc5a07352e1705f8a4a->leave($__internal_1f4e6ae2f07a5a9480517e5f9ebcb732e2df2c9ce9aaefc5a07352e1705f8a4a_prof);

        
        $__internal_e3d4c6efb770727f05f921aaa08ffe5f39521c144b6cbc2f2b334d5039b0ecf5->leave($__internal_e3d4c6efb770727f05f921aaa08ffe5f39521c144b6cbc2f2b334d5039b0ecf5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

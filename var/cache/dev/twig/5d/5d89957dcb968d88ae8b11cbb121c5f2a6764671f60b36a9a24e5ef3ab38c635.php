<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d37ba1e6600d14b588a3a0263539b0b27a5064b05f2aeb899ce4a3a9280a9c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0377c3733f8d4c28ddcc3e572640fe378df3704b391e77db0a3df9bb865d6837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0377c3733f8d4c28ddcc3e572640fe378df3704b391e77db0a3df9bb865d6837->enter($__internal_0377c3733f8d4c28ddcc3e572640fe378df3704b391e77db0a3df9bb865d6837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0b312ac351d7eec004791209a146df4f31bb4a9594aab9e252122b845bbd67c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b312ac351d7eec004791209a146df4f31bb4a9594aab9e252122b845bbd67c5->enter($__internal_0b312ac351d7eec004791209a146df4f31bb4a9594aab9e252122b845bbd67c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0377c3733f8d4c28ddcc3e572640fe378df3704b391e77db0a3df9bb865d6837->leave($__internal_0377c3733f8d4c28ddcc3e572640fe378df3704b391e77db0a3df9bb865d6837_prof);

        
        $__internal_0b312ac351d7eec004791209a146df4f31bb4a9594aab9e252122b845bbd67c5->leave($__internal_0b312ac351d7eec004791209a146df4f31bb4a9594aab9e252122b845bbd67c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f67c9b8169ff3842d90e20af32cb0500c95d2c109318c35c24912b31c29bdf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67c9b8169ff3842d90e20af32cb0500c95d2c109318c35c24912b31c29bdf1c->enter($__internal_f67c9b8169ff3842d90e20af32cb0500c95d2c109318c35c24912b31c29bdf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d10fc3a96da8630976b7d8008b2728da3a22db0bd2c65aca7eeabdac277a3456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10fc3a96da8630976b7d8008b2728da3a22db0bd2c65aca7eeabdac277a3456->enter($__internal_d10fc3a96da8630976b7d8008b2728da3a22db0bd2c65aca7eeabdac277a3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d10fc3a96da8630976b7d8008b2728da3a22db0bd2c65aca7eeabdac277a3456->leave($__internal_d10fc3a96da8630976b7d8008b2728da3a22db0bd2c65aca7eeabdac277a3456_prof);

        
        $__internal_f67c9b8169ff3842d90e20af32cb0500c95d2c109318c35c24912b31c29bdf1c->leave($__internal_f67c9b8169ff3842d90e20af32cb0500c95d2c109318c35c24912b31c29bdf1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}

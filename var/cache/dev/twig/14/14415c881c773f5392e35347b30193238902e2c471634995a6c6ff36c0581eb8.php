<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_485278849caeb31f471f79321bd41875705d662b1a4e373122dceb22a4332abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b419c9a092b1035041ff58a18daa31736b34ccf17410c0a20d98daef5ff42d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b419c9a092b1035041ff58a18daa31736b34ccf17410c0a20d98daef5ff42d87->enter($__internal_b419c9a092b1035041ff58a18daa31736b34ccf17410c0a20d98daef5ff42d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_2bf857de86fedcbb169e51d9ff50f49b873b2a70b7068fdb58e0f47f22c4b63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf857de86fedcbb169e51d9ff50f49b873b2a70b7068fdb58e0f47f22c4b63a->enter($__internal_2bf857de86fedcbb169e51d9ff50f49b873b2a70b7068fdb58e0f47f22c4b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b419c9a092b1035041ff58a18daa31736b34ccf17410c0a20d98daef5ff42d87->leave($__internal_b419c9a092b1035041ff58a18daa31736b34ccf17410c0a20d98daef5ff42d87_prof);

        
        $__internal_2bf857de86fedcbb169e51d9ff50f49b873b2a70b7068fdb58e0f47f22c4b63a->leave($__internal_2bf857de86fedcbb169e51d9ff50f49b873b2a70b7068fdb58e0f47f22c4b63a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c4655d671d9feec114eb32e705f8e2f1b19a287f1de749c11559dc2ae52a2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4655d671d9feec114eb32e705f8e2f1b19a287f1de749c11559dc2ae52a2c3->enter($__internal_6c4655d671d9feec114eb32e705f8e2f1b19a287f1de749c11559dc2ae52a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4904703d5e3908900c60277cbf11c7dcd0585bffeb75f71e9945296d74df3382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4904703d5e3908900c60277cbf11c7dcd0585bffeb75f71e9945296d74df3382->enter($__internal_4904703d5e3908900c60277cbf11c7dcd0585bffeb75f71e9945296d74df3382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4904703d5e3908900c60277cbf11c7dcd0585bffeb75f71e9945296d74df3382->leave($__internal_4904703d5e3908900c60277cbf11c7dcd0585bffeb75f71e9945296d74df3382_prof);

        
        $__internal_6c4655d671d9feec114eb32e705f8e2f1b19a287f1de749c11559dc2ae52a2c3->leave($__internal_6c4655d671d9feec114eb32e705f8e2f1b19a287f1de749c11559dc2ae52a2c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

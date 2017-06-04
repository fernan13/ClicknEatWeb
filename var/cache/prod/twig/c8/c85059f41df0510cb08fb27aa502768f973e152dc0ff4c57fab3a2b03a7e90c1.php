<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_ce4d4b15f6669eed638af712ab1b38b3a6680edd55909bb21ffeeeb1895bae0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_4e239121c1cca309f05c3eb454ad8a21095d536218b6a8db495815635bd582c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e239121c1cca309f05c3eb454ad8a21095d536218b6a8db495815635bd582c6->enter($__internal_4e239121c1cca309f05c3eb454ad8a21095d536218b6a8db495815635bd582c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e239121c1cca309f05c3eb454ad8a21095d536218b6a8db495815635bd582c6->leave($__internal_4e239121c1cca309f05c3eb454ad8a21095d536218b6a8db495815635bd582c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_292aeb41f8a23a593a282a16359e64643c6e9c493b385cd00dee5f16a7f1cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292aeb41f8a23a593a282a16359e64643c6e9c493b385cd00dee5f16a7f1cf8e->enter($__internal_292aeb41f8a23a593a282a16359e64643c6e9c493b385cd00dee5f16a7f1cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_292aeb41f8a23a593a282a16359e64643c6e9c493b385cd00dee5f16a7f1cf8e->leave($__internal_292aeb41f8a23a593a282a16359e64643c6e9c493b385cd00dee5f16a7f1cf8e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_dead7b2474a5e463e485197246d6d48d30656dba6819345bd7ab7e51f2b7f606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_533f95e9067ac0396a04e66fc6553465573c1d5c3b31e2ddce92ae68e5fbaa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533f95e9067ac0396a04e66fc6553465573c1d5c3b31e2ddce92ae68e5fbaa59->enter($__internal_533f95e9067ac0396a04e66fc6553465573c1d5c3b31e2ddce92ae68e5fbaa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_dbe1283cdd3c9bc92a9413ae8ebe576717a7d171c85f53e90df6e47433d5ba9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe1283cdd3c9bc92a9413ae8ebe576717a7d171c85f53e90df6e47433d5ba9a->enter($__internal_dbe1283cdd3c9bc92a9413ae8ebe576717a7d171c85f53e90df6e47433d5ba9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533f95e9067ac0396a04e66fc6553465573c1d5c3b31e2ddce92ae68e5fbaa59->leave($__internal_533f95e9067ac0396a04e66fc6553465573c1d5c3b31e2ddce92ae68e5fbaa59_prof);

        
        $__internal_dbe1283cdd3c9bc92a9413ae8ebe576717a7d171c85f53e90df6e47433d5ba9a->leave($__internal_dbe1283cdd3c9bc92a9413ae8ebe576717a7d171c85f53e90df6e47433d5ba9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d7c7dc45dd0f8234c68b1f656c614b3f920b4abe50f43122fb6b2ab35533251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7c7dc45dd0f8234c68b1f656c614b3f920b4abe50f43122fb6b2ab35533251->enter($__internal_1d7c7dc45dd0f8234c68b1f656c614b3f920b4abe50f43122fb6b2ab35533251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7ff16109d1abb763aa91683d9f384d2bd2f76b76622ad0ac73764c7c58bee1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ff16109d1abb763aa91683d9f384d2bd2f76b76622ad0ac73764c7c58bee1d->enter($__internal_f7ff16109d1abb763aa91683d9f384d2bd2f76b76622ad0ac73764c7c58bee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f7ff16109d1abb763aa91683d9f384d2bd2f76b76622ad0ac73764c7c58bee1d->leave($__internal_f7ff16109d1abb763aa91683d9f384d2bd2f76b76622ad0ac73764c7c58bee1d_prof);

        
        $__internal_1d7c7dc45dd0f8234c68b1f656c614b3f920b4abe50f43122fb6b2ab35533251->leave($__internal_1d7c7dc45dd0f8234c68b1f656c614b3f920b4abe50f43122fb6b2ab35533251_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

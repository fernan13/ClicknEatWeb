<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_72814b2f81c99b622cc6807025b964d8cda1289fe8ed7fc632e458c8ce9b92d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55ba9177ba755e777c0c924d41f395227848c889de2a1bae6d9397df2a5973a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55ba9177ba755e777c0c924d41f395227848c889de2a1bae6d9397df2a5973a->enter($__internal_e55ba9177ba755e777c0c924d41f395227848c889de2a1bae6d9397df2a5973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_0cc3267bf2c88288f523b709a59960fe88139783e3117794f821bc78fc35275b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc3267bf2c88288f523b709a59960fe88139783e3117794f821bc78fc35275b->enter($__internal_0cc3267bf2c88288f523b709a59960fe88139783e3117794f821bc78fc35275b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e55ba9177ba755e777c0c924d41f395227848c889de2a1bae6d9397df2a5973a->leave($__internal_e55ba9177ba755e777c0c924d41f395227848c889de2a1bae6d9397df2a5973a_prof);

        
        $__internal_0cc3267bf2c88288f523b709a59960fe88139783e3117794f821bc78fc35275b->leave($__internal_0cc3267bf2c88288f523b709a59960fe88139783e3117794f821bc78fc35275b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_35e11efba9a17afc1d493624e0446fdfac19edcb59bebf26f3885f8176e27d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e11efba9a17afc1d493624e0446fdfac19edcb59bebf26f3885f8176e27d4d->enter($__internal_35e11efba9a17afc1d493624e0446fdfac19edcb59bebf26f3885f8176e27d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4395b711c1ec736f4adab2dd2ff374bd466c5861877acf29afd5993bfb33440e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4395b711c1ec736f4adab2dd2ff374bd466c5861877acf29afd5993bfb33440e->enter($__internal_4395b711c1ec736f4adab2dd2ff374bd466c5861877acf29afd5993bfb33440e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4395b711c1ec736f4adab2dd2ff374bd466c5861877acf29afd5993bfb33440e->leave($__internal_4395b711c1ec736f4adab2dd2ff374bd466c5861877acf29afd5993bfb33440e_prof);

        
        $__internal_35e11efba9a17afc1d493624e0446fdfac19edcb59bebf26f3885f8176e27d4d->leave($__internal_35e11efba9a17afc1d493624e0446fdfac19edcb59bebf26f3885f8176e27d4d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3ee62e73e5766dcaf5ff540702958d2af356fa39e97c96fc36f630c5afea5336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee62e73e5766dcaf5ff540702958d2af356fa39e97c96fc36f630c5afea5336->enter($__internal_3ee62e73e5766dcaf5ff540702958d2af356fa39e97c96fc36f630c5afea5336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b4e8500bc35a193a9da0819b4749fe69ab562a38165ee0a7e33576033bc809a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e8500bc35a193a9da0819b4749fe69ab562a38165ee0a7e33576033bc809a9->enter($__internal_b4e8500bc35a193a9da0819b4749fe69ab562a38165ee0a7e33576033bc809a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b4e8500bc35a193a9da0819b4749fe69ab562a38165ee0a7e33576033bc809a9->leave($__internal_b4e8500bc35a193a9da0819b4749fe69ab562a38165ee0a7e33576033bc809a9_prof);

        
        $__internal_3ee62e73e5766dcaf5ff540702958d2af356fa39e97c96fc36f630c5afea5336->leave($__internal_3ee62e73e5766dcaf5ff540702958d2af356fa39e97c96fc36f630c5afea5336_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d147ea0fb76a0c8d24724e721360a100582fbeda28f06439bd45313c5cc8bb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d147ea0fb76a0c8d24724e721360a100582fbeda28f06439bd45313c5cc8bb43->enter($__internal_d147ea0fb76a0c8d24724e721360a100582fbeda28f06439bd45313c5cc8bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5f78b90e1fe6bf202cb27b0680f597a2022c476e874be12dd2f2b527d042abbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f78b90e1fe6bf202cb27b0680f597a2022c476e874be12dd2f2b527d042abbd->enter($__internal_5f78b90e1fe6bf202cb27b0680f597a2022c476e874be12dd2f2b527d042abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5f78b90e1fe6bf202cb27b0680f597a2022c476e874be12dd2f2b527d042abbd->leave($__internal_5f78b90e1fe6bf202cb27b0680f597a2022c476e874be12dd2f2b527d042abbd_prof);

        
        $__internal_d147ea0fb76a0c8d24724e721360a100582fbeda28f06439bd45313c5cc8bb43->leave($__internal_d147ea0fb76a0c8d24724e721360a100582fbeda28f06439bd45313c5cc8bb43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}

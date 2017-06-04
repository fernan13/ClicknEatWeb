<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9f908dd276134306f75afc1d4d2f7a3be3f01add08c49cff91006f29e71841d0 extends Twig_Template
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
        $__internal_9fe60dc7717ad19b25586d0fc7e13e7522dbfa8b64231051408613c90c843d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe60dc7717ad19b25586d0fc7e13e7522dbfa8b64231051408613c90c843d70->enter($__internal_9fe60dc7717ad19b25586d0fc7e13e7522dbfa8b64231051408613c90c843d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9fe60dc7717ad19b25586d0fc7e13e7522dbfa8b64231051408613c90c843d70->leave($__internal_9fe60dc7717ad19b25586d0fc7e13e7522dbfa8b64231051408613c90c843d70_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_140855642a486ef70461a356cf9ce4c9295d1305faea453667d7833a008c37f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140855642a486ef70461a356cf9ce4c9295d1305faea453667d7833a008c37f7->enter($__internal_140855642a486ef70461a356cf9ce4c9295d1305faea453667d7833a008c37f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_140855642a486ef70461a356cf9ce4c9295d1305faea453667d7833a008c37f7->leave($__internal_140855642a486ef70461a356cf9ce4c9295d1305faea453667d7833a008c37f7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_17006f86e7e420abb1e0c0c7d44733353a710faae9c9ad72cf4cbce987e595cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17006f86e7e420abb1e0c0c7d44733353a710faae9c9ad72cf4cbce987e595cc->enter($__internal_17006f86e7e420abb1e0c0c7d44733353a710faae9c9ad72cf4cbce987e595cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_17006f86e7e420abb1e0c0c7d44733353a710faae9c9ad72cf4cbce987e595cc->leave($__internal_17006f86e7e420abb1e0c0c7d44733353a710faae9c9ad72cf4cbce987e595cc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_12e4cee624e9c132d44246095495c66ee70c18fdbc6e84d5fbe548650e7172ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e4cee624e9c132d44246095495c66ee70c18fdbc6e84d5fbe548650e7172ed->enter($__internal_12e4cee624e9c132d44246095495c66ee70c18fdbc6e84d5fbe548650e7172ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_12e4cee624e9c132d44246095495c66ee70c18fdbc6e84d5fbe548650e7172ed->leave($__internal_12e4cee624e9c132d44246095495c66ee70c18fdbc6e84d5fbe548650e7172ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}

<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3b57a3fdb58b5306fe99505d1b5b7f5adba683fe45bec6a7f181aae50f694b23 extends Twig_Template
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
        $__internal_80a0e247fed079f573349f65e23f28e7d0a84931e8d5d2e9c182f99d3f1e91ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a0e247fed079f573349f65e23f28e7d0a84931e8d5d2e9c182f99d3f1e91ca->enter($__internal_80a0e247fed079f573349f65e23f28e7d0a84931e8d5d2e9c182f99d3f1e91ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_ffa92d14f95f27e46afdd76d595988e552a45979e14ca99f22a9d340a27a4086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa92d14f95f27e46afdd76d595988e552a45979e14ca99f22a9d340a27a4086->enter($__internal_ffa92d14f95f27e46afdd76d595988e552a45979e14ca99f22a9d340a27a4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_80a0e247fed079f573349f65e23f28e7d0a84931e8d5d2e9c182f99d3f1e91ca->leave($__internal_80a0e247fed079f573349f65e23f28e7d0a84931e8d5d2e9c182f99d3f1e91ca_prof);

        
        $__internal_ffa92d14f95f27e46afdd76d595988e552a45979e14ca99f22a9d340a27a4086->leave($__internal_ffa92d14f95f27e46afdd76d595988e552a45979e14ca99f22a9d340a27a4086_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d16f500f4290ef7efaef1628d09967a696a7bbc71e3982c7fb0d1a5c360124e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16f500f4290ef7efaef1628d09967a696a7bbc71e3982c7fb0d1a5c360124e1->enter($__internal_d16f500f4290ef7efaef1628d09967a696a7bbc71e3982c7fb0d1a5c360124e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5dc4d8ec0aa4d8ef3f2796f36197c608931aae7f8c4e12a3d5517c62e48dfa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc4d8ec0aa4d8ef3f2796f36197c608931aae7f8c4e12a3d5517c62e48dfa04->enter($__internal_5dc4d8ec0aa4d8ef3f2796f36197c608931aae7f8c4e12a3d5517c62e48dfa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5dc4d8ec0aa4d8ef3f2796f36197c608931aae7f8c4e12a3d5517c62e48dfa04->leave($__internal_5dc4d8ec0aa4d8ef3f2796f36197c608931aae7f8c4e12a3d5517c62e48dfa04_prof);

        
        $__internal_d16f500f4290ef7efaef1628d09967a696a7bbc71e3982c7fb0d1a5c360124e1->leave($__internal_d16f500f4290ef7efaef1628d09967a696a7bbc71e3982c7fb0d1a5c360124e1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5dd47423c055aea55ccb8bcbb4e3bf97d084756313143641d9581500fdaefb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dd47423c055aea55ccb8bcbb4e3bf97d084756313143641d9581500fdaefb6->enter($__internal_d5dd47423c055aea55ccb8bcbb4e3bf97d084756313143641d9581500fdaefb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8fbe664ebb56f657221cd3ba10270e6d42b85661ebb103019af42e9e4589dd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbe664ebb56f657221cd3ba10270e6d42b85661ebb103019af42e9e4589dd2a->enter($__internal_8fbe664ebb56f657221cd3ba10270e6d42b85661ebb103019af42e9e4589dd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8fbe664ebb56f657221cd3ba10270e6d42b85661ebb103019af42e9e4589dd2a->leave($__internal_8fbe664ebb56f657221cd3ba10270e6d42b85661ebb103019af42e9e4589dd2a_prof);

        
        $__internal_d5dd47423c055aea55ccb8bcbb4e3bf97d084756313143641d9581500fdaefb6->leave($__internal_d5dd47423c055aea55ccb8bcbb4e3bf97d084756313143641d9581500fdaefb6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d58053800fed1c87ae6268d7d69bc4e927ef4f31129ba5fd294fa172af47dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d58053800fed1c87ae6268d7d69bc4e927ef4f31129ba5fd294fa172af47dec->enter($__internal_4d58053800fed1c87ae6268d7d69bc4e927ef4f31129ba5fd294fa172af47dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bdd6d180f5456a19dfc2e85a166f9dddb333226b28ed3083a21cd176b9202dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd6d180f5456a19dfc2e85a166f9dddb333226b28ed3083a21cd176b9202dfb->enter($__internal_bdd6d180f5456a19dfc2e85a166f9dddb333226b28ed3083a21cd176b9202dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bdd6d180f5456a19dfc2e85a166f9dddb333226b28ed3083a21cd176b9202dfb->leave($__internal_bdd6d180f5456a19dfc2e85a166f9dddb333226b28ed3083a21cd176b9202dfb_prof);

        
        $__internal_4d58053800fed1c87ae6268d7d69bc4e927ef4f31129ba5fd294fa172af47dec->leave($__internal_4d58053800fed1c87ae6268d7d69bc4e927ef4f31129ba5fd294fa172af47dec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}

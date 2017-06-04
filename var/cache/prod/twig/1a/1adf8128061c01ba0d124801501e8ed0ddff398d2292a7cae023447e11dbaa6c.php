<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_6462abe99a244e7304dfbf31f21f2edbdc5b3f299172c4237eed62c3a0cf3535 extends Twig_Template
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
        $__internal_2dd107147d2433f0aae26ee4293ec1d7a3ec57f6aaa1931f315b90f3bdf59984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd107147d2433f0aae26ee4293ec1d7a3ec57f6aaa1931f315b90f3bdf59984->enter($__internal_2dd107147d2433f0aae26ee4293ec1d7a3ec57f6aaa1931f315b90f3bdf59984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2dd107147d2433f0aae26ee4293ec1d7a3ec57f6aaa1931f315b90f3bdf59984->leave($__internal_2dd107147d2433f0aae26ee4293ec1d7a3ec57f6aaa1931f315b90f3bdf59984_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e2f2df11e6225473499f0aff41989499c6de9201a1d3343442e91d2f8c5ed416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f2df11e6225473499f0aff41989499c6de9201a1d3343442e91d2f8c5ed416->enter($__internal_e2f2df11e6225473499f0aff41989499c6de9201a1d3343442e91d2f8c5ed416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e2f2df11e6225473499f0aff41989499c6de9201a1d3343442e91d2f8c5ed416->leave($__internal_e2f2df11e6225473499f0aff41989499c6de9201a1d3343442e91d2f8c5ed416_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f44ddc5b312489a53260617e686a54bd88bb3e524600442b4abef8d08f05b141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44ddc5b312489a53260617e686a54bd88bb3e524600442b4abef8d08f05b141->enter($__internal_f44ddc5b312489a53260617e686a54bd88bb3e524600442b4abef8d08f05b141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f44ddc5b312489a53260617e686a54bd88bb3e524600442b4abef8d08f05b141->leave($__internal_f44ddc5b312489a53260617e686a54bd88bb3e524600442b4abef8d08f05b141_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb3b7c2589df102c114ffd3d5c88c6ec88a1fa071b29e5fc664fe47ddf3cd154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3b7c2589df102c114ffd3d5c88c6ec88a1fa071b29e5fc664fe47ddf3cd154->enter($__internal_eb3b7c2589df102c114ffd3d5c88c6ec88a1fa071b29e5fc664fe47ddf3cd154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb3b7c2589df102c114ffd3d5c88c6ec88a1fa071b29e5fc664fe47ddf3cd154->leave($__internal_eb3b7c2589df102c114ffd3d5c88c6ec88a1fa071b29e5fc664fe47ddf3cd154_prof);

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

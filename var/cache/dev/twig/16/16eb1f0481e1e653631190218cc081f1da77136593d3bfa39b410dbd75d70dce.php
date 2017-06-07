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
        $__internal_4624f3ff31799672af3576d6d7fefcdeff9fa869902950e034804884ed933491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4624f3ff31799672af3576d6d7fefcdeff9fa869902950e034804884ed933491->enter($__internal_4624f3ff31799672af3576d6d7fefcdeff9fa869902950e034804884ed933491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_aee62ad9abd4624da4d06b1fce4e157e2738f00675234f38f1c3527782d27b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee62ad9abd4624da4d06b1fce4e157e2738f00675234f38f1c3527782d27b1d->enter($__internal_aee62ad9abd4624da4d06b1fce4e157e2738f00675234f38f1c3527782d27b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4624f3ff31799672af3576d6d7fefcdeff9fa869902950e034804884ed933491->leave($__internal_4624f3ff31799672af3576d6d7fefcdeff9fa869902950e034804884ed933491_prof);

        
        $__internal_aee62ad9abd4624da4d06b1fce4e157e2738f00675234f38f1c3527782d27b1d->leave($__internal_aee62ad9abd4624da4d06b1fce4e157e2738f00675234f38f1c3527782d27b1d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2af15bea0fac6f094e31e3920290e27ee201bbc8ae05289d29bb01c9d9f90646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af15bea0fac6f094e31e3920290e27ee201bbc8ae05289d29bb01c9d9f90646->enter($__internal_2af15bea0fac6f094e31e3920290e27ee201bbc8ae05289d29bb01c9d9f90646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d3d58058fabb067dd4898ac371a155c475a21b64bfefc7cd369f79d7686f2a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d58058fabb067dd4898ac371a155c475a21b64bfefc7cd369f79d7686f2a92->enter($__internal_d3d58058fabb067dd4898ac371a155c475a21b64bfefc7cd369f79d7686f2a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d3d58058fabb067dd4898ac371a155c475a21b64bfefc7cd369f79d7686f2a92->leave($__internal_d3d58058fabb067dd4898ac371a155c475a21b64bfefc7cd369f79d7686f2a92_prof);

        
        $__internal_2af15bea0fac6f094e31e3920290e27ee201bbc8ae05289d29bb01c9d9f90646->leave($__internal_2af15bea0fac6f094e31e3920290e27ee201bbc8ae05289d29bb01c9d9f90646_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cad480728723dab8e3a98050e9e05dca9c548e6f4a623dc757531a165dec5237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad480728723dab8e3a98050e9e05dca9c548e6f4a623dc757531a165dec5237->enter($__internal_cad480728723dab8e3a98050e9e05dca9c548e6f4a623dc757531a165dec5237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_36c91f1cff3fcddec0c4a9bcfa8fb6460fc498d2c435c20818e837555fe337c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c91f1cff3fcddec0c4a9bcfa8fb6460fc498d2c435c20818e837555fe337c0->enter($__internal_36c91f1cff3fcddec0c4a9bcfa8fb6460fc498d2c435c20818e837555fe337c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36c91f1cff3fcddec0c4a9bcfa8fb6460fc498d2c435c20818e837555fe337c0->leave($__internal_36c91f1cff3fcddec0c4a9bcfa8fb6460fc498d2c435c20818e837555fe337c0_prof);

        
        $__internal_cad480728723dab8e3a98050e9e05dca9c548e6f4a623dc757531a165dec5237->leave($__internal_cad480728723dab8e3a98050e9e05dca9c548e6f4a623dc757531a165dec5237_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_583b5cbf42026f8fdd856b2c7d1cf9d3ff0403b5fe08554a0de47b6cf29cc5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583b5cbf42026f8fdd856b2c7d1cf9d3ff0403b5fe08554a0de47b6cf29cc5fc->enter($__internal_583b5cbf42026f8fdd856b2c7d1cf9d3ff0403b5fe08554a0de47b6cf29cc5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5baebb003152eed74ae032c77e02046b62842f01eedaaf072d573e07a4b97f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baebb003152eed74ae032c77e02046b62842f01eedaaf072d573e07a4b97f53->enter($__internal_5baebb003152eed74ae032c77e02046b62842f01eedaaf072d573e07a4b97f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5baebb003152eed74ae032c77e02046b62842f01eedaaf072d573e07a4b97f53->leave($__internal_5baebb003152eed74ae032c77e02046b62842f01eedaaf072d573e07a4b97f53_prof);

        
        $__internal_583b5cbf42026f8fdd856b2c7d1cf9d3ff0403b5fe08554a0de47b6cf29cc5fc->leave($__internal_583b5cbf42026f8fdd856b2c7d1cf9d3ff0403b5fe08554a0de47b6cf29cc5fc_prof);

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

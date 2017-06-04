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
        $__internal_21b9c336e4ce62eaf1d485a6662205795c709f0e2da954761f60bbbefb0213f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b9c336e4ce62eaf1d485a6662205795c709f0e2da954761f60bbbefb0213f1->enter($__internal_21b9c336e4ce62eaf1d485a6662205795c709f0e2da954761f60bbbefb0213f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_de1eb82ceeba4b79030123846c096e7fab9c179300348f2a95728ae079846577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1eb82ceeba4b79030123846c096e7fab9c179300348f2a95728ae079846577->enter($__internal_de1eb82ceeba4b79030123846c096e7fab9c179300348f2a95728ae079846577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21b9c336e4ce62eaf1d485a6662205795c709f0e2da954761f60bbbefb0213f1->leave($__internal_21b9c336e4ce62eaf1d485a6662205795c709f0e2da954761f60bbbefb0213f1_prof);

        
        $__internal_de1eb82ceeba4b79030123846c096e7fab9c179300348f2a95728ae079846577->leave($__internal_de1eb82ceeba4b79030123846c096e7fab9c179300348f2a95728ae079846577_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db4a1c07bcd59ded7b439449d9ee1561d4607c91d91f092ccea537f506d0c83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4a1c07bcd59ded7b439449d9ee1561d4607c91d91f092ccea537f506d0c83b->enter($__internal_db4a1c07bcd59ded7b439449d9ee1561d4607c91d91f092ccea537f506d0c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d5620b889c982651b7f87cfbebd7bdc274d95ec5974559c2775ef3c8f1c6cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5620b889c982651b7f87cfbebd7bdc274d95ec5974559c2775ef3c8f1c6cca->enter($__internal_7d5620b889c982651b7f87cfbebd7bdc274d95ec5974559c2775ef3c8f1c6cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7d5620b889c982651b7f87cfbebd7bdc274d95ec5974559c2775ef3c8f1c6cca->leave($__internal_7d5620b889c982651b7f87cfbebd7bdc274d95ec5974559c2775ef3c8f1c6cca_prof);

        
        $__internal_db4a1c07bcd59ded7b439449d9ee1561d4607c91d91f092ccea537f506d0c83b->leave($__internal_db4a1c07bcd59ded7b439449d9ee1561d4607c91d91f092ccea537f506d0c83b_prof);

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

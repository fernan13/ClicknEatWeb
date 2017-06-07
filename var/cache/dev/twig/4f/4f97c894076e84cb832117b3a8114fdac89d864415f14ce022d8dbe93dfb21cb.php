<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_94de210a9f08c5cff1fc1861f2be6fc099baf7452278f7b0b2c95fed12762fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d3f0445e5ef2e95b372cc019f1ad729b297d2b07a79748431739bebd0be1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d3f0445e5ef2e95b372cc019f1ad729b297d2b07a79748431739bebd0be1c3->enter($__internal_44d3f0445e5ef2e95b372cc019f1ad729b297d2b07a79748431739bebd0be1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_66b1e6288e13b36496ce1c89fb24fdbd3f7a79e0c7d9c55521e8336693f7d7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b1e6288e13b36496ce1c89fb24fdbd3f7a79e0c7d9c55521e8336693f7d7f6->enter($__internal_66b1e6288e13b36496ce1c89fb24fdbd3f7a79e0c7d9c55521e8336693f7d7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d3f0445e5ef2e95b372cc019f1ad729b297d2b07a79748431739bebd0be1c3->leave($__internal_44d3f0445e5ef2e95b372cc019f1ad729b297d2b07a79748431739bebd0be1c3_prof);

        
        $__internal_66b1e6288e13b36496ce1c89fb24fdbd3f7a79e0c7d9c55521e8336693f7d7f6->leave($__internal_66b1e6288e13b36496ce1c89fb24fdbd3f7a79e0c7d9c55521e8336693f7d7f6_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_dffab321a627c6091520221e3c403714a50d6859939ec40b9e2fe76a9c557310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffab321a627c6091520221e3c403714a50d6859939ec40b9e2fe76a9c557310->enter($__internal_dffab321a627c6091520221e3c403714a50d6859939ec40b9e2fe76a9c557310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_abfdefb9b54bd0e86323e68cb53978482226810c9502c75cf30ab7c94e4e0cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfdefb9b54bd0e86323e68cb53978482226810c9502c75cf30ab7c94e4e0cd2->enter($__internal_abfdefb9b54bd0e86323e68cb53978482226810c9502c75cf30ab7c94e4e0cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_abfdefb9b54bd0e86323e68cb53978482226810c9502c75cf30ab7c94e4e0cd2->leave($__internal_abfdefb9b54bd0e86323e68cb53978482226810c9502c75cf30ab7c94e4e0cd2_prof);

        
        $__internal_dffab321a627c6091520221e3c403714a50d6859939ec40b9e2fe76a9c557310->leave($__internal_dffab321a627c6091520221e3c403714a50d6859939ec40b9e2fe76a9c557310_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/Connect/login.html.twig");
    }
}

<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8e4938000bcc335e66778b853df88506e0e99e8b884c018d8a4e6993e4aa45f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6738356235abb4ec81c53b40c56d57df27ad484776b9a6eac56b07625712a945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6738356235abb4ec81c53b40c56d57df27ad484776b9a6eac56b07625712a945->enter($__internal_6738356235abb4ec81c53b40c56d57df27ad484776b9a6eac56b07625712a945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_da3608a74ef00012abafa28b67c57cbc85fefe47ff48447a39cfd3538f1a7022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3608a74ef00012abafa28b67c57cbc85fefe47ff48447a39cfd3538f1a7022->enter($__internal_da3608a74ef00012abafa28b67c57cbc85fefe47ff48447a39cfd3538f1a7022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6738356235abb4ec81c53b40c56d57df27ad484776b9a6eac56b07625712a945->leave($__internal_6738356235abb4ec81c53b40c56d57df27ad484776b9a6eac56b07625712a945_prof);

        
        $__internal_da3608a74ef00012abafa28b67c57cbc85fefe47ff48447a39cfd3538f1a7022->leave($__internal_da3608a74ef00012abafa28b67c57cbc85fefe47ff48447a39cfd3538f1a7022_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6128ebaa392cefc5951da9b2af78b1e799f94743717036cb29e3eaca6c59a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6128ebaa392cefc5951da9b2af78b1e799f94743717036cb29e3eaca6c59a74->enter($__internal_e6128ebaa392cefc5951da9b2af78b1e799f94743717036cb29e3eaca6c59a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_869c7875239dae7a7ef9f389530c3e9ef5ea5289bcd346f4dec2ce0d3990f579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869c7875239dae7a7ef9f389530c3e9ef5ea5289bcd346f4dec2ce0d3990f579->enter($__internal_869c7875239dae7a7ef9f389530c3e9ef5ea5289bcd346f4dec2ce0d3990f579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_869c7875239dae7a7ef9f389530c3e9ef5ea5289bcd346f4dec2ce0d3990f579->leave($__internal_869c7875239dae7a7ef9f389530c3e9ef5ea5289bcd346f4dec2ce0d3990f579_prof);

        
        $__internal_e6128ebaa392cefc5951da9b2af78b1e799f94743717036cb29e3eaca6c59a74->leave($__internal_e6128ebaa392cefc5951da9b2af78b1e799f94743717036cb29e3eaca6c59a74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}

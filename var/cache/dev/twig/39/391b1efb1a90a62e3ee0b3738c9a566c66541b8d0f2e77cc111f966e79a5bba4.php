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
        $__internal_55509ea13072775ffdc78a7e214fd40d8af460c4e8b741ca0c401954b73925ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55509ea13072775ffdc78a7e214fd40d8af460c4e8b741ca0c401954b73925ae->enter($__internal_55509ea13072775ffdc78a7e214fd40d8af460c4e8b741ca0c401954b73925ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_f6e6b43218f82b7fa7d3239155db1bd9e9c331d5998d03852f1e7a2ffc8a1982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e6b43218f82b7fa7d3239155db1bd9e9c331d5998d03852f1e7a2ffc8a1982->enter($__internal_f6e6b43218f82b7fa7d3239155db1bd9e9c331d5998d03852f1e7a2ffc8a1982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55509ea13072775ffdc78a7e214fd40d8af460c4e8b741ca0c401954b73925ae->leave($__internal_55509ea13072775ffdc78a7e214fd40d8af460c4e8b741ca0c401954b73925ae_prof);

        
        $__internal_f6e6b43218f82b7fa7d3239155db1bd9e9c331d5998d03852f1e7a2ffc8a1982->leave($__internal_f6e6b43218f82b7fa7d3239155db1bd9e9c331d5998d03852f1e7a2ffc8a1982_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_607578f465f64d44ad998f80cf7f3cb9b4ed3ba812210b356e08c3a5a8b5cafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607578f465f64d44ad998f80cf7f3cb9b4ed3ba812210b356e08c3a5a8b5cafa->enter($__internal_607578f465f64d44ad998f80cf7f3cb9b4ed3ba812210b356e08c3a5a8b5cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_113d2d0608c0f61a0bb82044c444c1ef5d71c5c30ece9d23c266cc72841cf084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d2d0608c0f61a0bb82044c444c1ef5d71c5c30ece9d23c266cc72841cf084->enter($__internal_113d2d0608c0f61a0bb82044c444c1ef5d71c5c30ece9d23c266cc72841cf084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_113d2d0608c0f61a0bb82044c444c1ef5d71c5c30ece9d23c266cc72841cf084->leave($__internal_113d2d0608c0f61a0bb82044c444c1ef5d71c5c30ece9d23c266cc72841cf084_prof);

        
        $__internal_607578f465f64d44ad998f80cf7f3cb9b4ed3ba812210b356e08c3a5a8b5cafa->leave($__internal_607578f465f64d44ad998f80cf7f3cb9b4ed3ba812210b356e08c3a5a8b5cafa_prof);

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

<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_4fef355499477290c587e0c2504de0ec7f183434a7196e2559cb33da7acf07ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
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
        $__internal_0c69b0e9666c84860da70755d6fe271e45c2c0948bc8cdd335a078246bfc8096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c69b0e9666c84860da70755d6fe271e45c2c0948bc8cdd335a078246bfc8096->enter($__internal_0c69b0e9666c84860da70755d6fe271e45c2c0948bc8cdd335a078246bfc8096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_3fdccdabd535b239397976bd604eb1963e70aa6273b675d6f39860c529d4cb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdccdabd535b239397976bd604eb1963e70aa6273b675d6f39860c529d4cb74->enter($__internal_3fdccdabd535b239397976bd604eb1963e70aa6273b675d6f39860c529d4cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c69b0e9666c84860da70755d6fe271e45c2c0948bc8cdd335a078246bfc8096->leave($__internal_0c69b0e9666c84860da70755d6fe271e45c2c0948bc8cdd335a078246bfc8096_prof);

        
        $__internal_3fdccdabd535b239397976bd604eb1963e70aa6273b675d6f39860c529d4cb74->leave($__internal_3fdccdabd535b239397976bd604eb1963e70aa6273b675d6f39860c529d4cb74_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_04d933fe5800ada6aa6c7275fbd29d5e45b69a90c6d59d44a5f6d3fa51e05950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d933fe5800ada6aa6c7275fbd29d5e45b69a90c6d59d44a5f6d3fa51e05950->enter($__internal_04d933fe5800ada6aa6c7275fbd29d5e45b69a90c6d59d44a5f6d3fa51e05950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_084daf81c19bfc0fa67ff795d87a204f1fa665c847659807618c8689512967e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084daf81c19bfc0fa67ff795d87a204f1fa665c847659807618c8689512967e9->enter($__internal_084daf81c19bfc0fa67ff795d87a204f1fa665c847659807618c8689512967e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_084daf81c19bfc0fa67ff795d87a204f1fa665c847659807618c8689512967e9->leave($__internal_084daf81c19bfc0fa67ff795d87a204f1fa665c847659807618c8689512967e9_prof);

        
        $__internal_04d933fe5800ada6aa6c7275fbd29d5e45b69a90c6d59d44a5f6d3fa51e05950->leave($__internal_04d933fe5800ada6aa6c7275fbd29d5e45b69a90c6d59d44a5f6d3fa51e05950_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_success.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/Connect/connect_success.html.twig");
    }
}

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
        $__internal_509f3693141942c21e71cfdd77b9ece328b904e5ee14c846429a9e639dfdff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509f3693141942c21e71cfdd77b9ece328b904e5ee14c846429a9e639dfdff11->enter($__internal_509f3693141942c21e71cfdd77b9ece328b904e5ee14c846429a9e639dfdff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_eb1fb3e51d8e60cb6b7fb689a06a6d8c075e95b1735b27164b669eb52f4812b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1fb3e51d8e60cb6b7fb689a06a6d8c075e95b1735b27164b669eb52f4812b9->enter($__internal_eb1fb3e51d8e60cb6b7fb689a06a6d8c075e95b1735b27164b669eb52f4812b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509f3693141942c21e71cfdd77b9ece328b904e5ee14c846429a9e639dfdff11->leave($__internal_509f3693141942c21e71cfdd77b9ece328b904e5ee14c846429a9e639dfdff11_prof);

        
        $__internal_eb1fb3e51d8e60cb6b7fb689a06a6d8c075e95b1735b27164b669eb52f4812b9->leave($__internal_eb1fb3e51d8e60cb6b7fb689a06a6d8c075e95b1735b27164b669eb52f4812b9_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_48e4d19d2fa48fb699db5f251570df0f61d02c9c7d678e83d440590766fb5438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e4d19d2fa48fb699db5f251570df0f61d02c9c7d678e83d440590766fb5438->enter($__internal_48e4d19d2fa48fb699db5f251570df0f61d02c9c7d678e83d440590766fb5438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_f13b8d54d7c8c1d834bd65cfcf517e05a9e57d16795cdc230ed6462a044e6e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13b8d54d7c8c1d834bd65cfcf517e05a9e57d16795cdc230ed6462a044e6e73->enter($__internal_f13b8d54d7c8c1d834bd65cfcf517e05a9e57d16795cdc230ed6462a044e6e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_f13b8d54d7c8c1d834bd65cfcf517e05a9e57d16795cdc230ed6462a044e6e73->leave($__internal_f13b8d54d7c8c1d834bd65cfcf517e05a9e57d16795cdc230ed6462a044e6e73_prof);

        
        $__internal_48e4d19d2fa48fb699db5f251570df0f61d02c9c7d678e83d440590766fb5438->leave($__internal_48e4d19d2fa48fb699db5f251570df0f61d02c9c7d678e83d440590766fb5438_prof);

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

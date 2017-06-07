<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_6b3e12ef7d6772d4e18b7aed7177574f30d61930a498738e7917d8ef63ef26ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_e2137382595f902d82f23416ec2c8587c26115345661111d11289b208517e342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2137382595f902d82f23416ec2c8587c26115345661111d11289b208517e342->enter($__internal_e2137382595f902d82f23416ec2c8587c26115345661111d11289b208517e342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_49e8c5d1ad39aabf97d32d4e986e74f7594bf6122b5a6240f0e3f7e22d5461b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e8c5d1ad39aabf97d32d4e986e74f7594bf6122b5a6240f0e3f7e22d5461b5->enter($__internal_49e8c5d1ad39aabf97d32d4e986e74f7594bf6122b5a6240f0e3f7e22d5461b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2137382595f902d82f23416ec2c8587c26115345661111d11289b208517e342->leave($__internal_e2137382595f902d82f23416ec2c8587c26115345661111d11289b208517e342_prof);

        
        $__internal_49e8c5d1ad39aabf97d32d4e986e74f7594bf6122b5a6240f0e3f7e22d5461b5->leave($__internal_49e8c5d1ad39aabf97d32d4e986e74f7594bf6122b5a6240f0e3f7e22d5461b5_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_e0ca837eef829eae59d08833e53762b2cc49a28abbae11dc9c187a400da00c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ca837eef829eae59d08833e53762b2cc49a28abbae11dc9c187a400da00c3f->enter($__internal_e0ca837eef829eae59d08833e53762b2cc49a28abbae11dc9c187a400da00c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_11e50c8d57e1a73a30663838af6b7539733ea5dc3cd96f2ce1bd857cc12a93ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e50c8d57e1a73a30663838af6b7539733ea5dc3cd96f2ce1bd857cc12a93ca->enter($__internal_11e50c8d57e1a73a30663838af6b7539733ea5dc3cd96f2ce1bd857cc12a93ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_11e50c8d57e1a73a30663838af6b7539733ea5dc3cd96f2ce1bd857cc12a93ca->leave($__internal_11e50c8d57e1a73a30663838af6b7539733ea5dc3cd96f2ce1bd857cc12a93ca_prof);

        
        $__internal_e0ca837eef829eae59d08833e53762b2cc49a28abbae11dc9c187a400da00c3f->leave($__internal_e0ca837eef829eae59d08833e53762b2cc49a28abbae11dc9c187a400da00c3f_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/Connect/registration_success.html.twig");
    }
}

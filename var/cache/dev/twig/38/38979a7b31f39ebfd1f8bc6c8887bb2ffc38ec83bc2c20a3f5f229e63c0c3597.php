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
        $__internal_42c16fcd53d6047cff929f3761888fddbfb3df9351e9e9e4cdbd7c35db73683d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c16fcd53d6047cff929f3761888fddbfb3df9351e9e9e4cdbd7c35db73683d->enter($__internal_42c16fcd53d6047cff929f3761888fddbfb3df9351e9e9e4cdbd7c35db73683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_12a4e0788eb3999f2a4bad7129686df0a6b3a546c409f6ac4c7685ccfaa7042f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a4e0788eb3999f2a4bad7129686df0a6b3a546c409f6ac4c7685ccfaa7042f->enter($__internal_12a4e0788eb3999f2a4bad7129686df0a6b3a546c409f6ac4c7685ccfaa7042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c16fcd53d6047cff929f3761888fddbfb3df9351e9e9e4cdbd7c35db73683d->leave($__internal_42c16fcd53d6047cff929f3761888fddbfb3df9351e9e9e4cdbd7c35db73683d_prof);

        
        $__internal_12a4e0788eb3999f2a4bad7129686df0a6b3a546c409f6ac4c7685ccfaa7042f->leave($__internal_12a4e0788eb3999f2a4bad7129686df0a6b3a546c409f6ac4c7685ccfaa7042f_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_a25e9094b62df3f998f873cfa792bfc1b871c89b4afaaf571755be65ccba7bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25e9094b62df3f998f873cfa792bfc1b871c89b4afaaf571755be65ccba7bfe->enter($__internal_a25e9094b62df3f998f873cfa792bfc1b871c89b4afaaf571755be65ccba7bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_60176bdbc7ef9f4d754d425ec508ea1fe7aad384428ab166e1dfd4949056d0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60176bdbc7ef9f4d754d425ec508ea1fe7aad384428ab166e1dfd4949056d0c0->enter($__internal_60176bdbc7ef9f4d754d425ec508ea1fe7aad384428ab166e1dfd4949056d0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_60176bdbc7ef9f4d754d425ec508ea1fe7aad384428ab166e1dfd4949056d0c0->leave($__internal_60176bdbc7ef9f4d754d425ec508ea1fe7aad384428ab166e1dfd4949056d0c0_prof);

        
        $__internal_a25e9094b62df3f998f873cfa792bfc1b871c89b4afaaf571755be65ccba7bfe->leave($__internal_a25e9094b62df3f998f873cfa792bfc1b871c89b4afaaf571755be65ccba7bfe_prof);

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

<?php

/* registration/register.html.twig */
class __TwigTemplate_a606b4bacacc1aff9a8d9b6357f58e91b02c59686f8ecc3dd8124e77046ca6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0736e1f8af454961283e83a9273c9c0e938dcaed81f380d340bd7bea1a470d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0736e1f8af454961283e83a9273c9c0e938dcaed81f380d340bd7bea1a470d88->enter($__internal_0736e1f8af454961283e83a9273c9c0e938dcaed81f380d340bd7bea1a470d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0736e1f8af454961283e83a9273c9c0e938dcaed81f380d340bd7bea1a470d88->leave($__internal_0736e1f8af454961283e83a9273c9c0e938dcaed81f380d340bd7bea1a470d88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77fad92256551b450809b1934d5f100b22b9b562b0a03029eb8754b0b3c17971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fad92256551b450809b1934d5f100b22b9b562b0a03029eb8754b0b3c17971->enter($__internal_77fad92256551b450809b1934d5f100b22b9b562b0a03029eb8754b0b3c17971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
        
        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\">
        <span>Facebook</span>
    </a>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\">
        <span>Google</span>
    </a>
";
        
        $__internal_77fad92256551b450809b1934d5f100b22b9b562b0a03029eb8754b0b3c17971->leave($__internal_77fad92256551b450809b1934d5f100b22b9b562b0a03029eb8754b0b3c17971_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 13,  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    {{ form_start(form) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}
        {{ form_row(form.plainPassword.first) }}
        {{ form_row(form.plainPassword.second) }}
        
        <button type=\"submit\">Register!</button>
    {{ form_end(form) }}
        
    <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\">
        <span>Facebook</span>
    </a>
    <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}\">
        <span>Google</span>
    </a>
{% endblock %}", "registration/register.html.twig", "/home/ubuntu/workspace/app/Resources/views/registration/register.html.twig");
    }
}

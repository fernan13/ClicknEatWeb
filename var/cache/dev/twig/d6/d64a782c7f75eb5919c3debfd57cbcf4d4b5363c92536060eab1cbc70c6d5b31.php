<?php

/* :registration:register.html.twig */
class __TwigTemplate_a55f65640b17ac840a79912c2de776d8803809e7843fb0344bac4294143fd50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":registration:register.html.twig", 1);
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
        $__internal_7feaa6af3821d625a643b93a5ff3b9b05a45e8da6d74cab4cb069bde6dc569f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7feaa6af3821d625a643b93a5ff3b9b05a45e8da6d74cab4cb069bde6dc569f5->enter($__internal_7feaa6af3821d625a643b93a5ff3b9b05a45e8da6d74cab4cb069bde6dc569f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $__internal_c370b2db6bb5c1fbbd6e47152febb1515b6f2f473b7049f14305091eabc389b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c370b2db6bb5c1fbbd6e47152febb1515b6f2f473b7049f14305091eabc389b7->enter($__internal_c370b2db6bb5c1fbbd6e47152febb1515b6f2f473b7049f14305091eabc389b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7feaa6af3821d625a643b93a5ff3b9b05a45e8da6d74cab4cb069bde6dc569f5->leave($__internal_7feaa6af3821d625a643b93a5ff3b9b05a45e8da6d74cab4cb069bde6dc569f5_prof);

        
        $__internal_c370b2db6bb5c1fbbd6e47152febb1515b6f2f473b7049f14305091eabc389b7->leave($__internal_c370b2db6bb5c1fbbd6e47152febb1515b6f2f473b7049f14305091eabc389b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c06ee60552e6d1a9dd3a8da3a5e1591ffae5594b8f8e24a2f4d5f782d96fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c06ee60552e6d1a9dd3a8da3a5e1591ffae5594b8f8e24a2f4d5f782d96fcc->enter($__internal_b3c06ee60552e6d1a9dd3a8da3a5e1591ffae5594b8f8e24a2f4d5f782d96fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d06154d519b409c61b46ecfa5bba6e42c973dff7212581c39d84c7ec7dfcc1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06154d519b409c61b46ecfa5bba6e42c973dff7212581c39d84c7ec7dfcc1e9->enter($__internal_d06154d519b409c61b46ecfa5bba6e42c973dff7212581c39d84c7ec7dfcc1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d06154d519b409c61b46ecfa5bba6e42c973dff7212581c39d84c7ec7dfcc1e9->leave($__internal_d06154d519b409c61b46ecfa5bba6e42c973dff7212581c39d84c7ec7dfcc1e9_prof);

        
        $__internal_b3c06ee60552e6d1a9dd3a8da3a5e1591ffae5594b8f8e24a2f4d5f782d96fcc->leave($__internal_b3c06ee60552e6d1a9dd3a8da3a5e1591ffae5594b8f8e24a2f4d5f782d96fcc_prof);

    }

    public function getTemplateName()
    {
        return ":registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  77 => 13,  72 => 11,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}", ":registration:register.html.twig", "/home/ubuntu/workspace/app/Resources/views/registration/register.html.twig");
    }
}

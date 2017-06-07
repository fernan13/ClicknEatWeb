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
        $__internal_f3b158ad99fb59a72280cd3451d5e8f5eefbd42f7e52e4bd9695fd5b2df22f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b158ad99fb59a72280cd3451d5e8f5eefbd42f7e52e4bd9695fd5b2df22f6f->enter($__internal_f3b158ad99fb59a72280cd3451d5e8f5eefbd42f7e52e4bd9695fd5b2df22f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $__internal_0e61ef7e9ade8ed3fb23813e2a58e08086ab84ded6aa11755f61ce2c708f5712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e61ef7e9ade8ed3fb23813e2a58e08086ab84ded6aa11755f61ce2c708f5712->enter($__internal_0e61ef7e9ade8ed3fb23813e2a58e08086ab84ded6aa11755f61ce2c708f5712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b158ad99fb59a72280cd3451d5e8f5eefbd42f7e52e4bd9695fd5b2df22f6f->leave($__internal_f3b158ad99fb59a72280cd3451d5e8f5eefbd42f7e52e4bd9695fd5b2df22f6f_prof);

        
        $__internal_0e61ef7e9ade8ed3fb23813e2a58e08086ab84ded6aa11755f61ce2c708f5712->leave($__internal_0e61ef7e9ade8ed3fb23813e2a58e08086ab84ded6aa11755f61ce2c708f5712_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49841867be52cedbe99f74b2dc7bf68df6b6dbbc1c13d15a6b5b83cf18fb8aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49841867be52cedbe99f74b2dc7bf68df6b6dbbc1c13d15a6b5b83cf18fb8aaf->enter($__internal_49841867be52cedbe99f74b2dc7bf68df6b6dbbc1c13d15a6b5b83cf18fb8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97948a80b28a62bb049f7d96fe42cdaadf5886fdb98327a6977cef3de0bb9a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97948a80b28a62bb049f7d96fe42cdaadf5886fdb98327a6977cef3de0bb9a91->enter($__internal_97948a80b28a62bb049f7d96fe42cdaadf5886fdb98327a6977cef3de0bb9a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97948a80b28a62bb049f7d96fe42cdaadf5886fdb98327a6977cef3de0bb9a91->leave($__internal_97948a80b28a62bb049f7d96fe42cdaadf5886fdb98327a6977cef3de0bb9a91_prof);

        
        $__internal_49841867be52cedbe99f74b2dc7bf68df6b6dbbc1c13d15a6b5b83cf18fb8aaf->leave($__internal_49841867be52cedbe99f74b2dc7bf68df6b6dbbc1c13d15a6b5b83cf18fb8aaf_prof);

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

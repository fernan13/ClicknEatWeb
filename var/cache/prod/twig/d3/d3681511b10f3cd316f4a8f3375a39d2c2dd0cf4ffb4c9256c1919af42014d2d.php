<?php

/* default/index.html.twig */
class __TwigTemplate_d4752773b16b55ca769930eb4aee9a327acc537e3f9e962e747765b2c8dfb091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde61bd7e780ee8a98c2240c10df002cbd2510d6f3e8cab768b536401dc1f04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde61bd7e780ee8a98c2240c10df002cbd2510d6f3e8cab768b536401dc1f04d->enter($__internal_fde61bd7e780ee8a98c2240c10df002cbd2510d6f3e8cab768b536401dc1f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde61bd7e780ee8a98c2240c10df002cbd2510d6f3e8cab768b536401dc1f04d->leave($__internal_fde61bd7e780ee8a98c2240c10df002cbd2510d6f3e8cab768b536401dc1f04d_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_f9982993439b5db79f853b253bd9a9cdcde14ce34891c0762e256fa5b799d444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9982993439b5db79f853b253bd9a9cdcde14ce34891c0762e256fa5b799d444->enter($__internal_f9982993439b5db79f853b253bd9a9cdcde14ce34891c0762e256fa5b799d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
    ";
        // line 9
        $context["vars"] = array("logged" => (isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")));
        // line 10
        echo "    ";
        $this->loadTemplate("secondary_templates/header.html.twig", "default/index.html.twig", 10)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 11
        echo "    
";
        
        $__internal_f9982993439b5db79f853b253bd9a9cdcde14ce34891c0762e256fa5b799d444->leave($__internal_f9982993439b5db79f853b253bd9a9cdcde14ce34891c0762e256fa5b799d444_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa801447952f1b52669f32763a399019c5133ff244a032ced6d03ddd49b3020a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa801447952f1b52669f32763a399019c5133ff244a032ced6d03ddd49b3020a->enter($__internal_fa801447952f1b52669f32763a399019c5133ff244a032ced6d03ddd49b3020a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    
    ";
        // line 16
        if (((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")) == false)) {
            // line 17
            echo "        
        ";
            // line 18
            $this->loadTemplate("terciary_templates/index-not-login.html.twig", "default/index.html.twig", 18)->display($context);
            // line 19
            echo "        
    ";
        } else {
            // line 21
            echo "        
        ";
            // line 22
            $this->loadTemplate("terciary_templates/index-login.html.twig", "default/index.html.twig", 22)->display(array_merge($context, array("javascripts" =>             $this->renderBlock("javascripts", $context, $blocks))));
            echo "   
        
    ";
        }
        // line 25
        echo "
";
        
        $__internal_fa801447952f1b52669f32763a399019c5133ff244a032ced6d03ddd49b3020a->leave($__internal_fa801447952f1b52669f32763a399019c5133ff244a032ced6d03ddd49b3020a_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_15661be5811b32956c073152ce68a554eb2c745013ae2911989e07af8ebad2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15661be5811b32956c073152ce68a554eb2c745013ae2911989e07af8ebad2a2->enter($__internal_15661be5811b32956c073152ce68a554eb2c745013ae2911989e07af8ebad2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "
    ";
        // line 30
        $this->loadTemplate("secondary_templates/footer.html.twig", "default/index.html.twig", 30)->display($context);
        // line 31
        echo "
";
        
        $__internal_15661be5811b32956c073152ce68a554eb2c745013ae2911989e07af8ebad2a2->leave($__internal_15661be5811b32956c073152ce68a554eb2c745013ae2911989e07af8ebad2a2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  110 => 30,  107 => 29,  101 => 28,  93 => 25,  87 => 22,  84 => 21,  80 => 19,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  64 => 14,  56 => 11,  53 => 10,  51 => 9,  48 => 8,  42 => 7,  35 => 1,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% if logged is defined == false %}
    {% set logged = app.session.get('logged') %}
{% endif %}

{% block header %}

    {% set vars = {'logged': logged} %}
    {% include 'secondary_templates/header.html.twig' with vars %}
    
{% endblock %}

{% block body %}
    
    {% if logged == false %}
        
        {% include 'terciary_templates/index-not-login.html.twig' %}
        
    {% else %}
        
        {% include 'terciary_templates/index-login.html.twig' with {javascripts: block('javascripts')} %}   
        
    {% endif %}

{% endblock %}

{% block footer %}

    {% include 'secondary_templates/footer.html.twig' %}

{% endblock %}
", "default/index.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/index.html.twig");
    }
}

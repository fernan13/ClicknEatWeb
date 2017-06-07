<?php

/* :default:index.html.twig */
class __TwigTemplate_28cc5267419f365b0ab2c8232c63d9a24535692405ba431a9c96508e1c6c7db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_5f178c62ab30e5ae636976a57992c671763f69a982e5bcf1e3061c23d0f1db76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f178c62ab30e5ae636976a57992c671763f69a982e5bcf1e3061c23d0f1db76->enter($__internal_5f178c62ab30e5ae636976a57992c671763f69a982e5bcf1e3061c23d0f1db76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_3d44333d2d618f6a59e170ac1139fa3168264bf33b5edac8f38ef6a2c71d5a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d44333d2d618f6a59e170ac1139fa3168264bf33b5edac8f38ef6a2c71d5a80->enter($__internal_3d44333d2d618f6a59e170ac1139fa3168264bf33b5edac8f38ef6a2c71d5a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f178c62ab30e5ae636976a57992c671763f69a982e5bcf1e3061c23d0f1db76->leave($__internal_5f178c62ab30e5ae636976a57992c671763f69a982e5bcf1e3061c23d0f1db76_prof);

        
        $__internal_3d44333d2d618f6a59e170ac1139fa3168264bf33b5edac8f38ef6a2c71d5a80->leave($__internal_3d44333d2d618f6a59e170ac1139fa3168264bf33b5edac8f38ef6a2c71d5a80_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_0d9a6ce51db585ebb8b931f2b88574ee303d1400f286728d08a67de2fdcb9bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9a6ce51db585ebb8b931f2b88574ee303d1400f286728d08a67de2fdcb9bda->enter($__internal_0d9a6ce51db585ebb8b931f2b88574ee303d1400f286728d08a67de2fdcb9bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2ec96dc6eb590c0d19d755d17d35e2acad098520a4eda094495c9827032857b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec96dc6eb590c0d19d755d17d35e2acad098520a4eda094495c9827032857b9->enter($__internal_2ec96dc6eb590c0d19d755d17d35e2acad098520a4eda094495c9827032857b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
    ";
        // line 9
        $context["vars"] = array("logged" => (isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")));
        // line 10
        echo "    ";
        $this->loadTemplate("secondary_templates/header.html.twig", ":default:index.html.twig", 10)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 11
        echo "    
";
        
        $__internal_2ec96dc6eb590c0d19d755d17d35e2acad098520a4eda094495c9827032857b9->leave($__internal_2ec96dc6eb590c0d19d755d17d35e2acad098520a4eda094495c9827032857b9_prof);

        
        $__internal_0d9a6ce51db585ebb8b931f2b88574ee303d1400f286728d08a67de2fdcb9bda->leave($__internal_0d9a6ce51db585ebb8b931f2b88574ee303d1400f286728d08a67de2fdcb9bda_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a3061a5f41d9458fe961de99bbb1b6dd8f0e511911035edbd71743762f157b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3061a5f41d9458fe961de99bbb1b6dd8f0e511911035edbd71743762f157b0->enter($__internal_5a3061a5f41d9458fe961de99bbb1b6dd8f0e511911035edbd71743762f157b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebc6d85c32bb18a3b53d4b24cb4eed7efe72d9d2c6aa19508e00692b2025f1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc6d85c32bb18a3b53d4b24cb4eed7efe72d9d2c6aa19508e00692b2025f1a6->enter($__internal_ebc6d85c32bb18a3b53d4b24cb4eed7efe72d9d2c6aa19508e00692b2025f1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    
    ";
        // line 16
        if (((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")) == false)) {
            // line 17
            echo "        
        ";
            // line 18
            $this->loadTemplate("terciary_templates/index-not-login.html.twig", ":default:index.html.twig", 18)->display($context);
            // line 19
            echo "        
    ";
        } else {
            // line 21
            echo "        
        ";
            // line 22
            $this->loadTemplate("terciary_templates/index-login.html.twig", ":default:index.html.twig", 22)->display(array_merge($context, array("javascripts" =>             $this->renderBlock("javascripts", $context, $blocks))));
            echo "   
        
    ";
        }
        // line 25
        echo "
";
        
        $__internal_ebc6d85c32bb18a3b53d4b24cb4eed7efe72d9d2c6aa19508e00692b2025f1a6->leave($__internal_ebc6d85c32bb18a3b53d4b24cb4eed7efe72d9d2c6aa19508e00692b2025f1a6_prof);

        
        $__internal_5a3061a5f41d9458fe961de99bbb1b6dd8f0e511911035edbd71743762f157b0->leave($__internal_5a3061a5f41d9458fe961de99bbb1b6dd8f0e511911035edbd71743762f157b0_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0fa96f53ce7b74f88e65dc445069c94f0744f88a31247a5dfd9e2c27be734b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa96f53ce7b74f88e65dc445069c94f0744f88a31247a5dfd9e2c27be734b5d->enter($__internal_0fa96f53ce7b74f88e65dc445069c94f0744f88a31247a5dfd9e2c27be734b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f97f9d3c0a5970338f05c6b254c3474af8d45537a2c1b5779bfe915bbea6b16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97f9d3c0a5970338f05c6b254c3474af8d45537a2c1b5779bfe915bbea6b16b->enter($__internal_f97f9d3c0a5970338f05c6b254c3474af8d45537a2c1b5779bfe915bbea6b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "
    ";
        // line 30
        $this->loadTemplate("secondary_templates/footer.html.twig", ":default:index.html.twig", 30)->display($context);
        // line 31
        echo "
";
        
        $__internal_f97f9d3c0a5970338f05c6b254c3474af8d45537a2c1b5779bfe915bbea6b16b->leave($__internal_f97f9d3c0a5970338f05c6b254c3474af8d45537a2c1b5779bfe915bbea6b16b_prof);

        
        $__internal_0fa96f53ce7b74f88e65dc445069c94f0744f88a31247a5dfd9e2c27be734b5d->leave($__internal_0fa96f53ce7b74f88e65dc445069c94f0744f88a31247a5dfd9e2c27be734b5d_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  131 => 30,  128 => 29,  119 => 28,  108 => 25,  102 => 22,  99 => 21,  95 => 19,  93 => 18,  90 => 17,  88 => 16,  85 => 15,  76 => 14,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  48 => 7,  38 => 1,  35 => 4,  33 => 3,  11 => 1,);
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
", ":default:index.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/index.html.twig");
    }
}

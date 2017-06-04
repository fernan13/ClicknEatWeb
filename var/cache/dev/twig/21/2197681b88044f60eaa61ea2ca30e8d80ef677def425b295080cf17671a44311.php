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
        $__internal_4bf24a032521f2d3401316b14464ffb3ff0663a583d2c9a536ba6c9272619de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf24a032521f2d3401316b14464ffb3ff0663a583d2c9a536ba6c9272619de8->enter($__internal_4bf24a032521f2d3401316b14464ffb3ff0663a583d2c9a536ba6c9272619de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_c922255d1f97dd920c1fd06a957014eb2be65cc6d2c809c85fc9794ad0d5c439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c922255d1f97dd920c1fd06a957014eb2be65cc6d2c809c85fc9794ad0d5c439->enter($__internal_c922255d1f97dd920c1fd06a957014eb2be65cc6d2c809c85fc9794ad0d5c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf24a032521f2d3401316b14464ffb3ff0663a583d2c9a536ba6c9272619de8->leave($__internal_4bf24a032521f2d3401316b14464ffb3ff0663a583d2c9a536ba6c9272619de8_prof);

        
        $__internal_c922255d1f97dd920c1fd06a957014eb2be65cc6d2c809c85fc9794ad0d5c439->leave($__internal_c922255d1f97dd920c1fd06a957014eb2be65cc6d2c809c85fc9794ad0d5c439_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_878aa522cd83c4f5fa8108aa1229405e787d84bbd58aad9a43ec97cbd9eaf5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878aa522cd83c4f5fa8108aa1229405e787d84bbd58aad9a43ec97cbd9eaf5f7->enter($__internal_878aa522cd83c4f5fa8108aa1229405e787d84bbd58aad9a43ec97cbd9eaf5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c9e85c0be8e04e00c06abf412b8f3e99835e1a33523255d5de739b27f3238025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e85c0be8e04e00c06abf412b8f3e99835e1a33523255d5de739b27f3238025->enter($__internal_c9e85c0be8e04e00c06abf412b8f3e99835e1a33523255d5de739b27f3238025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c9e85c0be8e04e00c06abf412b8f3e99835e1a33523255d5de739b27f3238025->leave($__internal_c9e85c0be8e04e00c06abf412b8f3e99835e1a33523255d5de739b27f3238025_prof);

        
        $__internal_878aa522cd83c4f5fa8108aa1229405e787d84bbd58aad9a43ec97cbd9eaf5f7->leave($__internal_878aa522cd83c4f5fa8108aa1229405e787d84bbd58aad9a43ec97cbd9eaf5f7_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4554529720fce38d379c5542065e8d2e947341ba3cd7ea54eba982e1d0bc172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4554529720fce38d379c5542065e8d2e947341ba3cd7ea54eba982e1d0bc172->enter($__internal_d4554529720fce38d379c5542065e8d2e947341ba3cd7ea54eba982e1d0bc172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d13de2a1ffdf6e95452bfee8676cdab18d6dabd77d85714de78a7b24b26c8287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13de2a1ffdf6e95452bfee8676cdab18d6dabd77d85714de78a7b24b26c8287->enter($__internal_d13de2a1ffdf6e95452bfee8676cdab18d6dabd77d85714de78a7b24b26c8287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d13de2a1ffdf6e95452bfee8676cdab18d6dabd77d85714de78a7b24b26c8287->leave($__internal_d13de2a1ffdf6e95452bfee8676cdab18d6dabd77d85714de78a7b24b26c8287_prof);

        
        $__internal_d4554529720fce38d379c5542065e8d2e947341ba3cd7ea54eba982e1d0bc172->leave($__internal_d4554529720fce38d379c5542065e8d2e947341ba3cd7ea54eba982e1d0bc172_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_99748c54c9f033da1e66a3fdee47c37da47f09e8158a2462712bb1637446fdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99748c54c9f033da1e66a3fdee47c37da47f09e8158a2462712bb1637446fdd4->enter($__internal_99748c54c9f033da1e66a3fdee47c37da47f09e8158a2462712bb1637446fdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_da6b576ea56b0ef179aca9dd6cee0946129b829ce9d66784319ac3d8703f7434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6b576ea56b0ef179aca9dd6cee0946129b829ce9d66784319ac3d8703f7434->enter($__internal_da6b576ea56b0ef179aca9dd6cee0946129b829ce9d66784319ac3d8703f7434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "
    ";
        // line 30
        $this->loadTemplate("secondary_templates/footer.html.twig", ":default:index.html.twig", 30)->display($context);
        // line 31
        echo "
";
        
        $__internal_da6b576ea56b0ef179aca9dd6cee0946129b829ce9d66784319ac3d8703f7434->leave($__internal_da6b576ea56b0ef179aca9dd6cee0946129b829ce9d66784319ac3d8703f7434_prof);

        
        $__internal_99748c54c9f033da1e66a3fdee47c37da47f09e8158a2462712bb1637446fdd4->leave($__internal_99748c54c9f033da1e66a3fdee47c37da47f09e8158a2462712bb1637446fdd4_prof);

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

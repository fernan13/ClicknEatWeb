<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42035d416b7ef6084f84bd5ef2bb2efc5eaa668891e0debaa8d41213bd6adb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9026d9519b36383ecb6a07008049be148b7b12f88fd59e0c8c84ed0bd85c219a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9026d9519b36383ecb6a07008049be148b7b12f88fd59e0c8c84ed0bd85c219a->enter($__internal_9026d9519b36383ecb6a07008049be148b7b12f88fd59e0c8c84ed0bd85c219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d8311d4e041610e654d83560abde1c3c3338ef668579abb0183e0970bebd3127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8311d4e041610e654d83560abde1c3c3338ef668579abb0183e0970bebd3127->enter($__internal_d8311d4e041610e654d83560abde1c3c3338ef668579abb0183e0970bebd3127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9026d9519b36383ecb6a07008049be148b7b12f88fd59e0c8c84ed0bd85c219a->leave($__internal_9026d9519b36383ecb6a07008049be148b7b12f88fd59e0c8c84ed0bd85c219a_prof);

        
        $__internal_d8311d4e041610e654d83560abde1c3c3338ef668579abb0183e0970bebd3127->leave($__internal_d8311d4e041610e654d83560abde1c3c3338ef668579abb0183e0970bebd3127_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfa823232a9c9ee25341f3f594f98476addc618b0c8d032f6f09be19633cab1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa823232a9c9ee25341f3f594f98476addc618b0c8d032f6f09be19633cab1b->enter($__internal_dfa823232a9c9ee25341f3f594f98476addc618b0c8d032f6f09be19633cab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0fc5c65e699376e8ac5e8fbc9b15991beb10fa2b566a3df97b2e20c78104189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc5c65e699376e8ac5e8fbc9b15991beb10fa2b566a3df97b2e20c78104189a->enter($__internal_0fc5c65e699376e8ac5e8fbc9b15991beb10fa2b566a3df97b2e20c78104189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0fc5c65e699376e8ac5e8fbc9b15991beb10fa2b566a3df97b2e20c78104189a->leave($__internal_0fc5c65e699376e8ac5e8fbc9b15991beb10fa2b566a3df97b2e20c78104189a_prof);

        
        $__internal_dfa823232a9c9ee25341f3f594f98476addc618b0c8d032f6f09be19633cab1b->leave($__internal_dfa823232a9c9ee25341f3f594f98476addc618b0c8d032f6f09be19633cab1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

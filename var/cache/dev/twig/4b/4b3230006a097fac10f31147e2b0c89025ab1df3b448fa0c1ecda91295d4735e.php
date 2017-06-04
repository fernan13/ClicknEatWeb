<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c7bc71e68157cd38550a36e2699ef46b12049c398a2d7bbaf7a32a97502054a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_97d5eaa4a1669ca41fac8a0438e6378e010ad0bce1b277047feb5abf95defe69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d5eaa4a1669ca41fac8a0438e6378e010ad0bce1b277047feb5abf95defe69->enter($__internal_97d5eaa4a1669ca41fac8a0438e6378e010ad0bce1b277047feb5abf95defe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_cee4860833ff530b084904bf48dc16745e632a7427cdec87d6139b92b03b1740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee4860833ff530b084904bf48dc16745e632a7427cdec87d6139b92b03b1740->enter($__internal_cee4860833ff530b084904bf48dc16745e632a7427cdec87d6139b92b03b1740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97d5eaa4a1669ca41fac8a0438e6378e010ad0bce1b277047feb5abf95defe69->leave($__internal_97d5eaa4a1669ca41fac8a0438e6378e010ad0bce1b277047feb5abf95defe69_prof);

        
        $__internal_cee4860833ff530b084904bf48dc16745e632a7427cdec87d6139b92b03b1740->leave($__internal_cee4860833ff530b084904bf48dc16745e632a7427cdec87d6139b92b03b1740_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_893b0391da08254e4f19695665f46f8b4d2723c5394c60eea59b6128554baa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893b0391da08254e4f19695665f46f8b4d2723c5394c60eea59b6128554baa6d->enter($__internal_893b0391da08254e4f19695665f46f8b4d2723c5394c60eea59b6128554baa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e96afaf494a6cd7127c47fcfd4a54f16dd5c8b385bf5091c47fccf7608cfd2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96afaf494a6cd7127c47fcfd4a54f16dd5c8b385bf5091c47fccf7608cfd2e9->enter($__internal_e96afaf494a6cd7127c47fcfd4a54f16dd5c8b385bf5091c47fccf7608cfd2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e96afaf494a6cd7127c47fcfd4a54f16dd5c8b385bf5091c47fccf7608cfd2e9->leave($__internal_e96afaf494a6cd7127c47fcfd4a54f16dd5c8b385bf5091c47fccf7608cfd2e9_prof);

        
        $__internal_893b0391da08254e4f19695665f46f8b4d2723c5394c60eea59b6128554baa6d->leave($__internal_893b0391da08254e4f19695665f46f8b4d2723c5394c60eea59b6128554baa6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

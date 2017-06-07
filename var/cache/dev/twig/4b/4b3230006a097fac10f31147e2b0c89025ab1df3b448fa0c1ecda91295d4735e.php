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
        $__internal_59af32dfebd7619fffb11bea5e279b409070bb6c6375363db24e87d6269470b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59af32dfebd7619fffb11bea5e279b409070bb6c6375363db24e87d6269470b4->enter($__internal_59af32dfebd7619fffb11bea5e279b409070bb6c6375363db24e87d6269470b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9afe03e01182edfa50463f79793c42234d305ba0136bccf141e9d28f7b8e8698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe03e01182edfa50463f79793c42234d305ba0136bccf141e9d28f7b8e8698->enter($__internal_9afe03e01182edfa50463f79793c42234d305ba0136bccf141e9d28f7b8e8698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59af32dfebd7619fffb11bea5e279b409070bb6c6375363db24e87d6269470b4->leave($__internal_59af32dfebd7619fffb11bea5e279b409070bb6c6375363db24e87d6269470b4_prof);

        
        $__internal_9afe03e01182edfa50463f79793c42234d305ba0136bccf141e9d28f7b8e8698->leave($__internal_9afe03e01182edfa50463f79793c42234d305ba0136bccf141e9d28f7b8e8698_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74b764bcf58890cbac53e20b0592a8b00b195d3bd7053385a9f7281db05c761a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b764bcf58890cbac53e20b0592a8b00b195d3bd7053385a9f7281db05c761a->enter($__internal_74b764bcf58890cbac53e20b0592a8b00b195d3bd7053385a9f7281db05c761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f1ab8a1caa667bfb8ba055e9f4b51301f7dc32b644954ee9638305e1d9544c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1ab8a1caa667bfb8ba055e9f4b51301f7dc32b644954ee9638305e1d9544c5->enter($__internal_3f1ab8a1caa667bfb8ba055e9f4b51301f7dc32b644954ee9638305e1d9544c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3f1ab8a1caa667bfb8ba055e9f4b51301f7dc32b644954ee9638305e1d9544c5->leave($__internal_3f1ab8a1caa667bfb8ba055e9f4b51301f7dc32b644954ee9638305e1d9544c5_prof);

        
        $__internal_74b764bcf58890cbac53e20b0592a8b00b195d3bd7053385a9f7281db05c761a->leave($__internal_74b764bcf58890cbac53e20b0592a8b00b195d3bd7053385a9f7281db05c761a_prof);

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

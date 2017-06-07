<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d395795fa96b67468d67a1c0adf722ac7be0783d9075af1103a42a6d63742ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_dd54902139c1ea458fcb9dd5e030cf40922a4fae828c182f146970b5ea91f06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd54902139c1ea458fcb9dd5e030cf40922a4fae828c182f146970b5ea91f06f->enter($__internal_dd54902139c1ea458fcb9dd5e030cf40922a4fae828c182f146970b5ea91f06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f713d28d25df483eeb487a5ca3339796c12d8e9e640693e7c7fc787adafd6c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f713d28d25df483eeb487a5ca3339796c12d8e9e640693e7c7fc787adafd6c88->enter($__internal_f713d28d25df483eeb487a5ca3339796c12d8e9e640693e7c7fc787adafd6c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd54902139c1ea458fcb9dd5e030cf40922a4fae828c182f146970b5ea91f06f->leave($__internal_dd54902139c1ea458fcb9dd5e030cf40922a4fae828c182f146970b5ea91f06f_prof);

        
        $__internal_f713d28d25df483eeb487a5ca3339796c12d8e9e640693e7c7fc787adafd6c88->leave($__internal_f713d28d25df483eeb487a5ca3339796c12d8e9e640693e7c7fc787adafd6c88_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3811ca9024c150113ded9e314501071627ab9d18ec04d905d3765797b07f9e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3811ca9024c150113ded9e314501071627ab9d18ec04d905d3765797b07f9e93->enter($__internal_3811ca9024c150113ded9e314501071627ab9d18ec04d905d3765797b07f9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10c08860d2a085e27fdac15e879905f5d14ed466edf9ac89edf91feb0b285434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c08860d2a085e27fdac15e879905f5d14ed466edf9ac89edf91feb0b285434->enter($__internal_10c08860d2a085e27fdac15e879905f5d14ed466edf9ac89edf91feb0b285434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_10c08860d2a085e27fdac15e879905f5d14ed466edf9ac89edf91feb0b285434->leave($__internal_10c08860d2a085e27fdac15e879905f5d14ed466edf9ac89edf91feb0b285434_prof);

        
        $__internal_3811ca9024c150113ded9e314501071627ab9d18ec04d905d3765797b07f9e93->leave($__internal_3811ca9024c150113ded9e314501071627ab9d18ec04d905d3765797b07f9e93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

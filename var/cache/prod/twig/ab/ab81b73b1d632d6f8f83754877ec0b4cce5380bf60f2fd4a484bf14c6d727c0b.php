<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b8760315caaef61a2dadac3ad017da0ecfa8b67713fa91fc656e66ffc3ee7436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_75eb89461846b9fade8a230875740735ec83bcbe66eb4ba3a7a9fcee59343a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75eb89461846b9fade8a230875740735ec83bcbe66eb4ba3a7a9fcee59343a25->enter($__internal_75eb89461846b9fade8a230875740735ec83bcbe66eb4ba3a7a9fcee59343a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75eb89461846b9fade8a230875740735ec83bcbe66eb4ba3a7a9fcee59343a25->leave($__internal_75eb89461846b9fade8a230875740735ec83bcbe66eb4ba3a7a9fcee59343a25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c449a9ca62239a548146e05ee5f460923776b552e928c2a21a4d07441acec3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c449a9ca62239a548146e05ee5f460923776b552e928c2a21a4d07441acec3bd->enter($__internal_c449a9ca62239a548146e05ee5f460923776b552e928c2a21a4d07441acec3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c449a9ca62239a548146e05ee5f460923776b552e928c2a21a4d07441acec3bd->leave($__internal_c449a9ca62239a548146e05ee5f460923776b552e928c2a21a4d07441acec3bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

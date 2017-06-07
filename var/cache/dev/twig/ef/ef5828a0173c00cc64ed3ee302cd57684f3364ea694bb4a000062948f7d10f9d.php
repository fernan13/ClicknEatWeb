<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_dcb12bebdf6a90d4ffad085960545a8c67f5de698c1437d11ca135d7e0c5f8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e84fef993ed37daa07271a3321d84968bbfe91725a0af2f320d37881f31e8bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84fef993ed37daa07271a3321d84968bbfe91725a0af2f320d37881f31e8bb5->enter($__internal_e84fef993ed37daa07271a3321d84968bbfe91725a0af2f320d37881f31e8bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3a5e175578a55ad4ada55cf9196894ffdb42242f190fc5244e6e5a38051896a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5e175578a55ad4ada55cf9196894ffdb42242f190fc5244e6e5a38051896a9->enter($__internal_3a5e175578a55ad4ada55cf9196894ffdb42242f190fc5244e6e5a38051896a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84fef993ed37daa07271a3321d84968bbfe91725a0af2f320d37881f31e8bb5->leave($__internal_e84fef993ed37daa07271a3321d84968bbfe91725a0af2f320d37881f31e8bb5_prof);

        
        $__internal_3a5e175578a55ad4ada55cf9196894ffdb42242f190fc5244e6e5a38051896a9->leave($__internal_3a5e175578a55ad4ada55cf9196894ffdb42242f190fc5244e6e5a38051896a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32b7adbc446d1b5d9c625079f204b0b8b024c3a3f75847ed7265d87530ab32e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b7adbc446d1b5d9c625079f204b0b8b024c3a3f75847ed7265d87530ab32e5->enter($__internal_32b7adbc446d1b5d9c625079f204b0b8b024c3a3f75847ed7265d87530ab32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e75be2edfaaaa994bb2b4803024a6c2aa5f96be04e65a7630af9dbda792bdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e75be2edfaaaa994bb2b4803024a6c2aa5f96be04e65a7630af9dbda792bdfb->enter($__internal_8e75be2edfaaaa994bb2b4803024a6c2aa5f96be04e65a7630af9dbda792bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8e75be2edfaaaa994bb2b4803024a6c2aa5f96be04e65a7630af9dbda792bdfb->leave($__internal_8e75be2edfaaaa994bb2b4803024a6c2aa5f96be04e65a7630af9dbda792bdfb_prof);

        
        $__internal_32b7adbc446d1b5d9c625079f204b0b8b024c3a3f75847ed7265d87530ab32e5->leave($__internal_32b7adbc446d1b5d9c625079f204b0b8b024c3a3f75847ed7265d87530ab32e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}

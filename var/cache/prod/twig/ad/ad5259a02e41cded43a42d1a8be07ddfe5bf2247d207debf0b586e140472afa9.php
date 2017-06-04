<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ef8a1849b59c145c8d1650be2f12540d1578debcc63e3973d941081a15dcb308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_4d4c2f674357946efe640e36b74259d1c96c5b2b593e7ceb9eceef36d8d1b79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4c2f674357946efe640e36b74259d1c96c5b2b593e7ceb9eceef36d8d1b79a->enter($__internal_4d4c2f674357946efe640e36b74259d1c96c5b2b593e7ceb9eceef36d8d1b79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4c2f674357946efe640e36b74259d1c96c5b2b593e7ceb9eceef36d8d1b79a->leave($__internal_4d4c2f674357946efe640e36b74259d1c96c5b2b593e7ceb9eceef36d8d1b79a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c67aaa77766797759eb1a1147039aa3ae51207064c4f58b39ac34c71f7c65f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67aaa77766797759eb1a1147039aa3ae51207064c4f58b39ac34c71f7c65f5d->enter($__internal_c67aaa77766797759eb1a1147039aa3ae51207064c4f58b39ac34c71f7c65f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c67aaa77766797759eb1a1147039aa3ae51207064c4f58b39ac34c71f7c65f5d->leave($__internal_c67aaa77766797759eb1a1147039aa3ae51207064c4f58b39ac34c71f7c65f5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

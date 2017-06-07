<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_43c655bb5b65fbf2188f8554416da9e73e104245d103692d598d7ab73fc8d40f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5afc365ba8ad944d151c0db17242e9847fff12a7219be8abd588f9e88360e1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afc365ba8ad944d151c0db17242e9847fff12a7219be8abd588f9e88360e1c8->enter($__internal_5afc365ba8ad944d151c0db17242e9847fff12a7219be8abd588f9e88360e1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_023c8312d70daf4becda7ea97856beeeebb262971c865f84b94be3722ff0896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023c8312d70daf4becda7ea97856beeeebb262971c865f84b94be3722ff0896d->enter($__internal_023c8312d70daf4becda7ea97856beeeebb262971c865f84b94be3722ff0896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5afc365ba8ad944d151c0db17242e9847fff12a7219be8abd588f9e88360e1c8->leave($__internal_5afc365ba8ad944d151c0db17242e9847fff12a7219be8abd588f9e88360e1c8_prof);

        
        $__internal_023c8312d70daf4becda7ea97856beeeebb262971c865f84b94be3722ff0896d->leave($__internal_023c8312d70daf4becda7ea97856beeeebb262971c865f84b94be3722ff0896d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfbb0fa40fd5a4b26d2259d88136f1010bebfb8f190bb347930f825c0b14fdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbb0fa40fd5a4b26d2259d88136f1010bebfb8f190bb347930f825c0b14fdef->enter($__internal_dfbb0fa40fd5a4b26d2259d88136f1010bebfb8f190bb347930f825c0b14fdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79a80578b44ebb562d7c239e3703c84fbc46485799b5632232f2e0d2eb14591c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a80578b44ebb562d7c239e3703c84fbc46485799b5632232f2e0d2eb14591c->enter($__internal_79a80578b44ebb562d7c239e3703c84fbc46485799b5632232f2e0d2eb14591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_79a80578b44ebb562d7c239e3703c84fbc46485799b5632232f2e0d2eb14591c->leave($__internal_79a80578b44ebb562d7c239e3703c84fbc46485799b5632232f2e0d2eb14591c_prof);

        
        $__internal_dfbb0fa40fd5a4b26d2259d88136f1010bebfb8f190bb347930f825c0b14fdef->leave($__internal_dfbb0fa40fd5a4b26d2259d88136f1010bebfb8f190bb347930f825c0b14fdef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}

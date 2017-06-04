<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2addac63f012365bd882a81f923f869226f093e337241eee5b3fe47f87f79610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a2a2da53bae69e3ae518541faf47721b5644c086cd1406571fb78eeeb0fad63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a2da53bae69e3ae518541faf47721b5644c086cd1406571fb78eeeb0fad63c->enter($__internal_a2a2da53bae69e3ae518541faf47721b5644c086cd1406571fb78eeeb0fad63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_50fa90a478797da2d204dc43f4abd728d02a3c35805896e3c748afefd3238e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fa90a478797da2d204dc43f4abd728d02a3c35805896e3c748afefd3238e01->enter($__internal_50fa90a478797da2d204dc43f4abd728d02a3c35805896e3c748afefd3238e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a2da53bae69e3ae518541faf47721b5644c086cd1406571fb78eeeb0fad63c->leave($__internal_a2a2da53bae69e3ae518541faf47721b5644c086cd1406571fb78eeeb0fad63c_prof);

        
        $__internal_50fa90a478797da2d204dc43f4abd728d02a3c35805896e3c748afefd3238e01->leave($__internal_50fa90a478797da2d204dc43f4abd728d02a3c35805896e3c748afefd3238e01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d66ffba365f89c42e90b4cf0da0b13eb988de52ba7aff206d43b8da422a26a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66ffba365f89c42e90b4cf0da0b13eb988de52ba7aff206d43b8da422a26a71->enter($__internal_d66ffba365f89c42e90b4cf0da0b13eb988de52ba7aff206d43b8da422a26a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5000d3c3cca20d60f890ce8447d6117c1b35f8350791d6f154337d849e43cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5000d3c3cca20d60f890ce8447d6117c1b35f8350791d6f154337d849e43cd3->enter($__internal_f5000d3c3cca20d60f890ce8447d6117c1b35f8350791d6f154337d849e43cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f5000d3c3cca20d60f890ce8447d6117c1b35f8350791d6f154337d849e43cd3->leave($__internal_f5000d3c3cca20d60f890ce8447d6117c1b35f8350791d6f154337d849e43cd3_prof);

        
        $__internal_d66ffba365f89c42e90b4cf0da0b13eb988de52ba7aff206d43b8da422a26a71->leave($__internal_d66ffba365f89c42e90b4cf0da0b13eb988de52ba7aff206d43b8da422a26a71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_45169b85945e8b76cd672787f7ed6057c0a3a71f885f76ecd318d24e1ccaacf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3ecc8be87bf7faa8bd176dbe365df49ca621e6a14966d6033da1e9de8815ddc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecc8be87bf7faa8bd176dbe365df49ca621e6a14966d6033da1e9de8815ddc7->enter($__internal_3ecc8be87bf7faa8bd176dbe365df49ca621e6a14966d6033da1e9de8815ddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_21bb65de1f767d0f15e336bbddacc692daaa2ce98024f5fe2fec7d7df9f2f8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bb65de1f767d0f15e336bbddacc692daaa2ce98024f5fe2fec7d7df9f2f8b9->enter($__internal_21bb65de1f767d0f15e336bbddacc692daaa2ce98024f5fe2fec7d7df9f2f8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ecc8be87bf7faa8bd176dbe365df49ca621e6a14966d6033da1e9de8815ddc7->leave($__internal_3ecc8be87bf7faa8bd176dbe365df49ca621e6a14966d6033da1e9de8815ddc7_prof);

        
        $__internal_21bb65de1f767d0f15e336bbddacc692daaa2ce98024f5fe2fec7d7df9f2f8b9->leave($__internal_21bb65de1f767d0f15e336bbddacc692daaa2ce98024f5fe2fec7d7df9f2f8b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05decb135b7d8db55cc2397fbba3d2e22229383ce32a661bc3b0ac8d0a17c8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05decb135b7d8db55cc2397fbba3d2e22229383ce32a661bc3b0ac8d0a17c8fc->enter($__internal_05decb135b7d8db55cc2397fbba3d2e22229383ce32a661bc3b0ac8d0a17c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d793175c15d0ac2bb7cc220b6900c5c067a818db46168e829a0b74c99b10d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d793175c15d0ac2bb7cc220b6900c5c067a818db46168e829a0b74c99b10d5f->enter($__internal_7d793175c15d0ac2bb7cc220b6900c5c067a818db46168e829a0b74c99b10d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7d793175c15d0ac2bb7cc220b6900c5c067a818db46168e829a0b74c99b10d5f->leave($__internal_7d793175c15d0ac2bb7cc220b6900c5c067a818db46168e829a0b74c99b10d5f_prof);

        
        $__internal_05decb135b7d8db55cc2397fbba3d2e22229383ce32a661bc3b0ac8d0a17c8fc->leave($__internal_05decb135b7d8db55cc2397fbba3d2e22229383ce32a661bc3b0ac8d0a17c8fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

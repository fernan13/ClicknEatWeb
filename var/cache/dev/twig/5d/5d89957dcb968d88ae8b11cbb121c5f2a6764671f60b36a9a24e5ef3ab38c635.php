<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d37ba1e6600d14b588a3a0263539b0b27a5064b05f2aeb899ce4a3a9280a9c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b27c9172486784f5112b62d36a9cd179a2a69cc1a101207a872e18989974b621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27c9172486784f5112b62d36a9cd179a2a69cc1a101207a872e18989974b621->enter($__internal_b27c9172486784f5112b62d36a9cd179a2a69cc1a101207a872e18989974b621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f8e4129606b8b7c2f18b91973bb3c513c2a5946805f97c067f9946a2bd5c3d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e4129606b8b7c2f18b91973bb3c513c2a5946805f97c067f9946a2bd5c3d1e->enter($__internal_f8e4129606b8b7c2f18b91973bb3c513c2a5946805f97c067f9946a2bd5c3d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27c9172486784f5112b62d36a9cd179a2a69cc1a101207a872e18989974b621->leave($__internal_b27c9172486784f5112b62d36a9cd179a2a69cc1a101207a872e18989974b621_prof);

        
        $__internal_f8e4129606b8b7c2f18b91973bb3c513c2a5946805f97c067f9946a2bd5c3d1e->leave($__internal_f8e4129606b8b7c2f18b91973bb3c513c2a5946805f97c067f9946a2bd5c3d1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2d47d84d11bf7d6f8db34badeda1f9429c2373f404e1ddbbb8bfd9de05cb6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d47d84d11bf7d6f8db34badeda1f9429c2373f404e1ddbbb8bfd9de05cb6ec->enter($__internal_d2d47d84d11bf7d6f8db34badeda1f9429c2373f404e1ddbbb8bfd9de05cb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_653db7925421e5fc33561ac0e7f44b291a41f3766f6d163284a8c6950ef8e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653db7925421e5fc33561ac0e7f44b291a41f3766f6d163284a8c6950ef8e983->enter($__internal_653db7925421e5fc33561ac0e7f44b291a41f3766f6d163284a8c6950ef8e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_653db7925421e5fc33561ac0e7f44b291a41f3766f6d163284a8c6950ef8e983->leave($__internal_653db7925421e5fc33561ac0e7f44b291a41f3766f6d163284a8c6950ef8e983_prof);

        
        $__internal_d2d47d84d11bf7d6f8db34badeda1f9429c2373f404e1ddbbb8bfd9de05cb6ec->leave($__internal_d2d47d84d11bf7d6f8db34badeda1f9429c2373f404e1ddbbb8bfd9de05cb6ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}

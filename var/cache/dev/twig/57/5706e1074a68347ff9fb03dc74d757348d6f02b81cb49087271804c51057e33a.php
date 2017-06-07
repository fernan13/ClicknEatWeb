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
        $__internal_f7c6ed3e8ead5ae8829ade605885ef33aaca2f0b0dfb7087e73b5cd4fd9a8b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c6ed3e8ead5ae8829ade605885ef33aaca2f0b0dfb7087e73b5cd4fd9a8b8c->enter($__internal_f7c6ed3e8ead5ae8829ade605885ef33aaca2f0b0dfb7087e73b5cd4fd9a8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_79cdcbc09bf22418f645f2d62b41d6c88add1b959b4017c417205d4c530637a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cdcbc09bf22418f645f2d62b41d6c88add1b959b4017c417205d4c530637a1->enter($__internal_79cdcbc09bf22418f645f2d62b41d6c88add1b959b4017c417205d4c530637a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c6ed3e8ead5ae8829ade605885ef33aaca2f0b0dfb7087e73b5cd4fd9a8b8c->leave($__internal_f7c6ed3e8ead5ae8829ade605885ef33aaca2f0b0dfb7087e73b5cd4fd9a8b8c_prof);

        
        $__internal_79cdcbc09bf22418f645f2d62b41d6c88add1b959b4017c417205d4c530637a1->leave($__internal_79cdcbc09bf22418f645f2d62b41d6c88add1b959b4017c417205d4c530637a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b85e3faee28d8d86b4288d1392e5dde279c416c83ab7ac11a43983b99a1629e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b85e3faee28d8d86b4288d1392e5dde279c416c83ab7ac11a43983b99a1629e->enter($__internal_1b85e3faee28d8d86b4288d1392e5dde279c416c83ab7ac11a43983b99a1629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_906e3313fb0b6cd1bb663f273df3764c030f216632df0dbfb44a2162b16d2a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906e3313fb0b6cd1bb663f273df3764c030f216632df0dbfb44a2162b16d2a83->enter($__internal_906e3313fb0b6cd1bb663f273df3764c030f216632df0dbfb44a2162b16d2a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_906e3313fb0b6cd1bb663f273df3764c030f216632df0dbfb44a2162b16d2a83->leave($__internal_906e3313fb0b6cd1bb663f273df3764c030f216632df0dbfb44a2162b16d2a83_prof);

        
        $__internal_1b85e3faee28d8d86b4288d1392e5dde279c416c83ab7ac11a43983b99a1629e->leave($__internal_1b85e3faee28d8d86b4288d1392e5dde279c416c83ab7ac11a43983b99a1629e_prof);

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

<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_552cd574cc59826c55522676d2808967edfb83c79ca6c83fdb97bfa8ba3823fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e4dbd48dc063abce99cfd30bd2506d82d00c76ccc34fd89951ab3259eed37ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dbd48dc063abce99cfd30bd2506d82d00c76ccc34fd89951ab3259eed37ab6->enter($__internal_e4dbd48dc063abce99cfd30bd2506d82d00c76ccc34fd89951ab3259eed37ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_2169d0c4363da8e314b29617df746c62e3df427e1fa4b29c8af2ef7f0170902d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2169d0c4363da8e314b29617df746c62e3df427e1fa4b29c8af2ef7f0170902d->enter($__internal_2169d0c4363da8e314b29617df746c62e3df427e1fa4b29c8af2ef7f0170902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4dbd48dc063abce99cfd30bd2506d82d00c76ccc34fd89951ab3259eed37ab6->leave($__internal_e4dbd48dc063abce99cfd30bd2506d82d00c76ccc34fd89951ab3259eed37ab6_prof);

        
        $__internal_2169d0c4363da8e314b29617df746c62e3df427e1fa4b29c8af2ef7f0170902d->leave($__internal_2169d0c4363da8e314b29617df746c62e3df427e1fa4b29c8af2ef7f0170902d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8b3292aa9b765afec23828a2f0b907ce5bee3c56a763d2874408828368cf75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b3292aa9b765afec23828a2f0b907ce5bee3c56a763d2874408828368cf75a->enter($__internal_c8b3292aa9b765afec23828a2f0b907ce5bee3c56a763d2874408828368cf75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21c46f398f893250a75191b01ea9cb7589aaddedb93c64c30a6d7263b04aa24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c46f398f893250a75191b01ea9cb7589aaddedb93c64c30a6d7263b04aa24e->enter($__internal_21c46f398f893250a75191b01ea9cb7589aaddedb93c64c30a6d7263b04aa24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_21c46f398f893250a75191b01ea9cb7589aaddedb93c64c30a6d7263b04aa24e->leave($__internal_21c46f398f893250a75191b01ea9cb7589aaddedb93c64c30a6d7263b04aa24e_prof);

        
        $__internal_c8b3292aa9b765afec23828a2f0b907ce5bee3c56a763d2874408828368cf75a->leave($__internal_c8b3292aa9b765afec23828a2f0b907ce5bee3c56a763d2874408828368cf75a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}

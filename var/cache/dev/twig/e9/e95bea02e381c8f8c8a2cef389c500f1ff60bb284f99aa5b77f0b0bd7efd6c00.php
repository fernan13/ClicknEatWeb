<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42035d416b7ef6084f84bd5ef2bb2efc5eaa668891e0debaa8d41213bd6adb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0c6b8d571ff9625ab636df394a9db1b4df2d4c4c847ff08d1480230c9f326bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6b8d571ff9625ab636df394a9db1b4df2d4c4c847ff08d1480230c9f326bf9->enter($__internal_0c6b8d571ff9625ab636df394a9db1b4df2d4c4c847ff08d1480230c9f326bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_a0d8d942684125601db101d6be915da4c30e2633137e25a67c42dbf1a4131fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d8d942684125601db101d6be915da4c30e2633137e25a67c42dbf1a4131fe0->enter($__internal_a0d8d942684125601db101d6be915da4c30e2633137e25a67c42dbf1a4131fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6b8d571ff9625ab636df394a9db1b4df2d4c4c847ff08d1480230c9f326bf9->leave($__internal_0c6b8d571ff9625ab636df394a9db1b4df2d4c4c847ff08d1480230c9f326bf9_prof);

        
        $__internal_a0d8d942684125601db101d6be915da4c30e2633137e25a67c42dbf1a4131fe0->leave($__internal_a0d8d942684125601db101d6be915da4c30e2633137e25a67c42dbf1a4131fe0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1409c8888fce58d068840d1fda5df245dac493fb055f2668899d179c7137fece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1409c8888fce58d068840d1fda5df245dac493fb055f2668899d179c7137fece->enter($__internal_1409c8888fce58d068840d1fda5df245dac493fb055f2668899d179c7137fece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef9c65aead0f941cf0e6efc3b558214b3c8a1ac71b07b8b16b7d5e6221eecc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9c65aead0f941cf0e6efc3b558214b3c8a1ac71b07b8b16b7d5e6221eecc3b->enter($__internal_ef9c65aead0f941cf0e6efc3b558214b3c8a1ac71b07b8b16b7d5e6221eecc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ef9c65aead0f941cf0e6efc3b558214b3c8a1ac71b07b8b16b7d5e6221eecc3b->leave($__internal_ef9c65aead0f941cf0e6efc3b558214b3c8a1ac71b07b8b16b7d5e6221eecc3b_prof);

        
        $__internal_1409c8888fce58d068840d1fda5df245dac493fb055f2668899d179c7137fece->leave($__internal_1409c8888fce58d068840d1fda5df245dac493fb055f2668899d179c7137fece_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

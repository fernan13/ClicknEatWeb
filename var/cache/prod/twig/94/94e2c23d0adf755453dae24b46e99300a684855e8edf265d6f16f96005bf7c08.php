<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_1cdff8a68e489feb06108bfee47ad4976c78b8e7592adb2325f0dac1b3c2616b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_276f513ce0b7027205da29c784a2c4831c6cf61b1507ec6121e7a6842dd55786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276f513ce0b7027205da29c784a2c4831c6cf61b1507ec6121e7a6842dd55786->enter($__internal_276f513ce0b7027205da29c784a2c4831c6cf61b1507ec6121e7a6842dd55786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276f513ce0b7027205da29c784a2c4831c6cf61b1507ec6121e7a6842dd55786->leave($__internal_276f513ce0b7027205da29c784a2c4831c6cf61b1507ec6121e7a6842dd55786_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5ab13a6be3453faa6b638ac28b389f19447f9dec90d4be5f253dd4eefc970d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ab13a6be3453faa6b638ac28b389f19447f9dec90d4be5f253dd4eefc970d7->enter($__internal_e5ab13a6be3453faa6b638ac28b389f19447f9dec90d4be5f253dd4eefc970d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e5ab13a6be3453faa6b638ac28b389f19447f9dec90d4be5f253dd4eefc970d7->leave($__internal_e5ab13a6be3453faa6b638ac28b389f19447f9dec90d4be5f253dd4eefc970d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

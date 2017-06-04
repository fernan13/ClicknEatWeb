<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_97f1cfdb6e440715039ccad550dcdb6c0d25af5a0cdf5176160b802ed6a4fe67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_231063c5ee4d2debc4d6df1f561389989ad4b21e8a91a675ed6701d249be01ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231063c5ee4d2debc4d6df1f561389989ad4b21e8a91a675ed6701d249be01ca->enter($__internal_231063c5ee4d2debc4d6df1f561389989ad4b21e8a91a675ed6701d249be01ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_fe964d5843c120e6b2ae272bdb90abbb8d43484a747265bd614546b846798c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe964d5843c120e6b2ae272bdb90abbb8d43484a747265bd614546b846798c42->enter($__internal_fe964d5843c120e6b2ae272bdb90abbb8d43484a747265bd614546b846798c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231063c5ee4d2debc4d6df1f561389989ad4b21e8a91a675ed6701d249be01ca->leave($__internal_231063c5ee4d2debc4d6df1f561389989ad4b21e8a91a675ed6701d249be01ca_prof);

        
        $__internal_fe964d5843c120e6b2ae272bdb90abbb8d43484a747265bd614546b846798c42->leave($__internal_fe964d5843c120e6b2ae272bdb90abbb8d43484a747265bd614546b846798c42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db9b4cd62ecd0f4abf889edc3a4ae38e1eebc62d13e16a0880f6a16a7d19bb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9b4cd62ecd0f4abf889edc3a4ae38e1eebc62d13e16a0880f6a16a7d19bb13->enter($__internal_db9b4cd62ecd0f4abf889edc3a4ae38e1eebc62d13e16a0880f6a16a7d19bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95c9e13d5f524c9ff484b5430d98663d4aeb87f6b0a831e5596813c240d760db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c9e13d5f524c9ff484b5430d98663d4aeb87f6b0a831e5596813c240d760db->enter($__internal_95c9e13d5f524c9ff484b5430d98663d4aeb87f6b0a831e5596813c240d760db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_95c9e13d5f524c9ff484b5430d98663d4aeb87f6b0a831e5596813c240d760db->leave($__internal_95c9e13d5f524c9ff484b5430d98663d4aeb87f6b0a831e5596813c240d760db_prof);

        
        $__internal_db9b4cd62ecd0f4abf889edc3a4ae38e1eebc62d13e16a0880f6a16a7d19bb13->leave($__internal_db9b4cd62ecd0f4abf889edc3a4ae38e1eebc62d13e16a0880f6a16a7d19bb13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

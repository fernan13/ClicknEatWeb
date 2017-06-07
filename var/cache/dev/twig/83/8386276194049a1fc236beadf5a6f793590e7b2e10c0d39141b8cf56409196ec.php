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
        $__internal_ea217e733c8174a807f8ee1c57087c973bb6e9c1fe1d01cacb040b2b565c3e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea217e733c8174a807f8ee1c57087c973bb6e9c1fe1d01cacb040b2b565c3e66->enter($__internal_ea217e733c8174a807f8ee1c57087c973bb6e9c1fe1d01cacb040b2b565c3e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c098c204612575ce036f3c650df5310acfaa32c52942e076d85cbcbd92245a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c098c204612575ce036f3c650df5310acfaa32c52942e076d85cbcbd92245a09->enter($__internal_c098c204612575ce036f3c650df5310acfaa32c52942e076d85cbcbd92245a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea217e733c8174a807f8ee1c57087c973bb6e9c1fe1d01cacb040b2b565c3e66->leave($__internal_ea217e733c8174a807f8ee1c57087c973bb6e9c1fe1d01cacb040b2b565c3e66_prof);

        
        $__internal_c098c204612575ce036f3c650df5310acfaa32c52942e076d85cbcbd92245a09->leave($__internal_c098c204612575ce036f3c650df5310acfaa32c52942e076d85cbcbd92245a09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6eac7993e71198cf56ede897eea2d8f9136efcac2bd5f3d2393153415af8e6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eac7993e71198cf56ede897eea2d8f9136efcac2bd5f3d2393153415af8e6ea->enter($__internal_6eac7993e71198cf56ede897eea2d8f9136efcac2bd5f3d2393153415af8e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b402b0e9b28f66258c21c125d4da4b3efea8165b67b60ffaa1c4901e1e735b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b402b0e9b28f66258c21c125d4da4b3efea8165b67b60ffaa1c4901e1e735b2c->enter($__internal_b402b0e9b28f66258c21c125d4da4b3efea8165b67b60ffaa1c4901e1e735b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b402b0e9b28f66258c21c125d4da4b3efea8165b67b60ffaa1c4901e1e735b2c->leave($__internal_b402b0e9b28f66258c21c125d4da4b3efea8165b67b60ffaa1c4901e1e735b2c_prof);

        
        $__internal_6eac7993e71198cf56ede897eea2d8f9136efcac2bd5f3d2393153415af8e6ea->leave($__internal_6eac7993e71198cf56ede897eea2d8f9136efcac2bd5f3d2393153415af8e6ea_prof);

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

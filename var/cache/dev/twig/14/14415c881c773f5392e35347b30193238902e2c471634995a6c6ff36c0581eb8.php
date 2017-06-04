<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_485278849caeb31f471f79321bd41875705d662b1a4e373122dceb22a4332abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b5a9fad39bc64f7cba055e4ad36f520161b97452175d1759b9aecdea6eb969b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a9fad39bc64f7cba055e4ad36f520161b97452175d1759b9aecdea6eb969b9->enter($__internal_b5a9fad39bc64f7cba055e4ad36f520161b97452175d1759b9aecdea6eb969b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8717d336ce8d33a9fa43020877434f49d4ac4c694da95132f71ec709942cc554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8717d336ce8d33a9fa43020877434f49d4ac4c694da95132f71ec709942cc554->enter($__internal_8717d336ce8d33a9fa43020877434f49d4ac4c694da95132f71ec709942cc554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a9fad39bc64f7cba055e4ad36f520161b97452175d1759b9aecdea6eb969b9->leave($__internal_b5a9fad39bc64f7cba055e4ad36f520161b97452175d1759b9aecdea6eb969b9_prof);

        
        $__internal_8717d336ce8d33a9fa43020877434f49d4ac4c694da95132f71ec709942cc554->leave($__internal_8717d336ce8d33a9fa43020877434f49d4ac4c694da95132f71ec709942cc554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1c78101e53faa6d236cb2af4596679fbd4acab69739011cd5bc7b6d53d6271e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c78101e53faa6d236cb2af4596679fbd4acab69739011cd5bc7b6d53d6271e->enter($__internal_f1c78101e53faa6d236cb2af4596679fbd4acab69739011cd5bc7b6d53d6271e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a111bef4d1d42150ecc72959273770986566157dd90623a73ff7fe1563a26e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a111bef4d1d42150ecc72959273770986566157dd90623a73ff7fe1563a26e0e->enter($__internal_a111bef4d1d42150ecc72959273770986566157dd90623a73ff7fe1563a26e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a111bef4d1d42150ecc72959273770986566157dd90623a73ff7fe1563a26e0e->leave($__internal_a111bef4d1d42150ecc72959273770986566157dd90623a73ff7fe1563a26e0e_prof);

        
        $__internal_f1c78101e53faa6d236cb2af4596679fbd4acab69739011cd5bc7b6d53d6271e->leave($__internal_f1c78101e53faa6d236cb2af4596679fbd4acab69739011cd5bc7b6d53d6271e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

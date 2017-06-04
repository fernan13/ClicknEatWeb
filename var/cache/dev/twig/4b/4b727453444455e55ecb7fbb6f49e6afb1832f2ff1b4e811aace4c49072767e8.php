<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d395795fa96b67468d67a1c0adf722ac7be0783d9075af1103a42a6d63742ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_62c9d5e4322d1d4f2d3cea0cc301fa47957ff580e235bc663a064a8aaf6e635a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c9d5e4322d1d4f2d3cea0cc301fa47957ff580e235bc663a064a8aaf6e635a->enter($__internal_62c9d5e4322d1d4f2d3cea0cc301fa47957ff580e235bc663a064a8aaf6e635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_fb6da6ee3d5eaa4180dce25b1d996c96ef5eab54b849af21530c3c86bd14218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6da6ee3d5eaa4180dce25b1d996c96ef5eab54b849af21530c3c86bd14218a->enter($__internal_fb6da6ee3d5eaa4180dce25b1d996c96ef5eab54b849af21530c3c86bd14218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c9d5e4322d1d4f2d3cea0cc301fa47957ff580e235bc663a064a8aaf6e635a->leave($__internal_62c9d5e4322d1d4f2d3cea0cc301fa47957ff580e235bc663a064a8aaf6e635a_prof);

        
        $__internal_fb6da6ee3d5eaa4180dce25b1d996c96ef5eab54b849af21530c3c86bd14218a->leave($__internal_fb6da6ee3d5eaa4180dce25b1d996c96ef5eab54b849af21530c3c86bd14218a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f5acf4a8c687e1af0f384a8e3b436a256be1f1091ff98837227f46e53ccd02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5acf4a8c687e1af0f384a8e3b436a256be1f1091ff98837227f46e53ccd02c->enter($__internal_7f5acf4a8c687e1af0f384a8e3b436a256be1f1091ff98837227f46e53ccd02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1964161436499b458d4727e2fec9cb36e76a7d626ecbb5918481686dbe90917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1964161436499b458d4727e2fec9cb36e76a7d626ecbb5918481686dbe90917->enter($__internal_d1964161436499b458d4727e2fec9cb36e76a7d626ecbb5918481686dbe90917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d1964161436499b458d4727e2fec9cb36e76a7d626ecbb5918481686dbe90917->leave($__internal_d1964161436499b458d4727e2fec9cb36e76a7d626ecbb5918481686dbe90917_prof);

        
        $__internal_7f5acf4a8c687e1af0f384a8e3b436a256be1f1091ff98837227f46e53ccd02c->leave($__internal_7f5acf4a8c687e1af0f384a8e3b436a256be1f1091ff98837227f46e53ccd02c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

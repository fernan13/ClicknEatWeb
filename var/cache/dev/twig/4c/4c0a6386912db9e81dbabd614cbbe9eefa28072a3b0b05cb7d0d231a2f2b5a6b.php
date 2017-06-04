<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_08dadd2506fa500ce00bbe765f2e5304f64d1d2756bbd6857b1aa71daaa8e752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_023416f65a4a8d61d6b9e4050c87e9397df3b42d35a751337f966c8461d56103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023416f65a4a8d61d6b9e4050c87e9397df3b42d35a751337f966c8461d56103->enter($__internal_023416f65a4a8d61d6b9e4050c87e9397df3b42d35a751337f966c8461d56103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_71eacd9e271cba31b38ffb667b1c599048b0ceb604ecb9fe39a916484cc6d23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71eacd9e271cba31b38ffb667b1c599048b0ceb604ecb9fe39a916484cc6d23d->enter($__internal_71eacd9e271cba31b38ffb667b1c599048b0ceb604ecb9fe39a916484cc6d23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023416f65a4a8d61d6b9e4050c87e9397df3b42d35a751337f966c8461d56103->leave($__internal_023416f65a4a8d61d6b9e4050c87e9397df3b42d35a751337f966c8461d56103_prof);

        
        $__internal_71eacd9e271cba31b38ffb667b1c599048b0ceb604ecb9fe39a916484cc6d23d->leave($__internal_71eacd9e271cba31b38ffb667b1c599048b0ceb604ecb9fe39a916484cc6d23d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16787250a65abd7a0cc234dbe89ec4ec2adc04f028096876b7242e18458aa480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16787250a65abd7a0cc234dbe89ec4ec2adc04f028096876b7242e18458aa480->enter($__internal_16787250a65abd7a0cc234dbe89ec4ec2adc04f028096876b7242e18458aa480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58ae8afecd3457efff8061e09448efb15ca3feb9b4d4eb3f84a3a662594abaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ae8afecd3457efff8061e09448efb15ca3feb9b4d4eb3f84a3a662594abaf0->enter($__internal_58ae8afecd3457efff8061e09448efb15ca3feb9b4d4eb3f84a3a662594abaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_58ae8afecd3457efff8061e09448efb15ca3feb9b4d4eb3f84a3a662594abaf0->leave($__internal_58ae8afecd3457efff8061e09448efb15ca3feb9b4d4eb3f84a3a662594abaf0_prof);

        
        $__internal_16787250a65abd7a0cc234dbe89ec4ec2adc04f028096876b7242e18458aa480->leave($__internal_16787250a65abd7a0cc234dbe89ec4ec2adc04f028096876b7242e18458aa480_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}

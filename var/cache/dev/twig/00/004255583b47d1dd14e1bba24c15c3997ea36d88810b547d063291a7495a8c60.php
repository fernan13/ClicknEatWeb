<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_72814b2f81c99b622cc6807025b964d8cda1289fe8ed7fc632e458c8ce9b92d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6997cfc2f7561c98e82f1414260a20b838c3214da032fc60c7571b7f734090a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6997cfc2f7561c98e82f1414260a20b838c3214da032fc60c7571b7f734090a6->enter($__internal_6997cfc2f7561c98e82f1414260a20b838c3214da032fc60c7571b7f734090a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_363789963431809125f65efebb872b122370406e32be6ca0324874d5910ce1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363789963431809125f65efebb872b122370406e32be6ca0324874d5910ce1c6->enter($__internal_363789963431809125f65efebb872b122370406e32be6ca0324874d5910ce1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6997cfc2f7561c98e82f1414260a20b838c3214da032fc60c7571b7f734090a6->leave($__internal_6997cfc2f7561c98e82f1414260a20b838c3214da032fc60c7571b7f734090a6_prof);

        
        $__internal_363789963431809125f65efebb872b122370406e32be6ca0324874d5910ce1c6->leave($__internal_363789963431809125f65efebb872b122370406e32be6ca0324874d5910ce1c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_09c8350aeb2af679b3e6c806e06c20338e6f4d668b7e62aefe27f85387943039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c8350aeb2af679b3e6c806e06c20338e6f4d668b7e62aefe27f85387943039->enter($__internal_09c8350aeb2af679b3e6c806e06c20338e6f4d668b7e62aefe27f85387943039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_27edb7ba75334aad549a5500e753740f9cb0ecea50f266aba3d7a9c488b9e59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27edb7ba75334aad549a5500e753740f9cb0ecea50f266aba3d7a9c488b9e59f->enter($__internal_27edb7ba75334aad549a5500e753740f9cb0ecea50f266aba3d7a9c488b9e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_27edb7ba75334aad549a5500e753740f9cb0ecea50f266aba3d7a9c488b9e59f->leave($__internal_27edb7ba75334aad549a5500e753740f9cb0ecea50f266aba3d7a9c488b9e59f_prof);

        
        $__internal_09c8350aeb2af679b3e6c806e06c20338e6f4d668b7e62aefe27f85387943039->leave($__internal_09c8350aeb2af679b3e6c806e06c20338e6f4d668b7e62aefe27f85387943039_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abdc0f5317801f21d2bcad4ef3aec8724eb6f909221b818e24052a58bcf799e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdc0f5317801f21d2bcad4ef3aec8724eb6f909221b818e24052a58bcf799e0->enter($__internal_abdc0f5317801f21d2bcad4ef3aec8724eb6f909221b818e24052a58bcf799e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a118dab3c3e9f1f2930df62b96d933ccf55fd1e20430ad10992b28d935f07dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a118dab3c3e9f1f2930df62b96d933ccf55fd1e20430ad10992b28d935f07dc4->enter($__internal_a118dab3c3e9f1f2930df62b96d933ccf55fd1e20430ad10992b28d935f07dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a118dab3c3e9f1f2930df62b96d933ccf55fd1e20430ad10992b28d935f07dc4->leave($__internal_a118dab3c3e9f1f2930df62b96d933ccf55fd1e20430ad10992b28d935f07dc4_prof);

        
        $__internal_abdc0f5317801f21d2bcad4ef3aec8724eb6f909221b818e24052a58bcf799e0->leave($__internal_abdc0f5317801f21d2bcad4ef3aec8724eb6f909221b818e24052a58bcf799e0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_edee13f8ecc56717ce192a123ec15124f553512ddd7f7badf79a4ae362e94428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edee13f8ecc56717ce192a123ec15124f553512ddd7f7badf79a4ae362e94428->enter($__internal_edee13f8ecc56717ce192a123ec15124f553512ddd7f7badf79a4ae362e94428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4f684914220adcb27ea2a441986b70ea85d87ea613917f9b7edac948351c1454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f684914220adcb27ea2a441986b70ea85d87ea613917f9b7edac948351c1454->enter($__internal_4f684914220adcb27ea2a441986b70ea85d87ea613917f9b7edac948351c1454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f684914220adcb27ea2a441986b70ea85d87ea613917f9b7edac948351c1454->leave($__internal_4f684914220adcb27ea2a441986b70ea85d87ea613917f9b7edac948351c1454_prof);

        
        $__internal_edee13f8ecc56717ce192a123ec15124f553512ddd7f7badf79a4ae362e94428->leave($__internal_edee13f8ecc56717ce192a123ec15124f553512ddd7f7badf79a4ae362e94428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}

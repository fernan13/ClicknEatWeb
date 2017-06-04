<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_94de210a9f08c5cff1fc1861f2be6fc099baf7452278f7b0b2c95fed12762fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a0ad649212549ed9eba25f9dd9fe207d4f40f6efe9e8cdc9d357ddd0fba100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a0ad649212549ed9eba25f9dd9fe207d4f40f6efe9e8cdc9d357ddd0fba100->enter($__internal_b1a0ad649212549ed9eba25f9dd9fe207d4f40f6efe9e8cdc9d357ddd0fba100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_f2c34afe2718379c5206e1a0f6428a8efc73d616f5e4f2cb8c0a5adec26d473b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c34afe2718379c5206e1a0f6428a8efc73d616f5e4f2cb8c0a5adec26d473b->enter($__internal_f2c34afe2718379c5206e1a0f6428a8efc73d616f5e4f2cb8c0a5adec26d473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a0ad649212549ed9eba25f9dd9fe207d4f40f6efe9e8cdc9d357ddd0fba100->leave($__internal_b1a0ad649212549ed9eba25f9dd9fe207d4f40f6efe9e8cdc9d357ddd0fba100_prof);

        
        $__internal_f2c34afe2718379c5206e1a0f6428a8efc73d616f5e4f2cb8c0a5adec26d473b->leave($__internal_f2c34afe2718379c5206e1a0f6428a8efc73d616f5e4f2cb8c0a5adec26d473b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_945a7c841eaa6d6ec969a6f2bb962f0de3e278f2559697a4d6abc277cb46b7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945a7c841eaa6d6ec969a6f2bb962f0de3e278f2559697a4d6abc277cb46b7fa->enter($__internal_945a7c841eaa6d6ec969a6f2bb962f0de3e278f2559697a4d6abc277cb46b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_9ed63f7fc76539a03696a63cfdbdcf1b68e56a11e689b61b44acdc4582dcc5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed63f7fc76539a03696a63cfdbdcf1b68e56a11e689b61b44acdc4582dcc5ee->enter($__internal_9ed63f7fc76539a03696a63cfdbdcf1b68e56a11e689b61b44acdc4582dcc5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9ed63f7fc76539a03696a63cfdbdcf1b68e56a11e689b61b44acdc4582dcc5ee->leave($__internal_9ed63f7fc76539a03696a63cfdbdcf1b68e56a11e689b61b44acdc4582dcc5ee_prof);

        
        $__internal_945a7c841eaa6d6ec969a6f2bb962f0de3e278f2559697a4d6abc277cb46b7fa->leave($__internal_945a7c841eaa6d6ec969a6f2bb962f0de3e278f2559697a4d6abc277cb46b7fa_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/Connect/login.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_1b64d78f2b108630721a2ad913dc1e8d2001a858b64328681dd49088fb892239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7f7eaec387ef8b79059b5387d2bff02f79bfd903d1c8f2ae0c82cbc1be38292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f7eaec387ef8b79059b5387d2bff02f79bfd903d1c8f2ae0c82cbc1be38292->enter($__internal_c7f7eaec387ef8b79059b5387d2bff02f79bfd903d1c8f2ae0c82cbc1be38292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c7f7eaec387ef8b79059b5387d2bff02f79bfd903d1c8f2ae0c82cbc1be38292->leave($__internal_c7f7eaec387ef8b79059b5387d2bff02f79bfd903d1c8f2ae0c82cbc1be38292_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1cf835f60bcdaf2f573fd9072e86e1c97ec908396a75d817642861214959d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cf835f60bcdaf2f573fd9072e86e1c97ec908396a75d817642861214959d5d->enter($__internal_c1cf835f60bcdaf2f573fd9072e86e1c97ec908396a75d817642861214959d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c1cf835f60bcdaf2f573fd9072e86e1c97ec908396a75d817642861214959d5d->leave($__internal_c1cf835f60bcdaf2f573fd9072e86e1c97ec908396a75d817642861214959d5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_565f44e4cbbae78fc5486b16c7250344306ab810e75159e2bd946c32bc4ed103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565f44e4cbbae78fc5486b16c7250344306ab810e75159e2bd946c32bc4ed103->enter($__internal_565f44e4cbbae78fc5486b16c7250344306ab810e75159e2bd946c32bc4ed103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_565f44e4cbbae78fc5486b16c7250344306ab810e75159e2bd946c32bc4ed103->leave($__internal_565f44e4cbbae78fc5486b16c7250344306ab810e75159e2bd946c32bc4ed103_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65cd03ec4370cf65b2d2f0c0fc76cfc02bb248d6a32e4bf1d028e1fdadd8c976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cd03ec4370cf65b2d2f0c0fc76cfc02bb248d6a32e4bf1d028e1fdadd8c976->enter($__internal_65cd03ec4370cf65b2d2f0c0fc76cfc02bb248d6a32e4bf1d028e1fdadd8c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65cd03ec4370cf65b2d2f0c0fc76cfc02bb248d6a32e4bf1d028e1fdadd8c976->leave($__internal_65cd03ec4370cf65b2d2f0c0fc76cfc02bb248d6a32e4bf1d028e1fdadd8c976_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e4f27092d781b6b8855d5eae5c4f515dd7f73b1bb93e88b8bb342daba061d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4f27092d781b6b8855d5eae5c4f515dd7f73b1bb93e88b8bb342daba061d80->enter($__internal_3e4f27092d781b6b8855d5eae5c4f515dd7f73b1bb93e88b8bb342daba061d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e4f27092d781b6b8855d5eae5c4f515dd7f73b1bb93e88b8bb342daba061d80->leave($__internal_3e4f27092d781b6b8855d5eae5c4f515dd7f73b1bb93e88b8bb342daba061d80_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}

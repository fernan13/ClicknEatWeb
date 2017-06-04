<?php

/* base.html.twig */
class __TwigTemplate_9124d14068f6ec4c50ad8c19a8505b101590453fa59d191c6e10ca9d39799c6e extends Twig_Template
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
        $__internal_3fc575449b799a803701a6a32d4a04609fbb67046c23b9a14de005a6faa0de20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc575449b799a803701a6a32d4a04609fbb67046c23b9a14de005a6faa0de20->enter($__internal_3fc575449b799a803701a6a32d4a04609fbb67046c23b9a14de005a6faa0de20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3fc575449b799a803701a6a32d4a04609fbb67046c23b9a14de005a6faa0de20->leave($__internal_3fc575449b799a803701a6a32d4a04609fbb67046c23b9a14de005a6faa0de20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b14d5034a02e0411549e62e83c8ab70d967a491598d9ea136ccc5f1869fcd0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14d5034a02e0411549e62e83c8ab70d967a491598d9ea136ccc5f1869fcd0bd->enter($__internal_b14d5034a02e0411549e62e83c8ab70d967a491598d9ea136ccc5f1869fcd0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b14d5034a02e0411549e62e83c8ab70d967a491598d9ea136ccc5f1869fcd0bd->leave($__internal_b14d5034a02e0411549e62e83c8ab70d967a491598d9ea136ccc5f1869fcd0bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecac3196b1795ae706cbb133fb97532cf6cdb9fcde3c581f61709ec3b0403662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecac3196b1795ae706cbb133fb97532cf6cdb9fcde3c581f61709ec3b0403662->enter($__internal_ecac3196b1795ae706cbb133fb97532cf6cdb9fcde3c581f61709ec3b0403662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecac3196b1795ae706cbb133fb97532cf6cdb9fcde3c581f61709ec3b0403662->leave($__internal_ecac3196b1795ae706cbb133fb97532cf6cdb9fcde3c581f61709ec3b0403662_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39b5b0c9db9f0117774a6fddfba3b462c6a4a07ab674eb8dc3c48a900dde1740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b5b0c9db9f0117774a6fddfba3b462c6a4a07ab674eb8dc3c48a900dde1740->enter($__internal_39b5b0c9db9f0117774a6fddfba3b462c6a4a07ab674eb8dc3c48a900dde1740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39b5b0c9db9f0117774a6fddfba3b462c6a4a07ab674eb8dc3c48a900dde1740->leave($__internal_39b5b0c9db9f0117774a6fddfba3b462c6a4a07ab674eb8dc3c48a900dde1740_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_139b76dcc4d07ed21bd45f6c7d26fd92251290abd6c782fffaa4af3823d2e634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139b76dcc4d07ed21bd45f6c7d26fd92251290abd6c782fffaa4af3823d2e634->enter($__internal_139b76dcc4d07ed21bd45f6c7d26fd92251290abd6c782fffaa4af3823d2e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_139b76dcc4d07ed21bd45f6c7d26fd92251290abd6c782fffaa4af3823d2e634->leave($__internal_139b76dcc4d07ed21bd45f6c7d26fd92251290abd6c782fffaa4af3823d2e634_prof);

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

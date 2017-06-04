<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e6af69db1a55a3914d48dbe79c402029e38371c95e198c06fb46f6e679ea57f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f75ef1f5fe7929909098569bb4fbd218a2ec402fb4265cc308c431059d06060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f75ef1f5fe7929909098569bb4fbd218a2ec402fb4265cc308c431059d06060->enter($__internal_9f75ef1f5fe7929909098569bb4fbd218a2ec402fb4265cc308c431059d06060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        // line 14
        echo "    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "        
        ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>";
        
        $__internal_9f75ef1f5fe7929909098569bb4fbd218a2ec402fb4265cc308c431059d06060->leave($__internal_9f75ef1f5fe7929909098569bb4fbd218a2ec402fb4265cc308c431059d06060_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e35a310a62689bae608723dc8d4992a7da25e4f31386c4081d6231c97aaf459c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35a310a62689bae608723dc8d4992a7da25e4f31386c4081d6231c97aaf459c->enter($__internal_e35a310a62689bae608723dc8d4992a7da25e4f31386c4081d6231c97aaf459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_e35a310a62689bae608723dc8d4992a7da25e4f31386c4081d6231c97aaf459c->leave($__internal_e35a310a62689bae608723dc8d4992a7da25e4f31386c4081d6231c97aaf459c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbdb6bbe043ce4058fd6838ce5d080f91a2913ce7cfdd71f4eb409c10a94f67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdb6bbe043ce4058fd6838ce5d080f91a2913ce7cfdd71f4eb409c10a94f67a->enter($__internal_dbdb6bbe043ce4058fd6838ce5d080f91a2913ce7cfdd71f4eb409c10a94f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.css"), "html", null, true);
        echo "\">
            
        ";
        
        $__internal_dbdb6bbe043ce4058fd6838ce5d080f91a2913ce7cfdd71f4eb409c10a94f67a->leave($__internal_dbdb6bbe043ce4058fd6838ce5d080f91a2913ce7cfdd71f4eb409c10a94f67a_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_a6f7027319cb4c794e3575aa3cc84613929ea69eb829608ec21fe2351aa45a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f7027319cb4c794e3575aa3cc84613929ea69eb829608ec21fe2351aa45a0c->enter($__internal_a6f7027319cb4c794e3575aa3cc84613929ea69eb829608ec21fe2351aa45a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "            ";
        $context["vars"] = array("logged" => false);
        // line 19
        echo "            ";
        $this->loadTemplate("secondary_templates/header.html.twig", "@FOSUser/layout.html.twig", 19)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 20
        echo "        ";
        
        $__internal_a6f7027319cb4c794e3575aa3cc84613929ea69eb829608ec21fe2351aa45a0c->leave($__internal_a6f7027319cb4c794e3575aa3cc84613929ea69eb829608ec21fe2351aa45a0c_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbf3b3a06a6ed429cb5b25edf28427f823142707181ea50c6ae800b165b40425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf3b3a06a6ed429cb5b25edf28427f823142707181ea50c6ae800b165b40425->enter($__internal_fbf3b3a06a6ed429cb5b25edf28427f823142707181ea50c6ae800b165b40425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "        ";
        
        $__internal_fbf3b3a06a6ed429cb5b25edf28427f823142707181ea50c6ae800b165b40425->leave($__internal_fbf3b3a06a6ed429cb5b25edf28427f823142707181ea50c6ae800b165b40425_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac9239dac38145ab759f850ada8eef7aa0078dce15a26a2be3eb97945959ad73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9239dac38145ab759f850ada8eef7aa0078dce15a26a2be3eb97945959ad73->enter($__internal_ac9239dac38145ab759f850ada8eef7aa0078dce15a26a2be3eb97945959ad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ac9239dac38145ab759f850ada8eef7aa0078dce15a26a2be3eb97945959ad73->leave($__internal_ac9239dac38145ab759f850ada8eef7aa0078dce15a26a2be3eb97945959ad73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 26,  136 => 25,  129 => 23,  123 => 22,  116 => 20,  113 => 19,  110 => 18,  104 => 17,  94 => 11,  90 => 10,  86 => 9,  82 => 7,  76 => 6,  64 => 5,  56 => 33,  54 => 25,  51 => 24,  49 => 22,  46 => 21,  44 => 17,  39 => 14,  37 => 6,  33 => 5,  27 => 1,);
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
        <title>{% block title %}Click'nd Eat!{% endblock %}</title>
        {% block stylesheets %}
        
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mdb.css') }}\">
            
        {% endblock %}
    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        {% block header %}
            {% set vars = {'logged': false} %}
            {% include 'secondary_templates/header.html.twig' with vars %}
        {% endblock %}
        
        {% block fos_user_content %}
        {% endblock fos_user_content %}
        
        {% block javascripts %}
            <script src=\"{{ asset('js/tether.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/mdb.min.js') }}\"></script>
            <script src=\"{{ asset('js/wow.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "@FOSUser/layout.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

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
        $__internal_3b69427e57542ad675de977661eb70ac72eacd57f0a666e34d434bdd83a5b315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b69427e57542ad675de977661eb70ac72eacd57f0a666e34d434bdd83a5b315->enter($__internal_3b69427e57542ad675de977661eb70ac72eacd57f0a666e34d434bdd83a5b315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "        
        ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>";
        
        $__internal_3b69427e57542ad675de977661eb70ac72eacd57f0a666e34d434bdd83a5b315->leave($__internal_3b69427e57542ad675de977661eb70ac72eacd57f0a666e34d434bdd83a5b315_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_242461aacc75b1f5c831260abd950e203bd5e072616c61636162131ff08df913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242461aacc75b1f5c831260abd950e203bd5e072616c61636162131ff08df913->enter($__internal_242461aacc75b1f5c831260abd950e203bd5e072616c61636162131ff08df913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_242461aacc75b1f5c831260abd950e203bd5e072616c61636162131ff08df913->leave($__internal_242461aacc75b1f5c831260abd950e203bd5e072616c61636162131ff08df913_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa5fd32e638b2e964071ab91bda2e9e762bc8c1fb4c7422a8651a527f64605bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5fd32e638b2e964071ab91bda2e9e762bc8c1fb4c7422a8651a527f64605bf->enter($__internal_fa5fd32e638b2e964071ab91bda2e9e762bc8c1fb4c7422a8651a527f64605bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fa5fd32e638b2e964071ab91bda2e9e762bc8c1fb4c7422a8651a527f64605bf->leave($__internal_fa5fd32e638b2e964071ab91bda2e9e762bc8c1fb4c7422a8651a527f64605bf_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_660a1869f2daeade38b6310e5c44563c06239eeb4a8be6cc24baa3dce4720b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660a1869f2daeade38b6310e5c44563c06239eeb4a8be6cc24baa3dce4720b93->enter($__internal_660a1869f2daeade38b6310e5c44563c06239eeb4a8be6cc24baa3dce4720b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "            ";
        $context["vars"] = array("logged" => false);
        // line 20
        echo "            ";
        $this->loadTemplate("secondary_templates/header.html.twig", "@FOSUser/layout.html.twig", 20)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 21
        echo "        ";
        
        $__internal_660a1869f2daeade38b6310e5c44563c06239eeb4a8be6cc24baa3dce4720b93->leave($__internal_660a1869f2daeade38b6310e5c44563c06239eeb4a8be6cc24baa3dce4720b93_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a459a32d0d941a4a257f2ce0265f1f48777527f8e4c51efb84387efb14333c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a459a32d0d941a4a257f2ce0265f1f48777527f8e4c51efb84387efb14333c0f->enter($__internal_a459a32d0d941a4a257f2ce0265f1f48777527f8e4c51efb84387efb14333c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "        ";
        
        $__internal_a459a32d0d941a4a257f2ce0265f1f48777527f8e4c51efb84387efb14333c0f->leave($__internal_a459a32d0d941a4a257f2ce0265f1f48777527f8e4c51efb84387efb14333c0f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51f390bf1ae2464c69366084d6a7df9298a9514aaa2b943de3a9fe8c53045170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f390bf1ae2464c69366084d6a7df9298a9514aaa2b943de3a9fe8c53045170->enter($__internal_51f390bf1ae2464c69366084d6a7df9298a9514aaa2b943de3a9fe8c53045170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_51f390bf1ae2464c69366084d6a7df9298a9514aaa2b943de3a9fe8c53045170->leave($__internal_51f390bf1ae2464c69366084d6a7df9298a9514aaa2b943de3a9fe8c53045170_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  145 => 27,  139 => 26,  132 => 24,  126 => 23,  119 => 21,  116 => 20,  113 => 19,  107 => 18,  97 => 11,  93 => 10,  89 => 9,  85 => 7,  79 => 6,  67 => 5,  59 => 34,  57 => 26,  54 => 25,  52 => 23,  49 => 22,  47 => 18,  39 => 14,  37 => 6,  33 => 5,  27 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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

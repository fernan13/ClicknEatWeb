<?php

/* base.html.twig */
class __TwigTemplate_7ae4d6cd6a158f62ab7fff455b5ce313d76065aa37f7fea59a1fc9a29f60fce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'reactjs' => array($this, 'block_reactjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb86e48ce62db68c419387b4d8fec53072394ef392b5af17544578cc053e9cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb86e48ce62db68c419387b4d8fec53072394ef392b5af17544578cc053e9cb7->enter($__internal_bb86e48ce62db68c419387b4d8fec53072394ef392b5af17544578cc053e9cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
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
        $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        // line 19
        echo "        <!-- Obtenemos del servicio de mensaje todos los mensajes del tipo 'success' y los mostramos-->
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 21
            echo "                
            <div class=\"alert alert-success\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        
        
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "        
        ";
        // line 42
        if ((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged"))) {
            // line 43
            echo "            ";
            $this->displayBlock('reactjs', $context, $blocks);
            // line 50
            echo "        ";
        }
        echo "    
    </body>
</html>
";
        
        $__internal_bb86e48ce62db68c419387b4d8fec53072394ef392b5af17544578cc053e9cb7->leave($__internal_bb86e48ce62db68c419387b4d8fec53072394ef392b5af17544578cc053e9cb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aa18e33a18f7d2dc31fda9d3d0d5eb0c4585a44bd09e90bcd34f3917e72f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa18e33a18f7d2dc31fda9d3d0d5eb0c4585a44bd09e90bcd34f3917e72f5fb->enter($__internal_2aa18e33a18f7d2dc31fda9d3d0d5eb0c4585a44bd09e90bcd34f3917e72f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_2aa18e33a18f7d2dc31fda9d3d0d5eb0c4585a44bd09e90bcd34f3917e72f5fb->leave($__internal_2aa18e33a18f7d2dc31fda9d3d0d5eb0c4585a44bd09e90bcd34f3917e72f5fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a8c6372d3800f181f85805ee3e19730578cd46b59b62914a36102672bf6d605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8c6372d3800f181f85805ee3e19730578cd46b59b62914a36102672bf6d605->enter($__internal_6a8c6372d3800f181f85805ee3e19730578cd46b59b62914a36102672bf6d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb-extend.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        
        $__internal_6a8c6372d3800f181f85805ee3e19730578cd46b59b62914a36102672bf6d605->leave($__internal_6a8c6372d3800f181f85805ee3e19730578cd46b59b62914a36102672bf6d605_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_da8761b90d5f4873b4575a2d068aa5614a712ea62a5de483c8e3bf92b5763951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8761b90d5f4873b4575a2d068aa5614a712ea62a5de483c8e3bf92b5763951->enter($__internal_da8761b90d5f4873b4575a2d068aa5614a712ea62a5de483c8e3bf92b5763951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_da8761b90d5f4873b4575a2d068aa5614a712ea62a5de483c8e3bf92b5763951->leave($__internal_da8761b90d5f4873b4575a2d068aa5614a712ea62a5de483c8e3bf92b5763951_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44e20e001083f274d76debff0c0ce6ed20f27e95f4bf51a44082d6f72e8c165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44e20e001083f274d76debff0c0ce6ed20f27e95f4bf51a44082d6f72e8c165->enter($__internal_e44e20e001083f274d76debff0c0ce6ed20f27e95f4bf51a44082d6f72e8c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e44e20e001083f274d76debff0c0ce6ed20f27e95f4bf51a44082d6f72e8c165->leave($__internal_e44e20e001083f274d76debff0c0ce6ed20f27e95f4bf51a44082d6f72e8c165_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_30a6d43e6250f9fb77d2caa0f53fd8b4372a99234b2602e04e3d42de7b4d59a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a6d43e6250f9fb77d2caa0f53fd8b4372a99234b2602e04e3d42de7b4d59a0->enter($__internal_30a6d43e6250f9fb77d2caa0f53fd8b4372a99234b2602e04e3d42de7b4d59a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_30a6d43e6250f9fb77d2caa0f53fd8b4372a99234b2602e04e3d42de7b4d59a0->leave($__internal_30a6d43e6250f9fb77d2caa0f53fd8b4372a99234b2602e04e3d42de7b4d59a0_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ef9cc0ae3b1c468264ba0bc0e2d120c3893d7d57ab8193c44c61df7455a9911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef9cc0ae3b1c468264ba0bc0e2d120c3893d7d57ab8193c44c61df7455a9911->enter($__internal_4ef9cc0ae3b1c468264ba0bc0e2d120c3893d7d57ab8193c44c61df7455a9911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4ef9cc0ae3b1c468264ba0bc0e2d120c3893d7d57ab8193c44c61df7455a9911->leave($__internal_4ef9cc0ae3b1c468264ba0bc0e2d120c3893d7d57ab8193c44c61df7455a9911_prof);

    }

    // line 43
    public function block_reactjs($context, array $blocks = array())
    {
        $__internal_d5c58b8dd5c272557f20ffd8587795dec38e091efc3d1e07aa370ab5f6559161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c58b8dd5c272557f20ffd8587795dec38e091efc3d1e07aa370ab5f6559161->enter($__internal_d5c58b8dd5c272557f20ffd8587795dec38e091efc3d1e07aa370ab5f6559161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        // line 44
        echo "            
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
                
            ";
        
        $__internal_d5c58b8dd5c272557f20ffd8587795dec38e091efc3d1e07aa370ab5f6559161->leave($__internal_d5c58b8dd5c272557f20ffd8587795dec38e091efc3d1e07aa370ab5f6559161_prof);

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
        return array (  227 => 44,  221 => 43,  212 => 39,  208 => 38,  204 => 37,  200 => 36,  196 => 35,  191 => 34,  185 => 33,  174 => 30,  163 => 29,  152 => 28,  142 => 11,  138 => 10,  134 => 9,  130 => 8,  127 => 7,  121 => 6,  109 => 5,  97 => 50,  94 => 43,  92 => 42,  89 => 41,  87 => 33,  83 => 31,  80 => 30,  77 => 29,  75 => 28,  72 => 27,  62 => 23,  58 => 21,  54 => 20,  51 => 19,  49 => 18,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"utf-8\">
        <title>{% block title %}Click'nd Eat!{% endblock %}</title>
        {% block stylesheets %}
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mdb.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mdb-extend.css') }}\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        {% set logged = app.session.get('logged') %}
        <!-- Obtenemos del servicio de mensaje todos los mensajes del tipo 'success' y los mostramos-->
        {% for msg in app.session.flashBag.get('success') %}
                
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
                
        {% endfor %}
        
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        
        
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/tether.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/mdb.min.js') }}\"></script>
            <script src=\"{{ asset('js/wow.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
        
        {% if logged %}
            {% block reactjs %}
            
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
                
            {% endblock%}
        {% endif %}    
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}

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
        $__internal_53f82dda605eb583928ff69fcbb3bdfc63aad385bf6d80c1ac9bfd7c4b99d329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f82dda605eb583928ff69fcbb3bdfc63aad385bf6d80c1ac9bfd7c4b99d329->enter($__internal_53f82dda605eb583928ff69fcbb3bdfc63aad385bf6d80c1ac9bfd7c4b99d329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_53f82dda605eb583928ff69fcbb3bdfc63aad385bf6d80c1ac9bfd7c4b99d329->leave($__internal_53f82dda605eb583928ff69fcbb3bdfc63aad385bf6d80c1ac9bfd7c4b99d329_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c0cafe0ecf8d4f2a02247c765990a5225bcee22c97e03e95f1ec306bb891f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0cafe0ecf8d4f2a02247c765990a5225bcee22c97e03e95f1ec306bb891f42->enter($__internal_9c0cafe0ecf8d4f2a02247c765990a5225bcee22c97e03e95f1ec306bb891f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_9c0cafe0ecf8d4f2a02247c765990a5225bcee22c97e03e95f1ec306bb891f42->leave($__internal_9c0cafe0ecf8d4f2a02247c765990a5225bcee22c97e03e95f1ec306bb891f42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18039ce311395e6867c18229dd241ab11300b396b019a6075ac80cae6c595706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18039ce311395e6867c18229dd241ab11300b396b019a6075ac80cae6c595706->enter($__internal_18039ce311395e6867c18229dd241ab11300b396b019a6075ac80cae6c595706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_18039ce311395e6867c18229dd241ab11300b396b019a6075ac80cae6c595706->leave($__internal_18039ce311395e6867c18229dd241ab11300b396b019a6075ac80cae6c595706_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_94f270b42d1e72b21bd7d3e5bd2075dcf105f45151633b2fde98d7ed4b203d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f270b42d1e72b21bd7d3e5bd2075dcf105f45151633b2fde98d7ed4b203d20->enter($__internal_94f270b42d1e72b21bd7d3e5bd2075dcf105f45151633b2fde98d7ed4b203d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_94f270b42d1e72b21bd7d3e5bd2075dcf105f45151633b2fde98d7ed4b203d20->leave($__internal_94f270b42d1e72b21bd7d3e5bd2075dcf105f45151633b2fde98d7ed4b203d20_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5704e317b8ad80a981e244767d5156c33994f19d440777a96264a7d9e592d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5704e317b8ad80a981e244767d5156c33994f19d440777a96264a7d9e592d7->enter($__internal_eb5704e317b8ad80a981e244767d5156c33994f19d440777a96264a7d9e592d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb5704e317b8ad80a981e244767d5156c33994f19d440777a96264a7d9e592d7->leave($__internal_eb5704e317b8ad80a981e244767d5156c33994f19d440777a96264a7d9e592d7_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_216c6c140d30a6500f38ed7dd637c9187b04084068f604e620501d0028ad3ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216c6c140d30a6500f38ed7dd637c9187b04084068f604e620501d0028ad3ef9->enter($__internal_216c6c140d30a6500f38ed7dd637c9187b04084068f604e620501d0028ad3ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_216c6c140d30a6500f38ed7dd637c9187b04084068f604e620501d0028ad3ef9->leave($__internal_216c6c140d30a6500f38ed7dd637c9187b04084068f604e620501d0028ad3ef9_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09e07f9756cf0b08cb3e506758197be7d319e4e7b256aa9202476b0494b228b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e07f9756cf0b08cb3e506758197be7d319e4e7b256aa9202476b0494b228b1->enter($__internal_09e07f9756cf0b08cb3e506758197be7d319e4e7b256aa9202476b0494b228b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_09e07f9756cf0b08cb3e506758197be7d319e4e7b256aa9202476b0494b228b1->leave($__internal_09e07f9756cf0b08cb3e506758197be7d319e4e7b256aa9202476b0494b228b1_prof);

    }

    // line 43
    public function block_reactjs($context, array $blocks = array())
    {
        $__internal_9d474a041553bae2e907058f98b18c953064e1d82867881b647fda57ffa6f01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d474a041553bae2e907058f98b18c953064e1d82867881b647fda57ffa6f01b->enter($__internal_9d474a041553bae2e907058f98b18c953064e1d82867881b647fda57ffa6f01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        // line 44
        echo "            
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
                
            ";
        
        $__internal_9d474a041553bae2e907058f98b18c953064e1d82867881b647fda57ffa6f01b->leave($__internal_9d474a041553bae2e907058f98b18c953064e1d82867881b647fda57ffa6f01b_prof);

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

<?php

/* base.html.twig */
class __TwigTemplate_e5c71a464843c54cdc9f638aa26e77dda086a7f9f4941f064828ba3670e0340f extends Twig_Template
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
        $__internal_b140507b5d19fbb6ae2e4f2eeb245d5bf618acebd28635ac1f6bf8a726bc5dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b140507b5d19fbb6ae2e4f2eeb245d5bf618acebd28635ac1f6bf8a726bc5dc1->enter($__internal_b140507b5d19fbb6ae2e4f2eeb245d5bf618acebd28635ac1f6bf8a726bc5dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7c7c9d7d31f3743bcb873931c2c02cf051e124784421d3229926ea6364af4d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7c9d7d31f3743bcb873931c2c02cf051e124784421d3229926ea6364af4d07->enter($__internal_7c7c9d7d31f3743bcb873931c2c02cf051e124784421d3229926ea6364af4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b140507b5d19fbb6ae2e4f2eeb245d5bf618acebd28635ac1f6bf8a726bc5dc1->leave($__internal_b140507b5d19fbb6ae2e4f2eeb245d5bf618acebd28635ac1f6bf8a726bc5dc1_prof);

        
        $__internal_7c7c9d7d31f3743bcb873931c2c02cf051e124784421d3229926ea6364af4d07->leave($__internal_7c7c9d7d31f3743bcb873931c2c02cf051e124784421d3229926ea6364af4d07_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7af580869c2c720ec52bf2fce7a4ee2c80bda8a2146dddfe3b1d02b06ac865d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7af580869c2c720ec52bf2fce7a4ee2c80bda8a2146dddfe3b1d02b06ac865d->enter($__internal_e7af580869c2c720ec52bf2fce7a4ee2c80bda8a2146dddfe3b1d02b06ac865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bed858605fbaac2c2e167fcd0f09b87f082103727e82633b7e346f36600da87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bed858605fbaac2c2e167fcd0f09b87f082103727e82633b7e346f36600da87->enter($__internal_1bed858605fbaac2c2e167fcd0f09b87f082103727e82633b7e346f36600da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_1bed858605fbaac2c2e167fcd0f09b87f082103727e82633b7e346f36600da87->leave($__internal_1bed858605fbaac2c2e167fcd0f09b87f082103727e82633b7e346f36600da87_prof);

        
        $__internal_e7af580869c2c720ec52bf2fce7a4ee2c80bda8a2146dddfe3b1d02b06ac865d->leave($__internal_e7af580869c2c720ec52bf2fce7a4ee2c80bda8a2146dddfe3b1d02b06ac865d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f938725a75628d1e19b68ee9fbd7d17da580b253f89761b467f78981eca434f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f938725a75628d1e19b68ee9fbd7d17da580b253f89761b467f78981eca434f->enter($__internal_2f938725a75628d1e19b68ee9fbd7d17da580b253f89761b467f78981eca434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_812b1949aa6ddad5fc838dc9a295ddb1c1f846a55ccab9f493eca442b18b74c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812b1949aa6ddad5fc838dc9a295ddb1c1f846a55ccab9f493eca442b18b74c2->enter($__internal_812b1949aa6ddad5fc838dc9a295ddb1c1f846a55ccab9f493eca442b18b74c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_812b1949aa6ddad5fc838dc9a295ddb1c1f846a55ccab9f493eca442b18b74c2->leave($__internal_812b1949aa6ddad5fc838dc9a295ddb1c1f846a55ccab9f493eca442b18b74c2_prof);

        
        $__internal_2f938725a75628d1e19b68ee9fbd7d17da580b253f89761b467f78981eca434f->leave($__internal_2f938725a75628d1e19b68ee9fbd7d17da580b253f89761b467f78981eca434f_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_dfa0d0e6dd841084fa14fa258df2acb8617dea511576c6997f311d4a3711a86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa0d0e6dd841084fa14fa258df2acb8617dea511576c6997f311d4a3711a86a->enter($__internal_dfa0d0e6dd841084fa14fa258df2acb8617dea511576c6997f311d4a3711a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c6a32f38dbaccc932b06a57f063d80f7ec57c1260025073e20161a12d31c8a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a32f38dbaccc932b06a57f063d80f7ec57c1260025073e20161a12d31c8a37->enter($__internal_c6a32f38dbaccc932b06a57f063d80f7ec57c1260025073e20161a12d31c8a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c6a32f38dbaccc932b06a57f063d80f7ec57c1260025073e20161a12d31c8a37->leave($__internal_c6a32f38dbaccc932b06a57f063d80f7ec57c1260025073e20161a12d31c8a37_prof);

        
        $__internal_dfa0d0e6dd841084fa14fa258df2acb8617dea511576c6997f311d4a3711a86a->leave($__internal_dfa0d0e6dd841084fa14fa258df2acb8617dea511576c6997f311d4a3711a86a_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_2956a70800994eb7aa27d61cde9caa41a1ee3784853de0a184ba3193b60b7c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2956a70800994eb7aa27d61cde9caa41a1ee3784853de0a184ba3193b60b7c41->enter($__internal_2956a70800994eb7aa27d61cde9caa41a1ee3784853de0a184ba3193b60b7c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dae277cb249b8b26b31c19c8fe89580bf952e159ac780a979e2e4616d880989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dae277cb249b8b26b31c19c8fe89580bf952e159ac780a979e2e4616d880989->enter($__internal_0dae277cb249b8b26b31c19c8fe89580bf952e159ac780a979e2e4616d880989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0dae277cb249b8b26b31c19c8fe89580bf952e159ac780a979e2e4616d880989->leave($__internal_0dae277cb249b8b26b31c19c8fe89580bf952e159ac780a979e2e4616d880989_prof);

        
        $__internal_2956a70800994eb7aa27d61cde9caa41a1ee3784853de0a184ba3193b60b7c41->leave($__internal_2956a70800994eb7aa27d61cde9caa41a1ee3784853de0a184ba3193b60b7c41_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5fa65d8471834f4b8a35ebdc773763ce8b408582c93c462eab4e265db5931dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa65d8471834f4b8a35ebdc773763ce8b408582c93c462eab4e265db5931dc0->enter($__internal_5fa65d8471834f4b8a35ebdc773763ce8b408582c93c462eab4e265db5931dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2d95f2a6d4f5985d70e1f3bd0227fa2391d0547cde131b0577cadacc2c2ff66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d95f2a6d4f5985d70e1f3bd0227fa2391d0547cde131b0577cadacc2c2ff66c->enter($__internal_2d95f2a6d4f5985d70e1f3bd0227fa2391d0547cde131b0577cadacc2c2ff66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2d95f2a6d4f5985d70e1f3bd0227fa2391d0547cde131b0577cadacc2c2ff66c->leave($__internal_2d95f2a6d4f5985d70e1f3bd0227fa2391d0547cde131b0577cadacc2c2ff66c_prof);

        
        $__internal_5fa65d8471834f4b8a35ebdc773763ce8b408582c93c462eab4e265db5931dc0->leave($__internal_5fa65d8471834f4b8a35ebdc773763ce8b408582c93c462eab4e265db5931dc0_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae52e64372bf09fa5152c7304204ddbd92b8e626593a8b71fefcf37ec3e2c636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae52e64372bf09fa5152c7304204ddbd92b8e626593a8b71fefcf37ec3e2c636->enter($__internal_ae52e64372bf09fa5152c7304204ddbd92b8e626593a8b71fefcf37ec3e2c636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_70fdf0530c6479d9cab09a4428365de69516d36c2f6a4a23ab0bc03696e9bb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fdf0530c6479d9cab09a4428365de69516d36c2f6a4a23ab0bc03696e9bb27->enter($__internal_70fdf0530c6479d9cab09a4428365de69516d36c2f6a4a23ab0bc03696e9bb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_70fdf0530c6479d9cab09a4428365de69516d36c2f6a4a23ab0bc03696e9bb27->leave($__internal_70fdf0530c6479d9cab09a4428365de69516d36c2f6a4a23ab0bc03696e9bb27_prof);

        
        $__internal_ae52e64372bf09fa5152c7304204ddbd92b8e626593a8b71fefcf37ec3e2c636->leave($__internal_ae52e64372bf09fa5152c7304204ddbd92b8e626593a8b71fefcf37ec3e2c636_prof);

    }

    // line 43
    public function block_reactjs($context, array $blocks = array())
    {
        $__internal_84ff9f63544464c8551854a8d75b2ab78d7bc584eae7d9723ab5ca9da24c0809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ff9f63544464c8551854a8d75b2ab78d7bc584eae7d9723ab5ca9da24c0809->enter($__internal_84ff9f63544464c8551854a8d75b2ab78d7bc584eae7d9723ab5ca9da24c0809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        $__internal_1944998df3fc186c3e82be9cde8d286697193d0c6546bb780f00792ca470477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1944998df3fc186c3e82be9cde8d286697193d0c6546bb780f00792ca470477a->enter($__internal_1944998df3fc186c3e82be9cde8d286697193d0c6546bb780f00792ca470477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        // line 44
        echo "            
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
                
            ";
        
        $__internal_1944998df3fc186c3e82be9cde8d286697193d0c6546bb780f00792ca470477a->leave($__internal_1944998df3fc186c3e82be9cde8d286697193d0c6546bb780f00792ca470477a_prof);

        
        $__internal_84ff9f63544464c8551854a8d75b2ab78d7bc584eae7d9723ab5ca9da24c0809->leave($__internal_84ff9f63544464c8551854a8d75b2ab78d7bc584eae7d9723ab5ca9da24c0809_prof);

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
        return array (  272 => 44,  263 => 43,  251 => 39,  247 => 38,  243 => 37,  239 => 36,  235 => 35,  230 => 34,  221 => 33,  204 => 30,  187 => 29,  170 => 28,  157 => 11,  153 => 10,  149 => 9,  145 => 8,  142 => 7,  133 => 6,  115 => 5,  100 => 50,  97 => 43,  95 => 42,  92 => 41,  90 => 33,  86 => 31,  83 => 30,  80 => 29,  78 => 28,  75 => 27,  65 => 23,  61 => 21,  57 => 20,  54 => 19,  52 => 18,  44 => 14,  42 => 6,  38 => 5,  32 => 1,);
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

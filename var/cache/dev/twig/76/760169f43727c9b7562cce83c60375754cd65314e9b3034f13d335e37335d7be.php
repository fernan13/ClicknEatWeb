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
        $__internal_ab3218503b9e97339670bd4f6aff3f3711baaab67d1bfcec8c2d542d649e58dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3218503b9e97339670bd4f6aff3f3711baaab67d1bfcec8c2d542d649e58dc->enter($__internal_ab3218503b9e97339670bd4f6aff3f3711baaab67d1bfcec8c2d542d649e58dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_17eddcfe53f19a23578b860f8feaf4e7e89481b837a4a14e75f4af02b4ab56d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eddcfe53f19a23578b860f8feaf4e7e89481b837a4a14e75f4af02b4ab56d9->enter($__internal_17eddcfe53f19a23578b860f8feaf4e7e89481b837a4a14e75f4af02b4ab56d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ab3218503b9e97339670bd4f6aff3f3711baaab67d1bfcec8c2d542d649e58dc->leave($__internal_ab3218503b9e97339670bd4f6aff3f3711baaab67d1bfcec8c2d542d649e58dc_prof);

        
        $__internal_17eddcfe53f19a23578b860f8feaf4e7e89481b837a4a14e75f4af02b4ab56d9->leave($__internal_17eddcfe53f19a23578b860f8feaf4e7e89481b837a4a14e75f4af02b4ab56d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dd9fcee29012d67c851a5c20f3d03cc3d29aaf78170ee5b4f260e90dba2ddf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd9fcee29012d67c851a5c20f3d03cc3d29aaf78170ee5b4f260e90dba2ddf9->enter($__internal_2dd9fcee29012d67c851a5c20f3d03cc3d29aaf78170ee5b4f260e90dba2ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d69179a4e1eab709381c06d3b551765d851ff8b3aa37fe4463ab4a134ed7687b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69179a4e1eab709381c06d3b551765d851ff8b3aa37fe4463ab4a134ed7687b->enter($__internal_d69179a4e1eab709381c06d3b551765d851ff8b3aa37fe4463ab4a134ed7687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_d69179a4e1eab709381c06d3b551765d851ff8b3aa37fe4463ab4a134ed7687b->leave($__internal_d69179a4e1eab709381c06d3b551765d851ff8b3aa37fe4463ab4a134ed7687b_prof);

        
        $__internal_2dd9fcee29012d67c851a5c20f3d03cc3d29aaf78170ee5b4f260e90dba2ddf9->leave($__internal_2dd9fcee29012d67c851a5c20f3d03cc3d29aaf78170ee5b4f260e90dba2ddf9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_903850bc2b4b0bd00b263f51d5be78acba18239be45cf07ac37421bf9cfdf7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903850bc2b4b0bd00b263f51d5be78acba18239be45cf07ac37421bf9cfdf7c2->enter($__internal_903850bc2b4b0bd00b263f51d5be78acba18239be45cf07ac37421bf9cfdf7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e9182e6f553fa35f8be5ef579f01a9e0c8ff2fe913a9b1228db4c5469249129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9182e6f553fa35f8be5ef579f01a9e0c8ff2fe913a9b1228db4c5469249129->enter($__internal_7e9182e6f553fa35f8be5ef579f01a9e0c8ff2fe913a9b1228db4c5469249129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7e9182e6f553fa35f8be5ef579f01a9e0c8ff2fe913a9b1228db4c5469249129->leave($__internal_7e9182e6f553fa35f8be5ef579f01a9e0c8ff2fe913a9b1228db4c5469249129_prof);

        
        $__internal_903850bc2b4b0bd00b263f51d5be78acba18239be45cf07ac37421bf9cfdf7c2->leave($__internal_903850bc2b4b0bd00b263f51d5be78acba18239be45cf07ac37421bf9cfdf7c2_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_cd9669c442cb8b95f12c2eb39d80b33140f21ced888bf7a89900050f2e619e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9669c442cb8b95f12c2eb39d80b33140f21ced888bf7a89900050f2e619e3e->enter($__internal_cd9669c442cb8b95f12c2eb39d80b33140f21ced888bf7a89900050f2e619e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9103cf1e4b96cb2c74d0883dc505325a1a0032bab97ffefc1b40c78fb4f0a9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9103cf1e4b96cb2c74d0883dc505325a1a0032bab97ffefc1b40c78fb4f0a9b3->enter($__internal_9103cf1e4b96cb2c74d0883dc505325a1a0032bab97ffefc1b40c78fb4f0a9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9103cf1e4b96cb2c74d0883dc505325a1a0032bab97ffefc1b40c78fb4f0a9b3->leave($__internal_9103cf1e4b96cb2c74d0883dc505325a1a0032bab97ffefc1b40c78fb4f0a9b3_prof);

        
        $__internal_cd9669c442cb8b95f12c2eb39d80b33140f21ced888bf7a89900050f2e619e3e->leave($__internal_cd9669c442cb8b95f12c2eb39d80b33140f21ced888bf7a89900050f2e619e3e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dddfe17cff1cec57fe09f154ca52ecd7c1742a27c30d53b26d1b7620cd19249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dddfe17cff1cec57fe09f154ca52ecd7c1742a27c30d53b26d1b7620cd19249->enter($__internal_1dddfe17cff1cec57fe09f154ca52ecd7c1742a27c30d53b26d1b7620cd19249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c6520a9b6238ff1d3b5fff2993b875635960c532d1948fe90802f6a5ab7e9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6520a9b6238ff1d3b5fff2993b875635960c532d1948fe90802f6a5ab7e9bd->enter($__internal_9c6520a9b6238ff1d3b5fff2993b875635960c532d1948fe90802f6a5ab7e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c6520a9b6238ff1d3b5fff2993b875635960c532d1948fe90802f6a5ab7e9bd->leave($__internal_9c6520a9b6238ff1d3b5fff2993b875635960c532d1948fe90802f6a5ab7e9bd_prof);

        
        $__internal_1dddfe17cff1cec57fe09f154ca52ecd7c1742a27c30d53b26d1b7620cd19249->leave($__internal_1dddfe17cff1cec57fe09f154ca52ecd7c1742a27c30d53b26d1b7620cd19249_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1615a63b7cd1703a608ec8228cfaa0fc6d428a1401fd904bea55a83cc39c47c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1615a63b7cd1703a608ec8228cfaa0fc6d428a1401fd904bea55a83cc39c47c1->enter($__internal_1615a63b7cd1703a608ec8228cfaa0fc6d428a1401fd904bea55a83cc39c47c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_86e4ca5069d47be4db6eaca5f5bdd27c1f4c8177020818b604dcf44b0b3f590c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e4ca5069d47be4db6eaca5f5bdd27c1f4c8177020818b604dcf44b0b3f590c->enter($__internal_86e4ca5069d47be4db6eaca5f5bdd27c1f4c8177020818b604dcf44b0b3f590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_86e4ca5069d47be4db6eaca5f5bdd27c1f4c8177020818b604dcf44b0b3f590c->leave($__internal_86e4ca5069d47be4db6eaca5f5bdd27c1f4c8177020818b604dcf44b0b3f590c_prof);

        
        $__internal_1615a63b7cd1703a608ec8228cfaa0fc6d428a1401fd904bea55a83cc39c47c1->leave($__internal_1615a63b7cd1703a608ec8228cfaa0fc6d428a1401fd904bea55a83cc39c47c1_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_932d4c4cbf7103d0ed618dfc1001f9a7bd254531ca5d9622f176a915da160b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932d4c4cbf7103d0ed618dfc1001f9a7bd254531ca5d9622f176a915da160b7e->enter($__internal_932d4c4cbf7103d0ed618dfc1001f9a7bd254531ca5d9622f176a915da160b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae86ad31d8921cbf8ea5604c532d458eee910e0a917753ff7c9366b586dbd6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae86ad31d8921cbf8ea5604c532d458eee910e0a917753ff7c9366b586dbd6f1->enter($__internal_ae86ad31d8921cbf8ea5604c532d458eee910e0a917753ff7c9366b586dbd6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ae86ad31d8921cbf8ea5604c532d458eee910e0a917753ff7c9366b586dbd6f1->leave($__internal_ae86ad31d8921cbf8ea5604c532d458eee910e0a917753ff7c9366b586dbd6f1_prof);

        
        $__internal_932d4c4cbf7103d0ed618dfc1001f9a7bd254531ca5d9622f176a915da160b7e->leave($__internal_932d4c4cbf7103d0ed618dfc1001f9a7bd254531ca5d9622f176a915da160b7e_prof);

    }

    // line 43
    public function block_reactjs($context, array $blocks = array())
    {
        $__internal_e4b631b991c7b1f755d86ab9bf921f100504c6c2b042a3d01e7fe4c4accf9fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b631b991c7b1f755d86ab9bf921f100504c6c2b042a3d01e7fe4c4accf9fc0->enter($__internal_e4b631b991c7b1f755d86ab9bf921f100504c6c2b042a3d01e7fe4c4accf9fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        $__internal_e0e340d8efb95a042b7c56a6da315ae8abc5e98a5a7d8eb13a65624de17d80e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e340d8efb95a042b7c56a6da315ae8abc5e98a5a7d8eb13a65624de17d80e3->enter($__internal_e0e340d8efb95a042b7c56a6da315ae8abc5e98a5a7d8eb13a65624de17d80e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reactjs"));

        // line 44
        echo "            
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
                
            ";
        
        $__internal_e0e340d8efb95a042b7c56a6da315ae8abc5e98a5a7d8eb13a65624de17d80e3->leave($__internal_e0e340d8efb95a042b7c56a6da315ae8abc5e98a5a7d8eb13a65624de17d80e3_prof);

        
        $__internal_e4b631b991c7b1f755d86ab9bf921f100504c6c2b042a3d01e7fe4c4accf9fc0->leave($__internal_e4b631b991c7b1f755d86ab9bf921f100504c6c2b042a3d01e7fe4c4accf9fc0_prof);

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

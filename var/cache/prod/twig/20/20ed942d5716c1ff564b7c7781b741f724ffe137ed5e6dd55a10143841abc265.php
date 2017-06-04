<?php

/* base.html.twig */
class __TwigTemplate_eebcb6ea678dd877d1398fc598f6ed6df52ef26cbef0fd9d4958cccf13a067f9 extends Twig_Template
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
        $__internal_9dbcf44d73a2ce695f154d82775e84770dca8df428eac7972250312ad797aa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbcf44d73a2ce695f154d82775e84770dca8df428eac7972250312ad797aa56->enter($__internal_9dbcf44d73a2ce695f154d82775e84770dca8df428eac7972250312ad797aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <!-- Obtenemos del servicio de mensaje todos los mensajes del tipo 'success' y los mostramos-->
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 17
            echo "                
            <div class=\"alert alert-success\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_9dbcf44d73a2ce695f154d82775e84770dca8df428eac7972250312ad797aa56->leave($__internal_9dbcf44d73a2ce695f154d82775e84770dca8df428eac7972250312ad797aa56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0335ee531fa48abc5028f2522533dfa4ba30d59142f6e29d0a7ad3f645f10514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0335ee531fa48abc5028f2522533dfa4ba30d59142f6e29d0a7ad3f645f10514->enter($__internal_0335ee531fa48abc5028f2522533dfa4ba30d59142f6e29d0a7ad3f645f10514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_0335ee531fa48abc5028f2522533dfa4ba30d59142f6e29d0a7ad3f645f10514->leave($__internal_0335ee531fa48abc5028f2522533dfa4ba30d59142f6e29d0a7ad3f645f10514_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085fe02752dee20c14737b6698ba062904c79eb02fb94b11c1f57ff798523cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085fe02752dee20c14737b6698ba062904c79eb02fb94b11c1f57ff798523cce->enter($__internal_085fe02752dee20c14737b6698ba062904c79eb02fb94b11c1f57ff798523cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_085fe02752dee20c14737b6698ba062904c79eb02fb94b11c1f57ff798523cce->leave($__internal_085fe02752dee20c14737b6698ba062904c79eb02fb94b11c1f57ff798523cce_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_3593d5f875b19796e51cbaadead2bfae8ffda77d5e48ca578eb065f1a8582d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3593d5f875b19796e51cbaadead2bfae8ffda77d5e48ca578eb065f1a8582d24->enter($__internal_3593d5f875b19796e51cbaadead2bfae8ffda77d5e48ca578eb065f1a8582d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3593d5f875b19796e51cbaadead2bfae8ffda77d5e48ca578eb065f1a8582d24->leave($__internal_3593d5f875b19796e51cbaadead2bfae8ffda77d5e48ca578eb065f1a8582d24_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_194b1f148c5f6e23f74aa51f09c28a752d7c0be69001d2f85cdb20cdee2e76f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194b1f148c5f6e23f74aa51f09c28a752d7c0be69001d2f85cdb20cdee2e76f1->enter($__internal_194b1f148c5f6e23f74aa51f09c28a752d7c0be69001d2f85cdb20cdee2e76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_194b1f148c5f6e23f74aa51f09c28a752d7c0be69001d2f85cdb20cdee2e76f1->leave($__internal_194b1f148c5f6e23f74aa51f09c28a752d7c0be69001d2f85cdb20cdee2e76f1_prof);

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
        return array (  148 => 31,  144 => 30,  139 => 29,  133 => 28,  122 => 24,  113 => 9,  109 => 8,  104 => 7,  98 => 6,  86 => 5,  77 => 33,  75 => 28,  70 => 25,  68 => 24,  65 => 23,  55 => 19,  51 => 17,  47 => 16,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mdb.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        
        <!-- Obtenemos del servicio de mensaje todos los mensajes del tipo 'success' y los mostramos-->
        {% for msg in app.session.flashBag.get('success') %}
                
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
                
        {% endfor %}
        
        {% block body %}{% endblock %}
        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>
        {% block javascripts %}
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/mdb.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}

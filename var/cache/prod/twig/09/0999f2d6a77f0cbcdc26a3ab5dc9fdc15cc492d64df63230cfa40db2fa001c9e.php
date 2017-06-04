<?php

/* terciary_templates/index-login.html.twig */
class __TwigTemplate_8a9ede981ec989221b1db6e06e80f99a133f63b842f3e70d5092aa43e6cbc2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8852e827859f75bfeca01f30878693cf0eeb5b42264a8d51f9b59d18a885f025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8852e827859f75bfeca01f30878693cf0eeb5b42264a8d51f9b59d18a885f025->enter($__internal_8852e827859f75bfeca01f30878693cf0eeb5b42264a8d51f9b59d18a885f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terciary_templates/index-login.html.twig"));

        // line 2
        $context["user"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method");
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("terciary_templates/slider.html.twig", "terciary_templates/index-login.html.twig", 4)->display($context);
        // line 5
        echo "
<main id=\"mainContainer\">
    
    <div class=\"container\">
        
        <section class=\"section\">
        
            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Últimas publicaciones</h2>
            </div>
    
            <div id=\"js-publicaciones-wrapper\"></div>
            
        </section>
    
    </div>
    
    <!-- Streak Section -->
    <div class=\"streak streak-lg streak-photo\" style=\"background-image:url(";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background-index-4.jpg"), "html", null, true);
        echo ")\">
           
        <div class=\"flex-center white-text pattern-1 background-image-index overlay light\">
            <ul>
                <li class=\"text-center index user-description\">
                    <h1 class=\" white-text\">
                        No hay amor más sincero que el amor a la comida.
                    </h1>
                </li>
            </ul>
        </div>
            
    </div>
    <!-- /.Streak Section -->

    <!-- Advantages Section -->
    <section class=\"advantages grey lighten-3\">
           
        <div class=\"container\">
               
            <div class=\"row\">
                   
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-home rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Como en casa</strong></h5>
                    <p>
                        Con Click'nd Eat no tienes que preocuparte por comer bien fuera
                        de casa, tan solo tendrás que buscar la publicación que mas
                        te guste, reservar tu plaza y comer a cuerpo de rey.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-wechat rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Pregunta</strong></h5>
                    <p>
                        ¿Tienes una duda sobre una publicación y no sabes que hacer?
                        No te preocupes, con Click'nd Eat podrás contactar con el dueño
                        de la publicación en cualquier momento y así poder resolverla.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-lock rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Seguridad</strong></h5>
                    <p>
                        Gracias al sistema de calificaciones de Click'nd Eat podrás conocer
                        en cualquier momento las opiniones del resto de los usuarios sobre
                        la persona en la que estás interesada, ayudandote a tomar
                        una buena elección. 
                    </p>
                </div>
                
            </div>
            
        </div>
            
    </section>
        
</main>

";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8852e827859f75bfeca01f30878693cf0eeb5b42264a8d51f9b59d18a885f025->leave($__internal_8852e827859f75bfeca01f30878693cf0eeb5b42264a8d51f9b59d18a885f025_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba0f3f626debaa6041be9a3bc99293b19c75621245801568708b06f95623da77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f3f626debaa6041be9a3bc99293b19c75621245801568708b06f95623da77->enter($__internal_ba0f3f626debaa6041be9a3bc99293b19c75621245801568708b06f95623da77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    
    <script type=\"text/babel\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/api/publicaciones.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
    
        var publicaciones_url     = \"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_get_all_request", array("className" => "publicacion"));
        echo "\";
        var publicacion_ver_url   = \"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("see_or_update_publicacion", array("publicacion" => 0));
        echo "\";
        var user_token            = \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))), "html", null, true);
        echo "\"
        
        ReactDOM.render(
        
            <NoteSection url = {publicaciones_url} user_token = {user_token}/>,
            document.getElementById('js-publicaciones-wrapper')
        );
        
    </script>
    
";
        
        $__internal_ba0f3f626debaa6041be9a3bc99293b19c75621245801568708b06f95623da77->leave($__internal_ba0f3f626debaa6041be9a3bc99293b19c75621245801568708b06f95623da77_prof);

    }

    public function getTemplateName()
    {
        return "terciary_templates/index-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 89,  137 => 88,  133 => 87,  127 => 84,  124 => 83,  112 => 82,  50 => 23,  30 => 5,  28 => 4,  25 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Obtenemos al usaurio logeado #}
{% set user = app.session.get('user') %}

{% include 'terciary_templates/slider.html.twig' %}

<main id=\"mainContainer\">
    
    <div class=\"container\">
        
        <section class=\"section\">
        
            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Últimas publicaciones</h2>
            </div>
    
            <div id=\"js-publicaciones-wrapper\"></div>
            
        </section>
    
    </div>
    
    <!-- Streak Section -->
    <div class=\"streak streak-lg streak-photo\" style=\"background-image:url({{asset('img/background-index-4.jpg')}})\">
           
        <div class=\"flex-center white-text pattern-1 background-image-index overlay light\">
            <ul>
                <li class=\"text-center index user-description\">
                    <h1 class=\" white-text\">
                        No hay amor más sincero que el amor a la comida.
                    </h1>
                </li>
            </ul>
        </div>
            
    </div>
    <!-- /.Streak Section -->

    <!-- Advantages Section -->
    <section class=\"advantages grey lighten-3\">
           
        <div class=\"container\">
               
            <div class=\"row\">
                   
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-home rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Como en casa</strong></h5>
                    <p>
                        Con Click'nd Eat no tienes que preocuparte por comer bien fuera
                        de casa, tan solo tendrás que buscar la publicación que mas
                        te guste, reservar tu plaza y comer a cuerpo de rey.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-wechat rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Pregunta</strong></h5>
                    <p>
                        ¿Tienes una duda sobre una publicación y no sabes que hacer?
                        No te preocupes, con Click'nd Eat podrás contactar con el dueño
                        de la publicación en cualquier momento y así poder resolverla.
                    </p>
                </div>
                <div class=\"col-lg-4\">
                    <i class=\"fa fa-lock rounded-circle mb-1\" aria-hidden=\"true\"></i>
                    <h5><strong>Seguridad</strong></h5>
                    <p>
                        Gracias al sistema de calificaciones de Click'nd Eat podrás conocer
                        en cualquier momento las opiniones del resto de los usuarios sobre
                        la persona en la que estás interesada, ayudandote a tomar
                        una buena elección. 
                    </p>
                </div>
                
            </div>
            
        </div>
            
    </section>
        
</main>

{% block javascripts %}
    
    <script type=\"text/babel\" src=\"{{ asset('js/api/publicaciones.react.js') }}\"></script>
    <script type=\"text/babel\">
    
        var publicaciones_url     = \"{{ path('api_get_all_request', {'className': 'publicacion'}) }}\";
        var publicacion_ver_url   = \"{{ path('see_or_update_publicacion', {'publicacion' : 0}) }}\";
        var user_token            = \"{{ getTokenUser(user) }}\"
        
        ReactDOM.render(
        
            <NoteSection url = {publicaciones_url} user_token = {user_token}/>,
            document.getElementById('js-publicaciones-wrapper')
        );
        
    </script>
    
{% endblock %}", "terciary_templates/index-login.html.twig", "/home/ubuntu/workspace/app/Resources/views/terciary_templates/index-login.html.twig");
    }
}

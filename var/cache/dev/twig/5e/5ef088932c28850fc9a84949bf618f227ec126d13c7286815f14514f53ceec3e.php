<?php

/* :secondary_templates:drawer.html.twig */
class __TwigTemplate_99b53ddca86a659e826d2d046d90257c6e97ec025d41b2afcf8bc316b8bd5ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db4aa91e5db03232213b0f30824b7045579d248d8ee9a886360941e7bfaf472a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4aa91e5db03232213b0f30824b7045579d248d8ee9a886360941e7bfaf472a->enter($__internal_db4aa91e5db03232213b0f30824b7045579d248d8ee9a886360941e7bfaf472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":secondary_templates:drawer.html.twig"));

        $__internal_ba4fbabb80a943234d107bde1edcd9c50b610361ee26756a7fb568144cd74d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4fbabb80a943234d107bde1edcd9c50b610361ee26756a7fb568144cd74d42->enter($__internal_ba4fbabb80a943234d107bde1edcd9c50b610361ee26756a7fb568144cd74d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":secondary_templates:drawer.html.twig"));

        // line 2
        $context["user"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method");
        // line 3
        echo "
<ul id=\"slide-out\" class=\"side-nav hidden custom-scrollbar sn-bg-2 click-drawer\">
   <!-- Logo -->
   <li>
      <div class=\"logo-wrapper waves-light\">
         <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_user", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
             <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()), "imagen", array()))), "html", null, true);
        echo "\" class=\"img-fluid flex-center\">
        </a>
      </div>
   </li>
   <!-- /.Logo -->
   <!-- Social -->
   <li>
      <ul class=\"social\">
         <li><a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
         <li><a class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
         <li><a class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
         <li><a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
      </ul>
   </li>
   <!-- /.Social -->
   <!-- Search Form -->
   <li>
      <form class=\"search-form\" role=\"search\">
         <div class=\"form-group waves-light\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
         </div>
      </form>
   </li>
   <!-- /.Search Form -->
   <!-- Side navigation links -->
   <li>
      <ul class=\"collapsible collapsible-accordion\">
         <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-home\"></i>Inicio</a>
         </li>
         <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_user", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa  fa-user-circle\"></i> Perfil</a>
         </li>
         <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_publicacion");
        echo "\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-cutlery\"></i>Nueva Publicacion</a>
         </li>
      </ul>
   </li>
   <!-- /.Side navigation links -->
   <div class=\"sidenav-bg mask-strong\"></div>
</ul>";
        
        $__internal_db4aa91e5db03232213b0f30824b7045579d248d8ee9a886360941e7bfaf472a->leave($__internal_db4aa91e5db03232213b0f30824b7045579d248d8ee9a886360941e7bfaf472a_prof);

        
        $__internal_ba4fbabb80a943234d107bde1edcd9c50b610361ee26756a7fb568144cd74d42->leave($__internal_ba4fbabb80a943234d107bde1edcd9c50b610361ee26756a7fb568144cd74d42_prof);

    }

    public function getTemplateName()
    {
        return ":secondary_templates:drawer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  75 => 40,  69 => 37,  38 => 9,  34 => 8,  27 => 3,  25 => 2,);
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

<ul id=\"slide-out\" class=\"side-nav hidden custom-scrollbar sn-bg-2 click-drawer\">
   <!-- Logo -->
   <li>
      <div class=\"logo-wrapper waves-light\">
         <a href=\"{{  path('profile_user', {'user': user.id}) }}\">
             <img src=\"{{asset(\"uploads/PerfilUsuario/#{user.perfil.imagen}\")}}\" class=\"img-fluid flex-center\">
        </a>
      </div>
   </li>
   <!-- /.Logo -->
   <!-- Social -->
   <li>
      <ul class=\"social\">
         <li><a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
         <li><a class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
         <li><a class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
         <li><a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
      </ul>
   </li>
   <!-- /.Social -->
   <!-- Search Form -->
   <li>
      <form class=\"search-form\" role=\"search\">
         <div class=\"form-group waves-light\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
         </div>
      </form>
   </li>
   <!-- /.Search Form -->
   <!-- Side navigation links -->
   <li>
      <ul class=\"collapsible collapsible-accordion\">
         <li>
            <a href=\"{{ path('homepage') }}\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-home\"></i>Inicio</a>
         </li>
         <li>
            <a href=\"{{  path('profile_user', {'user': user.id}) }}\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa  fa-user-circle\"></i> Perfil</a>
         </li>
         <li>
            <a href=\"{{  path('add_publicacion') }}\" class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-cutlery\"></i>Nueva Publicacion</a>
         </li>
      </ul>
   </li>
   <!-- /.Side navigation links -->
   <div class=\"sidenav-bg mask-strong\"></div>
</ul>", ":secondary_templates:drawer.html.twig", "/home/ubuntu/workspace/app/Resources/views/secondary_templates/drawer.html.twig");
    }
}

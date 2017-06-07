<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2f562685a29873477befbce8ebc7791c3fae912cb8e5e8e0654b367fbe91dcba extends Twig_Template
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
        $__internal_69bb34d9568339cc258737acfeb525dbcca8f68c5b5bedc52993c8f7ee97a165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bb34d9568339cc258737acfeb525dbcca8f68c5b5bedc52993c8f7ee97a165->enter($__internal_69bb34d9568339cc258737acfeb525dbcca8f68c5b5bedc52993c8f7ee97a165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0f4e9b65b54dbdd4f756ceaf02383c8e8a0388b27dd42e6b2eb313168724a8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4e9b65b54dbdd4f756ceaf02383c8e8a0388b27dd42e6b2eb313168724a8ec->enter($__internal_0f4e9b65b54dbdd4f756ceaf02383c8e8a0388b27dd42e6b2eb313168724a8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_69bb34d9568339cc258737acfeb525dbcca8f68c5b5bedc52993c8f7ee97a165->leave($__internal_69bb34d9568339cc258737acfeb525dbcca8f68c5b5bedc52993c8f7ee97a165_prof);

        
        $__internal_0f4e9b65b54dbdd4f756ceaf02383c8e8a0388b27dd42e6b2eb313168724a8ec->leave($__internal_0f4e9b65b54dbdd4f756ceaf02383c8e8a0388b27dd42e6b2eb313168724a8ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_3cf964940262e167f2b592a41c59034384f208e2b6a5cbade0dff462c8e17089 extends Twig_Template
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
        $__internal_01231b664553cd7c40cb356eda4c6d4087556abbcb3e3f5597b15b200443ef32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01231b664553cd7c40cb356eda4c6d4087556abbcb3e3f5597b15b200443ef32->enter($__internal_01231b664553cd7c40cb356eda4c6d4087556abbcb3e3f5597b15b200443ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_77fbb05e685b5443d253fe70d1142c1c8bde1b26f86e3e84ccad135483ba4d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fbb05e685b5443d253fe70d1142c1c8bde1b26f86e3e84ccad135483ba4d2f->enter($__internal_77fbb05e685b5443d253fe70d1142c1c8bde1b26f86e3e84ccad135483ba4d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_01231b664553cd7c40cb356eda4c6d4087556abbcb3e3f5597b15b200443ef32->leave($__internal_01231b664553cd7c40cb356eda4c6d4087556abbcb3e3f5597b15b200443ef32_prof);

        
        $__internal_77fbb05e685b5443d253fe70d1142c1c8bde1b26f86e3e84ccad135483ba4d2f->leave($__internal_77fbb05e685b5443d253fe70d1142c1c8bde1b26f86e3e84ccad135483ba4d2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}

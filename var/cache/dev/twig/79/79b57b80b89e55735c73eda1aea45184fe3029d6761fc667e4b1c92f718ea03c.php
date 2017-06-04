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
        $__internal_47d98570e6fc4199010cdf6a23087b355860542b63a96633265bb0b21900312a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d98570e6fc4199010cdf6a23087b355860542b63a96633265bb0b21900312a->enter($__internal_47d98570e6fc4199010cdf6a23087b355860542b63a96633265bb0b21900312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_002fe727374ac63321ecc98083576772e83af0a70fe4850c4813989c66428819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002fe727374ac63321ecc98083576772e83af0a70fe4850c4813989c66428819->enter($__internal_002fe727374ac63321ecc98083576772e83af0a70fe4850c4813989c66428819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_47d98570e6fc4199010cdf6a23087b355860542b63a96633265bb0b21900312a->leave($__internal_47d98570e6fc4199010cdf6a23087b355860542b63a96633265bb0b21900312a_prof);

        
        $__internal_002fe727374ac63321ecc98083576772e83af0a70fe4850c4813989c66428819->leave($__internal_002fe727374ac63321ecc98083576772e83af0a70fe4850c4813989c66428819_prof);

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

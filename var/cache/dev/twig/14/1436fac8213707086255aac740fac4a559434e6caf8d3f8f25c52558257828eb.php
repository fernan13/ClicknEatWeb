<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_6bc62518f54b1974d92a8f346a2f688f57293c40951c3f89abe5b9fd35c4dbeb extends Twig_Template
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
        $__internal_89ce85d3e59eef24bc0e6eb18c4876e8e0ed4240342a089888b5ddbe6a9efb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ce85d3e59eef24bc0e6eb18c4876e8e0ed4240342a089888b5ddbe6a9efb4d->enter($__internal_89ce85d3e59eef24bc0e6eb18c4876e8e0ed4240342a089888b5ddbe6a9efb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_bd7230591abf8b1d621538d67cde0d2bf0ccad0ed43a2390e0558430d8a65688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7230591abf8b1d621538d67cde0d2bf0ccad0ed43a2390e0558430d8a65688->enter($__internal_bd7230591abf8b1d621538d67cde0d2bf0ccad0ed43a2390e0558430d8a65688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_89ce85d3e59eef24bc0e6eb18c4876e8e0ed4240342a089888b5ddbe6a9efb4d->leave($__internal_89ce85d3e59eef24bc0e6eb18c4876e8e0ed4240342a089888b5ddbe6a9efb4d_prof);

        
        $__internal_bd7230591abf8b1d621538d67cde0d2bf0ccad0ed43a2390e0558430d8a65688->leave($__internal_bd7230591abf8b1d621538d67cde0d2bf0ccad0ed43a2390e0558430d8a65688_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}

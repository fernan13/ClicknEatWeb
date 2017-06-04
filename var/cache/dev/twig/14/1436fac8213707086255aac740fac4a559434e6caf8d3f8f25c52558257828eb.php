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
        $__internal_2bb2b1910416f563f7ae4c927353fc6ee855d63c92bb1e29e1acc959f1392f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb2b1910416f563f7ae4c927353fc6ee855d63c92bb1e29e1acc959f1392f0f->enter($__internal_2bb2b1910416f563f7ae4c927353fc6ee855d63c92bb1e29e1acc959f1392f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_95e0461d7c1cc51ad598934e70958ee778e294debccf2ef2eeb95e383903fd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e0461d7c1cc51ad598934e70958ee778e294debccf2ef2eeb95e383903fd80->enter($__internal_95e0461d7c1cc51ad598934e70958ee778e294debccf2ef2eeb95e383903fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_2bb2b1910416f563f7ae4c927353fc6ee855d63c92bb1e29e1acc959f1392f0f->leave($__internal_2bb2b1910416f563f7ae4c927353fc6ee855d63c92bb1e29e1acc959f1392f0f_prof);

        
        $__internal_95e0461d7c1cc51ad598934e70958ee778e294debccf2ef2eeb95e383903fd80->leave($__internal_95e0461d7c1cc51ad598934e70958ee778e294debccf2ef2eeb95e383903fd80_prof);

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

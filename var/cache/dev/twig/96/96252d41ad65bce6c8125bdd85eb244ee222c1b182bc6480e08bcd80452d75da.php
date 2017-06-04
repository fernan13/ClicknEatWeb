<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_552cd574cc59826c55522676d2808967edfb83c79ca6c83fdb97bfa8ba3823fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb65167d7c1e256d53afa05870cfef4c144ef976abf5ed7cd4fecab461a303e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb65167d7c1e256d53afa05870cfef4c144ef976abf5ed7cd4fecab461a303e->enter($__internal_5cb65167d7c1e256d53afa05870cfef4c144ef976abf5ed7cd4fecab461a303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_3c7734734a3a704483f927a2af804fa75a08d7bcc33e3c6db1be54460301f896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7734734a3a704483f927a2af804fa75a08d7bcc33e3c6db1be54460301f896->enter($__internal_3c7734734a3a704483f927a2af804fa75a08d7bcc33e3c6db1be54460301f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb65167d7c1e256d53afa05870cfef4c144ef976abf5ed7cd4fecab461a303e->leave($__internal_5cb65167d7c1e256d53afa05870cfef4c144ef976abf5ed7cd4fecab461a303e_prof);

        
        $__internal_3c7734734a3a704483f927a2af804fa75a08d7bcc33e3c6db1be54460301f896->leave($__internal_3c7734734a3a704483f927a2af804fa75a08d7bcc33e3c6db1be54460301f896_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cd035b486cb485655a3a2f4a343984f4f3df8c3a1f825baf2af05750421bf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd035b486cb485655a3a2f4a343984f4f3df8c3a1f825baf2af05750421bf26->enter($__internal_3cd035b486cb485655a3a2f4a343984f4f3df8c3a1f825baf2af05750421bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_481d801b445b753f1ae943faecb966fb1c5699005ca08f2886cd496a18b5b446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481d801b445b753f1ae943faecb966fb1c5699005ca08f2886cd496a18b5b446->enter($__internal_481d801b445b753f1ae943faecb966fb1c5699005ca08f2886cd496a18b5b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_481d801b445b753f1ae943faecb966fb1c5699005ca08f2886cd496a18b5b446->leave($__internal_481d801b445b753f1ae943faecb966fb1c5699005ca08f2886cd496a18b5b446_prof);

        
        $__internal_3cd035b486cb485655a3a2f4a343984f4f3df8c3a1f825baf2af05750421bf26->leave($__internal_3cd035b486cb485655a3a2f4a343984f4f3df8c3a1f825baf2af05750421bf26_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}

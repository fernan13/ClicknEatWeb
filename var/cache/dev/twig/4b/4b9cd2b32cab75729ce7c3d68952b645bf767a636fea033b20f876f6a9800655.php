<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cb122e7d4714ea0261f18a09fbee1444b1e45c16394c4fc3a2356f70347ccb70 extends Twig_Template
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
        $__internal_ba38c192c77db47525ece0ac22086abd4b25c087d2ddd36b829221038899dde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba38c192c77db47525ece0ac22086abd4b25c087d2ddd36b829221038899dde5->enter($__internal_ba38c192c77db47525ece0ac22086abd4b25c087d2ddd36b829221038899dde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9a5bae91d2dd783bf21831e2bc0563ea9e316ba1daf5438a9d509cd36a097c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5bae91d2dd783bf21831e2bc0563ea9e316ba1daf5438a9d509cd36a097c21->enter($__internal_9a5bae91d2dd783bf21831e2bc0563ea9e316ba1daf5438a9d509cd36a097c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ba38c192c77db47525ece0ac22086abd4b25c087d2ddd36b829221038899dde5->leave($__internal_ba38c192c77db47525ece0ac22086abd4b25c087d2ddd36b829221038899dde5_prof);

        
        $__internal_9a5bae91d2dd783bf21831e2bc0563ea9e316ba1daf5438a9d509cd36a097c21->leave($__internal_9a5bae91d2dd783bf21831e2bc0563ea9e316ba1daf5438a9d509cd36a097c21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

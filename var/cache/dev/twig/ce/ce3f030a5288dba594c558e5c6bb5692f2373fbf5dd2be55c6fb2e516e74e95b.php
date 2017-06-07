<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_758cf32f2e58be275bb74d36ee4efa05692247d6f19d1bb5481c4d32bc6646b0 extends Twig_Template
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
        $__internal_42ac2d17a892a71c839bf655d58ac4429deb5723c4d65786793effbb727b26d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ac2d17a892a71c839bf655d58ac4429deb5723c4d65786793effbb727b26d2->enter($__internal_42ac2d17a892a71c839bf655d58ac4429deb5723c4d65786793effbb727b26d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e0b69f3a986ed1f0803e080b42164b6a5df227d1470e5a94fda48a80f554e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b69f3a986ed1f0803e080b42164b6a5df227d1470e5a94fda48a80f554e79b->enter($__internal_e0b69f3a986ed1f0803e080b42164b6a5df227d1470e5a94fda48a80f554e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_42ac2d17a892a71c839bf655d58ac4429deb5723c4d65786793effbb727b26d2->leave($__internal_42ac2d17a892a71c839bf655d58ac4429deb5723c4d65786793effbb727b26d2_prof);

        
        $__internal_e0b69f3a986ed1f0803e080b42164b6a5df227d1470e5a94fda48a80f554e79b->leave($__internal_e0b69f3a986ed1f0803e080b42164b6a5df227d1470e5a94fda48a80f554e79b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

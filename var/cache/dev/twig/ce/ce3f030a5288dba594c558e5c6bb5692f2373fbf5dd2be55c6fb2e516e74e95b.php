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
        $__internal_03ac1c68ecd68fd349f5a7d897c356ab2acac2588a45449cdbc2a8a2c54ec98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ac1c68ecd68fd349f5a7d897c356ab2acac2588a45449cdbc2a8a2c54ec98c->enter($__internal_03ac1c68ecd68fd349f5a7d897c356ab2acac2588a45449cdbc2a8a2c54ec98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ac9a7fddb665f700736875f985f927ec0724f1c99ec9f95e510ff5a0bb982f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9a7fddb665f700736875f985f927ec0724f1c99ec9f95e510ff5a0bb982f43->enter($__internal_ac9a7fddb665f700736875f985f927ec0724f1c99ec9f95e510ff5a0bb982f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_03ac1c68ecd68fd349f5a7d897c356ab2acac2588a45449cdbc2a8a2c54ec98c->leave($__internal_03ac1c68ecd68fd349f5a7d897c356ab2acac2588a45449cdbc2a8a2c54ec98c_prof);

        
        $__internal_ac9a7fddb665f700736875f985f927ec0724f1c99ec9f95e510ff5a0bb982f43->leave($__internal_ac9a7fddb665f700736875f985f927ec0724f1c99ec9f95e510ff5a0bb982f43_prof);

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

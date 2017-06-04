<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_08f0caf5a918de016c3c04c7e6a545b43e391e561d591a369492cdd566f6eb16 extends Twig_Template
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
        $__internal_8ba30d5d242726c99a8416770b14e1a1258aedbf3a3d42a27af179ca34712043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba30d5d242726c99a8416770b14e1a1258aedbf3a3d42a27af179ca34712043->enter($__internal_8ba30d5d242726c99a8416770b14e1a1258aedbf3a3d42a27af179ca34712043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a1d36801d66746101fec5a0541aff89c84b4f43210aca5041e58cf5b6552024e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d36801d66746101fec5a0541aff89c84b4f43210aca5041e58cf5b6552024e->enter($__internal_a1d36801d66746101fec5a0541aff89c84b4f43210aca5041e58cf5b6552024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8ba30d5d242726c99a8416770b14e1a1258aedbf3a3d42a27af179ca34712043->leave($__internal_8ba30d5d242726c99a8416770b14e1a1258aedbf3a3d42a27af179ca34712043_prof);

        
        $__internal_a1d36801d66746101fec5a0541aff89c84b4f43210aca5041e58cf5b6552024e->leave($__internal_a1d36801d66746101fec5a0541aff89c84b4f43210aca5041e58cf5b6552024e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

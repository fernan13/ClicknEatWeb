<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_533d3c8b504e02c89a6cce9bc830e75fc8a46c71ac3329ab1fc803c4bf56f1d2 extends Twig_Template
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
        $__internal_1d2fc383b96c1065b9610a21d402c85be4474d798d95e27961beb7c120566d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2fc383b96c1065b9610a21d402c85be4474d798d95e27961beb7c120566d1a->enter($__internal_1d2fc383b96c1065b9610a21d402c85be4474d798d95e27961beb7c120566d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_59086bf013348eea3bdb4f1c08271d4cbb0296a237e68b0d7769ca8c4a3c55f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59086bf013348eea3bdb4f1c08271d4cbb0296a237e68b0d7769ca8c4a3c55f5->enter($__internal_59086bf013348eea3bdb4f1c08271d4cbb0296a237e68b0d7769ca8c4a3c55f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1d2fc383b96c1065b9610a21d402c85be4474d798d95e27961beb7c120566d1a->leave($__internal_1d2fc383b96c1065b9610a21d402c85be4474d798d95e27961beb7c120566d1a_prof);

        
        $__internal_59086bf013348eea3bdb4f1c08271d4cbb0296a237e68b0d7769ca8c4a3c55f5->leave($__internal_59086bf013348eea3bdb4f1c08271d4cbb0296a237e68b0d7769ca8c4a3c55f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

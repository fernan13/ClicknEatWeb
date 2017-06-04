<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5774a691b8106e048232e7bdee3dd1ad05b43f1a2af23d560673a2be93f4f245 extends Twig_Template
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
        $__internal_ff9cd619f16a791144ba783591dd975603caa5157a274f32eaeb8b281bc221db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9cd619f16a791144ba783591dd975603caa5157a274f32eaeb8b281bc221db->enter($__internal_ff9cd619f16a791144ba783591dd975603caa5157a274f32eaeb8b281bc221db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8275a0b46b7d4730f74483d9d1d6d2ba9e8bb53085eed7af7d3278e269b2d4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8275a0b46b7d4730f74483d9d1d6d2ba9e8bb53085eed7af7d3278e269b2d4e8->enter($__internal_8275a0b46b7d4730f74483d9d1d6d2ba9e8bb53085eed7af7d3278e269b2d4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ff9cd619f16a791144ba783591dd975603caa5157a274f32eaeb8b281bc221db->leave($__internal_ff9cd619f16a791144ba783591dd975603caa5157a274f32eaeb8b281bc221db_prof);

        
        $__internal_8275a0b46b7d4730f74483d9d1d6d2ba9e8bb53085eed7af7d3278e269b2d4e8->leave($__internal_8275a0b46b7d4730f74483d9d1d6d2ba9e8bb53085eed7af7d3278e269b2d4e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

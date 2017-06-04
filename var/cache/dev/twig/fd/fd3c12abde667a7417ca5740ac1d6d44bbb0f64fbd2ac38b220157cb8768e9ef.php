<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7ad416dc2067de5c5599435d886963e4f2bac1905af3602b5970ba9600680486 extends Twig_Template
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
        $__internal_5de7b9f605f414d5729adc0b00a6eb05713c2c2cd136b2fbc0687735ab0eca87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de7b9f605f414d5729adc0b00a6eb05713c2c2cd136b2fbc0687735ab0eca87->enter($__internal_5de7b9f605f414d5729adc0b00a6eb05713c2c2cd136b2fbc0687735ab0eca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1254f3c2a3567f56e557719f6104e10197d2ad7d53543abd26798317d1e274f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1254f3c2a3567f56e557719f6104e10197d2ad7d53543abd26798317d1e274f2->enter($__internal_1254f3c2a3567f56e557719f6104e10197d2ad7d53543abd26798317d1e274f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5de7b9f605f414d5729adc0b00a6eb05713c2c2cd136b2fbc0687735ab0eca87->leave($__internal_5de7b9f605f414d5729adc0b00a6eb05713c2c2cd136b2fbc0687735ab0eca87_prof);

        
        $__internal_1254f3c2a3567f56e557719f6104e10197d2ad7d53543abd26798317d1e274f2->leave($__internal_1254f3c2a3567f56e557719f6104e10197d2ad7d53543abd26798317d1e274f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

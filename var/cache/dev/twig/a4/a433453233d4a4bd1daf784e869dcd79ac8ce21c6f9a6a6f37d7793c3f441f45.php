<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_94e1b710c9054fd735928206d7900ef548f9d8f15b9eeda551dc72b8fcf4467f extends Twig_Template
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
        $__internal_42ef2c153450950c6ce057cc9e26c866e775686482a17e435a48b36687b9f2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ef2c153450950c6ce057cc9e26c866e775686482a17e435a48b36687b9f2b7->enter($__internal_42ef2c153450950c6ce057cc9e26c866e775686482a17e435a48b36687b9f2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2e8e36c5fec3d3dfeb15b7a93dc09174c4398a3dcfdc58fbe697691852d5d0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8e36c5fec3d3dfeb15b7a93dc09174c4398a3dcfdc58fbe697691852d5d0c9->enter($__internal_2e8e36c5fec3d3dfeb15b7a93dc09174c4398a3dcfdc58fbe697691852d5d0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_42ef2c153450950c6ce057cc9e26c866e775686482a17e435a48b36687b9f2b7->leave($__internal_42ef2c153450950c6ce057cc9e26c866e775686482a17e435a48b36687b9f2b7_prof);

        
        $__internal_2e8e36c5fec3d3dfeb15b7a93dc09174c4398a3dcfdc58fbe697691852d5d0c9->leave($__internal_2e8e36c5fec3d3dfeb15b7a93dc09174c4398a3dcfdc58fbe697691852d5d0c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_02f5840e878f58890afe27470e6dd68ad71f0db4d2292c71e00cfe8f8c8c003b extends Twig_Template
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
        $__internal_a02d5b58fc1fe10d57f16189e5a0f4280d127fb2999c691141b30e6a3f578bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02d5b58fc1fe10d57f16189e5a0f4280d127fb2999c691141b30e6a3f578bdc->enter($__internal_a02d5b58fc1fe10d57f16189e5a0f4280d127fb2999c691141b30e6a3f578bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_18d449410e0c3e2536531525cb65751eb5e9e6101370d84facef054e81d3bf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d449410e0c3e2536531525cb65751eb5e9e6101370d84facef054e81d3bf67->enter($__internal_18d449410e0c3e2536531525cb65751eb5e9e6101370d84facef054e81d3bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a02d5b58fc1fe10d57f16189e5a0f4280d127fb2999c691141b30e6a3f578bdc->leave($__internal_a02d5b58fc1fe10d57f16189e5a0f4280d127fb2999c691141b30e6a3f578bdc_prof);

        
        $__internal_18d449410e0c3e2536531525cb65751eb5e9e6101370d84facef054e81d3bf67->leave($__internal_18d449410e0c3e2536531525cb65751eb5e9e6101370d84facef054e81d3bf67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

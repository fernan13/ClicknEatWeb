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
        $__internal_54e0e1231b06ff8965cb80e31dcc3adef085d9e1e576e10884947f785e42d2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e0e1231b06ff8965cb80e31dcc3adef085d9e1e576e10884947f785e42d2bc->enter($__internal_54e0e1231b06ff8965cb80e31dcc3adef085d9e1e576e10884947f785e42d2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_24b5c6db9c68d45b94d18853e142e3be623c6e512b9f9eca50038b3b4dbcff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b5c6db9c68d45b94d18853e142e3be623c6e512b9f9eca50038b3b4dbcff9c->enter($__internal_24b5c6db9c68d45b94d18853e142e3be623c6e512b9f9eca50038b3b4dbcff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_54e0e1231b06ff8965cb80e31dcc3adef085d9e1e576e10884947f785e42d2bc->leave($__internal_54e0e1231b06ff8965cb80e31dcc3adef085d9e1e576e10884947f785e42d2bc_prof);

        
        $__internal_24b5c6db9c68d45b94d18853e142e3be623c6e512b9f9eca50038b3b4dbcff9c->leave($__internal_24b5c6db9c68d45b94d18853e142e3be623c6e512b9f9eca50038b3b4dbcff9c_prof);

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

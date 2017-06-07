<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c3ec87839ce98e7507241fe43c9b8bae6c36c764dfa5c38618656379eaf48614 extends Twig_Template
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
        $__internal_c20952729b108bf423a8a1799e31e07905ca04a9ea54cda1766b04a965715c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20952729b108bf423a8a1799e31e07905ca04a9ea54cda1766b04a965715c01->enter($__internal_c20952729b108bf423a8a1799e31e07905ca04a9ea54cda1766b04a965715c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5f8359ca1ad0455651f27bd5d735235e28e5ae82e95c1304fee12ec5e769d1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8359ca1ad0455651f27bd5d735235e28e5ae82e95c1304fee12ec5e769d1e1->enter($__internal_5f8359ca1ad0455651f27bd5d735235e28e5ae82e95c1304fee12ec5e769d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c20952729b108bf423a8a1799e31e07905ca04a9ea54cda1766b04a965715c01->leave($__internal_c20952729b108bf423a8a1799e31e07905ca04a9ea54cda1766b04a965715c01_prof);

        
        $__internal_5f8359ca1ad0455651f27bd5d735235e28e5ae82e95c1304fee12ec5e769d1e1->leave($__internal_5f8359ca1ad0455651f27bd5d735235e28e5ae82e95c1304fee12ec5e769d1e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

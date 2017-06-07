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
        $__internal_c6af177a9f2c8d2af171b2b8ae0106dd55197d5b5cf5c5be13ac8bcf140c63b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6af177a9f2c8d2af171b2b8ae0106dd55197d5b5cf5c5be13ac8bcf140c63b9->enter($__internal_c6af177a9f2c8d2af171b2b8ae0106dd55197d5b5cf5c5be13ac8bcf140c63b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ec92d5fc8ea098502d0c044ddb5fb7415d42ff7a9d4a1b59c2e665ca266bfc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec92d5fc8ea098502d0c044ddb5fb7415d42ff7a9d4a1b59c2e665ca266bfc29->enter($__internal_ec92d5fc8ea098502d0c044ddb5fb7415d42ff7a9d4a1b59c2e665ca266bfc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c6af177a9f2c8d2af171b2b8ae0106dd55197d5b5cf5c5be13ac8bcf140c63b9->leave($__internal_c6af177a9f2c8d2af171b2b8ae0106dd55197d5b5cf5c5be13ac8bcf140c63b9_prof);

        
        $__internal_ec92d5fc8ea098502d0c044ddb5fb7415d42ff7a9d4a1b59c2e665ca266bfc29->leave($__internal_ec92d5fc8ea098502d0c044ddb5fb7415d42ff7a9d4a1b59c2e665ca266bfc29_prof);

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

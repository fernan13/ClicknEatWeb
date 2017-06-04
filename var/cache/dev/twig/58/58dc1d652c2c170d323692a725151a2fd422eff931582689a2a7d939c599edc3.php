<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_293dadba11d7a4d828c49293ec1b9faecd8e391a63d58499ffda0fd762cedbd4 extends Twig_Template
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
        $__internal_6b9abac8fecd26c643c32ba2dd129c724ffb28dd2467694701962d5d6f99edd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9abac8fecd26c643c32ba2dd129c724ffb28dd2467694701962d5d6f99edd7->enter($__internal_6b9abac8fecd26c643c32ba2dd129c724ffb28dd2467694701962d5d6f99edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3143dd4fe0f9342ec7aaad0b0d9237737bac5780624ff7b8a5b512b526a00155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3143dd4fe0f9342ec7aaad0b0d9237737bac5780624ff7b8a5b512b526a00155->enter($__internal_3143dd4fe0f9342ec7aaad0b0d9237737bac5780624ff7b8a5b512b526a00155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6b9abac8fecd26c643c32ba2dd129c724ffb28dd2467694701962d5d6f99edd7->leave($__internal_6b9abac8fecd26c643c32ba2dd129c724ffb28dd2467694701962d5d6f99edd7_prof);

        
        $__internal_3143dd4fe0f9342ec7aaad0b0d9237737bac5780624ff7b8a5b512b526a00155->leave($__internal_3143dd4fe0f9342ec7aaad0b0d9237737bac5780624ff7b8a5b512b526a00155_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

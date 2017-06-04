<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f15078455acdc7a190119518b4e8680517abea23c727981bcedcf810cffcc39b extends Twig_Template
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
        $__internal_12690c39d5c43a647a76713f1da7ef663e51db79e642fe6e2f4321d902b1ea2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12690c39d5c43a647a76713f1da7ef663e51db79e642fe6e2f4321d902b1ea2c->enter($__internal_12690c39d5c43a647a76713f1da7ef663e51db79e642fe6e2f4321d902b1ea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_421620e77687267a2d56c64e75ed043b4fb8e68cc6e2c9ccd019948cde02a591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421620e77687267a2d56c64e75ed043b4fb8e68cc6e2c9ccd019948cde02a591->enter($__internal_421620e77687267a2d56c64e75ed043b4fb8e68cc6e2c9ccd019948cde02a591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_12690c39d5c43a647a76713f1da7ef663e51db79e642fe6e2f4321d902b1ea2c->leave($__internal_12690c39d5c43a647a76713f1da7ef663e51db79e642fe6e2f4321d902b1ea2c_prof);

        
        $__internal_421620e77687267a2d56c64e75ed043b4fb8e68cc6e2c9ccd019948cde02a591->leave($__internal_421620e77687267a2d56c64e75ed043b4fb8e68cc6e2c9ccd019948cde02a591_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

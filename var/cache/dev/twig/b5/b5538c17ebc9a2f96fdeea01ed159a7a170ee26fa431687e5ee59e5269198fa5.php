<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_08f0caf5a918de016c3c04c7e6a545b43e391e561d591a369492cdd566f6eb16 extends Twig_Template
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
        $__internal_cd1118e209242b5287a24cf99dfce586db594d6443263be4d2bdf4a861340a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1118e209242b5287a24cf99dfce586db594d6443263be4d2bdf4a861340a53->enter($__internal_cd1118e209242b5287a24cf99dfce586db594d6443263be4d2bdf4a861340a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3265e5ba410b68c6f7cd9818ff3dbd262734a848e30680a5398391fc8e296ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265e5ba410b68c6f7cd9818ff3dbd262734a848e30680a5398391fc8e296ab4->enter($__internal_3265e5ba410b68c6f7cd9818ff3dbd262734a848e30680a5398391fc8e296ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd1118e209242b5287a24cf99dfce586db594d6443263be4d2bdf4a861340a53->leave($__internal_cd1118e209242b5287a24cf99dfce586db594d6443263be4d2bdf4a861340a53_prof);

        
        $__internal_3265e5ba410b68c6f7cd9818ff3dbd262734a848e30680a5398391fc8e296ab4->leave($__internal_3265e5ba410b68c6f7cd9818ff3dbd262734a848e30680a5398391fc8e296ab4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

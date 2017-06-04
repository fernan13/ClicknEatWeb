<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0af9ff0bd0c16f0c61e52f0d8e38175917c736057dba68aa8ab376996cc55973 extends Twig_Template
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
        $__internal_a66c418ac3240e945cdd8458875756f12507e5de5297ac54888234d92eecf6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66c418ac3240e945cdd8458875756f12507e5de5297ac54888234d92eecf6f8->enter($__internal_a66c418ac3240e945cdd8458875756f12507e5de5297ac54888234d92eecf6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9e59d54ead076c3f76262417df0e66093cedcb7f2413e1c467948df728f42583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e59d54ead076c3f76262417df0e66093cedcb7f2413e1c467948df728f42583->enter($__internal_9e59d54ead076c3f76262417df0e66093cedcb7f2413e1c467948df728f42583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a66c418ac3240e945cdd8458875756f12507e5de5297ac54888234d92eecf6f8->leave($__internal_a66c418ac3240e945cdd8458875756f12507e5de5297ac54888234d92eecf6f8_prof);

        
        $__internal_9e59d54ead076c3f76262417df0e66093cedcb7f2413e1c467948df728f42583->leave($__internal_9e59d54ead076c3f76262417df0e66093cedcb7f2413e1c467948df728f42583_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

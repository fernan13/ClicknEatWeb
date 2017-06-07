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
        $__internal_9b7decca07fbfa6646b1f0c2c3d951b124081c2ff376ac55b2d5957092137d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7decca07fbfa6646b1f0c2c3d951b124081c2ff376ac55b2d5957092137d77->enter($__internal_9b7decca07fbfa6646b1f0c2c3d951b124081c2ff376ac55b2d5957092137d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d6a10ae56b0ac5902bc9cdf7e3a6c77a39e42aae0605e5734c77ec768c547bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a10ae56b0ac5902bc9cdf7e3a6c77a39e42aae0605e5734c77ec768c547bcc->enter($__internal_d6a10ae56b0ac5902bc9cdf7e3a6c77a39e42aae0605e5734c77ec768c547bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9b7decca07fbfa6646b1f0c2c3d951b124081c2ff376ac55b2d5957092137d77->leave($__internal_9b7decca07fbfa6646b1f0c2c3d951b124081c2ff376ac55b2d5957092137d77_prof);

        
        $__internal_d6a10ae56b0ac5902bc9cdf7e3a6c77a39e42aae0605e5734c77ec768c547bcc->leave($__internal_d6a10ae56b0ac5902bc9cdf7e3a6c77a39e42aae0605e5734c77ec768c547bcc_prof);

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

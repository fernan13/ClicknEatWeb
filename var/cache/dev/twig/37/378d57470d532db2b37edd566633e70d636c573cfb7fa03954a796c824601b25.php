<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_31461b6ea42b8552fac8ade5c95882b0ae505ab518c4aa39fafa08617498a0b0 extends Twig_Template
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
        $__internal_e3e62844ad246de94dc1d052241f499ec99e7ce2496fd417df255210c84b796b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e62844ad246de94dc1d052241f499ec99e7ce2496fd417df255210c84b796b->enter($__internal_e3e62844ad246de94dc1d052241f499ec99e7ce2496fd417df255210c84b796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_66a1c1a0e8ee0b518d12698ea6d61c48ca7bdcda6da2406b75d06af2ddb54050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a1c1a0e8ee0b518d12698ea6d61c48ca7bdcda6da2406b75d06af2ddb54050->enter($__internal_66a1c1a0e8ee0b518d12698ea6d61c48ca7bdcda6da2406b75d06af2ddb54050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e3e62844ad246de94dc1d052241f499ec99e7ce2496fd417df255210c84b796b->leave($__internal_e3e62844ad246de94dc1d052241f499ec99e7ce2496fd417df255210c84b796b_prof);

        
        $__internal_66a1c1a0e8ee0b518d12698ea6d61c48ca7bdcda6da2406b75d06af2ddb54050->leave($__internal_66a1c1a0e8ee0b518d12698ea6d61c48ca7bdcda6da2406b75d06af2ddb54050_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

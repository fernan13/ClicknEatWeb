<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_849b66032e12e9f562019f902d8364da7baaf42c5c204f1d7303adba3236b0bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79ce78150e6b1a93434718088c9357e50c20ce3db177440028d6197368548413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ce78150e6b1a93434718088c9357e50c20ce3db177440028d6197368548413->enter($__internal_79ce78150e6b1a93434718088c9357e50c20ce3db177440028d6197368548413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_dc4d99d392c3596717df67fcc5dd4ad90c9abca46d545d39db881e22df8dbec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4d99d392c3596717df67fcc5dd4ad90c9abca46d545d39db881e22df8dbec5->enter($__internal_dc4d99d392c3596717df67fcc5dd4ad90c9abca46d545d39db881e22df8dbec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_79ce78150e6b1a93434718088c9357e50c20ce3db177440028d6197368548413->leave($__internal_79ce78150e6b1a93434718088c9357e50c20ce3db177440028d6197368548413_prof);

        
        $__internal_dc4d99d392c3596717df67fcc5dd4ad90c9abca46d545d39db881e22df8dbec5->leave($__internal_dc4d99d392c3596717df67fcc5dd4ad90c9abca46d545d39db881e22df8dbec5_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_d213e13d146389897bb5f0522ac414d648c92f7a775963bc26b6cc83bcf81ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d213e13d146389897bb5f0522ac414d648c92f7a775963bc26b6cc83bcf81ba9->enter($__internal_d213e13d146389897bb5f0522ac414d648c92f7a775963bc26b6cc83bcf81ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_89a63a658c18a528728b1dc3a048827baf58a9682766b2fa200fc080adcbe745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a63a658c18a528728b1dc3a048827baf58a9682766b2fa200fc080adcbe745->enter($__internal_89a63a658c18a528728b1dc3a048827baf58a9682766b2fa200fc080adcbe745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_89a63a658c18a528728b1dc3a048827baf58a9682766b2fa200fc080adcbe745->leave($__internal_89a63a658c18a528728b1dc3a048827baf58a9682766b2fa200fc080adcbe745_prof);

        
        $__internal_d213e13d146389897bb5f0522ac414d648c92f7a775963bc26b6cc83bcf81ba9->leave($__internal_d213e13d146389897bb5f0522ac414d648c92f7a775963bc26b6cc83bcf81ba9_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
    </body>
</html>
", "HWIOAuthBundle::layout.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/layout.html.twig");
    }
}

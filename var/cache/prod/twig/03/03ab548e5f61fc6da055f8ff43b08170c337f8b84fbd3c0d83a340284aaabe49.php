<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_00deacf78757749ba82da97319ef8f740f5b30620444f669c4344dc8fb13223f extends Twig_Template
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
        $__internal_0a83112492a6d0a6737ad0ef5c28f7f1f5a8c8f89c5923cae3b00605d4591884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a83112492a6d0a6737ad0ef5c28f7f1f5a8c8f89c5923cae3b00605d4591884->enter($__internal_0a83112492a6d0a6737ad0ef5c28f7f1f5a8c8f89c5923cae3b00605d4591884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

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
        
        $__internal_0a83112492a6d0a6737ad0ef5c28f7f1f5a8c8f89c5923cae3b00605d4591884->leave($__internal_0a83112492a6d0a6737ad0ef5c28f7f1f5a8c8f89c5923cae3b00605d4591884_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_04cdca838028492971b1bdd8bffffa0d50b532f378f86183af10468a9bfbdc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cdca838028492971b1bdd8bffffa0d50b532f378f86183af10468a9bfbdc02->enter($__internal_04cdca838028492971b1bdd8bffffa0d50b532f378f86183af10468a9bfbdc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_04cdca838028492971b1bdd8bffffa0d50b532f378f86183af10468a9bfbdc02->leave($__internal_04cdca838028492971b1bdd8bffffa0d50b532f378f86183af10468a9bfbdc02_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
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

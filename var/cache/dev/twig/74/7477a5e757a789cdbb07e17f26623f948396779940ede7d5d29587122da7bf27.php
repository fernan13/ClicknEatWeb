<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8d4e9b874fb8c6f9fdf99257f5a8a5bfadc0161dd9465bba44cf708919c567bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42b55766c1939a5f5cfa1fb35b9b5712b7c6b4ce3abca405102e7384b4b349a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b55766c1939a5f5cfa1fb35b9b5712b7c6b4ce3abca405102e7384b4b349a1->enter($__internal_42b55766c1939a5f5cfa1fb35b9b5712b7c6b4ce3abca405102e7384b4b349a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1b5554a50110c5dc4c8c76c735e9b5d16e334f152871654bb47bc95f4cbe4873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5554a50110c5dc4c8c76c735e9b5d16e334f152871654bb47bc95f4cbe4873->enter($__internal_1b5554a50110c5dc4c8c76c735e9b5d16e334f152871654bb47bc95f4cbe4873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_42b55766c1939a5f5cfa1fb35b9b5712b7c6b4ce3abca405102e7384b4b349a1->leave($__internal_42b55766c1939a5f5cfa1fb35b9b5712b7c6b4ce3abca405102e7384b4b349a1_prof);

        
        $__internal_1b5554a50110c5dc4c8c76c735e9b5d16e334f152871654bb47bc95f4cbe4873->leave($__internal_1b5554a50110c5dc4c8c76c735e9b5d16e334f152871654bb47bc95f4cbe4873_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f901fcb53382d8f378315fd9b65f7043da1c4fab9883a09231c4daa166c1e6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f901fcb53382d8f378315fd9b65f7043da1c4fab9883a09231c4daa166c1e6b5->enter($__internal_f901fcb53382d8f378315fd9b65f7043da1c4fab9883a09231c4daa166c1e6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_145c3233d66b0bb91aaa848233ce2e27818b56a226baf9d91169204eda50ce77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145c3233d66b0bb91aaa848233ce2e27818b56a226baf9d91169204eda50ce77->enter($__internal_145c3233d66b0bb91aaa848233ce2e27818b56a226baf9d91169204eda50ce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_145c3233d66b0bb91aaa848233ce2e27818b56a226baf9d91169204eda50ce77->leave($__internal_145c3233d66b0bb91aaa848233ce2e27818b56a226baf9d91169204eda50ce77_prof);

        
        $__internal_f901fcb53382d8f378315fd9b65f7043da1c4fab9883a09231c4daa166c1e6b5->leave($__internal_f901fcb53382d8f378315fd9b65f7043da1c4fab9883a09231c4daa166c1e6b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

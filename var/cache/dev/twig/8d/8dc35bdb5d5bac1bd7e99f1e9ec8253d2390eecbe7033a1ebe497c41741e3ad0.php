<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ea4a6076e049bfc9c48bf70679f103e8d4bb6991de1d3e069feff3641a9de8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa879f71cc8b515d8b8da083899d1fc8e5e6ba7ad65da63fb48815d75106ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa879f71cc8b515d8b8da083899d1fc8e5e6ba7ad65da63fb48815d75106ead->enter($__internal_6fa879f71cc8b515d8b8da083899d1fc8e5e6ba7ad65da63fb48815d75106ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8db9e83e9361d6e667fc62dcddc5eb0c1751c3554c77934271c49ae43eb05f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db9e83e9361d6e667fc62dcddc5eb0c1751c3554c77934271c49ae43eb05f81->enter($__internal_8db9e83e9361d6e667fc62dcddc5eb0c1751c3554c77934271c49ae43eb05f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa879f71cc8b515d8b8da083899d1fc8e5e6ba7ad65da63fb48815d75106ead->leave($__internal_6fa879f71cc8b515d8b8da083899d1fc8e5e6ba7ad65da63fb48815d75106ead_prof);

        
        $__internal_8db9e83e9361d6e667fc62dcddc5eb0c1751c3554c77934271c49ae43eb05f81->leave($__internal_8db9e83e9361d6e667fc62dcddc5eb0c1751c3554c77934271c49ae43eb05f81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_035e94934174987ca2b35c5ae4dfff26d337a8d1ce1ddbb3796351eb3cf35b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035e94934174987ca2b35c5ae4dfff26d337a8d1ce1ddbb3796351eb3cf35b7a->enter($__internal_035e94934174987ca2b35c5ae4dfff26d337a8d1ce1ddbb3796351eb3cf35b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b471c4c0126baa389966de33cd605f40b2c0c5c8666a77cf473fcbc35a7b947e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b471c4c0126baa389966de33cd605f40b2c0c5c8666a77cf473fcbc35a7b947e->enter($__internal_b471c4c0126baa389966de33cd605f40b2c0c5c8666a77cf473fcbc35a7b947e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b471c4c0126baa389966de33cd605f40b2c0c5c8666a77cf473fcbc35a7b947e->leave($__internal_b471c4c0126baa389966de33cd605f40b2c0c5c8666a77cf473fcbc35a7b947e_prof);

        
        $__internal_035e94934174987ca2b35c5ae4dfff26d337a8d1ce1ddbb3796351eb3cf35b7a->leave($__internal_035e94934174987ca2b35c5ae4dfff26d337a8d1ce1ddbb3796351eb3cf35b7a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_94bf464a78e5ac6adc3831c0e54fa62ea20a5e04107f9b2008a6ee239c36bd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bf464a78e5ac6adc3831c0e54fa62ea20a5e04107f9b2008a6ee239c36bd04->enter($__internal_94bf464a78e5ac6adc3831c0e54fa62ea20a5e04107f9b2008a6ee239c36bd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3163dc7a02945c1a5dd981f54739fc479baf0eede769b17ab92eb05bc1c65f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3163dc7a02945c1a5dd981f54739fc479baf0eede769b17ab92eb05bc1c65f0->enter($__internal_a3163dc7a02945c1a5dd981f54739fc479baf0eede769b17ab92eb05bc1c65f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3163dc7a02945c1a5dd981f54739fc479baf0eede769b17ab92eb05bc1c65f0->leave($__internal_a3163dc7a02945c1a5dd981f54739fc479baf0eede769b17ab92eb05bc1c65f0_prof);

        
        $__internal_94bf464a78e5ac6adc3831c0e54fa62ea20a5e04107f9b2008a6ee239c36bd04->leave($__internal_94bf464a78e5ac6adc3831c0e54fa62ea20a5e04107f9b2008a6ee239c36bd04_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a051b94f9277c47c278c20a772a0fa596bc6bee869df66720f1a7854887899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a051b94f9277c47c278c20a772a0fa596bc6bee869df66720f1a7854887899->enter($__internal_f5a051b94f9277c47c278c20a772a0fa596bc6bee869df66720f1a7854887899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_632acb2fad784489326cae7bd5a26b6dcae5c62f97c3362857e9309e25baf9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632acb2fad784489326cae7bd5a26b6dcae5c62f97c3362857e9309e25baf9e5->enter($__internal_632acb2fad784489326cae7bd5a26b6dcae5c62f97c3362857e9309e25baf9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_632acb2fad784489326cae7bd5a26b6dcae5c62f97c3362857e9309e25baf9e5->leave($__internal_632acb2fad784489326cae7bd5a26b6dcae5c62f97c3362857e9309e25baf9e5_prof);

        
        $__internal_f5a051b94f9277c47c278c20a772a0fa596bc6bee869df66720f1a7854887899->leave($__internal_f5a051b94f9277c47c278c20a772a0fa596bc6bee869df66720f1a7854887899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

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
        $__internal_d996136b8fab1f95803af905940cdf1cbf35c09e3f8540ca2fdb6be2d214f0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d996136b8fab1f95803af905940cdf1cbf35c09e3f8540ca2fdb6be2d214f0b7->enter($__internal_d996136b8fab1f95803af905940cdf1cbf35c09e3f8540ca2fdb6be2d214f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a8d6df590f881ec31c4ce38813e872796ff22b36395493e239f04c7a78d79e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6df590f881ec31c4ce38813e872796ff22b36395493e239f04c7a78d79e6d->enter($__internal_a8d6df590f881ec31c4ce38813e872796ff22b36395493e239f04c7a78d79e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d996136b8fab1f95803af905940cdf1cbf35c09e3f8540ca2fdb6be2d214f0b7->leave($__internal_d996136b8fab1f95803af905940cdf1cbf35c09e3f8540ca2fdb6be2d214f0b7_prof);

        
        $__internal_a8d6df590f881ec31c4ce38813e872796ff22b36395493e239f04c7a78d79e6d->leave($__internal_a8d6df590f881ec31c4ce38813e872796ff22b36395493e239f04c7a78d79e6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0651913c0508b6dcc8ff731c82fe5ab50677fb59d55d6a994158235c65f64e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0651913c0508b6dcc8ff731c82fe5ab50677fb59d55d6a994158235c65f64e0f->enter($__internal_0651913c0508b6dcc8ff731c82fe5ab50677fb59d55d6a994158235c65f64e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_870deff6674a3e9ab1700e81c70be3f871828a471d1e2344707d93bbce951942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870deff6674a3e9ab1700e81c70be3f871828a471d1e2344707d93bbce951942->enter($__internal_870deff6674a3e9ab1700e81c70be3f871828a471d1e2344707d93bbce951942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_870deff6674a3e9ab1700e81c70be3f871828a471d1e2344707d93bbce951942->leave($__internal_870deff6674a3e9ab1700e81c70be3f871828a471d1e2344707d93bbce951942_prof);

        
        $__internal_0651913c0508b6dcc8ff731c82fe5ab50677fb59d55d6a994158235c65f64e0f->leave($__internal_0651913c0508b6dcc8ff731c82fe5ab50677fb59d55d6a994158235c65f64e0f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b105376f8b957d24cbf5aa65553c8f6e77eb5f2ae19169f5613a5091182f2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b105376f8b957d24cbf5aa65553c8f6e77eb5f2ae19169f5613a5091182f2ae->enter($__internal_0b105376f8b957d24cbf5aa65553c8f6e77eb5f2ae19169f5613a5091182f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_774e20d86660ccf1ac6179b67b2f71d3446d58eb5076b3281ec5b608b3db7fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774e20d86660ccf1ac6179b67b2f71d3446d58eb5076b3281ec5b608b3db7fe5->enter($__internal_774e20d86660ccf1ac6179b67b2f71d3446d58eb5076b3281ec5b608b3db7fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_774e20d86660ccf1ac6179b67b2f71d3446d58eb5076b3281ec5b608b3db7fe5->leave($__internal_774e20d86660ccf1ac6179b67b2f71d3446d58eb5076b3281ec5b608b3db7fe5_prof);

        
        $__internal_0b105376f8b957d24cbf5aa65553c8f6e77eb5f2ae19169f5613a5091182f2ae->leave($__internal_0b105376f8b957d24cbf5aa65553c8f6e77eb5f2ae19169f5613a5091182f2ae_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_15a7a963ceb76f788d4fe2c835f1976e13e780814343055f79669d0168084f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a7a963ceb76f788d4fe2c835f1976e13e780814343055f79669d0168084f42->enter($__internal_15a7a963ceb76f788d4fe2c835f1976e13e780814343055f79669d0168084f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dc133fd6b714eca6dbf45ceb5fc19c2b9de941f891018bcaae391469a0c4d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc133fd6b714eca6dbf45ceb5fc19c2b9de941f891018bcaae391469a0c4d0f->enter($__internal_8dc133fd6b714eca6dbf45ceb5fc19c2b9de941f891018bcaae391469a0c4d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8dc133fd6b714eca6dbf45ceb5fc19c2b9de941f891018bcaae391469a0c4d0f->leave($__internal_8dc133fd6b714eca6dbf45ceb5fc19c2b9de941f891018bcaae391469a0c4d0f_prof);

        
        $__internal_15a7a963ceb76f788d4fe2c835f1976e13e780814343055f79669d0168084f42->leave($__internal_15a7a963ceb76f788d4fe2c835f1976e13e780814343055f79669d0168084f42_prof);

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

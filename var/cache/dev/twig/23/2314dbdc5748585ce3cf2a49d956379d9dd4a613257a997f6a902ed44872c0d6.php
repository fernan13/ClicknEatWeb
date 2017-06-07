<?php

/* HWIOAuthBundle:Connect:registration.html.twig */
class __TwigTemplate_2f65aa4e6de93bf3bcae14acf59a2b68569f672e25e3e5ca9f76dd18dff9e022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_384b462efc353d3dd27d886077f55910850288b7de8df3991f188e785f2b894f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384b462efc353d3dd27d886077f55910850288b7de8df3991f188e785f2b894f->enter($__internal_384b462efc353d3dd27d886077f55910850288b7de8df3991f188e785f2b894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $__internal_d3611a6d5193628ab9f083b7c257b57be7e1b1b27cb0c5c1832b2f20ba7c4536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3611a6d5193628ab9f083b7c257b57be7e1b1b27cb0c5c1832b2f20ba7c4536->enter($__internal_d3611a6d5193628ab9f083b7c257b57be7e1b1b27cb0c5c1832b2f20ba7c4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384b462efc353d3dd27d886077f55910850288b7de8df3991f188e785f2b894f->leave($__internal_384b462efc353d3dd27d886077f55910850288b7de8df3991f188e785f2b894f_prof);

        
        $__internal_d3611a6d5193628ab9f083b7c257b57be7e1b1b27cb0c5c1832b2f20ba7c4536->leave($__internal_d3611a6d5193628ab9f083b7c257b57be7e1b1b27cb0c5c1832b2f20ba7c4536_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_c2304adc33b656bf8368e0dcd8586112e247e563b02a3e3813d71b5fe4b38bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2304adc33b656bf8368e0dcd8586112e247e563b02a3e3813d71b5fe4b38bb3->enter($__internal_c2304adc33b656bf8368e0dcd8586112e247e563b02a3e3813d71b5fe4b38bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_3545a5efd75c1ee00298217a515603e59d8907dda7a19d1f0b4350d85506d0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3545a5efd75c1ee00298217a515603e59d8907dda7a19d1f0b4350d85506d0c9->enter($__internal_3545a5efd75c1ee00298217a515603e59d8907dda7a19d1f0b4350d85506d0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.register", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect_registration", array("key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "attr" => array("class" => "hwi_oauth_registration_register")));
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.registration.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.registration.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
        
        $__internal_3545a5efd75c1ee00298217a515603e59d8907dda7a19d1f0b4350d85506d0c9->leave($__internal_3545a5efd75c1ee00298217a515603e59d8907dda7a19d1f0b4350d85506d0c9_prof);

        
        $__internal_c2304adc33b656bf8368e0dcd8586112e247e563b02a3e3813d71b5fe4b38bb3->leave($__internal_c2304adc33b656bf8368e0dcd8586112e247e563b02a3e3813d71b5fe4b38bb3_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  84 => 17,  82 => 16,  76 => 13,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
    <div class=\"row\">
        <div class=\"span6\">
            {{ form_start(form, {'action': path('hwi_oauth_connect_registration', {'key': key}), 'attr': {'class': 'hwi_oauth_registration_register'}}) }}
                {{ form_widget(form) }}
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>
                    <a href=\"{{ path('hwi_oauth_connect') }}\" class=\"btn\">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>
                </div>
            {{ form_end(form) }}
        </div>
        <div class=\"span6\">
            {% if userInformation.profilePicture is not empty %}
                <img src=\"{{ userInformation.profilePicture }}\" />
            {% endif %}
        </div>
    </div>

{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration.html.twig", "/home/ubuntu/workspace/vendor/hwi/oauth-bundle/Resources/views/Connect/registration.html.twig");
    }
}

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
        $__internal_d4c191f5b237c4db5662e62e26b7aa2c53a03c623957158ac9c8c165160bb146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c191f5b237c4db5662e62e26b7aa2c53a03c623957158ac9c8c165160bb146->enter($__internal_d4c191f5b237c4db5662e62e26b7aa2c53a03c623957158ac9c8c165160bb146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $__internal_575356d1c1fed3a0a40cf7a3d46677fac808587f0d96868e3040d6d992eba43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575356d1c1fed3a0a40cf7a3d46677fac808587f0d96868e3040d6d992eba43b->enter($__internal_575356d1c1fed3a0a40cf7a3d46677fac808587f0d96868e3040d6d992eba43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c191f5b237c4db5662e62e26b7aa2c53a03c623957158ac9c8c165160bb146->leave($__internal_d4c191f5b237c4db5662e62e26b7aa2c53a03c623957158ac9c8c165160bb146_prof);

        
        $__internal_575356d1c1fed3a0a40cf7a3d46677fac808587f0d96868e3040d6d992eba43b->leave($__internal_575356d1c1fed3a0a40cf7a3d46677fac808587f0d96868e3040d6d992eba43b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_3389901a171d35edae166ee1d0c2e1083445f2191bc1a2d0a7b1cfda797776bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3389901a171d35edae166ee1d0c2e1083445f2191bc1a2d0a7b1cfda797776bf->enter($__internal_3389901a171d35edae166ee1d0c2e1083445f2191bc1a2d0a7b1cfda797776bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_dd39d700aad3a3d0d9103a4c7b851cdc03de8fede71924ed213f602d6ff4c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd39d700aad3a3d0d9103a4c7b851cdc03de8fede71924ed213f602d6ff4c7c9->enter($__internal_dd39d700aad3a3d0d9103a4c7b851cdc03de8fede71924ed213f602d6ff4c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

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
        
        $__internal_dd39d700aad3a3d0d9103a4c7b851cdc03de8fede71924ed213f602d6ff4c7c9->leave($__internal_dd39d700aad3a3d0d9103a4c7b851cdc03de8fede71924ed213f602d6ff4c7c9_prof);

        
        $__internal_3389901a171d35edae166ee1d0c2e1083445f2191bc1a2d0a7b1cfda797776bf->leave($__internal_3389901a171d35edae166ee1d0c2e1083445f2191bc1a2d0a7b1cfda797776bf_prof);

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

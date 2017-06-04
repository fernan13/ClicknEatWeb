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
        $__internal_1a3e04b5e483481064c81fec775fa5a71fded4b79c5456185df3ef2d5c3d2a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3e04b5e483481064c81fec775fa5a71fded4b79c5456185df3ef2d5c3d2a4c->enter($__internal_1a3e04b5e483481064c81fec775fa5a71fded4b79c5456185df3ef2d5c3d2a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_6b63017d6c2722421f9fb5ea369c8c2ef5253594765af63a8b8a1a6fd17d0a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b63017d6c2722421f9fb5ea369c8c2ef5253594765af63a8b8a1a6fd17d0a86->enter($__internal_6b63017d6c2722421f9fb5ea369c8c2ef5253594765af63a8b8a1a6fd17d0a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

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
        
        $__internal_1a3e04b5e483481064c81fec775fa5a71fded4b79c5456185df3ef2d5c3d2a4c->leave($__internal_1a3e04b5e483481064c81fec775fa5a71fded4b79c5456185df3ef2d5c3d2a4c_prof);

        
        $__internal_6b63017d6c2722421f9fb5ea369c8c2ef5253594765af63a8b8a1a6fd17d0a86->leave($__internal_6b63017d6c2722421f9fb5ea369c8c2ef5253594765af63a8b8a1a6fd17d0a86_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_cdd33578689ebdee59398699af4c22f5475ff500b3aa0604a84c6bfd0f8e5e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd33578689ebdee59398699af4c22f5475ff500b3aa0604a84c6bfd0f8e5e0e->enter($__internal_cdd33578689ebdee59398699af4c22f5475ff500b3aa0604a84c6bfd0f8e5e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_b7c472b23d52bc64cfb85547caa2acb16979d74bf186d062436e7d443397fd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c472b23d52bc64cfb85547caa2acb16979d74bf186d062436e7d443397fd80->enter($__internal_b7c472b23d52bc64cfb85547caa2acb16979d74bf186d062436e7d443397fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_b7c472b23d52bc64cfb85547caa2acb16979d74bf186d062436e7d443397fd80->leave($__internal_b7c472b23d52bc64cfb85547caa2acb16979d74bf186d062436e7d443397fd80_prof);

        
        $__internal_cdd33578689ebdee59398699af4c22f5475ff500b3aa0604a84c6bfd0f8e5e0e->leave($__internal_cdd33578689ebdee59398699af4c22f5475ff500b3aa0604a84c6bfd0f8e5e0e_prof);

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

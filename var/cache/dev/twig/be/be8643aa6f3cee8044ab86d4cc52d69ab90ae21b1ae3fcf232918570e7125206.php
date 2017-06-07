<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8b72763b9fecd09edaed0676af5e49b4788c3bcf745547d1decf5955322b38d5 extends Twig_Template
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
        $__internal_d4a03308099f3fbe1bd2c583be1650ae3b5391c40deb22aff953d8a67437fdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a03308099f3fbe1bd2c583be1650ae3b5391c40deb22aff953d8a67437fdb9->enter($__internal_d4a03308099f3fbe1bd2c583be1650ae3b5391c40deb22aff953d8a67437fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8e203653157f58584f7da1e4b0c219bbf2d43b9be636351689b8c59ab23ffe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e203653157f58584f7da1e4b0c219bbf2d43b9be636351689b8c59ab23ffe96->enter($__internal_8e203653157f58584f7da1e4b0c219bbf2d43b9be636351689b8c59ab23ffe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d4a03308099f3fbe1bd2c583be1650ae3b5391c40deb22aff953d8a67437fdb9->leave($__internal_d4a03308099f3fbe1bd2c583be1650ae3b5391c40deb22aff953d8a67437fdb9_prof);

        
        $__internal_8e203653157f58584f7da1e4b0c219bbf2d43b9be636351689b8c59ab23ffe96->leave($__internal_8e203653157f58584f7da1e4b0c219bbf2d43b9be636351689b8c59ab23ffe96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

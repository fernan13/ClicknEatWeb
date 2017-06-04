<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_66460347cbc2a6409a5026c130611f64ac3407640a2cc9a7a36380c778df6507 extends Twig_Template
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
        $__internal_bf3cb2bba51cd1c19647b910af0f856d97aa19f5e4dfdd4f1a21c2d7b0a96466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3cb2bba51cd1c19647b910af0f856d97aa19f5e4dfdd4f1a21c2d7b0a96466->enter($__internal_bf3cb2bba51cd1c19647b910af0f856d97aa19f5e4dfdd4f1a21c2d7b0a96466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c565e196b5c94f8b06a11a22e0915aed7861f8e33269badacc903596af573148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c565e196b5c94f8b06a11a22e0915aed7861f8e33269badacc903596af573148->enter($__internal_c565e196b5c94f8b06a11a22e0915aed7861f8e33269badacc903596af573148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf3cb2bba51cd1c19647b910af0f856d97aa19f5e4dfdd4f1a21c2d7b0a96466->leave($__internal_bf3cb2bba51cd1c19647b910af0f856d97aa19f5e4dfdd4f1a21c2d7b0a96466_prof);

        
        $__internal_c565e196b5c94f8b06a11a22e0915aed7861f8e33269badacc903596af573148->leave($__internal_c565e196b5c94f8b06a11a22e0915aed7861f8e33269badacc903596af573148_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

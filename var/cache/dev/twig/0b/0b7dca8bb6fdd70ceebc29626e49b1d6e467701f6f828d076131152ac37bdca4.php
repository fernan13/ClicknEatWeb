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
        $__internal_3bb206bcb997e8fefc139f59bea495c2bfec58c2a78dfa8a8d03257a661f3fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb206bcb997e8fefc139f59bea495c2bfec58c2a78dfa8a8d03257a661f3fda->enter($__internal_3bb206bcb997e8fefc139f59bea495c2bfec58c2a78dfa8a8d03257a661f3fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_348f9288cf9b7c82a4f7d3f44921a9453742304a7d16fa411aba79e620c1e793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348f9288cf9b7c82a4f7d3f44921a9453742304a7d16fa411aba79e620c1e793->enter($__internal_348f9288cf9b7c82a4f7d3f44921a9453742304a7d16fa411aba79e620c1e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3bb206bcb997e8fefc139f59bea495c2bfec58c2a78dfa8a8d03257a661f3fda->leave($__internal_3bb206bcb997e8fefc139f59bea495c2bfec58c2a78dfa8a8d03257a661f3fda_prof);

        
        $__internal_348f9288cf9b7c82a4f7d3f44921a9453742304a7d16fa411aba79e620c1e793->leave($__internal_348f9288cf9b7c82a4f7d3f44921a9453742304a7d16fa411aba79e620c1e793_prof);

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

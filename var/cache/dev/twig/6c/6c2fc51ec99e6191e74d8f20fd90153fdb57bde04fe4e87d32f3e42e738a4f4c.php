<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9e743e9e7244c021f8aa1ba79b12a7be29c8cd5d05c5dc7613a2145565f8255f extends Twig_Template
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
        $__internal_aeb5491ecd6b8a6bc5635c69cad50f4436ae828db8ae732998b48e21bb5133d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb5491ecd6b8a6bc5635c69cad50f4436ae828db8ae732998b48e21bb5133d6->enter($__internal_aeb5491ecd6b8a6bc5635c69cad50f4436ae828db8ae732998b48e21bb5133d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5432d3fc59f9860d61b21e04345e6612c1885990a1ec9baff5346c87d33465a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5432d3fc59f9860d61b21e04345e6612c1885990a1ec9baff5346c87d33465a5->enter($__internal_5432d3fc59f9860d61b21e04345e6612c1885990a1ec9baff5346c87d33465a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aeb5491ecd6b8a6bc5635c69cad50f4436ae828db8ae732998b48e21bb5133d6->leave($__internal_aeb5491ecd6b8a6bc5635c69cad50f4436ae828db8ae732998b48e21bb5133d6_prof);

        
        $__internal_5432d3fc59f9860d61b21e04345e6612c1885990a1ec9baff5346c87d33465a5->leave($__internal_5432d3fc59f9860d61b21e04345e6612c1885990a1ec9baff5346c87d33465a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

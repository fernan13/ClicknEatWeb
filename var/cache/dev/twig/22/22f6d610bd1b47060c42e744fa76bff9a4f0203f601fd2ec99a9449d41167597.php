<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1dbe194c44814e54fa4dbc81721bac27bb6427ec978b65bc6552fbd5e70af278 extends Twig_Template
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
        $__internal_2e799a99e5a1668f2168051da2b7e084eb853d2390fd58e7f9e0d6586c435a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e799a99e5a1668f2168051da2b7e084eb853d2390fd58e7f9e0d6586c435a46->enter($__internal_2e799a99e5a1668f2168051da2b7e084eb853d2390fd58e7f9e0d6586c435a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6b7f3b0e86f82335185c0c838f030676f2264e686afcb4ff46feeef6c5e84756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7f3b0e86f82335185c0c838f030676f2264e686afcb4ff46feeef6c5e84756->enter($__internal_6b7f3b0e86f82335185c0c838f030676f2264e686afcb4ff46feeef6c5e84756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2e799a99e5a1668f2168051da2b7e084eb853d2390fd58e7f9e0d6586c435a46->leave($__internal_2e799a99e5a1668f2168051da2b7e084eb853d2390fd58e7f9e0d6586c435a46_prof);

        
        $__internal_6b7f3b0e86f82335185c0c838f030676f2264e686afcb4ff46feeef6c5e84756->leave($__internal_6b7f3b0e86f82335185c0c838f030676f2264e686afcb4ff46feeef6c5e84756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

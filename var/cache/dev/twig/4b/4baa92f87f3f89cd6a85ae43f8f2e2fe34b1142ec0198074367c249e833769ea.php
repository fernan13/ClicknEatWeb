<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_29a63fb275f44f5092dfdb7a7555820134124309531ab23ddcfff63c1686fbac extends Twig_Template
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
        $__internal_7346b1c4a4e575b15f18026602d09078136cc27a06608b7bc44328ffd6858cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7346b1c4a4e575b15f18026602d09078136cc27a06608b7bc44328ffd6858cc8->enter($__internal_7346b1c4a4e575b15f18026602d09078136cc27a06608b7bc44328ffd6858cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_04e32b19e0500897656bd18adf5baf7d5488b4c7e8659771d556fb4151ca7701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e32b19e0500897656bd18adf5baf7d5488b4c7e8659771d556fb4151ca7701->enter($__internal_04e32b19e0500897656bd18adf5baf7d5488b4c7e8659771d556fb4151ca7701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7346b1c4a4e575b15f18026602d09078136cc27a06608b7bc44328ffd6858cc8->leave($__internal_7346b1c4a4e575b15f18026602d09078136cc27a06608b7bc44328ffd6858cc8_prof);

        
        $__internal_04e32b19e0500897656bd18adf5baf7d5488b4c7e8659771d556fb4151ca7701->leave($__internal_04e32b19e0500897656bd18adf5baf7d5488b4c7e8659771d556fb4151ca7701_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

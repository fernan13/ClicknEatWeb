<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_59ee3c8a7fad523b81c457f64b331a4c58ecbc04ff0cac7dbbe42fff71094566 extends Twig_Template
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
        $__internal_af01a7f7e7b7c93ae5f1df568653af12959c688709f72b8d7d68f198b8c955c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af01a7f7e7b7c93ae5f1df568653af12959c688709f72b8d7d68f198b8c955c6->enter($__internal_af01a7f7e7b7c93ae5f1df568653af12959c688709f72b8d7d68f198b8c955c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b8ba4d4a94165fe52c4b9ed963b1fa9c67000c40493deb5a49a8e8caa8814081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ba4d4a94165fe52c4b9ed963b1fa9c67000c40493deb5a49a8e8caa8814081->enter($__internal_b8ba4d4a94165fe52c4b9ed963b1fa9c67000c40493deb5a49a8e8caa8814081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_af01a7f7e7b7c93ae5f1df568653af12959c688709f72b8d7d68f198b8c955c6->leave($__internal_af01a7f7e7b7c93ae5f1df568653af12959c688709f72b8d7d68f198b8c955c6_prof);

        
        $__internal_b8ba4d4a94165fe52c4b9ed963b1fa9c67000c40493deb5a49a8e8caa8814081->leave($__internal_b8ba4d4a94165fe52c4b9ed963b1fa9c67000c40493deb5a49a8e8caa8814081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

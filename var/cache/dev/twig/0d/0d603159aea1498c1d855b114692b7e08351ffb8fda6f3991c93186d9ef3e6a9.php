<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2ed98996a6b4307e7983f3f6a45b598410fdd1ed5fef84340e34adb37c67234e extends Twig_Template
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
        $__internal_fc34c11bccb8eba9a2e9533b904e2f3c60fd83055ad8ca0ab0f846d65963d106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc34c11bccb8eba9a2e9533b904e2f3c60fd83055ad8ca0ab0f846d65963d106->enter($__internal_fc34c11bccb8eba9a2e9533b904e2f3c60fd83055ad8ca0ab0f846d65963d106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7df48eefb11d01cf18f73aa24c8cef7a107a9b2177bcb9e99230da8f4f935895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df48eefb11d01cf18f73aa24c8cef7a107a9b2177bcb9e99230da8f4f935895->enter($__internal_7df48eefb11d01cf18f73aa24c8cef7a107a9b2177bcb9e99230da8f4f935895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fc34c11bccb8eba9a2e9533b904e2f3c60fd83055ad8ca0ab0f846d65963d106->leave($__internal_fc34c11bccb8eba9a2e9533b904e2f3c60fd83055ad8ca0ab0f846d65963d106_prof);

        
        $__internal_7df48eefb11d01cf18f73aa24c8cef7a107a9b2177bcb9e99230da8f4f935895->leave($__internal_7df48eefb11d01cf18f73aa24c8cef7a107a9b2177bcb9e99230da8f4f935895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1532102782cedbf6ae52a49dbf76e6e5293baa9ded347f7336e2d4af9e17218a extends Twig_Template
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
        $__internal_f26fcb6471940599c498c95832d768dd675bcee344509f21a9018e1d6c25921b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26fcb6471940599c498c95832d768dd675bcee344509f21a9018e1d6c25921b->enter($__internal_f26fcb6471940599c498c95832d768dd675bcee344509f21a9018e1d6c25921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6005ed04146551ca48040769fcbe1fe799754eb21c2dac52661f600eca83d9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005ed04146551ca48040769fcbe1fe799754eb21c2dac52661f600eca83d9dc->enter($__internal_6005ed04146551ca48040769fcbe1fe799754eb21c2dac52661f600eca83d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f26fcb6471940599c498c95832d768dd675bcee344509f21a9018e1d6c25921b->leave($__internal_f26fcb6471940599c498c95832d768dd675bcee344509f21a9018e1d6c25921b_prof);

        
        $__internal_6005ed04146551ca48040769fcbe1fe799754eb21c2dac52661f600eca83d9dc->leave($__internal_6005ed04146551ca48040769fcbe1fe799754eb21c2dac52661f600eca83d9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

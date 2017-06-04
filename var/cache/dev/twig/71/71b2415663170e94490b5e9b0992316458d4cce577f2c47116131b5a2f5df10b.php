<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d26bf5dd2ec608ca99e4d90ebef9d6a7ab095f5ccc4c78eeaa7f4e1f4294b853 extends Twig_Template
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
        $__internal_0949731caed91364635491f73389ed1e8a932b0bd3407846eb69c2212bb12c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0949731caed91364635491f73389ed1e8a932b0bd3407846eb69c2212bb12c0c->enter($__internal_0949731caed91364635491f73389ed1e8a932b0bd3407846eb69c2212bb12c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_709fb467d4cbb203601ab7a6ff207d45a89bc307fcc2ea35e112ef3cae4b30b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709fb467d4cbb203601ab7a6ff207d45a89bc307fcc2ea35e112ef3cae4b30b3->enter($__internal_709fb467d4cbb203601ab7a6ff207d45a89bc307fcc2ea35e112ef3cae4b30b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0949731caed91364635491f73389ed1e8a932b0bd3407846eb69c2212bb12c0c->leave($__internal_0949731caed91364635491f73389ed1e8a932b0bd3407846eb69c2212bb12c0c_prof);

        
        $__internal_709fb467d4cbb203601ab7a6ff207d45a89bc307fcc2ea35e112ef3cae4b30b3->leave($__internal_709fb467d4cbb203601ab7a6ff207d45a89bc307fcc2ea35e112ef3cae4b30b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f7ecb7ee774a49b355fea1e6c6883c7b98a7990518e132e5540a79bc4e115e76 extends Twig_Template
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
        $__internal_43fdfa78b340eed30960905ebec2c84251d4da1bcc7bf15c3dcb047374220e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fdfa78b340eed30960905ebec2c84251d4da1bcc7bf15c3dcb047374220e0f->enter($__internal_43fdfa78b340eed30960905ebec2c84251d4da1bcc7bf15c3dcb047374220e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f70987413cbeb112d08f210200a15b328723ed6df38be23adfd26c5be4c3bbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70987413cbeb112d08f210200a15b328723ed6df38be23adfd26c5be4c3bbe6->enter($__internal_f70987413cbeb112d08f210200a15b328723ed6df38be23adfd26c5be4c3bbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_43fdfa78b340eed30960905ebec2c84251d4da1bcc7bf15c3dcb047374220e0f->leave($__internal_43fdfa78b340eed30960905ebec2c84251d4da1bcc7bf15c3dcb047374220e0f_prof);

        
        $__internal_f70987413cbeb112d08f210200a15b328723ed6df38be23adfd26c5be4c3bbe6->leave($__internal_f70987413cbeb112d08f210200a15b328723ed6df38be23adfd26c5be4c3bbe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

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
        $__internal_fddff6c9f5d3cec5451611d8f6f50bc12275fbf601c004d53905aff55cde79ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddff6c9f5d3cec5451611d8f6f50bc12275fbf601c004d53905aff55cde79ec->enter($__internal_fddff6c9f5d3cec5451611d8f6f50bc12275fbf601c004d53905aff55cde79ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a10669a6142feac060ce21c07e57f12313d9bc30160d18bdcb8eb18387777349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10669a6142feac060ce21c07e57f12313d9bc30160d18bdcb8eb18387777349->enter($__internal_a10669a6142feac060ce21c07e57f12313d9bc30160d18bdcb8eb18387777349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fddff6c9f5d3cec5451611d8f6f50bc12275fbf601c004d53905aff55cde79ec->leave($__internal_fddff6c9f5d3cec5451611d8f6f50bc12275fbf601c004d53905aff55cde79ec_prof);

        
        $__internal_a10669a6142feac060ce21c07e57f12313d9bc30160d18bdcb8eb18387777349->leave($__internal_a10669a6142feac060ce21c07e57f12313d9bc30160d18bdcb8eb18387777349_prof);

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

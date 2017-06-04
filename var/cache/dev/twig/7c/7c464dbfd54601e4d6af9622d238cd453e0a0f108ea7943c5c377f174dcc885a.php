<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be2be7041b8f53128d0051df4aa794efce6d07a8121f4445f97849ac176c0452 extends Twig_Template
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
        $__internal_3f98c5a84505f689183c5edeb1c05cd59a15921619f4e5fdf2a71bc073b6f8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f98c5a84505f689183c5edeb1c05cd59a15921619f4e5fdf2a71bc073b6f8d3->enter($__internal_3f98c5a84505f689183c5edeb1c05cd59a15921619f4e5fdf2a71bc073b6f8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_190393f75c1d36404b1394a73c5a92c64f5fd79ca2436ac6dfc4a055b9a3956a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190393f75c1d36404b1394a73c5a92c64f5fd79ca2436ac6dfc4a055b9a3956a->enter($__internal_190393f75c1d36404b1394a73c5a92c64f5fd79ca2436ac6dfc4a055b9a3956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3f98c5a84505f689183c5edeb1c05cd59a15921619f4e5fdf2a71bc073b6f8d3->leave($__internal_3f98c5a84505f689183c5edeb1c05cd59a15921619f4e5fdf2a71bc073b6f8d3_prof);

        
        $__internal_190393f75c1d36404b1394a73c5a92c64f5fd79ca2436ac6dfc4a055b9a3956a->leave($__internal_190393f75c1d36404b1394a73c5a92c64f5fd79ca2436ac6dfc4a055b9a3956a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ed7e38741153d06b05523ba19b8fe182f0998ec8dcfa7488389eea1a0a4fb8ab extends Twig_Template
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
        $__internal_20e137305dccf3257dfd87e0c08ddd0c98d6f0dda1b7497cac7c619ae3f03730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e137305dccf3257dfd87e0c08ddd0c98d6f0dda1b7497cac7c619ae3f03730->enter($__internal_20e137305dccf3257dfd87e0c08ddd0c98d6f0dda1b7497cac7c619ae3f03730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_46de10f2b41d1e0588472e38be06436fc4d9efe7e330f95d499482fbd7f4539a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46de10f2b41d1e0588472e38be06436fc4d9efe7e330f95d499482fbd7f4539a->enter($__internal_46de10f2b41d1e0588472e38be06436fc4d9efe7e330f95d499482fbd7f4539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_20e137305dccf3257dfd87e0c08ddd0c98d6f0dda1b7497cac7c619ae3f03730->leave($__internal_20e137305dccf3257dfd87e0c08ddd0c98d6f0dda1b7497cac7c619ae3f03730_prof);

        
        $__internal_46de10f2b41d1e0588472e38be06436fc4d9efe7e330f95d499482fbd7f4539a->leave($__internal_46de10f2b41d1e0588472e38be06436fc4d9efe7e330f95d499482fbd7f4539a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

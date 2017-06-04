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
        $__internal_c0c126721f62ad09ea11d2166b61b74fcae6df2070362e86495c37cb679e2398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c126721f62ad09ea11d2166b61b74fcae6df2070362e86495c37cb679e2398->enter($__internal_c0c126721f62ad09ea11d2166b61b74fcae6df2070362e86495c37cb679e2398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_349ee46170684cecb034911b055b1083541eed50305fbc126bd0d32a4c82dd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349ee46170684cecb034911b055b1083541eed50305fbc126bd0d32a4c82dd11->enter($__internal_349ee46170684cecb034911b055b1083541eed50305fbc126bd0d32a4c82dd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c0c126721f62ad09ea11d2166b61b74fcae6df2070362e86495c37cb679e2398->leave($__internal_c0c126721f62ad09ea11d2166b61b74fcae6df2070362e86495c37cb679e2398_prof);

        
        $__internal_349ee46170684cecb034911b055b1083541eed50305fbc126bd0d32a4c82dd11->leave($__internal_349ee46170684cecb034911b055b1083541eed50305fbc126bd0d32a4c82dd11_prof);

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

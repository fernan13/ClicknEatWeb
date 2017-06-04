<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_721afd8248982a3bc4490d02514dbd4d5fd8815b30709417f13811a51333ecc1 extends Twig_Template
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
        $__internal_fd90dfb5ecf856db5642e44fa0c84bc9f5068bc99284140c712232303f74b892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd90dfb5ecf856db5642e44fa0c84bc9f5068bc99284140c712232303f74b892->enter($__internal_fd90dfb5ecf856db5642e44fa0c84bc9f5068bc99284140c712232303f74b892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2c878ef4da7d8963393ca1aad307efaf797218494b3e84e21a39f86cf1194606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c878ef4da7d8963393ca1aad307efaf797218494b3e84e21a39f86cf1194606->enter($__internal_2c878ef4da7d8963393ca1aad307efaf797218494b3e84e21a39f86cf1194606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fd90dfb5ecf856db5642e44fa0c84bc9f5068bc99284140c712232303f74b892->leave($__internal_fd90dfb5ecf856db5642e44fa0c84bc9f5068bc99284140c712232303f74b892_prof);

        
        $__internal_2c878ef4da7d8963393ca1aad307efaf797218494b3e84e21a39f86cf1194606->leave($__internal_2c878ef4da7d8963393ca1aad307efaf797218494b3e84e21a39f86cf1194606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

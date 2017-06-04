<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_80af9488663159c1d7f3d9394dfb396a4130af96008d378f09d91658ebd97766 extends Twig_Template
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
        $__internal_c6c357ad7dc81eb68d594bef6b89c640a942b436b9ead6ce34684983a62c1205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c357ad7dc81eb68d594bef6b89c640a942b436b9ead6ce34684983a62c1205->enter($__internal_c6c357ad7dc81eb68d594bef6b89c640a942b436b9ead6ce34684983a62c1205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_342c29cd778a79d06c1973470f06f1c9aa36f70b42ddb8f69664fe787d4429e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342c29cd778a79d06c1973470f06f1c9aa36f70b42ddb8f69664fe787d4429e8->enter($__internal_342c29cd778a79d06c1973470f06f1c9aa36f70b42ddb8f69664fe787d4429e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c6c357ad7dc81eb68d594bef6b89c640a942b436b9ead6ce34684983a62c1205->leave($__internal_c6c357ad7dc81eb68d594bef6b89c640a942b436b9ead6ce34684983a62c1205_prof);

        
        $__internal_342c29cd778a79d06c1973470f06f1c9aa36f70b42ddb8f69664fe787d4429e8->leave($__internal_342c29cd778a79d06c1973470f06f1c9aa36f70b42ddb8f69664fe787d4429e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_29a63fb275f44f5092dfdb7a7555820134124309531ab23ddcfff63c1686fbac extends Twig_Template
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
        $__internal_50cfe9faa8e265d7af3b395af6a31d3b445c0f5685417cb8f8dbf5bbc6bfd0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cfe9faa8e265d7af3b395af6a31d3b445c0f5685417cb8f8dbf5bbc6bfd0ad->enter($__internal_50cfe9faa8e265d7af3b395af6a31d3b445c0f5685417cb8f8dbf5bbc6bfd0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c6c021d05e1c2f8098cdc780e796cc4412d2a7b4081e0d81a57ebd4a4cfdc2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c021d05e1c2f8098cdc780e796cc4412d2a7b4081e0d81a57ebd4a4cfdc2d8->enter($__internal_c6c021d05e1c2f8098cdc780e796cc4412d2a7b4081e0d81a57ebd4a4cfdc2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_50cfe9faa8e265d7af3b395af6a31d3b445c0f5685417cb8f8dbf5bbc6bfd0ad->leave($__internal_50cfe9faa8e265d7af3b395af6a31d3b445c0f5685417cb8f8dbf5bbc6bfd0ad_prof);

        
        $__internal_c6c021d05e1c2f8098cdc780e796cc4412d2a7b4081e0d81a57ebd4a4cfdc2d8->leave($__internal_c6c021d05e1c2f8098cdc780e796cc4412d2a7b4081e0d81a57ebd4a4cfdc2d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

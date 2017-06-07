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
        $__internal_1a7aee79429380319a613cd8fc76a9c565f8c4a731ddc8813371469fd30d0ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7aee79429380319a613cd8fc76a9c565f8c4a731ddc8813371469fd30d0ce5->enter($__internal_1a7aee79429380319a613cd8fc76a9c565f8c4a731ddc8813371469fd30d0ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6faaf39689e6b6578b541b9ef5490ecb56326ea3eb55600097cc788241e9b2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6faaf39689e6b6578b541b9ef5490ecb56326ea3eb55600097cc788241e9b2d6->enter($__internal_6faaf39689e6b6578b541b9ef5490ecb56326ea3eb55600097cc788241e9b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1a7aee79429380319a613cd8fc76a9c565f8c4a731ddc8813371469fd30d0ce5->leave($__internal_1a7aee79429380319a613cd8fc76a9c565f8c4a731ddc8813371469fd30d0ce5_prof);

        
        $__internal_6faaf39689e6b6578b541b9ef5490ecb56326ea3eb55600097cc788241e9b2d6->leave($__internal_6faaf39689e6b6578b541b9ef5490ecb56326ea3eb55600097cc788241e9b2d6_prof);

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

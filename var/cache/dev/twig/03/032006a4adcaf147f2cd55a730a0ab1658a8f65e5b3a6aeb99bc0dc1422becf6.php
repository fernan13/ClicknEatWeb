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
        $__internal_b1dc11143bb6169c5c42fe10f0b3c972364475612eb13c9da22aebf191209c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dc11143bb6169c5c42fe10f0b3c972364475612eb13c9da22aebf191209c4a->enter($__internal_b1dc11143bb6169c5c42fe10f0b3c972364475612eb13c9da22aebf191209c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_01cb84e6404d89e3ddd09365c4f20295e0de68eeed24392fce5520933edfbb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cb84e6404d89e3ddd09365c4f20295e0de68eeed24392fce5520933edfbb56->enter($__internal_01cb84e6404d89e3ddd09365c4f20295e0de68eeed24392fce5520933edfbb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b1dc11143bb6169c5c42fe10f0b3c972364475612eb13c9da22aebf191209c4a->leave($__internal_b1dc11143bb6169c5c42fe10f0b3c972364475612eb13c9da22aebf191209c4a_prof);

        
        $__internal_01cb84e6404d89e3ddd09365c4f20295e0de68eeed24392fce5520933edfbb56->leave($__internal_01cb84e6404d89e3ddd09365c4f20295e0de68eeed24392fce5520933edfbb56_prof);

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

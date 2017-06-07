<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d39eb81c168d43dedf82b8a0b04c28483136805ec42356cee46f5f7461ebe014 extends Twig_Template
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
        $__internal_b5526b907108da89ef51447a6d1545df23d7811ee1bbafc911b703368f5525c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5526b907108da89ef51447a6d1545df23d7811ee1bbafc911b703368f5525c8->enter($__internal_b5526b907108da89ef51447a6d1545df23d7811ee1bbafc911b703368f5525c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_22618a42c7d8ff803a66a70e8ce7eeb87c97e52fc45e86d7b96567d0803b5a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22618a42c7d8ff803a66a70e8ce7eeb87c97e52fc45e86d7b96567d0803b5a6b->enter($__internal_22618a42c7d8ff803a66a70e8ce7eeb87c97e52fc45e86d7b96567d0803b5a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b5526b907108da89ef51447a6d1545df23d7811ee1bbafc911b703368f5525c8->leave($__internal_b5526b907108da89ef51447a6d1545df23d7811ee1bbafc911b703368f5525c8_prof);

        
        $__internal_22618a42c7d8ff803a66a70e8ce7eeb87c97e52fc45e86d7b96567d0803b5a6b->leave($__internal_22618a42c7d8ff803a66a70e8ce7eeb87c97e52fc45e86d7b96567d0803b5a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

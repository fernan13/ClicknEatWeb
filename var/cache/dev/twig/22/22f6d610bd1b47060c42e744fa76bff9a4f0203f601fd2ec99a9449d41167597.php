<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1dbe194c44814e54fa4dbc81721bac27bb6427ec978b65bc6552fbd5e70af278 extends Twig_Template
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
        $__internal_7aaff4357355b1bb9e3c02de575e22d4b19668841eb00f5497090e8f28ceff0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aaff4357355b1bb9e3c02de575e22d4b19668841eb00f5497090e8f28ceff0b->enter($__internal_7aaff4357355b1bb9e3c02de575e22d4b19668841eb00f5497090e8f28ceff0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4f98431049fff9898dade6649f6ba195c54ae92c48bdf1fb62f69fa05baaf371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f98431049fff9898dade6649f6ba195c54ae92c48bdf1fb62f69fa05baaf371->enter($__internal_4f98431049fff9898dade6649f6ba195c54ae92c48bdf1fb62f69fa05baaf371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7aaff4357355b1bb9e3c02de575e22d4b19668841eb00f5497090e8f28ceff0b->leave($__internal_7aaff4357355b1bb9e3c02de575e22d4b19668841eb00f5497090e8f28ceff0b_prof);

        
        $__internal_4f98431049fff9898dade6649f6ba195c54ae92c48bdf1fb62f69fa05baaf371->leave($__internal_4f98431049fff9898dade6649f6ba195c54ae92c48bdf1fb62f69fa05baaf371_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

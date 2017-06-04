<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e5d584cb6b0014d9696b8343f9df4f38d88a5bb662ddd8632b69bde55148558e extends Twig_Template
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
        $__internal_7387a09d5376456a0cc9d744d8b2b20dda450c9e3d8b544593e48db27586c68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7387a09d5376456a0cc9d744d8b2b20dda450c9e3d8b544593e48db27586c68c->enter($__internal_7387a09d5376456a0cc9d744d8b2b20dda450c9e3d8b544593e48db27586c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_aae5c6d2de86992da9c22b1adefdf089612ad04a67132947357e55f86f2e6466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae5c6d2de86992da9c22b1adefdf089612ad04a67132947357e55f86f2e6466->enter($__internal_aae5c6d2de86992da9c22b1adefdf089612ad04a67132947357e55f86f2e6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7387a09d5376456a0cc9d744d8b2b20dda450c9e3d8b544593e48db27586c68c->leave($__internal_7387a09d5376456a0cc9d744d8b2b20dda450c9e3d8b544593e48db27586c68c_prof);

        
        $__internal_aae5c6d2de86992da9c22b1adefdf089612ad04a67132947357e55f86f2e6466->leave($__internal_aae5c6d2de86992da9c22b1adefdf089612ad04a67132947357e55f86f2e6466_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

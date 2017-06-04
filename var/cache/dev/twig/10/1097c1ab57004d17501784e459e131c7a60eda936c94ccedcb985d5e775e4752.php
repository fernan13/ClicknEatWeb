<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3e5f178d43a8c3ea9e4cf12f35b5324ac84b94659490b2d78e3123b7e8a42ec2 extends Twig_Template
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
        $__internal_60c6961b8ad5a0506b799b6afa670dad3191bc9010ba80901be5145ac460a526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c6961b8ad5a0506b799b6afa670dad3191bc9010ba80901be5145ac460a526->enter($__internal_60c6961b8ad5a0506b799b6afa670dad3191bc9010ba80901be5145ac460a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b86b222f063264ed63b37b6aa0e2b6bd210fd93cf937d8314d00487e81c5d90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86b222f063264ed63b37b6aa0e2b6bd210fd93cf937d8314d00487e81c5d90d->enter($__internal_b86b222f063264ed63b37b6aa0e2b6bd210fd93cf937d8314d00487e81c5d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_60c6961b8ad5a0506b799b6afa670dad3191bc9010ba80901be5145ac460a526->leave($__internal_60c6961b8ad5a0506b799b6afa670dad3191bc9010ba80901be5145ac460a526_prof);

        
        $__internal_b86b222f063264ed63b37b6aa0e2b6bd210fd93cf937d8314d00487e81c5d90d->leave($__internal_b86b222f063264ed63b37b6aa0e2b6bd210fd93cf937d8314d00487e81c5d90d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_85f3bb80fb193a6c627dde7fd221656ffc477b3fe3ee94eaba851456be9476d8 extends Twig_Template
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
        $__internal_1c45527a2ed0411df12c8dc9363785b58f2b6b38992870f00f252b34623676ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c45527a2ed0411df12c8dc9363785b58f2b6b38992870f00f252b34623676ea->enter($__internal_1c45527a2ed0411df12c8dc9363785b58f2b6b38992870f00f252b34623676ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_45948d2f9030938e9fc1ec501f845fc5ec14b6f6424d339eefd5e6f2216418c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45948d2f9030938e9fc1ec501f845fc5ec14b6f6424d339eefd5e6f2216418c4->enter($__internal_45948d2f9030938e9fc1ec501f845fc5ec14b6f6424d339eefd5e6f2216418c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1c45527a2ed0411df12c8dc9363785b58f2b6b38992870f00f252b34623676ea->leave($__internal_1c45527a2ed0411df12c8dc9363785b58f2b6b38992870f00f252b34623676ea_prof);

        
        $__internal_45948d2f9030938e9fc1ec501f845fc5ec14b6f6424d339eefd5e6f2216418c4->leave($__internal_45948d2f9030938e9fc1ec501f845fc5ec14b6f6424d339eefd5e6f2216418c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

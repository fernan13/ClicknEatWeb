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
        $__internal_52f7a631f4563e3a37bc01ff1d5e7b4d791b64a7179f3d797d0e0c894d438426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f7a631f4563e3a37bc01ff1d5e7b4d791b64a7179f3d797d0e0c894d438426->enter($__internal_52f7a631f4563e3a37bc01ff1d5e7b4d791b64a7179f3d797d0e0c894d438426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4756479042251de8e03ac5d5eaf93ca703ff4470bc552c3b80986f089081ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4756479042251de8e03ac5d5eaf93ca703ff4470bc552c3b80986f089081ad0c->enter($__internal_4756479042251de8e03ac5d5eaf93ca703ff4470bc552c3b80986f089081ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_52f7a631f4563e3a37bc01ff1d5e7b4d791b64a7179f3d797d0e0c894d438426->leave($__internal_52f7a631f4563e3a37bc01ff1d5e7b4d791b64a7179f3d797d0e0c894d438426_prof);

        
        $__internal_4756479042251de8e03ac5d5eaf93ca703ff4470bc552c3b80986f089081ad0c->leave($__internal_4756479042251de8e03ac5d5eaf93ca703ff4470bc552c3b80986f089081ad0c_prof);

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

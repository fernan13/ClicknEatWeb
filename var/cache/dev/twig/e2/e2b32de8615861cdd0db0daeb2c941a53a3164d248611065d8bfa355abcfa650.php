<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_52dfe546219fb224ee7381e64f021f906f375274ea506a5c0f6288acf8e33bd2 extends Twig_Template
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
        $__internal_147b594c39303c966a689224604bdc775857386ba2b6746e638380618028c67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147b594c39303c966a689224604bdc775857386ba2b6746e638380618028c67a->enter($__internal_147b594c39303c966a689224604bdc775857386ba2b6746e638380618028c67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_73b6dea25549e8ce07eb615d01bd07fd9877c83724b4fd6aacd23da489d8d2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b6dea25549e8ce07eb615d01bd07fd9877c83724b4fd6aacd23da489d8d2e7->enter($__internal_73b6dea25549e8ce07eb615d01bd07fd9877c83724b4fd6aacd23da489d8d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_147b594c39303c966a689224604bdc775857386ba2b6746e638380618028c67a->leave($__internal_147b594c39303c966a689224604bdc775857386ba2b6746e638380618028c67a_prof);

        
        $__internal_73b6dea25549e8ce07eb615d01bd07fd9877c83724b4fd6aacd23da489d8d2e7->leave($__internal_73b6dea25549e8ce07eb615d01bd07fd9877c83724b4fd6aacd23da489d8d2e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

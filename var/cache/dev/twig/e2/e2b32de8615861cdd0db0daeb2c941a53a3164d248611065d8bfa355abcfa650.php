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
        $__internal_cd926ce20dbc95e97504bde4a57a32085b13ac51a6b939862c2c749c278f91fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd926ce20dbc95e97504bde4a57a32085b13ac51a6b939862c2c749c278f91fd->enter($__internal_cd926ce20dbc95e97504bde4a57a32085b13ac51a6b939862c2c749c278f91fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c411d81200fd37b01a737961323b2fb692ed42b447e3f989bf529fd9392a4eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c411d81200fd37b01a737961323b2fb692ed42b447e3f989bf529fd9392a4eed->enter($__internal_c411d81200fd37b01a737961323b2fb692ed42b447e3f989bf529fd9392a4eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cd926ce20dbc95e97504bde4a57a32085b13ac51a6b939862c2c749c278f91fd->leave($__internal_cd926ce20dbc95e97504bde4a57a32085b13ac51a6b939862c2c749c278f91fd_prof);

        
        $__internal_c411d81200fd37b01a737961323b2fb692ed42b447e3f989bf529fd9392a4eed->leave($__internal_c411d81200fd37b01a737961323b2fb692ed42b447e3f989bf529fd9392a4eed_prof);

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

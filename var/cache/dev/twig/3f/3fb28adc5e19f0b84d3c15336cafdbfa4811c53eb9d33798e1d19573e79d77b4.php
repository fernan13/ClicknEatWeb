<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_408e496b5868cd26cc74128b2a077605bd2773f2ca7bb5f4d47feba9d0c3a9fd extends Twig_Template
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
        $__internal_3dc09a492b8f375148da2a5c9ff4e92766b343b383198b9ba312b39e1b3344ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc09a492b8f375148da2a5c9ff4e92766b343b383198b9ba312b39e1b3344ce->enter($__internal_3dc09a492b8f375148da2a5c9ff4e92766b343b383198b9ba312b39e1b3344ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6c6ad285397c26c4c329977d2b5643d8203ea199025f7eaabb686913f65ff72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6ad285397c26c4c329977d2b5643d8203ea199025f7eaabb686913f65ff72f->enter($__internal_6c6ad285397c26c4c329977d2b5643d8203ea199025f7eaabb686913f65ff72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3dc09a492b8f375148da2a5c9ff4e92766b343b383198b9ba312b39e1b3344ce->leave($__internal_3dc09a492b8f375148da2a5c9ff4e92766b343b383198b9ba312b39e1b3344ce_prof);

        
        $__internal_6c6ad285397c26c4c329977d2b5643d8203ea199025f7eaabb686913f65ff72f->leave($__internal_6c6ad285397c26c4c329977d2b5643d8203ea199025f7eaabb686913f65ff72f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

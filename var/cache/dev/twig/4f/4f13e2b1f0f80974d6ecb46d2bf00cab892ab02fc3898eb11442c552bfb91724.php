<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7457837568440b6d3a4cbb4fa674e9f0fabd70181d788c6f9f1eb220232cd5a3 extends Twig_Template
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
        $__internal_2fa858183d58326d179a0e1330b0587f1bbe70d0667061c1f58379d6c5e69ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa858183d58326d179a0e1330b0587f1bbe70d0667061c1f58379d6c5e69ee5->enter($__internal_2fa858183d58326d179a0e1330b0587f1bbe70d0667061c1f58379d6c5e69ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2f41578ff6f684992256ce901b26f73f3dadd02998a2f3c8eb251e7627d93635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f41578ff6f684992256ce901b26f73f3dadd02998a2f3c8eb251e7627d93635->enter($__internal_2f41578ff6f684992256ce901b26f73f3dadd02998a2f3c8eb251e7627d93635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2fa858183d58326d179a0e1330b0587f1bbe70d0667061c1f58379d6c5e69ee5->leave($__internal_2fa858183d58326d179a0e1330b0587f1bbe70d0667061c1f58379d6c5e69ee5_prof);

        
        $__internal_2f41578ff6f684992256ce901b26f73f3dadd02998a2f3c8eb251e7627d93635->leave($__internal_2f41578ff6f684992256ce901b26f73f3dadd02998a2f3c8eb251e7627d93635_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

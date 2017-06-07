<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d26bf5dd2ec608ca99e4d90ebef9d6a7ab095f5ccc4c78eeaa7f4e1f4294b853 extends Twig_Template
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
        $__internal_867cf3ba5a9488e79afb2606e31a740f2d6260295e6d31655e0e71bf0fc0eec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867cf3ba5a9488e79afb2606e31a740f2d6260295e6d31655e0e71bf0fc0eec7->enter($__internal_867cf3ba5a9488e79afb2606e31a740f2d6260295e6d31655e0e71bf0fc0eec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8b37be44eb72fc3d60bb4fda8f4242b2758b3cd3551af23b4d01145a718520e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b37be44eb72fc3d60bb4fda8f4242b2758b3cd3551af23b4d01145a718520e1->enter($__internal_8b37be44eb72fc3d60bb4fda8f4242b2758b3cd3551af23b4d01145a718520e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_867cf3ba5a9488e79afb2606e31a740f2d6260295e6d31655e0e71bf0fc0eec7->leave($__internal_867cf3ba5a9488e79afb2606e31a740f2d6260295e6d31655e0e71bf0fc0eec7_prof);

        
        $__internal_8b37be44eb72fc3d60bb4fda8f4242b2758b3cd3551af23b4d01145a718520e1->leave($__internal_8b37be44eb72fc3d60bb4fda8f4242b2758b3cd3551af23b4d01145a718520e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

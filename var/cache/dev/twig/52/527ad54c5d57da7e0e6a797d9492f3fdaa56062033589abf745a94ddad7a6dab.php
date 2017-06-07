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
        $__internal_b673f0f476261aa70d31759d372c49a6527b73ff7d4cbc8211f2ce62a66e423d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b673f0f476261aa70d31759d372c49a6527b73ff7d4cbc8211f2ce62a66e423d->enter($__internal_b673f0f476261aa70d31759d372c49a6527b73ff7d4cbc8211f2ce62a66e423d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_767c2718532604fb4764b10a519b260cb0f719268f52ccc1c35607b99305f34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767c2718532604fb4764b10a519b260cb0f719268f52ccc1c35607b99305f34c->enter($__internal_767c2718532604fb4764b10a519b260cb0f719268f52ccc1c35607b99305f34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b673f0f476261aa70d31759d372c49a6527b73ff7d4cbc8211f2ce62a66e423d->leave($__internal_b673f0f476261aa70d31759d372c49a6527b73ff7d4cbc8211f2ce62a66e423d_prof);

        
        $__internal_767c2718532604fb4764b10a519b260cb0f719268f52ccc1c35607b99305f34c->leave($__internal_767c2718532604fb4764b10a519b260cb0f719268f52ccc1c35607b99305f34c_prof);

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

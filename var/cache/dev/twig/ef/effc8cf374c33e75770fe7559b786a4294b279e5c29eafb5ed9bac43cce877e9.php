<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fab97ee1f27f60b598ac281453363d8cc9be24ba227e6a19240aaa2d7c226151 extends Twig_Template
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
        $__internal_60a57e64fba9e62f945c5ce08456612688317ab4e64a53a89e6f6bfc59de804f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a57e64fba9e62f945c5ce08456612688317ab4e64a53a89e6f6bfc59de804f->enter($__internal_60a57e64fba9e62f945c5ce08456612688317ab4e64a53a89e6f6bfc59de804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bb6351e86f0e55c53c7e3b80369a23f5af8eb7756894a80f92bd5cfc9339cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6351e86f0e55c53c7e3b80369a23f5af8eb7756894a80f92bd5cfc9339cc54->enter($__internal_bb6351e86f0e55c53c7e3b80369a23f5af8eb7756894a80f92bd5cfc9339cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_60a57e64fba9e62f945c5ce08456612688317ab4e64a53a89e6f6bfc59de804f->leave($__internal_60a57e64fba9e62f945c5ce08456612688317ab4e64a53a89e6f6bfc59de804f_prof);

        
        $__internal_bb6351e86f0e55c53c7e3b80369a23f5af8eb7756894a80f92bd5cfc9339cc54->leave($__internal_bb6351e86f0e55c53c7e3b80369a23f5af8eb7756894a80f92bd5cfc9339cc54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

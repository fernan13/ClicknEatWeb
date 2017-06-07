<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7a154eff21d614913c9f897f6bfa3d401b83b795844a97002f8cd411f498daa0 extends Twig_Template
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
        $__internal_0cf7bfcc05e7c606925154f2e960db5d20c223a8598f73fd4a90c7b2fa943b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf7bfcc05e7c606925154f2e960db5d20c223a8598f73fd4a90c7b2fa943b1a->enter($__internal_0cf7bfcc05e7c606925154f2e960db5d20c223a8598f73fd4a90c7b2fa943b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dd798205d46f98f7f3e2859e0c92cfda8f21ac4a19675fd10ae674abe44900ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd798205d46f98f7f3e2859e0c92cfda8f21ac4a19675fd10ae674abe44900ac->enter($__internal_dd798205d46f98f7f3e2859e0c92cfda8f21ac4a19675fd10ae674abe44900ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0cf7bfcc05e7c606925154f2e960db5d20c223a8598f73fd4a90c7b2fa943b1a->leave($__internal_0cf7bfcc05e7c606925154f2e960db5d20c223a8598f73fd4a90c7b2fa943b1a_prof);

        
        $__internal_dd798205d46f98f7f3e2859e0c92cfda8f21ac4a19675fd10ae674abe44900ac->leave($__internal_dd798205d46f98f7f3e2859e0c92cfda8f21ac4a19675fd10ae674abe44900ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

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
        $__internal_ed3d9dbd3c9a4c776d34a54624d8955e4c1c9739c482d114eb710b3c031642f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3d9dbd3c9a4c776d34a54624d8955e4c1c9739c482d114eb710b3c031642f5->enter($__internal_ed3d9dbd3c9a4c776d34a54624d8955e4c1c9739c482d114eb710b3c031642f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2f3b8f10241376b411002e4bb24ef5516aa58a45c7f00e7dae92e99fd96bd852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3b8f10241376b411002e4bb24ef5516aa58a45c7f00e7dae92e99fd96bd852->enter($__internal_2f3b8f10241376b411002e4bb24ef5516aa58a45c7f00e7dae92e99fd96bd852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed3d9dbd3c9a4c776d34a54624d8955e4c1c9739c482d114eb710b3c031642f5->leave($__internal_ed3d9dbd3c9a4c776d34a54624d8955e4c1c9739c482d114eb710b3c031642f5_prof);

        
        $__internal_2f3b8f10241376b411002e4bb24ef5516aa58a45c7f00e7dae92e99fd96bd852->leave($__internal_2f3b8f10241376b411002e4bb24ef5516aa58a45c7f00e7dae92e99fd96bd852_prof);

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

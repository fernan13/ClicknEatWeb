<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4ec6a55be8abd04aab9c57ac11ac1c57da1c379f24fc7369520895d17ab890ea extends Twig_Template
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
        $__internal_28fb68b387f8bc0481e7f62493f65a519bea36f281448b7a7c1498582a52513d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fb68b387f8bc0481e7f62493f65a519bea36f281448b7a7c1498582a52513d->enter($__internal_28fb68b387f8bc0481e7f62493f65a519bea36f281448b7a7c1498582a52513d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_aedf7f2c2558a305ce3e00a715abcbb80aa6eceba29339f7f2e544e942efad43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedf7f2c2558a305ce3e00a715abcbb80aa6eceba29339f7f2e544e942efad43->enter($__internal_aedf7f2c2558a305ce3e00a715abcbb80aa6eceba29339f7f2e544e942efad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_28fb68b387f8bc0481e7f62493f65a519bea36f281448b7a7c1498582a52513d->leave($__internal_28fb68b387f8bc0481e7f62493f65a519bea36f281448b7a7c1498582a52513d_prof);

        
        $__internal_aedf7f2c2558a305ce3e00a715abcbb80aa6eceba29339f7f2e544e942efad43->leave($__internal_aedf7f2c2558a305ce3e00a715abcbb80aa6eceba29339f7f2e544e942efad43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

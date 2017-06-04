<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_af65c09960e7f2a2b67572060e43f4f2bc880dccfc0c66df275f0edb893a11cc extends Twig_Template
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
        $__internal_384db9d7716e4d96f26557dcb28f7ceeaaea0ecbec5c8020b0c2b3f95ca48244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384db9d7716e4d96f26557dcb28f7ceeaaea0ecbec5c8020b0c2b3f95ca48244->enter($__internal_384db9d7716e4d96f26557dcb28f7ceeaaea0ecbec5c8020b0c2b3f95ca48244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9ea506bcea108dbb0684c6a4e180c06a5b93b5751067ba551ec9eb7c35fcd717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea506bcea108dbb0684c6a4e180c06a5b93b5751067ba551ec9eb7c35fcd717->enter($__internal_9ea506bcea108dbb0684c6a4e180c06a5b93b5751067ba551ec9eb7c35fcd717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_384db9d7716e4d96f26557dcb28f7ceeaaea0ecbec5c8020b0c2b3f95ca48244->leave($__internal_384db9d7716e4d96f26557dcb28f7ceeaaea0ecbec5c8020b0c2b3f95ca48244_prof);

        
        $__internal_9ea506bcea108dbb0684c6a4e180c06a5b93b5751067ba551ec9eb7c35fcd717->leave($__internal_9ea506bcea108dbb0684c6a4e180c06a5b93b5751067ba551ec9eb7c35fcd717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

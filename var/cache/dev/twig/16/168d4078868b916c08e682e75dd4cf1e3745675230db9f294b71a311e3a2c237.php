<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_71cf04cce64e966a10d52cd15bfd8fe8a91ba0f9a4041a9da746960f840c577b extends Twig_Template
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
        $__internal_a4fc727e52a9dd7a98b0fa2357a7d10d4b82e63d714a112c3b04fbd2d0615aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc727e52a9dd7a98b0fa2357a7d10d4b82e63d714a112c3b04fbd2d0615aeb->enter($__internal_a4fc727e52a9dd7a98b0fa2357a7d10d4b82e63d714a112c3b04fbd2d0615aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b9390cd7670681117a3751d735bd5b74673de14750cd6f6fe7b420d1f400ec84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9390cd7670681117a3751d735bd5b74673de14750cd6f6fe7b420d1f400ec84->enter($__internal_b9390cd7670681117a3751d735bd5b74673de14750cd6f6fe7b420d1f400ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a4fc727e52a9dd7a98b0fa2357a7d10d4b82e63d714a112c3b04fbd2d0615aeb->leave($__internal_a4fc727e52a9dd7a98b0fa2357a7d10d4b82e63d714a112c3b04fbd2d0615aeb_prof);

        
        $__internal_b9390cd7670681117a3751d735bd5b74673de14750cd6f6fe7b420d1f400ec84->leave($__internal_b9390cd7670681117a3751d735bd5b74673de14750cd6f6fe7b420d1f400ec84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

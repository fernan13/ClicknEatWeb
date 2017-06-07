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
        $__internal_efa87538dbcf62e722a26e82420dd942b63042fcbd0bfe02f25bfa0fb09202b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa87538dbcf62e722a26e82420dd942b63042fcbd0bfe02f25bfa0fb09202b5->enter($__internal_efa87538dbcf62e722a26e82420dd942b63042fcbd0bfe02f25bfa0fb09202b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_95ba6c8a31ee925e4f19b9fcc5a6b9a9f27f42e1a8386125fc9fb0f3db4bf77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ba6c8a31ee925e4f19b9fcc5a6b9a9f27f42e1a8386125fc9fb0f3db4bf77c->enter($__internal_95ba6c8a31ee925e4f19b9fcc5a6b9a9f27f42e1a8386125fc9fb0f3db4bf77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_efa87538dbcf62e722a26e82420dd942b63042fcbd0bfe02f25bfa0fb09202b5->leave($__internal_efa87538dbcf62e722a26e82420dd942b63042fcbd0bfe02f25bfa0fb09202b5_prof);

        
        $__internal_95ba6c8a31ee925e4f19b9fcc5a6b9a9f27f42e1a8386125fc9fb0f3db4bf77c->leave($__internal_95ba6c8a31ee925e4f19b9fcc5a6b9a9f27f42e1a8386125fc9fb0f3db4bf77c_prof);

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

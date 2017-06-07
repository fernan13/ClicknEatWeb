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
        $__internal_2cba8a0f9c7cd171d132e1d04338ba3b89110feb31bd2e555cb686dcde34c3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cba8a0f9c7cd171d132e1d04338ba3b89110feb31bd2e555cb686dcde34c3a6->enter($__internal_2cba8a0f9c7cd171d132e1d04338ba3b89110feb31bd2e555cb686dcde34c3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0ebee6ab68f4298a2a42142c9aeb925bf633848345672b758a4088f0c5ef3966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebee6ab68f4298a2a42142c9aeb925bf633848345672b758a4088f0c5ef3966->enter($__internal_0ebee6ab68f4298a2a42142c9aeb925bf633848345672b758a4088f0c5ef3966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2cba8a0f9c7cd171d132e1d04338ba3b89110feb31bd2e555cb686dcde34c3a6->leave($__internal_2cba8a0f9c7cd171d132e1d04338ba3b89110feb31bd2e555cb686dcde34c3a6_prof);

        
        $__internal_0ebee6ab68f4298a2a42142c9aeb925bf633848345672b758a4088f0c5ef3966->leave($__internal_0ebee6ab68f4298a2a42142c9aeb925bf633848345672b758a4088f0c5ef3966_prof);

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

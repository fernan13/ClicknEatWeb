<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_15a98f7a25b20d2f3d4c00fd2d6f23a41858a8c2df89f9e823843bbe1bd017b9 extends Twig_Template
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
        $__internal_c5b2f41ae781e55b853ad91f23adf8841391a54aefea5603145b9f96b4a5f42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b2f41ae781e55b853ad91f23adf8841391a54aefea5603145b9f96b4a5f42f->enter($__internal_c5b2f41ae781e55b853ad91f23adf8841391a54aefea5603145b9f96b4a5f42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e4c47ee1a92f20e76cb8c01164eb36e9bd78ea982c978eada445fdf15ac5e42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c47ee1a92f20e76cb8c01164eb36e9bd78ea982c978eada445fdf15ac5e42d->enter($__internal_e4c47ee1a92f20e76cb8c01164eb36e9bd78ea982c978eada445fdf15ac5e42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c5b2f41ae781e55b853ad91f23adf8841391a54aefea5603145b9f96b4a5f42f->leave($__internal_c5b2f41ae781e55b853ad91f23adf8841391a54aefea5603145b9f96b4a5f42f_prof);

        
        $__internal_e4c47ee1a92f20e76cb8c01164eb36e9bd78ea982c978eada445fdf15ac5e42d->leave($__internal_e4c47ee1a92f20e76cb8c01164eb36e9bd78ea982c978eada445fdf15ac5e42d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

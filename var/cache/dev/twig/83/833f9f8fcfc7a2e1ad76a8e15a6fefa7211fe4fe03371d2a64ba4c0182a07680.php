<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_721afd8248982a3bc4490d02514dbd4d5fd8815b30709417f13811a51333ecc1 extends Twig_Template
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
        $__internal_6df0236feb5de8442e8dc3e210fcae0b40824fa7f8fac9b1b654c4dcf47c3d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df0236feb5de8442e8dc3e210fcae0b40824fa7f8fac9b1b654c4dcf47c3d9b->enter($__internal_6df0236feb5de8442e8dc3e210fcae0b40824fa7f8fac9b1b654c4dcf47c3d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_829584e2bf3a44c1d858f8ecf965611d5bbe5bab9c969789ac6e19d154b6ce5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829584e2bf3a44c1d858f8ecf965611d5bbe5bab9c969789ac6e19d154b6ce5f->enter($__internal_829584e2bf3a44c1d858f8ecf965611d5bbe5bab9c969789ac6e19d154b6ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6df0236feb5de8442e8dc3e210fcae0b40824fa7f8fac9b1b654c4dcf47c3d9b->leave($__internal_6df0236feb5de8442e8dc3e210fcae0b40824fa7f8fac9b1b654c4dcf47c3d9b_prof);

        
        $__internal_829584e2bf3a44c1d858f8ecf965611d5bbe5bab9c969789ac6e19d154b6ce5f->leave($__internal_829584e2bf3a44c1d858f8ecf965611d5bbe5bab9c969789ac6e19d154b6ce5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

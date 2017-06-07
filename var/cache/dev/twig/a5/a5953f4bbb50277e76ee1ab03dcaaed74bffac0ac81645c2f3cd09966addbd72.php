<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ce52abe75fbf1c443cd3feb2f65e14e369e90ed617c8258f601f58bb36459f05 extends Twig_Template
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
        $__internal_c96a606d3b4e89a181930813ff42c7ef92fb302661d3305d1e58f8e8e9f2d587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96a606d3b4e89a181930813ff42c7ef92fb302661d3305d1e58f8e8e9f2d587->enter($__internal_c96a606d3b4e89a181930813ff42c7ef92fb302661d3305d1e58f8e8e9f2d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c532efbd3c346573893aa14346ca7395c753458d675eb5bbdcf5a7f8ba0929e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c532efbd3c346573893aa14346ca7395c753458d675eb5bbdcf5a7f8ba0929e8->enter($__internal_c532efbd3c346573893aa14346ca7395c753458d675eb5bbdcf5a7f8ba0929e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c96a606d3b4e89a181930813ff42c7ef92fb302661d3305d1e58f8e8e9f2d587->leave($__internal_c96a606d3b4e89a181930813ff42c7ef92fb302661d3305d1e58f8e8e9f2d587_prof);

        
        $__internal_c532efbd3c346573893aa14346ca7395c753458d675eb5bbdcf5a7f8ba0929e8->leave($__internal_c532efbd3c346573893aa14346ca7395c753458d675eb5bbdcf5a7f8ba0929e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

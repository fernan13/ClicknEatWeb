<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2e791725f2bd9cf0c4e490bab1dfbfb3a97c9e0ba9de6a8d4deb3a76db51ac2d extends Twig_Template
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
        $__internal_b33b976d294aad1343fc67c4b75066a2d6901ae1f7d24eb945caea118e1c6ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33b976d294aad1343fc67c4b75066a2d6901ae1f7d24eb945caea118e1c6ceb->enter($__internal_b33b976d294aad1343fc67c4b75066a2d6901ae1f7d24eb945caea118e1c6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_17ee56b9a506ec72a5d951334e05f1d4052997210cb91fe81c0b2970ea285736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ee56b9a506ec72a5d951334e05f1d4052997210cb91fe81c0b2970ea285736->enter($__internal_17ee56b9a506ec72a5d951334e05f1d4052997210cb91fe81c0b2970ea285736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b33b976d294aad1343fc67c4b75066a2d6901ae1f7d24eb945caea118e1c6ceb->leave($__internal_b33b976d294aad1343fc67c4b75066a2d6901ae1f7d24eb945caea118e1c6ceb_prof);

        
        $__internal_17ee56b9a506ec72a5d951334e05f1d4052997210cb91fe81c0b2970ea285736->leave($__internal_17ee56b9a506ec72a5d951334e05f1d4052997210cb91fe81c0b2970ea285736_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

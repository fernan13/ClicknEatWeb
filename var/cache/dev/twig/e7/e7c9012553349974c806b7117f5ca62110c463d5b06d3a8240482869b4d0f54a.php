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
        $__internal_db0a4dcd79726d0f8cd253494e047574e387cc6d35855c59ba53ab0e5cd6b1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a4dcd79726d0f8cd253494e047574e387cc6d35855c59ba53ab0e5cd6b1dc->enter($__internal_db0a4dcd79726d0f8cd253494e047574e387cc6d35855c59ba53ab0e5cd6b1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_43cc989a79db84e01b9c1f0dab5c74b9f0e1314fbdf497e13834b9ec01088c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cc989a79db84e01b9c1f0dab5c74b9f0e1314fbdf497e13834b9ec01088c06->enter($__internal_43cc989a79db84e01b9c1f0dab5c74b9f0e1314fbdf497e13834b9ec01088c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_db0a4dcd79726d0f8cd253494e047574e387cc6d35855c59ba53ab0e5cd6b1dc->leave($__internal_db0a4dcd79726d0f8cd253494e047574e387cc6d35855c59ba53ab0e5cd6b1dc_prof);

        
        $__internal_43cc989a79db84e01b9c1f0dab5c74b9f0e1314fbdf497e13834b9ec01088c06->leave($__internal_43cc989a79db84e01b9c1f0dab5c74b9f0e1314fbdf497e13834b9ec01088c06_prof);

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

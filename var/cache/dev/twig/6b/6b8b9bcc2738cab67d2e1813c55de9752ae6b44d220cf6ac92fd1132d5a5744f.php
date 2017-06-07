<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_302c317cecdd6db297b4e7979e83b71807e76f4f1a50166368ae2860532d863b extends Twig_Template
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
        $__internal_111521fe1db8a8c1d8304a5e704513c3764e96206450b10d0cc4c45e3a11f8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111521fe1db8a8c1d8304a5e704513c3764e96206450b10d0cc4c45e3a11f8b3->enter($__internal_111521fe1db8a8c1d8304a5e704513c3764e96206450b10d0cc4c45e3a11f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9554c5342802516bcd0cc02f8e3b629983c1bd3ce4c8d00c724a2a8d8d3f148d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9554c5342802516bcd0cc02f8e3b629983c1bd3ce4c8d00c724a2a8d8d3f148d->enter($__internal_9554c5342802516bcd0cc02f8e3b629983c1bd3ce4c8d00c724a2a8d8d3f148d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_111521fe1db8a8c1d8304a5e704513c3764e96206450b10d0cc4c45e3a11f8b3->leave($__internal_111521fe1db8a8c1d8304a5e704513c3764e96206450b10d0cc4c45e3a11f8b3_prof);

        
        $__internal_9554c5342802516bcd0cc02f8e3b629983c1bd3ce4c8d00c724a2a8d8d3f148d->leave($__internal_9554c5342802516bcd0cc02f8e3b629983c1bd3ce4c8d00c724a2a8d8d3f148d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

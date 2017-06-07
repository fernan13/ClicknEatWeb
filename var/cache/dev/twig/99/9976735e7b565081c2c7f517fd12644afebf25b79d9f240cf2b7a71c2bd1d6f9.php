<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2b36f3c9ba4272d30fed5262ff323ca74fddd8a9ea24546419fb3e4935819c8b extends Twig_Template
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
        $__internal_da41643681614d8f2673869a13439b4125638b0c4f7ef5ccb23996902f321ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da41643681614d8f2673869a13439b4125638b0c4f7ef5ccb23996902f321ef9->enter($__internal_da41643681614d8f2673869a13439b4125638b0c4f7ef5ccb23996902f321ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_17934cd85209ab72c4f94fea11079bc115344f5088c977da6241324b43ce03be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17934cd85209ab72c4f94fea11079bc115344f5088c977da6241324b43ce03be->enter($__internal_17934cd85209ab72c4f94fea11079bc115344f5088c977da6241324b43ce03be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_da41643681614d8f2673869a13439b4125638b0c4f7ef5ccb23996902f321ef9->leave($__internal_da41643681614d8f2673869a13439b4125638b0c4f7ef5ccb23996902f321ef9_prof);

        
        $__internal_17934cd85209ab72c4f94fea11079bc115344f5088c977da6241324b43ce03be->leave($__internal_17934cd85209ab72c4f94fea11079bc115344f5088c977da6241324b43ce03be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

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
        $__internal_8498e31a2e2f82a36ebf83b6a46d8a8a2caea4816543127e3c742b35aef58777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8498e31a2e2f82a36ebf83b6a46d8a8a2caea4816543127e3c742b35aef58777->enter($__internal_8498e31a2e2f82a36ebf83b6a46d8a8a2caea4816543127e3c742b35aef58777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1fe96244d7e4f43a7fa285577d3dde497e44cdfa0157a6e463621cf43cc8754c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe96244d7e4f43a7fa285577d3dde497e44cdfa0157a6e463621cf43cc8754c->enter($__internal_1fe96244d7e4f43a7fa285577d3dde497e44cdfa0157a6e463621cf43cc8754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8498e31a2e2f82a36ebf83b6a46d8a8a2caea4816543127e3c742b35aef58777->leave($__internal_8498e31a2e2f82a36ebf83b6a46d8a8a2caea4816543127e3c742b35aef58777_prof);

        
        $__internal_1fe96244d7e4f43a7fa285577d3dde497e44cdfa0157a6e463621cf43cc8754c->leave($__internal_1fe96244d7e4f43a7fa285577d3dde497e44cdfa0157a6e463621cf43cc8754c_prof);

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

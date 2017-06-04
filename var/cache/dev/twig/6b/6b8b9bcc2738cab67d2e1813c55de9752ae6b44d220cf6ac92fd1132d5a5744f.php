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
        $__internal_4781139f5f0ae308f1d50463b6e87f13faf498c1d102bc90d982d85c2fcd19b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4781139f5f0ae308f1d50463b6e87f13faf498c1d102bc90d982d85c2fcd19b6->enter($__internal_4781139f5f0ae308f1d50463b6e87f13faf498c1d102bc90d982d85c2fcd19b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1cf2b99e20403b17f7bfe27c93a13b552cd10c2a083ba68206b903d9ac10ed0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf2b99e20403b17f7bfe27c93a13b552cd10c2a083ba68206b903d9ac10ed0d->enter($__internal_1cf2b99e20403b17f7bfe27c93a13b552cd10c2a083ba68206b903d9ac10ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4781139f5f0ae308f1d50463b6e87f13faf498c1d102bc90d982d85c2fcd19b6->leave($__internal_4781139f5f0ae308f1d50463b6e87f13faf498c1d102bc90d982d85c2fcd19b6_prof);

        
        $__internal_1cf2b99e20403b17f7bfe27c93a13b552cd10c2a083ba68206b903d9ac10ed0d->leave($__internal_1cf2b99e20403b17f7bfe27c93a13b552cd10c2a083ba68206b903d9ac10ed0d_prof);

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

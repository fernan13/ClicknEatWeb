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
        $__internal_43dfdd7f447e3ec3b246d13f5847d0befdf27b1b12125c60f4e856cd78493750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43dfdd7f447e3ec3b246d13f5847d0befdf27b1b12125c60f4e856cd78493750->enter($__internal_43dfdd7f447e3ec3b246d13f5847d0befdf27b1b12125c60f4e856cd78493750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_864348d1d2154299b82360cb9975bb81d84f82eae37e72aaace58a0477e8d36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864348d1d2154299b82360cb9975bb81d84f82eae37e72aaace58a0477e8d36c->enter($__internal_864348d1d2154299b82360cb9975bb81d84f82eae37e72aaace58a0477e8d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_43dfdd7f447e3ec3b246d13f5847d0befdf27b1b12125c60f4e856cd78493750->leave($__internal_43dfdd7f447e3ec3b246d13f5847d0befdf27b1b12125c60f4e856cd78493750_prof);

        
        $__internal_864348d1d2154299b82360cb9975bb81d84f82eae37e72aaace58a0477e8d36c->leave($__internal_864348d1d2154299b82360cb9975bb81d84f82eae37e72aaace58a0477e8d36c_prof);

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

<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2ed98996a6b4307e7983f3f6a45b598410fdd1ed5fef84340e34adb37c67234e extends Twig_Template
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
        $__internal_b5b4297fb22182f5fe46136a8f90ccbeaf3ee70b693f9fe993485494afa52fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b4297fb22182f5fe46136a8f90ccbeaf3ee70b693f9fe993485494afa52fd0->enter($__internal_b5b4297fb22182f5fe46136a8f90ccbeaf3ee70b693f9fe993485494afa52fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f28f3aa2deed6fb98127233dac69b24f1eaca7e51939f222f262350b2179d233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28f3aa2deed6fb98127233dac69b24f1eaca7e51939f222f262350b2179d233->enter($__internal_f28f3aa2deed6fb98127233dac69b24f1eaca7e51939f222f262350b2179d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b5b4297fb22182f5fe46136a8f90ccbeaf3ee70b693f9fe993485494afa52fd0->leave($__internal_b5b4297fb22182f5fe46136a8f90ccbeaf3ee70b693f9fe993485494afa52fd0_prof);

        
        $__internal_f28f3aa2deed6fb98127233dac69b24f1eaca7e51939f222f262350b2179d233->leave($__internal_f28f3aa2deed6fb98127233dac69b24f1eaca7e51939f222f262350b2179d233_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

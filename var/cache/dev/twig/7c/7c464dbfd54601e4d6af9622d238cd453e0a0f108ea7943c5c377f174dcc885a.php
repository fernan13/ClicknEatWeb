<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be2be7041b8f53128d0051df4aa794efce6d07a8121f4445f97849ac176c0452 extends Twig_Template
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
        $__internal_aca1b38f2075e5ec78aa52830e9dcb078093c3d1c6fd86fb3e5a3a2437dbab3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca1b38f2075e5ec78aa52830e9dcb078093c3d1c6fd86fb3e5a3a2437dbab3e->enter($__internal_aca1b38f2075e5ec78aa52830e9dcb078093c3d1c6fd86fb3e5a3a2437dbab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e2f06a166c42c33fb85e9509546f1a7d13830e82a46e0aa85b3daadc59f67c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f06a166c42c33fb85e9509546f1a7d13830e82a46e0aa85b3daadc59f67c6f->enter($__internal_e2f06a166c42c33fb85e9509546f1a7d13830e82a46e0aa85b3daadc59f67c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aca1b38f2075e5ec78aa52830e9dcb078093c3d1c6fd86fb3e5a3a2437dbab3e->leave($__internal_aca1b38f2075e5ec78aa52830e9dcb078093c3d1c6fd86fb3e5a3a2437dbab3e_prof);

        
        $__internal_e2f06a166c42c33fb85e9509546f1a7d13830e82a46e0aa85b3daadc59f67c6f->leave($__internal_e2f06a166c42c33fb85e9509546f1a7d13830e82a46e0aa85b3daadc59f67c6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

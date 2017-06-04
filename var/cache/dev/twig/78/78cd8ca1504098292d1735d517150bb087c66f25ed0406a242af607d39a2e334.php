<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d39eb81c168d43dedf82b8a0b04c28483136805ec42356cee46f5f7461ebe014 extends Twig_Template
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
        $__internal_8e3253e4147ba6deb071cdf12f3f3f0597453ba68444dbdcd24133cdcb565d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3253e4147ba6deb071cdf12f3f3f0597453ba68444dbdcd24133cdcb565d49->enter($__internal_8e3253e4147ba6deb071cdf12f3f3f0597453ba68444dbdcd24133cdcb565d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_94ccadfb56d3eb440b128af951b55e632f54667082864c47ac85cafe0c7329c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ccadfb56d3eb440b128af951b55e632f54667082864c47ac85cafe0c7329c9->enter($__internal_94ccadfb56d3eb440b128af951b55e632f54667082864c47ac85cafe0c7329c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8e3253e4147ba6deb071cdf12f3f3f0597453ba68444dbdcd24133cdcb565d49->leave($__internal_8e3253e4147ba6deb071cdf12f3f3f0597453ba68444dbdcd24133cdcb565d49_prof);

        
        $__internal_94ccadfb56d3eb440b128af951b55e632f54667082864c47ac85cafe0c7329c9->leave($__internal_94ccadfb56d3eb440b128af951b55e632f54667082864c47ac85cafe0c7329c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

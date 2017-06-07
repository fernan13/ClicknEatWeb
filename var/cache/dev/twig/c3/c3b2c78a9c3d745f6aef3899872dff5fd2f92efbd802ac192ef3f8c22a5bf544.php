<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8f07c9b12789231f34a2a0185abea7317fe812c4a590b3aab88d21f75b3b455c extends Twig_Template
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
        $__internal_440a6b3010f8fa309052731441614c312bea31d95a41639c5bcc844c31ee5774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440a6b3010f8fa309052731441614c312bea31d95a41639c5bcc844c31ee5774->enter($__internal_440a6b3010f8fa309052731441614c312bea31d95a41639c5bcc844c31ee5774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e60e79ac82766288d255550e419fffca1dac28f689aa05a93be15987791fc4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60e79ac82766288d255550e419fffca1dac28f689aa05a93be15987791fc4d6->enter($__internal_e60e79ac82766288d255550e419fffca1dac28f689aa05a93be15987791fc4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_440a6b3010f8fa309052731441614c312bea31d95a41639c5bcc844c31ee5774->leave($__internal_440a6b3010f8fa309052731441614c312bea31d95a41639c5bcc844c31ee5774_prof);

        
        $__internal_e60e79ac82766288d255550e419fffca1dac28f689aa05a93be15987791fc4d6->leave($__internal_e60e79ac82766288d255550e419fffca1dac28f689aa05a93be15987791fc4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

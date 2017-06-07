<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fbe9cebc17c4b32e5cdf38e9dc356a702ee0449b3334ccd31fb48ba9450211e5 extends Twig_Template
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
        $__internal_7c6f196efe628cdd5067cfdff287a5d32a0f8871ffa6b72532593e942e2b3368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6f196efe628cdd5067cfdff287a5d32a0f8871ffa6b72532593e942e2b3368->enter($__internal_7c6f196efe628cdd5067cfdff287a5d32a0f8871ffa6b72532593e942e2b3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1ac7770b3cc514c9f8206419f2593ce6b702db97c8f6ac4c67939f517d918695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac7770b3cc514c9f8206419f2593ce6b702db97c8f6ac4c67939f517d918695->enter($__internal_1ac7770b3cc514c9f8206419f2593ce6b702db97c8f6ac4c67939f517d918695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c6f196efe628cdd5067cfdff287a5d32a0f8871ffa6b72532593e942e2b3368->leave($__internal_7c6f196efe628cdd5067cfdff287a5d32a0f8871ffa6b72532593e942e2b3368_prof);

        
        $__internal_1ac7770b3cc514c9f8206419f2593ce6b702db97c8f6ac4c67939f517d918695->leave($__internal_1ac7770b3cc514c9f8206419f2593ce6b702db97c8f6ac4c67939f517d918695_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

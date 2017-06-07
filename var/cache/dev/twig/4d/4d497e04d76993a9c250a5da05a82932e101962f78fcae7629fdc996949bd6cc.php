<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_af65c09960e7f2a2b67572060e43f4f2bc880dccfc0c66df275f0edb893a11cc extends Twig_Template
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
        $__internal_625017bcb38d6b46a7e5040f80241b7c3bc5714df570b53233d36a26bafcd4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625017bcb38d6b46a7e5040f80241b7c3bc5714df570b53233d36a26bafcd4c7->enter($__internal_625017bcb38d6b46a7e5040f80241b7c3bc5714df570b53233d36a26bafcd4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c91433eb9652091f1a878175a5e7f2b78787f54b699b577304cc2c5a633c8687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91433eb9652091f1a878175a5e7f2b78787f54b699b577304cc2c5a633c8687->enter($__internal_c91433eb9652091f1a878175a5e7f2b78787f54b699b577304cc2c5a633c8687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_625017bcb38d6b46a7e5040f80241b7c3bc5714df570b53233d36a26bafcd4c7->leave($__internal_625017bcb38d6b46a7e5040f80241b7c3bc5714df570b53233d36a26bafcd4c7_prof);

        
        $__internal_c91433eb9652091f1a878175a5e7f2b78787f54b699b577304cc2c5a633c8687->leave($__internal_c91433eb9652091f1a878175a5e7f2b78787f54b699b577304cc2c5a633c8687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

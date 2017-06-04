<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f4c99651c4fa82696040c20f524a272d297bea58227836bf65011a2398d37c04 extends Twig_Template
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
        $__internal_f684190b493c5544c04776c577e06cded77419ef9a455c85bdef376f0447efb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f684190b493c5544c04776c577e06cded77419ef9a455c85bdef376f0447efb7->enter($__internal_f684190b493c5544c04776c577e06cded77419ef9a455c85bdef376f0447efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8e41f0ddc5e7982fce55bef9bb46b98f583199698f5e2da014b4f7ddde19502b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e41f0ddc5e7982fce55bef9bb46b98f583199698f5e2da014b4f7ddde19502b->enter($__internal_8e41f0ddc5e7982fce55bef9bb46b98f583199698f5e2da014b4f7ddde19502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f684190b493c5544c04776c577e06cded77419ef9a455c85bdef376f0447efb7->leave($__internal_f684190b493c5544c04776c577e06cded77419ef9a455c85bdef376f0447efb7_prof);

        
        $__internal_8e41f0ddc5e7982fce55bef9bb46b98f583199698f5e2da014b4f7ddde19502b->leave($__internal_8e41f0ddc5e7982fce55bef9bb46b98f583199698f5e2da014b4f7ddde19502b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

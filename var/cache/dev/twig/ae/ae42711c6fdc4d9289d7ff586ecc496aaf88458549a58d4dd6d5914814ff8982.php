<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1f2d22a4044bba639141a3aac4c2d00e9da4126a811deaa9db3c4d972c9161b0 extends Twig_Template
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
        $__internal_6b10e13dadc82f9e9ca2e003b088fffc24bbe8c1941326eaa97b5c21872105c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b10e13dadc82f9e9ca2e003b088fffc24bbe8c1941326eaa97b5c21872105c0->enter($__internal_6b10e13dadc82f9e9ca2e003b088fffc24bbe8c1941326eaa97b5c21872105c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_6c44d468f1cf977f1de790434332a3d1ad912f73b36e412917d65bfa6bc3bf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c44d468f1cf977f1de790434332a3d1ad912f73b36e412917d65bfa6bc3bf77->enter($__internal_6c44d468f1cf977f1de790434332a3d1ad912f73b36e412917d65bfa6bc3bf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"background-image-responsive full-page\" style=\"background-image:url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background-register-login.jpg"), "html", null, true);
        echo "')\">
    <div class=\"overlay\">
        <main id=\"mainContainer\">
        
        <!-- Main Container -->
        <div class=\"container\">
    
            <!-- Signup or Login -->
            <section class=\"section mt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-6\"></div>
                    <div class=\"col-lg-6 mb-3\">
                        
                        <!-- Signup form -->
                        <div class=\"card\">
                            <div class=\"card-block\">
    
                                <!--Header-->
                                <div class=\"form-header index\">
                                    <h3>Create an Account</h3>
                                </div>
                                
                                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                    <!--Body-->
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-user prefix\"></i>
                                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-envelope prefix\"></i>
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-lock prefix\"></i>
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-lock prefix\"></i>
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                                    </div>
                                    
                                    <div class=\"text-center\">
                                        <fieldset class=\"form-group\">
                                            <input type=\"checkbox\" id=\"checkbox1\">
                                            <label for=\"checkbox1\">Subscribe me to the newsletter</label>
                                        </fieldset>
                                        <button class=\"btn btn-primary\">Sign up</button>
                                        <p>or</p>
                                        <a  href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" type=\"button\" 
                                            class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                        <a  href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\" type=\"button\" 
                                            class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
                                    </div>
                                    
                                ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                
    
                            </div>
                        </div>
    
                        <!-- /.Signup form -->
                    </div>
                            
                </div>
            </section>
    
        </div>
        <!-- /.Main Container -->
    </main>
        
    </div>
    
    
</div>";
        
        $__internal_6b10e13dadc82f9e9ca2e003b088fffc24bbe8c1941326eaa97b5c21872105c0->leave($__internal_6b10e13dadc82f9e9ca2e003b088fffc24bbe8c1941326eaa97b5c21872105c0_prof);

        
        $__internal_6c44d468f1cf977f1de790434332a3d1ad912f73b36e412917d65bfa6bc3bf77->leave($__internal_6c44d468f1cf977f1de790434332a3d1ad912f73b36e412917d65bfa6bc3bf77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 69,  138 => 65,  133 => 63,  120 => 53,  116 => 52,  112 => 51,  104 => 46,  100 => 45,  96 => 44,  88 => 39,  84 => 38,  80 => 37,  72 => 32,  68 => 31,  64 => 30,  57 => 26,  53 => 25,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"background-image-responsive full-page\" style=\"background-image:url('{{ asset('img/background-register-login.jpg') }}')\">
    <div class=\"overlay\">
        <main id=\"mainContainer\">
        
        <!-- Main Container -->
        <div class=\"container\">
    
            <!-- Signup or Login -->
            <section class=\"section mt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-6\"></div>
                    <div class=\"col-lg-6 mb-3\">
                        
                        <!-- Signup form -->
                        <div class=\"card\">
                            <div class=\"card-block\">
    
                                <!--Header-->
                                <div class=\"form-header index\">
                                    <h3>Create an Account</h3>
                                </div>
                                
                                {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                                    {{ form_start(form) }}
                                    <!--Body-->
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-user prefix\"></i>
                                        {{ form_widget(form.username) }}
                                        {{ form_label(form.username)}}
                                        {{ form_errors(form.username) }}
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-envelope prefix\"></i>
                                        {{ form_widget(form.email) }}
                                        {{ form_label(form.email)}}
                                        {{ form_errors(form.email) }}
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-lock prefix\"></i>
                                        {{ form_widget(form.plainPassword.first) }}
                                        {{ form_label(form.plainPassword.first) }}
                                        {{ form_errors(form.plainPassword.first) }}
                                    </div>
                                    
                                    <div class=\"md-form\">
                                        <i class=\"fa fa-lock prefix\"></i>
                                        {{ form_widget(form.plainPassword.second) }}
                                        {{ form_label(form.plainPassword.second) }}
                                        {{ form_errors(form.plainPassword.second) }}
                                    </div>
                                    
                                    <div class=\"text-center\">
                                        <fieldset class=\"form-group\">
                                            <input type=\"checkbox\" id=\"checkbox1\">
                                            <label for=\"checkbox1\">Subscribe me to the newsletter</label>
                                        </fieldset>
                                        <button class=\"btn btn-primary\">Sign up</button>
                                        <p>or</p>
                                        <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\" type=\"button\" 
                                            class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                        <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}\" type=\"button\" 
                                            class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
                                    </div>
                                    
                                {{ form_end(form) }}
                                
    
                            </div>
                        </div>
    
                        <!-- /.Signup form -->
                    </div>
                            
                </div>
            </section>
    
        </div>
        <!-- /.Main Container -->
    </main>
        
    </div>
    
    
</div>", "FOSUserBundle:Registration:register_content.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}

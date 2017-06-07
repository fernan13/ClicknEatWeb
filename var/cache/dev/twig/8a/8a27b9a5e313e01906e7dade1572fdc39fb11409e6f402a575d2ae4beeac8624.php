<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_2586888a5e1862fdc3cf2548a8ddb66bd8d7631185f763c7b5ea771567ad7262 extends Twig_Template
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
        $__internal_299f1ba3fb4274931212f657fbf3e3734b6f6bdb417ecd8fb616849a447a3631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299f1ba3fb4274931212f657fbf3e3734b6f6bdb417ecd8fb616849a447a3631->enter($__internal_299f1ba3fb4274931212f657fbf3e3734b6f6bdb417ecd8fb616849a447a3631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_0061f9e44b56bbb109a935c294276995bb9db1fef908df3667f5792f1ff36d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0061f9e44b56bbb109a935c294276995bb9db1fef908df3667f5792f1ff36d7f->enter($__internal_0061f9e44b56bbb109a935c294276995bb9db1fef908df3667f5792f1ff36d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<div class=\"background-image-responsive full-page\" style=\"background-image:url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background-register-login.jpg"), "html", null, true);
        echo "')\">
    <div class=\"overlay\">
        
        <main id=\"mainContainer\">
            
            <!-- Main Container -->
            <div class=\"container flex-vertical-align\">
        
                ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "        
                <!-- Signup or Login -->
                <section class=\"section mt-5\">
                    <div class=\"row\">
                                 
                        <div class=\"col-lg-6\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-block\">
        
                                    <!--Header-->
                                    <div class=\"form-header index\">
                                        <h3>Already signed up?</h3>
                                        <hr class=\"mt-2 mb-2\">
                                    </div>
                                    
                                    <form action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                        
                                        ";
        // line 32
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 33
            echo "                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                        ";
        }
        // line 35
        echo "                                        
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-user prefix\"></i>
                                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                                            <label for=\"username\">Your name</label>
                                        </div>
            
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-lock prefix\"></i>
                                            <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\">
                                            <label for=\"password\">Your password</label>
                                        </div>
            
                                        <div class=\"text-center\">
                                            <fieldset class=\"form-group\">
                                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                                <label for=\"remember_me\">Remember me</label>
                                            </fieldset>
                                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Sign in</button>
                                        </div>
                                        <div class=\"text-center\">
                                            <p>or</p>
                                            <a  href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" type=\"button\" 
                                                class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                            <a  href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\" type=\"button\" 
                                                class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
                                            <hr>
                                            <p><a href=\"#\">Forgot Your Password?</a></p>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
            </div>
            <!-- /.Main Container -->
        </main>
    </div>
</div>
";
        
        $__internal_299f1ba3fb4274931212f657fbf3e3734b6f6bdb417ecd8fb616849a447a3631->leave($__internal_299f1ba3fb4274931212f657fbf3e3734b6f6bdb417ecd8fb616849a447a3631_prof);

        
        $__internal_0061f9e44b56bbb109a935c294276995bb9db1fef908df3667f5792f1ff36d7f->leave($__internal_0061f9e44b56bbb109a935c294276995bb9db1fef908df3667f5792f1ff36d7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 59,  108 => 57,  101 => 53,  83 => 38,  78 => 35,  72 => 33,  70 => 32,  65 => 30,  47 => 14,  41 => 12,  39 => 11,  28 => 3,  25 => 2,);
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
            <div class=\"container flex-vertical-align\">
        
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
        
                <!-- Signup or Login -->
                <section class=\"section mt-5\">
                    <div class=\"row\">
                                 
                        <div class=\"col-lg-6\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-block\">
        
                                    <!--Header-->
                                    <div class=\"form-header index\">
                                        <h3>Already signed up?</h3>
                                        <hr class=\"mt-2 mb-2\">
                                    </div>
                                    
                                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                        
                                        {% if csrf_token %}
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                        {% endif %}
                                        
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-user prefix\"></i>
                                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" required=\"required\">
                                            <label for=\"username\">Your name</label>
                                        </div>
            
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-lock prefix\"></i>
                                            <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\">
                                            <label for=\"password\">Your password</label>
                                        </div>
            
                                        <div class=\"text-center\">
                                            <fieldset class=\"form-group\">
                                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                                <label for=\"remember_me\">Remember me</label>
                                            </fieldset>
                                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary\">Sign in</button>
                                        </div>
                                        <div class=\"text-center\">
                                            <p>or</p>
                                            <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\" type=\"button\" 
                                                class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                            <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}\" type=\"button\" 
                                                class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
                                            <hr>
                                            <p><a href=\"#\">Forgot Your Password?</a></p>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
            </div>
            <!-- /.Main Container -->
        </main>
    </div>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

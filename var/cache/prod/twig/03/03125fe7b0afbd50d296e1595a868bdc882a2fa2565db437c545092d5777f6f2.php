<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_20eda50c7dee224c818d6176befa7fc128deedc53fe901a12b13437b33ffe073 extends Twig_Template
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
        $__internal_2815adc3d30db1e3fdeeea3fa230efdae91f45966d94acc86f53a00a3631375d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2815adc3d30db1e3fdeeea3fa230efdae91f45966d94acc86f53a00a3631375d->enter($__internal_2815adc3d30db1e3fdeeea3fa230efdae91f45966d94acc86f53a00a3631375d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"background-login-register\" style=\"background-image:url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background-register-login.jpg"), "html", null, true);
        echo "')\">
    <div class=\"overlay\">
        
        <main id=\"mainContainer\">
            
            <!-- Main Container -->
            <div class=\"container\">
        
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
                                 
                        <!--<form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            ";
        // line 20
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 21
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                            ";
        }
        // line 23
        echo "                        
                            <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                        
                            <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>-->
                        <div class=\"col-lg-6\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-block\">
        
                                    <!--Header-->
                                    <div class=\"form-header\">
                                        <h3>Already signed up?</h3>
                                        <hr class=\"mt-2 mb-2\">
                                    </div>
                                    
                                    <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                        
                                        ";
        // line 48
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 49
            echo "                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                        ";
        }
        // line 51
        echo "                                        
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-user prefix\"></i>
                                            <input type=\"text\" id=\"form5\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                                            <label for=\"form5\">Your name</label>
                                        </div>
            
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-envelope prefix\"></i>
                                            <input id=\"form6\" class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\">
                                            <label for=\"form6\">Your password</label>
                                        </div>
            
                                        <div class=\"text-center\">
                                            <fieldset class=\"form-group\">
                                                <input type=\"checkbox\" id=\"checkbox2\">
                                                <label for=\"checkbox2\">Remember me</label>
                                            </fieldset>
                                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Sign in</button>
                                        </div>
                                        <div class=\"text-center\">
                                            <p><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></p>
                                            <p><a href=\"#\">Forgot Your Password?</a></p>
                                            <hr>
                                            <p>or</p>
                                            <a  href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" type=\"button\" 
                                                class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                            <a  href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\" type=\"button\" 
                                                class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
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
        
        $__internal_2815adc3d30db1e3fdeeea3fa230efdae91f45966d94acc86f53a00a3631375d->leave($__internal_2815adc3d30db1e3fdeeea3fa230efdae91f45966d94acc86f53a00a3631375d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 78,  152 => 76,  145 => 72,  139 => 69,  121 => 54,  116 => 51,  110 => 49,  108 => 48,  103 => 46,  87 => 33,  82 => 31,  75 => 27,  70 => 25,  66 => 24,  63 => 23,  57 => 21,  55 => 20,  51 => 19,  44 => 14,  38 => 12,  36 => 11,  25 => 3,  22 => 2,);
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

<div class=\"background-login-register\" style=\"background-image:url('{{ asset('img/background-register-login.jpg') }}')\">
    <div class=\"overlay\">
        
        <main id=\"mainContainer\">
            
            <!-- Main Container -->
            <div class=\"container\">
        
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
        
                <!-- Signup or Login -->
                <section class=\"section mt-5\">
                    <div class=\"row\">
                                 
                        <!--<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            {% if csrf_token %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            {% endif %}
                        
                            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                        
                            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                        
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                        </form>-->
                        <div class=\"col-lg-6\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-block\">
        
                                    <!--Header-->
                                    <div class=\"form-header\">
                                        <h3>Already signed up?</h3>
                                        <hr class=\"mt-2 mb-2\">
                                    </div>
                                    
                                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                        
                                        {% if csrf_token %}
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                        {% endif %}
                                        
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-user prefix\"></i>
                                            <input type=\"text\" id=\"form5\" class=\"form-control\" value=\"{{ last_username }}\" required=\"required\">
                                            <label for=\"form5\">Your name</label>
                                        </div>
            
                                        <div class=\"md-form\">
                                            <i class=\"fa fa-envelope prefix\"></i>
                                            <input id=\"form6\" class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\">
                                            <label for=\"form6\">Your password</label>
                                        </div>
            
                                        <div class=\"text-center\">
                                            <fieldset class=\"form-group\">
                                                <input type=\"checkbox\" id=\"checkbox2\">
                                                <label for=\"checkbox2\">Remember me</label>
                                            </fieldset>
                                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary\">Sign in</button>
                                        </div>
                                        <div class=\"text-center\">
                                            <p><a href=\"{{path('fos_user_registration_register')}}\">Register</a></p>
                                            <p><a href=\"#\">Forgot Your Password?</a></p>
                                            <hr>
                                            <p>or</p>
                                            <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\" type=\"button\" 
                                                class=\"btn btn-fb\"><i class=\"fa fa-facebook left\"></i> Login with Facebook</a>
                                            <a  href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google' }) }}\" type=\"button\" 
                                                class=\"btn btn-gplus\"><i class=\"fa fa-google left\"></i> Login with Google</a>
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
", "@FOSUser/Security/login_content.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

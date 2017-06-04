<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_835872fddf7091de7f58b7009b21942d4d94615105f183bb75264bc2539a5896 extends Twig_Template
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
        $__internal_4da0f13b849593f4fbae6599dbce1cb98f5cdb053e56174261dbd636e478a978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da0f13b849593f4fbae6599dbce1cb98f5cdb053e56174261dbd636e478a978->enter($__internal_4da0f13b849593f4fbae6599dbce1cb98f5cdb053e56174261dbd636e478a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_4da0f13b849593f4fbae6599dbce1cb98f5cdb053e56174261dbd636e478a978->leave($__internal_4da0f13b849593f4fbae6599dbce1cb98f5cdb053e56174261dbd636e478a978_prof);

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
        return array (  110 => 59,  105 => 57,  98 => 53,  80 => 38,  75 => 35,  69 => 33,  67 => 32,  62 => 30,  44 => 14,  38 => 12,  36 => 11,  25 => 3,  22 => 2,);
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
", "@FOSUser/Security/login_content.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

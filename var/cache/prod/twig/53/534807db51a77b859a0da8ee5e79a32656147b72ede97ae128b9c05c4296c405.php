<?php

/* secondary_templates/header.html.twig */
class __TwigTemplate_8e77f2c15f5029002436e6061b9520eb18866647cd047c12de4cd9ef5c32ae9f extends Twig_Template
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
        $__internal_f3782f7c81d82f069c90ee7277f9f3eeb1d9d7bc8b47634a58158b6d0aea5937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3782f7c81d82f069c90ee7277f9f3eeb1d9d7bc8b47634a58158b6d0aea5937->enter($__internal_f3782f7c81d82f069c90ee7277f9f3eeb1d9d7bc8b47634a58158b6d0aea5937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "secondary_templates/header.html.twig"));

        // line 1
        echo "
        <!--Double navigation-->
        <header>
    
            <!-- Sidebar navigation -->
            ";
        // line 6
        if ((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged"))) {
            // line 7
            echo "            
                ";
            // line 8
            $this->loadTemplate("secondary_templates/drawer.html.twig", "secondary_templates/header.html.twig", 8)->display($context);
            // line 9
            echo "                
            ";
        }
        // line 11
        echo "                <!-- /.Sidebar navigation -->
    
            <!-- Navbar -->
            <nav class=\"navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav\">
    
                <!-- SideNav slide-out button -->
                ";
        // line 17
        if ((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged"))) {
            // line 18
            echo "                
                    <div class=\"float-left\">
                        <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
                    </div>
                ";
        }
        // line 23
        echo "                
                <!-- Breadcrumb-->
                <div class=\"breadcrumb-dn mr-auto\">
                     <ol class=\"breadcrumb header-breadcrumb\">
                         
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getBreadcrumbs());
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["route"]) {
            // line 29
            echo "                        ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 30
                echo "                        
                            <li class=\"breadcrumb-item white-letter active\">
                                ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->toCamelCase($context["route"], $context["route"]), "html", null, true);
                echo "
                            </li>
                            
                        ";
            } else {
                // line 36
                echo "                        
                            <li class=\"breadcrumb-item white-letter\">
                                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->toCamelCase($context["route"], $context["route"]), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            // line 41
            echo "                        
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    
                    </ol>
                    
                </div>
                
                <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
    
                    <!--<li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#cart-modal-ex\">
                            <span class=\"badge red\">4</span> 
                            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 
                            <span class=\"hidden-sm-down\">Cart</span>
                        </a>
                    </li>-->
                    ";
        // line 57
        if (((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")) == false)) {
            // line 58
            echo "                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Registrate\" href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">
                                <i class=\"fa fa-user-circle\"></i> 
                                <span class=\"hidden-sm-down\">Regístrate</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Inicia sesion\" href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                                <i class=\"fa fa-sign-in\"></i> 
                                <span class=\"hidden-sm-down\">Inicia sesión</span>
                            </a>
                        </li>
                    ";
        } else {
            // line 72
            echo "                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Cerrar sesion\" href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                <i class=\"fa fa-sign-out\"></i> 
                                <span class=\"hidden-sm-down\">Cerrar sesión</span>
                            </a>
                        </li>
                    
                    ";
        }
        // line 81
        echo "                    
                    <!--<li class=\"nav-item\">
                        <a class=\"nav-link\">
                            <i class=\"fa fa-envelope\"></i> 
                            <span class=\"hidden-sm-down\">Contact</span>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown\">
                       <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> Account</a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>-->
                </ul>
    
            </nav>
            <!-- /.Navbar -->
    
        </header>
        <!-- /.Double navigation -->";
        
        $__internal_f3782f7c81d82f069c90ee7277f9f3eeb1d9d7bc8b47634a58158b6d0aea5937->leave($__internal_f3782f7c81d82f069c90ee7277f9f3eeb1d9d7bc8b47634a58158b6d0aea5937_prof);

    }

    public function getTemplateName()
    {
        return "secondary_templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 81,  166 => 74,  162 => 72,  153 => 66,  144 => 60,  140 => 58,  138 => 57,  122 => 43,  107 => 41,  99 => 38,  95 => 36,  88 => 32,  84 => 30,  81 => 29,  64 => 28,  57 => 23,  50 => 18,  48 => 17,  40 => 11,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
        <!--Double navigation-->
        <header>
    
            <!-- Sidebar navigation -->
            {% if logged %}
            
                {% include 'secondary_templates/drawer.html.twig' %}
                
            {% endif %}
                <!-- /.Sidebar navigation -->
    
            <!-- Navbar -->
            <nav class=\"navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav\">
    
                <!-- SideNav slide-out button -->
                {%if logged %}
                
                    <div class=\"float-left\">
                        <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
                    </div>
                {% endif %}
                
                <!-- Breadcrumb-->
                <div class=\"breadcrumb-dn mr-auto\">
                     <ol class=\"breadcrumb header-breadcrumb\">
                         
                    {% for key, route in getBreadcrumbs() %}
                        {% if loop.last %}
                        
                            <li class=\"breadcrumb-item white-letter active\">
                                {{route | toCamelCase(route)}}
                            </li>
                            
                        {% else %}
                        
                            <li class=\"breadcrumb-item white-letter\">
                                <a href=\"{{key}}\">{{route | toCamelCase(route)}}</a>
                            </li>
                        {% endif %}
                        
                    {% endfor %}
                    
                    </ol>
                    
                </div>
                
                <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
    
                    <!--<li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#cart-modal-ex\">
                            <span class=\"badge red\">4</span> 
                            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 
                            <span class=\"hidden-sm-down\">Cart</span>
                        </a>
                    </li>-->
                    {% if logged == false %}
                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Registrate\" href=\"{{path('fos_user_registration_register')}}\">
                                <i class=\"fa fa-user-circle\"></i> 
                                <span class=\"hidden-sm-down\">Regístrate</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Inicia sesion\" href=\"{{ path('fos_user_security_login') }}\">
                                <i class=\"fa fa-sign-in\"></i> 
                                <span class=\"hidden-sm-down\">Inicia sesión</span>
                            </a>
                        </li>
                    {% else %}
                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" alt=\"Cerrar sesion\" href=\"{{path('fos_user_security_logout')}}\">
                                <i class=\"fa fa-sign-out\"></i> 
                                <span class=\"hidden-sm-down\">Cerrar sesión</span>
                            </a>
                        </li>
                    
                    {% endif %}
                    
                    <!--<li class=\"nav-item\">
                        <a class=\"nav-link\">
                            <i class=\"fa fa-envelope\"></i> 
                            <span class=\"hidden-sm-down\">Contact</span>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown\">
                       <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> Account</a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>-->
                </ul>
    
            </nav>
            <!-- /.Navbar -->
    
        </header>
        <!-- /.Double navigation -->", "secondary_templates/header.html.twig", "/home/ubuntu/workspace/app/Resources/views/secondary_templates/header.html.twig");
    }
}

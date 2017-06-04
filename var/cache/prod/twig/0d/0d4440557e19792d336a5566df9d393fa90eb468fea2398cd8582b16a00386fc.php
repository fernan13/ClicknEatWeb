<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_203591f7e6424d70535bb4af917509b4116bd4f7505f1e03c777c536d91593b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_564292aae15de227d01dffcd8df450bca89a630f7df345b13a472f0c6578679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564292aae15de227d01dffcd8df450bca89a630f7df345b13a472f0c6578679b->enter($__internal_564292aae15de227d01dffcd8df450bca89a630f7df345b13a472f0c6578679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        <!--Double navigation-->
        <header>
    
            <!-- Sidebar navigation -->
            <ul id=\"slide-out\" class=\"side-nav hidden custom-scrollbar sn-bg-2\">
    
                <!-- Logo -->
                <li>
                    <div class=\"logo-wrapper waves-light\">
                        <a href=\"#\"><img src=\"../../../../img/logo/mdb-transparent.png\" class=\"img-fluid flex-center\"></a>
                    </div>
                </li>
                <!-- /.Logo -->
    
                <!-- Social -->
                <li>
                    <ul class=\"social\">
                        <li><a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
                        <li><a class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
                        <li><a class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
                        <li><a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
                    </ul>
                </li>
                <!-- /.Social -->
    
                <!-- Search Form -->
                <li>
                    <form class=\"search-form\" role=\"search\">
                        <div class=\"form-group waves-light\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                    </form>
                </li>
                <!-- /.Search Form -->
    
                <!-- Side navigation links -->
                <li>
                   
                    <ul class=\"collapsible collapsible-accordion\">
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-shopping-bag\"></i> Product Page<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"product.html\" class=\"waves-effect\">Product Page V.1</a>
                                    </li>
                                    <li><a href=\"product-page.html\" class=\"waves-effect\">Product Page V.2</a>
                                    </li>
                                    <li><a href=\"product-page-4.html\" class=\"waves-effect\">Product Page V.3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-shopping-cart\"></i> Cart Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"cart.html\" class=\"waves-effect\">Page with shopping cart</a>
                                    </li>
                                    <li><a href=\"contact.html\" class=\"waves-effect\">Page with contact form</a>
                                    </li>
                                    <li><a href=\"contact-2.html\" class=\"waves-effect\">Page with contact form V.2</a>
                                    </li>
                                    <li><a href=\"login.html\" class=\"waves-effect\">Page with sign in form</a>
                                    </li>
                                    <li><a href=\"terms.html\" class=\"waves-effect\">Page with 'terms of use'</a>
                                    </li>
                                    <li><a href=\"faq.html\" class=\"waves-effect\">Page with 'FAQ'</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-dashboard\"></i> Homepages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"home-page.html\" class=\"waves-effect\">Ecommerce homepage default</a>
                                    </li>
                                    <li><a href=\"home-page-2.html\" class=\"waves-effect\">Ecommerce homepage full width</a>
                                    </li>
                                    <li><a href=\"home-page-3-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-3-full-page-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Full Page Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-3-half-page-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Half Page Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-4.html\" class=\"waves-effect\">Ecommerce homepage V.4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-desktop\"></i> Post Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"post.html\" class=\"waves-effect\">Page with column on the right</a>
                                    </li>
                                    <li><a href=\"blog-post-left-column.html\" class=\"waves-effect\">Page with newsletter on the left</a>
                                    </li>
                                    <li><a href=\"blog-post.html\" class=\"waves-effect\">Page with newsletter on the right</a>
                                    </li>
                                    <li><a href=\"blog-post-full-width.html\" class=\"waves-effect\">Full width page with logged user</a>
                                    </li>
                                    <li><a href=\"blog-post-full-width%20not%20logged%20in%20user.html\" class=\"waves-effect\">Full width page with not logged user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-diamond\"></i> Category Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"category-list-left-column.html\" class=\"waves-effect\">Category list with left column</a>
                                    </li>
                                    <li><a href=\"category-list-right-column.html\" class=\"waves-effect\">Category list with right column</a>
                                    </li>
                                    <li><a href=\"category-grid-left-column.html\" class=\"waves-effect\">Category grid with left column</a>
                                    </li>
                                    <li><a href=\"category-right-column.html\" class=\"waves-effect\">Category grid with right column</a>
                                    </li>
                                    <li><a href=\"category-grid-left-column-carousel.html\" class=\"waves-effect\">Category grid with left column carousel</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    
                </li>
                <!-- /.Side navigation links -->
                
                <div class=\"sidenav-bg mask-strong\"></div>
                
            </ul>
            <!-- /.Sidebar navigation -->
    
            <!-- Navbar -->
            <nav class=\"navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav\">
    
                <!-- SideNav slide-out button -->
                <div class=\"float-left\">
                    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
                </div>
    
                <!-- Breadcrumb-->
                <div class=\"breadcrumb-dn mr-auto\">
                    <ol class=\"breadcrumb header-breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Blog</a></li>
                        <li class=\"breadcrumb-item active\">Blog Post</li>
                    </ol>
                </div>
    
                <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
    
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#cart-modal-ex\"><span class=\"badge red\">4</span> <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> <span class=\"hidden-sm-down\">Cart</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"hidden-sm-down\">Contact</span></a>
                    </li>
                    <li class=\"nav-item dropdown\">
                       <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> Account</a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
    
            </nav>
            <!-- /.Navbar -->
    
        </header>
        <!-- /.Double navigation -->
        
        ";
        // line 187
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 189
        echo "        
        ";
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "    </body>
</html>";
        
        $__internal_564292aae15de227d01dffcd8df450bca89a630f7df345b13a472f0c6578679b->leave($__internal_564292aae15de227d01dffcd8df450bca89a630f7df345b13a472f0c6578679b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf4c7d7bd3075cea645571a72dec824bcd6ed26cac7a0f2a52e6bc0d1faf5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf4c7d7bd3075cea645571a72dec824bcd6ed26cac7a0f2a52e6bc0d1faf5f1->enter($__internal_9cf4c7d7bd3075cea645571a72dec824bcd6ed26cac7a0f2a52e6bc0d1faf5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Click'nd Eat!";
        
        $__internal_9cf4c7d7bd3075cea645571a72dec824bcd6ed26cac7a0f2a52e6bc0d1faf5f1->leave($__internal_9cf4c7d7bd3075cea645571a72dec824bcd6ed26cac7a0f2a52e6bc0d1faf5f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8416b38c806ed831a135d679c083562b85b35ef346e9f45ab0066cd75390386e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8416b38c806ed831a135d679c083562b85b35ef346e9f45ab0066cd75390386e->enter($__internal_8416b38c806ed831a135d679c083562b85b35ef346e9f45ab0066cd75390386e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.css"), "html", null, true);
        echo "\">
            
        ";
        
        $__internal_8416b38c806ed831a135d679c083562b85b35ef346e9f45ab0066cd75390386e->leave($__internal_8416b38c806ed831a135d679c083562b85b35ef346e9f45ab0066cd75390386e_prof);

    }

    // line 187
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3faccbf3f4dcb51a72779c79a589d5fcf37a4c9429e31728f5022641f3d31bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faccbf3f4dcb51a72779c79a589d5fcf37a4c9429e31728f5022641f3d31bef->enter($__internal_3faccbf3f4dcb51a72779c79a589d5fcf37a4c9429e31728f5022641f3d31bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 188
        echo "        ";
        
        $__internal_3faccbf3f4dcb51a72779c79a589d5fcf37a4c9429e31728f5022641f3d31bef->leave($__internal_3faccbf3f4dcb51a72779c79a589d5fcf37a4c9429e31728f5022641f3d31bef_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cd2d991783d7b3cdda4edc3c504e4ddebc4cea0d6628a364deea6a990a5b9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd2d991783d7b3cdda4edc3c504e4ddebc4cea0d6628a364deea6a990a5b9af->enter($__internal_7cd2d991783d7b3cdda4edc3c504e4ddebc4cea0d6628a364deea6a990a5b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7cd2d991783d7b3cdda4edc3c504e4ddebc4cea0d6628a364deea6a990a5b9af->leave($__internal_7cd2d991783d7b3cdda4edc3c504e4ddebc4cea0d6628a364deea6a990a5b9af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  304 => 195,  300 => 194,  296 => 193,  292 => 192,  287 => 191,  281 => 190,  274 => 188,  268 => 187,  258 => 11,  254 => 10,  250 => 9,  246 => 7,  240 => 6,  228 => 5,  220 => 197,  218 => 190,  215 => 189,  213 => 187,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Click'nd Eat!{% endblock %}</title>
        {% block stylesheets %}
        
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mdb.css') }}\">
            
        {% endblock %}
    </head>
    <body class=\"hidden-sn light-blue-skin animated\">
        
        <!--Double navigation-->
        <header>
    
            <!-- Sidebar navigation -->
            <ul id=\"slide-out\" class=\"side-nav hidden custom-scrollbar sn-bg-2\">
    
                <!-- Logo -->
                <li>
                    <div class=\"logo-wrapper waves-light\">
                        <a href=\"#\"><img src=\"../../../../img/logo/mdb-transparent.png\" class=\"img-fluid flex-center\"></a>
                    </div>
                </li>
                <!-- /.Logo -->
    
                <!-- Social -->
                <li>
                    <ul class=\"social\">
                        <li><a class=\"icons-sm fb-ic\"><i class=\"fa fa-facebook\"> </i></a></li>
                        <li><a class=\"icons-sm pin-ic\"><i class=\"fa fa-pinterest\"> </i></a></li>
                        <li><a class=\"icons-sm gplus-ic\"><i class=\"fa fa-google-plus\"> </i></a></li>
                        <li><a class=\"icons-sm tw-ic\"><i class=\"fa fa-twitter\"> </i></a></li>
                    </ul>
                </li>
                <!-- /.Social -->
    
                <!-- Search Form -->
                <li>
                    <form class=\"search-form\" role=\"search\">
                        <div class=\"form-group waves-light\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                    </form>
                </li>
                <!-- /.Search Form -->
    
                <!-- Side navigation links -->
                <li>
                   
                    <ul class=\"collapsible collapsible-accordion\">
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-shopping-bag\"></i> Product Page<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"product.html\" class=\"waves-effect\">Product Page V.1</a>
                                    </li>
                                    <li><a href=\"product-page.html\" class=\"waves-effect\">Product Page V.2</a>
                                    </li>
                                    <li><a href=\"product-page-4.html\" class=\"waves-effect\">Product Page V.3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-shopping-cart\"></i> Cart Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"cart.html\" class=\"waves-effect\">Page with shopping cart</a>
                                    </li>
                                    <li><a href=\"contact.html\" class=\"waves-effect\">Page with contact form</a>
                                    </li>
                                    <li><a href=\"contact-2.html\" class=\"waves-effect\">Page with contact form V.2</a>
                                    </li>
                                    <li><a href=\"login.html\" class=\"waves-effect\">Page with sign in form</a>
                                    </li>
                                    <li><a href=\"terms.html\" class=\"waves-effect\">Page with 'terms of use'</a>
                                    </li>
                                    <li><a href=\"faq.html\" class=\"waves-effect\">Page with 'FAQ'</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-dashboard\"></i> Homepages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"home-page.html\" class=\"waves-effect\">Ecommerce homepage default</a>
                                    </li>
                                    <li><a href=\"home-page-2.html\" class=\"waves-effect\">Ecommerce homepage full width</a>
                                    </li>
                                    <li><a href=\"home-page-3-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-3-full-page-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Full Page Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-3-half-page-carousel.html\" class=\"waves-effect\">Ecommerce homepage V.3 Half Page Carousel</a>
                                    </li>
                                    <li><a href=\"home-page-4.html\" class=\"waves-effect\">Ecommerce homepage V.4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-desktop\"></i> Post Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"post.html\" class=\"waves-effect\">Page with column on the right</a>
                                    </li>
                                    <li><a href=\"blog-post-left-column.html\" class=\"waves-effect\">Page with newsletter on the left</a>
                                    </li>
                                    <li><a href=\"blog-post.html\" class=\"waves-effect\">Page with newsletter on the right</a>
                                    </li>
                                    <li><a href=\"blog-post-full-width.html\" class=\"waves-effect\">Full width page with logged user</a>
                                    </li>
                                    <li><a href=\"blog-post-full-width%20not%20logged%20in%20user.html\" class=\"waves-effect\">Full width page with not logged user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class=\"collapsible-header waves-effect arrow-r\"><i class=\"fa fa-diamond\"></i> Category Pages<i class=\"fa fa-angle-down rotate-icon\"></i></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"category-list-left-column.html\" class=\"waves-effect\">Category list with left column</a>
                                    </li>
                                    <li><a href=\"category-list-right-column.html\" class=\"waves-effect\">Category list with right column</a>
                                    </li>
                                    <li><a href=\"category-grid-left-column.html\" class=\"waves-effect\">Category grid with left column</a>
                                    </li>
                                    <li><a href=\"category-right-column.html\" class=\"waves-effect\">Category grid with right column</a>
                                    </li>
                                    <li><a href=\"category-grid-left-column-carousel.html\" class=\"waves-effect\">Category grid with left column carousel</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    
                </li>
                <!-- /.Side navigation links -->
                
                <div class=\"sidenav-bg mask-strong\"></div>
                
            </ul>
            <!-- /.Sidebar navigation -->
    
            <!-- Navbar -->
            <nav class=\"navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav\">
    
                <!-- SideNav slide-out button -->
                <div class=\"float-left\">
                    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"fa fa-bars\"></i></a>
                </div>
    
                <!-- Breadcrumb-->
                <div class=\"breadcrumb-dn mr-auto\">
                    <ol class=\"breadcrumb header-breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Blog</a></li>
                        <li class=\"breadcrumb-item active\">Blog Post</li>
                    </ol>
                </div>
    
                <ul class=\"nav navbar-nav nav-flex-icons ml-auto\">
    
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#cart-modal-ex\"><span class=\"badge red\">4</span> <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> <span class=\"hidden-sm-down\">Cart</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"><i class=\"fa fa-envelope\"></i> <span class=\"hidden-sm-down\">Contact</span></a>
                    </li>
                    <li class=\"nav-item dropdown\">
                       <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> Account</a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                </ul>
    
            </nav>
            <!-- /.Navbar -->
    
        </header>
        <!-- /.Double navigation -->
        
        {% block fos_user_content %}
        {% endblock fos_user_content %}
        
        {% block javascripts %}
            <script src=\"{{ asset('js/tether.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/mdb.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "@FOSUser/layout.html.twig", "/home/ubuntu/workspace/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

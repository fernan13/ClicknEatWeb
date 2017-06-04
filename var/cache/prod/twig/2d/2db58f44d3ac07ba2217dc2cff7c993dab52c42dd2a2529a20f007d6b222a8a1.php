<?php

/* terciary_templates/slider.html.twig */
class __TwigTemplate_fa39985f34d2e7019f296877fd0193d575faf5e62b65d1149d150365c8bcefff extends Twig_Template
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
        $__internal_0820fc081ebe97809ad4093a3e510e3ec1864f878904ad63b8067c130d3daaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0820fc081ebe97809ad4093a3e510e3ec1864f878904ad63b8067c130d3daaff->enter($__internal_0820fc081ebe97809ad4093a3e510e3ec1864f878904ad63b8067c130d3daaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terciary_templates/slider.html.twig"));

        // line 1
        echo "<!-- Intro -->
   <!--Carousel Wrapper-->
    <div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"false\">
        <!--Indicators-->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-3\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-3\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-3\" data-slide-to=\"2\"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div> tus miertos </div>
            <!-- First slide -->
            <div class=\"carousel-item active view hm-black-light\" style=\"background-image:url('";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider-1.jpg"), "html", null, true);
        echo "'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">Ahorra cocinando</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">Con Click'nd Eat podrás compartir los gastos de tu comida y sobre todo disfrutar cocinando</p>
                        </li>
                        <li>
                            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_publicacion");
        echo "\"  class=\"btn btn-outline-white btn-lg flex-item\">Crea tu publicacion</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class=\"carousel-item view hm-black-light\" style=\"background-image:url('";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider-2.jpg"), "html", null, true);
        echo "'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">No solo es una aplicacion de comidas</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">
                                Con Click'nd Eat no solo saciarás tu hambre, sino que podrás conocer
                                gente nueva y vivir maravillosas experiencias
                            </p>
                        </li>
                        <!--<li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Start Shopping</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Learn more</a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <!--<div class=\"carousel-item view hm-black-light\" style=\"background-image:url('";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider-3.jpg"), "html", null, true);
        echo "'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <!--<div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">Get 20% off</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">On selected items</p>
                        </li>
                        <li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Shop now</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            <!--</div>-->
            <!-- /.Third slide -->
            
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class=\"carousel-control-prev\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
   
    <!-- /.Intro -->";
        
        $__internal_0820fc081ebe97809ad4093a3e510e3ec1864f878904ad63b8067c130d3daaff->leave($__internal_0820fc081ebe97809ad4093a3e510e3ec1864f878904ad63b8067c130d3daaff_prof);

    }

    public function getTemplateName()
    {
        return "terciary_templates/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 66,  67 => 38,  54 => 28,  39 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Intro -->
   <!--Carousel Wrapper-->
    <div id=\"carousel-example-3\" class=\"carousel slide carousel-fade white-text\" data-ride=\"carousel\" data-interval=\"false\">
        <!--Indicators-->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-3\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-3\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-3\" data-slide-to=\"2\"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div> tus miertos </div>
            <!-- First slide -->
            <div class=\"carousel-item active view hm-black-light\" style=\"background-image:url('{{ asset('img/slider-1.jpg') }}'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">Ahorra cocinando</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">Con Click'nd Eat podrás compartir los gastos de tu comida y sobre todo disfrutar cocinando</p>
                        </li>
                        <li>
                            <a href=\"{{  path('add_publicacion') }}\"  class=\"btn btn-outline-white btn-lg flex-item\">Crea tu publicacion</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class=\"carousel-item view hm-black-light\" style=\"background-image:url('{{ asset('img/slider-2.jpg') }}'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">No solo es una aplicacion de comidas</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">
                                Con Click'nd Eat no solo saciarás tu hambre, sino que podrás conocer
                                gente nueva y vivir maravillosas experiencias
                            </p>
                        </li>
                        <!--<li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Start Shopping</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Learn more</a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <!--<div class=\"carousel-item view hm-black-light\" style=\"background-image:url('{{ asset('img/slider-3.jpg') }}'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Caption -->
                <!--<div class=\"full-bg-img flex-center white-text\">
                    <ul>
                        <li>
                            <h1 class=\"h1-responsive flex-item\">Get 20% off</h1>
                        </li>
                        <li>
                            <p class=\"flex-item\">On selected items</p>
                        </li>
                        <li>
                            <a href=\"#\" class=\"btn btn-outline-white btn-lg flex-item\">Shop now</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            <!--</div>-->
            <!-- /.Third slide -->
            
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class=\"carousel-control-prev\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carousel-example-3\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
   
    <!-- /.Intro -->", "terciary_templates/slider.html.twig", "/home/ubuntu/workspace/app/Resources/views/terciary_templates/slider.html.twig");
    }
}

<?php

/* :publicacion:publicacion.html.twig */
class __TwigTemplate_1f5f5ebd3c01aad2ca18f3b4153fb210389335d6a2754421812d42724a7442fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":publicacion:publicacion.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39b5bb34986885e577e125e6abd58fe35956f4b874a0766686a6f2247989c4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b5bb34986885e577e125e6abd58fe35956f4b874a0766686a6f2247989c4aa->enter($__internal_39b5bb34986885e577e125e6abd58fe35956f4b874a0766686a6f2247989c4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicacion:publicacion.html.twig"));

        $__internal_6239a6ab919e4bb6e46fa69ee9117b241a0f5e16a0fabcab45cba830247aabd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6239a6ab919e4bb6e46fa69ee9117b241a0f5e16a0fabcab45cba830247aabd6->enter($__internal_6239a6ab919e4bb6e46fa69ee9117b241a0f5e16a0fabcab45cba830247aabd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicacion:publicacion.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b5bb34986885e577e125e6abd58fe35956f4b874a0766686a6f2247989c4aa->leave($__internal_39b5bb34986885e577e125e6abd58fe35956f4b874a0766686a6f2247989c4aa_prof);

        
        $__internal_6239a6ab919e4bb6e46fa69ee9117b241a0f5e16a0fabcab45cba830247aabd6->leave($__internal_6239a6ab919e4bb6e46fa69ee9117b241a0f5e16a0fabcab45cba830247aabd6_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_e7b8385f3a2e8fb1bbae269c0185bed6717b4095c9b9cb0327836891d13e593f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b8385f3a2e8fb1bbae269c0185bed6717b4095c9b9cb0327836891d13e593f->enter($__internal_e7b8385f3a2e8fb1bbae269c0185bed6717b4095c9b9cb0327836891d13e593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c67a1ff50c2d393d7468442e3dda8f9f39fb78fc763d09373739da4c21509b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67a1ff50c2d393d7468442e3dda8f9f39fb78fc763d09373739da4c21509b08->enter($__internal_c67a1ff50c2d393d7468442e3dda8f9f39fb78fc763d09373739da4c21509b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
    ";
        // line 9
        $context["vars"] = array("logged" => (isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")));
        // line 10
        echo "    ";
        $this->loadTemplate("secondary_templates/header.html.twig", ":publicacion:publicacion.html.twig", 10)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 11
        echo "    
";
        
        $__internal_c67a1ff50c2d393d7468442e3dda8f9f39fb78fc763d09373739da4c21509b08->leave($__internal_c67a1ff50c2d393d7468442e3dda8f9f39fb78fc763d09373739da4c21509b08_prof);

        
        $__internal_e7b8385f3a2e8fb1bbae269c0185bed6717b4095c9b9cb0327836891d13e593f->leave($__internal_e7b8385f3a2e8fb1bbae269c0185bed6717b4095c9b9cb0327836891d13e593f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8b35fb297f0ee175755401d87c76bba5ac7fe8e76e6f56c4713c7237217026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8b35fb297f0ee175755401d87c76bba5ac7fe8e76e6f56c4713c7237217026->enter($__internal_9f8b35fb297f0ee175755401d87c76bba5ac7fe8e76e6f56c4713c7237217026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57bf4cdacddc9b6a242c71325d3a3e94d093b1f9b3599f5f00e89de365545cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bf4cdacddc9b6a242c71325d3a3e94d093b1f9b3599f5f00e89de365545cdf->enter($__internal_57bf4cdacddc9b6a242c71325d3a3e94d093b1f9b3599f5f00e89de365545cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <div class=\"background-image-responsive\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background-image-publicacion.jpg"), "html", null, true);
        echo ")\">
        <div class=\"streak streak-lg streak-photo more-height  overlay\"></div>
    </div>
    
    <!-- Main Container -->
    <div id=\"container_publicacion\" class=\"container pb-3\">
       
        <section>
           
            <div class=\"row\">

                <!-- First Column -->
                <div class=\"col-lg-12\">
                   
                   
                    <!-- Main Info -->
                    <div class=\"jumbotron margin\">
                        
                            <h2 id=\"titulo_publicacion\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("isInsert", $context)) ? ("Titulo") : ($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "titulo", array()))), "html", null, true);
        echo "</h2>
                            <h1 class=\"pt-1 pb-1\"><strong id=\"precio_publicacion\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("isInsert", $context)) ? ("Precio") : (($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "precio", array()) . " €"))), "html", null, true);
        echo "</strong></h1>
                        
                        <!-- Social shares -->
                        <div class=\"social-counters \">
                            
                            ";
        // line 40
        if ((array_key_exists("isInsert", $context) || array_key_exists("isUpdate", $context))) {
            // line 41
            echo "                                <button id=\"save-button\" type=\"button\" class=\"btn btn-primary\">
                                    ";
            // line 42
            if (array_key_exists("isInsert", $context)) {
                // line 43
                echo "                                        Insertar
                                        <i class=\"fa fa-plus right\"></i>
                                    ";
            } else {
                // line 46
                echo "                                    
                                        Actualizar
                                        <i class=\"fa fa-check right\"></i>
                                    
                                    ";
            }
            // line 51
            echo "                                </button>
                                <button id=\"on-update-data-publicacion\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">
                                    <span>Editar Campos</span>
                                    <i class=\"fa fa-pencil\"></i>
                                </button>
                                
                                ";
            // line 57
            if (array_key_exists("isUpdate", $context)) {
                // line 58
                echo "                                
                                <button id=\"eliminar_publicacion\" type=\"button\" class=\"btn btn-warning\">
                                        Eliminar Publicacion
                                        <i class=\"fa fa-trash right\"></i>
                                </button>
                                
                                ";
            }
            // line 65
            echo "                            ";
        } else {
            // line 66
            echo "                            
                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_user", array("user" => $this->getAttribute($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "usuario", array()), "id", array()))), "html", null, true);
            echo "\">
                                    <button id=\"ver_perfil\" type=\"button\" class=\"btn btn-primary\">
                                        Ver perfil
                                        <i class=\"fa fa-eye right\"></i>
                                    </button>
                                </a>
                                
                                ";
            // line 74
            if (array_key_exists("isCompleto", $context)) {
                // line 75
                echo "                                
                                    <button type=\"button\" class=\"btn btn-warning\">
                                        Completo
                                        <i class=\"fa fa-times right\"></i>
                                    </button>
                                ";
            } else {
                // line 81
                echo "                                    <button id=\"gestionar_reserva\" type=\"button\" class=\"btn ";
                echo (((array_key_exists("hasReserva", $context) && ((isset($context["hasReserva"]) ? $context["hasReserva"] : $this->getContext($context, "hasReserva")) > 0))) ? ("btn-warning") : ("btn-primary"));
                echo "\">
                                         ";
                // line 82
                if ((array_key_exists("hasReserva", $context) && ((isset($context["hasReserva"]) ? $context["hasReserva"] : $this->getContext($context, "hasReserva")) > 0))) {
                    // line 83
                    echo "                                            Cancelar Reserva  
                                            <i class=\"fa fa-trash right\"></i>
                                         ";
                } else {
                    // line 86
                    echo "                                             Reservar
                                             <i class=\"material-icons right md-18\">room_service</i>
                                         ";
                }
                // line 89
                echo "                                    </button>
                                    
                                ";
            }
            // line 91
            echo " 
                                
                            ";
        }
        // line 94
        echo "                        </div>
                        <!-- /.Social shares -->

                    </div>
                    <!-- /.Main Info -->
                    
                    <!-- Section: Features -->
                    <section class=\"section feature-box pt-1\">

                        <!-- Section heading -->
                        <h1 class=\"section-heading\">Datos de la publicación</h1>

                        <!-- Section sescription -->
                        <p id=\"descripcion_publicacion\" class=\"section-description lead\">
                           
                            ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array()), "html", null, true);
        echo "
                        </p>

                        <!-- First row -->
                        <div class=\"row\">
                            
                            ";
        // line 115
        if ((array_key_exists("isInsert", $context) || array_key_exists("isUpdate", $context))) {
            // line 116
            echo "                                
                                <label for=\"file-input-publicacion\" class=\"full\">
                                    ";
            // line 118
            if (twig_test_empty($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "foto", array()))) {
                // line 119
                echo "                            
                                        <a alt=\"Cambiar imagen\">
                                            <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                             style=\"background-image:url(";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Publicacion/publicacion-image-default.jpg"), "html", null, true);
                echo ")\"></div>
                                        </a>
                                             
                                    ";
            } else {
                // line 126
                echo "                                        
                                        <a alt=\"Cambiar imagen\">
                                            
                                            <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                                style=\"background-image:url(";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/Publicacion/" . $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "foto", array()))), "html", null, true);
                echo ")\"></div>
                                        </a>
                                    ";
            }
            // line 133
            echo "                                    
                                </label>
                                    
                                <input id=\"file-input-publicacion\" type=\"file\" style=\"display:none\" accept=\"image/*\"/>
                                
                            ";
        } else {
            // line 139
            echo "                            
                                ";
            // line 140
            if (twig_test_empty($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "foto", array()))) {
                // line 141
                echo "                            
                                    <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                         style=\"background-image:url(";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Publicacion/publicacion-image-default.jpg"), "html", null, true);
                echo ")\"></div>
                                         
                                ";
            } else {
                // line 146
                echo "                                
                                    <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                        style=\"background-image:url(";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/Publicacion/" . $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "foto", array()))), "html", null, true);
                echo ")\"></div>
                                ";
            }
            // line 150
            echo "                                
                            ";
        }
        // line 152
        echo "                        </div>
                        
                        <div class=\"row features-small mt-15\">
                            
                            <div class=\"col-md-6 col-sm-12\">
                                
                                <!-- First row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-users primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Número Gourmets</h4>
                                        <p id=\"numero_gourmets_publicacion\" class=\"grey-text\">
                                            ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "plazasTotales", array()), "html", null, true);
        echo "
                                        </p>
                                    </div>
                                </div>
                                <!-- /.First row -->

                                <div style=\"height:40px\"></div>


                                <!-- Third row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-clock-o primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Hora Inicio</h4>
                                        <p id=\"horaInicio_publicacion\" class=\"grey-text\">
                                           ";
        // line 183
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "horaInicio", array()), "H:i"), "html", null, true);
        echo "
                                        </p>
                                    </div>
                                </div>
                                
                                
                                <div style=\"height:40px\"></div>

                                <!-- Second row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-calendar primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Fecha</h4>
                                        <p id=\"fecha_publicacion\" class=\"grey-text\">
                                            ";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "fecha", array()), "d-m-Y"), "html", null, true);
        echo "
                                        </p>
                                    </div>
                                </div>
                                <!-- /.Second row -->

                                
                            </div>
                            
                            <div class=\"col-md-6 col-sm-12\">
                                <!-- Second row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-home primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Domicilio</h4>
                                        <p id=\"domicilio_publicacion\" class=\"grey-text\">
                                            
                                            ";
        // line 218
        if (((null === $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "domicilio", array())) == false)) {
            // line 219
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "domicilio", array()), "direccion", array()), "html", null, true);
            echo "
                                            ";
        } else {
            // line 221
            echo "                                                Ningun domicilio seleccionado
                                            ";
        }
        // line 223
        echo "                                        </p>
                                    </div>
                                </div>
                                <!-- /.Second row -->

                                <div style=\"height:40px\"></div>

                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-clock-o primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Hora Fin</h4>
                                        <p id=\"horaFin_publicacion\" class=\"grey-text\">
                                           ";
        // line 237
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "horaFin", array()), "H:i"), "html", null, true);
        echo "
                                        </p>
                                    </div>
                                </div>
                                
                                
                            
                                <div style=\"height:40px\"></div>
                                
                                <div class=\"row\">
                                    
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-cutlery primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Platos</h4>
                                        <div id=\"platos_publicacion\">
                                            ";
        // line 254
        $context["platos"] = (((null === $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "platos", array()))) ? (array()) : ($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "platos", array())));
        // line 255
        echo "                                            
                                            ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platos"]) ? $context["platos"] : $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 257
            echo "                                            
                                                <div class=\"chip\">";
            // line 258
            echo twig_escape_filter($this->env, $context["plato"], "html", null, true);
            echo "</div>
                                                
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Third row -->
                                
                            </div>
                            
                            
                        </div>
                        

                    </section>
                    <!-- /.Section: Features -->
                    
                
                    
                </div>
                <!-- /.First Column -->
                
            </div>
            
        </section>
        
    </div>
    <!-- /.Main Container -->

    <!-- Actualizado correctamente -->
    <div class=\"modal fade\" id=\"centralModalSuccess\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-success\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Completado</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-check fa-4x mb-1 animated rotateIn\"></i>
                        <p id=\"success-text\">
                            Publicacion actualizada correctamente
                        </p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Ok</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- Fallos -->
    <div class=\"modal fade\" id=\"centralModalDanger\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-danger\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Error</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-close fa-4x mb-1 animated rotateIn\"></i>
                        <p id=\"error-text\">Ha ocurrido un error durante la actualización de la publicación</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Cencelar</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Danger-->

    <div class=\"modal fade\" id=\"centralModalWarning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-warning\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Cuidado!</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-trash fa-4x mb-1 animated rotateIn\"></i>
                        <p>";
        // line 371
        echo ((array_key_exists("isUpdate", $context)) ? ("¿Está seguro de eliminar su publicación?") : ("¿Está seguro de eliminar su reserva?"));
        echo "</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" id=\"eliminar_publicacion_dialogo_aceptar\" class=\"btn btn-primary-modal\">Aceptar<i class=\"fa fa-check ml-1\"></i></a>
                    <a type=\"button\" id=\"eliminar_publicacion_dialogo_cancelar\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Cancelar</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Warning-->

    <!-- Insertar actualizar datos publicacion -->
    <div class=\"modal fade\" id=\"modalPublicacionData\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal modal-lg publicacion\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header light-blue darken-3 white-text form-header index\">
                    <button type=\"button\" class=\"close waves-effect waves-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"title\"><i class=\"fa fa-pencil\"></i> Datos Publicacion </h4>
                </div>
                
                <!--Body-->
                <div class=\"modal-body mb-0\">
                    
                    <div class=\"md-form form-lg\">
                        <i class=\"fa fa-th-list prefix icon-form-publicacion\"></i>
                        <input type=\"text\" id=\"titulo\" class=\"form-control\" value=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "titulo", array()), "html", null, true);
        echo "\">
                        <label for=\"titulo\" >Titulo</label>
                    </div>
                    <div class=\"md-form form-lg\">
                        <i class=\"fa fa-book prefix icon-form-publicacion\"></i>
                        <textarea type=\"text\" id=\"descripcion\" class=\"md-textarea mb-0 profile\">";
        // line 410
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array()), "html", null, true);
        echo "</textarea>
                        <label for=\"descripcion\">Descripcion</label>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-users prefix\"></i>
                                <input type=\"number\" min=0 id=\"numero_gourmets\" class=\"form-control\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "plazasTotales", array()), "html", null, true);
        echo "\">
                                <label for=\"numero_gourmets\">Número Gourmets</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-money prefix\"></i>
                                <input type=\"number\" min=0 id=\"precio\" class=\"form-control\" value=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "precio", array()), "html", null, true);
        echo "\">
                                <label for=\"precio\">Precio</label>
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-calendar prefix\"></i>
                                <input type=\"text\" id=\"fecha\" class=\"form-control datepicker\" value=\"";
        // line 439
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "fecha", array()), "d-m-Y"), "html", null, true);
        echo "\">
                                <label for=\"fecha\">Fecha</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        
                                        <i class=\"fa fa-home prefix icon-form-publicacion\"></i>
                                        
                                    </div>
                                    <div class=\"col-md-10\">
                                        <select id=\"domicilio\" class=\"mdb-select\">
                                            <option value=\"-1\" disabled selected>Domicilio</option>
                                            ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "domicilios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 456
            echo "                                                ";
            $context["imagenes_domicilio"] = $this->getAttribute($context["domicilio"], "imagenes", array());
            // line 457
            echo "                                                ";
            $context["imagen_dom"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((null === (isset($context["imagenes_domicilio"]) ? $context["imagenes_domicilio"] : $this->getContext($context, "imagenes_domicilio")))) ? ("uploads/Domicilio/domicilio-default.png") : (("uploads/Domicilio/" . $this->getAttribute((isset($context["imagenes_domicilio"]) ? $context["imagenes_domicilio"] : $this->getContext($context, "imagenes_domicilio")), 0, array(), "array")))));
            // line 458
            echo "                                                
                                                <option value=\"";
            // line 459
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "id", array()), "html", null, true);
            echo "\" data-icon=\"";
            echo twig_escape_filter($this->env, (isset($context["imagen_dom"]) ? $context["imagen_dom"] : $this->getContext($context, "imagen_dom")), "html", null, true);
            echo "\" class=\"rounded-circle\"
                                                        ";
            // line 460
            echo ((((array_key_exists("isInsert", $context) == false) && ($this->getAttribute($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "domicilio", array()), "id", array()) == $this->getAttribute($context["domicilio"], "id", array())))) ? ("selected") : (""));
            echo ">";
            // line 461
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "direccion", array()), "html", null, true);
            // line 462
            echo "</option>
                                                
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "                                        </select>
                                    </div>
                                    
                                </div>
                                
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-clock-o prefix\"></i>
                                <input type=\"text\" id=\"horaInicio\" class=\"form-control\" value=\"";
        // line 480
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "horaInicio", array()), "H:i"), "html", null, true);
        echo "\">
                                <label for=\"horaInicio\">Hora Inicio</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-clock-o prefix\"></i>
                                <input type=\"text\" id=\"horaFin\" class=\"form-control\" value=\"";
        // line 488
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "horaFin", array()), "H:i"), "html", null, true);
        echo "\">
                                <label for=\"horaFin\">Hora Fin</label>
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"md-form form-lg\">
                        <div class=\"row\">
                            <div class=\"col-md-1\">
                                <i class=\"fa fa-cutlery prefix icon-form-publicacion\"></i>
                            </div>
                            <div class=\"col-md-11\">
                                <div id=\"platos\" class=\"chips chips-placeholder\"></div>
                            </div>
                        </div>
                    </div>
    
                    <div class=\"text-center mt-1-half\">
                        <button id=\"button-update-data-publicacion\" class=\"btn btn-primary waves-effect waves-light\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
";
        
        $__internal_57bf4cdacddc9b6a242c71325d3a3e94d093b1f9b3599f5f00e89de365545cdf->leave($__internal_57bf4cdacddc9b6a242c71325d3a3e94d093b1f9b3599f5f00e89de365545cdf_prof);

        
        $__internal_9f8b35fb297f0ee175755401d87c76bba5ac7fe8e76e6f56c4713c7237217026->leave($__internal_9f8b35fb297f0ee175755401d87c76bba5ac7fe8e76e6f56c4713c7237217026_prof);

    }

    // line 517
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1c4e2e79ad9d13169e6f66ab16c2863b30bac0eee06c2ff470308eef14470c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4e2e79ad9d13169e6f66ab16c2863b30bac0eee06c2ff470308eef14470c9a->enter($__internal_1c4e2e79ad9d13169e6f66ab16c2863b30bac0eee06c2ff470308eef14470c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c7cf2e08b8683bbc3d946f2007320ee4ffdae00cec85af73feefa5d4369a64fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cf2e08b8683bbc3d946f2007320ee4ffdae00cec85af73feefa5d4369a64fe->enter($__internal_c7cf2e08b8683bbc3d946f2007320ee4ffdae00cec85af73feefa5d4369a64fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 518
        echo "
    ";
        // line 519
        $this->loadTemplate("secondary_templates/footer.html.twig", ":publicacion:publicacion.html.twig", 519)->display($context);
        // line 520
        echo "    
";
        
        $__internal_c7cf2e08b8683bbc3d946f2007320ee4ffdae00cec85af73feefa5d4369a64fe->leave($__internal_c7cf2e08b8683bbc3d946f2007320ee4ffdae00cec85af73feefa5d4369a64fe_prof);

        
        $__internal_1c4e2e79ad9d13169e6f66ab16c2863b30bac0eee06c2ff470308eef14470c9a->leave($__internal_1c4e2e79ad9d13169e6f66ab16c2863b30bac0eee06c2ff470308eef14470c9a_prof);

    }

    // line 523
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64bccb6f7d0fef98c831b21959d15a39ed3bc4a49b24da80e2e986a1a848671e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bccb6f7d0fef98c831b21959d15a39ed3bc4a49b24da80e2e986a1a848671e->enter($__internal_64bccb6f7d0fef98c831b21959d15a39ed3bc4a49b24da80e2e986a1a848671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbf70ffbb28ae617dc07503ff0e7b9c054a7816f8a93cc6699e5459b18da7590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf70ffbb28ae617dc07503ff0e7b9c054a7816f8a93cc6699e5459b18da7590->enter($__internal_cbf70ffbb28ae617dc07503ff0e7b9c054a7816f8a93cc6699e5459b18da7590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 524
        echo "
    ";
        // line 525
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    ";
        // line 527
        if ((array_key_exists("isInsert", $context) || array_key_exists("isUpdate", $context))) {
            // line 528
            echo "    
        <script src=\"";
            // line 529
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mdb-pro.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 530
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                
                //Data
                var isUpdate                   = \"";
            // line 536
            echo ((array_key_exists("isUpdate", $context)) ? (true) : (false));
            echo "\";
                var publicacion                = ";
            // line 537
            echo twig_jsonencode_filter($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "toArray", array(), "method"));
            echo ";
                var usuario                    = ";
            // line 538
            echo twig_jsonencode_filter($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "toArray", array(), "method"));
            echo ";
                var platos_publicacion         = publicacion.platos == null ? [] : publicacion.platos;
                var domicilios                 = usuario.perfil == null ? [] : usuario.perfil.domicilios;
    
                var platos_data                = [];
    
                for ( var i = 0; i < platos_publicacion.length; i++ ) {
                    
                    platos_data.push({\"tag\": platos_publicacion[i]});
                }
    
                
                //Variables UI
                var titulo_dialogo             = \$('#titulo');
                var descripcion_dialogo        = \$('#descripcion');
                var file_input                 = \$(\"#file-input-publicacion\");
                var numero_gourmets_dialogo    = \$('#numero_gourmets');
                var precio_dialogo             = \$('#precio');
                var fecha_dialogo              = \$('#fecha');
                var domicilio_dialogo          = \$('#domicilio');
                var horaInicio_dialogo         = \$('#horaInicio');
                var horaFin_dialogo            = \$('#horaFin');
                
                var titulo_body                = \$(\"#titulo_publicacion\");
                var descripcion_body           = \$(\"#descripcion_publicacion\");
                var foto_body                  = \$(\"#foto_publicacion\");
                var numero_gourmets_body       = \$(\"#numero_gourmets_publicacion\");
                var precio_body                = \$(\"#precio_publicacion\");
                var fecha_body                 = \$(\"#fecha_publicacion\");
                var domicilio_body             = \$(\"#domicilio_publicacion\");
                var horaInicio_body            = \$(\"#horaInicio_publicacion\");
                var horaFin_body               = \$(\"#horaFin_publicacion\");
                var platos_body                = \$(\"#platos_publicacion\");
                
                //Inicializamos select domicilio
                \$('.mdb-select').material_select();
                
                //Inicializamos picker fecha
                \$('.datepicker').pickadate({
                  container: '#modalPublicacionData',
                  containerHidden: '#modalPublicacionData',
                  min: true,
                  max: false,
                  format: 'dd-mm-yyyy',
                  formatSubmit: 'dd-mm-yyyy'
                });
                
                //Inicializamos picker hora
                horaInicio_dialogo.pickatime({
                    twelvehour: true
                });
                
                
                horaFin_dialogo.pickatime({
                    twelvehour: true
                });
                
                //Inicializamos chips platos
                \$('.chips-placeholder').material_chip({
                    placeholder: 'Platos',
                    secondaryPlaceholder: 'Platos',
                    data: platos_data
                });
                
                
                //Cuando se cierre el dialogo modal almacenamos la informacion
                \$('#modalPublicacionData').on('hidden.bs.modal', function (e) {
                   
                    var titulo      = titulo_dialogo.val();
                    var descripcion = descripcion_dialogo.val();
                    var gourmets    = numero_gourmets_dialogo.val();
                    var precio      = precio_dialogo.val();
                    var fecha       = fecha_dialogo.val();
                    var domicilio   = domicilio_dialogo.val()  == null ? -1 : parseInt(domicilio_dialogo.val());
                    var horaInicio  = horaInicio_dialogo.val();
                    var horaFin     = horaFin_dialogo.val();
                    
                    //Formateamos horaInicio y horaFin
                    horaInicio = moment(horaInicio, [\"h:mm A\"]).format(\"HH:mm\");
                    horaFin    = moment(horaFin, [\"h:mm A\"]).format(\"HH:mm\");
                    
                    //Obtenemos los platos
                    var platos = [];
                    var chips  = \$('.chips').material_chip('data');
                    
                    for ( var i = 0; i < chips.length; i++ ) {
                        
                        var chip = chips[i];
                        platos.push(chip.tag);    
                    }
                    
                    //Cargamos los datos UI
                    titulo_body.text(!titulo.trim() ? titulo_body.text() : titulo);
                    descripcion_body.text(descripcion);
                    numero_gourmets_body.text(gourmets);
                    precio_body.text(precio + \" €\");
                    fecha_body.text(fecha);
                    horaInicio_body.text(horaInicio);
                    horaFin_body.text(horaFin);
                    
                    
                    //Guardamos los platos
                    platos_body.empty();
                    
                    for ( var i = 0; i < platos.length; i++ ) {
                        
                        platos_body.append(\"<div class='chip'>\" + platos[i] + \"</div>\");
                    }
                    
                    //Cargamos el domicilio
                    //La funcion grep nos permite filtrar dentro de un array y obtener los valores que necesitemos 
                    //que cumplan con los parametros definidos en la funcion anonima
                    var domicilio_seleccionado = \$.grep(domicilios, function(e){ return e.id == domicilio; });
                    var direccion              = domicilio_seleccionado.length == 0 ? domicilio_body.text() : domicilio_seleccionado[0].direccion;
                    
                    domicilio_body.text(direccion);
                    
                    //Cargamos datos en la publicacion
                    publicacion.titulo         = titulo;
                    publicacion.descripcion    = descripcion;
                    publicacion.plazasTotales  = gourmets;
                    publicacion.precio         = precio;
                    publicacion.domicilio      = domicilio;
                    publicacion.fecha          = fecha;
                    publicacion.horaInicio     = horaInicio;
                    publicacion.horaFin        = horaFin;
                    publicacion.platos         = platos;
                    publicacion.foto           = publicacion.foto != null && publicacion.foto.indexOf(\"publicacion-image-default.jpg\") > 0 ? \"\" : publicacion.foto;   
                });
                
                
                
                //Selector de la imagen
                file_input.change(function() {
                    
                    if (this.files && this.files[0]) {
                        
                        var fileType = this.files[0][\"type\"];
                        var ValidImageTypes = [\"image/gif\", \"image/jpeg\", \"image/png\"];
                        if (\$.inArray(fileType, ValidImageTypes) >= 0) {
                           
                            var reader     = new FileReader();
                            /*reader.onloadstart    = showProgress;
                            reader.onprogress     = onProgress;
                            reader.onloadend      = hideProgress;*/
                            reader.onload         = imageIsLoaded;
                        
                            reader.readAsDataURL(this.files[0]);
                            
                        }
                        
                    }
                    
                });
                
                function imageIsLoaded(e) {
                    
                    //El evento nos devuelve la imagen en base64
                    publicacion.foto = e.target.result;
                    foto_body.css('background-image', 'url(' + e.target.result + ')');
                };
                
                //Elementos que muestran y ocultan el dialogo
                document.getElementById(\"on-update-data-publicacion\").addEventListener('click', function(){
                   
                    \$('#modalPublicacionData').modal('show');
                });
                
                document.getElementById('button-update-data-publicacion').addEventListener('click', function(){
                    
                   \$('#modalPublicacionData').modal('hide');
                    
                });
                
                //Insertar o actualizar perfil
                document.getElementById('save-button').addEventListener('click', function(){
                   
                   
                   var url_api   = isUpdate ? \"";
            // line 716
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("put_all_request", array("className" => "publicacion", "id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id", array()))), "html", null, true);
            echo "\" 
                                            : \"";
            // line 717
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_all_request", array("className" => "publicacion"));
            echo "\";
                   var token     = \"";
            // line 718
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view"))), "html", null, true);
            echo "\";
                   
                   \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: isUpdate ? 'PUT' : 'POST',
                        data: publicacion,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(isUpdate ? response.data : \"Publicacion insertada correctamente\");
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   //Si actualizamos se refresca la página y si se inserta nos cambiamos de página
                                    if ( isUpdate) {
                                        
                                        location.reload(true); 
                                    }
                                    else {
                                        
                                        //Debido a que la ruta se carga con la carga de la pagina debemos de agregarla a posteriori
                                        var urlController = \"publicacion/\" + response.data;
                                        
                                        window.location.href = urlController;
                                    }
                                });
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           \$('#error-text').text(\"Datos enviados incorrectos, por favor reviselos e intentelo de nuevo\");
                           \$('#centralModalDanger').modal('show');
                        }
                    });
                   
                }, false);
                
                
                if ( isUpdate ) {
                    
                    document.getElementById('eliminar_publicacion').addEventListener('click', function(){
                        
                        \$('#centralModalWarning').modal('show');
                    });
                    
                    document.getElementById('eliminar_publicacion_dialogo_aceptar').addEventListener('click', function(){
                        
                        //Cerramos el dialogo
                        \$('#centralModalWarning').modal('hide');
                        
                        //Eliminamos la publicacion
                        var url_api_delete = \"";
            // line 779
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_request", array("className" => "publicacion", "id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id", array()))), "html", null, true);
            echo "\";
                        var token          = \"";
            // line 780
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view"))), "html", null, true);
            echo "\";
                        
                        \$.ajax({
                            url: url_api_delete,
                            headers: {'Authorization': 'Bearer ' + token},
                            type: 'DELETE',
                            success: function (response) {
                                
                                if ( response.error != 0 ) {
                                    
                                    //Dialogo modal
                                    \$('#error-text').text(response.data);
                                    \$('#centralModalDanger').modal('show');
                                    
                                }
                                else {
                                    
                                    //Dialogo OK
                                    \$('#success-text').text(isUpdate ? response.data : \"Publicacion eliminada correctamente\");
                                    \$('#centralModalSuccess').modal('show');
                                    \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                       
                                       //Si actualizamos se refresca la página y si se inserta nos cambiamos de página
                                        var urlController = \"";
            // line 803
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\";
                                        window.location.href = urlController;
                                        
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                
                               \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                               \$('#centralModalDanger').modal('show');
                            }
                        });
                        
                });
                    
                document.getElementById('eliminar_publicacion_dialogo_cancelar').addEventListener('click', function(){
                        
                    \$('#centralModalWarning').modal('hide');
                });
            }
                
        });
            
        </script>
    
    ";
        } else {
            // line 829
            echo "    
        <script src=\"";
            // line 830
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 831
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment-timezone.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function(){
            
                var publicacion_id = parseInt(\"";
            // line 836
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id", array()), "html", null, true);
            echo "\"); 
                var my_user_id     = parseInt(\"";
            // line 837
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "id", array()), "html", null, true);
            echo "\");
                var token          = \"";
            // line 838
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view"))), "html", null, true);
            echo "\";
                var isCompleto     = \"";
            // line 839
            echo ((array_key_exists("isCompleto", $context)) ? ("1") : ("0"));
            echo "\";
                var hasReserva     = \"";
            // line 840
            echo twig_escape_filter($this->env, ((array_key_exists("hasReserva", $context)) ? ((isset($context["hasReserva"]) ? $context["hasReserva"] : $this->getContext($context, "hasReserva"))) : ("0")), "html", null, true);
            echo "\";
                
                if ( isCompleto )  {
                    
                    document.getElementById(\"gestionar_reserva\").addEventListener('click', function(){
                    
                        if ( hasReserva > 0 ) {
                            
                            //Mostramos el modal de Warning
                            \$('#centralModalWarning').modal('show');
                            
                        }
                        else {
                            
                            //Generamos la reserva
                            var url_api_insert = \"";
            // line 855
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_all_request", array("className" => "reserva"));
            echo "\";
                            var reserva        = {\"publicacion\": publicacion_id, \"usuario\": my_user_id};
                            
                            \$.ajax({
                                url: url_api_insert,
                                headers: {'Authorization': 'Bearer ' + token},
                                type: 'POST',
                                data: reserva,
                                success: function (response) {
                                            
                                    if ( response.error != 0 ) {
                                            
                                        //Dialogo modal
                                        \$('#error-text').text(response.data);
                                        \$('#centralModalDanger').modal('show');
                                                
                                    }
                                    else {
                                                
                                        //Dialogo OK
                                        \$('#success-text').text(\"Reserva realizada correctamente\");
                                        \$('#centralModalSuccess').modal('show');
                                        \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                                   
                                           location.reload(true); 
            
                                        });
                                    }
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                            
                                   \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                                   \$('#centralModalDanger').modal('show');
                                }
                            });
                            
                        }
                        
                        
                    });
                    
                    document.getElementById('eliminar_publicacion_dialogo_aceptar').addEventListener('click', function(){
                        
                        //Cerramos el dialogo
                        \$('#centralModalWarning').modal('hide');
                                
                        //Eliminamos la publicacion
                        var url_api_delete = \"";
            // line 902
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_request", array("className" => "reserva", "id" => ((array_key_exists("hasReserva", $context)) ? ((isset($context["hasReserva"]) ? $context["hasReserva"] : $this->getContext($context, "hasReserva"))) : (0)))), "html", null, true);
            echo "\";
                        
                        \$.ajax({
                            url: url_api_delete,
                            headers: {'Authorization': 'Bearer ' + token},
                            type: 'DELETE',
                            success: function (response) {
                                      
                                if ( response.error != 0 ) {
                                        
                                    //Dialogo modal
                                    \$('#error-text').text(response.data);
                                    \$('#centralModalDanger').modal('show');
                                            
                                }
                                else {
                                            
                                    //Dialogo OK
                                    \$('#success-text').text(\"Reserva eliminada correctamente\");
                                    \$('#centralModalSuccess').modal('show');
                                    \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                               
                                        location.reload(true); 
                                                
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                        
                               \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                               \$('#centralModalDanger').modal('show');
                            }
                        });
                                
                    });
                            
                    document.getElementById('eliminar_publicacion_dialogo_cancelar').addEventListener('click', function(){
                                    
                        \$('#centralModalWarning').modal('hide');
                    });
                    
                    
                }
                
                
                
            });
            
        </script>
    ";
        }
        // line 952
        echo "    
";
        
        $__internal_cbf70ffbb28ae617dc07503ff0e7b9c054a7816f8a93cc6699e5459b18da7590->leave($__internal_cbf70ffbb28ae617dc07503ff0e7b9c054a7816f8a93cc6699e5459b18da7590_prof);

        
        $__internal_64bccb6f7d0fef98c831b21959d15a39ed3bc4a49b24da80e2e986a1a848671e->leave($__internal_64bccb6f7d0fef98c831b21959d15a39ed3bc4a49b24da80e2e986a1a848671e_prof);

    }

    public function getTemplateName()
    {
        return ":publicacion:publicacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1297 => 952,  1244 => 902,  1194 => 855,  1176 => 840,  1172 => 839,  1168 => 838,  1164 => 837,  1160 => 836,  1152 => 831,  1148 => 830,  1145 => 829,  1116 => 803,  1090 => 780,  1086 => 779,  1022 => 718,  1018 => 717,  1014 => 716,  833 => 538,  829 => 537,  825 => 536,  816 => 530,  812 => 529,  809 => 528,  807 => 527,  802 => 525,  799 => 524,  790 => 523,  779 => 520,  777 => 519,  774 => 518,  765 => 517,  727 => 488,  716 => 480,  699 => 465,  691 => 462,  689 => 461,  686 => 460,  680 => 459,  677 => 458,  674 => 457,  671 => 456,  667 => 455,  648 => 439,  633 => 427,  622 => 419,  610 => 410,  602 => 405,  565 => 371,  453 => 261,  444 => 258,  441 => 257,  437 => 256,  434 => 255,  432 => 254,  412 => 237,  396 => 223,  392 => 221,  386 => 219,  384 => 218,  362 => 199,  343 => 183,  323 => 166,  307 => 152,  303 => 150,  298 => 148,  294 => 146,  288 => 143,  284 => 141,  282 => 140,  279 => 139,  271 => 133,  265 => 130,  259 => 126,  252 => 122,  247 => 119,  245 => 118,  241 => 116,  239 => 115,  230 => 109,  213 => 94,  208 => 91,  203 => 89,  198 => 86,  193 => 83,  191 => 82,  186 => 81,  178 => 75,  176 => 74,  166 => 67,  163 => 66,  160 => 65,  151 => 58,  149 => 57,  141 => 51,  134 => 46,  129 => 43,  127 => 42,  124 => 41,  122 => 40,  114 => 35,  110 => 34,  89 => 16,  86 => 15,  77 => 14,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  49 => 7,  39 => 1,  36 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% if logged is defined == false %}
    {% set logged = app.session.get('logged') %}
{% endif %}

{% block header %}

    {% set vars = {'logged': logged} %}
    {% include 'secondary_templates/header.html.twig' with vars %}
    
{% endblock %}

{% block body %}

    <div class=\"background-image-responsive\" style=\"background-image:url({{ asset('img/background-image-publicacion.jpg') }})\">
        <div class=\"streak streak-lg streak-photo more-height  overlay\"></div>
    </div>
    
    <!-- Main Container -->
    <div id=\"container_publicacion\" class=\"container pb-3\">
       
        <section>
           
            <div class=\"row\">

                <!-- First Column -->
                <div class=\"col-lg-12\">
                   
                   
                    <!-- Main Info -->
                    <div class=\"jumbotron margin\">
                        
                            <h2 id=\"titulo_publicacion\">{{ isInsert is defined ? \"Titulo\" : publicacion.titulo }}</h2>
                            <h1 class=\"pt-1 pb-1\"><strong id=\"precio_publicacion\">{{ isInsert is defined ? \"Precio\" : \"#{publicacion.precio} €\" }}</strong></h1>
                        
                        <!-- Social shares -->
                        <div class=\"social-counters \">
                            
                            {%if isInsert is defined or isUpdate is defined %}
                                <button id=\"save-button\" type=\"button\" class=\"btn btn-primary\">
                                    {% if isInsert is defined %}
                                        Insertar
                                        <i class=\"fa fa-plus right\"></i>
                                    {% else %}
                                    
                                        Actualizar
                                        <i class=\"fa fa-check right\"></i>
                                    
                                    {% endif %}
                                </button>
                                <button id=\"on-update-data-publicacion\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">
                                    <span>Editar Campos</span>
                                    <i class=\"fa fa-pencil\"></i>
                                </button>
                                
                                {% if isUpdate is defined %}
                                
                                <button id=\"eliminar_publicacion\" type=\"button\" class=\"btn btn-warning\">
                                        Eliminar Publicacion
                                        <i class=\"fa fa-trash right\"></i>
                                </button>
                                
                                {% endif%}
                            {% else %}
                            
                                <a href=\"{{ path('profile_user', {'user': publicacion.usuario.id}) }}\">
                                    <button id=\"ver_perfil\" type=\"button\" class=\"btn btn-primary\">
                                        Ver perfil
                                        <i class=\"fa fa-eye right\"></i>
                                    </button>
                                </a>
                                
                                {% if isCompleto is defined %}
                                
                                    <button type=\"button\" class=\"btn btn-warning\">
                                        Completo
                                        <i class=\"fa fa-times right\"></i>
                                    </button>
                                {% else %}
                                    <button id=\"gestionar_reserva\" type=\"button\" class=\"btn {{ hasReserva is defined and hasReserva >  0 ? 'btn-warning' : 'btn-primary' }}\">
                                         {% if hasReserva is defined and hasReserva > 0 %}
                                            Cancelar Reserva  
                                            <i class=\"fa fa-trash right\"></i>
                                         {% else %}
                                             Reservar
                                             <i class=\"material-icons right md-18\">room_service</i>
                                         {% endif %}
                                    </button>
                                    
                                {% endif %} 
                                
                            {% endif %}
                        </div>
                        <!-- /.Social shares -->

                    </div>
                    <!-- /.Main Info -->
                    
                    <!-- Section: Features -->
                    <section class=\"section feature-box pt-1\">

                        <!-- Section heading -->
                        <h1 class=\"section-heading\">Datos de la publicación</h1>

                        <!-- Section sescription -->
                        <p id=\"descripcion_publicacion\" class=\"section-description lead\">
                           
                            {{publicacion.descripcion}}
                        </p>

                        <!-- First row -->
                        <div class=\"row\">
                            
                            {% if isInsert is defined or isUpdate is defined %}
                                
                                <label for=\"file-input-publicacion\" class=\"full\">
                                    {% if publicacion.foto is empty %}
                            
                                        <a alt=\"Cambiar imagen\">
                                            <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                             style=\"background-image:url({{asset(\"uploads/Publicacion/publicacion-image-default.jpg\")}})\"></div>
                                        </a>
                                             
                                    {% else %}
                                        
                                        <a alt=\"Cambiar imagen\">
                                            
                                            <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                                style=\"background-image:url({{asset(\"uploads/Publicacion/#{publicacion.foto}\")}})\"></div>
                                        </a>
                                    {% endif %}
                                    
                                </label>
                                    
                                <input id=\"file-input-publicacion\" type=\"file\" style=\"display:none\" accept=\"image/*\"/>
                                
                            {% else %}
                            
                                {% if publicacion.foto is empty %}
                            
                                    <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                         style=\"background-image:url({{asset(\"uploads/Publicacion/publicacion-image-default.jpg\")}})\"></div>
                                         
                                {% else %}
                                
                                    <div id=\"foto_publicacion\" class=\"col-md-12 center-on-small-only background-image-responsive image-publicacion\" 
                                        style=\"background-image:url({{asset(\"uploads/Publicacion/#{publicacion.foto}\")}})\"></div>
                                {% endif %}
                                
                            {% endif %}
                        </div>
                        
                        <div class=\"row features-small mt-15\">
                            
                            <div class=\"col-md-6 col-sm-12\">
                                
                                <!-- First row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-users primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Número Gourmets</h4>
                                        <p id=\"numero_gourmets_publicacion\" class=\"grey-text\">
                                            {{publicacion.plazasTotales}}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.First row -->

                                <div style=\"height:40px\"></div>


                                <!-- Third row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-clock-o primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Hora Inicio</h4>
                                        <p id=\"horaInicio_publicacion\" class=\"grey-text\">
                                           {{publicacion.horaInicio | date(\"H:i\")}}
                                        </p>
                                    </div>
                                </div>
                                
                                
                                <div style=\"height:40px\"></div>

                                <!-- Second row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-calendar primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Fecha</h4>
                                        <p id=\"fecha_publicacion\" class=\"grey-text\">
                                            {{publicacion.fecha | date(\"d-m-Y\")}}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.Second row -->

                                
                            </div>
                            
                            <div class=\"col-md-6 col-sm-12\">
                                <!-- Second row -->
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-home primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Domicilio</h4>
                                        <p id=\"domicilio_publicacion\" class=\"grey-text\">
                                            
                                            {% if publicacion.domicilio is null == false %}
                                                {{publicacion.domicilio.direccion}}
                                            {% else %}
                                                Ningun domicilio seleccionado
                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.Second row -->

                                <div style=\"height:40px\"></div>

                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-clock-o primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Hora Fin</h4>
                                        <p id=\"horaFin_publicacion\" class=\"grey-text\">
                                           {{publicacion.horaFin | date(\"H:i\")}}
                                        </p>
                                    </div>
                                </div>
                                
                                
                            
                                <div style=\"height:40px\"></div>
                                
                                <div class=\"row\">
                                    
                                    <div class=\"col-2\">
                                        <i class=\"fa fa-cutlery primary-color-text\"></i>
                                    </div>
                                    <div class=\"col-10\">
                                        <h4 class=\"feature-title\">Platos</h4>
                                        <div id=\"platos_publicacion\">
                                            {% set platos = publicacion.platos is null ? [] : publicacion.platos %}
                                            
                                            {% for plato in platos %}
                                            
                                                <div class=\"chip\">{{plato}}</div>
                                                
                                            {% endfor %}
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Third row -->
                                
                            </div>
                            
                            
                        </div>
                        

                    </section>
                    <!-- /.Section: Features -->
                    
                
                    
                </div>
                <!-- /.First Column -->
                
            </div>
            
        </section>
        
    </div>
    <!-- /.Main Container -->

    <!-- Actualizado correctamente -->
    <div class=\"modal fade\" id=\"centralModalSuccess\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-success\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Completado</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-check fa-4x mb-1 animated rotateIn\"></i>
                        <p id=\"success-text\">
                            Publicacion actualizada correctamente
                        </p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Ok</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- Fallos -->
    <div class=\"modal fade\" id=\"centralModalDanger\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-danger\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Error</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-close fa-4x mb-1 animated rotateIn\"></i>
                        <p id=\"error-text\">Ha ocurrido un error durante la actualización de la publicación</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Cencelar</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Danger-->

    <div class=\"modal fade\" id=\"centralModalWarning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-notify modal-warning\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
                <!--Header-->
                <div class=\"modal-header\">
                    <p class=\"heading lead\">Cuidado!</p>
    
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class=\"white-text\">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-trash fa-4x mb-1 animated rotateIn\"></i>
                        <p>{{ isUpdate is defined ? \"¿Está seguro de eliminar su publicación?\" : \"¿Está seguro de eliminar su reserva?\" }}</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class=\"modal-footer justify-content-center\">
                    <a type=\"button\" id=\"eliminar_publicacion_dialogo_aceptar\" class=\"btn btn-primary-modal\">Aceptar<i class=\"fa fa-check ml-1\"></i></a>
                    <a type=\"button\" id=\"eliminar_publicacion_dialogo_cancelar\" class=\"btn btn-outline-secondary-modal waves-effect\" data-dismiss=\"modal\">Cancelar</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Warning-->

    <!-- Insertar actualizar datos publicacion -->
    <div class=\"modal fade\" id=\"modalPublicacionData\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal modal-lg publicacion\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header light-blue darken-3 white-text form-header index\">
                    <button type=\"button\" class=\"close waves-effect waves-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"title\"><i class=\"fa fa-pencil\"></i> Datos Publicacion </h4>
                </div>
                
                <!--Body-->
                <div class=\"modal-body mb-0\">
                    
                    <div class=\"md-form form-lg\">
                        <i class=\"fa fa-th-list prefix icon-form-publicacion\"></i>
                        <input type=\"text\" id=\"titulo\" class=\"form-control\" value=\"{{publicacion.titulo}}\">
                        <label for=\"titulo\" >Titulo</label>
                    </div>
                    <div class=\"md-form form-lg\">
                        <i class=\"fa fa-book prefix icon-form-publicacion\"></i>
                        <textarea type=\"text\" id=\"descripcion\" class=\"md-textarea mb-0 profile\">{{publicacion.descripcion}}</textarea>
                        <label for=\"descripcion\">Descripcion</label>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-users prefix\"></i>
                                <input type=\"number\" min=0 id=\"numero_gourmets\" class=\"form-control\" value=\"{{publicacion.plazasTotales}}\">
                                <label for=\"numero_gourmets\">Número Gourmets</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-money prefix\"></i>
                                <input type=\"number\" min=0 id=\"precio\" class=\"form-control\" value=\"{{publicacion.precio}}\">
                                <label for=\"precio\">Precio</label>
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-calendar prefix\"></i>
                                <input type=\"text\" id=\"fecha\" class=\"form-control datepicker\" value=\"{{publicacion.fecha | date('d-m-Y')}}\">
                                <label for=\"fecha\">Fecha</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        
                                        <i class=\"fa fa-home prefix icon-form-publicacion\"></i>
                                        
                                    </div>
                                    <div class=\"col-md-10\">
                                        <select id=\"domicilio\" class=\"mdb-select\">
                                            <option value=\"-1\" disabled selected>Domicilio</option>
                                            {% for domicilio in user_view.perfil.domicilios %}
                                                {% set imagenes_domicilio = domicilio.imagenes %}
                                                {% set imagen_dom =  asset( imagenes_domicilio is null ? \"uploads/Domicilio/domicilio-default.png\" : \"uploads/Domicilio/#{imagenes_domicilio[0]}\") %}
                                                
                                                <option value=\"{{domicilio.id}}\" data-icon=\"{{imagen_dom}}\" class=\"rounded-circle\"
                                                        {{ isInsert is defined == false and publicacion.domicilio.id == domicilio.id ? 'selected' : ''}}>
                                                    {{-domicilio.direccion-}}
                                                </option>
                                                
                                            {% endfor %}
                                        </select>
                                    </div>
                                    
                                </div>
                                
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-clock-o prefix\"></i>
                                <input type=\"text\" id=\"horaInicio\" class=\"form-control\" value=\"{{publicacion.horaInicio | date('H:i')}}\">
                                <label for=\"horaInicio\">Hora Inicio</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            
                            <div class=\"md-form form-lg\">
                                <i class=\"fa fa-clock-o prefix\"></i>
                                <input type=\"text\" id=\"horaFin\" class=\"form-control\" value=\"{{publicacion.horaFin | date('H:i')}}\">
                                <label for=\"horaFin\">Hora Fin</label>
                            </div>
                    
                        </div>
                    </div>
                    
                    <div class=\"md-form form-lg\">
                        <div class=\"row\">
                            <div class=\"col-md-1\">
                                <i class=\"fa fa-cutlery prefix icon-form-publicacion\"></i>
                            </div>
                            <div class=\"col-md-11\">
                                <div id=\"platos\" class=\"chips chips-placeholder\"></div>
                            </div>
                        </div>
                    </div>
    
                    <div class=\"text-center mt-1-half\">
                        <button id=\"button-update-data-publicacion\" class=\"btn btn-primary waves-effect waves-light\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
{% endblock %}

{% block footer %}

    {% include 'secondary_templates/footer.html.twig' %}
    
{% endblock %}

{% block javascripts %}

    {{parent()}}
    
    {% if isInsert is defined or isUpdate is defined %}
    
        <script src=\"{{asset('js/mdb-pro.min.js')}}\"></script>
        <script src=\"{{asset('js/moment.js')}}\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                
                //Data
                var isUpdate                   = \"{{ isUpdate is defined ? true : false }}\";
                var publicacion                = {{ publicacion.toArray()|json_encode|raw }};
                var usuario                    = {{ user_view.toArray()|json_encode|raw }};
                var platos_publicacion         = publicacion.platos == null ? [] : publicacion.platos;
                var domicilios                 = usuario.perfil == null ? [] : usuario.perfil.domicilios;
    
                var platos_data                = [];
    
                for ( var i = 0; i < platos_publicacion.length; i++ ) {
                    
                    platos_data.push({\"tag\": platos_publicacion[i]});
                }
    
                
                //Variables UI
                var titulo_dialogo             = \$('#titulo');
                var descripcion_dialogo        = \$('#descripcion');
                var file_input                 = \$(\"#file-input-publicacion\");
                var numero_gourmets_dialogo    = \$('#numero_gourmets');
                var precio_dialogo             = \$('#precio');
                var fecha_dialogo              = \$('#fecha');
                var domicilio_dialogo          = \$('#domicilio');
                var horaInicio_dialogo         = \$('#horaInicio');
                var horaFin_dialogo            = \$('#horaFin');
                
                var titulo_body                = \$(\"#titulo_publicacion\");
                var descripcion_body           = \$(\"#descripcion_publicacion\");
                var foto_body                  = \$(\"#foto_publicacion\");
                var numero_gourmets_body       = \$(\"#numero_gourmets_publicacion\");
                var precio_body                = \$(\"#precio_publicacion\");
                var fecha_body                 = \$(\"#fecha_publicacion\");
                var domicilio_body             = \$(\"#domicilio_publicacion\");
                var horaInicio_body            = \$(\"#horaInicio_publicacion\");
                var horaFin_body               = \$(\"#horaFin_publicacion\");
                var platos_body                = \$(\"#platos_publicacion\");
                
                //Inicializamos select domicilio
                \$('.mdb-select').material_select();
                
                //Inicializamos picker fecha
                \$('.datepicker').pickadate({
                  container: '#modalPublicacionData',
                  containerHidden: '#modalPublicacionData',
                  min: true,
                  max: false,
                  format: 'dd-mm-yyyy',
                  formatSubmit: 'dd-mm-yyyy'
                });
                
                //Inicializamos picker hora
                horaInicio_dialogo.pickatime({
                    twelvehour: true
                });
                
                
                horaFin_dialogo.pickatime({
                    twelvehour: true
                });
                
                //Inicializamos chips platos
                \$('.chips-placeholder').material_chip({
                    placeholder: 'Platos',
                    secondaryPlaceholder: 'Platos',
                    data: platos_data
                });
                
                
                //Cuando se cierre el dialogo modal almacenamos la informacion
                \$('#modalPublicacionData').on('hidden.bs.modal', function (e) {
                   
                    var titulo      = titulo_dialogo.val();
                    var descripcion = descripcion_dialogo.val();
                    var gourmets    = numero_gourmets_dialogo.val();
                    var precio      = precio_dialogo.val();
                    var fecha       = fecha_dialogo.val();
                    var domicilio   = domicilio_dialogo.val()  == null ? -1 : parseInt(domicilio_dialogo.val());
                    var horaInicio  = horaInicio_dialogo.val();
                    var horaFin     = horaFin_dialogo.val();
                    
                    //Formateamos horaInicio y horaFin
                    horaInicio = moment(horaInicio, [\"h:mm A\"]).format(\"HH:mm\");
                    horaFin    = moment(horaFin, [\"h:mm A\"]).format(\"HH:mm\");
                    
                    //Obtenemos los platos
                    var platos = [];
                    var chips  = \$('.chips').material_chip('data');
                    
                    for ( var i = 0; i < chips.length; i++ ) {
                        
                        var chip = chips[i];
                        platos.push(chip.tag);    
                    }
                    
                    //Cargamos los datos UI
                    titulo_body.text(!titulo.trim() ? titulo_body.text() : titulo);
                    descripcion_body.text(descripcion);
                    numero_gourmets_body.text(gourmets);
                    precio_body.text(precio + \" €\");
                    fecha_body.text(fecha);
                    horaInicio_body.text(horaInicio);
                    horaFin_body.text(horaFin);
                    
                    
                    //Guardamos los platos
                    platos_body.empty();
                    
                    for ( var i = 0; i < platos.length; i++ ) {
                        
                        platos_body.append(\"<div class='chip'>\" + platos[i] + \"</div>\");
                    }
                    
                    //Cargamos el domicilio
                    //La funcion grep nos permite filtrar dentro de un array y obtener los valores que necesitemos 
                    //que cumplan con los parametros definidos en la funcion anonima
                    var domicilio_seleccionado = \$.grep(domicilios, function(e){ return e.id == domicilio; });
                    var direccion              = domicilio_seleccionado.length == 0 ? domicilio_body.text() : domicilio_seleccionado[0].direccion;
                    
                    domicilio_body.text(direccion);
                    
                    //Cargamos datos en la publicacion
                    publicacion.titulo         = titulo;
                    publicacion.descripcion    = descripcion;
                    publicacion.plazasTotales  = gourmets;
                    publicacion.precio         = precio;
                    publicacion.domicilio      = domicilio;
                    publicacion.fecha          = fecha;
                    publicacion.horaInicio     = horaInicio;
                    publicacion.horaFin        = horaFin;
                    publicacion.platos         = platos;
                    publicacion.foto           = publicacion.foto != null && publicacion.foto.indexOf(\"publicacion-image-default.jpg\") > 0 ? \"\" : publicacion.foto;   
                });
                
                
                
                //Selector de la imagen
                file_input.change(function() {
                    
                    if (this.files && this.files[0]) {
                        
                        var fileType = this.files[0][\"type\"];
                        var ValidImageTypes = [\"image/gif\", \"image/jpeg\", \"image/png\"];
                        if (\$.inArray(fileType, ValidImageTypes) >= 0) {
                           
                            var reader     = new FileReader();
                            /*reader.onloadstart    = showProgress;
                            reader.onprogress     = onProgress;
                            reader.onloadend      = hideProgress;*/
                            reader.onload         = imageIsLoaded;
                        
                            reader.readAsDataURL(this.files[0]);
                            
                        }
                        
                    }
                    
                });
                
                function imageIsLoaded(e) {
                    
                    //El evento nos devuelve la imagen en base64
                    publicacion.foto = e.target.result;
                    foto_body.css('background-image', 'url(' + e.target.result + ')');
                };
                
                //Elementos que muestran y ocultan el dialogo
                document.getElementById(\"on-update-data-publicacion\").addEventListener('click', function(){
                   
                    \$('#modalPublicacionData').modal('show');
                });
                
                document.getElementById('button-update-data-publicacion').addEventListener('click', function(){
                    
                   \$('#modalPublicacionData').modal('hide');
                    
                });
                
                //Insertar o actualizar perfil
                document.getElementById('save-button').addEventListener('click', function(){
                   
                   
                   var url_api   = isUpdate ? \"{{ path('put_all_request', {'className': 'publicacion', 'id': publicacion.id })}}\" 
                                            : \"{{path('post_all_request', {'className': 'publicacion'}) }}\";
                   var token     = \"{{ getTokenUser(user_view) }}\";
                   
                   \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: isUpdate ? 'PUT' : 'POST',
                        data: publicacion,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(isUpdate ? response.data : \"Publicacion insertada correctamente\");
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   //Si actualizamos se refresca la página y si se inserta nos cambiamos de página
                                    if ( isUpdate) {
                                        
                                        location.reload(true); 
                                    }
                                    else {
                                        
                                        //Debido a que la ruta se carga con la carga de la pagina debemos de agregarla a posteriori
                                        var urlController = \"publicacion/\" + response.data;
                                        
                                        window.location.href = urlController;
                                    }
                                });
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           \$('#error-text').text(\"Datos enviados incorrectos, por favor reviselos e intentelo de nuevo\");
                           \$('#centralModalDanger').modal('show');
                        }
                    });
                   
                }, false);
                
                
                if ( isUpdate ) {
                    
                    document.getElementById('eliminar_publicacion').addEventListener('click', function(){
                        
                        \$('#centralModalWarning').modal('show');
                    });
                    
                    document.getElementById('eliminar_publicacion_dialogo_aceptar').addEventListener('click', function(){
                        
                        //Cerramos el dialogo
                        \$('#centralModalWarning').modal('hide');
                        
                        //Eliminamos la publicacion
                        var url_api_delete = \"{{ path('delete_request', {'className' : 'publicacion', 'id' : publicacion.id }) }}\";
                        var token          = \"{{ getTokenUser(user_view) }}\";
                        
                        \$.ajax({
                            url: url_api_delete,
                            headers: {'Authorization': 'Bearer ' + token},
                            type: 'DELETE',
                            success: function (response) {
                                
                                if ( response.error != 0 ) {
                                    
                                    //Dialogo modal
                                    \$('#error-text').text(response.data);
                                    \$('#centralModalDanger').modal('show');
                                    
                                }
                                else {
                                    
                                    //Dialogo OK
                                    \$('#success-text').text(isUpdate ? response.data : \"Publicacion eliminada correctamente\");
                                    \$('#centralModalSuccess').modal('show');
                                    \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                       
                                       //Si actualizamos se refresca la página y si se inserta nos cambiamos de página
                                        var urlController = \"{{ path('homepage')}}\";
                                        window.location.href = urlController;
                                        
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                
                               \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                               \$('#centralModalDanger').modal('show');
                            }
                        });
                        
                });
                    
                document.getElementById('eliminar_publicacion_dialogo_cancelar').addEventListener('click', function(){
                        
                    \$('#centralModalWarning').modal('hide');
                });
            }
                
        });
            
        </script>
    
    {% else %}
    
        <script src=\"{{asset('js/moment.js')}}\"></script>
        <script src=\"{{asset('js/moment-timezone.js')}}\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function(){
            
                var publicacion_id = parseInt(\"{{ publicacion.id }}\"); 
                var my_user_id     = parseInt(\"{{user_view.id}}\");
                var token          = \"{{ getTokenUser(user_view) }}\";
                var isCompleto     = \"{{ isCompleto is defined ? '1' : '0' }}\";
                var hasReserva     = \"{{ hasReserva is defined ? hasReserva : '0' }}\";
                
                if ( isCompleto )  {
                    
                    document.getElementById(\"gestionar_reserva\").addEventListener('click', function(){
                    
                        if ( hasReserva > 0 ) {
                            
                            //Mostramos el modal de Warning
                            \$('#centralModalWarning').modal('show');
                            
                        }
                        else {
                            
                            //Generamos la reserva
                            var url_api_insert = \"{{ path('post_all_request', {'className': 'reserva'}) }}\";
                            var reserva        = {\"publicacion\": publicacion_id, \"usuario\": my_user_id};
                            
                            \$.ajax({
                                url: url_api_insert,
                                headers: {'Authorization': 'Bearer ' + token},
                                type: 'POST',
                                data: reserva,
                                success: function (response) {
                                            
                                    if ( response.error != 0 ) {
                                            
                                        //Dialogo modal
                                        \$('#error-text').text(response.data);
                                        \$('#centralModalDanger').modal('show');
                                                
                                    }
                                    else {
                                                
                                        //Dialogo OK
                                        \$('#success-text').text(\"Reserva realizada correctamente\");
                                        \$('#centralModalSuccess').modal('show');
                                        \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                                   
                                           location.reload(true); 
            
                                        });
                                    }
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                            
                                   \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                                   \$('#centralModalDanger').modal('show');
                                }
                            });
                            
                        }
                        
                        
                    });
                    
                    document.getElementById('eliminar_publicacion_dialogo_aceptar').addEventListener('click', function(){
                        
                        //Cerramos el dialogo
                        \$('#centralModalWarning').modal('hide');
                                
                        //Eliminamos la publicacion
                        var url_api_delete = \"{{ path('delete_request', {'className': 'reserva', 'id': hasReserva is defined ? hasReserva : 0}) }}\";
                        
                        \$.ajax({
                            url: url_api_delete,
                            headers: {'Authorization': 'Bearer ' + token},
                            type: 'DELETE',
                            success: function (response) {
                                      
                                if ( response.error != 0 ) {
                                        
                                    //Dialogo modal
                                    \$('#error-text').text(response.data);
                                    \$('#centralModalDanger').modal('show');
                                            
                                }
                                else {
                                            
                                    //Dialogo OK
                                    \$('#success-text').text(\"Reserva eliminada correctamente\");
                                    \$('#centralModalSuccess').modal('show');
                                    \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                               
                                        location.reload(true); 
                                                
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                        
                               \$('#error-text').text(\"Ha ocurrido un problema con el servidor, intentelo de nuevo más tarde\");
                               \$('#centralModalDanger').modal('show');
                            }
                        });
                                
                    });
                            
                    document.getElementById('eliminar_publicacion_dialogo_cancelar').addEventListener('click', function(){
                                    
                        \$('#centralModalWarning').modal('hide');
                    });
                    
                    
                }
                
                
                
            });
            
        </script>
    {% endif %}
    
{% endblock%}", ":publicacion:publicacion.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacion/publicacion.html.twig");
    }
}

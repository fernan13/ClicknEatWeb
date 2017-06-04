<?php

/* :profile:profile.html.twig */
class __TwigTemplate_f53968353e1d25675fc6f4fa9f79a02eafe111e2a20119ac3f7268d657ac6373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":profile:profile.html.twig", 1);
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
        $__internal_8ccf234bdfef6f2d9a45edff82de9ddfffbd3610e22c543e84da7e18699ee3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccf234bdfef6f2d9a45edff82de9ddfffbd3610e22c543e84da7e18699ee3b6->enter($__internal_8ccf234bdfef6f2d9a45edff82de9ddfffbd3610e22c543e84da7e18699ee3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":profile:profile.html.twig"));

        $__internal_c6b30292a243c6675325bf499a258708b2a1edf75db8ce1217a3bbbd47cd5f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b30292a243c6675325bf499a258708b2a1edf75db8ce1217a3bbbd47cd5f30->enter($__internal_c6b30292a243c6675325bf499a258708b2a1edf75db8ce1217a3bbbd47cd5f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":profile:profile.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ccf234bdfef6f2d9a45edff82de9ddfffbd3610e22c543e84da7e18699ee3b6->leave($__internal_8ccf234bdfef6f2d9a45edff82de9ddfffbd3610e22c543e84da7e18699ee3b6_prof);

        
        $__internal_c6b30292a243c6675325bf499a258708b2a1edf75db8ce1217a3bbbd47cd5f30->leave($__internal_c6b30292a243c6675325bf499a258708b2a1edf75db8ce1217a3bbbd47cd5f30_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_afab256421122d64484450608271610be9ef5a1be128edf3790ffa57165ba6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afab256421122d64484450608271610be9ef5a1be128edf3790ffa57165ba6b6->enter($__internal_afab256421122d64484450608271610be9ef5a1be128edf3790ffa57165ba6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8fcb6de350d85ed415669543b74fb265a71fdbc4e7e8c56b002f11d3f6e15620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcb6de350d85ed415669543b74fb265a71fdbc4e7e8c56b002f11d3f6e15620->enter($__internal_8fcb6de350d85ed415669543b74fb265a71fdbc4e7e8c56b002f11d3f6e15620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
    ";
        // line 9
        $context["vars"] = array("logged" => (isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")));
        // line 10
        echo "    ";
        $this->loadTemplate("secondary_templates/header.html.twig", ":profile:profile.html.twig", 10)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 11
        echo "    
";
        
        $__internal_8fcb6de350d85ed415669543b74fb265a71fdbc4e7e8c56b002f11d3f6e15620->leave($__internal_8fcb6de350d85ed415669543b74fb265a71fdbc4e7e8c56b002f11d3f6e15620_prof);

        
        $__internal_afab256421122d64484450608271610be9ef5a1be128edf3790ffa57165ba6b6->leave($__internal_afab256421122d64484450608271610be9ef5a1be128edf3790ffa57165ba6b6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_b17ec234806d8e69951325621db93f639496ac9e2569a7d755ffa44ae03112bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17ec234806d8e69951325621db93f639496ac9e2569a7d755ffa44ae03112bf->enter($__internal_b17ec234806d8e69951325621db93f639496ac9e2569a7d755ffa44ae03112bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63980578303a169facd81a5c2dd721cb85f96e8576eed2d18bb96f899e024719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63980578303a169facd81a5c2dd721cb85f96e8576eed2d18bb96f899e024719->enter($__internal_63980578303a169facd81a5c2dd721cb85f96e8576eed2d18bb96f899e024719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <main id=\"mainContainer\">
        
        <div class=\"container\">
            
            <section id=\"productDetails\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        
                        <div id=\"carousel-thumb\" class=\"carousel slide carousel-fade carousel-thumbnails click-eat-carousel profile\" data-ride=\"carousel\">

                            <div id=\"div_image_user_profile\" class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active click-eat-carousel profile\">
                                    ";
        // line 28
        if ((isset($context["isMe"]) ? $context["isMe"] : $this->getContext($context, "isMe"))) {
            // line 29
            echo "                                    
                                        <label for=\"file-input-profile\" class=\"full\">
                                            <div id=\"image-profile-user\" class=\"background-image-responsive full\" 
                                            style=\"background-image:url(";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "imagen", array()))), "html", null, true);
            echo ")\"></div>
                                            
                                        </label>
                                    
                                        <input id=\"file-input-profile\" type=\"file\" style=\"display:none\" accept=\"image/*\"/>
                                        
                                       
                                    ";
        } else {
            // line 40
            echo "                                        
                                        <img class=\"background-image-responsive full\" style=\"background-image:url(";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "imagen", array()))), "html", null, true);
            echo ")\">
                                        
                                    ";
        }
        // line 43
        echo "    
                                </div>
                                
    
                                <div id=\"progress_image\" class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            
                            
                            <!--<a class=\"carousel-control-prev\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>-->
                            

                        </div>
                        
                    </div>
                    <div class=\"col-lg-7\">
                        <h2 class=\"h2-responsive center-on-small-only product-name\"><strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "nombre", array()), "html", null, true);
        echo "</strong></h2>
                        <h4 class=\"h4-responsive center-on-small-only\"><span class=\"grey-text\"><small id=\"text-username\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "username", array()), "html", null, true);
        echo "</small></span></h4>

                       
                    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <h5 class=\"mb-0\"> Descripcion <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseOne\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                <div id=\"text-descripcion\" class=\"card-block block-text-ellipsis\">
                                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "descripcion", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    <h5 class=\"mb-0\"> Domicilios <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "domicilios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 94
            echo "                                    
                                    <div class=\"card-block\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "direccion", array()), "html", null, true);
            echo "</div>
                                        
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingThree\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    <h5 class=\"mb-0\"> Mis gustos <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                <div id=\"text-gustos\" class=\"card-block block-text-ellipsis\">
                                    ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "gustos", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col-md-12 center-on-small-only text-md-right\">
                                
                                ";
        // line 120
        if ((isset($context["isMe"]) ? $context["isMe"] : $this->getContext($context, "isMe"))) {
            // line 121
            echo "                                
                                    <button id=\"update_button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Modificar</button>
                                    <button id=\"save-button\" class=\"btn btn-primary\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> Guardar </button>
                                    
                                ";
        } else {
            // line 126
            echo "                                
                                    <button id=\"comment-button\" class=\"btn btn-primary\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> Valorar </button>
                                    
                                ";
        }
        // line 130
        echo "                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>

            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Comentarios</h2>
            </div>

            <!-- Comentarios -->
            <section id=\"reviews\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 147
        $context["comentarios"] = $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "comentariosRecibidos", array());
        // line 148
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 149
            echo "                            <div class=\"row\">
                                
                                <div class=\"col-md-2 col-sm-3\">
                                
                                    <a class=\"waves-light waves-effect waves-light\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_user", array("user" => $this->getAttribute($this->getAttribute($this->getAttribute($context["comentario"], "usuarioDa", array()), "usuario", array()), "id", array()))), "html", null, true);
            echo "\">
                                        
                                        <div class=\"image-review rounded-circle background-image-responsive\" 
                                             style=\"background-image: url(";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute($context["comentario"], "usuarioDa", array()), "imagen", array()))), "html", null, true);
            echo ")\">
                                            
                                            
                                        </div>
                                    </a>
                                
                                </div>
                                
                                <div class=\"col-md-10 col-sm-9\">
                                    
                                    <div>
                                        <h4>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comentario"], "UsuarioDa", array()), "nombre", array()), "html", null, true);
            echo "</h4>
                                        ";
            // line 168
            $context["rating"] = twig_round($this->getAttribute($context["comentario"], "puntuacion", array()), 0, "ceil");
            // line 169
            echo "                                        ";
            $context["diff"] = (5 - (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")));
            // line 170
            echo "                                        
                                        
                                        <ul class=\"rating inline-ul\">
                                            
                                            ";
            // line 174
            if (((isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")) > 0)) {
                echo "     
                                                ";
                // line 175
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 176
                    echo "                                                    <li><i class=\"fa fa-star amber-text\"></i></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                            ";
            }
            // line 179
            echo "                                            
                                            ";
            // line 180
            if (((isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff")) >= 1)) {
                // line 181
                echo "                                            
                                                ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 183
                    echo "                                                    <li><i class=\"fa fa-star gray-text-star\"></i></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                                                
                                            ";
            }
            // line 187
            echo "                                        </ul>
                                        
                                        <p class=\"block-text-ellipsis\">
                                            ";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "valoracion", array()), "html", null, true);
            echo "
                                        </p>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                        

                    </div>
                </div>
            </section>
            <!-- /.Product Reviews -->

            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Publicaciones</h2>
            </div>

            <section id=\"related\">

                <!--Carousel Wrapper-->
                <div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item click-eat-carousel\" data-ride=\"carousel\">

                    ";
        // line 215
        $context["publicaciones"] = $this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "publicaciones", array());
        // line 216
        echo "                    ";
        $context["slider_number"] = twig_round((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) / 3), 0, "ceil");
        // line 217
        echo "                    
                    ";
        // line 218
        if (((isset($context["slider_number"]) ? $context["slider_number"] : $this->getContext($context, "slider_number")) > 0)) {
            echo "    
                    
                        <!--Controls-->
                        <div class=\"controls-top\">
                            <a class=\"btn-floating btn-small primary-color\" href=\"#multi-item-example\" data-slide=\"prev\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a class=\"btn-floating btn-small primary-color\" href=\"#multi-item-example\" data-slide=\"next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                        <!--/.Controls-->
    
                        <!--Indicators-->
                        <ol class=\"carousel-indicators\">
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"0\" class=\"active\"></li>
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"1\"></li>
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"2\"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class=\"carousel-inner\" role=\"listbox\">
    
                            ";
            // line 238
            $context["min_index"] = 0;
            // line 239
            echo "                            ";
            $context["max_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
            // line 240
            echo "                                
                            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["slider_number"]) ? $context["slider_number"] : $this->getContext($context, "slider_number"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 242
                echo "                            
                                <div class=\"carousel-item ";
                // line 243
                echo ((($context["i"] == 1)) ? ("active") : (""));
                echo " click-eat-carousel\">
                                
                                    ";
                // line 245
                echo "    
                                    ";
                // line 246
                $context["max_index"] = ((((isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index")) > twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))))) ? (twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")))) : ((isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index"))));
                // line 247
                echo "                                    
                                    ";
                // line 248
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")), (isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")), (isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index"))));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    echo "    
                                    
                                        <div class=\" col-lg-4 col-sm-12 mb-1\">
                                            <div class=\"card card-cascade narrower click-eat-card profile\">
                                        
                                                <div class=\"view overlay hm-white-slight\">
                                                    
                                                    ";
                    // line 255
                    if (twig_test_empty($this->getAttribute($context["publicacion"], "foto", array()))) {
                        // line 256
                        echo "                            
                                                        <div class=\"eat-card-image background-image-responsive\"
                                                             style=\"background-image:url(";
                        // line 258
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Publicacion/publicacion-image-default.jpg"), "html", null, true);
                        echo ")\">
                                                             
                                                    ";
                    } else {
                        // line 261
                        echo "                                                    
                                                        
                                                        <div class=\"eat-card-image background-image-responsive\" 
                                                             style=\"background-image:url(";
                        // line 264
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/Publicacion/" . $this->getAttribute($context["publicacion"], "foto", array()))), "html", null, true);
                        echo ")\">
                                                    ";
                    }
                    // line 266
                    echo "                                                    
                                                        <a href=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("see_or_update_publicacion", array("publicacion" => $this->getAttribute($context["publicacion"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <div class=\"mask waves-light\"></div>
                                                        </a>
                                                    </div> 
                                                    
                                                </div>
                                                            
                                                <div class=\"card-block text-center\">
                                                             
                                                    <a href=\"#\" class=\"text-muted\"><h5>";
                    // line 276
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                    echo "</h5></a>
                                                    <h4 class=\"card-title\"><strong><a href=\"#\">";
                    // line 277
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                    echo "</a></strong></h4>
                                        
                                                    <p class=\"card-text block-text-ellipsis\">
                                                         ";
                    // line 280
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "descripcion", array()), "html", null, true);
                    echo "
                                                    </p>
                                        
                                                    <div class=\"card-footer\">
                                                        <span class=\"left\">";
                    // line 284
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "precio", array()), "html", null, true);
                    echo "€</span>
                                                        <span class=\"right\">
                                                            <a class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick Look\"><i className=\"fa fa-calendar-check-o\"></i></a>
                                                            <a class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i className=\"fa fa-clock-o\"></i></a>
                                                        </span>
                                                    </div>
                                        
                                                </div>
                                        
                                            </div>
                                        </div>
                                    
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo "                                    
                                    ";
                // line 298
                $context["min_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
                // line 299
                echo "                                    ";
                $context["max_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
                // line 300
                echo "                                
                                
                                </div>
                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                           
                        </div>
                        <!--/.Slides-->
                    ";
        }
        // line 309
        echo "                </div>
                <!--/.Carousel Wrapper-->


            </section>
        </div>
        <!-- /.Main Container -->
    </main>

    <!-- Dialogs -->
    
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
                            Perfil actualizado correctamente
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
                        <p id=\"error-text\">Ha ocurrido un error durante la actualizacion del perfil</p>
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

    <!-- Editar campos -->
    <div class=\"modal fade\" id=\"modalUpdateProfileForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header light-blue darken-3 white-text form-header index\">
                    <button type=\"button\" class=\"close waves-effect waves-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"title\"><i class=\"fa fa-pencil\"></i> Editar Datos Personales </h4>
                </div>
                
                <!--Body-->
                <div class=\"modal-body mb-0\">
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-user prefix\"></i>
                        <input type=\"text\" id=\"nombre_usuario\" class=\"form-control\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "nombre", array()), "html", null, true);
        echo "\">
                        <label for=\"nombre_usuario\">Nombre</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-list prefix\"></i>
                        <textarea type=\"text\" id=\"descripcion_usuario\" class=\"md-textarea mb-0 profile\" value=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "descripcion", array()), "html", null, true);
        echo "\"></textarea>
                        <label for=\"descripcion_usuario\">Descripcion</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-cutlery prefix\"></i>
                        <textarea type=\"text\" id=\"gustos_usuario\" class=\"md-textarea mb-0 profile\" value=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "gustos", array()), "html", null, true);
        echo "\"></textarea>
                        <label for=\"gustos_usuario\">Mis gustos</label>
                    </div>
    
                    <div class=\"text-center mt-1-half\">
                        <button id=\"button-update-personal-profile\" class=\"btn btn-primary waves-effect waves-light\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- Valoracion Modal -->
    <!--Modal: Login with Avatar Form-->
    <div class=\"modal fade\" id=\"centralModalComment\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal modal-avatar\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header\">
                    <div class=\"background-image-responsive rounded-circle comment-image\" 
                         style=\"background-image: url(";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_me"]) ? $context["user_me"] : $this->getContext($context, "user_me")), "perfil", array()), "imagen", array()))), "html", null, true);
        echo ")\"></div>
                </div>
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
    
                    <h5 class=\"mt-1 mb-2\">";
        // line 444
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_me"]) ? $context["user_me"] : $this->getContext($context, "user_me")), "perfil", array()), "nombre", array()), "html", null, true);
        echo "</h5>
    
                    <div class=\"row ml-0 mr-0 text-align-left\">
                        
                        <div class=\"col-md-3\">
                            <span class=\"rating-form\">Puntuacion</span>
                        </div>
                        <div class=\"col-md-9\">
                            
                            <select id=\"puntuacion\">
                              <option value=\"1\" selected=\"selected\">1</option>
                              <option value=\"2\">2</option>
                              <option value=\"3\">3</option>
                              <option value=\"4\">4</option>
                              <option value=\"5\">5</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class=\"row ml-0 mr-0 text-align-left\">
                        
                        <div class=\"col-md-12\">
                            <span for=\"valoracion\" class=\"rating-form\">Valoracion</span>
                        </div>
                        <div class=\"col-md-12\">
                            <textarea type=\"text\" id=\"valoracion\" class=\"md-textarea mb-0 profile\"></textarea>
                        </div>
                    </div>
    
                    
                    
                    <div class=\"text-center mt-15\">
                        <button id=\"insertar_comentario\" class=\"btn btn-primary\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                        <button id=\"cancelar_comentario\" class=\"btn btn-primary\">Cancelar <i class=\"fa fa-close ml-1\"></i></button>
                    </div>
                </div>
    
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login with Avatar Form-->

";
        
        $__internal_63980578303a169facd81a5c2dd721cb85f96e8576eed2d18bb96f899e024719->leave($__internal_63980578303a169facd81a5c2dd721cb85f96e8576eed2d18bb96f899e024719_prof);

        
        $__internal_b17ec234806d8e69951325621db93f639496ac9e2569a7d755ffa44ae03112bf->leave($__internal_b17ec234806d8e69951325621db93f639496ac9e2569a7d755ffa44ae03112bf_prof);

    }

    // line 489
    public function block_footer($context, array $blocks = array())
    {
        $__internal_54bf4406e1b2a7208008ee7fd320c6cadbd55b9a6824bb055303bced7ad68be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bf4406e1b2a7208008ee7fd320c6cadbd55b9a6824bb055303bced7ad68be7->enter($__internal_54bf4406e1b2a7208008ee7fd320c6cadbd55b9a6824bb055303bced7ad68be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_22b5907dd69532d96ff4a623f95fb3bc617c3fffb66c57aaa71b944e41ab6016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b5907dd69532d96ff4a623f95fb3bc617c3fffb66c57aaa71b944e41ab6016->enter($__internal_22b5907dd69532d96ff4a623f95fb3bc617c3fffb66c57aaa71b944e41ab6016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 490
        echo "
    ";
        // line 491
        $this->loadTemplate("secondary_templates/footer.html.twig", ":profile:profile.html.twig", 491)->display($context);
        // line 492
        echo "    
";
        
        $__internal_22b5907dd69532d96ff4a623f95fb3bc617c3fffb66c57aaa71b944e41ab6016->leave($__internal_22b5907dd69532d96ff4a623f95fb3bc617c3fffb66c57aaa71b944e41ab6016_prof);

        
        $__internal_54bf4406e1b2a7208008ee7fd320c6cadbd55b9a6824bb055303bced7ad68be7->leave($__internal_54bf4406e1b2a7208008ee7fd320c6cadbd55b9a6824bb055303bced7ad68be7_prof);

    }

    // line 495
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fd0feef8324ec260ab905a5200f922531d1c6dc5d1302311a3f38ae1b6cee17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd0feef8324ec260ab905a5200f922531d1c6dc5d1302311a3f38ae1b6cee17->enter($__internal_9fd0feef8324ec260ab905a5200f922531d1c6dc5d1302311a3f38ae1b6cee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c96ff4c20dd2fb5aa359d3ff135fbf048a89674514fb55d45d509e6e58c4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c96ff4c20dd2fb5aa359d3ff135fbf048a89674514fb55d45d509e6e58c4d8d->enter($__internal_7c96ff4c20dd2fb5aa359d3ff135fbf048a89674514fb55d45d509e6e58c4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 496
        echo "
    ";
        // line 497
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    ";
        // line 499
        if (((isset($context["isMe"]) ? $context["isMe"] : $this->getContext($context, "isMe")) == 1)) {
            // line 500
            echo "    
        <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                
                //Usuario completo cargado en javascript
                var user         = ";
            // line 506
            echo twig_jsonencode_filter($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "toArray", array(), "method"));
            echo ";
                    
                var file_input      = \$(\"#file-input-profile\");
                var div_image       = \$(\"#div_image_user_profile\");
                var image           = \$(\"#image-profile-user\");
                var progress_image  = \$(\"#progress_image\");
                var bar_dialog      = \$('div.progress-bar');
                
                if ( bar_dialog.hasClass('bg-danger') ) bar_dialog.removeClass('bg-danger');
                
                file_input.change(function() {
                    
                    if (this.files && this.files[0]) {
                        
                        var fileType = this.files[0][\"type\"];
                        var ValidImageTypes = [\"image/gif\", \"image/jpeg\", \"image/png\"];
                        if (\$.inArray(fileType, ValidImageTypes) < 0) {
                           
                            // invalid file type code goes here.
                            progress_image.css('display', 'inherit');
                            bar_dialog.addClass(\"bg-danger\");
                            bar_dialog.css('width', '100%');
                            
                        }
                        else {
                            
                            var reader     = new FileReader();
                            /*var xhr        = new XMLHttpRequest();
                            var formData   = new FormData();
                            
                            formData.append(\"profile\", file);
                            xhr.addEventListener('progress', function(e){
                               
                               var done  = e.position || e.loaded;
                               var total = e.totalSize || e.total;
                               
                            });
                            
                            if ( xhr.upload ) {
                                
                                xhr.upload.onprogress = function(e) {
                                     if (e.lengthComputable && e) {
                                         
                                          p = (e.loaded / e.total)*100;
                                          
                                     }
                                }
                                
                                xhr.upload.addEventListener('loadend', function(e) {
                                    user.perfil.imagen = e.target.result;
                                    image.css('background-image', 'url(' + e.target.result + ')');
                                });
                            }
                            xhr.onreadystatechange = function(e) {
                                if ( this.readyState == 4 ) {
                                    
                                    console.log('xhr.upload complete');
                                }
                            }
                            xhr.open('POST', window.location.href, true);
                            xhr.setRequestHeader(\"Content-Type\", \"multipart/form-data\");
                            xhr.send(formData);*/
                            reader.onloadstart    = showProgress;
                            reader.onprogress     = onProgress;
                            reader.onloadend      = hideProgress;
                            reader.onload         = imageIsLoaded;
                        
                            reader.readAsDataURL(this.files[0]);
                            
                        }
                        
                    }
                    
                });
                
                function showProgress() {
                    progress_image.css('display', 'inherit');
                };
                
                function onProgress(e) {
                    
                    if (e.lengthComputable) {
                        //console.log(e.loaded / e.total)
                    }
                    
                }
                
                function hideProgress() {
                    progress_image.css('display', 'none');
                }
                
                function imageIsLoaded(e) {
                    
                    //El evento nos devuelve la imagen en base64
                    user.perfil.imagen = e.target.result;
                    image.css('background-image', 'url(' + e.target.result + ')');
                };
            
                
                //Modificar datos personales
                document.getElementById('update_button').addEventListener('click', function(){
                
                    \$('#modalUpdateProfileForm').modal('show');   
                    
                    
                });
                
                document.getElementById('button-update-personal-profile').addEventListener('click', function() {
                   
                    var name = \$(\"#nombre_usuario\").val();
                    var desc = \$('#descripcion_usuario').val();
                    var gust = \$('#gustos_usuario').val();
                    
                    //Almacenamos la informacion el el objeto del usuario y cargamos la informacion en el DOM
                    user.perfil.nombre         = name;
                    user.perfil.descripcion    = desc;
                    user.perfil.gustos         = gust;  
                    
                    \$('#text-username').text(name);
                    \$('#text-descripcion').text(wordWrap(desc, 70));
                    \$('#text-gustos').text(wordWrap(gust, 70));
                    
                    \$('#modalUpdateProfileForm').modal('hide');
                });
                
                //Modificar perfil
                document.getElementById('save-button').addEventListener('click', function(){
                   
                   
                   var url_api   = \"";
            // line 635
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("put_all_request", array("className" => "perfil-usuario", "id" => $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "id", array()))), "html", null, true);
            echo "\";
                   var token     = \"";
            // line 636
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view"))), "html", null, true);
            echo "\";
                   
                   var data_perfil = { \"id\": user.perfil.id, \"nombre\": user.perfil.nombre, \"descripcion\": user.perfil.descripcion, 
                                       \"gustos\": user.perfil.gustos, \"imagen\": user.perfil.imagen};
                   \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: 'PUT',
                        data: data_perfil,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(response.data);
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   location.reload(true); 
                                });
                            }
                        }
                    });
                   
                }, false);
                
            });
            
            
            
            
            function wordWrap(str, maxWidth) {
                var newLineStr = \"\\n\"; done = false; res = '';
                do {                    
                    found = false;
                    // Inserts new line at first whitespace of the line
                    for (i = maxWidth - 1; i >= 0; i--) {
                        if (testWhite(str.charAt(i))) {
                            res = res + [str.slice(0, i), newLineStr].join('');
                            str = str.slice(i + 1);
                            found = true;
                            break;
                        }
                    }
                    // Inserts new line at maxWidth position, the word is too long to wrap
                    if (!found) {
                        res += [str.slice(0, maxWidth), newLineStr].join('');
                        str = str.slice(maxWidth);
                    }
            
                    if (str.length < maxWidth)
                        done = true;
                } while (!done);
            
                return res + str;
            }
            
            function testWhite(x) {
                var white = new RegExp(/^\\s\$/);
                return white.test(x.charAt(0));
            };
            
        </script>
    
    ";
        } else {
            // line 708
            echo "    
        <script src=\"";
            // line 709
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.barrating.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 710
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 711
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment-timezone.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function(){
            
                var url_api    = \"";
            // line 716
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_all_request", array("className" => "comentario"));
            echo "\";
                var my_user_id = parseInt(\"";
            // line 717
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_me"]) ? $context["user_me"] : $this->getContext($context, "user_me")), "perfil", array()), "id", array()), "html", null, true);
            echo "\");
                var token      = \"";
            // line 718
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getTokenUser((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view"))), "html", null, true);
            echo "\";
                var comentario = {};
                    
                document.getElementById(\"comment-button\").addEventListener('click', function(){
                    
                    comentario[\"puntuacion\"] = 1;
                    
                    \$('#puntuacion').barrating({
                        theme: 'fontawesome-stars',
                        onSelect: function(value, text, event) {
                            comentario[\"puntuacion\"] = value;
                        }
                    });
                    
                    \$('#centralModalComment').modal('show');
                        
                });
                
                document.getElementById(\"cancelar_comentario\").addEventListener('click', function(){
                   
                    \$('#centralModalComment').modal('hide');
                });
                
                document.getElementById(\"insertar_comentario\").addEventListener('click', function(){
                   
                   //Calculamos la hora teniendo en cuenta las franjas horarias
                    var dateServer                  = \"";
            // line 744
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getDateFromServer(), "html", null, true);
            echo "\";
                    var timezone                    = moment.tz.guess();
                    var dateComentario              = moment.tz(dateServer, timezone).format();
                    
                    comentario[\"valoracion\"]        = \$('#valoracion').val();
                    comentario[\"usuarioDa\"]         = my_user_id;
                    comentario[\"usuarioRecibe\"]     = parseInt(\"";
            // line 750
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "id", array()), "html", null, true);
            echo "\"); 
                    comentario[\"fechaComentario\"]   = dateComentario;
                    
                    \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: 'POST',
                        data: comentario,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(\"Proceso realizado correctamente\");
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   location.reload(true); 
                                });
                            }
                        }
                    });
                    
                    \$('#centralModalComment').modal('hide');
                });
                
            });
            
        </script>
    ";
        }
        // line 787
        echo "    
";
        
        $__internal_7c96ff4c20dd2fb5aa359d3ff135fbf048a89674514fb55d45d509e6e58c4d8d->leave($__internal_7c96ff4c20dd2fb5aa359d3ff135fbf048a89674514fb55d45d509e6e58c4d8d_prof);

        
        $__internal_9fd0feef8324ec260ab905a5200f922531d1c6dc5d1302311a3f38ae1b6cee17->leave($__internal_9fd0feef8324ec260ab905a5200f922531d1c6dc5d1302311a3f38ae1b6cee17_prof);

    }

    public function getTemplateName()
    {
        return ":profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1132 => 787,  1092 => 750,  1083 => 744,  1054 => 718,  1050 => 717,  1046 => 716,  1038 => 711,  1034 => 710,  1030 => 709,  1027 => 708,  952 => 636,  948 => 635,  816 => 506,  808 => 500,  806 => 499,  801 => 497,  798 => 496,  789 => 495,  778 => 492,  776 => 491,  773 => 490,  764 => 489,  710 => 444,  702 => 439,  675 => 415,  666 => 409,  657 => 403,  561 => 309,  555 => 305,  545 => 300,  542 => 299,  540 => 298,  537 => 297,  518 => 284,  511 => 280,  505 => 277,  501 => 276,  489 => 267,  486 => 266,  481 => 264,  476 => 261,  470 => 258,  466 => 256,  464 => 255,  452 => 248,  449 => 247,  447 => 246,  444 => 245,  439 => 243,  436 => 242,  432 => 241,  429 => 240,  426 => 239,  424 => 238,  401 => 218,  398 => 217,  395 => 216,  393 => 215,  375 => 199,  360 => 190,  355 => 187,  351 => 185,  344 => 183,  340 => 182,  337 => 181,  335 => 180,  332 => 179,  329 => 178,  322 => 176,  318 => 175,  314 => 174,  308 => 170,  305 => 169,  303 => 168,  299 => 167,  285 => 156,  279 => 153,  273 => 149,  268 => 148,  266 => 147,  247 => 130,  241 => 126,  234 => 121,  232 => 120,  218 => 109,  205 => 98,  196 => 95,  193 => 94,  189 => 93,  174 => 81,  158 => 68,  154 => 67,  128 => 43,  122 => 41,  119 => 40,  108 => 32,  103 => 29,  101 => 28,  86 => 15,  77 => 14,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  49 => 7,  39 => 1,  36 => 4,  34 => 3,  11 => 1,);
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

    <main id=\"mainContainer\">
        
        <div class=\"container\">
            
            <section id=\"productDetails\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        
                        <div id=\"carousel-thumb\" class=\"carousel slide carousel-fade carousel-thumbnails click-eat-carousel profile\" data-ride=\"carousel\">

                            <div id=\"div_image_user_profile\" class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active click-eat-carousel profile\">
                                    {% if isMe %}
                                    
                                        <label for=\"file-input-profile\" class=\"full\">
                                            <div id=\"image-profile-user\" class=\"background-image-responsive full\" 
                                            style=\"background-image:url({{asset(\"uploads/PerfilUsuario/#{user_view.perfil.imagen}\")}})\"></div>
                                            
                                        </label>
                                    
                                        <input id=\"file-input-profile\" type=\"file\" style=\"display:none\" accept=\"image/*\"/>
                                        
                                       
                                    {% else %}
                                        
                                        <img class=\"background-image-responsive full\" style=\"background-image:url({{asset(\"uploads/PerfilUsuario/#{user_view.perfil.imagen}\")}})\">
                                        
                                    {% endif %}    
                                </div>
                                
    
                                <div id=\"progress_image\" class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            
                            
                            <!--<a class=\"carousel-control-prev\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>-->
                            

                        </div>
                        
                    </div>
                    <div class=\"col-lg-7\">
                        <h2 class=\"h2-responsive center-on-small-only product-name\"><strong>{{user_view.perfil.nombre}}</strong></h2>
                        <h4 class=\"h4-responsive center-on-small-only\"><span class=\"grey-text\"><small id=\"text-username\">{{user_view.username}}</small></span></h4>

                       
                    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <h5 class=\"mb-0\"> Descripcion <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseOne\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                <div id=\"text-descripcion\" class=\"card-block block-text-ellipsis\">
                                    {{user_view.perfil.descripcion}}
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    <h5 class=\"mb-0\"> Domicilios <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                {% for domicilio in user_view.perfil.domicilios %}
                                    
                                    <div class=\"card-block\">{{domicilio.direccion}}</div>
                                        
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingThree\">
                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    <h5 class=\"mb-0\"> Mis gustos <i class=\"fa fa-angle-down rotate-icon\"></i>
                                </h5>
                                </a>
                            </div>
                            <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                <div id=\"text-gustos\" class=\"card-block block-text-ellipsis\">
                                    {{user_view.perfil.gustos}}
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col-md-12 center-on-small-only text-md-right\">
                                
                                {%if isMe %}
                                
                                    <button id=\"update_button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Modificar</button>
                                    <button id=\"save-button\" class=\"btn btn-primary\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> Guardar </button>
                                    
                                {% else %}
                                
                                    <button id=\"comment-button\" class=\"btn btn-primary\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> Valorar </button>
                                    
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>

            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Comentarios</h2>
            </div>

            <!-- Comentarios -->
            <section id=\"reviews\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% set comentarios = user_view.perfil.comentariosRecibidos %}
                        {% for comentario in comentarios %}
                            <div class=\"row\">
                                
                                <div class=\"col-md-2 col-sm-3\">
                                
                                    <a class=\"waves-light waves-effect waves-light\" href=\"{{  path('profile_user', {'user': comentario.usuarioDa.usuario.id}) }}\">
                                        
                                        <div class=\"image-review rounded-circle background-image-responsive\" 
                                             style=\"background-image: url({{asset(\"uploads/PerfilUsuario/#{comentario.usuarioDa.imagen}\")}})\">
                                            
                                            
                                        </div>
                                    </a>
                                
                                </div>
                                
                                <div class=\"col-md-10 col-sm-9\">
                                    
                                    <div>
                                        <h4>{{comentario.UsuarioDa.nombre}}</h4>
                                        {%set rating = comentario.puntuacion | round(0,'ceil') %}
                                        {%set diff   = 5 - rating %}
                                        
                                        
                                        <ul class=\"rating inline-ul\">
                                            
                                            {% if rating > 0 %}     
                                                {% for i in 1..rating %}
                                                    <li><i class=\"fa fa-star amber-text\"></i></li>
                                                {% endfor %}
                                            {% endif %}
                                            
                                            {% if diff >= 1 %}
                                            
                                                {% for i in 1..diff %}
                                                    <li><i class=\"fa fa-star gray-text-star\"></i></li>
                                                {% endfor %}
                                                
                                            {% endif %}
                                        </ul>
                                        
                                        <p class=\"block-text-ellipsis\">
                                            {{comentario.valoracion}}
                                        </p>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        {% endfor %}
                        

                    </div>
                </div>
            </section>
            <!-- /.Product Reviews -->

            <div class=\"divider-new\">
                <h2 class=\"h2-responsive\">Publicaciones</h2>
            </div>

            <section id=\"related\">

                <!--Carousel Wrapper-->
                <div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item click-eat-carousel\" data-ride=\"carousel\">

                    {% set publicaciones = user_view.publicaciones %}
                    {% set slider_number = (publicaciones|length / 3) | round(0, 'ceil') %}
                    
                    {% if slider_number > 0 %}    
                    
                        <!--Controls-->
                        <div class=\"controls-top\">
                            <a class=\"btn-floating btn-small primary-color\" href=\"#multi-item-example\" data-slide=\"prev\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a class=\"btn-floating btn-small primary-color\" href=\"#multi-item-example\" data-slide=\"next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                        <!--/.Controls-->
    
                        <!--Indicators-->
                        <ol class=\"carousel-indicators\">
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"0\" class=\"active\"></li>
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"1\"></li>
                            <li class=\"primary-color\" data-target=\"#multi-item-example\" data-slide-to=\"2\"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class=\"carousel-inner\" role=\"listbox\">
    
                            {% set min_index = 0 %}
                            {% set max_index = min_index + 3 %}
                                
                            {% for i in 1..slider_number %}
                            
                                <div class=\"carousel-item {{ i == 1 ? 'active' : '' }} click-eat-carousel\">
                                
                                    {# Calculamos los indices para los elementos del carousel #}    
                                    {% set max_index = max_index > publicaciones | length ? publicaciones | length : max_index %}
                                    
                                    {% for publicacion in publicaciones|slice(min_index, max_index) %}    
                                    
                                        <div class=\" col-lg-4 col-sm-12 mb-1\">
                                            <div class=\"card card-cascade narrower click-eat-card profile\">
                                        
                                                <div class=\"view overlay hm-white-slight\">
                                                    
                                                    {% if publicacion.foto is empty %}
                            
                                                        <div class=\"eat-card-image background-image-responsive\"
                                                             style=\"background-image:url({{asset(\"uploads/Publicacion/publicacion-image-default.jpg\")}})\">
                                                             
                                                    {% else %}
                                                    
                                                        
                                                        <div class=\"eat-card-image background-image-responsive\" 
                                                             style=\"background-image:url({{asset(\"uploads/Publicacion/#{publicacion.foto}\")}})\">
                                                    {% endif %}
                                                    
                                                        <a href=\"{{ path('see_or_update_publicacion', {'publicacion': publicacion.id }) }}\">
                                                            <div class=\"mask waves-light\"></div>
                                                        </a>
                                                    </div> 
                                                    
                                                </div>
                                                            
                                                <div class=\"card-block text-center\">
                                                             
                                                    <a href=\"#\" class=\"text-muted\"><h5>{{publicacion.titulo}}</h5></a>
                                                    <h4 class=\"card-title\"><strong><a href=\"#\">{{publicacion.titulo}}</a></strong></h4>
                                        
                                                    <p class=\"card-text block-text-ellipsis\">
                                                         {{publicacion.descripcion}}
                                                    </p>
                                        
                                                    <div class=\"card-footer\">
                                                        <span class=\"left\">{{publicacion.precio}}€</span>
                                                        <span class=\"right\">
                                                            <a class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick Look\"><i className=\"fa fa-calendar-check-o\"></i></a>
                                                            <a class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add to Wishlist\"><i className=\"fa fa-clock-o\"></i></a>
                                                        </span>
                                                    </div>
                                        
                                                </div>
                                        
                                            </div>
                                        </div>
                                    
                                    {% endfor %}
                                    
                                    {% set min_index = min_index + 3 %}
                                    {% set max_index = min_index + 3 %}
                                
                                
                                </div>
                            
                            {% endfor %}
                           
                        </div>
                        <!--/.Slides-->
                    {% endif %}
                </div>
                <!--/.Carousel Wrapper-->


            </section>
        </div>
        <!-- /.Main Container -->
    </main>

    <!-- Dialogs -->
    
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
                            Perfil actualizado correctamente
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
                        <p id=\"error-text\">Ha ocurrido un error durante la actualizacion del perfil</p>
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

    <!-- Editar campos -->
    <div class=\"modal fade\" id=\"modalUpdateProfileForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header light-blue darken-3 white-text form-header index\">
                    <button type=\"button\" class=\"close waves-effect waves-light\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"title\"><i class=\"fa fa-pencil\"></i> Editar Datos Personales </h4>
                </div>
                
                <!--Body-->
                <div class=\"modal-body mb-0\">
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-user prefix\"></i>
                        <input type=\"text\" id=\"nombre_usuario\" class=\"form-control\" value=\"{{user_view.perfil.nombre}}\">
                        <label for=\"nombre_usuario\">Nombre</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-list prefix\"></i>
                        <textarea type=\"text\" id=\"descripcion_usuario\" class=\"md-textarea mb-0 profile\" value=\"{{user_view.perfil.descripcion}}\"></textarea>
                        <label for=\"descripcion_usuario\">Descripcion</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-cutlery prefix\"></i>
                        <textarea type=\"text\" id=\"gustos_usuario\" class=\"md-textarea mb-0 profile\" value=\"{{user_view.perfil.gustos}}\"></textarea>
                        <label for=\"gustos_usuario\">Mis gustos</label>
                    </div>
    
                    <div class=\"text-center mt-1-half\">
                        <button id=\"button-update-personal-profile\" class=\"btn btn-primary waves-effect waves-light\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- Valoracion Modal -->
    <!--Modal: Login with Avatar Form-->
    <div class=\"modal fade\" id=\"centralModalComment\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog cascading-modal modal-avatar\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content\">
    
                <!--Header-->
                <div class=\"modal-header\">
                    <div class=\"background-image-responsive rounded-circle comment-image\" 
                         style=\"background-image: url({{asset(\"uploads/PerfilUsuario/#{user_me.perfil.imagen}\")}})\"></div>
                </div>
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
    
                    <h5 class=\"mt-1 mb-2\">{{user_me.perfil.nombre}}</h5>
    
                    <div class=\"row ml-0 mr-0 text-align-left\">
                        
                        <div class=\"col-md-3\">
                            <span class=\"rating-form\">Puntuacion</span>
                        </div>
                        <div class=\"col-md-9\">
                            
                            <select id=\"puntuacion\">
                              <option value=\"1\" selected=\"selected\">1</option>
                              <option value=\"2\">2</option>
                              <option value=\"3\">3</option>
                              <option value=\"4\">4</option>
                              <option value=\"5\">5</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class=\"row ml-0 mr-0 text-align-left\">
                        
                        <div class=\"col-md-12\">
                            <span for=\"valoracion\" class=\"rating-form\">Valoracion</span>
                        </div>
                        <div class=\"col-md-12\">
                            <textarea type=\"text\" id=\"valoracion\" class=\"md-textarea mb-0 profile\"></textarea>
                        </div>
                    </div>
    
                    
                    
                    <div class=\"text-center mt-15\">
                        <button id=\"insertar_comentario\" class=\"btn btn-primary\">Aceptar <i class=\"fa fa-check ml-1\"></i></button>
                        <button id=\"cancelar_comentario\" class=\"btn btn-primary\">Cancelar <i class=\"fa fa-close ml-1\"></i></button>
                    </div>
                </div>
    
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login with Avatar Form-->

{% endblock %}

{% block footer %}

    {% include 'secondary_templates/footer.html.twig' %}
    
{% endblock %}

{% block javascripts %}

    {{parent()}}
    
    {% if isMe == 1 %}
    
        <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                
                //Usuario completo cargado en javascript
                var user         = {{ user_view.toArray()|json_encode|raw }};
                    
                var file_input      = \$(\"#file-input-profile\");
                var div_image       = \$(\"#div_image_user_profile\");
                var image           = \$(\"#image-profile-user\");
                var progress_image  = \$(\"#progress_image\");
                var bar_dialog      = \$('div.progress-bar');
                
                if ( bar_dialog.hasClass('bg-danger') ) bar_dialog.removeClass('bg-danger');
                
                file_input.change(function() {
                    
                    if (this.files && this.files[0]) {
                        
                        var fileType = this.files[0][\"type\"];
                        var ValidImageTypes = [\"image/gif\", \"image/jpeg\", \"image/png\"];
                        if (\$.inArray(fileType, ValidImageTypes) < 0) {
                           
                            // invalid file type code goes here.
                            progress_image.css('display', 'inherit');
                            bar_dialog.addClass(\"bg-danger\");
                            bar_dialog.css('width', '100%');
                            
                        }
                        else {
                            
                            var reader     = new FileReader();
                            /*var xhr        = new XMLHttpRequest();
                            var formData   = new FormData();
                            
                            formData.append(\"profile\", file);
                            xhr.addEventListener('progress', function(e){
                               
                               var done  = e.position || e.loaded;
                               var total = e.totalSize || e.total;
                               
                            });
                            
                            if ( xhr.upload ) {
                                
                                xhr.upload.onprogress = function(e) {
                                     if (e.lengthComputable && e) {
                                         
                                          p = (e.loaded / e.total)*100;
                                          
                                     }
                                }
                                
                                xhr.upload.addEventListener('loadend', function(e) {
                                    user.perfil.imagen = e.target.result;
                                    image.css('background-image', 'url(' + e.target.result + ')');
                                });
                            }
                            xhr.onreadystatechange = function(e) {
                                if ( this.readyState == 4 ) {
                                    
                                    console.log('xhr.upload complete');
                                }
                            }
                            xhr.open('POST', window.location.href, true);
                            xhr.setRequestHeader(\"Content-Type\", \"multipart/form-data\");
                            xhr.send(formData);*/
                            reader.onloadstart    = showProgress;
                            reader.onprogress     = onProgress;
                            reader.onloadend      = hideProgress;
                            reader.onload         = imageIsLoaded;
                        
                            reader.readAsDataURL(this.files[0]);
                            
                        }
                        
                    }
                    
                });
                
                function showProgress() {
                    progress_image.css('display', 'inherit');
                };
                
                function onProgress(e) {
                    
                    if (e.lengthComputable) {
                        //console.log(e.loaded / e.total)
                    }
                    
                }
                
                function hideProgress() {
                    progress_image.css('display', 'none');
                }
                
                function imageIsLoaded(e) {
                    
                    //El evento nos devuelve la imagen en base64
                    user.perfil.imagen = e.target.result;
                    image.css('background-image', 'url(' + e.target.result + ')');
                };
            
                
                //Modificar datos personales
                document.getElementById('update_button').addEventListener('click', function(){
                
                    \$('#modalUpdateProfileForm').modal('show');   
                    
                    
                });
                
                document.getElementById('button-update-personal-profile').addEventListener('click', function() {
                   
                    var name = \$(\"#nombre_usuario\").val();
                    var desc = \$('#descripcion_usuario').val();
                    var gust = \$('#gustos_usuario').val();
                    
                    //Almacenamos la informacion el el objeto del usuario y cargamos la informacion en el DOM
                    user.perfil.nombre         = name;
                    user.perfil.descripcion    = desc;
                    user.perfil.gustos         = gust;  
                    
                    \$('#text-username').text(name);
                    \$('#text-descripcion').text(wordWrap(desc, 70));
                    \$('#text-gustos').text(wordWrap(gust, 70));
                    
                    \$('#modalUpdateProfileForm').modal('hide');
                });
                
                //Modificar perfil
                document.getElementById('save-button').addEventListener('click', function(){
                   
                   
                   var url_api   = \"{{ path('put_all_request', {'className': 'perfil-usuario', 'id': user_view.perfil.id }) }}\";
                   var token     = \"{{ getTokenUser(user_view) }}\";
                   
                   var data_perfil = { \"id\": user.perfil.id, \"nombre\": user.perfil.nombre, \"descripcion\": user.perfil.descripcion, 
                                       \"gustos\": user.perfil.gustos, \"imagen\": user.perfil.imagen};
                   \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: 'PUT',
                        data: data_perfil,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(response.data);
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   location.reload(true); 
                                });
                            }
                        }
                    });
                   
                }, false);
                
            });
            
            
            
            
            function wordWrap(str, maxWidth) {
                var newLineStr = \"\\n\"; done = false; res = '';
                do {                    
                    found = false;
                    // Inserts new line at first whitespace of the line
                    for (i = maxWidth - 1; i >= 0; i--) {
                        if (testWhite(str.charAt(i))) {
                            res = res + [str.slice(0, i), newLineStr].join('');
                            str = str.slice(i + 1);
                            found = true;
                            break;
                        }
                    }
                    // Inserts new line at maxWidth position, the word is too long to wrap
                    if (!found) {
                        res += [str.slice(0, maxWidth), newLineStr].join('');
                        str = str.slice(maxWidth);
                    }
            
                    if (str.length < maxWidth)
                        done = true;
                } while (!done);
            
                return res + str;
            }
            
            function testWhite(x) {
                var white = new RegExp(/^\\s\$/);
                return white.test(x.charAt(0));
            };
            
        </script>
    
    {% else %}
    
        <script src=\"{{asset('js/jquery.barrating.min.js')}}\"></script>
        <script src=\"{{asset('js/moment.js')}}\"></script>
        <script src=\"{{asset('js/moment-timezone.js')}}\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function(){
            
                var url_api    = \"{{ path('post_all_request', {'className': 'comentario'}) }}\";
                var my_user_id = parseInt(\"{{user_me.perfil.id}}\");
                var token      = \"{{ getTokenUser(user_view) }}\";
                var comentario = {};
                    
                document.getElementById(\"comment-button\").addEventListener('click', function(){
                    
                    comentario[\"puntuacion\"] = 1;
                    
                    \$('#puntuacion').barrating({
                        theme: 'fontawesome-stars',
                        onSelect: function(value, text, event) {
                            comentario[\"puntuacion\"] = value;
                        }
                    });
                    
                    \$('#centralModalComment').modal('show');
                        
                });
                
                document.getElementById(\"cancelar_comentario\").addEventListener('click', function(){
                   
                    \$('#centralModalComment').modal('hide');
                });
                
                document.getElementById(\"insertar_comentario\").addEventListener('click', function(){
                   
                   //Calculamos la hora teniendo en cuenta las franjas horarias
                    var dateServer                  = \"{{ getDateFromServer() }}\";
                    var timezone                    = moment.tz.guess();
                    var dateComentario              = moment.tz(dateServer, timezone).format();
                    
                    comentario[\"valoracion\"]        = \$('#valoracion').val();
                    comentario[\"usuarioDa\"]         = my_user_id;
                    comentario[\"usuarioRecibe\"]     = parseInt(\"{{user_view.perfil.id}}\"); 
                    comentario[\"fechaComentario\"]   = dateComentario;
                    
                    \$.ajax({
                        url: url_api,
                        headers: {'Authorization': 'Bearer ' + token},
                        type: 'POST',
                        data: comentario,
                        success: function (response) {
                            
                            if ( response.error != 0 ) {
                                
                                //Dialogo modal
                                \$('#error-text').text(response.data);
                                \$('#centralModalDanger').modal('show');
                                
                            }
                            else {
                                
                                //Dialogo OK
                                \$('#success-text').text(\"Proceso realizado correctamente\");
                                \$('#centralModalSuccess').modal('show');
                                \$('#centralModalSuccess').on('hidden.bs.modal', function(){
                                   
                                   location.reload(true); 
                                });
                            }
                        }
                    });
                    
                    \$('#centralModalComment').modal('hide');
                });
                
            });
            
        </script>
    {% endif %}
    
{% endblock%}", ":profile:profile.html.twig", "/home/ubuntu/workspace/app/Resources/views/profile/profile.html.twig");
    }
}

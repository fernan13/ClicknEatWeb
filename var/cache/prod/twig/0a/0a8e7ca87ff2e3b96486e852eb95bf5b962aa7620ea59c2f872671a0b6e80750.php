<?php

/* profile/profile.html.twig */
class __TwigTemplate_740856d5e28f1a417716bbaebc5e64947a5ac9f37e25c5b555915724d59704c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
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
        $__internal_fffee5ed9bf1f004c3adeb9f7213e535bd5ff12badf8ff8a01b86041b1cb8dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffee5ed9bf1f004c3adeb9f7213e535bd5ff12badf8ff8a01b86041b1cb8dbb->enter($__internal_fffee5ed9bf1f004c3adeb9f7213e535bd5ff12badf8ff8a01b86041b1cb8dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        // line 3
        if ((array_key_exists("logged", $context) == false)) {
            // line 4
            $context["logged"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "logged"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffee5ed9bf1f004c3adeb9f7213e535bd5ff12badf8ff8a01b86041b1cb8dbb->leave($__internal_fffee5ed9bf1f004c3adeb9f7213e535bd5ff12badf8ff8a01b86041b1cb8dbb_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f47b8edbd55b38a77444acc0c734c1ca3620ee004970dfd12cd7f9c74ff0fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47b8edbd55b38a77444acc0c734c1ca3620ee004970dfd12cd7f9c74ff0fd0->enter($__internal_7f47b8edbd55b38a77444acc0c734c1ca3620ee004970dfd12cd7f9c74ff0fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
    ";
        // line 9
        $context["vars"] = array("logged" => (isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")));
        // line 10
        echo "    ";
        $this->loadTemplate("secondary_templates/header.html.twig", "profile/profile.html.twig", 10)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        // line 11
        echo "    
";
        
        $__internal_7f47b8edbd55b38a77444acc0c734c1ca3620ee004970dfd12cd7f9c74ff0fd0->leave($__internal_7f47b8edbd55b38a77444acc0c734c1ca3620ee004970dfd12cd7f9c74ff0fd0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_bacc40b3660503e4ce0aa0265d37ff20d85dde05c06147ebb2912253a322851d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacc40b3660503e4ce0aa0265d37ff20d85dde05c06147ebb2912253a322851d->enter($__internal_bacc40b3660503e4ce0aa0265d37ff20d85dde05c06147ebb2912253a322851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            <a alt=\"Cambiar imagen\">
                                                
                                                <div id=\"image-profile-user\" class=\"background-image-responsive full\" 
                                                    style=\"background-image:url(";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "imagen", array()))), "html", null, true);
            echo ")\"></div>
                                            </a>
                                            
                                            
                                        </label>
                                    
                                        <input id=\"file-input-profile\" type=\"file\" style=\"display:none\" accept=\"image/*\"/>
                                        
                                       
                                    ";
        } else {
            // line 44
            echo "                                        
                                        <img class=\"background-image-responsive full\" style=\"background-image:url(";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "imagen", array()))), "html", null, true);
            echo ")\">
                                        
                                    ";
        }
        // line 47
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
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "nombre", array()), "html", null, true);
        echo "</strong></h2>
                        <h4 class=\"h4-responsive center-on-small-only\"><span class=\"grey-text\"><small id=\"text-username\">";
        // line 72
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
        // line 85
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
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "domicilios", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 98
            echo "                                    
                                    <div class=\"card-block\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "direccion", array()), "html", null, true);
            echo "</div>
                                        
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
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
        // line 113
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
        // line 124
        if ((isset($context["isMe"]) ? $context["isMe"] : $this->getContext($context, "isMe"))) {
            // line 125
            echo "                                
                                    <button id=\"update_button\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Modificar</button>
                                    <button id=\"save-button\" class=\"btn btn-primary\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> Guardar </button>
                                    
                                ";
        } else {
            // line 130
            echo "                                
                                    <button id=\"comment-button\" class=\"btn btn-primary\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> Valorar </button>
                                    
                                ";
        }
        // line 134
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
        // line 151
        $context["comentarios"] = $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "comentariosRecibidos", array());
        // line 152
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 153
            echo "                            <div class=\"row\">
                                
                                <div class=\"col-md-2 col-sm-3\">
                                
                                    <a class=\"waves-light waves-effect waves-light\" href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_user", array("user" => $this->getAttribute($this->getAttribute($this->getAttribute($context["comentario"], "usuarioDa", array()), "usuario", array()), "id", array()))), "html", null, true);
            echo "\">
                                        
                                        <div class=\"image-review rounded-circle background-image-responsive\" 
                                             style=\"background-image: url(";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute($context["comentario"], "usuarioDa", array()), "imagen", array()))), "html", null, true);
            echo ")\">
                                            
                                            
                                        </div>
                                    </a>
                                
                                </div>
                                
                                <div class=\"col-md-10 col-sm-9\">
                                    
                                    <div>
                                        <h4>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comentario"], "UsuarioDa", array()), "nombre", array()), "html", null, true);
            echo "</h4>
                                        ";
            // line 172
            $context["rating"] = twig_round($this->getAttribute($context["comentario"], "puntuacion", array()), 0, "ceil");
            // line 173
            echo "                                        ";
            $context["diff"] = (5 - (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")));
            // line 174
            echo "                                        
                                        
                                        <ul class=\"rating inline-ul\">
                                            
                                            ";
            // line 178
            if (((isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")) > 0)) {
                echo "     
                                                ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 180
                    echo "                                                    <li><i class=\"fa fa-star amber-text\"></i></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                                            ";
            }
            // line 183
            echo "                                            
                                            ";
            // line 184
            if (((isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff")) >= 1)) {
                // line 185
                echo "                                            
                                                ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 187
                    echo "                                                    <li><i class=\"fa fa-star gray-text-star\"></i></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                                                
                                            ";
            }
            // line 191
            echo "                                        </ul>
                                        
                                        <p class=\"block-text-ellipsis\">
                                            ";
            // line 194
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
        // line 203
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
        // line 219
        $context["publicaciones"] = $this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "publicaciones", array());
        // line 220
        echo "                    ";
        $context["slider_number"] = twig_round((twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))) / 3), 0, "ceil");
        // line 221
        echo "                    
                    ";
        // line 222
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
            // line 242
            $context["min_index"] = 0;
            // line 243
            echo "                            ";
            $context["max_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
            // line 244
            echo "                                
                            ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["slider_number"]) ? $context["slider_number"] : $this->getContext($context, "slider_number"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 246
                echo "                            
                                <div class=\"carousel-item ";
                // line 247
                echo ((($context["i"] == 1)) ? ("active") : (""));
                echo " click-eat-carousel\">
                                
                                    ";
                // line 249
                echo "    
                                    ";
                // line 250
                $context["max_index"] = ((((isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index")) > twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones"))))) ? (twig_length_filter($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")))) : ((isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index"))));
                // line 251
                echo "                                    
                                    ";
                // line 252
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")), (isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")), (isset($context["max_index"]) ? $context["max_index"] : $this->getContext($context, "max_index"))));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    echo "    
                                    
                                        <div class=\" col-lg-4 col-sm-12 mb-1\">
                                            <div class=\"card card-cascade narrower click-eat-card profile\">
                                        
                                                <div class=\"view overlay hm-white-slight\">
                                                    
                                                    ";
                    // line 259
                    if (twig_test_empty($this->getAttribute($context["publicacion"], "foto", array()))) {
                        // line 260
                        echo "                            
                                                        <div class=\"eat-card-image background-image-responsive\"
                                                             style=\"background-image:url(";
                        // line 262
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Publicacion/publicacion-image-default.jpg"), "html", null, true);
                        echo ")\">
                                                             
                                                    ";
                    } else {
                        // line 265
                        echo "                                                    
                                                        
                                                        <div class=\"eat-card-image background-image-responsive\" 
                                                             style=\"background-image:url(";
                        // line 268
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/Publicacion/" . $this->getAttribute($context["publicacion"], "foto", array()))), "html", null, true);
                        echo ")\">
                                                    ";
                    }
                    // line 270
                    echo "                                                    
                                                        <a href=\"";
                    // line 271
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("see_or_update_publicacion", array("publicacion" => $this->getAttribute($context["publicacion"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <div class=\"mask waves-light\"></div>
                                                        </a>
                                                    </div> 
                                                    
                                                </div>
                                                            
                                                <div class=\"card-block text-center\">
                                                             
                                                    <a href=\"#\" class=\"text-muted\"><h5>";
                    // line 280
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                    echo "</h5></a>
                                                    <h4 class=\"card-title\"><strong><a href=\"#\">";
                    // line 281
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array()), "html", null, true);
                    echo "</a></strong></h4>
                                        
                                                    <p class=\"card-text block-text-ellipsis\">
                                                         ";
                    // line 284
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "descripcion", array()), "html", null, true);
                    echo "
                                                    </p>
                                        
                                                    <div class=\"card-footer\">
                                                        <span class=\"left\">";
                    // line 288
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
                // line 301
                echo "                                    
                                    ";
                // line 302
                $context["min_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
                // line 303
                echo "                                    ";
                $context["max_index"] = ((isset($context["min_index"]) ? $context["min_index"] : $this->getContext($context, "min_index")) + 3);
                // line 304
                echo "                                
                                
                                </div>
                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "                           
                        </div>
                        <!--/.Slides-->
                    ";
        }
        // line 313
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
        // line 407
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "nombre", array()), "html", null, true);
        echo "\">
                        <label for=\"nombre_usuario\">Nombre</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-list prefix\"></i>
                        <textarea type=\"text\" id=\"descripcion_usuario\" class=\"md-textarea mb-0 profile\">";
        // line 413
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "descripcion", array()), "html", null, true);
        echo "</textarea>
                        <label for=\"descripcion_usuario\">Descripcion</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-cutlery prefix\"></i>
                        <textarea type=\"text\" id=\"gustos_usuario\" class=\"md-textarea mb-0 profile\">";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "gustos", array()), "html", null, true);
        echo "</textarea>
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
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/PerfilUsuario/" . $this->getAttribute($this->getAttribute((isset($context["user_me"]) ? $context["user_me"] : $this->getContext($context, "user_me")), "perfil", array()), "imagen", array()))), "html", null, true);
        echo ")\"></div>
                </div>
                <!--Body-->
                <div class=\"modal-body text-center mb-1\">
    
                    <h5 class=\"mt-1 mb-2\">";
        // line 448
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
        
        $__internal_bacc40b3660503e4ce0aa0265d37ff20d85dde05c06147ebb2912253a322851d->leave($__internal_bacc40b3660503e4ce0aa0265d37ff20d85dde05c06147ebb2912253a322851d_prof);

    }

    // line 493
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8e6cad99af753ea51e83b0f0689286af6575c48c085e59545aa6bdb6d44929b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6cad99af753ea51e83b0f0689286af6575c48c085e59545aa6bdb6d44929b3->enter($__internal_8e6cad99af753ea51e83b0f0689286af6575c48c085e59545aa6bdb6d44929b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 494
        echo "
    ";
        // line 495
        $this->loadTemplate("secondary_templates/footer.html.twig", "profile/profile.html.twig", 495)->display($context);
        // line 496
        echo "    
";
        
        $__internal_8e6cad99af753ea51e83b0f0689286af6575c48c085e59545aa6bdb6d44929b3->leave($__internal_8e6cad99af753ea51e83b0f0689286af6575c48c085e59545aa6bdb6d44929b3_prof);

    }

    // line 499
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e55b1dbf64248ea8dc94d27ef9317c2eb9cfbf5d89afd7992991a300845f2c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55b1dbf64248ea8dc94d27ef9317c2eb9cfbf5d89afd7992991a300845f2c92->enter($__internal_e55b1dbf64248ea8dc94d27ef9317c2eb9cfbf5d89afd7992991a300845f2c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 500
        echo "
    ";
        // line 501
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    ";
        // line 503
        if (((isset($context["isMe"]) ? $context["isMe"] : $this->getContext($context, "isMe")) == 1)) {
            // line 504
            echo "    
        <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                
                //Usuario completo cargado en javascript
                var user         = ";
            // line 510
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
            // line 639
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("put_all_request", array("className" => "perfil-usuario", "id" => $this->getAttribute($this->getAttribute((isset($context["user_view"]) ? $context["user_view"] : $this->getContext($context, "user_view")), "perfil", array()), "id", array()))), "html", null, true);
            echo "\";
                   var token     = \"";
            // line 640
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
            // line 712
            echo "    
        <script src=\"";
            // line 713
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.barrating.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 714
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 715
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment-timezone.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">
            
            \$(document).ready(function(){
            
                var url_api    = \"";
            // line 720
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_all_request", array("className" => "comentario"));
            echo "\";
                var my_user_id = parseInt(\"";
            // line 721
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_me"]) ? $context["user_me"] : $this->getContext($context, "user_me")), "perfil", array()), "id", array()), "html", null, true);
            echo "\");
                var token      = \"";
            // line 722
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
            // line 748
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtensionsTwig')->getDateFromServer(), "html", null, true);
            echo "\";
                    var timezone                    = moment.tz.guess();
                    var dateComentario              = moment.tz(dateServer, timezone).format();
                    
                    comentario[\"valoracion\"]        = \$('#valoracion').val();
                    comentario[\"usuarioDa\"]         = my_user_id;
                    comentario[\"usuarioRecibe\"]     = parseInt(\"";
            // line 754
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
        // line 791
        echo "    
";
        
        $__internal_e55b1dbf64248ea8dc94d27ef9317c2eb9cfbf5d89afd7992991a300845f2c92->leave($__internal_e55b1dbf64248ea8dc94d27ef9317c2eb9cfbf5d89afd7992991a300845f2c92_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1109 => 791,  1069 => 754,  1060 => 748,  1031 => 722,  1027 => 721,  1023 => 720,  1015 => 715,  1011 => 714,  1007 => 713,  1004 => 712,  929 => 640,  925 => 639,  793 => 510,  785 => 504,  783 => 503,  778 => 501,  775 => 500,  769 => 499,  761 => 496,  759 => 495,  756 => 494,  750 => 493,  699 => 448,  691 => 443,  664 => 419,  655 => 413,  646 => 407,  550 => 313,  544 => 309,  534 => 304,  531 => 303,  529 => 302,  526 => 301,  507 => 288,  500 => 284,  494 => 281,  490 => 280,  478 => 271,  475 => 270,  470 => 268,  465 => 265,  459 => 262,  455 => 260,  453 => 259,  441 => 252,  438 => 251,  436 => 250,  433 => 249,  428 => 247,  425 => 246,  421 => 245,  418 => 244,  415 => 243,  413 => 242,  390 => 222,  387 => 221,  384 => 220,  382 => 219,  364 => 203,  349 => 194,  344 => 191,  340 => 189,  333 => 187,  329 => 186,  326 => 185,  324 => 184,  321 => 183,  318 => 182,  311 => 180,  307 => 179,  303 => 178,  297 => 174,  294 => 173,  292 => 172,  288 => 171,  274 => 160,  268 => 157,  262 => 153,  257 => 152,  255 => 151,  236 => 134,  230 => 130,  223 => 125,  221 => 124,  207 => 113,  194 => 102,  185 => 99,  182 => 98,  178 => 97,  163 => 85,  147 => 72,  143 => 71,  117 => 47,  111 => 45,  108 => 44,  95 => 34,  88 => 29,  86 => 28,  71 => 15,  65 => 14,  57 => 11,  54 => 10,  52 => 9,  49 => 8,  43 => 7,  36 => 1,  33 => 4,  31 => 3,  11 => 1,);
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
                                            <a alt=\"Cambiar imagen\">
                                                
                                                <div id=\"image-profile-user\" class=\"background-image-responsive full\" 
                                                    style=\"background-image:url({{asset(\"uploads/PerfilUsuario/#{user_view.perfil.imagen}\")}})\"></div>
                                            </a>
                                            
                                            
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
                        <textarea type=\"text\" id=\"descripcion_usuario\" class=\"md-textarea mb-0 profile\">{{user_view.perfil.descripcion}}</textarea>
                        <label for=\"descripcion_usuario\">Descripcion</label>
                    </div>
    
                    <div class=\"md-form form-sm\">
                        <i class=\"fa fa-cutlery prefix\"></i>
                        <textarea type=\"text\" id=\"gustos_usuario\" class=\"md-textarea mb-0 profile\">{{user_view.perfil.gustos}}</textarea>
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
    
{% endblock%}", "profile/profile.html.twig", "/home/ubuntu/workspace/app/Resources/views/profile/profile.html.twig");
    }
}

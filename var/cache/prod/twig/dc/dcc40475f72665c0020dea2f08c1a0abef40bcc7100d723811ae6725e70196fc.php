<?php

/* form_div_layout.html.twig */
class __TwigTemplate_6d5b4ebb991e323607dc689dc3094da2028340516e5d1b21147cf3dd178e0195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_981172964914a7b9b1f6b0a389885ff93f64b758b00e26ae7ed94387f5a9d40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981172964914a7b9b1f6b0a389885ff93f64b758b00e26ae7ed94387f5a9d40d->enter($__internal_981172964914a7b9b1f6b0a389885ff93f64b758b00e26ae7ed94387f5a9d40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 151
        $this->displayBlock('number_widget', $context, $blocks);
        // line 157
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 162
        $this->displayBlock('money_widget', $context, $blocks);
        // line 166
        $this->displayBlock('url_widget', $context, $blocks);
        // line 171
        $this->displayBlock('search_widget', $context, $blocks);
        // line 176
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 181
        $this->displayBlock('password_widget', $context, $blocks);
        // line 186
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 191
        $this->displayBlock('email_widget', $context, $blocks);
        // line 196
        $this->displayBlock('range_widget', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 215
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 220
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 227
        $this->displayBlock('form_label', $context, $blocks);
        // line 249
        $this->displayBlock('button_label', $context, $blocks);
        // line 253
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 261
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        $this->displayBlock('button_row', $context, $blocks);
        // line 275
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 281
        $this->displayBlock('form', $context, $blocks);
        // line 287
        $this->displayBlock('form_start', $context, $blocks);
        // line 300
        $this->displayBlock('form_end', $context, $blocks);
        // line 307
        $this->displayBlock('form_errors', $context, $blocks);
        // line 317
        $this->displayBlock('form_rest', $context, $blocks);
        // line 324
        echo "
";
        // line 327
        $this->displayBlock('form_rows', $context, $blocks);
        // line 333
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 349
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 363
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_981172964914a7b9b1f6b0a389885ff93f64b758b00e26ae7ed94387f5a9d40d->leave($__internal_981172964914a7b9b1f6b0a389885ff93f64b758b00e26ae7ed94387f5a9d40d_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_7e0387cc257a26196ac5425b89c4c45214526d06ddb847961cd4d1857341d02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0387cc257a26196ac5425b89c4c45214526d06ddb847961cd4d1857341d02a->enter($__internal_7e0387cc257a26196ac5425b89c4c45214526d06ddb847961cd4d1857341d02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_7e0387cc257a26196ac5425b89c4c45214526d06ddb847961cd4d1857341d02a->leave($__internal_7e0387cc257a26196ac5425b89c4c45214526d06ddb847961cd4d1857341d02a_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e84deb163304bfb4af55747f7ee5e26675112f9dfa5580723c971fe4cefacbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84deb163304bfb4af55747f7ee5e26675112f9dfa5580723c971fe4cefacbba->enter($__internal_e84deb163304bfb4af55747f7ee5e26675112f9dfa5580723c971fe4cefacbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_e84deb163304bfb4af55747f7ee5e26675112f9dfa5580723c971fe4cefacbba->leave($__internal_e84deb163304bfb4af55747f7ee5e26675112f9dfa5580723c971fe4cefacbba_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1b3cf6c5cb39181fd2b1d509973a1f06201738148b4a73eadebd7522c5fa127c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3cf6c5cb39181fd2b1d509973a1f06201738148b4a73eadebd7522c5fa127c->enter($__internal_1b3cf6c5cb39181fd2b1d509973a1f06201738148b4a73eadebd7522c5fa127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_1b3cf6c5cb39181fd2b1d509973a1f06201738148b4a73eadebd7522c5fa127c->leave($__internal_1b3cf6c5cb39181fd2b1d509973a1f06201738148b4a73eadebd7522c5fa127c_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_10066c04513025c5fd4ff0b1841f7a9994d8340218aad2117aef28bbf509c549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10066c04513025c5fd4ff0b1841f7a9994d8340218aad2117aef28bbf509c549->enter($__internal_10066c04513025c5fd4ff0b1841f7a9994d8340218aad2117aef28bbf509c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_10066c04513025c5fd4ff0b1841f7a9994d8340218aad2117aef28bbf509c549->leave($__internal_10066c04513025c5fd4ff0b1841f7a9994d8340218aad2117aef28bbf509c549_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_766b123949d300c817d59866fbeb669db8ac359f7d24f6d7e31ea18ce2d4cd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766b123949d300c817d59866fbeb669db8ac359f7d24f6d7e31ea18ce2d4cd5c->enter($__internal_766b123949d300c817d59866fbeb669db8ac359f7d24f6d7e31ea18ce2d4cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_766b123949d300c817d59866fbeb669db8ac359f7d24f6d7e31ea18ce2d4cd5c->leave($__internal_766b123949d300c817d59866fbeb669db8ac359f7d24f6d7e31ea18ce2d4cd5c_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_35d3a1f8493f9ddc18d67dcc3a1ea758b36f267ad9fbb05088e205657109fcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3a1f8493f9ddc18d67dcc3a1ea758b36f267ad9fbb05088e205657109fcee->enter($__internal_35d3a1f8493f9ddc18d67dcc3a1ea758b36f267ad9fbb05088e205657109fcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_35d3a1f8493f9ddc18d67dcc3a1ea758b36f267ad9fbb05088e205657109fcee->leave($__internal_35d3a1f8493f9ddc18d67dcc3a1ea758b36f267ad9fbb05088e205657109fcee_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fce5bf287bfa0476a18b16ec9fbee7b5198177dd32518866c2cbbbaca43c602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce5bf287bfa0476a18b16ec9fbee7b5198177dd32518866c2cbbbaca43c602a->enter($__internal_fce5bf287bfa0476a18b16ec9fbee7b5198177dd32518866c2cbbbaca43c602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_fce5bf287bfa0476a18b16ec9fbee7b5198177dd32518866c2cbbbaca43c602a->leave($__internal_fce5bf287bfa0476a18b16ec9fbee7b5198177dd32518866c2cbbbaca43c602a_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1c7f6900855b2763d973ae6951c9f40f2df1a3e00178a470a19564a14c8691a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7f6900855b2763d973ae6951c9f40f2df1a3e00178a470a19564a14c8691a0->enter($__internal_1c7f6900855b2763d973ae6951c9f40f2df1a3e00178a470a19564a14c8691a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_1c7f6900855b2763d973ae6951c9f40f2df1a3e00178a470a19564a14c8691a0->leave($__internal_1c7f6900855b2763d973ae6951c9f40f2df1a3e00178a470a19564a14c8691a0_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_dd7c0f1e32ebe3931198b6471cfea1856428eac58af9f428ce3b1e144abd9cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7c0f1e32ebe3931198b6471cfea1856428eac58af9f428ce3b1e144abd9cd1->enter($__internal_dd7c0f1e32ebe3931198b6471cfea1856428eac58af9f428ce3b1e144abd9cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dd7c0f1e32ebe3931198b6471cfea1856428eac58af9f428ce3b1e144abd9cd1->leave($__internal_dd7c0f1e32ebe3931198b6471cfea1856428eac58af9f428ce3b1e144abd9cd1_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cf9cc57c8e3e22449bd395c9811a748e31056ef0775f95fb2238832c7ea252b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9cc57c8e3e22449bd395c9811a748e31056ef0775f95fb2238832c7ea252b2->enter($__internal_cf9cc57c8e3e22449bd395c9811a748e31056ef0775f95fb2238832c7ea252b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_cf9cc57c8e3e22449bd395c9811a748e31056ef0775f95fb2238832c7ea252b2->leave($__internal_cf9cc57c8e3e22449bd395c9811a748e31056ef0775f95fb2238832c7ea252b2_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2dcd8486b7ae4d5abd42cf87abdcbff8e0e03000e006ad78cc5e51c0b5d72018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcd8486b7ae4d5abd42cf87abdcbff8e0e03000e006ad78cc5e51c0b5d72018->enter($__internal_2dcd8486b7ae4d5abd42cf87abdcbff8e0e03000e006ad78cc5e51c0b5d72018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_2dcd8486b7ae4d5abd42cf87abdcbff8e0e03000e006ad78cc5e51c0b5d72018->leave($__internal_2dcd8486b7ae4d5abd42cf87abdcbff8e0e03000e006ad78cc5e51c0b5d72018_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3169a3fda825b8a19b0ecc02edb053242e65de4c9e7097778df97c17024f7aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3169a3fda825b8a19b0ecc02edb053242e65de4c9e7097778df97c17024f7aed->enter($__internal_3169a3fda825b8a19b0ecc02edb053242e65de4c9e7097778df97c17024f7aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_3169a3fda825b8a19b0ecc02edb053242e65de4c9e7097778df97c17024f7aed->leave($__internal_3169a3fda825b8a19b0ecc02edb053242e65de4c9e7097778df97c17024f7aed_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_63ea1ffce806607bef8361baa6cef762662b4a6356090a2d708e0e6dcee8ac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ea1ffce806607bef8361baa6cef762662b4a6356090a2d708e0e6dcee8ac57->enter($__internal_63ea1ffce806607bef8361baa6cef762662b4a6356090a2d708e0e6dcee8ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_63ea1ffce806607bef8361baa6cef762662b4a6356090a2d708e0e6dcee8ac57->leave($__internal_63ea1ffce806607bef8361baa6cef762662b4a6356090a2d708e0e6dcee8ac57_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_70b496a750c75bb25bc284645b979558b85eba0e4f88c04ea6087769e1931746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b496a750c75bb25bc284645b979558b85eba0e4f88c04ea6087769e1931746->enter($__internal_70b496a750c75bb25bc284645b979558b85eba0e4f88c04ea6087769e1931746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_70b496a750c75bb25bc284645b979558b85eba0e4f88c04ea6087769e1931746->leave($__internal_70b496a750c75bb25bc284645b979558b85eba0e4f88c04ea6087769e1931746_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_77690c1075b573f05ae5e8d1cc754f3fe05fc10f4c8dfdecf30ebeca1e8a2c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77690c1075b573f05ae5e8d1cc754f3fe05fc10f4c8dfdecf30ebeca1e8a2c82->enter($__internal_77690c1075b573f05ae5e8d1cc754f3fe05fc10f4c8dfdecf30ebeca1e8a2c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 140
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 141
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 142
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 143
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 144
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 145
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 146
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 147
            echo "</div>";
        }
        
        $__internal_77690c1075b573f05ae5e8d1cc754f3fe05fc10f4c8dfdecf30ebeca1e8a2c82->leave($__internal_77690c1075b573f05ae5e8d1cc754f3fe05fc10f4c8dfdecf30ebeca1e8a2c82_prof);

    }

    // line 151
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a48981680db893bf6247571ce5b76cbcb3746f84bb72c1c5bdf15c4fb3f5017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48981680db893bf6247571ce5b76cbcb3746f84bb72c1c5bdf15c4fb3f5017d->enter($__internal_a48981680db893bf6247571ce5b76cbcb3746f84bb72c1c5bdf15c4fb3f5017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 153
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a48981680db893bf6247571ce5b76cbcb3746f84bb72c1c5bdf15c4fb3f5017d->leave($__internal_a48981680db893bf6247571ce5b76cbcb3746f84bb72c1c5bdf15c4fb3f5017d_prof);

    }

    // line 157
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_94565333a90ca119c98e05a6f23c1b7d8669194fe13d30f2a3a8f2042edaa176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94565333a90ca119c98e05a6f23c1b7d8669194fe13d30f2a3a8f2042edaa176->enter($__internal_94565333a90ca119c98e05a6f23c1b7d8669194fe13d30f2a3a8f2042edaa176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 158
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_94565333a90ca119c98e05a6f23c1b7d8669194fe13d30f2a3a8f2042edaa176->leave($__internal_94565333a90ca119c98e05a6f23c1b7d8669194fe13d30f2a3a8f2042edaa176_prof);

    }

    // line 162
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0aa956964bd6501b962b9f8a742976f64b5291668706ad4b1f8a3056e5db774f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa956964bd6501b962b9f8a742976f64b5291668706ad4b1f8a3056e5db774f->enter($__internal_0aa956964bd6501b962b9f8a742976f64b5291668706ad4b1f8a3056e5db774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 163
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_0aa956964bd6501b962b9f8a742976f64b5291668706ad4b1f8a3056e5db774f->leave($__internal_0aa956964bd6501b962b9f8a742976f64b5291668706ad4b1f8a3056e5db774f_prof);

    }

    // line 166
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_aa36236bcde30654831d6c5430556e90ef4c31e69f59e870205453e5ba223d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36236bcde30654831d6c5430556e90ef4c31e69f59e870205453e5ba223d94->enter($__internal_aa36236bcde30654831d6c5430556e90ef4c31e69f59e870205453e5ba223d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aa36236bcde30654831d6c5430556e90ef4c31e69f59e870205453e5ba223d94->leave($__internal_aa36236bcde30654831d6c5430556e90ef4c31e69f59e870205453e5ba223d94_prof);

    }

    // line 171
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_fbdab0e9495397b7adcd1806fab69f12076d6d860c4746b6604e48190da95aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdab0e9495397b7adcd1806fab69f12076d6d860c4746b6604e48190da95aec->enter($__internal_fbdab0e9495397b7adcd1806fab69f12076d6d860c4746b6604e48190da95aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fbdab0e9495397b7adcd1806fab69f12076d6d860c4746b6604e48190da95aec->leave($__internal_fbdab0e9495397b7adcd1806fab69f12076d6d860c4746b6604e48190da95aec_prof);

    }

    // line 176
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f41b65045b3e2bd56d82d090c15e77dd21d50434ec7356bce8359182de9cd278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41b65045b3e2bd56d82d090c15e77dd21d50434ec7356bce8359182de9cd278->enter($__internal_f41b65045b3e2bd56d82d090c15e77dd21d50434ec7356bce8359182de9cd278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 177
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 178
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_f41b65045b3e2bd56d82d090c15e77dd21d50434ec7356bce8359182de9cd278->leave($__internal_f41b65045b3e2bd56d82d090c15e77dd21d50434ec7356bce8359182de9cd278_prof);

    }

    // line 181
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_668f8fe03cf79dc59618e37257c4926d9fc21a05f02757ff9950d10f588373e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668f8fe03cf79dc59618e37257c4926d9fc21a05f02757ff9950d10f588373e3->enter($__internal_668f8fe03cf79dc59618e37257c4926d9fc21a05f02757ff9950d10f588373e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 182
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 183
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_668f8fe03cf79dc59618e37257c4926d9fc21a05f02757ff9950d10f588373e3->leave($__internal_668f8fe03cf79dc59618e37257c4926d9fc21a05f02757ff9950d10f588373e3_prof);

    }

    // line 186
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_af6f9595cfd97e1af5baee2405101168e9a504e542a9cf53f8e5d2787f6ca3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6f9595cfd97e1af5baee2405101168e9a504e542a9cf53f8e5d2787f6ca3d4->enter($__internal_af6f9595cfd97e1af5baee2405101168e9a504e542a9cf53f8e5d2787f6ca3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 187
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 188
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_af6f9595cfd97e1af5baee2405101168e9a504e542a9cf53f8e5d2787f6ca3d4->leave($__internal_af6f9595cfd97e1af5baee2405101168e9a504e542a9cf53f8e5d2787f6ca3d4_prof);

    }

    // line 191
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_bab9e277eef5bfd8e9b7b1cf415dbbe78bef6175ae359a58a9898c50962ae951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab9e277eef5bfd8e9b7b1cf415dbbe78bef6175ae359a58a9898c50962ae951->enter($__internal_bab9e277eef5bfd8e9b7b1cf415dbbe78bef6175ae359a58a9898c50962ae951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 192
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 193
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bab9e277eef5bfd8e9b7b1cf415dbbe78bef6175ae359a58a9898c50962ae951->leave($__internal_bab9e277eef5bfd8e9b7b1cf415dbbe78bef6175ae359a58a9898c50962ae951_prof);

    }

    // line 196
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_9cd8fef290d96ac75125d5113d7967ea23996dfdeaef2db4bb4ce00225b66572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd8fef290d96ac75125d5113d7967ea23996dfdeaef2db4bb4ce00225b66572->enter($__internal_9cd8fef290d96ac75125d5113d7967ea23996dfdeaef2db4bb4ce00225b66572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 197
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 198
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9cd8fef290d96ac75125d5113d7967ea23996dfdeaef2db4bb4ce00225b66572->leave($__internal_9cd8fef290d96ac75125d5113d7967ea23996dfdeaef2db4bb4ce00225b66572_prof);

    }

    // line 201
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_751d20026ca82cce2aca1a778a8ab915f0f322facf3a788efbbee8e443dc9eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751d20026ca82cce2aca1a778a8ab915f0f322facf3a788efbbee8e443dc9eda->enter($__internal_751d20026ca82cce2aca1a778a8ab915f0f322facf3a788efbbee8e443dc9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 203
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 204
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 205
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 206
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 209
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 212
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_751d20026ca82cce2aca1a778a8ab915f0f322facf3a788efbbee8e443dc9eda->leave($__internal_751d20026ca82cce2aca1a778a8ab915f0f322facf3a788efbbee8e443dc9eda_prof);

    }

    // line 215
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_49e3942cb034d2d37cf06ce06d48c391ae089396dd69d1c3ccbfc49f3b798166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e3942cb034d2d37cf06ce06d48c391ae089396dd69d1c3ccbfc49f3b798166->enter($__internal_49e3942cb034d2d37cf06ce06d48c391ae089396dd69d1c3ccbfc49f3b798166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 216
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 217
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_49e3942cb034d2d37cf06ce06d48c391ae089396dd69d1c3ccbfc49f3b798166->leave($__internal_49e3942cb034d2d37cf06ce06d48c391ae089396dd69d1c3ccbfc49f3b798166_prof);

    }

    // line 220
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_d4188427415f15ad0427d3a86c3bd8c6ff773b189befc9fb206776442098ec0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4188427415f15ad0427d3a86c3bd8c6ff773b189befc9fb206776442098ec0c->enter($__internal_d4188427415f15ad0427d3a86c3bd8c6ff773b189befc9fb206776442098ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 221
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 222
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d4188427415f15ad0427d3a86c3bd8c6ff773b189befc9fb206776442098ec0c->leave($__internal_d4188427415f15ad0427d3a86c3bd8c6ff773b189befc9fb206776442098ec0c_prof);

    }

    // line 227
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f9b34d522b88ab95fe124c48fb93cd6eb0fc8a0d11edefbeaf5450c5dd031ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b34d522b88ab95fe124c48fb93cd6eb0fc8a0d11edefbeaf5450c5dd031ee4->enter($__internal_f9b34d522b88ab95fe124c48fb93cd6eb0fc8a0d11edefbeaf5450c5dd031ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 228
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 229
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 230
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 232
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 235
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 236
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 237
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 238
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 239
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 242
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 245
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_f9b34d522b88ab95fe124c48fb93cd6eb0fc8a0d11edefbeaf5450c5dd031ee4->leave($__internal_f9b34d522b88ab95fe124c48fb93cd6eb0fc8a0d11edefbeaf5450c5dd031ee4_prof);

    }

    // line 249
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_c10fddd569d997ca5ad7c8390cf5468904084a7539c137ccc4db5cf57fcc84b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10fddd569d997ca5ad7c8390cf5468904084a7539c137ccc4db5cf57fcc84b2->enter($__internal_c10fddd569d997ca5ad7c8390cf5468904084a7539c137ccc4db5cf57fcc84b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c10fddd569d997ca5ad7c8390cf5468904084a7539c137ccc4db5cf57fcc84b2->leave($__internal_c10fddd569d997ca5ad7c8390cf5468904084a7539c137ccc4db5cf57fcc84b2_prof);

    }

    // line 253
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_b905bb5872ac7dc9d4f9544dbf2416c03b67ccfb98914461332974cb60159dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b905bb5872ac7dc9d4f9544dbf2416c03b67ccfb98914461332974cb60159dd4->enter($__internal_b905bb5872ac7dc9d4f9544dbf2416c03b67ccfb98914461332974cb60159dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 258
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_b905bb5872ac7dc9d4f9544dbf2416c03b67ccfb98914461332974cb60159dd4->leave($__internal_b905bb5872ac7dc9d4f9544dbf2416c03b67ccfb98914461332974cb60159dd4_prof);

    }

    // line 261
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a5c6277b537e8aba1cbf6b7f30e496c6d857a01f9e28152705e8b7d3d45fe986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c6277b537e8aba1cbf6b7f30e496c6d857a01f9e28152705e8b7d3d45fe986->enter($__internal_a5c6277b537e8aba1cbf6b7f30e496c6d857a01f9e28152705e8b7d3d45fe986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 262
        echo "<div>";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo "</div>";
        
        $__internal_a5c6277b537e8aba1cbf6b7f30e496c6d857a01f9e28152705e8b7d3d45fe986->leave($__internal_a5c6277b537e8aba1cbf6b7f30e496c6d857a01f9e28152705e8b7d3d45fe986_prof);

    }

    // line 269
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bb1a89b2299fe301f28d662b88691b4fd39f6e64a0507f5cbad6875fdf9152fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1a89b2299fe301f28d662b88691b4fd39f6e64a0507f5cbad6875fdf9152fe->enter($__internal_bb1a89b2299fe301f28d662b88691b4fd39f6e64a0507f5cbad6875fdf9152fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 270
        echo "<div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 272
        echo "</div>";
        
        $__internal_bb1a89b2299fe301f28d662b88691b4fd39f6e64a0507f5cbad6875fdf9152fe->leave($__internal_bb1a89b2299fe301f28d662b88691b4fd39f6e64a0507f5cbad6875fdf9152fe_prof);

    }

    // line 275
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_93ad0993a4aae6026c007fbf7947e7cb34fa093562157be112a5797c48382624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ad0993a4aae6026c007fbf7947e7cb34fa093562157be112a5797c48382624->enter($__internal_93ad0993a4aae6026c007fbf7947e7cb34fa093562157be112a5797c48382624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_93ad0993a4aae6026c007fbf7947e7cb34fa093562157be112a5797c48382624->leave($__internal_93ad0993a4aae6026c007fbf7947e7cb34fa093562157be112a5797c48382624_prof);

    }

    // line 281
    public function block_form($context, array $blocks = array())
    {
        $__internal_5fbd8d09ea1e52b53e2f5b3068cbb25aec5973ee80368bb1349b0c6dd5e331e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbd8d09ea1e52b53e2f5b3068cbb25aec5973ee80368bb1349b0c6dd5e331e0->enter($__internal_5fbd8d09ea1e52b53e2f5b3068cbb25aec5973ee80368bb1349b0c6dd5e331e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_5fbd8d09ea1e52b53e2f5b3068cbb25aec5973ee80368bb1349b0c6dd5e331e0->leave($__internal_5fbd8d09ea1e52b53e2f5b3068cbb25aec5973ee80368bb1349b0c6dd5e331e0_prof);

    }

    // line 287
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e601883c28b4b5b8df40795ea415cab47938b597d080bdf248f2c614b31248c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e601883c28b4b5b8df40795ea415cab47938b597d080bdf248f2c614b31248c1->enter($__internal_e601883c28b4b5b8df40795ea415cab47938b597d080bdf248f2c614b31248c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 288
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 289
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 290
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 292
            $context["form_method"] = "POST";
        }
        // line 294
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 295
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 296
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_e601883c28b4b5b8df40795ea415cab47938b597d080bdf248f2c614b31248c1->leave($__internal_e601883c28b4b5b8df40795ea415cab47938b597d080bdf248f2c614b31248c1_prof);

    }

    // line 300
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_72b8dba39db6744912f88d859008155671af2fda34310c229ece2be7eb38550b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b8dba39db6744912f88d859008155671af2fda34310c229ece2be7eb38550b->enter($__internal_72b8dba39db6744912f88d859008155671af2fda34310c229ece2be7eb38550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 301
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 302
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 304
        echo "</form>";
        
        $__internal_72b8dba39db6744912f88d859008155671af2fda34310c229ece2be7eb38550b->leave($__internal_72b8dba39db6744912f88d859008155671af2fda34310c229ece2be7eb38550b_prof);

    }

    // line 307
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2dc0470a7c8763c39bfeb735e90fd6d233d61bd62a1fe0cd3a476823f4fc7e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc0470a7c8763c39bfeb735e90fd6d233d61bd62a1fe0cd3a476823f4fc7e40->enter($__internal_2dc0470a7c8763c39bfeb735e90fd6d233d61bd62a1fe0cd3a476823f4fc7e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 308
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 309
            echo "<ul>";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 311
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "</ul>";
        }
        
        $__internal_2dc0470a7c8763c39bfeb735e90fd6d233d61bd62a1fe0cd3a476823f4fc7e40->leave($__internal_2dc0470a7c8763c39bfeb735e90fd6d233d61bd62a1fe0cd3a476823f4fc7e40_prof);

    }

    // line 317
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_9b4a22ccca1331427780825b23c3d959953521efd0c9975e62e179e08257b9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4a22ccca1331427780825b23c3d959953521efd0c9975e62e179e08257b9bf->enter($__internal_9b4a22ccca1331427780825b23c3d959953521efd0c9975e62e179e08257b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 319
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 320
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9b4a22ccca1331427780825b23c3d959953521efd0c9975e62e179e08257b9bf->leave($__internal_9b4a22ccca1331427780825b23c3d959953521efd0c9975e62e179e08257b9bf_prof);

    }

    // line 327
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_bb5bf80e249d7cacaf6f3ad395fe524eaa3d3ebac930dca970ad25e98a88f5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5bf80e249d7cacaf6f3ad395fe524eaa3d3ebac930dca970ad25e98a88f5e0->enter($__internal_bb5bf80e249d7cacaf6f3ad395fe524eaa3d3ebac930dca970ad25e98a88f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 329
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bb5bf80e249d7cacaf6f3ad395fe524eaa3d3ebac930dca970ad25e98a88f5e0->leave($__internal_bb5bf80e249d7cacaf6f3ad395fe524eaa3d3ebac930dca970ad25e98a88f5e0_prof);

    }

    // line 333
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_c0a2437b2688c4d42c620951c380726e72a75c8967f23302b6202d0d8526515e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a2437b2688c4d42c620951c380726e72a75c8967f23302b6202d0d8526515e->enter($__internal_c0a2437b2688c4d42c620951c380726e72a75c8967f23302b6202d0d8526515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 334
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 335
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 336
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 338
            echo " ";
            // line 339
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 341
$context["attrvalue"] === true)) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 343
$context["attrvalue"] === false)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c0a2437b2688c4d42c620951c380726e72a75c8967f23302b6202d0d8526515e->leave($__internal_c0a2437b2688c4d42c620951c380726e72a75c8967f23302b6202d0d8526515e_prof);

    }

    // line 349
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_bd7b97bd0b34fb5459cc783c2a1a6819f98171123f76743dac929d28e8d89561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7b97bd0b34fb5459cc783c2a1a6819f98171123f76743dac929d28e8d89561->enter($__internal_bd7b97bd0b34fb5459cc783c2a1a6819f98171123f76743dac929d28e8d89561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 350
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 352
            echo " ";
            // line 353
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 355
$context["attrvalue"] === true)) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 357
$context["attrvalue"] === false)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bd7b97bd0b34fb5459cc783c2a1a6819f98171123f76743dac929d28e8d89561->leave($__internal_bd7b97bd0b34fb5459cc783c2a1a6819f98171123f76743dac929d28e8d89561_prof);

    }

    // line 363
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_b8a69924602921e296a08d13a08311691a6fe2efd8456604aa624ca09a17c8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a69924602921e296a08d13a08311691a6fe2efd8456604aa624ca09a17c8ed->enter($__internal_b8a69924602921e296a08d13a08311691a6fe2efd8456604aa624ca09a17c8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 364
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b8a69924602921e296a08d13a08311691a6fe2efd8456604aa624ca09a17c8ed->leave($__internal_b8a69924602921e296a08d13a08311691a6fe2efd8456604aa624ca09a17c8ed_prof);

    }

    // line 377
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_7a5872276d8571aca80684bbebd79efbc77bc7d79dbd4b918413532b8d4eebd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5872276d8571aca80684bbebd79efbc77bc7d79dbd4b918413532b8d4eebd3->enter($__internal_7a5872276d8571aca80684bbebd79efbc77bc7d79dbd4b918413532b8d4eebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 379
            echo " ";
            // line 380
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 381
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 382
$context["attrvalue"] === true)) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 384
$context["attrvalue"] === false)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7a5872276d8571aca80684bbebd79efbc77bc7d79dbd4b918413532b8d4eebd3->leave($__internal_7a5872276d8571aca80684bbebd79efbc77bc7d79dbd4b918413532b8d4eebd3_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1328 => 385,  1326 => 384,  1321 => 383,  1319 => 382,  1314 => 381,  1312 => 380,  1310 => 379,  1306 => 378,  1300 => 377,  1285 => 372,  1283 => 371,  1278 => 370,  1276 => 369,  1271 => 368,  1269 => 367,  1267 => 366,  1263 => 365,  1254 => 364,  1248 => 363,  1233 => 358,  1231 => 357,  1226 => 356,  1224 => 355,  1219 => 354,  1217 => 353,  1215 => 352,  1211 => 351,  1205 => 350,  1199 => 349,  1184 => 344,  1182 => 343,  1177 => 342,  1175 => 341,  1170 => 340,  1168 => 339,  1166 => 338,  1162 => 337,  1158 => 336,  1154 => 335,  1148 => 334,  1142 => 333,  1131 => 329,  1127 => 328,  1121 => 327,  1109 => 320,  1107 => 319,  1103 => 318,  1097 => 317,  1089 => 313,  1081 => 311,  1077 => 310,  1075 => 309,  1073 => 308,  1067 => 307,  1060 => 304,  1057 => 302,  1055 => 301,  1049 => 300,  1039 => 296,  1037 => 295,  1010 => 294,  1007 => 292,  1004 => 290,  1002 => 289,  1000 => 288,  994 => 287,  987 => 284,  985 => 283,  983 => 282,  977 => 281,  970 => 276,  964 => 275,  957 => 272,  955 => 271,  953 => 270,  947 => 269,  940 => 266,  938 => 265,  936 => 264,  934 => 263,  932 => 262,  926 => 261,  919 => 258,  913 => 253,  902 => 249,  879 => 245,  875 => 242,  872 => 239,  871 => 238,  870 => 237,  868 => 236,  866 => 235,  863 => 233,  861 => 232,  858 => 230,  856 => 229,  854 => 228,  848 => 227,  841 => 222,  839 => 221,  833 => 220,  826 => 217,  824 => 216,  818 => 215,  805 => 212,  801 => 209,  798 => 206,  797 => 205,  796 => 204,  794 => 203,  792 => 202,  786 => 201,  779 => 198,  777 => 197,  771 => 196,  764 => 193,  762 => 192,  756 => 191,  749 => 188,  747 => 187,  741 => 186,  734 => 183,  732 => 182,  726 => 181,  718 => 178,  716 => 177,  710 => 176,  703 => 173,  701 => 172,  695 => 171,  688 => 168,  686 => 167,  680 => 166,  673 => 163,  667 => 162,  660 => 159,  658 => 158,  652 => 157,  645 => 154,  643 => 153,  637 => 151,  629 => 147,  625 => 146,  621 => 145,  617 => 144,  613 => 143,  609 => 142,  605 => 141,  601 => 140,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 377,  153 => 363,  151 => 349,  149 => 333,  147 => 327,  144 => 324,  142 => 317,  140 => 307,  138 => 300,  136 => 287,  134 => 281,  132 => 275,  130 => 269,  128 => 261,  126 => 253,  124 => 249,  122 => 227,  120 => 220,  118 => 215,  116 => 201,  114 => 196,  112 => 191,  110 => 186,  108 => 181,  106 => 176,  104 => 171,  102 => 166,  100 => 162,  98 => 157,  96 => 151,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}

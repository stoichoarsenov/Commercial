<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_db22dd1b8890daa037c0e47a10b0b2661dee9582794d5903f380151d72a22d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3324559a6d4237a79befd6321bd06c1d1ae52aee5063d5b16b1e4cb6b0fe5e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3324559a6d4237a79befd6321bd06c1d1ae52aee5063d5b16b1e4cb6b0fe5e04->enter($__internal_3324559a6d4237a79befd6321bd06c1d1ae52aee5063d5b16b1e4cb6b0fe5e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_67b09bbf60ec996f239f043c2bf10e5f2452d8f77827575e318e032e27831846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b09bbf60ec996f239f043c2bf10e5f2452d8f77827575e318e032e27831846->enter($__internal_67b09bbf60ec996f239f043c2bf10e5f2452d8f77827575e318e032e27831846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_3324559a6d4237a79befd6321bd06c1d1ae52aee5063d5b16b1e4cb6b0fe5e04->leave($__internal_3324559a6d4237a79befd6321bd06c1d1ae52aee5063d5b16b1e4cb6b0fe5e04_prof);

        
        $__internal_67b09bbf60ec996f239f043c2bf10e5f2452d8f77827575e318e032e27831846->leave($__internal_67b09bbf60ec996f239f043c2bf10e5f2452d8f77827575e318e032e27831846_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_275600c08a85f6c86d8ec28c2e1488b7ba6d9ba5e32d7734e7d0b05a98c023dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275600c08a85f6c86d8ec28c2e1488b7ba6d9ba5e32d7734e7d0b05a98c023dc->enter($__internal_275600c08a85f6c86d8ec28c2e1488b7ba6d9ba5e32d7734e7d0b05a98c023dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e5cd0a197594dd96a6c86294dec6b85ad8cb6786606788836b6cb5379fa2dab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cd0a197594dd96a6c86294dec6b85ad8cb6786606788836b6cb5379fa2dab9->enter($__internal_e5cd0a197594dd96a6c86294dec6b85ad8cb6786606788836b6cb5379fa2dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_e5cd0a197594dd96a6c86294dec6b85ad8cb6786606788836b6cb5379fa2dab9->leave($__internal_e5cd0a197594dd96a6c86294dec6b85ad8cb6786606788836b6cb5379fa2dab9_prof);

        
        $__internal_275600c08a85f6c86d8ec28c2e1488b7ba6d9ba5e32d7734e7d0b05a98c023dc->leave($__internal_275600c08a85f6c86d8ec28c2e1488b7ba6d9ba5e32d7734e7d0b05a98c023dc_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d7da56f4b6fced99c572fc4ea404cfc273a4d722e80336f0fe9ed99000d44378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7da56f4b6fced99c572fc4ea404cfc273a4d722e80336f0fe9ed99000d44378->enter($__internal_d7da56f4b6fced99c572fc4ea404cfc273a4d722e80336f0fe9ed99000d44378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_87b863e6285585bd19c3c367559207bce71fa8dce0550c2aa7fb846211539b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b863e6285585bd19c3c367559207bce71fa8dce0550c2aa7fb846211539b7a->enter($__internal_87b863e6285585bd19c3c367559207bce71fa8dce0550c2aa7fb846211539b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_87b863e6285585bd19c3c367559207bce71fa8dce0550c2aa7fb846211539b7a->leave($__internal_87b863e6285585bd19c3c367559207bce71fa8dce0550c2aa7fb846211539b7a_prof);

        
        $__internal_d7da56f4b6fced99c572fc4ea404cfc273a4d722e80336f0fe9ed99000d44378->leave($__internal_d7da56f4b6fced99c572fc4ea404cfc273a4d722e80336f0fe9ed99000d44378_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c27511eabad21639e7f556547a916e25db0e448c0a5f72dfa1cb9eda3c36ec8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27511eabad21639e7f556547a916e25db0e448c0a5f72dfa1cb9eda3c36ec8d->enter($__internal_c27511eabad21639e7f556547a916e25db0e448c0a5f72dfa1cb9eda3c36ec8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_95e0f96d4501d97799fc6eb2c0c08e3d3f3e6f1d2893cc135f8f41d3e4ce6a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e0f96d4501d97799fc6eb2c0c08e3d3f3e6f1d2893cc135f8f41d3e4ce6a00->enter($__internal_95e0f96d4501d97799fc6eb2c0c08e3d3f3e6f1d2893cc135f8f41d3e4ce6a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_95e0f96d4501d97799fc6eb2c0c08e3d3f3e6f1d2893cc135f8f41d3e4ce6a00->leave($__internal_95e0f96d4501d97799fc6eb2c0c08e3d3f3e6f1d2893cc135f8f41d3e4ce6a00_prof);

        
        $__internal_c27511eabad21639e7f556547a916e25db0e448c0a5f72dfa1cb9eda3c36ec8d->leave($__internal_c27511eabad21639e7f556547a916e25db0e448c0a5f72dfa1cb9eda3c36ec8d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7758104bd5c0ebc03aec16a9e351dfd1c460824151ff611af9b0a0e335382d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7758104bd5c0ebc03aec16a9e351dfd1c460824151ff611af9b0a0e335382d9d->enter($__internal_7758104bd5c0ebc03aec16a9e351dfd1c460824151ff611af9b0a0e335382d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_f79e81a758dd00df6f1680129c5b0f32ced5bc5f7effefaeafd70ebebc79e47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79e81a758dd00df6f1680129c5b0f32ced5bc5f7effefaeafd70ebebc79e47e->enter($__internal_f79e81a758dd00df6f1680129c5b0f32ced5bc5f7effefaeafd70ebebc79e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_f79e81a758dd00df6f1680129c5b0f32ced5bc5f7effefaeafd70ebebc79e47e->leave($__internal_f79e81a758dd00df6f1680129c5b0f32ced5bc5f7effefaeafd70ebebc79e47e_prof);

        
        $__internal_7758104bd5c0ebc03aec16a9e351dfd1c460824151ff611af9b0a0e335382d9d->leave($__internal_7758104bd5c0ebc03aec16a9e351dfd1c460824151ff611af9b0a0e335382d9d_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cd75995feb50fc5f29d3d5300f5903976f940e46cb3653e2a05e0576748dd225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd75995feb50fc5f29d3d5300f5903976f940e46cb3653e2a05e0576748dd225->enter($__internal_cd75995feb50fc5f29d3d5300f5903976f940e46cb3653e2a05e0576748dd225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ddd62b243632e70dd7f9743e84eccc682e00fb5b3ab1dbbe76c6dbadf5ab285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd62b243632e70dd7f9743e84eccc682e00fb5b3ab1dbbe76c6dbadf5ab285b->enter($__internal_ddd62b243632e70dd7f9743e84eccc682e00fb5b3ab1dbbe76c6dbadf5ab285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_ddd62b243632e70dd7f9743e84eccc682e00fb5b3ab1dbbe76c6dbadf5ab285b->leave($__internal_ddd62b243632e70dd7f9743e84eccc682e00fb5b3ab1dbbe76c6dbadf5ab285b_prof);

        
        $__internal_cd75995feb50fc5f29d3d5300f5903976f940e46cb3653e2a05e0576748dd225->leave($__internal_cd75995feb50fc5f29d3d5300f5903976f940e46cb3653e2a05e0576748dd225_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_18ad420086d92b62bc381a2e81e66269c4fcfe95d6e8ea7c14e849039bef6f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad420086d92b62bc381a2e81e66269c4fcfe95d6e8ea7c14e849039bef6f86->enter($__internal_18ad420086d92b62bc381a2e81e66269c4fcfe95d6e8ea7c14e849039bef6f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_edabc04e6f244510d88e773efa5f380e4a5c476cafc2566b7f0f95a1d7f09c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edabc04e6f244510d88e773efa5f380e4a5c476cafc2566b7f0f95a1d7f09c55->enter($__internal_edabc04e6f244510d88e773efa5f380e4a5c476cafc2566b7f0f95a1d7f09c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_edabc04e6f244510d88e773efa5f380e4a5c476cafc2566b7f0f95a1d7f09c55->leave($__internal_edabc04e6f244510d88e773efa5f380e4a5c476cafc2566b7f0f95a1d7f09c55_prof);

        
        $__internal_18ad420086d92b62bc381a2e81e66269c4fcfe95d6e8ea7c14e849039bef6f86->leave($__internal_18ad420086d92b62bc381a2e81e66269c4fcfe95d6e8ea7c14e849039bef6f86_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8a9ad5b1f0d12e6c002014f5ed03c235b9c2777a41f533ec82a7192fd000184e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9ad5b1f0d12e6c002014f5ed03c235b9c2777a41f533ec82a7192fd000184e->enter($__internal_8a9ad5b1f0d12e6c002014f5ed03c235b9c2777a41f533ec82a7192fd000184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_599b46b7c508630f638d257bc14ca8a4509e57d2adbd0551a369227ed4d3207c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599b46b7c508630f638d257bc14ca8a4509e57d2adbd0551a369227ed4d3207c->enter($__internal_599b46b7c508630f638d257bc14ca8a4509e57d2adbd0551a369227ed4d3207c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_599b46b7c508630f638d257bc14ca8a4509e57d2adbd0551a369227ed4d3207c->leave($__internal_599b46b7c508630f638d257bc14ca8a4509e57d2adbd0551a369227ed4d3207c_prof);

        
        $__internal_8a9ad5b1f0d12e6c002014f5ed03c235b9c2777a41f533ec82a7192fd000184e->leave($__internal_8a9ad5b1f0d12e6c002014f5ed03c235b9c2777a41f533ec82a7192fd000184e_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f1ed7a993e68f45e54a86452a57cd10e12aaf843ed0db92804d62c5503ffa185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ed7a993e68f45e54a86452a57cd10e12aaf843ed0db92804d62c5503ffa185->enter($__internal_f1ed7a993e68f45e54a86452a57cd10e12aaf843ed0db92804d62c5503ffa185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_50f0a5f87263b40f07ae1946ff8c68c7a69298e027e742549086760da878299b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f0a5f87263b40f07ae1946ff8c68c7a69298e027e742549086760da878299b->enter($__internal_50f0a5f87263b40f07ae1946ff8c68c7a69298e027e742549086760da878299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_50f0a5f87263b40f07ae1946ff8c68c7a69298e027e742549086760da878299b->leave($__internal_50f0a5f87263b40f07ae1946ff8c68c7a69298e027e742549086760da878299b_prof);

        
        $__internal_f1ed7a993e68f45e54a86452a57cd10e12aaf843ed0db92804d62c5503ffa185->leave($__internal_f1ed7a993e68f45e54a86452a57cd10e12aaf843ed0db92804d62c5503ffa185_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}

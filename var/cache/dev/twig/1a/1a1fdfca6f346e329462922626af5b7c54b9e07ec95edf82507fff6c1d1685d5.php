<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_127ecf2201b5e8f6c1619d213a568662708e47c5b85f1e1fbb40da36319ca7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_273225d6f8e78f152a66251444c0a3f5f80aa6ab8b9788afc4f61a2fd197969d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273225d6f8e78f152a66251444c0a3f5f80aa6ab8b9788afc4f61a2fd197969d->enter($__internal_273225d6f8e78f152a66251444c0a3f5f80aa6ab8b9788afc4f61a2fd197969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d90f2ec895d10159711d97fe14d6575540582a775860a2383a3c3b6ddaefeab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90f2ec895d10159711d97fe14d6575540582a775860a2383a3c3b6ddaefeab6->enter($__internal_d90f2ec895d10159711d97fe14d6575540582a775860a2383a3c3b6ddaefeab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_273225d6f8e78f152a66251444c0a3f5f80aa6ab8b9788afc4f61a2fd197969d->leave($__internal_273225d6f8e78f152a66251444c0a3f5f80aa6ab8b9788afc4f61a2fd197969d_prof);

        
        $__internal_d90f2ec895d10159711d97fe14d6575540582a775860a2383a3c3b6ddaefeab6->leave($__internal_d90f2ec895d10159711d97fe14d6575540582a775860a2383a3c3b6ddaefeab6_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_777e2e31c9818ed9943915b3b2f360dfd53ac26068ea08502a2e42dc4c0ecb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777e2e31c9818ed9943915b3b2f360dfd53ac26068ea08502a2e42dc4c0ecb10->enter($__internal_777e2e31c9818ed9943915b3b2f360dfd53ac26068ea08502a2e42dc4c0ecb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0817e065c21cd95bc15116fefa83f82589a5d2f892068c30dad1a0ae6fd2f6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0817e065c21cd95bc15116fefa83f82589a5d2f892068c30dad1a0ae6fd2f6e6->enter($__internal_0817e065c21cd95bc15116fefa83f82589a5d2f892068c30dad1a0ae6fd2f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0817e065c21cd95bc15116fefa83f82589a5d2f892068c30dad1a0ae6fd2f6e6->leave($__internal_0817e065c21cd95bc15116fefa83f82589a5d2f892068c30dad1a0ae6fd2f6e6_prof);

        
        $__internal_777e2e31c9818ed9943915b3b2f360dfd53ac26068ea08502a2e42dc4c0ecb10->leave($__internal_777e2e31c9818ed9943915b3b2f360dfd53ac26068ea08502a2e42dc4c0ecb10_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2d6da3e289877ddc3681f590af01511c3e22bc3f4b86b6e13f082780960db130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6da3e289877ddc3681f590af01511c3e22bc3f4b86b6e13f082780960db130->enter($__internal_2d6da3e289877ddc3681f590af01511c3e22bc3f4b86b6e13f082780960db130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1e204322b4e9cad5759e5c895b000f76f997eb4914d25b480c35e252b7b97eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e204322b4e9cad5759e5c895b000f76f997eb4914d25b480c35e252b7b97eea->enter($__internal_1e204322b4e9cad5759e5c895b000f76f997eb4914d25b480c35e252b7b97eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1e204322b4e9cad5759e5c895b000f76f997eb4914d25b480c35e252b7b97eea->leave($__internal_1e204322b4e9cad5759e5c895b000f76f997eb4914d25b480c35e252b7b97eea_prof);

        
        $__internal_2d6da3e289877ddc3681f590af01511c3e22bc3f4b86b6e13f082780960db130->leave($__internal_2d6da3e289877ddc3681f590af01511c3e22bc3f4b86b6e13f082780960db130_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_256d40a35fe109ea8ae8e225ef431cea437fecd608e578834ccc88e01643fdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256d40a35fe109ea8ae8e225ef431cea437fecd608e578834ccc88e01643fdbf->enter($__internal_256d40a35fe109ea8ae8e225ef431cea437fecd608e578834ccc88e01643fdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_54da821b9eaf159c9388fa8b838ffb50b76b9d7ec9733c0211b92829c321a1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54da821b9eaf159c9388fa8b838ffb50b76b9d7ec9733c0211b92829c321a1da->enter($__internal_54da821b9eaf159c9388fa8b838ffb50b76b9d7ec9733c0211b92829c321a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_54da821b9eaf159c9388fa8b838ffb50b76b9d7ec9733c0211b92829c321a1da->leave($__internal_54da821b9eaf159c9388fa8b838ffb50b76b9d7ec9733c0211b92829c321a1da_prof);

        
        $__internal_256d40a35fe109ea8ae8e225ef431cea437fecd608e578834ccc88e01643fdbf->leave($__internal_256d40a35fe109ea8ae8e225ef431cea437fecd608e578834ccc88e01643fdbf_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a8bb9e6842757ff3a10f50266558e4c8a504e4ce2d72082917bf864b170380bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bb9e6842757ff3a10f50266558e4c8a504e4ce2d72082917bf864b170380bd->enter($__internal_a8bb9e6842757ff3a10f50266558e4c8a504e4ce2d72082917bf864b170380bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f49b239db082fd8bdfd79c70e72953431cda5122fff56d3271fa49885deeb841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49b239db082fd8bdfd79c70e72953431cda5122fff56d3271fa49885deeb841->enter($__internal_f49b239db082fd8bdfd79c70e72953431cda5122fff56d3271fa49885deeb841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_f49b239db082fd8bdfd79c70e72953431cda5122fff56d3271fa49885deeb841->leave($__internal_f49b239db082fd8bdfd79c70e72953431cda5122fff56d3271fa49885deeb841_prof);

        
        $__internal_a8bb9e6842757ff3a10f50266558e4c8a504e4ce2d72082917bf864b170380bd->leave($__internal_a8bb9e6842757ff3a10f50266558e4c8a504e4ce2d72082917bf864b170380bd_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7c50efa2c20a72a8797c19c4d66103d8e74febef7a3acc0b7a2f21cec066028c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c50efa2c20a72a8797c19c4d66103d8e74febef7a3acc0b7a2f21cec066028c->enter($__internal_7c50efa2c20a72a8797c19c4d66103d8e74febef7a3acc0b7a2f21cec066028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_80d29653c9885062e3aae53f29cfc7b167b33edf0b2edbe92534b21490220493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d29653c9885062e3aae53f29cfc7b167b33edf0b2edbe92534b21490220493->enter($__internal_80d29653c9885062e3aae53f29cfc7b167b33edf0b2edbe92534b21490220493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_80d29653c9885062e3aae53f29cfc7b167b33edf0b2edbe92534b21490220493->leave($__internal_80d29653c9885062e3aae53f29cfc7b167b33edf0b2edbe92534b21490220493_prof);

        
        $__internal_7c50efa2c20a72a8797c19c4d66103d8e74febef7a3acc0b7a2f21cec066028c->leave($__internal_7c50efa2c20a72a8797c19c4d66103d8e74febef7a3acc0b7a2f21cec066028c_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a05af2f111c1144ac9b019536dbd63687763306c41a37dc5ef02f6836ba45598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05af2f111c1144ac9b019536dbd63687763306c41a37dc5ef02f6836ba45598->enter($__internal_a05af2f111c1144ac9b019536dbd63687763306c41a37dc5ef02f6836ba45598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dd8cee2a5461c7e86739da27f693854694d6844df3dd74a2f9d9a8a1b1f06416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8cee2a5461c7e86739da27f693854694d6844df3dd74a2f9d9a8a1b1f06416->enter($__internal_dd8cee2a5461c7e86739da27f693854694d6844df3dd74a2f9d9a8a1b1f06416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dd8cee2a5461c7e86739da27f693854694d6844df3dd74a2f9d9a8a1b1f06416->leave($__internal_dd8cee2a5461c7e86739da27f693854694d6844df3dd74a2f9d9a8a1b1f06416_prof);

        
        $__internal_a05af2f111c1144ac9b019536dbd63687763306c41a37dc5ef02f6836ba45598->leave($__internal_a05af2f111c1144ac9b019536dbd63687763306c41a37dc5ef02f6836ba45598_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c5991728f0cb6b507df6ce2fcc143a07c34ae387c2dd09a0606ad210d8ea2d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5991728f0cb6b507df6ce2fcc143a07c34ae387c2dd09a0606ad210d8ea2d98->enter($__internal_c5991728f0cb6b507df6ce2fcc143a07c34ae387c2dd09a0606ad210d8ea2d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_f5cce3c8515fa46a11fa9b7c7f92ce7939dae451d964ff6000c5be2e8d25b70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cce3c8515fa46a11fa9b7c7f92ce7939dae451d964ff6000c5be2e8d25b70b->enter($__internal_f5cce3c8515fa46a11fa9b7c7f92ce7939dae451d964ff6000c5be2e8d25b70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f5cce3c8515fa46a11fa9b7c7f92ce7939dae451d964ff6000c5be2e8d25b70b->leave($__internal_f5cce3c8515fa46a11fa9b7c7f92ce7939dae451d964ff6000c5be2e8d25b70b_prof);

        
        $__internal_c5991728f0cb6b507df6ce2fcc143a07c34ae387c2dd09a0606ad210d8ea2d98->leave($__internal_c5991728f0cb6b507df6ce2fcc143a07c34ae387c2dd09a0606ad210d8ea2d98_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3af05cd0d34c0dc1f1a8f30d7a94e3c4b4b8a5e0eab37456aa7c1d5f162fe30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af05cd0d34c0dc1f1a8f30d7a94e3c4b4b8a5e0eab37456aa7c1d5f162fe30f->enter($__internal_3af05cd0d34c0dc1f1a8f30d7a94e3c4b4b8a5e0eab37456aa7c1d5f162fe30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_0610cf80c7660e14380d6c1a7deeb4c59942c7bdae49d53886c7bc95f336150a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0610cf80c7660e14380d6c1a7deeb4c59942c7bdae49d53886c7bc95f336150a->enter($__internal_0610cf80c7660e14380d6c1a7deeb4c59942c7bdae49d53886c7bc95f336150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0610cf80c7660e14380d6c1a7deeb4c59942c7bdae49d53886c7bc95f336150a->leave($__internal_0610cf80c7660e14380d6c1a7deeb4c59942c7bdae49d53886c7bc95f336150a_prof);

        
        $__internal_3af05cd0d34c0dc1f1a8f30d7a94e3c4b4b8a5e0eab37456aa7c1d5f162fe30f->leave($__internal_3af05cd0d34c0dc1f1a8f30d7a94e3c4b4b8a5e0eab37456aa7c1d5f162fe30f_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2594b8beb510653103a24675c43984ee0c8df6cae0e5a5c2909963ed17d1c42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2594b8beb510653103a24675c43984ee0c8df6cae0e5a5c2909963ed17d1c42f->enter($__internal_2594b8beb510653103a24675c43984ee0c8df6cae0e5a5c2909963ed17d1c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bc614c51615824db21e1a5541937f7d49550711f5c17ea9bbd26838959dcfbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc614c51615824db21e1a5541937f7d49550711f5c17ea9bbd26838959dcfbbc->enter($__internal_bc614c51615824db21e1a5541937f7d49550711f5c17ea9bbd26838959dcfbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_bc614c51615824db21e1a5541937f7d49550711f5c17ea9bbd26838959dcfbbc->leave($__internal_bc614c51615824db21e1a5541937f7d49550711f5c17ea9bbd26838959dcfbbc_prof);

        
        $__internal_2594b8beb510653103a24675c43984ee0c8df6cae0e5a5c2909963ed17d1c42f->leave($__internal_2594b8beb510653103a24675c43984ee0c8df6cae0e5a5c2909963ed17d1c42f_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bab59f37d17b3947ef1473457101088bebcf18d1197d4fc12528f730b0e7f75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab59f37d17b3947ef1473457101088bebcf18d1197d4fc12528f730b0e7f75d->enter($__internal_bab59f37d17b3947ef1473457101088bebcf18d1197d4fc12528f730b0e7f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_01c4d7d00ffa07963c0aa19bf99f678630b8fc6f86d353b0ca62ab594dcb2bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c4d7d00ffa07963c0aa19bf99f678630b8fc6f86d353b0ca62ab594dcb2bb4->enter($__internal_01c4d7d00ffa07963c0aa19bf99f678630b8fc6f86d353b0ca62ab594dcb2bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_01c4d7d00ffa07963c0aa19bf99f678630b8fc6f86d353b0ca62ab594dcb2bb4->leave($__internal_01c4d7d00ffa07963c0aa19bf99f678630b8fc6f86d353b0ca62ab594dcb2bb4_prof);

        
        $__internal_bab59f37d17b3947ef1473457101088bebcf18d1197d4fc12528f730b0e7f75d->leave($__internal_bab59f37d17b3947ef1473457101088bebcf18d1197d4fc12528f730b0e7f75d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f377495588e238ae97a9a45e3377e300f396dd745148a7e1f2fe32d1fde652a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f377495588e238ae97a9a45e3377e300f396dd745148a7e1f2fe32d1fde652a1->enter($__internal_f377495588e238ae97a9a45e3377e300f396dd745148a7e1f2fe32d1fde652a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cea4b7dc4a9863bb0776e765274b1ad1bab9f279fc02d19295e080bdf2479395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea4b7dc4a9863bb0776e765274b1ad1bab9f279fc02d19295e080bdf2479395->enter($__internal_cea4b7dc4a9863bb0776e765274b1ad1bab9f279fc02d19295e080bdf2479395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_cea4b7dc4a9863bb0776e765274b1ad1bab9f279fc02d19295e080bdf2479395->leave($__internal_cea4b7dc4a9863bb0776e765274b1ad1bab9f279fc02d19295e080bdf2479395_prof);

        
        $__internal_f377495588e238ae97a9a45e3377e300f396dd745148a7e1f2fe32d1fde652a1->leave($__internal_f377495588e238ae97a9a45e3377e300f396dd745148a7e1f2fe32d1fde652a1_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a0a950b105a617a0a2a3b7b803398d0a563833cf122d4fb7a5f0d655b6e7c36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a950b105a617a0a2a3b7b803398d0a563833cf122d4fb7a5f0d655b6e7c36c->enter($__internal_a0a950b105a617a0a2a3b7b803398d0a563833cf122d4fb7a5f0d655b6e7c36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9bd189a9e85abf499c9d132c86cec3d38acd4b4e750b23a355db7a1e190968f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd189a9e85abf499c9d132c86cec3d38acd4b4e750b23a355db7a1e190968f2->enter($__internal_9bd189a9e85abf499c9d132c86cec3d38acd4b4e750b23a355db7a1e190968f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9bd189a9e85abf499c9d132c86cec3d38acd4b4e750b23a355db7a1e190968f2->leave($__internal_9bd189a9e85abf499c9d132c86cec3d38acd4b4e750b23a355db7a1e190968f2_prof);

        
        $__internal_a0a950b105a617a0a2a3b7b803398d0a563833cf122d4fb7a5f0d655b6e7c36c->leave($__internal_a0a950b105a617a0a2a3b7b803398d0a563833cf122d4fb7a5f0d655b6e7c36c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bdb849820e69a4254cde067f4eceede001c1e73b79f82b203944babb850f9922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb849820e69a4254cde067f4eceede001c1e73b79f82b203944babb850f9922->enter($__internal_bdb849820e69a4254cde067f4eceede001c1e73b79f82b203944babb850f9922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_08abb571de30b08d728ea4c3b8b021739b47f8d790dd550b8f48887bf85a08c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08abb571de30b08d728ea4c3b8b021739b47f8d790dd550b8f48887bf85a08c9->enter($__internal_08abb571de30b08d728ea4c3b8b021739b47f8d790dd550b8f48887bf85a08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_08abb571de30b08d728ea4c3b8b021739b47f8d790dd550b8f48887bf85a08c9->leave($__internal_08abb571de30b08d728ea4c3b8b021739b47f8d790dd550b8f48887bf85a08c9_prof);

        
        $__internal_bdb849820e69a4254cde067f4eceede001c1e73b79f82b203944babb850f9922->leave($__internal_bdb849820e69a4254cde067f4eceede001c1e73b79f82b203944babb850f9922_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1c30a036bbc07d88074cccd3ef493e52f1b6a49f50bdc7b18f0366de6d834673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c30a036bbc07d88074cccd3ef493e52f1b6a49f50bdc7b18f0366de6d834673->enter($__internal_1c30a036bbc07d88074cccd3ef493e52f1b6a49f50bdc7b18f0366de6d834673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_518fe7fee43ba9597f6968868dc2169def6689dc1dffc9a29bc4b02f6a649d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518fe7fee43ba9597f6968868dc2169def6689dc1dffc9a29bc4b02f6a649d42->enter($__internal_518fe7fee43ba9597f6968868dc2169def6689dc1dffc9a29bc4b02f6a649d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_518fe7fee43ba9597f6968868dc2169def6689dc1dffc9a29bc4b02f6a649d42->leave($__internal_518fe7fee43ba9597f6968868dc2169def6689dc1dffc9a29bc4b02f6a649d42_prof);

        
        $__internal_1c30a036bbc07d88074cccd3ef493e52f1b6a49f50bdc7b18f0366de6d834673->leave($__internal_1c30a036bbc07d88074cccd3ef493e52f1b6a49f50bdc7b18f0366de6d834673_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_31290690a28cc08deb5b6f249394e5b75ff44df450eaedc34e18cdb0b4be38e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31290690a28cc08deb5b6f249394e5b75ff44df450eaedc34e18cdb0b4be38e8->enter($__internal_31290690a28cc08deb5b6f249394e5b75ff44df450eaedc34e18cdb0b4be38e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_49ccd14230792ba95633e0a32129fb48a661bdc2b1add312ecc81faf1c785d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ccd14230792ba95633e0a32129fb48a661bdc2b1add312ecc81faf1c785d44->enter($__internal_49ccd14230792ba95633e0a32129fb48a661bdc2b1add312ecc81faf1c785d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_49ccd14230792ba95633e0a32129fb48a661bdc2b1add312ecc81faf1c785d44->leave($__internal_49ccd14230792ba95633e0a32129fb48a661bdc2b1add312ecc81faf1c785d44_prof);

        
        $__internal_31290690a28cc08deb5b6f249394e5b75ff44df450eaedc34e18cdb0b4be38e8->leave($__internal_31290690a28cc08deb5b6f249394e5b75ff44df450eaedc34e18cdb0b4be38e8_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f7edc6b9d29e4b7633d31bdabcaf7ba62d70d7eedcc2078e262dd389358d39e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7edc6b9d29e4b7633d31bdabcaf7ba62d70d7eedcc2078e262dd389358d39e0->enter($__internal_f7edc6b9d29e4b7633d31bdabcaf7ba62d70d7eedcc2078e262dd389358d39e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d9712ede68d91656bf6ade40ee5c0c6dd5d6027d5c130ed743d8cc626b825013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9712ede68d91656bf6ade40ee5c0c6dd5d6027d5c130ed743d8cc626b825013->enter($__internal_d9712ede68d91656bf6ade40ee5c0c6dd5d6027d5c130ed743d8cc626b825013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_d9712ede68d91656bf6ade40ee5c0c6dd5d6027d5c130ed743d8cc626b825013->leave($__internal_d9712ede68d91656bf6ade40ee5c0c6dd5d6027d5c130ed743d8cc626b825013_prof);

        
        $__internal_f7edc6b9d29e4b7633d31bdabcaf7ba62d70d7eedcc2078e262dd389358d39e0->leave($__internal_f7edc6b9d29e4b7633d31bdabcaf7ba62d70d7eedcc2078e262dd389358d39e0_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ad31d7ea6c0a2567bbe4eb2d644d1cb4eff261ba406795d6abd0663ccc70e2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad31d7ea6c0a2567bbe4eb2d644d1cb4eff261ba406795d6abd0663ccc70e2db->enter($__internal_ad31d7ea6c0a2567bbe4eb2d644d1cb4eff261ba406795d6abd0663ccc70e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_49e4f90b6fc3b594a338a720dba0466167fa719f0101059322a193e55d90cf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e4f90b6fc3b594a338a720dba0466167fa719f0101059322a193e55d90cf73->enter($__internal_49e4f90b6fc3b594a338a720dba0466167fa719f0101059322a193e55d90cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_49e4f90b6fc3b594a338a720dba0466167fa719f0101059322a193e55d90cf73->leave($__internal_49e4f90b6fc3b594a338a720dba0466167fa719f0101059322a193e55d90cf73_prof);

        
        $__internal_ad31d7ea6c0a2567bbe4eb2d644d1cb4eff261ba406795d6abd0663ccc70e2db->leave($__internal_ad31d7ea6c0a2567bbe4eb2d644d1cb4eff261ba406795d6abd0663ccc70e2db_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fc1781b5f4326a1c1b2e0bba378d1ca6f71005ed33e2cb10760bc3d9052f433a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1781b5f4326a1c1b2e0bba378d1ca6f71005ed33e2cb10760bc3d9052f433a->enter($__internal_fc1781b5f4326a1c1b2e0bba378d1ca6f71005ed33e2cb10760bc3d9052f433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d6f6d0b3fb295dff3cc65a1ef29028b96406770644ad4e7e99f0910aa6e22ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f6d0b3fb295dff3cc65a1ef29028b96406770644ad4e7e99f0910aa6e22ff7->enter($__internal_d6f6d0b3fb295dff3cc65a1ef29028b96406770644ad4e7e99f0910aa6e22ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d6f6d0b3fb295dff3cc65a1ef29028b96406770644ad4e7e99f0910aa6e22ff7->leave($__internal_d6f6d0b3fb295dff3cc65a1ef29028b96406770644ad4e7e99f0910aa6e22ff7_prof);

        
        $__internal_fc1781b5f4326a1c1b2e0bba378d1ca6f71005ed33e2cb10760bc3d9052f433a->leave($__internal_fc1781b5f4326a1c1b2e0bba378d1ca6f71005ed33e2cb10760bc3d9052f433a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}

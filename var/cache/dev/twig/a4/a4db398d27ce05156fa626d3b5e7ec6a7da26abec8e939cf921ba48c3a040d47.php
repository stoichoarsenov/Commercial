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
        $__internal_8275ac9b84538332714d045e0a37151ed98fc9f5c23ca6be6dbd33b1dc781dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8275ac9b84538332714d045e0a37151ed98fc9f5c23ca6be6dbd33b1dc781dcc->enter($__internal_8275ac9b84538332714d045e0a37151ed98fc9f5c23ca6be6dbd33b1dc781dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_c3e9dc03dc2217b71d55b352254762f6e4b9eac5cdbe2d7e0562bbb2db787cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e9dc03dc2217b71d55b352254762f6e4b9eac5cdbe2d7e0562bbb2db787cc6->enter($__internal_c3e9dc03dc2217b71d55b352254762f6e4b9eac5cdbe2d7e0562bbb2db787cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_8275ac9b84538332714d045e0a37151ed98fc9f5c23ca6be6dbd33b1dc781dcc->leave($__internal_8275ac9b84538332714d045e0a37151ed98fc9f5c23ca6be6dbd33b1dc781dcc_prof);

        
        $__internal_c3e9dc03dc2217b71d55b352254762f6e4b9eac5cdbe2d7e0562bbb2db787cc6->leave($__internal_c3e9dc03dc2217b71d55b352254762f6e4b9eac5cdbe2d7e0562bbb2db787cc6_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4850fda4c4fd6df300fbafc73889879f917f89e0f2775c545595887206a5bff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4850fda4c4fd6df300fbafc73889879f917f89e0f2775c545595887206a5bff0->enter($__internal_4850fda4c4fd6df300fbafc73889879f917f89e0f2775c545595887206a5bff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_de6c43e4506c6c0985461b74fddf75b2f81b433149d8aa6802496917a2967c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6c43e4506c6c0985461b74fddf75b2f81b433149d8aa6802496917a2967c84->enter($__internal_de6c43e4506c6c0985461b74fddf75b2f81b433149d8aa6802496917a2967c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_de6c43e4506c6c0985461b74fddf75b2f81b433149d8aa6802496917a2967c84->leave($__internal_de6c43e4506c6c0985461b74fddf75b2f81b433149d8aa6802496917a2967c84_prof);

        
        $__internal_4850fda4c4fd6df300fbafc73889879f917f89e0f2775c545595887206a5bff0->leave($__internal_4850fda4c4fd6df300fbafc73889879f917f89e0f2775c545595887206a5bff0_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7e13ccb7d94482acddff191d81c811ec0d8330dbd59007da8303138460faa1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e13ccb7d94482acddff191d81c811ec0d8330dbd59007da8303138460faa1d5->enter($__internal_7e13ccb7d94482acddff191d81c811ec0d8330dbd59007da8303138460faa1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e7b9429422cbed07d8ae3045e6d78a9d5c4fd43e19a4ac5d95b20419808539f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b9429422cbed07d8ae3045e6d78a9d5c4fd43e19a4ac5d95b20419808539f4->enter($__internal_e7b9429422cbed07d8ae3045e6d78a9d5c4fd43e19a4ac5d95b20419808539f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_e7b9429422cbed07d8ae3045e6d78a9d5c4fd43e19a4ac5d95b20419808539f4->leave($__internal_e7b9429422cbed07d8ae3045e6d78a9d5c4fd43e19a4ac5d95b20419808539f4_prof);

        
        $__internal_7e13ccb7d94482acddff191d81c811ec0d8330dbd59007da8303138460faa1d5->leave($__internal_7e13ccb7d94482acddff191d81c811ec0d8330dbd59007da8303138460faa1d5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5f12a42e849818f65a85671a6d332173602ab26226ead356a77e0a280ac98d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f12a42e849818f65a85671a6d332173602ab26226ead356a77e0a280ac98d5c->enter($__internal_5f12a42e849818f65a85671a6d332173602ab26226ead356a77e0a280ac98d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_196b57f07560457a54a024d00c77efda9486ed99e8904d1627cc84a1ee28a295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196b57f07560457a54a024d00c77efda9486ed99e8904d1627cc84a1ee28a295->enter($__internal_196b57f07560457a54a024d00c77efda9486ed99e8904d1627cc84a1ee28a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_196b57f07560457a54a024d00c77efda9486ed99e8904d1627cc84a1ee28a295->leave($__internal_196b57f07560457a54a024d00c77efda9486ed99e8904d1627cc84a1ee28a295_prof);

        
        $__internal_5f12a42e849818f65a85671a6d332173602ab26226ead356a77e0a280ac98d5c->leave($__internal_5f12a42e849818f65a85671a6d332173602ab26226ead356a77e0a280ac98d5c_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_8cb63577f486eeb71b4482dd3e7250c894ad6327d16a41a52a00d7dc9e90bca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb63577f486eeb71b4482dd3e7250c894ad6327d16a41a52a00d7dc9e90bca8->enter($__internal_8cb63577f486eeb71b4482dd3e7250c894ad6327d16a41a52a00d7dc9e90bca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_773eb1caf810bd55d545f1514d1883baa3219e80a2554284f2754b983aaeeba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773eb1caf810bd55d545f1514d1883baa3219e80a2554284f2754b983aaeeba8->enter($__internal_773eb1caf810bd55d545f1514d1883baa3219e80a2554284f2754b983aaeeba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_773eb1caf810bd55d545f1514d1883baa3219e80a2554284f2754b983aaeeba8->leave($__internal_773eb1caf810bd55d545f1514d1883baa3219e80a2554284f2754b983aaeeba8_prof);

        
        $__internal_8cb63577f486eeb71b4482dd3e7250c894ad6327d16a41a52a00d7dc9e90bca8->leave($__internal_8cb63577f486eeb71b4482dd3e7250c894ad6327d16a41a52a00d7dc9e90bca8_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a3040966ec823a3b2b2071a23db570fff97e81195a41693907df160d81b3ef1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3040966ec823a3b2b2071a23db570fff97e81195a41693907df160d81b3ef1c->enter($__internal_a3040966ec823a3b2b2071a23db570fff97e81195a41693907df160d81b3ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_412d26be44c1c1154440bc06b716f71d04d48d4753add6fcbc50109da5a60279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412d26be44c1c1154440bc06b716f71d04d48d4753add6fcbc50109da5a60279->enter($__internal_412d26be44c1c1154440bc06b716f71d04d48d4753add6fcbc50109da5a60279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_412d26be44c1c1154440bc06b716f71d04d48d4753add6fcbc50109da5a60279->leave($__internal_412d26be44c1c1154440bc06b716f71d04d48d4753add6fcbc50109da5a60279_prof);

        
        $__internal_a3040966ec823a3b2b2071a23db570fff97e81195a41693907df160d81b3ef1c->leave($__internal_a3040966ec823a3b2b2071a23db570fff97e81195a41693907df160d81b3ef1c_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4643d0af2beb60f1fb218b4f87a1c6a1c5912b2979a3a9ce12f7dcecd08f4621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4643d0af2beb60f1fb218b4f87a1c6a1c5912b2979a3a9ce12f7dcecd08f4621->enter($__internal_4643d0af2beb60f1fb218b4f87a1c6a1c5912b2979a3a9ce12f7dcecd08f4621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a51391a20bc198dab341bb6cb00d03ffe60db838ac776e1c5f74a46abfad69d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51391a20bc198dab341bb6cb00d03ffe60db838ac776e1c5f74a46abfad69d6->enter($__internal_a51391a20bc198dab341bb6cb00d03ffe60db838ac776e1c5f74a46abfad69d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_a51391a20bc198dab341bb6cb00d03ffe60db838ac776e1c5f74a46abfad69d6->leave($__internal_a51391a20bc198dab341bb6cb00d03ffe60db838ac776e1c5f74a46abfad69d6_prof);

        
        $__internal_4643d0af2beb60f1fb218b4f87a1c6a1c5912b2979a3a9ce12f7dcecd08f4621->leave($__internal_4643d0af2beb60f1fb218b4f87a1c6a1c5912b2979a3a9ce12f7dcecd08f4621_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b7262343bdd71a12dbe15c8426d4c0315083724ee03282293ee5bce818a9712b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7262343bdd71a12dbe15c8426d4c0315083724ee03282293ee5bce818a9712b->enter($__internal_b7262343bdd71a12dbe15c8426d4c0315083724ee03282293ee5bce818a9712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7c34b950886f44ea7f5c6bddbfd5af27c0167ae211194fc1c6d5f12928a80b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c34b950886f44ea7f5c6bddbfd5af27c0167ae211194fc1c6d5f12928a80b8b->enter($__internal_7c34b950886f44ea7f5c6bddbfd5af27c0167ae211194fc1c6d5f12928a80b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_7c34b950886f44ea7f5c6bddbfd5af27c0167ae211194fc1c6d5f12928a80b8b->leave($__internal_7c34b950886f44ea7f5c6bddbfd5af27c0167ae211194fc1c6d5f12928a80b8b_prof);

        
        $__internal_b7262343bdd71a12dbe15c8426d4c0315083724ee03282293ee5bce818a9712b->leave($__internal_b7262343bdd71a12dbe15c8426d4c0315083724ee03282293ee5bce818a9712b_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f0c4fb17276949ac8f50dae49bf3257663748c89b735ae1b8c49be7162829cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c4fb17276949ac8f50dae49bf3257663748c89b735ae1b8c49be7162829cc3->enter($__internal_f0c4fb17276949ac8f50dae49bf3257663748c89b735ae1b8c49be7162829cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d7a1f322bdb3031ab06260aaf3da825fad563ffc2a8fa3e93855ddd999492529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a1f322bdb3031ab06260aaf3da825fad563ffc2a8fa3e93855ddd999492529->enter($__internal_d7a1f322bdb3031ab06260aaf3da825fad563ffc2a8fa3e93855ddd999492529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d7a1f322bdb3031ab06260aaf3da825fad563ffc2a8fa3e93855ddd999492529->leave($__internal_d7a1f322bdb3031ab06260aaf3da825fad563ffc2a8fa3e93855ddd999492529_prof);

        
        $__internal_f0c4fb17276949ac8f50dae49bf3257663748c89b735ae1b8c49be7162829cc3->leave($__internal_f0c4fb17276949ac8f50dae49bf3257663748c89b735ae1b8c49be7162829cc3_prof);

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

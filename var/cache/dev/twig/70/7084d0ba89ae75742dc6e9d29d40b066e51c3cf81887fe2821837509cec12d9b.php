<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f7860b89a9947edfe8331a32367c7bca9bfbe2853bcc354cd8e15e2ab9681f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44fd2ca25de4cbe1029f7336e849ceabb0fc0bbf9098bfe1319b650b245766ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fd2ca25de4cbe1029f7336e849ceabb0fc0bbf9098bfe1319b650b245766ee->enter($__internal_44fd2ca25de4cbe1029f7336e849ceabb0fc0bbf9098bfe1319b650b245766ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_7b54d413e6ce6a8c2a40a707e6b9fe90430a1983b72a77f7e6f9ccfb3265e564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b54d413e6ce6a8c2a40a707e6b9fe90430a1983b72a77f7e6f9ccfb3265e564->enter($__internal_7b54d413e6ce6a8c2a40a707e6b9fe90430a1983b72a77f7e6f9ccfb3265e564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_44fd2ca25de4cbe1029f7336e849ceabb0fc0bbf9098bfe1319b650b245766ee->leave($__internal_44fd2ca25de4cbe1029f7336e849ceabb0fc0bbf9098bfe1319b650b245766ee_prof);

        
        $__internal_7b54d413e6ce6a8c2a40a707e6b9fe90430a1983b72a77f7e6f9ccfb3265e564->leave($__internal_7b54d413e6ce6a8c2a40a707e6b9fe90430a1983b72a77f7e6f9ccfb3265e564_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_dc7e6e04fd6db5bdd400e26fdf8f5fcc6713c67269c67759fed7cf086303f8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7e6e04fd6db5bdd400e26fdf8f5fcc6713c67269c67759fed7cf086303f8ce->enter($__internal_dc7e6e04fd6db5bdd400e26fdf8f5fcc6713c67269c67759fed7cf086303f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ea99c0c5a25f14a5651c7e09bcde322ac19204ad65a50ffa352ed608fbfa61b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea99c0c5a25f14a5651c7e09bcde322ac19204ad65a50ffa352ed608fbfa61b1->enter($__internal_ea99c0c5a25f14a5651c7e09bcde322ac19204ad65a50ffa352ed608fbfa61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ea99c0c5a25f14a5651c7e09bcde322ac19204ad65a50ffa352ed608fbfa61b1->leave($__internal_ea99c0c5a25f14a5651c7e09bcde322ac19204ad65a50ffa352ed608fbfa61b1_prof);

        
        $__internal_dc7e6e04fd6db5bdd400e26fdf8f5fcc6713c67269c67759fed7cf086303f8ce->leave($__internal_dc7e6e04fd6db5bdd400e26fdf8f5fcc6713c67269c67759fed7cf086303f8ce_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1b1058730ebfe2433dbe0cf6c863413dfda8d6a1e19d389a0f3bc622c23905c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1058730ebfe2433dbe0cf6c863413dfda8d6a1e19d389a0f3bc622c23905c3->enter($__internal_1b1058730ebfe2433dbe0cf6c863413dfda8d6a1e19d389a0f3bc622c23905c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_809041fdd957434dac49a6782440507f939bfcca641312ac0d2d45710437c176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809041fdd957434dac49a6782440507f939bfcca641312ac0d2d45710437c176->enter($__internal_809041fdd957434dac49a6782440507f939bfcca641312ac0d2d45710437c176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_809041fdd957434dac49a6782440507f939bfcca641312ac0d2d45710437c176->leave($__internal_809041fdd957434dac49a6782440507f939bfcca641312ac0d2d45710437c176_prof);

        
        $__internal_1b1058730ebfe2433dbe0cf6c863413dfda8d6a1e19d389a0f3bc622c23905c3->leave($__internal_1b1058730ebfe2433dbe0cf6c863413dfda8d6a1e19d389a0f3bc622c23905c3_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_53a2cafca00c727d17583f501ba9ad2d788ecd3f6ccd043c7fd6819cf03646ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a2cafca00c727d17583f501ba9ad2d788ecd3f6ccd043c7fd6819cf03646ed->enter($__internal_53a2cafca00c727d17583f501ba9ad2d788ecd3f6ccd043c7fd6819cf03646ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ba20a61bfbb29ebaf8f5cd891a3eea193f21a9e5b3b676b09fad6035e4a6b3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba20a61bfbb29ebaf8f5cd891a3eea193f21a9e5b3b676b09fad6035e4a6b3a5->enter($__internal_ba20a61bfbb29ebaf8f5cd891a3eea193f21a9e5b3b676b09fad6035e4a6b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ba20a61bfbb29ebaf8f5cd891a3eea193f21a9e5b3b676b09fad6035e4a6b3a5->leave($__internal_ba20a61bfbb29ebaf8f5cd891a3eea193f21a9e5b3b676b09fad6035e4a6b3a5_prof);

        
        $__internal_53a2cafca00c727d17583f501ba9ad2d788ecd3f6ccd043c7fd6819cf03646ed->leave($__internal_53a2cafca00c727d17583f501ba9ad2d788ecd3f6ccd043c7fd6819cf03646ed_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8dd15551e01d7011d1c943ab2f1d2a0726d114fea6c6576cafcccc77f7f1d122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd15551e01d7011d1c943ab2f1d2a0726d114fea6c6576cafcccc77f7f1d122->enter($__internal_8dd15551e01d7011d1c943ab2f1d2a0726d114fea6c6576cafcccc77f7f1d122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_91c7c576f3f8f1e8542249c062f3ba5a7af90ab4e8f882c4d2473dbca9138b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c7c576f3f8f1e8542249c062f3ba5a7af90ab4e8f882c4d2473dbca9138b26->enter($__internal_91c7c576f3f8f1e8542249c062f3ba5a7af90ab4e8f882c4d2473dbca9138b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_91c7c576f3f8f1e8542249c062f3ba5a7af90ab4e8f882c4d2473dbca9138b26->leave($__internal_91c7c576f3f8f1e8542249c062f3ba5a7af90ab4e8f882c4d2473dbca9138b26_prof);

        
        $__internal_8dd15551e01d7011d1c943ab2f1d2a0726d114fea6c6576cafcccc77f7f1d122->leave($__internal_8dd15551e01d7011d1c943ab2f1d2a0726d114fea6c6576cafcccc77f7f1d122_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8cd5ed04f0359ece22adcb65f6953b2809c652241969961a0e4da4a73515f775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd5ed04f0359ece22adcb65f6953b2809c652241969961a0e4da4a73515f775->enter($__internal_8cd5ed04f0359ece22adcb65f6953b2809c652241969961a0e4da4a73515f775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b64cb84907216b9e5f20da7708d3f93e115b1eccb3dd5f596aab8cdd95e7a485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64cb84907216b9e5f20da7708d3f93e115b1eccb3dd5f596aab8cdd95e7a485->enter($__internal_b64cb84907216b9e5f20da7708d3f93e115b1eccb3dd5f596aab8cdd95e7a485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_b64cb84907216b9e5f20da7708d3f93e115b1eccb3dd5f596aab8cdd95e7a485->leave($__internal_b64cb84907216b9e5f20da7708d3f93e115b1eccb3dd5f596aab8cdd95e7a485_prof);

        
        $__internal_8cd5ed04f0359ece22adcb65f6953b2809c652241969961a0e4da4a73515f775->leave($__internal_8cd5ed04f0359ece22adcb65f6953b2809c652241969961a0e4da4a73515f775_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_772274f819f222194308938ccb23525f918373c139711395ad890299b43e5544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772274f819f222194308938ccb23525f918373c139711395ad890299b43e5544->enter($__internal_772274f819f222194308938ccb23525f918373c139711395ad890299b43e5544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a6c9fcbca925b8f556601d149e9787d852f5dcfe50b46d8e3eab27c8b9169cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c9fcbca925b8f556601d149e9787d852f5dcfe50b46d8e3eab27c8b9169cb6->enter($__internal_a6c9fcbca925b8f556601d149e9787d852f5dcfe50b46d8e3eab27c8b9169cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_a6c9fcbca925b8f556601d149e9787d852f5dcfe50b46d8e3eab27c8b9169cb6->leave($__internal_a6c9fcbca925b8f556601d149e9787d852f5dcfe50b46d8e3eab27c8b9169cb6_prof);

        
        $__internal_772274f819f222194308938ccb23525f918373c139711395ad890299b43e5544->leave($__internal_772274f819f222194308938ccb23525f918373c139711395ad890299b43e5544_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_23d7883e904fe07e31c894ae7d1877ffcaf190040dd49e5696d1d249ec29f183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d7883e904fe07e31c894ae7d1877ffcaf190040dd49e5696d1d249ec29f183->enter($__internal_23d7883e904fe07e31c894ae7d1877ffcaf190040dd49e5696d1d249ec29f183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_09930c03e745506ffd6558ef5db2997334edb01fc16197bcacc12e89ed86d05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09930c03e745506ffd6558ef5db2997334edb01fc16197bcacc12e89ed86d05f->enter($__internal_09930c03e745506ffd6558ef5db2997334edb01fc16197bcacc12e89ed86d05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_09930c03e745506ffd6558ef5db2997334edb01fc16197bcacc12e89ed86d05f->leave($__internal_09930c03e745506ffd6558ef5db2997334edb01fc16197bcacc12e89ed86d05f_prof);

        
        $__internal_23d7883e904fe07e31c894ae7d1877ffcaf190040dd49e5696d1d249ec29f183->leave($__internal_23d7883e904fe07e31c894ae7d1877ffcaf190040dd49e5696d1d249ec29f183_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1d1d29d84c8b03a7a3c5054452a6429f03e56be9e11701af804cc16f86293a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1d29d84c8b03a7a3c5054452a6429f03e56be9e11701af804cc16f86293a79->enter($__internal_1d1d29d84c8b03a7a3c5054452a6429f03e56be9e11701af804cc16f86293a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_50e63409bf197a97a45020eefe1936c61559431d49b3bf71782206013a739348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e63409bf197a97a45020eefe1936c61559431d49b3bf71782206013a739348->enter($__internal_50e63409bf197a97a45020eefe1936c61559431d49b3bf71782206013a739348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_50e63409bf197a97a45020eefe1936c61559431d49b3bf71782206013a739348->leave($__internal_50e63409bf197a97a45020eefe1936c61559431d49b3bf71782206013a739348_prof);

        
        $__internal_1d1d29d84c8b03a7a3c5054452a6429f03e56be9e11701af804cc16f86293a79->leave($__internal_1d1d29d84c8b03a7a3c5054452a6429f03e56be9e11701af804cc16f86293a79_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}

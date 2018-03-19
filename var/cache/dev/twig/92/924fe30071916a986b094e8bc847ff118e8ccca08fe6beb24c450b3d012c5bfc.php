<?php

/* form_table_layout.html.twig */
class __TwigTemplate_633701ba25c607bc19e805d6e22a6bf4023cab57c27c60be600d057460e497d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f521bd1586c779eaf8bdbbcc8c4448ebd6140b65fa2d402d7abdcac3f4bc35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f521bd1586c779eaf8bdbbcc8c4448ebd6140b65fa2d402d7abdcac3f4bc35d->enter($__internal_9f521bd1586c779eaf8bdbbcc8c4448ebd6140b65fa2d402d7abdcac3f4bc35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d94cd5f8c14b000f1221fa586569c63f01ed6568af3af90c1714b33faf7eec4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94cd5f8c14b000f1221fa586569c63f01ed6568af3af90c1714b33faf7eec4d->enter($__internal_d94cd5f8c14b000f1221fa586569c63f01ed6568af3af90c1714b33faf7eec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9f521bd1586c779eaf8bdbbcc8c4448ebd6140b65fa2d402d7abdcac3f4bc35d->leave($__internal_9f521bd1586c779eaf8bdbbcc8c4448ebd6140b65fa2d402d7abdcac3f4bc35d_prof);

        
        $__internal_d94cd5f8c14b000f1221fa586569c63f01ed6568af3af90c1714b33faf7eec4d->leave($__internal_d94cd5f8c14b000f1221fa586569c63f01ed6568af3af90c1714b33faf7eec4d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_13f741fc6b296560c9c4657534d0602bb09436074575c6ac793341998b7ee0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f741fc6b296560c9c4657534d0602bb09436074575c6ac793341998b7ee0a2->enter($__internal_13f741fc6b296560c9c4657534d0602bb09436074575c6ac793341998b7ee0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_11c888381a2357d26224a7376189d6856368319f8bb294515fd7038df04f77a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c888381a2357d26224a7376189d6856368319f8bb294515fd7038df04f77a4->enter($__internal_11c888381a2357d26224a7376189d6856368319f8bb294515fd7038df04f77a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_11c888381a2357d26224a7376189d6856368319f8bb294515fd7038df04f77a4->leave($__internal_11c888381a2357d26224a7376189d6856368319f8bb294515fd7038df04f77a4_prof);

        
        $__internal_13f741fc6b296560c9c4657534d0602bb09436074575c6ac793341998b7ee0a2->leave($__internal_13f741fc6b296560c9c4657534d0602bb09436074575c6ac793341998b7ee0a2_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cfaa111aa0931be7f8fd7aa456665c13ab8df0ad82c41262fea40070d23f315f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaa111aa0931be7f8fd7aa456665c13ab8df0ad82c41262fea40070d23f315f->enter($__internal_cfaa111aa0931be7f8fd7aa456665c13ab8df0ad82c41262fea40070d23f315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_68f687af6dd8f9cc3c44c1d8396b955a7cae5d0f3a7b59d8ec32215033e97e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f687af6dd8f9cc3c44c1d8396b955a7cae5d0f3a7b59d8ec32215033e97e84->enter($__internal_68f687af6dd8f9cc3c44c1d8396b955a7cae5d0f3a7b59d8ec32215033e97e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_68f687af6dd8f9cc3c44c1d8396b955a7cae5d0f3a7b59d8ec32215033e97e84->leave($__internal_68f687af6dd8f9cc3c44c1d8396b955a7cae5d0f3a7b59d8ec32215033e97e84_prof);

        
        $__internal_cfaa111aa0931be7f8fd7aa456665c13ab8df0ad82c41262fea40070d23f315f->leave($__internal_cfaa111aa0931be7f8fd7aa456665c13ab8df0ad82c41262fea40070d23f315f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ed475b97f8d3622a93623a31f856481f011d524afd72b441de9f196f77c58ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed475b97f8d3622a93623a31f856481f011d524afd72b441de9f196f77c58ce5->enter($__internal_ed475b97f8d3622a93623a31f856481f011d524afd72b441de9f196f77c58ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4f6e79af44777ce4c59024c1ed22822378e234b9b8973fb4279a9f58418d991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6e79af44777ce4c59024c1ed22822378e234b9b8973fb4279a9f58418d991d->enter($__internal_4f6e79af44777ce4c59024c1ed22822378e234b9b8973fb4279a9f58418d991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4f6e79af44777ce4c59024c1ed22822378e234b9b8973fb4279a9f58418d991d->leave($__internal_4f6e79af44777ce4c59024c1ed22822378e234b9b8973fb4279a9f58418d991d_prof);

        
        $__internal_ed475b97f8d3622a93623a31f856481f011d524afd72b441de9f196f77c58ce5->leave($__internal_ed475b97f8d3622a93623a31f856481f011d524afd72b441de9f196f77c58ce5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_13ed258f088770fc74175377f7c69089d3894892fff66ca8e5653bc5217ad3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ed258f088770fc74175377f7c69089d3894892fff66ca8e5653bc5217ad3ff->enter($__internal_13ed258f088770fc74175377f7c69089d3894892fff66ca8e5653bc5217ad3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d1f3cdf1ce5a41583e4b3b1137b2e8cf8cfd22f9cf96d4cf3c34004b74442793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f3cdf1ce5a41583e4b3b1137b2e8cf8cfd22f9cf96d4cf3c34004b74442793->enter($__internal_d1f3cdf1ce5a41583e4b3b1137b2e8cf8cfd22f9cf96d4cf3c34004b74442793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_d1f3cdf1ce5a41583e4b3b1137b2e8cf8cfd22f9cf96d4cf3c34004b74442793->leave($__internal_d1f3cdf1ce5a41583e4b3b1137b2e8cf8cfd22f9cf96d4cf3c34004b74442793_prof);

        
        $__internal_13ed258f088770fc74175377f7c69089d3894892fff66ca8e5653bc5217ad3ff->leave($__internal_13ed258f088770fc74175377f7c69089d3894892fff66ca8e5653bc5217ad3ff_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}

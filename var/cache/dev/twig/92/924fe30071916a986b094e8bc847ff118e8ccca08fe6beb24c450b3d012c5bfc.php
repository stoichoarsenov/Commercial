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
        $__internal_4f853288e6b23d60119af876618485e364cd25f2c4578045923f578af4760594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f853288e6b23d60119af876618485e364cd25f2c4578045923f578af4760594->enter($__internal_4f853288e6b23d60119af876618485e364cd25f2c4578045923f578af4760594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_e23ade606af155cb56f1450a7dbe08b066bbf7f64673ff70e95e362db4a3c8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23ade606af155cb56f1450a7dbe08b066bbf7f64673ff70e95e362db4a3c8da->enter($__internal_e23ade606af155cb56f1450a7dbe08b066bbf7f64673ff70e95e362db4a3c8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4f853288e6b23d60119af876618485e364cd25f2c4578045923f578af4760594->leave($__internal_4f853288e6b23d60119af876618485e364cd25f2c4578045923f578af4760594_prof);

        
        $__internal_e23ade606af155cb56f1450a7dbe08b066bbf7f64673ff70e95e362db4a3c8da->leave($__internal_e23ade606af155cb56f1450a7dbe08b066bbf7f64673ff70e95e362db4a3c8da_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f0f5e0204a892dc6accb6bf7440b214357bef1f2d52f8dacb4bdb5417bc65ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f5e0204a892dc6accb6bf7440b214357bef1f2d52f8dacb4bdb5417bc65ece->enter($__internal_f0f5e0204a892dc6accb6bf7440b214357bef1f2d52f8dacb4bdb5417bc65ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7f1b9ee32844db056bb1c6d56a8afabc3933f6da54f3069c4f9bafb174ff6cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1b9ee32844db056bb1c6d56a8afabc3933f6da54f3069c4f9bafb174ff6cfe->enter($__internal_7f1b9ee32844db056bb1c6d56a8afabc3933f6da54f3069c4f9bafb174ff6cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7f1b9ee32844db056bb1c6d56a8afabc3933f6da54f3069c4f9bafb174ff6cfe->leave($__internal_7f1b9ee32844db056bb1c6d56a8afabc3933f6da54f3069c4f9bafb174ff6cfe_prof);

        
        $__internal_f0f5e0204a892dc6accb6bf7440b214357bef1f2d52f8dacb4bdb5417bc65ece->leave($__internal_f0f5e0204a892dc6accb6bf7440b214357bef1f2d52f8dacb4bdb5417bc65ece_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8b74615e2b3788deea7cd09a487b81a989b6f44509a030bb711d826606605226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b74615e2b3788deea7cd09a487b81a989b6f44509a030bb711d826606605226->enter($__internal_8b74615e2b3788deea7cd09a487b81a989b6f44509a030bb711d826606605226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_84728cf4cdcd81e363afcc7711c83c67b891b322141b7d22ffb7010377968aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84728cf4cdcd81e363afcc7711c83c67b891b322141b7d22ffb7010377968aa1->enter($__internal_84728cf4cdcd81e363afcc7711c83c67b891b322141b7d22ffb7010377968aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_84728cf4cdcd81e363afcc7711c83c67b891b322141b7d22ffb7010377968aa1->leave($__internal_84728cf4cdcd81e363afcc7711c83c67b891b322141b7d22ffb7010377968aa1_prof);

        
        $__internal_8b74615e2b3788deea7cd09a487b81a989b6f44509a030bb711d826606605226->leave($__internal_8b74615e2b3788deea7cd09a487b81a989b6f44509a030bb711d826606605226_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_396db606850b3df07ce4831fc18c5b494be805799502f06a94a13858d57da59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396db606850b3df07ce4831fc18c5b494be805799502f06a94a13858d57da59e->enter($__internal_396db606850b3df07ce4831fc18c5b494be805799502f06a94a13858d57da59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_e6b5c5b5f7df528ed48e9ed315bf99f495bc68f1ef708e7aa37c261c60cc52c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b5c5b5f7df528ed48e9ed315bf99f495bc68f1ef708e7aa37c261c60cc52c6->enter($__internal_e6b5c5b5f7df528ed48e9ed315bf99f495bc68f1ef708e7aa37c261c60cc52c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_e6b5c5b5f7df528ed48e9ed315bf99f495bc68f1ef708e7aa37c261c60cc52c6->leave($__internal_e6b5c5b5f7df528ed48e9ed315bf99f495bc68f1ef708e7aa37c261c60cc52c6_prof);

        
        $__internal_396db606850b3df07ce4831fc18c5b494be805799502f06a94a13858d57da59e->leave($__internal_396db606850b3df07ce4831fc18c5b494be805799502f06a94a13858d57da59e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0e7fec3f98e5b1c194e6f5e790aa999dee9918063956c9c3b2065fe734f63f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7fec3f98e5b1c194e6f5e790aa999dee9918063956c9c3b2065fe734f63f24->enter($__internal_0e7fec3f98e5b1c194e6f5e790aa999dee9918063956c9c3b2065fe734f63f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d3168d1a1af8ad201be9a72727892403c083d6e392d3fbe3c9d310e50e32d482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3168d1a1af8ad201be9a72727892403c083d6e392d3fbe3c9d310e50e32d482->enter($__internal_d3168d1a1af8ad201be9a72727892403c083d6e392d3fbe3c9d310e50e32d482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d3168d1a1af8ad201be9a72727892403c083d6e392d3fbe3c9d310e50e32d482->leave($__internal_d3168d1a1af8ad201be9a72727892403c083d6e392d3fbe3c9d310e50e32d482_prof);

        
        $__internal_0e7fec3f98e5b1c194e6f5e790aa999dee9918063956c9c3b2065fe734f63f24->leave($__internal_0e7fec3f98e5b1c194e6f5e790aa999dee9918063956c9c3b2065fe734f63f24_prof);

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

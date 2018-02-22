<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8b0f1b1a9304fb6481a88364b152eef4aaaef07eedf89617d77a36110e3278bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c510fece2620b362cbd7aea15abef19c0af18ea54d9424db61769b859395c375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c510fece2620b362cbd7aea15abef19c0af18ea54d9424db61769b859395c375->enter($__internal_c510fece2620b362cbd7aea15abef19c0af18ea54d9424db61769b859395c375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6c260e62a612470d38d24a14f750cdddaf3ab216323bb3bd676e82839ecab40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c260e62a612470d38d24a14f750cdddaf3ab216323bb3bd676e82839ecab40->enter($__internal_b6c260e62a612470d38d24a14f750cdddaf3ab216323bb3bd676e82839ecab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c510fece2620b362cbd7aea15abef19c0af18ea54d9424db61769b859395c375->leave($__internal_c510fece2620b362cbd7aea15abef19c0af18ea54d9424db61769b859395c375_prof);

        
        $__internal_b6c260e62a612470d38d24a14f750cdddaf3ab216323bb3bd676e82839ecab40->leave($__internal_b6c260e62a612470d38d24a14f750cdddaf3ab216323bb3bd676e82839ecab40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0eee808025f6743c13795549914f985fa57d2cf364a4bcba3b4ec0e55190d405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eee808025f6743c13795549914f985fa57d2cf364a4bcba3b4ec0e55190d405->enter($__internal_0eee808025f6743c13795549914f985fa57d2cf364a4bcba3b4ec0e55190d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd4adf1811a96b5e6fa32c18f9f60a092817014e01520ea1397a8a573a26f9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4adf1811a96b5e6fa32c18f9f60a092817014e01520ea1397a8a573a26f9bc->enter($__internal_bd4adf1811a96b5e6fa32c18f9f60a092817014e01520ea1397a8a573a26f9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bd4adf1811a96b5e6fa32c18f9f60a092817014e01520ea1397a8a573a26f9bc->leave($__internal_bd4adf1811a96b5e6fa32c18f9f60a092817014e01520ea1397a8a573a26f9bc_prof);

        
        $__internal_0eee808025f6743c13795549914f985fa57d2cf364a4bcba3b4ec0e55190d405->leave($__internal_0eee808025f6743c13795549914f985fa57d2cf364a4bcba3b4ec0e55190d405_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b58106f941fb849cd7ab2f2d9ccb41a1dd45d18dfc34aacadffbabf80149140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b58106f941fb849cd7ab2f2d9ccb41a1dd45d18dfc34aacadffbabf80149140->enter($__internal_1b58106f941fb849cd7ab2f2d9ccb41a1dd45d18dfc34aacadffbabf80149140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c048bf386966900b9d8a342d4659ab9655efc1230c4e498cd04d3b90b1f90ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c048bf386966900b9d8a342d4659ab9655efc1230c4e498cd04d3b90b1f90ecc->enter($__internal_c048bf386966900b9d8a342d4659ab9655efc1230c4e498cd04d3b90b1f90ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c048bf386966900b9d8a342d4659ab9655efc1230c4e498cd04d3b90b1f90ecc->leave($__internal_c048bf386966900b9d8a342d4659ab9655efc1230c4e498cd04d3b90b1f90ecc_prof);

        
        $__internal_1b58106f941fb849cd7ab2f2d9ccb41a1dd45d18dfc34aacadffbabf80149140->leave($__internal_1b58106f941fb849cd7ab2f2d9ccb41a1dd45d18dfc34aacadffbabf80149140_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2180e150984153a807884fdf0da36ddf3c244355903d17804849e8c4eaddd0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2180e150984153a807884fdf0da36ddf3c244355903d17804849e8c4eaddd0c1->enter($__internal_2180e150984153a807884fdf0da36ddf3c244355903d17804849e8c4eaddd0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c37e5cc8ad842319d441385fde0acd7e73d4b61a782c1299c8942b984371f483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37e5cc8ad842319d441385fde0acd7e73d4b61a782c1299c8942b984371f483->enter($__internal_c37e5cc8ad842319d441385fde0acd7e73d4b61a782c1299c8942b984371f483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c37e5cc8ad842319d441385fde0acd7e73d4b61a782c1299c8942b984371f483->leave($__internal_c37e5cc8ad842319d441385fde0acd7e73d4b61a782c1299c8942b984371f483_prof);

        
        $__internal_2180e150984153a807884fdf0da36ddf3c244355903d17804849e8c4eaddd0c1->leave($__internal_2180e150984153a807884fdf0da36ddf3c244355903d17804849e8c4eaddd0c1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

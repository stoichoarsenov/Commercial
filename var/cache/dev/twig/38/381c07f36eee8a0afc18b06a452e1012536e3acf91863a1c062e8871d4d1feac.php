<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_afbae22a8bd10056116ee3ac84f94e710d3f2a79cfacb86d649c38d6139f9678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_27dc77071f0f0d49ea81480a9f2efd23e517dc36e0ef7c184530e263d85eb0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27dc77071f0f0d49ea81480a9f2efd23e517dc36e0ef7c184530e263d85eb0af->enter($__internal_27dc77071f0f0d49ea81480a9f2efd23e517dc36e0ef7c184530e263d85eb0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ed2ec974f5ed117d45d2da348f94b6d32bb728aa581673b755838a75f357de44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2ec974f5ed117d45d2da348f94b6d32bb728aa581673b755838a75f357de44->enter($__internal_ed2ec974f5ed117d45d2da348f94b6d32bb728aa581673b755838a75f357de44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27dc77071f0f0d49ea81480a9f2efd23e517dc36e0ef7c184530e263d85eb0af->leave($__internal_27dc77071f0f0d49ea81480a9f2efd23e517dc36e0ef7c184530e263d85eb0af_prof);

        
        $__internal_ed2ec974f5ed117d45d2da348f94b6d32bb728aa581673b755838a75f357de44->leave($__internal_ed2ec974f5ed117d45d2da348f94b6d32bb728aa581673b755838a75f357de44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69eb417974e6c7a928c0e0c25b030bee087709a45f851cb60a4efad243188a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69eb417974e6c7a928c0e0c25b030bee087709a45f851cb60a4efad243188a71->enter($__internal_69eb417974e6c7a928c0e0c25b030bee087709a45f851cb60a4efad243188a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0620185f78c4741343385f4fd46eef26420e095b318514aea50e0592c4a09e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0620185f78c4741343385f4fd46eef26420e095b318514aea50e0592c4a09e7->enter($__internal_c0620185f78c4741343385f4fd46eef26420e095b318514aea50e0592c4a09e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c0620185f78c4741343385f4fd46eef26420e095b318514aea50e0592c4a09e7->leave($__internal_c0620185f78c4741343385f4fd46eef26420e095b318514aea50e0592c4a09e7_prof);

        
        $__internal_69eb417974e6c7a928c0e0c25b030bee087709a45f851cb60a4efad243188a71->leave($__internal_69eb417974e6c7a928c0e0c25b030bee087709a45f851cb60a4efad243188a71_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fb06479c9fac0b919e24cf172dc8dff0a45889c59e714a7e70f313169fb4413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb06479c9fac0b919e24cf172dc8dff0a45889c59e714a7e70f313169fb4413->enter($__internal_5fb06479c9fac0b919e24cf172dc8dff0a45889c59e714a7e70f313169fb4413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5025f8cd099ca97cf3f25cc0b5cf84e8459b19fb2e447a0593f555e3965c670c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5025f8cd099ca97cf3f25cc0b5cf84e8459b19fb2e447a0593f555e3965c670c->enter($__internal_5025f8cd099ca97cf3f25cc0b5cf84e8459b19fb2e447a0593f555e3965c670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5025f8cd099ca97cf3f25cc0b5cf84e8459b19fb2e447a0593f555e3965c670c->leave($__internal_5025f8cd099ca97cf3f25cc0b5cf84e8459b19fb2e447a0593f555e3965c670c_prof);

        
        $__internal_5fb06479c9fac0b919e24cf172dc8dff0a45889c59e714a7e70f313169fb4413->leave($__internal_5fb06479c9fac0b919e24cf172dc8dff0a45889c59e714a7e70f313169fb4413_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5be68089e0ec558aee57edf8efc234899bdbde10416758a6996edcc518ddc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5be68089e0ec558aee57edf8efc234899bdbde10416758a6996edcc518ddc19->enter($__internal_a5be68089e0ec558aee57edf8efc234899bdbde10416758a6996edcc518ddc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d3e79db13035430e07d9a789d6041eeba5aada07e5f5a8aa04b0c30c379329b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3e79db13035430e07d9a789d6041eeba5aada07e5f5a8aa04b0c30c379329b->enter($__internal_4d3e79db13035430e07d9a789d6041eeba5aada07e5f5a8aa04b0c30c379329b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4d3e79db13035430e07d9a789d6041eeba5aada07e5f5a8aa04b0c30c379329b->leave($__internal_4d3e79db13035430e07d9a789d6041eeba5aada07e5f5a8aa04b0c30c379329b_prof);

        
        $__internal_a5be68089e0ec558aee57edf8efc234899bdbde10416758a6996edcc518ddc19->leave($__internal_a5be68089e0ec558aee57edf8efc234899bdbde10416758a6996edcc518ddc19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

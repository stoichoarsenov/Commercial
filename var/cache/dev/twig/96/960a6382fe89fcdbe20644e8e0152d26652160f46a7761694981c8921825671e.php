<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_10e78192d370367526e90a18ca1c33997e0acb1cd6cdad765e28c5095f32e80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e9a4441c1ecb5b93f1945018f181f42992ee0f28eb49786c1b819e94ed157fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9a4441c1ecb5b93f1945018f181f42992ee0f28eb49786c1b819e94ed157fe->enter($__internal_9e9a4441c1ecb5b93f1945018f181f42992ee0f28eb49786c1b819e94ed157fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8e953c93ab054d5db8ac113f40b397d6fb4beefa5ce47785d2c281168ebbacbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e953c93ab054d5db8ac113f40b397d6fb4beefa5ce47785d2c281168ebbacbb->enter($__internal_8e953c93ab054d5db8ac113f40b397d6fb4beefa5ce47785d2c281168ebbacbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9a4441c1ecb5b93f1945018f181f42992ee0f28eb49786c1b819e94ed157fe->leave($__internal_9e9a4441c1ecb5b93f1945018f181f42992ee0f28eb49786c1b819e94ed157fe_prof);

        
        $__internal_8e953c93ab054d5db8ac113f40b397d6fb4beefa5ce47785d2c281168ebbacbb->leave($__internal_8e953c93ab054d5db8ac113f40b397d6fb4beefa5ce47785d2c281168ebbacbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f41d5b5d5b7a683944a089dc30d79024c87637aefc845cd5f72a9b13b042f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f41d5b5d5b7a683944a089dc30d79024c87637aefc845cd5f72a9b13b042f7a->enter($__internal_2f41d5b5d5b7a683944a089dc30d79024c87637aefc845cd5f72a9b13b042f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d3ea55ce7d866a0a3ac1b211b026952b151c41a0ebbbca7d1a5b2f8a71e958c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ea55ce7d866a0a3ac1b211b026952b151c41a0ebbbca7d1a5b2f8a71e958c1->enter($__internal_d3ea55ce7d866a0a3ac1b211b026952b151c41a0ebbbca7d1a5b2f8a71e958c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d3ea55ce7d866a0a3ac1b211b026952b151c41a0ebbbca7d1a5b2f8a71e958c1->leave($__internal_d3ea55ce7d866a0a3ac1b211b026952b151c41a0ebbbca7d1a5b2f8a71e958c1_prof);

        
        $__internal_2f41d5b5d5b7a683944a089dc30d79024c87637aefc845cd5f72a9b13b042f7a->leave($__internal_2f41d5b5d5b7a683944a089dc30d79024c87637aefc845cd5f72a9b13b042f7a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

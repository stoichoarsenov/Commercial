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
        $__internal_8916096fc3d5e4a803c925d83f5ead218c884ca2fe678fe7b9a34388bcbd12a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8916096fc3d5e4a803c925d83f5ead218c884ca2fe678fe7b9a34388bcbd12a9->enter($__internal_8916096fc3d5e4a803c925d83f5ead218c884ca2fe678fe7b9a34388bcbd12a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f85e0f1d4efb61aff2c6c2f8eaa5e64dd2678931150f26c2c2a96f8abf5b15c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85e0f1d4efb61aff2c6c2f8eaa5e64dd2678931150f26c2c2a96f8abf5b15c8->enter($__internal_f85e0f1d4efb61aff2c6c2f8eaa5e64dd2678931150f26c2c2a96f8abf5b15c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8916096fc3d5e4a803c925d83f5ead218c884ca2fe678fe7b9a34388bcbd12a9->leave($__internal_8916096fc3d5e4a803c925d83f5ead218c884ca2fe678fe7b9a34388bcbd12a9_prof);

        
        $__internal_f85e0f1d4efb61aff2c6c2f8eaa5e64dd2678931150f26c2c2a96f8abf5b15c8->leave($__internal_f85e0f1d4efb61aff2c6c2f8eaa5e64dd2678931150f26c2c2a96f8abf5b15c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16fcf887ac68a7e92f59bb83c3aa6d9f21b6186ec12de09b07922f373cea7919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fcf887ac68a7e92f59bb83c3aa6d9f21b6186ec12de09b07922f373cea7919->enter($__internal_16fcf887ac68a7e92f59bb83c3aa6d9f21b6186ec12de09b07922f373cea7919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f6e127edd46c2566b082a53b34d345094bf45e1ebdff24b0dbace77b884b87de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e127edd46c2566b082a53b34d345094bf45e1ebdff24b0dbace77b884b87de->enter($__internal_f6e127edd46c2566b082a53b34d345094bf45e1ebdff24b0dbace77b884b87de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f6e127edd46c2566b082a53b34d345094bf45e1ebdff24b0dbace77b884b87de->leave($__internal_f6e127edd46c2566b082a53b34d345094bf45e1ebdff24b0dbace77b884b87de_prof);

        
        $__internal_16fcf887ac68a7e92f59bb83c3aa6d9f21b6186ec12de09b07922f373cea7919->leave($__internal_16fcf887ac68a7e92f59bb83c3aa6d9f21b6186ec12de09b07922f373cea7919_prof);

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

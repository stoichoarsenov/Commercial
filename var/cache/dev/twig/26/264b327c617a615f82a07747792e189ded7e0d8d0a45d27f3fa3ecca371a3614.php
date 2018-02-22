<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4fe5ed83d7cbc05c807ca5e5bc5743e8df75a5a428957012d8960865220c7ec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_9bd7a01c1b64d20061f04bfae959d0dc63c45fb7e596b8eee4f951ae9a1c8fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd7a01c1b64d20061f04bfae959d0dc63c45fb7e596b8eee4f951ae9a1c8fe6->enter($__internal_9bd7a01c1b64d20061f04bfae959d0dc63c45fb7e596b8eee4f951ae9a1c8fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7a69f900ce87af1541795c6a9c56a25f59b92322c2a0ebe4dd3a7c91890d7df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a69f900ce87af1541795c6a9c56a25f59b92322c2a0ebe4dd3a7c91890d7df0->enter($__internal_7a69f900ce87af1541795c6a9c56a25f59b92322c2a0ebe4dd3a7c91890d7df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd7a01c1b64d20061f04bfae959d0dc63c45fb7e596b8eee4f951ae9a1c8fe6->leave($__internal_9bd7a01c1b64d20061f04bfae959d0dc63c45fb7e596b8eee4f951ae9a1c8fe6_prof);

        
        $__internal_7a69f900ce87af1541795c6a9c56a25f59b92322c2a0ebe4dd3a7c91890d7df0->leave($__internal_7a69f900ce87af1541795c6a9c56a25f59b92322c2a0ebe4dd3a7c91890d7df0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bea1808d91b2f9dd67d8760881904c412995703dd2b7298fea22dcfcf2ea098d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea1808d91b2f9dd67d8760881904c412995703dd2b7298fea22dcfcf2ea098d->enter($__internal_bea1808d91b2f9dd67d8760881904c412995703dd2b7298fea22dcfcf2ea098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6c49405ad8cab2b4eb50746ab09b5a330c772889e80639d0158b0e6567619c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c49405ad8cab2b4eb50746ab09b5a330c772889e80639d0158b0e6567619c5->enter($__internal_a6c49405ad8cab2b4eb50746ab09b5a330c772889e80639d0158b0e6567619c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a6c49405ad8cab2b4eb50746ab09b5a330c772889e80639d0158b0e6567619c5->leave($__internal_a6c49405ad8cab2b4eb50746ab09b5a330c772889e80639d0158b0e6567619c5_prof);

        
        $__internal_bea1808d91b2f9dd67d8760881904c412995703dd2b7298fea22dcfcf2ea098d->leave($__internal_bea1808d91b2f9dd67d8760881904c412995703dd2b7298fea22dcfcf2ea098d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

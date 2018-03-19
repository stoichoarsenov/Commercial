<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_066d1aafbd32031f73e3af3e5892ddd61155ddc0d81c0182c428083cd5400351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9602b702429efe67d7bac3f55066a066ec46311819a714f8a1bdb9a167ac823f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9602b702429efe67d7bac3f55066a066ec46311819a714f8a1bdb9a167ac823f->enter($__internal_9602b702429efe67d7bac3f55066a066ec46311819a714f8a1bdb9a167ac823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_28fb965e789def690a9ed159c14a873168e6f4e95c617eef6532e513b734e974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fb965e789def690a9ed159c14a873168e6f4e95c617eef6532e513b734e974->enter($__internal_28fb965e789def690a9ed159c14a873168e6f4e95c617eef6532e513b734e974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9602b702429efe67d7bac3f55066a066ec46311819a714f8a1bdb9a167ac823f->leave($__internal_9602b702429efe67d7bac3f55066a066ec46311819a714f8a1bdb9a167ac823f_prof);

        
        $__internal_28fb965e789def690a9ed159c14a873168e6f4e95c617eef6532e513b734e974->leave($__internal_28fb965e789def690a9ed159c14a873168e6f4e95c617eef6532e513b734e974_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea414adab5fdf75aab9c50662c49d4561ebf1ae832764183a4d28799674e2798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea414adab5fdf75aab9c50662c49d4561ebf1ae832764183a4d28799674e2798->enter($__internal_ea414adab5fdf75aab9c50662c49d4561ebf1ae832764183a4d28799674e2798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b2b8bfb991cddde56d9dbbc93274587fab8f9127c7721dbb86488f7d37f3950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2b8bfb991cddde56d9dbbc93274587fab8f9127c7721dbb86488f7d37f3950->enter($__internal_6b2b8bfb991cddde56d9dbbc93274587fab8f9127c7721dbb86488f7d37f3950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b2b8bfb991cddde56d9dbbc93274587fab8f9127c7721dbb86488f7d37f3950->leave($__internal_6b2b8bfb991cddde56d9dbbc93274587fab8f9127c7721dbb86488f7d37f3950_prof);

        
        $__internal_ea414adab5fdf75aab9c50662c49d4561ebf1ae832764183a4d28799674e2798->leave($__internal_ea414adab5fdf75aab9c50662c49d4561ebf1ae832764183a4d28799674e2798_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec670f9795fcc878d6e79695e8793a33fddcec8722e86e7bd9d5fbd54158b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec670f9795fcc878d6e79695e8793a33fddcec8722e86e7bd9d5fbd54158b0a->enter($__internal_4ec670f9795fcc878d6e79695e8793a33fddcec8722e86e7bd9d5fbd54158b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c7a6129a613bd34689e185b0d4ba4fc672e8faef4c7bfc02c360dbb20824cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7a6129a613bd34689e185b0d4ba4fc672e8faef4c7bfc02c360dbb20824cf9->enter($__internal_5c7a6129a613bd34689e185b0d4ba4fc672e8faef4c7bfc02c360dbb20824cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5c7a6129a613bd34689e185b0d4ba4fc672e8faef4c7bfc02c360dbb20824cf9->leave($__internal_5c7a6129a613bd34689e185b0d4ba4fc672e8faef4c7bfc02c360dbb20824cf9_prof);

        
        $__internal_4ec670f9795fcc878d6e79695e8793a33fddcec8722e86e7bd9d5fbd54158b0a->leave($__internal_4ec670f9795fcc878d6e79695e8793a33fddcec8722e86e7bd9d5fbd54158b0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

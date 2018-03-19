<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_551e66bb569a65c3b82c894591c782e711d23b6e4206e67c4f8e17bcf8b62d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd7b3255792668faab04915c1ebeec48815fa3ef8fdedfa39f909f7c25a4745f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7b3255792668faab04915c1ebeec48815fa3ef8fdedfa39f909f7c25a4745f->enter($__internal_cd7b3255792668faab04915c1ebeec48815fa3ef8fdedfa39f909f7c25a4745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_25d1572ddb6c37974f991d1bd35d6534d1b0f3986115140a185dccde7c4b0e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d1572ddb6c37974f991d1bd35d6534d1b0f3986115140a185dccde7c4b0e45->enter($__internal_25d1572ddb6c37974f991d1bd35d6534d1b0f3986115140a185dccde7c4b0e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7b3255792668faab04915c1ebeec48815fa3ef8fdedfa39f909f7c25a4745f->leave($__internal_cd7b3255792668faab04915c1ebeec48815fa3ef8fdedfa39f909f7c25a4745f_prof);

        
        $__internal_25d1572ddb6c37974f991d1bd35d6534d1b0f3986115140a185dccde7c4b0e45->leave($__internal_25d1572ddb6c37974f991d1bd35d6534d1b0f3986115140a185dccde7c4b0e45_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e4e48e54b98e3a71048d1ec4a944c062184db5554069e004e92f1bffee73c9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e48e54b98e3a71048d1ec4a944c062184db5554069e004e92f1bffee73c9f2->enter($__internal_e4e48e54b98e3a71048d1ec4a944c062184db5554069e004e92f1bffee73c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e34bd22b42b7960cc2fd0280721eebba26b9abde04e509b78cbd7edfef30cc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34bd22b42b7960cc2fd0280721eebba26b9abde04e509b78cbd7edfef30cc1a->enter($__internal_e34bd22b42b7960cc2fd0280721eebba26b9abde04e509b78cbd7edfef30cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e34bd22b42b7960cc2fd0280721eebba26b9abde04e509b78cbd7edfef30cc1a->leave($__internal_e34bd22b42b7960cc2fd0280721eebba26b9abde04e509b78cbd7edfef30cc1a_prof);

        
        $__internal_e4e48e54b98e3a71048d1ec4a944c062184db5554069e004e92f1bffee73c9f2->leave($__internal_e4e48e54b98e3a71048d1ec4a944c062184db5554069e004e92f1bffee73c9f2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a84112133700dd37921c2e6e9dc970ab600287d1198179c07e37a1c740c6e96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84112133700dd37921c2e6e9dc970ab600287d1198179c07e37a1c740c6e96e->enter($__internal_a84112133700dd37921c2e6e9dc970ab600287d1198179c07e37a1c740c6e96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e17097f69531d07d380e438a7c17c41a270e348daa0365206a09445245bba5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e17097f69531d07d380e438a7c17c41a270e348daa0365206a09445245bba5e->enter($__internal_9e17097f69531d07d380e438a7c17c41a270e348daa0365206a09445245bba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9e17097f69531d07d380e438a7c17c41a270e348daa0365206a09445245bba5e->leave($__internal_9e17097f69531d07d380e438a7c17c41a270e348daa0365206a09445245bba5e_prof);

        
        $__internal_a84112133700dd37921c2e6e9dc970ab600287d1198179c07e37a1c740c6e96e->leave($__internal_a84112133700dd37921c2e6e9dc970ab600287d1198179c07e37a1c740c6e96e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

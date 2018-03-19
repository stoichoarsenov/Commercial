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
        $__internal_d7b729a59bbb7a9c34aee29290f40cd3f564766598cc52f8dac814de7a8600f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b729a59bbb7a9c34aee29290f40cd3f564766598cc52f8dac814de7a8600f6->enter($__internal_d7b729a59bbb7a9c34aee29290f40cd3f564766598cc52f8dac814de7a8600f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3ec60bb7f5dcfd601d73bdcfc3227a29cb5af4457be6b2a41951b1b9383870cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec60bb7f5dcfd601d73bdcfc3227a29cb5af4457be6b2a41951b1b9383870cb->enter($__internal_3ec60bb7f5dcfd601d73bdcfc3227a29cb5af4457be6b2a41951b1b9383870cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b729a59bbb7a9c34aee29290f40cd3f564766598cc52f8dac814de7a8600f6->leave($__internal_d7b729a59bbb7a9c34aee29290f40cd3f564766598cc52f8dac814de7a8600f6_prof);

        
        $__internal_3ec60bb7f5dcfd601d73bdcfc3227a29cb5af4457be6b2a41951b1b9383870cb->leave($__internal_3ec60bb7f5dcfd601d73bdcfc3227a29cb5af4457be6b2a41951b1b9383870cb_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ad3f962d66702ab438ec686a96d587a9ac5f98dc1c04a0cd698bef93ccfc1e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3f962d66702ab438ec686a96d587a9ac5f98dc1c04a0cd698bef93ccfc1e73->enter($__internal_ad3f962d66702ab438ec686a96d587a9ac5f98dc1c04a0cd698bef93ccfc1e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_49a95ec1efa3abaaab9fa63e6501bb3372719e880073e88304b1830678b40589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a95ec1efa3abaaab9fa63e6501bb3372719e880073e88304b1830678b40589->enter($__internal_49a95ec1efa3abaaab9fa63e6501bb3372719e880073e88304b1830678b40589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_49a95ec1efa3abaaab9fa63e6501bb3372719e880073e88304b1830678b40589->leave($__internal_49a95ec1efa3abaaab9fa63e6501bb3372719e880073e88304b1830678b40589_prof);

        
        $__internal_ad3f962d66702ab438ec686a96d587a9ac5f98dc1c04a0cd698bef93ccfc1e73->leave($__internal_ad3f962d66702ab438ec686a96d587a9ac5f98dc1c04a0cd698bef93ccfc1e73_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_088340a6c40e5edc32eacebe308d3ec9b89d1eb61d7909e58542ce91cf88209b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088340a6c40e5edc32eacebe308d3ec9b89d1eb61d7909e58542ce91cf88209b->enter($__internal_088340a6c40e5edc32eacebe308d3ec9b89d1eb61d7909e58542ce91cf88209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db2f142022b21b137cc50799d6a000a5d7b92b3fcb4b432e68635b89e68bd46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2f142022b21b137cc50799d6a000a5d7b92b3fcb4b432e68635b89e68bd46a->enter($__internal_db2f142022b21b137cc50799d6a000a5d7b92b3fcb4b432e68635b89e68bd46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_db2f142022b21b137cc50799d6a000a5d7b92b3fcb4b432e68635b89e68bd46a->leave($__internal_db2f142022b21b137cc50799d6a000a5d7b92b3fcb4b432e68635b89e68bd46a_prof);

        
        $__internal_088340a6c40e5edc32eacebe308d3ec9b89d1eb61d7909e58542ce91cf88209b->leave($__internal_088340a6c40e5edc32eacebe308d3ec9b89d1eb61d7909e58542ce91cf88209b_prof);

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

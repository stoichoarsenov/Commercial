<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_aaf123d3bd8fb2c13a7438de004bd58bc37fed77327e92e20b73638910872e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58feca69a71593dac8ff8f521adfe185ae2a2e9d5039c0687bc862c2215c4274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58feca69a71593dac8ff8f521adfe185ae2a2e9d5039c0687bc862c2215c4274->enter($__internal_58feca69a71593dac8ff8f521adfe185ae2a2e9d5039c0687bc862c2215c4274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_74231c8dbaf0493c0d60038ef4c135cdc2fed503101ebe522e3da8c76945a162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74231c8dbaf0493c0d60038ef4c135cdc2fed503101ebe522e3da8c76945a162->enter($__internal_74231c8dbaf0493c0d60038ef4c135cdc2fed503101ebe522e3da8c76945a162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58feca69a71593dac8ff8f521adfe185ae2a2e9d5039c0687bc862c2215c4274->leave($__internal_58feca69a71593dac8ff8f521adfe185ae2a2e9d5039c0687bc862c2215c4274_prof);

        
        $__internal_74231c8dbaf0493c0d60038ef4c135cdc2fed503101ebe522e3da8c76945a162->leave($__internal_74231c8dbaf0493c0d60038ef4c135cdc2fed503101ebe522e3da8c76945a162_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75e9a491c22d7059737a600c79061944054cf109cdb0f2eabb3729b88be1fa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e9a491c22d7059737a600c79061944054cf109cdb0f2eabb3729b88be1fa45->enter($__internal_75e9a491c22d7059737a600c79061944054cf109cdb0f2eabb3729b88be1fa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8cfe588bfadad8a87f121601afa907fcbcaf925c61b85276a4214c583d14c440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfe588bfadad8a87f121601afa907fcbcaf925c61b85276a4214c583d14c440->enter($__internal_8cfe588bfadad8a87f121601afa907fcbcaf925c61b85276a4214c583d14c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8cfe588bfadad8a87f121601afa907fcbcaf925c61b85276a4214c583d14c440->leave($__internal_8cfe588bfadad8a87f121601afa907fcbcaf925c61b85276a4214c583d14c440_prof);

        
        $__internal_75e9a491c22d7059737a600c79061944054cf109cdb0f2eabb3729b88be1fa45->leave($__internal_75e9a491c22d7059737a600c79061944054cf109cdb0f2eabb3729b88be1fa45_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e032967040a2e0cbdda60e7a09d909eecd040359f5e8ada9ab9b054fa0c3e4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e032967040a2e0cbdda60e7a09d909eecd040359f5e8ada9ab9b054fa0c3e4b7->enter($__internal_e032967040a2e0cbdda60e7a09d909eecd040359f5e8ada9ab9b054fa0c3e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f19facdbd945c6d33bf15681626288b58aad39173d24712319b8f6c0aae6617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f19facdbd945c6d33bf15681626288b58aad39173d24712319b8f6c0aae6617->enter($__internal_6f19facdbd945c6d33bf15681626288b58aad39173d24712319b8f6c0aae6617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_6f19facdbd945c6d33bf15681626288b58aad39173d24712319b8f6c0aae6617->leave($__internal_6f19facdbd945c6d33bf15681626288b58aad39173d24712319b8f6c0aae6617_prof);

        
        $__internal_e032967040a2e0cbdda60e7a09d909eecd040359f5e8ada9ab9b054fa0c3e4b7->leave($__internal_e032967040a2e0cbdda60e7a09d909eecd040359f5e8ada9ab9b054fa0c3e4b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

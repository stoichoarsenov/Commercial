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
        $__internal_04ef94a67f144967864757fd7264e895ccb3a5dc318e6943f8912e213cfca8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ef94a67f144967864757fd7264e895ccb3a5dc318e6943f8912e213cfca8e2->enter($__internal_04ef94a67f144967864757fd7264e895ccb3a5dc318e6943f8912e213cfca8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b911e8d162669d5b4c6942671140fef588f8843451f76f8faebb242e4f13dc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b911e8d162669d5b4c6942671140fef588f8843451f76f8faebb242e4f13dc61->enter($__internal_b911e8d162669d5b4c6942671140fef588f8843451f76f8faebb242e4f13dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ef94a67f144967864757fd7264e895ccb3a5dc318e6943f8912e213cfca8e2->leave($__internal_04ef94a67f144967864757fd7264e895ccb3a5dc318e6943f8912e213cfca8e2_prof);

        
        $__internal_b911e8d162669d5b4c6942671140fef588f8843451f76f8faebb242e4f13dc61->leave($__internal_b911e8d162669d5b4c6942671140fef588f8843451f76f8faebb242e4f13dc61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91746e48ab9cdb8c9142147d0761b1f89bd056aded18305033a7c2b385ed5d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91746e48ab9cdb8c9142147d0761b1f89bd056aded18305033a7c2b385ed5d50->enter($__internal_91746e48ab9cdb8c9142147d0761b1f89bd056aded18305033a7c2b385ed5d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98467c6170fc4bd32d9533cf1f4df61c46cea0e8f89cea3e8fc4f2bce321f903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98467c6170fc4bd32d9533cf1f4df61c46cea0e8f89cea3e8fc4f2bce321f903->enter($__internal_98467c6170fc4bd32d9533cf1f4df61c46cea0e8f89cea3e8fc4f2bce321f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_98467c6170fc4bd32d9533cf1f4df61c46cea0e8f89cea3e8fc4f2bce321f903->leave($__internal_98467c6170fc4bd32d9533cf1f4df61c46cea0e8f89cea3e8fc4f2bce321f903_prof);

        
        $__internal_91746e48ab9cdb8c9142147d0761b1f89bd056aded18305033a7c2b385ed5d50->leave($__internal_91746e48ab9cdb8c9142147d0761b1f89bd056aded18305033a7c2b385ed5d50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6985affd884a8c46f137868c714c4579c0f830c777e855aabaf74401cb4337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6985affd884a8c46f137868c714c4579c0f830c777e855aabaf74401cb4337->enter($__internal_fe6985affd884a8c46f137868c714c4579c0f830c777e855aabaf74401cb4337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccd8a33981882ea889d4ab6df3ec403936c559f472d79534b3898a4baf72812f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd8a33981882ea889d4ab6df3ec403936c559f472d79534b3898a4baf72812f->enter($__internal_ccd8a33981882ea889d4ab6df3ec403936c559f472d79534b3898a4baf72812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccd8a33981882ea889d4ab6df3ec403936c559f472d79534b3898a4baf72812f->leave($__internal_ccd8a33981882ea889d4ab6df3ec403936c559f472d79534b3898a4baf72812f_prof);

        
        $__internal_fe6985affd884a8c46f137868c714c4579c0f830c777e855aabaf74401cb4337->leave($__internal_fe6985affd884a8c46f137868c714c4579c0f830c777e855aabaf74401cb4337_prof);

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

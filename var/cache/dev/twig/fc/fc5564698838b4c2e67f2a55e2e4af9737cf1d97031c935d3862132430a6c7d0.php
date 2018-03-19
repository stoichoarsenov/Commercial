<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1b402e7ecabeee9ca6fb31f10a4ed86c0585d95995b8c14ca827a86624e92df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4a4c0793e50a0d52a62420751e384b2dcce1d19fd03dcaa8d1a5d23d089fb297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c0793e50a0d52a62420751e384b2dcce1d19fd03dcaa8d1a5d23d089fb297->enter($__internal_4a4c0793e50a0d52a62420751e384b2dcce1d19fd03dcaa8d1a5d23d089fb297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_fbe184d67e5aabb2f039ad2cd362e4bdb6219ce88ac178480e09e2a9bdeeef51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe184d67e5aabb2f039ad2cd362e4bdb6219ce88ac178480e09e2a9bdeeef51->enter($__internal_fbe184d67e5aabb2f039ad2cd362e4bdb6219ce88ac178480e09e2a9bdeeef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a4c0793e50a0d52a62420751e384b2dcce1d19fd03dcaa8d1a5d23d089fb297->leave($__internal_4a4c0793e50a0d52a62420751e384b2dcce1d19fd03dcaa8d1a5d23d089fb297_prof);

        
        $__internal_fbe184d67e5aabb2f039ad2cd362e4bdb6219ce88ac178480e09e2a9bdeeef51->leave($__internal_fbe184d67e5aabb2f039ad2cd362e4bdb6219ce88ac178480e09e2a9bdeeef51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c35454b4dba02c1114cedab8f328cd86b98970d9970bf61af4c0593a76f52466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35454b4dba02c1114cedab8f328cd86b98970d9970bf61af4c0593a76f52466->enter($__internal_c35454b4dba02c1114cedab8f328cd86b98970d9970bf61af4c0593a76f52466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7364ea0dfd1f18b1cc06227cc39b62f3bf84560dd9ffeeec954138074bdb513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7364ea0dfd1f18b1cc06227cc39b62f3bf84560dd9ffeeec954138074bdb513->enter($__internal_b7364ea0dfd1f18b1cc06227cc39b62f3bf84560dd9ffeeec954138074bdb513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7364ea0dfd1f18b1cc06227cc39b62f3bf84560dd9ffeeec954138074bdb513->leave($__internal_b7364ea0dfd1f18b1cc06227cc39b62f3bf84560dd9ffeeec954138074bdb513_prof);

        
        $__internal_c35454b4dba02c1114cedab8f328cd86b98970d9970bf61af4c0593a76f52466->leave($__internal_c35454b4dba02c1114cedab8f328cd86b98970d9970bf61af4c0593a76f52466_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8524f0d0fa716cbcbcdf7d949052944c403d36a6440049199abaa555c50c8b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8524f0d0fa716cbcbcdf7d949052944c403d36a6440049199abaa555c50c8b3a->enter($__internal_8524f0d0fa716cbcbcdf7d949052944c403d36a6440049199abaa555c50c8b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5810ff0b974c8615bdfda53c613a17b10c45417ad926f1ab8a32a969b8cbf63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5810ff0b974c8615bdfda53c613a17b10c45417ad926f1ab8a32a969b8cbf63a->enter($__internal_5810ff0b974c8615bdfda53c613a17b10c45417ad926f1ab8a32a969b8cbf63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5810ff0b974c8615bdfda53c613a17b10c45417ad926f1ab8a32a969b8cbf63a->leave($__internal_5810ff0b974c8615bdfda53c613a17b10c45417ad926f1ab8a32a969b8cbf63a_prof);

        
        $__internal_8524f0d0fa716cbcbcdf7d949052944c403d36a6440049199abaa555c50c8b3a->leave($__internal_8524f0d0fa716cbcbcdf7d949052944c403d36a6440049199abaa555c50c8b3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9ae730b7ac3d6ca6eb044495262417d0f65a1fc497ccd37dcd9cc17e9e0b377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ae730b7ac3d6ca6eb044495262417d0f65a1fc497ccd37dcd9cc17e9e0b377->enter($__internal_d9ae730b7ac3d6ca6eb044495262417d0f65a1fc497ccd37dcd9cc17e9e0b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95fd99ed035bfbe668ba9f02cde87738b021cf9e6a3376355b73074a4e3efefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fd99ed035bfbe668ba9f02cde87738b021cf9e6a3376355b73074a4e3efefe->enter($__internal_95fd99ed035bfbe668ba9f02cde87738b021cf9e6a3376355b73074a4e3efefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_95fd99ed035bfbe668ba9f02cde87738b021cf9e6a3376355b73074a4e3efefe->leave($__internal_95fd99ed035bfbe668ba9f02cde87738b021cf9e6a3376355b73074a4e3efefe_prof);

        
        $__internal_d9ae730b7ac3d6ca6eb044495262417d0f65a1fc497ccd37dcd9cc17e9e0b377->leave($__internal_d9ae730b7ac3d6ca6eb044495262417d0f65a1fc497ccd37dcd9cc17e9e0b377_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

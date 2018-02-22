<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c70cabdf37bca6a2369fd79e216693e18342c4eff0753ed0132fe9b6862584b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_dc461116051b692878d366b4fa287f628456cf0728fa72b07130d98b59485aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc461116051b692878d366b4fa287f628456cf0728fa72b07130d98b59485aeb->enter($__internal_dc461116051b692878d366b4fa287f628456cf0728fa72b07130d98b59485aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_54295e8ed8cd6b4f0850ebc7db15593020e4871f7dfd8e23b74c8cd954b001b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54295e8ed8cd6b4f0850ebc7db15593020e4871f7dfd8e23b74c8cd954b001b0->enter($__internal_54295e8ed8cd6b4f0850ebc7db15593020e4871f7dfd8e23b74c8cd954b001b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc461116051b692878d366b4fa287f628456cf0728fa72b07130d98b59485aeb->leave($__internal_dc461116051b692878d366b4fa287f628456cf0728fa72b07130d98b59485aeb_prof);

        
        $__internal_54295e8ed8cd6b4f0850ebc7db15593020e4871f7dfd8e23b74c8cd954b001b0->leave($__internal_54295e8ed8cd6b4f0850ebc7db15593020e4871f7dfd8e23b74c8cd954b001b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db0170bdd61f6e0e5db06db6d8f00e4df12bc2aad61d1f7c936fe19271891505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0170bdd61f6e0e5db06db6d8f00e4df12bc2aad61d1f7c936fe19271891505->enter($__internal_db0170bdd61f6e0e5db06db6d8f00e4df12bc2aad61d1f7c936fe19271891505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b27ca6c3f4071056b833d56c63acb099b52ff3ab0b7c93011a2ca864a785094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b27ca6c3f4071056b833d56c63acb099b52ff3ab0b7c93011a2ca864a785094->enter($__internal_2b27ca6c3f4071056b833d56c63acb099b52ff3ab0b7c93011a2ca864a785094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b27ca6c3f4071056b833d56c63acb099b52ff3ab0b7c93011a2ca864a785094->leave($__internal_2b27ca6c3f4071056b833d56c63acb099b52ff3ab0b7c93011a2ca864a785094_prof);

        
        $__internal_db0170bdd61f6e0e5db06db6d8f00e4df12bc2aad61d1f7c936fe19271891505->leave($__internal_db0170bdd61f6e0e5db06db6d8f00e4df12bc2aad61d1f7c936fe19271891505_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ed68d26766cacaf85446ee426fe5d12f6d97b0b94301d07e7cdbd15d9024e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed68d26766cacaf85446ee426fe5d12f6d97b0b94301d07e7cdbd15d9024e44->enter($__internal_5ed68d26766cacaf85446ee426fe5d12f6d97b0b94301d07e7cdbd15d9024e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c1c32433bed406bc5747bf6275716206264fd8399324d9c7b49d60098295b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1c32433bed406bc5747bf6275716206264fd8399324d9c7b49d60098295b41->enter($__internal_2c1c32433bed406bc5747bf6275716206264fd8399324d9c7b49d60098295b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c1c32433bed406bc5747bf6275716206264fd8399324d9c7b49d60098295b41->leave($__internal_2c1c32433bed406bc5747bf6275716206264fd8399324d9c7b49d60098295b41_prof);

        
        $__internal_5ed68d26766cacaf85446ee426fe5d12f6d97b0b94301d07e7cdbd15d9024e44->leave($__internal_5ed68d26766cacaf85446ee426fe5d12f6d97b0b94301d07e7cdbd15d9024e44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a129c6da2e7c65a65d50aaca28171415f842ab1e042822f2668f44ce5431f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a129c6da2e7c65a65d50aaca28171415f842ab1e042822f2668f44ce5431f68->enter($__internal_7a129c6da2e7c65a65d50aaca28171415f842ab1e042822f2668f44ce5431f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8dbaea47adfa9d6f225d4d9f295c2bc09c36845fcbb82b6574713750a74dc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dbaea47adfa9d6f225d4d9f295c2bc09c36845fcbb82b6574713750a74dc58->enter($__internal_f8dbaea47adfa9d6f225d4d9f295c2bc09c36845fcbb82b6574713750a74dc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f8dbaea47adfa9d6f225d4d9f295c2bc09c36845fcbb82b6574713750a74dc58->leave($__internal_f8dbaea47adfa9d6f225d4d9f295c2bc09c36845fcbb82b6574713750a74dc58_prof);

        
        $__internal_7a129c6da2e7c65a65d50aaca28171415f842ab1e042822f2668f44ce5431f68->leave($__internal_7a129c6da2e7c65a65d50aaca28171415f842ab1e042822f2668f44ce5431f68_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

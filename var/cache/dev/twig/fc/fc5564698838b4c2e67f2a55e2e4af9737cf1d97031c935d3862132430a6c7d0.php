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
        $__internal_b47b394ea6941a7d2905dda9712a5d8c05babae22f0c4c5e1dbd08669fa3da01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47b394ea6941a7d2905dda9712a5d8c05babae22f0c4c5e1dbd08669fa3da01->enter($__internal_b47b394ea6941a7d2905dda9712a5d8c05babae22f0c4c5e1dbd08669fa3da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_19f6d31f5148f1f44dcf2ace639ac6819ae496bba7da4199d9d2830e67fb8b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f6d31f5148f1f44dcf2ace639ac6819ae496bba7da4199d9d2830e67fb8b15->enter($__internal_19f6d31f5148f1f44dcf2ace639ac6819ae496bba7da4199d9d2830e67fb8b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47b394ea6941a7d2905dda9712a5d8c05babae22f0c4c5e1dbd08669fa3da01->leave($__internal_b47b394ea6941a7d2905dda9712a5d8c05babae22f0c4c5e1dbd08669fa3da01_prof);

        
        $__internal_19f6d31f5148f1f44dcf2ace639ac6819ae496bba7da4199d9d2830e67fb8b15->leave($__internal_19f6d31f5148f1f44dcf2ace639ac6819ae496bba7da4199d9d2830e67fb8b15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_251d953b7dbdacdde372861b1b2d88b2d4004bb2847677f33279f6ece2a493a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251d953b7dbdacdde372861b1b2d88b2d4004bb2847677f33279f6ece2a493a0->enter($__internal_251d953b7dbdacdde372861b1b2d88b2d4004bb2847677f33279f6ece2a493a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c7f9526f717f0237b24207df6448551ee3ec237c6dee87de0433117fd313949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7f9526f717f0237b24207df6448551ee3ec237c6dee87de0433117fd313949->enter($__internal_7c7f9526f717f0237b24207df6448551ee3ec237c6dee87de0433117fd313949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c7f9526f717f0237b24207df6448551ee3ec237c6dee87de0433117fd313949->leave($__internal_7c7f9526f717f0237b24207df6448551ee3ec237c6dee87de0433117fd313949_prof);

        
        $__internal_251d953b7dbdacdde372861b1b2d88b2d4004bb2847677f33279f6ece2a493a0->leave($__internal_251d953b7dbdacdde372861b1b2d88b2d4004bb2847677f33279f6ece2a493a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9684e26d3394e8026f1d05a6ce212bba0dad0db31000027fe5414b182c55abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9684e26d3394e8026f1d05a6ce212bba0dad0db31000027fe5414b182c55abc->enter($__internal_b9684e26d3394e8026f1d05a6ce212bba0dad0db31000027fe5414b182c55abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8659ba60b9e2c495452ef31bc8a9deaad9c64181589dfbc1247b6c64cc83b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8659ba60b9e2c495452ef31bc8a9deaad9c64181589dfbc1247b6c64cc83b0d->enter($__internal_e8659ba60b9e2c495452ef31bc8a9deaad9c64181589dfbc1247b6c64cc83b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8659ba60b9e2c495452ef31bc8a9deaad9c64181589dfbc1247b6c64cc83b0d->leave($__internal_e8659ba60b9e2c495452ef31bc8a9deaad9c64181589dfbc1247b6c64cc83b0d_prof);

        
        $__internal_b9684e26d3394e8026f1d05a6ce212bba0dad0db31000027fe5414b182c55abc->leave($__internal_b9684e26d3394e8026f1d05a6ce212bba0dad0db31000027fe5414b182c55abc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8a0716b68a028ba852abb35456953c7755f60b2bdad99877e2ad84927792585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a0716b68a028ba852abb35456953c7755f60b2bdad99877e2ad84927792585->enter($__internal_e8a0716b68a028ba852abb35456953c7755f60b2bdad99877e2ad84927792585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6b35e3a899a48a7cf7bf9f1a57fda30f3fd33344e63a087455a9a22d98c9f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b35e3a899a48a7cf7bf9f1a57fda30f3fd33344e63a087455a9a22d98c9f28->enter($__internal_f6b35e3a899a48a7cf7bf9f1a57fda30f3fd33344e63a087455a9a22d98c9f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f6b35e3a899a48a7cf7bf9f1a57fda30f3fd33344e63a087455a9a22d98c9f28->leave($__internal_f6b35e3a899a48a7cf7bf9f1a57fda30f3fd33344e63a087455a9a22d98c9f28_prof);

        
        $__internal_e8a0716b68a028ba852abb35456953c7755f60b2bdad99877e2ad84927792585->leave($__internal_e8a0716b68a028ba852abb35456953c7755f60b2bdad99877e2ad84927792585_prof);

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

<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7bdf366aae20158e1074694ea13f0a8b54db16aed77b5ab757aed934323f4176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8ac49e960233bdff07804bb4c776c0d98a593e8772a3943545b2bc270236eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8ac49e960233bdff07804bb4c776c0d98a593e8772a3943545b2bc270236eb->enter($__internal_7d8ac49e960233bdff07804bb4c776c0d98a593e8772a3943545b2bc270236eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_593b3eb806568468523b3c3b7cba8ffb41079d162936d953c17ecdafdf51d036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593b3eb806568468523b3c3b7cba8ffb41079d162936d953c17ecdafdf51d036->enter($__internal_593b3eb806568468523b3c3b7cba8ffb41079d162936d953c17ecdafdf51d036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7d8ac49e960233bdff07804bb4c776c0d98a593e8772a3943545b2bc270236eb->leave($__internal_7d8ac49e960233bdff07804bb4c776c0d98a593e8772a3943545b2bc270236eb_prof);

        
        $__internal_593b3eb806568468523b3c3b7cba8ffb41079d162936d953c17ecdafdf51d036->leave($__internal_593b3eb806568468523b3c3b7cba8ffb41079d162936d953c17ecdafdf51d036_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3ba3363809617e9846375375c5a2ff867eb5f4484fb3e47fb7b2be7e97be2efc extends Twig_Template
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
        $__internal_1708cc9f9bc3c912fc7efc9e2d9c926ad75d3387729f2342e0d206b65f82b7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1708cc9f9bc3c912fc7efc9e2d9c926ad75d3387729f2342e0d206b65f82b7bf->enter($__internal_1708cc9f9bc3c912fc7efc9e2d9c926ad75d3387729f2342e0d206b65f82b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5757d49143d50080e956c4db79c6b807fd475f00792855f1c30e553dac5c9741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5757d49143d50080e956c4db79c6b807fd475f00792855f1c30e553dac5c9741->enter($__internal_5757d49143d50080e956c4db79c6b807fd475f00792855f1c30e553dac5c9741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1708cc9f9bc3c912fc7efc9e2d9c926ad75d3387729f2342e0d206b65f82b7bf->leave($__internal_1708cc9f9bc3c912fc7efc9e2d9c926ad75d3387729f2342e0d206b65f82b7bf_prof);

        
        $__internal_5757d49143d50080e956c4db79c6b807fd475f00792855f1c30e553dac5c9741->leave($__internal_5757d49143d50080e956c4db79c6b807fd475f00792855f1c30e553dac5c9741_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

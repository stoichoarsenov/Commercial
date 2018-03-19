<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3174cedc745fd63b55a4cbb627edfb189170531478de2bd30bc7ec635737587d extends Twig_Template
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
        $__internal_b9088ab64ee98b3cbd377f6af408859b2c723a44ac677973918e46dccfb8eb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9088ab64ee98b3cbd377f6af408859b2c723a44ac677973918e46dccfb8eb71->enter($__internal_b9088ab64ee98b3cbd377f6af408859b2c723a44ac677973918e46dccfb8eb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6adc411cf6179ae665c0b8a04403bc911347fb990df432236012ef1c74797654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adc411cf6179ae665c0b8a04403bc911347fb990df432236012ef1c74797654->enter($__internal_6adc411cf6179ae665c0b8a04403bc911347fb990df432236012ef1c74797654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_b9088ab64ee98b3cbd377f6af408859b2c723a44ac677973918e46dccfb8eb71->leave($__internal_b9088ab64ee98b3cbd377f6af408859b2c723a44ac677973918e46dccfb8eb71_prof);

        
        $__internal_6adc411cf6179ae665c0b8a04403bc911347fb990df432236012ef1c74797654->leave($__internal_6adc411cf6179ae665c0b8a04403bc911347fb990df432236012ef1c74797654_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

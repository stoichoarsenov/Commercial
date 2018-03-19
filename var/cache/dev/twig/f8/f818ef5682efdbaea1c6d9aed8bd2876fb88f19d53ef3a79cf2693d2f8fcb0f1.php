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
        $__internal_9792d360682c66eac1c3121b6af42d130663a3145e0453c911bda99397998762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9792d360682c66eac1c3121b6af42d130663a3145e0453c911bda99397998762->enter($__internal_9792d360682c66eac1c3121b6af42d130663a3145e0453c911bda99397998762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8d916bd7e0f1437b92aaf6d5c7708efe870576a76cc77db29dab2323074c3890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d916bd7e0f1437b92aaf6d5c7708efe870576a76cc77db29dab2323074c3890->enter($__internal_8d916bd7e0f1437b92aaf6d5c7708efe870576a76cc77db29dab2323074c3890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_9792d360682c66eac1c3121b6af42d130663a3145e0453c911bda99397998762->leave($__internal_9792d360682c66eac1c3121b6af42d130663a3145e0453c911bda99397998762_prof);

        
        $__internal_8d916bd7e0f1437b92aaf6d5c7708efe870576a76cc77db29dab2323074c3890->leave($__internal_8d916bd7e0f1437b92aaf6d5c7708efe870576a76cc77db29dab2323074c3890_prof);

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

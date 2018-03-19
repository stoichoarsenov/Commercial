<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d35585fc586c7f933676e66a6af15835ae57895726d33dc650c9ba119638bcb1 extends Twig_Template
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
        $__internal_2b3887bdef0bf2e42dfaf03744e0180ddcaaf4b7bd9e2e4e9e2142246abb8878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3887bdef0bf2e42dfaf03744e0180ddcaaf4b7bd9e2e4e9e2142246abb8878->enter($__internal_2b3887bdef0bf2e42dfaf03744e0180ddcaaf4b7bd9e2e4e9e2142246abb8878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e84048aa618a30c9d0459ade04beee3fc0f4046e90bab601a88bbc628429ccda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84048aa618a30c9d0459ade04beee3fc0f4046e90bab601a88bbc628429ccda->enter($__internal_e84048aa618a30c9d0459ade04beee3fc0f4046e90bab601a88bbc628429ccda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2b3887bdef0bf2e42dfaf03744e0180ddcaaf4b7bd9e2e4e9e2142246abb8878->leave($__internal_2b3887bdef0bf2e42dfaf03744e0180ddcaaf4b7bd9e2e4e9e2142246abb8878_prof);

        
        $__internal_e84048aa618a30c9d0459ade04beee3fc0f4046e90bab601a88bbc628429ccda->leave($__internal_e84048aa618a30c9d0459ade04beee3fc0f4046e90bab601a88bbc628429ccda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

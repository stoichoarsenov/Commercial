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
        $__internal_0459abb8d9bc085f08d0d2f480c42fcae48ba0c284394199faa9450531208fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0459abb8d9bc085f08d0d2f480c42fcae48ba0c284394199faa9450531208fac->enter($__internal_0459abb8d9bc085f08d0d2f480c42fcae48ba0c284394199faa9450531208fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a9d42c3a8698d8194cd3b1d18a1a077c22955a3775caad292f04f6578e7e2d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d42c3a8698d8194cd3b1d18a1a077c22955a3775caad292f04f6578e7e2d2e->enter($__internal_a9d42c3a8698d8194cd3b1d18a1a077c22955a3775caad292f04f6578e7e2d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0459abb8d9bc085f08d0d2f480c42fcae48ba0c284394199faa9450531208fac->leave($__internal_0459abb8d9bc085f08d0d2f480c42fcae48ba0c284394199faa9450531208fac_prof);

        
        $__internal_a9d42c3a8698d8194cd3b1d18a1a077c22955a3775caad292f04f6578e7e2d2e->leave($__internal_a9d42c3a8698d8194cd3b1d18a1a077c22955a3775caad292f04f6578e7e2d2e_prof);

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

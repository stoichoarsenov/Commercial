<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8f29bb526a085498ebbf8f2c85649ccd8ff0980c49f1fa3f986ce0080f322a45 extends Twig_Template
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
        $__internal_bac30f01e579ce5025e5b78fa3a3be894bc939a59751b96bb8ff550fc0978309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac30f01e579ce5025e5b78fa3a3be894bc939a59751b96bb8ff550fc0978309->enter($__internal_bac30f01e579ce5025e5b78fa3a3be894bc939a59751b96bb8ff550fc0978309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_460a456f845dc57d2562dc807437d4a81d9f04ba74f8cf13978ce1b683f4f102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460a456f845dc57d2562dc807437d4a81d9f04ba74f8cf13978ce1b683f4f102->enter($__internal_460a456f845dc57d2562dc807437d4a81d9f04ba74f8cf13978ce1b683f4f102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bac30f01e579ce5025e5b78fa3a3be894bc939a59751b96bb8ff550fc0978309->leave($__internal_bac30f01e579ce5025e5b78fa3a3be894bc939a59751b96bb8ff550fc0978309_prof);

        
        $__internal_460a456f845dc57d2562dc807437d4a81d9f04ba74f8cf13978ce1b683f4f102->leave($__internal_460a456f845dc57d2562dc807437d4a81d9f04ba74f8cf13978ce1b683f4f102_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

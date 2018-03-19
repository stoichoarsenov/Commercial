<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f5017ba9751a4dfc8dba0466bb6831163909bb2412a82e6df3b585528d169d47 extends Twig_Template
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
        $__internal_c0aea4fba47406681572a3840f6e048e34b3128335c049f12a4c70db19ea6aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0aea4fba47406681572a3840f6e048e34b3128335c049f12a4c70db19ea6aeb->enter($__internal_c0aea4fba47406681572a3840f6e048e34b3128335c049f12a4c70db19ea6aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6a17e03180bd1e5b6bc9bea339e1c2aa32aa5d236055e8a11441d2bbed03cf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a17e03180bd1e5b6bc9bea339e1c2aa32aa5d236055e8a11441d2bbed03cf9b->enter($__internal_6a17e03180bd1e5b6bc9bea339e1c2aa32aa5d236055e8a11441d2bbed03cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c0aea4fba47406681572a3840f6e048e34b3128335c049f12a4c70db19ea6aeb->leave($__internal_c0aea4fba47406681572a3840f6e048e34b3128335c049f12a4c70db19ea6aeb_prof);

        
        $__internal_6a17e03180bd1e5b6bc9bea339e1c2aa32aa5d236055e8a11441d2bbed03cf9b->leave($__internal_6a17e03180bd1e5b6bc9bea339e1c2aa32aa5d236055e8a11441d2bbed03cf9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

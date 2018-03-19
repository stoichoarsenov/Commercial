<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e64a4f2bf22d582ddbf782a799a66005ed4d22cbc9dc4c5e1383896060764e62 extends Twig_Template
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
        $__internal_5403dd718dab5f0865f9851cf34fa023062b08cfc2fffd42cbcc89b5e8ea7eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5403dd718dab5f0865f9851cf34fa023062b08cfc2fffd42cbcc89b5e8ea7eb1->enter($__internal_5403dd718dab5f0865f9851cf34fa023062b08cfc2fffd42cbcc89b5e8ea7eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_78addecbf4f538a8653ce39aff3fabd37d787d2e98b2032d29f40588a67ea8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78addecbf4f538a8653ce39aff3fabd37d787d2e98b2032d29f40588a67ea8f6->enter($__internal_78addecbf4f538a8653ce39aff3fabd37d787d2e98b2032d29f40588a67ea8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5403dd718dab5f0865f9851cf34fa023062b08cfc2fffd42cbcc89b5e8ea7eb1->leave($__internal_5403dd718dab5f0865f9851cf34fa023062b08cfc2fffd42cbcc89b5e8ea7eb1_prof);

        
        $__internal_78addecbf4f538a8653ce39aff3fabd37d787d2e98b2032d29f40588a67ea8f6->leave($__internal_78addecbf4f538a8653ce39aff3fabd37d787d2e98b2032d29f40588a67ea8f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

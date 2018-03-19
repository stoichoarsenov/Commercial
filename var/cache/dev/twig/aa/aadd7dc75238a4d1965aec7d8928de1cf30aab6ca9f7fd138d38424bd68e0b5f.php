<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1705942e8f9cb42133c98e1f8a3dcbc759ea4709778360ca381a766eb8f54947 extends Twig_Template
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
        $__internal_95e5a99ab08c412c9e3345b061e14fcdedf539269623b196c42ab078d7d5e8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e5a99ab08c412c9e3345b061e14fcdedf539269623b196c42ab078d7d5e8e6->enter($__internal_95e5a99ab08c412c9e3345b061e14fcdedf539269623b196c42ab078d7d5e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1518acc591426e0112bfec6217168524c36ef22f2e7cc579327c1dddb77cc328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1518acc591426e0112bfec6217168524c36ef22f2e7cc579327c1dddb77cc328->enter($__internal_1518acc591426e0112bfec6217168524c36ef22f2e7cc579327c1dddb77cc328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_95e5a99ab08c412c9e3345b061e14fcdedf539269623b196c42ab078d7d5e8e6->leave($__internal_95e5a99ab08c412c9e3345b061e14fcdedf539269623b196c42ab078d7d5e8e6_prof);

        
        $__internal_1518acc591426e0112bfec6217168524c36ef22f2e7cc579327c1dddb77cc328->leave($__internal_1518acc591426e0112bfec6217168524c36ef22f2e7cc579327c1dddb77cc328_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

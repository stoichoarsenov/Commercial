<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3e9ccedc62a8df91f9114afe77623aa1838834193d5029d120d72e3cfd0b0e7c extends Twig_Template
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
        $__internal_c7e4645507f43d26ea95f9aec04208703905729c8192b85b75e38e3e126f6c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e4645507f43d26ea95f9aec04208703905729c8192b85b75e38e3e126f6c62->enter($__internal_c7e4645507f43d26ea95f9aec04208703905729c8192b85b75e38e3e126f6c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1776d1e900ce008362291caab88edfccf26bfab50323e5004873cef9aa7deef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1776d1e900ce008362291caab88edfccf26bfab50323e5004873cef9aa7deef4->enter($__internal_1776d1e900ce008362291caab88edfccf26bfab50323e5004873cef9aa7deef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c7e4645507f43d26ea95f9aec04208703905729c8192b85b75e38e3e126f6c62->leave($__internal_c7e4645507f43d26ea95f9aec04208703905729c8192b85b75e38e3e126f6c62_prof);

        
        $__internal_1776d1e900ce008362291caab88edfccf26bfab50323e5004873cef9aa7deef4->leave($__internal_1776d1e900ce008362291caab88edfccf26bfab50323e5004873cef9aa7deef4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

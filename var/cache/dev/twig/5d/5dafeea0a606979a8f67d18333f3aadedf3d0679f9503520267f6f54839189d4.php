<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_975c97874bd1727a04e66d147d7ac40533ffb475f7b6eb43ab0604f290bc22e2 extends Twig_Template
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
        $__internal_01c0236ffa5ceb36ad8d23eedd64a7ef760c0c8bec51fd695a99ae428b8ea690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c0236ffa5ceb36ad8d23eedd64a7ef760c0c8bec51fd695a99ae428b8ea690->enter($__internal_01c0236ffa5ceb36ad8d23eedd64a7ef760c0c8bec51fd695a99ae428b8ea690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_873505a821675024a8d8e10ca3432236bf078b411774dc4cc9d084c650b691ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873505a821675024a8d8e10ca3432236bf078b411774dc4cc9d084c650b691ad->enter($__internal_873505a821675024a8d8e10ca3432236bf078b411774dc4cc9d084c650b691ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_01c0236ffa5ceb36ad8d23eedd64a7ef760c0c8bec51fd695a99ae428b8ea690->leave($__internal_01c0236ffa5ceb36ad8d23eedd64a7ef760c0c8bec51fd695a99ae428b8ea690_prof);

        
        $__internal_873505a821675024a8d8e10ca3432236bf078b411774dc4cc9d084c650b691ad->leave($__internal_873505a821675024a8d8e10ca3432236bf078b411774dc4cc9d084c650b691ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_392beb339fcc7fe59babf785d31e865b3b9220808e14e577885e8b26d6ef3f8f extends Twig_Template
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
        $__internal_e1c5f9742e8445001c951ea1f266023e5dfd1c4f1fc90c499b76094e11e7cd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c5f9742e8445001c951ea1f266023e5dfd1c4f1fc90c499b76094e11e7cd71->enter($__internal_e1c5f9742e8445001c951ea1f266023e5dfd1c4f1fc90c499b76094e11e7cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_98956532b5e35dfa37d58a995b66c6c99808d285433445f220e9999a1a7410ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98956532b5e35dfa37d58a995b66c6c99808d285433445f220e9999a1a7410ab->enter($__internal_98956532b5e35dfa37d58a995b66c6c99808d285433445f220e9999a1a7410ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_e1c5f9742e8445001c951ea1f266023e5dfd1c4f1fc90c499b76094e11e7cd71->leave($__internal_e1c5f9742e8445001c951ea1f266023e5dfd1c4f1fc90c499b76094e11e7cd71_prof);

        
        $__internal_98956532b5e35dfa37d58a995b66c6c99808d285433445f220e9999a1a7410ab->leave($__internal_98956532b5e35dfa37d58a995b66c6c99808d285433445f220e9999a1a7410ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

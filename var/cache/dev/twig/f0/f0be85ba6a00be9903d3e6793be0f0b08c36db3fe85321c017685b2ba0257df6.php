<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b32b28c19a873c626215bffac30e565cde7712a9556d203aed16bbb9e29784d7 extends Twig_Template
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
        $__internal_950af60cce881a6fe161c4bef3aca93f047fce7939ae36319ebff1e0dfd5e30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950af60cce881a6fe161c4bef3aca93f047fce7939ae36319ebff1e0dfd5e30b->enter($__internal_950af60cce881a6fe161c4bef3aca93f047fce7939ae36319ebff1e0dfd5e30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1b82b98e5baa36f92c65a6225ca9789ebb83e88419ed0ba99a5a09b02a166434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b82b98e5baa36f92c65a6225ca9789ebb83e88419ed0ba99a5a09b02a166434->enter($__internal_1b82b98e5baa36f92c65a6225ca9789ebb83e88419ed0ba99a5a09b02a166434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_950af60cce881a6fe161c4bef3aca93f047fce7939ae36319ebff1e0dfd5e30b->leave($__internal_950af60cce881a6fe161c4bef3aca93f047fce7939ae36319ebff1e0dfd5e30b_prof);

        
        $__internal_1b82b98e5baa36f92c65a6225ca9789ebb83e88419ed0ba99a5a09b02a166434->leave($__internal_1b82b98e5baa36f92c65a6225ca9789ebb83e88419ed0ba99a5a09b02a166434_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

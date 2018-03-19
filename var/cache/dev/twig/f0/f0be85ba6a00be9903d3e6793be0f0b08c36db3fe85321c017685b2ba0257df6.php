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
        $__internal_5aaccde970b4ab500818559d67a00f43353e7027ca6c1f7f5d6142ede2c5391e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aaccde970b4ab500818559d67a00f43353e7027ca6c1f7f5d6142ede2c5391e->enter($__internal_5aaccde970b4ab500818559d67a00f43353e7027ca6c1f7f5d6142ede2c5391e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_503c797f0aead0d56c456621bf56ed43533b0b273f4cba45fb6ba90c81ca17b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c797f0aead0d56c456621bf56ed43533b0b273f4cba45fb6ba90c81ca17b3->enter($__internal_503c797f0aead0d56c456621bf56ed43533b0b273f4cba45fb6ba90c81ca17b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5aaccde970b4ab500818559d67a00f43353e7027ca6c1f7f5d6142ede2c5391e->leave($__internal_5aaccde970b4ab500818559d67a00f43353e7027ca6c1f7f5d6142ede2c5391e_prof);

        
        $__internal_503c797f0aead0d56c456621bf56ed43533b0b273f4cba45fb6ba90c81ca17b3->leave($__internal_503c797f0aead0d56c456621bf56ed43533b0b273f4cba45fb6ba90c81ca17b3_prof);

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

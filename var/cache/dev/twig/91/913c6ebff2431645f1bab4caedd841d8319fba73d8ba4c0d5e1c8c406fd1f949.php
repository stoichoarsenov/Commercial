<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_31bf9c2c4b5fdbb32a59137a4a4fc8bc1503f20c41131b7e2e856dcd095b6112 extends Twig_Template
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
        $__internal_b2396ee360e3b918f5520dd1baccf6743ea8b2fd7ef68a801615b803dc63f688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2396ee360e3b918f5520dd1baccf6743ea8b2fd7ef68a801615b803dc63f688->enter($__internal_b2396ee360e3b918f5520dd1baccf6743ea8b2fd7ef68a801615b803dc63f688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d503146ce8eac7b2dc9eb9362f53f183371c55c48ac2b26c1e666321de6fadd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d503146ce8eac7b2dc9eb9362f53f183371c55c48ac2b26c1e666321de6fadd3->enter($__internal_d503146ce8eac7b2dc9eb9362f53f183371c55c48ac2b26c1e666321de6fadd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_b2396ee360e3b918f5520dd1baccf6743ea8b2fd7ef68a801615b803dc63f688->leave($__internal_b2396ee360e3b918f5520dd1baccf6743ea8b2fd7ef68a801615b803dc63f688_prof);

        
        $__internal_d503146ce8eac7b2dc9eb9362f53f183371c55c48ac2b26c1e666321de6fadd3->leave($__internal_d503146ce8eac7b2dc9eb9362f53f183371c55c48ac2b26c1e666321de6fadd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

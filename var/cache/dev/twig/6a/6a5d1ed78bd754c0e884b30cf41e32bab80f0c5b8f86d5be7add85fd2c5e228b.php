<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf525c5162edb3ad5523f2e03e6664bd231cf47cceebd2274d338b8b479cc909 extends Twig_Template
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
        $__internal_2cf1b59d7066c7a04301f5b61ece22f4157a1fccbdc2cc7dc32303370f5d512e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf1b59d7066c7a04301f5b61ece22f4157a1fccbdc2cc7dc32303370f5d512e->enter($__internal_2cf1b59d7066c7a04301f5b61ece22f4157a1fccbdc2cc7dc32303370f5d512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_941e548c3a639dad9443b1c7ab5b46b48a9323c8059e2266a7ff158f48d8d5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941e548c3a639dad9443b1c7ab5b46b48a9323c8059e2266a7ff158f48d8d5c6->enter($__internal_941e548c3a639dad9443b1c7ab5b46b48a9323c8059e2266a7ff158f48d8d5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2cf1b59d7066c7a04301f5b61ece22f4157a1fccbdc2cc7dc32303370f5d512e->leave($__internal_2cf1b59d7066c7a04301f5b61ece22f4157a1fccbdc2cc7dc32303370f5d512e_prof);

        
        $__internal_941e548c3a639dad9443b1c7ab5b46b48a9323c8059e2266a7ff158f48d8d5c6->leave($__internal_941e548c3a639dad9443b1c7ab5b46b48a9323c8059e2266a7ff158f48d8d5c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

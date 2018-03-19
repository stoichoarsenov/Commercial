<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_60beaa878f768932a0c26006f05c81c2bdb172206c7144996ffaf167a8de5d40 extends Twig_Template
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
        $__internal_944d3569dd74a7efe8c3391842e532f47c280dfd02e665f8a84154f0821b28ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944d3569dd74a7efe8c3391842e532f47c280dfd02e665f8a84154f0821b28ae->enter($__internal_944d3569dd74a7efe8c3391842e532f47c280dfd02e665f8a84154f0821b28ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7881d986bd87c108fa20ba26855e47636a3e0c80078d00d193532d7cba2be97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7881d986bd87c108fa20ba26855e47636a3e0c80078d00d193532d7cba2be97f->enter($__internal_7881d986bd87c108fa20ba26855e47636a3e0c80078d00d193532d7cba2be97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_944d3569dd74a7efe8c3391842e532f47c280dfd02e665f8a84154f0821b28ae->leave($__internal_944d3569dd74a7efe8c3391842e532f47c280dfd02e665f8a84154f0821b28ae_prof);

        
        $__internal_7881d986bd87c108fa20ba26855e47636a3e0c80078d00d193532d7cba2be97f->leave($__internal_7881d986bd87c108fa20ba26855e47636a3e0c80078d00d193532d7cba2be97f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

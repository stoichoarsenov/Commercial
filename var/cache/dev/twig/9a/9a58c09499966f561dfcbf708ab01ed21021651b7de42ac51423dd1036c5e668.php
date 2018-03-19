<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f5017ba9751a4dfc8dba0466bb6831163909bb2412a82e6df3b585528d169d47 extends Twig_Template
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
        $__internal_ded8a12efe5be4de23165b8486b01645f8a2c7d7731e3e1b30dfe1a58f3b9c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded8a12efe5be4de23165b8486b01645f8a2c7d7731e3e1b30dfe1a58f3b9c14->enter($__internal_ded8a12efe5be4de23165b8486b01645f8a2c7d7731e3e1b30dfe1a58f3b9c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_93a9aebb9bd57f697639eb9a1d834c67c4c33576b26a53f3b843451760546607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a9aebb9bd57f697639eb9a1d834c67c4c33576b26a53f3b843451760546607->enter($__internal_93a9aebb9bd57f697639eb9a1d834c67c4c33576b26a53f3b843451760546607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ded8a12efe5be4de23165b8486b01645f8a2c7d7731e3e1b30dfe1a58f3b9c14->leave($__internal_ded8a12efe5be4de23165b8486b01645f8a2c7d7731e3e1b30dfe1a58f3b9c14_prof);

        
        $__internal_93a9aebb9bd57f697639eb9a1d834c67c4c33576b26a53f3b843451760546607->leave($__internal_93a9aebb9bd57f697639eb9a1d834c67c4c33576b26a53f3b843451760546607_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8f29bb526a085498ebbf8f2c85649ccd8ff0980c49f1fa3f986ce0080f322a45 extends Twig_Template
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
        $__internal_f89debfcab287da32d59d2cea82fd604cd57797922e97a16af64cd24ea823f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89debfcab287da32d59d2cea82fd604cd57797922e97a16af64cd24ea823f41->enter($__internal_f89debfcab287da32d59d2cea82fd604cd57797922e97a16af64cd24ea823f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_726193b24345c1d4be2e3bd94a082dd33614f724d224506dfce76137b5c9a54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726193b24345c1d4be2e3bd94a082dd33614f724d224506dfce76137b5c9a54b->enter($__internal_726193b24345c1d4be2e3bd94a082dd33614f724d224506dfce76137b5c9a54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f89debfcab287da32d59d2cea82fd604cd57797922e97a16af64cd24ea823f41->leave($__internal_f89debfcab287da32d59d2cea82fd604cd57797922e97a16af64cd24ea823f41_prof);

        
        $__internal_726193b24345c1d4be2e3bd94a082dd33614f724d224506dfce76137b5c9a54b->leave($__internal_726193b24345c1d4be2e3bd94a082dd33614f724d224506dfce76137b5c9a54b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

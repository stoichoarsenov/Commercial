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
        $__internal_622968da12348903cc75e509761fb8210d1dd55a582aa19f817e55e74075a22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622968da12348903cc75e509761fb8210d1dd55a582aa19f817e55e74075a22d->enter($__internal_622968da12348903cc75e509761fb8210d1dd55a582aa19f817e55e74075a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0081817bfe7ddb22acffb564c6e6c1703b04a3f30197b1d69073c29cfa074a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0081817bfe7ddb22acffb564c6e6c1703b04a3f30197b1d69073c29cfa074a08->enter($__internal_0081817bfe7ddb22acffb564c6e6c1703b04a3f30197b1d69073c29cfa074a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_622968da12348903cc75e509761fb8210d1dd55a582aa19f817e55e74075a22d->leave($__internal_622968da12348903cc75e509761fb8210d1dd55a582aa19f817e55e74075a22d_prof);

        
        $__internal_0081817bfe7ddb22acffb564c6e6c1703b04a3f30197b1d69073c29cfa074a08->leave($__internal_0081817bfe7ddb22acffb564c6e6c1703b04a3f30197b1d69073c29cfa074a08_prof);

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

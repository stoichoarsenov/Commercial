<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0f416bba6b7d28cb3f44394f49459cc0fb3d7d97eb2248a2680abf8318022634 extends Twig_Template
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
        $__internal_ae0f02e1d30bf366aa88aa82a122ab6018a62bfeaef04cf6424c4b78ccd144f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0f02e1d30bf366aa88aa82a122ab6018a62bfeaef04cf6424c4b78ccd144f6->enter($__internal_ae0f02e1d30bf366aa88aa82a122ab6018a62bfeaef04cf6424c4b78ccd144f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e5514865a92962a887ae31c9d2386634696569e54f0c1c827a6a47d4271305b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5514865a92962a887ae31c9d2386634696569e54f0c1c827a6a47d4271305b1->enter($__internal_e5514865a92962a887ae31c9d2386634696569e54f0c1c827a6a47d4271305b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_ae0f02e1d30bf366aa88aa82a122ab6018a62bfeaef04cf6424c4b78ccd144f6->leave($__internal_ae0f02e1d30bf366aa88aa82a122ab6018a62bfeaef04cf6424c4b78ccd144f6_prof);

        
        $__internal_e5514865a92962a887ae31c9d2386634696569e54f0c1c827a6a47d4271305b1->leave($__internal_e5514865a92962a887ae31c9d2386634696569e54f0c1c827a6a47d4271305b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

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
        $__internal_fe5b90e20ecd8504807c4b651b9a944b5b8e0f70ca2bac7b29d5bc1e3e4eccaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5b90e20ecd8504807c4b651b9a944b5b8e0f70ca2bac7b29d5bc1e3e4eccaa->enter($__internal_fe5b90e20ecd8504807c4b651b9a944b5b8e0f70ca2bac7b29d5bc1e3e4eccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_52bbb7b19bb45cc94df5e1a57b6960d9246a6225b005c9b9f1fe85a9f179da96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bbb7b19bb45cc94df5e1a57b6960d9246a6225b005c9b9f1fe85a9f179da96->enter($__internal_52bbb7b19bb45cc94df5e1a57b6960d9246a6225b005c9b9f1fe85a9f179da96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_fe5b90e20ecd8504807c4b651b9a944b5b8e0f70ca2bac7b29d5bc1e3e4eccaa->leave($__internal_fe5b90e20ecd8504807c4b651b9a944b5b8e0f70ca2bac7b29d5bc1e3e4eccaa_prof);

        
        $__internal_52bbb7b19bb45cc94df5e1a57b6960d9246a6225b005c9b9f1fe85a9f179da96->leave($__internal_52bbb7b19bb45cc94df5e1a57b6960d9246a6225b005c9b9f1fe85a9f179da96_prof);

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

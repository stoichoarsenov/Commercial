<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_392beb339fcc7fe59babf785d31e865b3b9220808e14e577885e8b26d6ef3f8f extends Twig_Template
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
        $__internal_10af4e4b9fae155d67707ab26954c26de6c43d66cd8e226e80ad0b13fd5cd7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10af4e4b9fae155d67707ab26954c26de6c43d66cd8e226e80ad0b13fd5cd7fd->enter($__internal_10af4e4b9fae155d67707ab26954c26de6c43d66cd8e226e80ad0b13fd5cd7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_86e94720caf34cd4ec017478622444be5a9fe08bd991f622b1b04a294d469789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e94720caf34cd4ec017478622444be5a9fe08bd991f622b1b04a294d469789->enter($__internal_86e94720caf34cd4ec017478622444be5a9fe08bd991f622b1b04a294d469789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_10af4e4b9fae155d67707ab26954c26de6c43d66cd8e226e80ad0b13fd5cd7fd->leave($__internal_10af4e4b9fae155d67707ab26954c26de6c43d66cd8e226e80ad0b13fd5cd7fd_prof);

        
        $__internal_86e94720caf34cd4ec017478622444be5a9fe08bd991f622b1b04a294d469789->leave($__internal_86e94720caf34cd4ec017478622444be5a9fe08bd991f622b1b04a294d469789_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

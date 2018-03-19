<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e64a4f2bf22d582ddbf782a799a66005ed4d22cbc9dc4c5e1383896060764e62 extends Twig_Template
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
        $__internal_90cf3fdfffa790081e520387d5911c9cfc1bb8dd3ad14cd8160ac8d4e1c86d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cf3fdfffa790081e520387d5911c9cfc1bb8dd3ad14cd8160ac8d4e1c86d4a->enter($__internal_90cf3fdfffa790081e520387d5911c9cfc1bb8dd3ad14cd8160ac8d4e1c86d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3ae35dc1c68fc6de3b52feac1895c3def0fabd6a9e073aac837b84c3f5910f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae35dc1c68fc6de3b52feac1895c3def0fabd6a9e073aac837b84c3f5910f0c->enter($__internal_3ae35dc1c68fc6de3b52feac1895c3def0fabd6a9e073aac837b84c3f5910f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_90cf3fdfffa790081e520387d5911c9cfc1bb8dd3ad14cd8160ac8d4e1c86d4a->leave($__internal_90cf3fdfffa790081e520387d5911c9cfc1bb8dd3ad14cd8160ac8d4e1c86d4a_prof);

        
        $__internal_3ae35dc1c68fc6de3b52feac1895c3def0fabd6a9e073aac837b84c3f5910f0c->leave($__internal_3ae35dc1c68fc6de3b52feac1895c3def0fabd6a9e073aac837b84c3f5910f0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_466aad876517f739c3e5f2370458f59894f14aff2dac53a01c7b32c57321839d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50dc3718451919bc51bca415491c3e222b2a160578eb49d4865139d5255c3bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dc3718451919bc51bca415491c3e222b2a160578eb49d4865139d5255c3bb1->enter($__internal_50dc3718451919bc51bca415491c3e222b2a160578eb49d4865139d5255c3bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_aedbff94bfb9738f415c2a6d9b8a6db9e84f8e1f093dcb31934f73770d5b4b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedbff94bfb9738f415c2a6d9b8a6db9e84f8e1f093dcb31934f73770d5b4b46->enter($__internal_aedbff94bfb9738f415c2a6d9b8a6db9e84f8e1f093dcb31934f73770d5b4b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50dc3718451919bc51bca415491c3e222b2a160578eb49d4865139d5255c3bb1->leave($__internal_50dc3718451919bc51bca415491c3e222b2a160578eb49d4865139d5255c3bb1_prof);

        
        $__internal_aedbff94bfb9738f415c2a6d9b8a6db9e84f8e1f093dcb31934f73770d5b4b46->leave($__internal_aedbff94bfb9738f415c2a6d9b8a6db9e84f8e1f093dcb31934f73770d5b4b46_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c964f7d0ef5cf01189a199c21283142b8a826795df398e5f2d6051b256aecbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c964f7d0ef5cf01189a199c21283142b8a826795df398e5f2d6051b256aecbc->enter($__internal_1c964f7d0ef5cf01189a199c21283142b8a826795df398e5f2d6051b256aecbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5486192a8b023b648f5d787b308d0bc9ff33fec06a3c4a51b52d97222a3316d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5486192a8b023b648f5d787b308d0bc9ff33fec06a3c4a51b52d97222a3316d8->enter($__internal_5486192a8b023b648f5d787b308d0bc9ff33fec06a3c4a51b52d97222a3316d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5486192a8b023b648f5d787b308d0bc9ff33fec06a3c4a51b52d97222a3316d8->leave($__internal_5486192a8b023b648f5d787b308d0bc9ff33fec06a3c4a51b52d97222a3316d8_prof);

        
        $__internal_1c964f7d0ef5cf01189a199c21283142b8a826795df398e5f2d6051b256aecbc->leave($__internal_1c964f7d0ef5cf01189a199c21283142b8a826795df398e5f2d6051b256aecbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

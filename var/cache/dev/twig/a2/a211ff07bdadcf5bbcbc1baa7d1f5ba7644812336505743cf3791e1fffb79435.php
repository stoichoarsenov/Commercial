<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8f650dea132fb70bf27ac677055a673bce044f6c1d1f2319a151aefb584b44af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d32034458fa7793042d7117d79bcb749617647372f87bc80ac8162ad87ec5d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32034458fa7793042d7117d79bcb749617647372f87bc80ac8162ad87ec5d18->enter($__internal_d32034458fa7793042d7117d79bcb749617647372f87bc80ac8162ad87ec5d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_67065b86506a95efac82a1e63a6e16a344154fd12498b75f127831d87badac99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67065b86506a95efac82a1e63a6e16a344154fd12498b75f127831d87badac99->enter($__internal_67065b86506a95efac82a1e63a6e16a344154fd12498b75f127831d87badac99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32034458fa7793042d7117d79bcb749617647372f87bc80ac8162ad87ec5d18->leave($__internal_d32034458fa7793042d7117d79bcb749617647372f87bc80ac8162ad87ec5d18_prof);

        
        $__internal_67065b86506a95efac82a1e63a6e16a344154fd12498b75f127831d87badac99->leave($__internal_67065b86506a95efac82a1e63a6e16a344154fd12498b75f127831d87badac99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6b0d96607e3c598171a6077adc2cbb8d17a000909a38cca112ac5e9bc23f6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b0d96607e3c598171a6077adc2cbb8d17a000909a38cca112ac5e9bc23f6a0->enter($__internal_e6b0d96607e3c598171a6077adc2cbb8d17a000909a38cca112ac5e9bc23f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_92242676d341ed620ef20bfa4772bd071765481815afa3178b7efd44e81b9d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92242676d341ed620ef20bfa4772bd071765481815afa3178b7efd44e81b9d02->enter($__internal_92242676d341ed620ef20bfa4772bd071765481815afa3178b7efd44e81b9d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_92242676d341ed620ef20bfa4772bd071765481815afa3178b7efd44e81b9d02->leave($__internal_92242676d341ed620ef20bfa4772bd071765481815afa3178b7efd44e81b9d02_prof);

        
        $__internal_e6b0d96607e3c598171a6077adc2cbb8d17a000909a38cca112ac5e9bc23f6a0->leave($__internal_e6b0d96607e3c598171a6077adc2cbb8d17a000909a38cca112ac5e9bc23f6a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}

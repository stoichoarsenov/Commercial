<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9d3485fbba3bda8a930631bd3fc78c5a16970cb3f83e16588487090cc7f56417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ed02a2a7ac0d3fdff17ad6d1dab886e0e0afee3f1d80d2155d3282c9d3fde20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed02a2a7ac0d3fdff17ad6d1dab886e0e0afee3f1d80d2155d3282c9d3fde20f->enter($__internal_ed02a2a7ac0d3fdff17ad6d1dab886e0e0afee3f1d80d2155d3282c9d3fde20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3a5985fa87a66b3e29fd27a3d883834f0ec9fc1dbe94c90ee5067112b8721c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5985fa87a66b3e29fd27a3d883834f0ec9fc1dbe94c90ee5067112b8721c6d->enter($__internal_3a5985fa87a66b3e29fd27a3d883834f0ec9fc1dbe94c90ee5067112b8721c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed02a2a7ac0d3fdff17ad6d1dab886e0e0afee3f1d80d2155d3282c9d3fde20f->leave($__internal_ed02a2a7ac0d3fdff17ad6d1dab886e0e0afee3f1d80d2155d3282c9d3fde20f_prof);

        
        $__internal_3a5985fa87a66b3e29fd27a3d883834f0ec9fc1dbe94c90ee5067112b8721c6d->leave($__internal_3a5985fa87a66b3e29fd27a3d883834f0ec9fc1dbe94c90ee5067112b8721c6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3ca26bff29e5aa764dafb097f3ba0b91f60e2f3e11c8fa5bdd3313a07b6faca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ca26bff29e5aa764dafb097f3ba0b91f60e2f3e11c8fa5bdd3313a07b6faca->enter($__internal_c3ca26bff29e5aa764dafb097f3ba0b91f60e2f3e11c8fa5bdd3313a07b6faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dec25eac4ee7b5653ae33eaf61ab468aa8e277cc52814cdf8ed49be31a4cb181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec25eac4ee7b5653ae33eaf61ab468aa8e277cc52814cdf8ed49be31a4cb181->enter($__internal_dec25eac4ee7b5653ae33eaf61ab468aa8e277cc52814cdf8ed49be31a4cb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dec25eac4ee7b5653ae33eaf61ab468aa8e277cc52814cdf8ed49be31a4cb181->leave($__internal_dec25eac4ee7b5653ae33eaf61ab468aa8e277cc52814cdf8ed49be31a4cb181_prof);

        
        $__internal_c3ca26bff29e5aa764dafb097f3ba0b91f60e2f3e11c8fa5bdd3313a07b6faca->leave($__internal_c3ca26bff29e5aa764dafb097f3ba0b91f60e2f3e11c8fa5bdd3313a07b6faca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

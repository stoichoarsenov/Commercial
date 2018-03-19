<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a68196bd2a6961cd41dae64e78645c61a4e3ed1f05b2b77e62554458edcb64d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ef6af01d71989ea2d3bc08f1f42ea6cb9a31310118685468f9f2ca9596e2b92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6af01d71989ea2d3bc08f1f42ea6cb9a31310118685468f9f2ca9596e2b92b->enter($__internal_ef6af01d71989ea2d3bc08f1f42ea6cb9a31310118685468f9f2ca9596e2b92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b1e8f46d1d53955b7782265922f151097ef772571c5817125321b396bd4d6d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e8f46d1d53955b7782265922f151097ef772571c5817125321b396bd4d6d0b->enter($__internal_b1e8f46d1d53955b7782265922f151097ef772571c5817125321b396bd4d6d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6af01d71989ea2d3bc08f1f42ea6cb9a31310118685468f9f2ca9596e2b92b->leave($__internal_ef6af01d71989ea2d3bc08f1f42ea6cb9a31310118685468f9f2ca9596e2b92b_prof);

        
        $__internal_b1e8f46d1d53955b7782265922f151097ef772571c5817125321b396bd4d6d0b->leave($__internal_b1e8f46d1d53955b7782265922f151097ef772571c5817125321b396bd4d6d0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfddaaf5a03171b768f38c70ef3cb84536f0b37510787b342085b7dd8cc7290f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfddaaf5a03171b768f38c70ef3cb84536f0b37510787b342085b7dd8cc7290f->enter($__internal_dfddaaf5a03171b768f38c70ef3cb84536f0b37510787b342085b7dd8cc7290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e300d4635beba73c90e1adaaa935933f02f2ce0b054ffb017d99e50ae09fc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e300d4635beba73c90e1adaaa935933f02f2ce0b054ffb017d99e50ae09fc02->enter($__internal_2e300d4635beba73c90e1adaaa935933f02f2ce0b054ffb017d99e50ae09fc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2e300d4635beba73c90e1adaaa935933f02f2ce0b054ffb017d99e50ae09fc02->leave($__internal_2e300d4635beba73c90e1adaaa935933f02f2ce0b054ffb017d99e50ae09fc02_prof);

        
        $__internal_dfddaaf5a03171b768f38c70ef3cb84536f0b37510787b342085b7dd8cc7290f->leave($__internal_dfddaaf5a03171b768f38c70ef3cb84536f0b37510787b342085b7dd8cc7290f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

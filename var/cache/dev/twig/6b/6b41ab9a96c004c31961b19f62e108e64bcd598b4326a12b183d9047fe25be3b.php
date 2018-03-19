<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a730fe66aa71819911fe80322c71abfbf913c7292924a6181f582f220000d7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0532fff22b11e4a1244fea9797fbcde1a71fe7376e1a060045352af95a96c611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0532fff22b11e4a1244fea9797fbcde1a71fe7376e1a060045352af95a96c611->enter($__internal_0532fff22b11e4a1244fea9797fbcde1a71fe7376e1a060045352af95a96c611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5d72021a839f59f83ff59260113ea2a78422fd0a96a6547636de05e40d128a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d72021a839f59f83ff59260113ea2a78422fd0a96a6547636de05e40d128a54->enter($__internal_5d72021a839f59f83ff59260113ea2a78422fd0a96a6547636de05e40d128a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0532fff22b11e4a1244fea9797fbcde1a71fe7376e1a060045352af95a96c611->leave($__internal_0532fff22b11e4a1244fea9797fbcde1a71fe7376e1a060045352af95a96c611_prof);

        
        $__internal_5d72021a839f59f83ff59260113ea2a78422fd0a96a6547636de05e40d128a54->leave($__internal_5d72021a839f59f83ff59260113ea2a78422fd0a96a6547636de05e40d128a54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d7bc1ea4cdfd594669d85026bfddc4106613dfc305a8cd41dabec34644ac407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7bc1ea4cdfd594669d85026bfddc4106613dfc305a8cd41dabec34644ac407->enter($__internal_7d7bc1ea4cdfd594669d85026bfddc4106613dfc305a8cd41dabec34644ac407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fca197b27c03d2a40d1a8f8267a65c14e1ece172970515ebd6f2a57fce3aacf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca197b27c03d2a40d1a8f8267a65c14e1ece172970515ebd6f2a57fce3aacf7->enter($__internal_fca197b27c03d2a40d1a8f8267a65c14e1ece172970515ebd6f2a57fce3aacf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fca197b27c03d2a40d1a8f8267a65c14e1ece172970515ebd6f2a57fce3aacf7->leave($__internal_fca197b27c03d2a40d1a8f8267a65c14e1ece172970515ebd6f2a57fce3aacf7_prof);

        
        $__internal_7d7bc1ea4cdfd594669d85026bfddc4106613dfc305a8cd41dabec34644ac407->leave($__internal_7d7bc1ea4cdfd594669d85026bfddc4106613dfc305a8cd41dabec34644ac407_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}

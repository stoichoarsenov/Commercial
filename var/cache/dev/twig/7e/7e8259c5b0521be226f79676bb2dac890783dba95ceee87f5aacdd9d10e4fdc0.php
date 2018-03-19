<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_85d5d241e77d3e8ac1f619f27e2824d4d0e03e4d90cd7c0cb5abcac108f5bec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b9b37f81c55f61f97cb0b0154ac985f2120bd7eb8a29245f586f8fd0ff202bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b37f81c55f61f97cb0b0154ac985f2120bd7eb8a29245f586f8fd0ff202bac->enter($__internal_b9b37f81c55f61f97cb0b0154ac985f2120bd7eb8a29245f586f8fd0ff202bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ece6763aefbccdc815fefc649af124415be10afb01400f1b6f373fd4454b709b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece6763aefbccdc815fefc649af124415be10afb01400f1b6f373fd4454b709b->enter($__internal_ece6763aefbccdc815fefc649af124415be10afb01400f1b6f373fd4454b709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b37f81c55f61f97cb0b0154ac985f2120bd7eb8a29245f586f8fd0ff202bac->leave($__internal_b9b37f81c55f61f97cb0b0154ac985f2120bd7eb8a29245f586f8fd0ff202bac_prof);

        
        $__internal_ece6763aefbccdc815fefc649af124415be10afb01400f1b6f373fd4454b709b->leave($__internal_ece6763aefbccdc815fefc649af124415be10afb01400f1b6f373fd4454b709b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_078ee87eb26d3094c5dab7acd783ddfbbde35b37df3cc402b03fc65353214e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078ee87eb26d3094c5dab7acd783ddfbbde35b37df3cc402b03fc65353214e31->enter($__internal_078ee87eb26d3094c5dab7acd783ddfbbde35b37df3cc402b03fc65353214e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85f8aeacdc1a35f8ca728fa2623629ea8efc355feb421ed8fab4be61bac8e90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f8aeacdc1a35f8ca728fa2623629ea8efc355feb421ed8fab4be61bac8e90a->enter($__internal_85f8aeacdc1a35f8ca728fa2623629ea8efc355feb421ed8fab4be61bac8e90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_85f8aeacdc1a35f8ca728fa2623629ea8efc355feb421ed8fab4be61bac8e90a->leave($__internal_85f8aeacdc1a35f8ca728fa2623629ea8efc355feb421ed8fab4be61bac8e90a_prof);

        
        $__internal_078ee87eb26d3094c5dab7acd783ddfbbde35b37df3cc402b03fc65353214e31->leave($__internal_078ee87eb26d3094c5dab7acd783ddfbbde35b37df3cc402b03fc65353214e31_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}

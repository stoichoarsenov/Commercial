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
        $__internal_0b7694f42d3fb6ddc99de5f7638813679226b4cd324e3c61196d747ba858b0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7694f42d3fb6ddc99de5f7638813679226b4cd324e3c61196d747ba858b0a9->enter($__internal_0b7694f42d3fb6ddc99de5f7638813679226b4cd324e3c61196d747ba858b0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8c2189836fe008cbd36c1458a12af79b71219e611dc8078ca34b4c10bf4935ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2189836fe008cbd36c1458a12af79b71219e611dc8078ca34b4c10bf4935ed->enter($__internal_8c2189836fe008cbd36c1458a12af79b71219e611dc8078ca34b4c10bf4935ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7694f42d3fb6ddc99de5f7638813679226b4cd324e3c61196d747ba858b0a9->leave($__internal_0b7694f42d3fb6ddc99de5f7638813679226b4cd324e3c61196d747ba858b0a9_prof);

        
        $__internal_8c2189836fe008cbd36c1458a12af79b71219e611dc8078ca34b4c10bf4935ed->leave($__internal_8c2189836fe008cbd36c1458a12af79b71219e611dc8078ca34b4c10bf4935ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3790298a2dfb5e8077a1d8e5db884d02904306cc7e522a9d99db66bc405b1941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3790298a2dfb5e8077a1d8e5db884d02904306cc7e522a9d99db66bc405b1941->enter($__internal_3790298a2dfb5e8077a1d8e5db884d02904306cc7e522a9d99db66bc405b1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6bd15b9225f4f05e5e1c875c5785e1f2b528e79ba098a6b84067ce2bda628504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd15b9225f4f05e5e1c875c5785e1f2b528e79ba098a6b84067ce2bda628504->enter($__internal_6bd15b9225f4f05e5e1c875c5785e1f2b528e79ba098a6b84067ce2bda628504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6bd15b9225f4f05e5e1c875c5785e1f2b528e79ba098a6b84067ce2bda628504->leave($__internal_6bd15b9225f4f05e5e1c875c5785e1f2b528e79ba098a6b84067ce2bda628504_prof);

        
        $__internal_3790298a2dfb5e8077a1d8e5db884d02904306cc7e522a9d99db66bc405b1941->leave($__internal_3790298a2dfb5e8077a1d8e5db884d02904306cc7e522a9d99db66bc405b1941_prof);

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

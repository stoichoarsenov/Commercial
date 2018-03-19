<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_3d0024a7db6dab7cf59c9c6455ec187a03d127c07458f7cc449ed07bb7ab065b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_830a63b09a3f568691d07c018741b1468f623248f9731e6f6b8328330e92044a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830a63b09a3f568691d07c018741b1468f623248f9731e6f6b8328330e92044a->enter($__internal_830a63b09a3f568691d07c018741b1468f623248f9731e6f6b8328330e92044a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4230243168663a9bcdb52898ac12fc6a4b4e6ca85fe753f1cd03c6079960eee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4230243168663a9bcdb52898ac12fc6a4b4e6ca85fe753f1cd03c6079960eee1->enter($__internal_4230243168663a9bcdb52898ac12fc6a4b4e6ca85fe753f1cd03c6079960eee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830a63b09a3f568691d07c018741b1468f623248f9731e6f6b8328330e92044a->leave($__internal_830a63b09a3f568691d07c018741b1468f623248f9731e6f6b8328330e92044a_prof);

        
        $__internal_4230243168663a9bcdb52898ac12fc6a4b4e6ca85fe753f1cd03c6079960eee1->leave($__internal_4230243168663a9bcdb52898ac12fc6a4b4e6ca85fe753f1cd03c6079960eee1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_056fb2a3445d8be4b473a17fd7ab02cfdcf964e440357ea950c47b3e2f85ac0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056fb2a3445d8be4b473a17fd7ab02cfdcf964e440357ea950c47b3e2f85ac0e->enter($__internal_056fb2a3445d8be4b473a17fd7ab02cfdcf964e440357ea950c47b3e2f85ac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d342b150927e7ce444dad12f2e4adc67149fd282f0ab7309240212a5350cb1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d342b150927e7ce444dad12f2e4adc67149fd282f0ab7309240212a5350cb1b5->enter($__internal_d342b150927e7ce444dad12f2e4adc67149fd282f0ab7309240212a5350cb1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d342b150927e7ce444dad12f2e4adc67149fd282f0ab7309240212a5350cb1b5->leave($__internal_d342b150927e7ce444dad12f2e4adc67149fd282f0ab7309240212a5350cb1b5_prof);

        
        $__internal_056fb2a3445d8be4b473a17fd7ab02cfdcf964e440357ea950c47b3e2f85ac0e->leave($__internal_056fb2a3445d8be4b473a17fd7ab02cfdcf964e440357ea950c47b3e2f85ac0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}

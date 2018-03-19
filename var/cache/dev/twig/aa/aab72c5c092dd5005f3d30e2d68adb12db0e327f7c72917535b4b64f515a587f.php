<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_efb5479f3c23451e1f48c46671a25354239fb9ef5f3e65f8b6e00aaaccc9707d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20918ef7af47ad6aca614476ffdcb28cc1411cd1ff46f384b54fed2c40def16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20918ef7af47ad6aca614476ffdcb28cc1411cd1ff46f384b54fed2c40def16b->enter($__internal_20918ef7af47ad6aca614476ffdcb28cc1411cd1ff46f384b54fed2c40def16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_6fb8d63de6bdbfab5ae7377207b516d6b4cb96c913709ef98bfa2d92ab830698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8d63de6bdbfab5ae7377207b516d6b4cb96c913709ef98bfa2d92ab830698->enter($__internal_6fb8d63de6bdbfab5ae7377207b516d6b4cb96c913709ef98bfa2d92ab830698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_20918ef7af47ad6aca614476ffdcb28cc1411cd1ff46f384b54fed2c40def16b->leave($__internal_20918ef7af47ad6aca614476ffdcb28cc1411cd1ff46f384b54fed2c40def16b_prof);

        
        $__internal_6fb8d63de6bdbfab5ae7377207b516d6b4cb96c913709ef98bfa2d92ab830698->leave($__internal_6fb8d63de6bdbfab5ae7377207b516d6b4cb96c913709ef98bfa2d92ab830698_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_087ca9042777caee290c2365a9a58266b2ef2c4e8269bf578971f8bcfccebf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087ca9042777caee290c2365a9a58266b2ef2c4e8269bf578971f8bcfccebf18->enter($__internal_087ca9042777caee290c2365a9a58266b2ef2c4e8269bf578971f8bcfccebf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0cc9b82b41c914f0b64129d7f1ed5271f145f7c0bf32d448250072d1b940c3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc9b82b41c914f0b64129d7f1ed5271f145f7c0bf32d448250072d1b940c3e0->enter($__internal_0cc9b82b41c914f0b64129d7f1ed5271f145f7c0bf32d448250072d1b940c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_0cc9b82b41c914f0b64129d7f1ed5271f145f7c0bf32d448250072d1b940c3e0->leave($__internal_0cc9b82b41c914f0b64129d7f1ed5271f145f7c0bf32d448250072d1b940c3e0_prof);

        
        $__internal_087ca9042777caee290c2365a9a58266b2ef2c4e8269bf578971f8bcfccebf18->leave($__internal_087ca9042777caee290c2365a9a58266b2ef2c4e8269bf578971f8bcfccebf18_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab85fc0d2cfe049be67bd2c8d4298bef16d2c2bc3a60de133b913478f6079b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab85fc0d2cfe049be67bd2c8d4298bef16d2c2bc3a60de133b913478f6079b67->enter($__internal_ab85fc0d2cfe049be67bd2c8d4298bef16d2c2bc3a60de133b913478f6079b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_90b00ff685a4a22e82c2a201ffd3652ecdfd955dc06028036548dab696df393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b00ff685a4a22e82c2a201ffd3652ecdfd955dc06028036548dab696df393e->enter($__internal_90b00ff685a4a22e82c2a201ffd3652ecdfd955dc06028036548dab696df393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_90b00ff685a4a22e82c2a201ffd3652ecdfd955dc06028036548dab696df393e->leave($__internal_90b00ff685a4a22e82c2a201ffd3652ecdfd955dc06028036548dab696df393e_prof);

        
        $__internal_ab85fc0d2cfe049be67bd2c8d4298bef16d2c2bc3a60de133b913478f6079b67->leave($__internal_ab85fc0d2cfe049be67bd2c8d4298bef16d2c2bc3a60de133b913478f6079b67_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0cc827cadd905bf7a7ccb2f063302522c27ea554888cf4c22d433408f7725ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc827cadd905bf7a7ccb2f063302522c27ea554888cf4c22d433408f7725ee9->enter($__internal_0cc827cadd905bf7a7ccb2f063302522c27ea554888cf4c22d433408f7725ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_aa7ea60b44dca14cb6f43d69b217b43f941deecf233f933d2d882ba6d44edf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7ea60b44dca14cb6f43d69b217b43f941deecf233f933d2d882ba6d44edf2a->enter($__internal_aa7ea60b44dca14cb6f43d69b217b43f941deecf233f933d2d882ba6d44edf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa7ea60b44dca14cb6f43d69b217b43f941deecf233f933d2d882ba6d44edf2a->leave($__internal_aa7ea60b44dca14cb6f43d69b217b43f941deecf233f933d2d882ba6d44edf2a_prof);

        
        $__internal_0cc827cadd905bf7a7ccb2f063302522c27ea554888cf4c22d433408f7725ee9->leave($__internal_0cc827cadd905bf7a7ccb2f063302522c27ea554888cf4c22d433408f7725ee9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}

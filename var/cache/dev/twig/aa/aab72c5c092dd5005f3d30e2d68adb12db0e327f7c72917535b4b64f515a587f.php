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
        $__internal_a47003488a25810c7d3a80b3f9e11b250a5a6e07667505ce359b22ef106a08c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47003488a25810c7d3a80b3f9e11b250a5a6e07667505ce359b22ef106a08c5->enter($__internal_a47003488a25810c7d3a80b3f9e11b250a5a6e07667505ce359b22ef106a08c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_9aacff0e8e7ec0f73c41ffed46ca00a15a074ccaa0d2537ec865c9ea36142590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aacff0e8e7ec0f73c41ffed46ca00a15a074ccaa0d2537ec865c9ea36142590->enter($__internal_9aacff0e8e7ec0f73c41ffed46ca00a15a074ccaa0d2537ec865c9ea36142590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a47003488a25810c7d3a80b3f9e11b250a5a6e07667505ce359b22ef106a08c5->leave($__internal_a47003488a25810c7d3a80b3f9e11b250a5a6e07667505ce359b22ef106a08c5_prof);

        
        $__internal_9aacff0e8e7ec0f73c41ffed46ca00a15a074ccaa0d2537ec865c9ea36142590->leave($__internal_9aacff0e8e7ec0f73c41ffed46ca00a15a074ccaa0d2537ec865c9ea36142590_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_afca15f605e43c6ad33b03281591845a02cb99194529c65495bde48658b78c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afca15f605e43c6ad33b03281591845a02cb99194529c65495bde48658b78c49->enter($__internal_afca15f605e43c6ad33b03281591845a02cb99194529c65495bde48658b78c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1405d2ca51a75dae7248f2208aee04a21b6cd8b417f81ca803fce7c9205d355b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1405d2ca51a75dae7248f2208aee04a21b6cd8b417f81ca803fce7c9205d355b->enter($__internal_1405d2ca51a75dae7248f2208aee04a21b6cd8b417f81ca803fce7c9205d355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_1405d2ca51a75dae7248f2208aee04a21b6cd8b417f81ca803fce7c9205d355b->leave($__internal_1405d2ca51a75dae7248f2208aee04a21b6cd8b417f81ca803fce7c9205d355b_prof);

        
        $__internal_afca15f605e43c6ad33b03281591845a02cb99194529c65495bde48658b78c49->leave($__internal_afca15f605e43c6ad33b03281591845a02cb99194529c65495bde48658b78c49_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_82624675ff83d1c53fae8cfc413addcb9e81338d300ed8840a922deeae33a2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82624675ff83d1c53fae8cfc413addcb9e81338d300ed8840a922deeae33a2ab->enter($__internal_82624675ff83d1c53fae8cfc413addcb9e81338d300ed8840a922deeae33a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_725bacbb84cf37079e491de9de7a90be5fea037701403db22537b6f361003042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725bacbb84cf37079e491de9de7a90be5fea037701403db22537b6f361003042->enter($__internal_725bacbb84cf37079e491de9de7a90be5fea037701403db22537b6f361003042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_725bacbb84cf37079e491de9de7a90be5fea037701403db22537b6f361003042->leave($__internal_725bacbb84cf37079e491de9de7a90be5fea037701403db22537b6f361003042_prof);

        
        $__internal_82624675ff83d1c53fae8cfc413addcb9e81338d300ed8840a922deeae33a2ab->leave($__internal_82624675ff83d1c53fae8cfc413addcb9e81338d300ed8840a922deeae33a2ab_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e4282396f57c8bb8b7008865b270355183df768faef6b2a08ef51ceb9bc69e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4282396f57c8bb8b7008865b270355183df768faef6b2a08ef51ceb9bc69e3f->enter($__internal_e4282396f57c8bb8b7008865b270355183df768faef6b2a08ef51ceb9bc69e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4ed227a77356e296611a8d45e8faea9d04255676f216f2f7d90783ef407f6f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed227a77356e296611a8d45e8faea9d04255676f216f2f7d90783ef407f6f2f->enter($__internal_4ed227a77356e296611a8d45e8faea9d04255676f216f2f7d90783ef407f6f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ed227a77356e296611a8d45e8faea9d04255676f216f2f7d90783ef407f6f2f->leave($__internal_4ed227a77356e296611a8d45e8faea9d04255676f216f2f7d90783ef407f6f2f_prof);

        
        $__internal_e4282396f57c8bb8b7008865b270355183df768faef6b2a08ef51ceb9bc69e3f->leave($__internal_e4282396f57c8bb8b7008865b270355183df768faef6b2a08ef51ceb9bc69e3f_prof);

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

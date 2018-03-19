<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5f3f02e3efa29f98fffbad11f7d829be11db0a6e93ebfd36f53fb3a2bf5685d2 extends Twig_Template
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
        $__internal_f4f009a739a1fc0df212759046e70eca505a297c274fd976d57ed22aafb4752d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f009a739a1fc0df212759046e70eca505a297c274fd976d57ed22aafb4752d->enter($__internal_f4f009a739a1fc0df212759046e70eca505a297c274fd976d57ed22aafb4752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_82ada49fc472006dee340e4537e48263313c232a322ad1ed0b11601cc1211d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ada49fc472006dee340e4537e48263313c232a322ad1ed0b11601cc1211d31->enter($__internal_82ada49fc472006dee340e4537e48263313c232a322ad1ed0b11601cc1211d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4f009a739a1fc0df212759046e70eca505a297c274fd976d57ed22aafb4752d->leave($__internal_f4f009a739a1fc0df212759046e70eca505a297c274fd976d57ed22aafb4752d_prof);

        
        $__internal_82ada49fc472006dee340e4537e48263313c232a322ad1ed0b11601cc1211d31->leave($__internal_82ada49fc472006dee340e4537e48263313c232a322ad1ed0b11601cc1211d31_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_743e73b5165a2c2784671e1d879d3ba9a1fec3f1897db684a7e570d93d12f29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743e73b5165a2c2784671e1d879d3ba9a1fec3f1897db684a7e570d93d12f29c->enter($__internal_743e73b5165a2c2784671e1d879d3ba9a1fec3f1897db684a7e570d93d12f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_af12fcd3985580d64823e9cbf7dc19d8751c3d187bc65df98c55cc9c3893d4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af12fcd3985580d64823e9cbf7dc19d8751c3d187bc65df98c55cc9c3893d4da->enter($__internal_af12fcd3985580d64823e9cbf7dc19d8751c3d187bc65df98c55cc9c3893d4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_af12fcd3985580d64823e9cbf7dc19d8751c3d187bc65df98c55cc9c3893d4da->leave($__internal_af12fcd3985580d64823e9cbf7dc19d8751c3d187bc65df98c55cc9c3893d4da_prof);

        
        $__internal_743e73b5165a2c2784671e1d879d3ba9a1fec3f1897db684a7e570d93d12f29c->leave($__internal_743e73b5165a2c2784671e1d879d3ba9a1fec3f1897db684a7e570d93d12f29c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27545ab5ec70bf31aaf41808510326cb114cbea9b6e0e6c19b04fe9f20fbfc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27545ab5ec70bf31aaf41808510326cb114cbea9b6e0e6c19b04fe9f20fbfc80->enter($__internal_27545ab5ec70bf31aaf41808510326cb114cbea9b6e0e6c19b04fe9f20fbfc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_daee6786b4ca51729baa8324d449966cba24e29c01917fc0a5dd1e87efc85fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daee6786b4ca51729baa8324d449966cba24e29c01917fc0a5dd1e87efc85fe1->enter($__internal_daee6786b4ca51729baa8324d449966cba24e29c01917fc0a5dd1e87efc85fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_daee6786b4ca51729baa8324d449966cba24e29c01917fc0a5dd1e87efc85fe1->leave($__internal_daee6786b4ca51729baa8324d449966cba24e29c01917fc0a5dd1e87efc85fe1_prof);

        
        $__internal_27545ab5ec70bf31aaf41808510326cb114cbea9b6e0e6c19b04fe9f20fbfc80->leave($__internal_27545ab5ec70bf31aaf41808510326cb114cbea9b6e0e6c19b04fe9f20fbfc80_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa7bf7dace69e79a668242000f0340940c3603c71fb7e2f02569ff6f938db350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7bf7dace69e79a668242000f0340940c3603c71fb7e2f02569ff6f938db350->enter($__internal_aa7bf7dace69e79a668242000f0340940c3603c71fb7e2f02569ff6f938db350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3da7b6e6f229bad198b0a786754b5c388b854ce5dba2fd855f36a35bb871a72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da7b6e6f229bad198b0a786754b5c388b854ce5dba2fd855f36a35bb871a72c->enter($__internal_3da7b6e6f229bad198b0a786754b5c388b854ce5dba2fd855f36a35bb871a72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3da7b6e6f229bad198b0a786754b5c388b854ce5dba2fd855f36a35bb871a72c->leave($__internal_3da7b6e6f229bad198b0a786754b5c388b854ce5dba2fd855f36a35bb871a72c_prof);

        
        $__internal_aa7bf7dace69e79a668242000f0340940c3603c71fb7e2f02569ff6f938db350->leave($__internal_aa7bf7dace69e79a668242000f0340940c3603c71fb7e2f02569ff6f938db350_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}

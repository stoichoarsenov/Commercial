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
        $__internal_205b7669bd77ea727f69b93604b1f5b7b25a6e34ac70da57c01f81612bb8c025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205b7669bd77ea727f69b93604b1f5b7b25a6e34ac70da57c01f81612bb8c025->enter($__internal_205b7669bd77ea727f69b93604b1f5b7b25a6e34ac70da57c01f81612bb8c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c6b454ee768d87eff8ba54a2a2b3bd25b87eb8e70c06f3e1f2abf70f63f25c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b454ee768d87eff8ba54a2a2b3bd25b87eb8e70c06f3e1f2abf70f63f25c4c->enter($__internal_c6b454ee768d87eff8ba54a2a2b3bd25b87eb8e70c06f3e1f2abf70f63f25c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_205b7669bd77ea727f69b93604b1f5b7b25a6e34ac70da57c01f81612bb8c025->leave($__internal_205b7669bd77ea727f69b93604b1f5b7b25a6e34ac70da57c01f81612bb8c025_prof);

        
        $__internal_c6b454ee768d87eff8ba54a2a2b3bd25b87eb8e70c06f3e1f2abf70f63f25c4c->leave($__internal_c6b454ee768d87eff8ba54a2a2b3bd25b87eb8e70c06f3e1f2abf70f63f25c4c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9cdf25007e1a33bde80175f76b16d19f52f2cde9fa0cec1b4d5a6672ce72a79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdf25007e1a33bde80175f76b16d19f52f2cde9fa0cec1b4d5a6672ce72a79b->enter($__internal_9cdf25007e1a33bde80175f76b16d19f52f2cde9fa0cec1b4d5a6672ce72a79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bc0a6766ec2342d73df6451dba3df413cee0660d075653109918b019de09ce58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0a6766ec2342d73df6451dba3df413cee0660d075653109918b019de09ce58->enter($__internal_bc0a6766ec2342d73df6451dba3df413cee0660d075653109918b019de09ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_bc0a6766ec2342d73df6451dba3df413cee0660d075653109918b019de09ce58->leave($__internal_bc0a6766ec2342d73df6451dba3df413cee0660d075653109918b019de09ce58_prof);

        
        $__internal_9cdf25007e1a33bde80175f76b16d19f52f2cde9fa0cec1b4d5a6672ce72a79b->leave($__internal_9cdf25007e1a33bde80175f76b16d19f52f2cde9fa0cec1b4d5a6672ce72a79b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2fdbca41e72235adc6a9a8be513402b10beb8a2433dc60bb3afb6ff8559685e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdbca41e72235adc6a9a8be513402b10beb8a2433dc60bb3afb6ff8559685e9->enter($__internal_2fdbca41e72235adc6a9a8be513402b10beb8a2433dc60bb3afb6ff8559685e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_380c440afbff9a87cc61c39c08a2bffc6d79960a96cbf810c6967cdde8f271a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380c440afbff9a87cc61c39c08a2bffc6d79960a96cbf810c6967cdde8f271a7->enter($__internal_380c440afbff9a87cc61c39c08a2bffc6d79960a96cbf810c6967cdde8f271a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_380c440afbff9a87cc61c39c08a2bffc6d79960a96cbf810c6967cdde8f271a7->leave($__internal_380c440afbff9a87cc61c39c08a2bffc6d79960a96cbf810c6967cdde8f271a7_prof);

        
        $__internal_2fdbca41e72235adc6a9a8be513402b10beb8a2433dc60bb3afb6ff8559685e9->leave($__internal_2fdbca41e72235adc6a9a8be513402b10beb8a2433dc60bb3afb6ff8559685e9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_492dada28d3c69441db4b4519689163e047b8883c5f1ee47072d690d508ddc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492dada28d3c69441db4b4519689163e047b8883c5f1ee47072d690d508ddc15->enter($__internal_492dada28d3c69441db4b4519689163e047b8883c5f1ee47072d690d508ddc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8e3bd32262e811477d7fc6d47895949c96cb86696dab3a1056ca7a0fa2d12f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3bd32262e811477d7fc6d47895949c96cb86696dab3a1056ca7a0fa2d12f3c->enter($__internal_8e3bd32262e811477d7fc6d47895949c96cb86696dab3a1056ca7a0fa2d12f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e3bd32262e811477d7fc6d47895949c96cb86696dab3a1056ca7a0fa2d12f3c->leave($__internal_8e3bd32262e811477d7fc6d47895949c96cb86696dab3a1056ca7a0fa2d12f3c_prof);

        
        $__internal_492dada28d3c69441db4b4519689163e047b8883c5f1ee47072d690d508ddc15->leave($__internal_492dada28d3c69441db4b4519689163e047b8883c5f1ee47072d690d508ddc15_prof);

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

<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_97233d3f1430ff42bfbc5887468d9a7616ec8831f0d178a23f401f1d92479746 extends Twig_Template
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
        $__internal_4844e763564d72f33f190dcd2e7e729428c03956649f482b5c9a40afa50287cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4844e763564d72f33f190dcd2e7e729428c03956649f482b5c9a40afa50287cb->enter($__internal_4844e763564d72f33f190dcd2e7e729428c03956649f482b5c9a40afa50287cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_6553b81747c5ed2db3490e20665d02cba26be6b25ba128370cc61707a1376b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6553b81747c5ed2db3490e20665d02cba26be6b25ba128370cc61707a1376b2f->enter($__internal_6553b81747c5ed2db3490e20665d02cba26be6b25ba128370cc61707a1376b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4844e763564d72f33f190dcd2e7e729428c03956649f482b5c9a40afa50287cb->leave($__internal_4844e763564d72f33f190dcd2e7e729428c03956649f482b5c9a40afa50287cb_prof);

        
        $__internal_6553b81747c5ed2db3490e20665d02cba26be6b25ba128370cc61707a1376b2f->leave($__internal_6553b81747c5ed2db3490e20665d02cba26be6b25ba128370cc61707a1376b2f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6cb65ec0f460a561913fdd47882b78f495c6de0dc80777dfe4dd3b375873a9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb65ec0f460a561913fdd47882b78f495c6de0dc80777dfe4dd3b375873a9f7->enter($__internal_6cb65ec0f460a561913fdd47882b78f495c6de0dc80777dfe4dd3b375873a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8e170cbc03db753344561e00a368e8e7e87008142c59c313c2d9c005d9e981f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e170cbc03db753344561e00a368e8e7e87008142c59c313c2d9c005d9e981f9->enter($__internal_8e170cbc03db753344561e00a368e8e7e87008142c59c313c2d9c005d9e981f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_8e170cbc03db753344561e00a368e8e7e87008142c59c313c2d9c005d9e981f9->leave($__internal_8e170cbc03db753344561e00a368e8e7e87008142c59c313c2d9c005d9e981f9_prof);

        
        $__internal_6cb65ec0f460a561913fdd47882b78f495c6de0dc80777dfe4dd3b375873a9f7->leave($__internal_6cb65ec0f460a561913fdd47882b78f495c6de0dc80777dfe4dd3b375873a9f7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_91f0064a2f43366b3f6b2173151b54236461453aeca2ff0bf9484659e4a3974c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f0064a2f43366b3f6b2173151b54236461453aeca2ff0bf9484659e4a3974c->enter($__internal_91f0064a2f43366b3f6b2173151b54236461453aeca2ff0bf9484659e4a3974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9327ab9251e4e9801ffceafb38de476dc7e99772348216fdeb2d3fce67656a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9327ab9251e4e9801ffceafb38de476dc7e99772348216fdeb2d3fce67656a73->enter($__internal_9327ab9251e4e9801ffceafb38de476dc7e99772348216fdeb2d3fce67656a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9327ab9251e4e9801ffceafb38de476dc7e99772348216fdeb2d3fce67656a73->leave($__internal_9327ab9251e4e9801ffceafb38de476dc7e99772348216fdeb2d3fce67656a73_prof);

        
        $__internal_91f0064a2f43366b3f6b2173151b54236461453aeca2ff0bf9484659e4a3974c->leave($__internal_91f0064a2f43366b3f6b2173151b54236461453aeca2ff0bf9484659e4a3974c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e3400d475e82c32554fae14149edc8ae7a870a223c84fc2b1744ce0accb471a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3400d475e82c32554fae14149edc8ae7a870a223c84fc2b1744ce0accb471a->enter($__internal_1e3400d475e82c32554fae14149edc8ae7a870a223c84fc2b1744ce0accb471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f5a639d2657a124f5218676c4c6d275ad5b610afd706d3e87de61c354a85ef2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a639d2657a124f5218676c4c6d275ad5b610afd706d3e87de61c354a85ef2f->enter($__internal_f5a639d2657a124f5218676c4c6d275ad5b610afd706d3e87de61c354a85ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f5a639d2657a124f5218676c4c6d275ad5b610afd706d3e87de61c354a85ef2f->leave($__internal_f5a639d2657a124f5218676c4c6d275ad5b610afd706d3e87de61c354a85ef2f_prof);

        
        $__internal_1e3400d475e82c32554fae14149edc8ae7a870a223c84fc2b1744ce0accb471a->leave($__internal_1e3400d475e82c32554fae14149edc8ae7a870a223c84fc2b1744ce0accb471a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}

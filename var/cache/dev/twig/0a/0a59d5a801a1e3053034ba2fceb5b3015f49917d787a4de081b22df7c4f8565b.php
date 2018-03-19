<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4861ebe0f3967c4704b5041052a6f9cd3591bf4f5c14d40640026bffb5e778c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_fbe2455d350a2e4b56ae7d8b73f23c87bd9f6c3b9c7d0b5ccd63ebdafe77665d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe2455d350a2e4b56ae7d8b73f23c87bd9f6c3b9c7d0b5ccd63ebdafe77665d->enter($__internal_fbe2455d350a2e4b56ae7d8b73f23c87bd9f6c3b9c7d0b5ccd63ebdafe77665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_bb83cba6c4bd88e42b49b9b912994d9f0082864285c8c7677fa8bfab60fd1030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb83cba6c4bd88e42b49b9b912994d9f0082864285c8c7677fa8bfab60fd1030->enter($__internal_bb83cba6c4bd88e42b49b9b912994d9f0082864285c8c7677fa8bfab60fd1030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe2455d350a2e4b56ae7d8b73f23c87bd9f6c3b9c7d0b5ccd63ebdafe77665d->leave($__internal_fbe2455d350a2e4b56ae7d8b73f23c87bd9f6c3b9c7d0b5ccd63ebdafe77665d_prof);

        
        $__internal_bb83cba6c4bd88e42b49b9b912994d9f0082864285c8c7677fa8bfab60fd1030->leave($__internal_bb83cba6c4bd88e42b49b9b912994d9f0082864285c8c7677fa8bfab60fd1030_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede6b1c08b6beb26b2ac16b2e694a07d236f3de9e664215d8dff928c1a38a34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede6b1c08b6beb26b2ac16b2e694a07d236f3de9e664215d8dff928c1a38a34e->enter($__internal_ede6b1c08b6beb26b2ac16b2e694a07d236f3de9e664215d8dff928c1a38a34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94bf0c6ca5f67bf1dab4499afb32467b87236908ae20cdde8dfadf84b080f3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bf0c6ca5f67bf1dab4499afb32467b87236908ae20cdde8dfadf84b080f3f9->enter($__internal_94bf0c6ca5f67bf1dab4499afb32467b87236908ae20cdde8dfadf84b080f3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div style=\"margin-bottom: 30%;\"><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "    </div>
";
        
        $__internal_94bf0c6ca5f67bf1dab4499afb32467b87236908ae20cdde8dfadf84b080f3f9->leave($__internal_94bf0c6ca5f67bf1dab4499afb32467b87236908ae20cdde8dfadf84b080f3f9_prof);

        
        $__internal_ede6b1c08b6beb26b2ac16b2e694a07d236f3de9e664215d8dff928c1a38a34e->leave($__internal_ede6b1c08b6beb26b2ac16b2e694a07d236f3de9e664215d8dff928c1a38a34e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div style=\"margin-bottom: 30%;\"><p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}

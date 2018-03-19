<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8721953048e5e767811916d798b6c21b449b7bf5456310ca5528133ba3b3448b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a71061b292dbe70f46a9629852761bcc686a93cc206243c86507248bc5a3d95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71061b292dbe70f46a9629852761bcc686a93cc206243c86507248bc5a3d95b->enter($__internal_a71061b292dbe70f46a9629852761bcc686a93cc206243c86507248bc5a3d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c24bd20b5dc5bff1b2df730c0990a1e835c0b382d4b13d2e56daa4dab29897df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24bd20b5dc5bff1b2df730c0990a1e835c0b382d4b13d2e56daa4dab29897df->enter($__internal_c24bd20b5dc5bff1b2df730c0990a1e835c0b382d4b13d2e56daa4dab29897df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71061b292dbe70f46a9629852761bcc686a93cc206243c86507248bc5a3d95b->leave($__internal_a71061b292dbe70f46a9629852761bcc686a93cc206243c86507248bc5a3d95b_prof);

        
        $__internal_c24bd20b5dc5bff1b2df730c0990a1e835c0b382d4b13d2e56daa4dab29897df->leave($__internal_c24bd20b5dc5bff1b2df730c0990a1e835c0b382d4b13d2e56daa4dab29897df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0520388ecf2f46828382e62be9c6402f2792c4b02d233f6dde0f7422b8b9ab05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0520388ecf2f46828382e62be9c6402f2792c4b02d233f6dde0f7422b8b9ab05->enter($__internal_0520388ecf2f46828382e62be9c6402f2792c4b02d233f6dde0f7422b8b9ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7b2d97cf80c77249390aacde893e9f9f6505b5fe9b3e8c2688a1ac6879c4bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b2d97cf80c77249390aacde893e9f9f6505b5fe9b3e8c2688a1ac6879c4bec->enter($__internal_d7b2d97cf80c77249390aacde893e9f9f6505b5fe9b3e8c2688a1ac6879c4bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d7b2d97cf80c77249390aacde893e9f9f6505b5fe9b3e8c2688a1ac6879c4bec->leave($__internal_d7b2d97cf80c77249390aacde893e9f9f6505b5fe9b3e8c2688a1ac6879c4bec_prof);

        
        $__internal_0520388ecf2f46828382e62be9c6402f2792c4b02d233f6dde0f7422b8b9ab05->leave($__internal_0520388ecf2f46828382e62be9c6402f2792c4b02d233f6dde0f7422b8b9ab05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}

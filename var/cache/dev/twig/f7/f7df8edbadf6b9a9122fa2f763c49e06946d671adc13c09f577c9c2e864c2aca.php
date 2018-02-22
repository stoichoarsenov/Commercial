<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_26d5170706aaa7e17bdd040816296370686437bbec42079ab0849b046ddff969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_70698c7ce8d9419263d411833a92262c72d8d71c4ad0f72782135db9e2fb77e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70698c7ce8d9419263d411833a92262c72d8d71c4ad0f72782135db9e2fb77e3->enter($__internal_70698c7ce8d9419263d411833a92262c72d8d71c4ad0f72782135db9e2fb77e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_93985c25c9cc9e100275cdd60031e8611dd09d686940fe5c59fbc09b013d82bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93985c25c9cc9e100275cdd60031e8611dd09d686940fe5c59fbc09b013d82bb->enter($__internal_93985c25c9cc9e100275cdd60031e8611dd09d686940fe5c59fbc09b013d82bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70698c7ce8d9419263d411833a92262c72d8d71c4ad0f72782135db9e2fb77e3->leave($__internal_70698c7ce8d9419263d411833a92262c72d8d71c4ad0f72782135db9e2fb77e3_prof);

        
        $__internal_93985c25c9cc9e100275cdd60031e8611dd09d686940fe5c59fbc09b013d82bb->leave($__internal_93985c25c9cc9e100275cdd60031e8611dd09d686940fe5c59fbc09b013d82bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2108be4346e74b3f824c0dfa4e9d1ba10ccd413ace3a7ad611a8a3af5a4007d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2108be4346e74b3f824c0dfa4e9d1ba10ccd413ace3a7ad611a8a3af5a4007d->enter($__internal_d2108be4346e74b3f824c0dfa4e9d1ba10ccd413ace3a7ad611a8a3af5a4007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae40331b2b66963c2653977f85562f9b9eaeee9e525227394ae5600750f35627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae40331b2b66963c2653977f85562f9b9eaeee9e525227394ae5600750f35627->enter($__internal_ae40331b2b66963c2653977f85562f9b9eaeee9e525227394ae5600750f35627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ae40331b2b66963c2653977f85562f9b9eaeee9e525227394ae5600750f35627->leave($__internal_ae40331b2b66963c2653977f85562f9b9eaeee9e525227394ae5600750f35627_prof);

        
        $__internal_d2108be4346e74b3f824c0dfa4e9d1ba10ccd413ace3a7ad611a8a3af5a4007d->leave($__internal_d2108be4346e74b3f824c0dfa4e9d1ba10ccd413ace3a7ad611a8a3af5a4007d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}

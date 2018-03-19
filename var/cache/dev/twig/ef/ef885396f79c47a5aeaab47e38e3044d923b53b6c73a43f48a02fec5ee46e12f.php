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
        $__internal_73eb9ca5efa44343edce364c4af5d5ae8b9c676ddbb55d495c4d5da44074d70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73eb9ca5efa44343edce364c4af5d5ae8b9c676ddbb55d495c4d5da44074d70a->enter($__internal_73eb9ca5efa44343edce364c4af5d5ae8b9c676ddbb55d495c4d5da44074d70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_befe1983beaa80c157c2cc3baec9717a30053a771e415a0155c63d608db96a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befe1983beaa80c157c2cc3baec9717a30053a771e415a0155c63d608db96a7d->enter($__internal_befe1983beaa80c157c2cc3baec9717a30053a771e415a0155c63d608db96a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73eb9ca5efa44343edce364c4af5d5ae8b9c676ddbb55d495c4d5da44074d70a->leave($__internal_73eb9ca5efa44343edce364c4af5d5ae8b9c676ddbb55d495c4d5da44074d70a_prof);

        
        $__internal_befe1983beaa80c157c2cc3baec9717a30053a771e415a0155c63d608db96a7d->leave($__internal_befe1983beaa80c157c2cc3baec9717a30053a771e415a0155c63d608db96a7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3eb2e343ced747cc0b88b5e5e3aa79d320f02a54fe2aab61984878cf8d6c37ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb2e343ced747cc0b88b5e5e3aa79d320f02a54fe2aab61984878cf8d6c37ba->enter($__internal_3eb2e343ced747cc0b88b5e5e3aa79d320f02a54fe2aab61984878cf8d6c37ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d2dcf7f8d0a1eb3badb886782a2c9ad9a4e95d0e359f204121d40c44865ef5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2dcf7f8d0a1eb3badb886782a2c9ad9a4e95d0e359f204121d40c44865ef5d->enter($__internal_3d2dcf7f8d0a1eb3badb886782a2c9ad9a4e95d0e359f204121d40c44865ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3d2dcf7f8d0a1eb3badb886782a2c9ad9a4e95d0e359f204121d40c44865ef5d->leave($__internal_3d2dcf7f8d0a1eb3badb886782a2c9ad9a4e95d0e359f204121d40c44865ef5d_prof);

        
        $__internal_3eb2e343ced747cc0b88b5e5e3aa79d320f02a54fe2aab61984878cf8d6c37ba->leave($__internal_3eb2e343ced747cc0b88b5e5e3aa79d320f02a54fe2aab61984878cf8d6c37ba_prof);

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

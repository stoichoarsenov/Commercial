<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8fa62c550f5931badfd168f0392e39f0153cd705a6a4f47e940f4c1d29a7380f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3cb1a42c78dcf9d6a0914ab11e3c3de36d52ad4f50dfd2a658bc8c97b325f234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb1a42c78dcf9d6a0914ab11e3c3de36d52ad4f50dfd2a658bc8c97b325f234->enter($__internal_3cb1a42c78dcf9d6a0914ab11e3c3de36d52ad4f50dfd2a658bc8c97b325f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ef711910499a9e682b3c815ef7e500e47ce947e2548e0936d1361d3419f70c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef711910499a9e682b3c815ef7e500e47ce947e2548e0936d1361d3419f70c8a->enter($__internal_ef711910499a9e682b3c815ef7e500e47ce947e2548e0936d1361d3419f70c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb1a42c78dcf9d6a0914ab11e3c3de36d52ad4f50dfd2a658bc8c97b325f234->leave($__internal_3cb1a42c78dcf9d6a0914ab11e3c3de36d52ad4f50dfd2a658bc8c97b325f234_prof);

        
        $__internal_ef711910499a9e682b3c815ef7e500e47ce947e2548e0936d1361d3419f70c8a->leave($__internal_ef711910499a9e682b3c815ef7e500e47ce947e2548e0936d1361d3419f70c8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c4ba5508d33b3a6cae05f399c049d2a11330d7e1e934eab482a69e642020eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4ba5508d33b3a6cae05f399c049d2a11330d7e1e934eab482a69e642020eb8->enter($__internal_3c4ba5508d33b3a6cae05f399c049d2a11330d7e1e934eab482a69e642020eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24fa0f984fb609099b1ec693a4bc16164bb296212e44ccaa4b608e6a5a50ece5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fa0f984fb609099b1ec693a4bc16164bb296212e44ccaa4b608e6a5a50ece5->enter($__internal_24fa0f984fb609099b1ec693a4bc16164bb296212e44ccaa4b608e6a5a50ece5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_24fa0f984fb609099b1ec693a4bc16164bb296212e44ccaa4b608e6a5a50ece5->leave($__internal_24fa0f984fb609099b1ec693a4bc16164bb296212e44ccaa4b608e6a5a50ece5_prof);

        
        $__internal_3c4ba5508d33b3a6cae05f399c049d2a11330d7e1e934eab482a69e642020eb8->leave($__internal_3c4ba5508d33b3a6cae05f399c049d2a11330d7e1e934eab482a69e642020eb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}

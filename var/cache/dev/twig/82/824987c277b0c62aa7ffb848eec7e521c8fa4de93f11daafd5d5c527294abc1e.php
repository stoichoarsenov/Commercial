<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_813422c2783065fd3149931efc2ac1abaeffc6e892b31cbf2006257db7d09afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f3e190ae7dc7e3557cf0d09a39ca1f1747ff90a3eed2a8490b643854cd29cbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e190ae7dc7e3557cf0d09a39ca1f1747ff90a3eed2a8490b643854cd29cbb5->enter($__internal_f3e190ae7dc7e3557cf0d09a39ca1f1747ff90a3eed2a8490b643854cd29cbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c27e71e4eea642c561e68582edb2f08a21816e9195c3338d5913fb796ab0d252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27e71e4eea642c561e68582edb2f08a21816e9195c3338d5913fb796ab0d252->enter($__internal_c27e71e4eea642c561e68582edb2f08a21816e9195c3338d5913fb796ab0d252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e190ae7dc7e3557cf0d09a39ca1f1747ff90a3eed2a8490b643854cd29cbb5->leave($__internal_f3e190ae7dc7e3557cf0d09a39ca1f1747ff90a3eed2a8490b643854cd29cbb5_prof);

        
        $__internal_c27e71e4eea642c561e68582edb2f08a21816e9195c3338d5913fb796ab0d252->leave($__internal_c27e71e4eea642c561e68582edb2f08a21816e9195c3338d5913fb796ab0d252_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_688e8141dfdac8a09ea65c4a2e10b605c5f60587eb10496624d58ec0cf6ca6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688e8141dfdac8a09ea65c4a2e10b605c5f60587eb10496624d58ec0cf6ca6d0->enter($__internal_688e8141dfdac8a09ea65c4a2e10b605c5f60587eb10496624d58ec0cf6ca6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6429b854b84d5f43160001072f475102a3fb8862b21888f7de24c8c55620cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6429b854b84d5f43160001072f475102a3fb8862b21888f7de24c8c55620cba->enter($__internal_b6429b854b84d5f43160001072f475102a3fb8862b21888f7de24c8c55620cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b6429b854b84d5f43160001072f475102a3fb8862b21888f7de24c8c55620cba->leave($__internal_b6429b854b84d5f43160001072f475102a3fb8862b21888f7de24c8c55620cba_prof);

        
        $__internal_688e8141dfdac8a09ea65c4a2e10b605c5f60587eb10496624d58ec0cf6ca6d0->leave($__internal_688e8141dfdac8a09ea65c4a2e10b605c5f60587eb10496624d58ec0cf6ca6d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}

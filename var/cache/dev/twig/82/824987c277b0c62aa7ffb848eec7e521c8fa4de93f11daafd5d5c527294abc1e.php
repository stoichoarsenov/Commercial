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
        $__internal_47d8b55d26afc744002038c7cb6d88b3b924d4f5e6a166673b8fb0e6a3c1b62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d8b55d26afc744002038c7cb6d88b3b924d4f5e6a166673b8fb0e6a3c1b62e->enter($__internal_47d8b55d26afc744002038c7cb6d88b3b924d4f5e6a166673b8fb0e6a3c1b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4b6950ba12acbd3d9d1997f8fc9558f9d89f0852615684b43813b9b602828cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6950ba12acbd3d9d1997f8fc9558f9d89f0852615684b43813b9b602828cf6->enter($__internal_4b6950ba12acbd3d9d1997f8fc9558f9d89f0852615684b43813b9b602828cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d8b55d26afc744002038c7cb6d88b3b924d4f5e6a166673b8fb0e6a3c1b62e->leave($__internal_47d8b55d26afc744002038c7cb6d88b3b924d4f5e6a166673b8fb0e6a3c1b62e_prof);

        
        $__internal_4b6950ba12acbd3d9d1997f8fc9558f9d89f0852615684b43813b9b602828cf6->leave($__internal_4b6950ba12acbd3d9d1997f8fc9558f9d89f0852615684b43813b9b602828cf6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51af134a60910243b7814954549bf0051abc715b0808197c506db04394d1149f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51af134a60910243b7814954549bf0051abc715b0808197c506db04394d1149f->enter($__internal_51af134a60910243b7814954549bf0051abc715b0808197c506db04394d1149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb5d08b2f86678fe79a37361bddfb3136236428a74a3847feefd3b809274f49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5d08b2f86678fe79a37361bddfb3136236428a74a3847feefd3b809274f49d->enter($__internal_cb5d08b2f86678fe79a37361bddfb3136236428a74a3847feefd3b809274f49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cb5d08b2f86678fe79a37361bddfb3136236428a74a3847feefd3b809274f49d->leave($__internal_cb5d08b2f86678fe79a37361bddfb3136236428a74a3847feefd3b809274f49d_prof);

        
        $__internal_51af134a60910243b7814954549bf0051abc715b0808197c506db04394d1149f->leave($__internal_51af134a60910243b7814954549bf0051abc715b0808197c506db04394d1149f_prof);

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

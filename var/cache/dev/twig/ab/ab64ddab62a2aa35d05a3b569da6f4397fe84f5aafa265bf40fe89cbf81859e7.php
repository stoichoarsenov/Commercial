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
        $__internal_4d1122de885ab057ad8f62654f6994c9a5b49f9298bc83eff6b1d0a3c4b6119c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1122de885ab057ad8f62654f6994c9a5b49f9298bc83eff6b1d0a3c4b6119c->enter($__internal_4d1122de885ab057ad8f62654f6994c9a5b49f9298bc83eff6b1d0a3c4b6119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e803f01fc138a30e2c56749df3ee6eb32432524bc7939174f34b5fe5b848c560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e803f01fc138a30e2c56749df3ee6eb32432524bc7939174f34b5fe5b848c560->enter($__internal_e803f01fc138a30e2c56749df3ee6eb32432524bc7939174f34b5fe5b848c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1122de885ab057ad8f62654f6994c9a5b49f9298bc83eff6b1d0a3c4b6119c->leave($__internal_4d1122de885ab057ad8f62654f6994c9a5b49f9298bc83eff6b1d0a3c4b6119c_prof);

        
        $__internal_e803f01fc138a30e2c56749df3ee6eb32432524bc7939174f34b5fe5b848c560->leave($__internal_e803f01fc138a30e2c56749df3ee6eb32432524bc7939174f34b5fe5b848c560_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66961b9adc46e537c1c773d7f9faf94ce8e7f8e32165e73b7007561d273124b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66961b9adc46e537c1c773d7f9faf94ce8e7f8e32165e73b7007561d273124b8->enter($__internal_66961b9adc46e537c1c773d7f9faf94ce8e7f8e32165e73b7007561d273124b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a59e87cf2687975355d2c4cada397fb41af98de6bdcc3ba6be6248941576325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a59e87cf2687975355d2c4cada397fb41af98de6bdcc3ba6be6248941576325->enter($__internal_6a59e87cf2687975355d2c4cada397fb41af98de6bdcc3ba6be6248941576325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6a59e87cf2687975355d2c4cada397fb41af98de6bdcc3ba6be6248941576325->leave($__internal_6a59e87cf2687975355d2c4cada397fb41af98de6bdcc3ba6be6248941576325_prof);

        
        $__internal_66961b9adc46e537c1c773d7f9faf94ce8e7f8e32165e73b7007561d273124b8->leave($__internal_66961b9adc46e537c1c773d7f9faf94ce8e7f8e32165e73b7007561d273124b8_prof);

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

<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_85d5d241e77d3e8ac1f619f27e2824d4d0e03e4d90cd7c0cb5abcac108f5bec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_899677a65d6cbab03584b77ccc8a8c2d0485ea20d2502069524be9efe4de8571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899677a65d6cbab03584b77ccc8a8c2d0485ea20d2502069524be9efe4de8571->enter($__internal_899677a65d6cbab03584b77ccc8a8c2d0485ea20d2502069524be9efe4de8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8ec6f6033db30bfb8c8caea2f0bf39a8096b096d444cdf5cb66898da86563ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec6f6033db30bfb8c8caea2f0bf39a8096b096d444cdf5cb66898da86563ac5->enter($__internal_8ec6f6033db30bfb8c8caea2f0bf39a8096b096d444cdf5cb66898da86563ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899677a65d6cbab03584b77ccc8a8c2d0485ea20d2502069524be9efe4de8571->leave($__internal_899677a65d6cbab03584b77ccc8a8c2d0485ea20d2502069524be9efe4de8571_prof);

        
        $__internal_8ec6f6033db30bfb8c8caea2f0bf39a8096b096d444cdf5cb66898da86563ac5->leave($__internal_8ec6f6033db30bfb8c8caea2f0bf39a8096b096d444cdf5cb66898da86563ac5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2651b7c0a2f45eb2a6849d8043c1d5f5bc3fe51031c866978cd18614940cbc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2651b7c0a2f45eb2a6849d8043c1d5f5bc3fe51031c866978cd18614940cbc1d->enter($__internal_2651b7c0a2f45eb2a6849d8043c1d5f5bc3fe51031c866978cd18614940cbc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_047b3c770c6ad51567a19e2bb18003089821286481edb5dd72e47cf678302a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047b3c770c6ad51567a19e2bb18003089821286481edb5dd72e47cf678302a66->enter($__internal_047b3c770c6ad51567a19e2bb18003089821286481edb5dd72e47cf678302a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_047b3c770c6ad51567a19e2bb18003089821286481edb5dd72e47cf678302a66->leave($__internal_047b3c770c6ad51567a19e2bb18003089821286481edb5dd72e47cf678302a66_prof);

        
        $__internal_2651b7c0a2f45eb2a6849d8043c1d5f5bc3fe51031c866978cd18614940cbc1d->leave($__internal_2651b7c0a2f45eb2a6849d8043c1d5f5bc3fe51031c866978cd18614940cbc1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}

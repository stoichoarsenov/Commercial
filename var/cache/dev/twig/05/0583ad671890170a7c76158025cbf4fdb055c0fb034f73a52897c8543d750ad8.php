<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_684ac575df5bfae1a8c70bfc6226dcc66c87e4089d89736d6cf01d0ea58968f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0af175a8e94ccda2c5b4af2f31355b01d2da952275cae526c95c9dcffc162034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af175a8e94ccda2c5b4af2f31355b01d2da952275cae526c95c9dcffc162034->enter($__internal_0af175a8e94ccda2c5b4af2f31355b01d2da952275cae526c95c9dcffc162034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_22867a11f8e5dfdaaac69bb10aeff76b9c1b24db92c3869908f61b008f292034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22867a11f8e5dfdaaac69bb10aeff76b9c1b24db92c3869908f61b008f292034->enter($__internal_22867a11f8e5dfdaaac69bb10aeff76b9c1b24db92c3869908f61b008f292034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af175a8e94ccda2c5b4af2f31355b01d2da952275cae526c95c9dcffc162034->leave($__internal_0af175a8e94ccda2c5b4af2f31355b01d2da952275cae526c95c9dcffc162034_prof);

        
        $__internal_22867a11f8e5dfdaaac69bb10aeff76b9c1b24db92c3869908f61b008f292034->leave($__internal_22867a11f8e5dfdaaac69bb10aeff76b9c1b24db92c3869908f61b008f292034_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a60c096dc4c717e4683190d1cc01fd7280b45f2649b03b7ed499f08a1c29009c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60c096dc4c717e4683190d1cc01fd7280b45f2649b03b7ed499f08a1c29009c->enter($__internal_a60c096dc4c717e4683190d1cc01fd7280b45f2649b03b7ed499f08a1c29009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_749ce855df07c90be96b314080dc030f677680edc86238e3f49a78ff366b1611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749ce855df07c90be96b314080dc030f677680edc86238e3f49a78ff366b1611->enter($__internal_749ce855df07c90be96b314080dc030f677680edc86238e3f49a78ff366b1611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_749ce855df07c90be96b314080dc030f677680edc86238e3f49a78ff366b1611->leave($__internal_749ce855df07c90be96b314080dc030f677680edc86238e3f49a78ff366b1611_prof);

        
        $__internal_a60c096dc4c717e4683190d1cc01fd7280b45f2649b03b7ed499f08a1c29009c->leave($__internal_a60c096dc4c717e4683190d1cc01fd7280b45f2649b03b7ed499f08a1c29009c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}

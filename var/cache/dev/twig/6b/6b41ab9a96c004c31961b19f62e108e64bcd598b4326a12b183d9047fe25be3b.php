<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a730fe66aa71819911fe80322c71abfbf913c7292924a6181f582f220000d7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_132017109b7ebcdda0f9750a862fb334e069cee05eb9241f9652f0ed5be90be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132017109b7ebcdda0f9750a862fb334e069cee05eb9241f9652f0ed5be90be3->enter($__internal_132017109b7ebcdda0f9750a862fb334e069cee05eb9241f9652f0ed5be90be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3af0dd2dfecbf4e2d3f067e737021a612f6cd88f1f5920f075fc1778dca1e9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af0dd2dfecbf4e2d3f067e737021a612f6cd88f1f5920f075fc1778dca1e9e0->enter($__internal_3af0dd2dfecbf4e2d3f067e737021a612f6cd88f1f5920f075fc1778dca1e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132017109b7ebcdda0f9750a862fb334e069cee05eb9241f9652f0ed5be90be3->leave($__internal_132017109b7ebcdda0f9750a862fb334e069cee05eb9241f9652f0ed5be90be3_prof);

        
        $__internal_3af0dd2dfecbf4e2d3f067e737021a612f6cd88f1f5920f075fc1778dca1e9e0->leave($__internal_3af0dd2dfecbf4e2d3f067e737021a612f6cd88f1f5920f075fc1778dca1e9e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c108c76895cbb9fd74142fcee3972629ced048fa9ba67193342f518ecf82d66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c108c76895cbb9fd74142fcee3972629ced048fa9ba67193342f518ecf82d66e->enter($__internal_c108c76895cbb9fd74142fcee3972629ced048fa9ba67193342f518ecf82d66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c7899e0682913b33e3fc9cad799ec582950b14844527ada64227fbbcf7b8207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7899e0682913b33e3fc9cad799ec582950b14844527ada64227fbbcf7b8207->enter($__internal_2c7899e0682913b33e3fc9cad799ec582950b14844527ada64227fbbcf7b8207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2c7899e0682913b33e3fc9cad799ec582950b14844527ada64227fbbcf7b8207->leave($__internal_2c7899e0682913b33e3fc9cad799ec582950b14844527ada64227fbbcf7b8207_prof);

        
        $__internal_c108c76895cbb9fd74142fcee3972629ced048fa9ba67193342f518ecf82d66e->leave($__internal_c108c76895cbb9fd74142fcee3972629ced048fa9ba67193342f518ecf82d66e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}

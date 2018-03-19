<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_be7512e3e3ee62500647a58f1c3d13c33d979b38d5d82c77b8e03219c5a86eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2f2dcfbfa52aa1e1ea0d5ec5656b95403ec4ed845ea574a152312540ab8b6e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2dcfbfa52aa1e1ea0d5ec5656b95403ec4ed845ea574a152312540ab8b6e94->enter($__internal_2f2dcfbfa52aa1e1ea0d5ec5656b95403ec4ed845ea574a152312540ab8b6e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7eba780f83eceff29cc378573d6d72809466cb70a944d27008e5b268e01ce230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eba780f83eceff29cc378573d6d72809466cb70a944d27008e5b268e01ce230->enter($__internal_7eba780f83eceff29cc378573d6d72809466cb70a944d27008e5b268e01ce230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2dcfbfa52aa1e1ea0d5ec5656b95403ec4ed845ea574a152312540ab8b6e94->leave($__internal_2f2dcfbfa52aa1e1ea0d5ec5656b95403ec4ed845ea574a152312540ab8b6e94_prof);

        
        $__internal_7eba780f83eceff29cc378573d6d72809466cb70a944d27008e5b268e01ce230->leave($__internal_7eba780f83eceff29cc378573d6d72809466cb70a944d27008e5b268e01ce230_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7e86611b6bcd89dd260fada182646db1fa31a212bee6d8e83adee41ad5ac6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e86611b6bcd89dd260fada182646db1fa31a212bee6d8e83adee41ad5ac6af->enter($__internal_a7e86611b6bcd89dd260fada182646db1fa31a212bee6d8e83adee41ad5ac6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8e0eee511f35e9d53e2e80f13cb934f3b5d3a2b96f3f1f41f46b48a81f08d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e0eee511f35e9d53e2e80f13cb934f3b5d3a2b96f3f1f41f46b48a81f08d53->enter($__internal_d8e0eee511f35e9d53e2e80f13cb934f3b5d3a2b96f3f1f41f46b48a81f08d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d8e0eee511f35e9d53e2e80f13cb934f3b5d3a2b96f3f1f41f46b48a81f08d53->leave($__internal_d8e0eee511f35e9d53e2e80f13cb934f3b5d3a2b96f3f1f41f46b48a81f08d53_prof);

        
        $__internal_a7e86611b6bcd89dd260fada182646db1fa31a212bee6d8e83adee41ad5ac6af->leave($__internal_a7e86611b6bcd89dd260fada182646db1fa31a212bee6d8e83adee41ad5ac6af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}

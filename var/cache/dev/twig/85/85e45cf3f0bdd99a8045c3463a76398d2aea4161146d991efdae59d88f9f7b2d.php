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
        $__internal_f825c7f2cdbab726952154912af54a70ef0094445a58c0657d5810d12406f644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f825c7f2cdbab726952154912af54a70ef0094445a58c0657d5810d12406f644->enter($__internal_f825c7f2cdbab726952154912af54a70ef0094445a58c0657d5810d12406f644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a7e2000bc4db8a5c71488158bcafadd97316bab088390196ecf7191a4a95e717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e2000bc4db8a5c71488158bcafadd97316bab088390196ecf7191a4a95e717->enter($__internal_a7e2000bc4db8a5c71488158bcafadd97316bab088390196ecf7191a4a95e717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f825c7f2cdbab726952154912af54a70ef0094445a58c0657d5810d12406f644->leave($__internal_f825c7f2cdbab726952154912af54a70ef0094445a58c0657d5810d12406f644_prof);

        
        $__internal_a7e2000bc4db8a5c71488158bcafadd97316bab088390196ecf7191a4a95e717->leave($__internal_a7e2000bc4db8a5c71488158bcafadd97316bab088390196ecf7191a4a95e717_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87a673fba771a376e0f0f086f180990f21032b45650c845baf0a172fe4d69e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a673fba771a376e0f0f086f180990f21032b45650c845baf0a172fe4d69e68->enter($__internal_87a673fba771a376e0f0f086f180990f21032b45650c845baf0a172fe4d69e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_020858846d7b546f000ce4d3220a0720f4eae6f214d82c1148aabb0904d5a1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020858846d7b546f000ce4d3220a0720f4eae6f214d82c1148aabb0904d5a1d6->enter($__internal_020858846d7b546f000ce4d3220a0720f4eae6f214d82c1148aabb0904d5a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_020858846d7b546f000ce4d3220a0720f4eae6f214d82c1148aabb0904d5a1d6->leave($__internal_020858846d7b546f000ce4d3220a0720f4eae6f214d82c1148aabb0904d5a1d6_prof);

        
        $__internal_87a673fba771a376e0f0f086f180990f21032b45650c845baf0a172fe4d69e68->leave($__internal_87a673fba771a376e0f0f086f180990f21032b45650c845baf0a172fe4d69e68_prof);

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

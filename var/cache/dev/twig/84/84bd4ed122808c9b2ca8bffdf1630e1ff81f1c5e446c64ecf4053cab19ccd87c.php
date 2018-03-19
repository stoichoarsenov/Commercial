<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5467491455edcf54dd40336aee837de27eff23fda93db7839931bd86e6f632a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bba07bbb4d5b31c54df7a81b6f2944a73072559cbf25904370928959c92cbcf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba07bbb4d5b31c54df7a81b6f2944a73072559cbf25904370928959c92cbcf9->enter($__internal_bba07bbb4d5b31c54df7a81b6f2944a73072559cbf25904370928959c92cbcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_6601b5ae6251b5d3f33f6cedb3e9678e23e2e06a5eb934e12d225f23ddaa35e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6601b5ae6251b5d3f33f6cedb3e9678e23e2e06a5eb934e12d225f23ddaa35e8->enter($__internal_6601b5ae6251b5d3f33f6cedb3e9678e23e2e06a5eb934e12d225f23ddaa35e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 2
        echo "<html><head>

</head>

<body>

";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "
</body>
</html>

";
        
        $__internal_bba07bbb4d5b31c54df7a81b6f2944a73072559cbf25904370928959c92cbcf9->leave($__internal_bba07bbb4d5b31c54df7a81b6f2944a73072559cbf25904370928959c92cbcf9_prof);

        
        $__internal_6601b5ae6251b5d3f33f6cedb3e9678e23e2e06a5eb934e12d225f23ddaa35e8->leave($__internal_6601b5ae6251b5d3f33f6cedb3e9678e23e2e06a5eb934e12d225f23ddaa35e8_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56c7d85a44fe36fd8142bbd3a8b1fbc46bec44bc8f05ba6a2ff49db6313c930e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c7d85a44fe36fd8142bbd3a8b1fbc46bec44bc8f05ba6a2ff49db6313c930e->enter($__internal_56c7d85a44fe36fd8142bbd3a8b1fbc46bec44bc8f05ba6a2ff49db6313c930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77a94392504bc45393a0ced080bc591280f27b2cc250e8aa1d4c3945af3485f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a94392504bc45393a0ced080bc591280f27b2cc250e8aa1d4c3945af3485f7->enter($__internal_77a94392504bc45393a0ced080bc591280f27b2cc250e8aa1d4c3945af3485f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>

";
        
        $__internal_77a94392504bc45393a0ced080bc591280f27b2cc250e8aa1d4c3945af3485f7->leave($__internal_77a94392504bc45393a0ced080bc591280f27b2cc250e8aa1d4c3945af3485f7_prof);

        
        $__internal_56c7d85a44fe36fd8142bbd3a8b1fbc46bec44bc8f05ba6a2ff49db6313c930e->leave($__internal_56c7d85a44fe36fd8142bbd3a8b1fbc46bec44bc8f05ba6a2ff49db6313c930e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 10,  39 => 14,  37 => 10,  34 => 9,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"@FOSUser/layout.html.twig\" %}#}
<html><head>

</head>

<body>

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>

{% endblock fos_user_content %}

</body>
</html>

", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}

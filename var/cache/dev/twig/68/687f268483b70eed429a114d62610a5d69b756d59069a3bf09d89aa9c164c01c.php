<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_d9a6246d6240b681f31fcac8b9caa04e2ddb3101f57160df87cb40a05d77fc62 extends Twig_Template
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
        $__internal_6a7a15965e7091ed1d5dfdc7e575e48c6eadb3fab82acfe59b70f7ef2b58860a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7a15965e7091ed1d5dfdc7e575e48c6eadb3fab82acfe59b70f7ef2b58860a->enter($__internal_6a7a15965e7091ed1d5dfdc7e575e48c6eadb3fab82acfe59b70f7ef2b58860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_21aa8d77271ed4456ecf9d06d043ad146d21953667595085d79db758330ac0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21aa8d77271ed4456ecf9d06d043ad146d21953667595085d79db758330ac0dc->enter($__internal_21aa8d77271ed4456ecf9d06d043ad146d21953667595085d79db758330ac0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

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
        
        $__internal_6a7a15965e7091ed1d5dfdc7e575e48c6eadb3fab82acfe59b70f7ef2b58860a->leave($__internal_6a7a15965e7091ed1d5dfdc7e575e48c6eadb3fab82acfe59b70f7ef2b58860a_prof);

        
        $__internal_21aa8d77271ed4456ecf9d06d043ad146d21953667595085d79db758330ac0dc->leave($__internal_21aa8d77271ed4456ecf9d06d043ad146d21953667595085d79db758330ac0dc_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2692477c2707ed8ee2aec5776a25d1545bc5f73004853f8df49640c7e9a5586b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2692477c2707ed8ee2aec5776a25d1545bc5f73004853f8df49640c7e9a5586b->enter($__internal_2692477c2707ed8ee2aec5776a25d1545bc5f73004853f8df49640c7e9a5586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_578af427d9f0f9c2d24c3fddb31ab94a6494cc4799e6c664c5205998cdbbabee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578af427d9f0f9c2d24c3fddb31ab94a6494cc4799e6c664c5205998cdbbabee->enter($__internal_578af427d9f0f9c2d24c3fddb31ab94a6494cc4799e6c664c5205998cdbbabee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>

";
        
        $__internal_578af427d9f0f9c2d24c3fddb31ab94a6494cc4799e6c664c5205998cdbbabee->leave($__internal_578af427d9f0f9c2d24c3fddb31ab94a6494cc4799e6c664c5205998cdbbabee_prof);

        
        $__internal_2692477c2707ed8ee2aec5776a25d1545bc5f73004853f8df49640c7e9a5586b->leave($__internal_2692477c2707ed8ee2aec5776a25d1545bc5f73004853f8df49640c7e9a5586b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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

", "@FOSUser/Registration/check_email.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}

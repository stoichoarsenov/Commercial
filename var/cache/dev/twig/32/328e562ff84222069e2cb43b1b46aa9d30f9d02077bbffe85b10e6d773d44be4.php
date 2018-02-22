<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_79e66d982a05ca5d37d6519e79a958fdb5b11ab630d2b357c380a77e5bd3cdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_377ee5a6f1035e14bbd4beae660d1778a4e88f734dfc01b16fc412b3db8229ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377ee5a6f1035e14bbd4beae660d1778a4e88f734dfc01b16fc412b3db8229ca->enter($__internal_377ee5a6f1035e14bbd4beae660d1778a4e88f734dfc01b16fc412b3db8229ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5b2f19bab887671d4fdf3962bbed4d666057d2500dd3415868d5b62f172f064b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2f19bab887671d4fdf3962bbed4d666057d2500dd3415868d5b62f172f064b->enter($__internal_5b2f19bab887671d4fdf3962bbed4d666057d2500dd3415868d5b62f172f064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377ee5a6f1035e14bbd4beae660d1778a4e88f734dfc01b16fc412b3db8229ca->leave($__internal_377ee5a6f1035e14bbd4beae660d1778a4e88f734dfc01b16fc412b3db8229ca_prof);

        
        $__internal_5b2f19bab887671d4fdf3962bbed4d666057d2500dd3415868d5b62f172f064b->leave($__internal_5b2f19bab887671d4fdf3962bbed4d666057d2500dd3415868d5b62f172f064b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11be47b3c1ee7f6a8dbd7d04cb7d93194ac272d3c1246d1c5183d2f8739a71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11be47b3c1ee7f6a8dbd7d04cb7d93194ac272d3c1246d1c5183d2f8739a71a2->enter($__internal_11be47b3c1ee7f6a8dbd7d04cb7d93194ac272d3c1246d1c5183d2f8739a71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_25402ea38db70f394ca5040c2b765da2966052ba1afff46a37fd7aff4dc70690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25402ea38db70f394ca5040c2b765da2966052ba1afff46a37fd7aff4dc70690->enter($__internal_25402ea38db70f394ca5040c2b765da2966052ba1afff46a37fd7aff4dc70690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div style=\"margin-bottom: 30%;\"><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "    </div>
";
        
        $__internal_25402ea38db70f394ca5040c2b765da2966052ba1afff46a37fd7aff4dc70690->leave($__internal_25402ea38db70f394ca5040c2b765da2966052ba1afff46a37fd7aff4dc70690_prof);

        
        $__internal_11be47b3c1ee7f6a8dbd7d04cb7d93194ac272d3c1246d1c5183d2f8739a71a2->leave($__internal_11be47b3c1ee7f6a8dbd7d04cb7d93194ac272d3c1246d1c5183d2f8739a71a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div style=\"margin-bottom: 30%;\"><p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}

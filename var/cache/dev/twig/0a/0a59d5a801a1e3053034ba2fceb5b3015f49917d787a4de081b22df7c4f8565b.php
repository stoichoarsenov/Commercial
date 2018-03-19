<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4861ebe0f3967c4704b5041052a6f9cd3591bf4f5c14d40640026bffb5e778c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c98ead4921653f75e27c8030ae0f945dab0d167b4a8a13fdf1140976c5bf026f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98ead4921653f75e27c8030ae0f945dab0d167b4a8a13fdf1140976c5bf026f->enter($__internal_c98ead4921653f75e27c8030ae0f945dab0d167b4a8a13fdf1140976c5bf026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_0fc65dfacaf6ac53abda4cc36839c6e62b3a26b075760c034f3a3bb9a24dd43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc65dfacaf6ac53abda4cc36839c6e62b3a26b075760c034f3a3bb9a24dd43f->enter($__internal_0fc65dfacaf6ac53abda4cc36839c6e62b3a26b075760c034f3a3bb9a24dd43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98ead4921653f75e27c8030ae0f945dab0d167b4a8a13fdf1140976c5bf026f->leave($__internal_c98ead4921653f75e27c8030ae0f945dab0d167b4a8a13fdf1140976c5bf026f_prof);

        
        $__internal_0fc65dfacaf6ac53abda4cc36839c6e62b3a26b075760c034f3a3bb9a24dd43f->leave($__internal_0fc65dfacaf6ac53abda4cc36839c6e62b3a26b075760c034f3a3bb9a24dd43f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43229e218d48318e3a4885be3f8abd340d263fb4b9f063b54146cc46d5a2e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43229e218d48318e3a4885be3f8abd340d263fb4b9f063b54146cc46d5a2e38e->enter($__internal_43229e218d48318e3a4885be3f8abd340d263fb4b9f063b54146cc46d5a2e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_37ea14ffcc6ddd001887d876f94681643a16adc7f0425bdd217d7fa516398736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ea14ffcc6ddd001887d876f94681643a16adc7f0425bdd217d7fa516398736->enter($__internal_37ea14ffcc6ddd001887d876f94681643a16adc7f0425bdd217d7fa516398736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_37ea14ffcc6ddd001887d876f94681643a16adc7f0425bdd217d7fa516398736->leave($__internal_37ea14ffcc6ddd001887d876f94681643a16adc7f0425bdd217d7fa516398736_prof);

        
        $__internal_43229e218d48318e3a4885be3f8abd340d263fb4b9f063b54146cc46d5a2e38e->leave($__internal_43229e218d48318e3a4885be3f8abd340d263fb4b9f063b54146cc46d5a2e38e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}

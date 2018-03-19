<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d5b4b768650fa697db5b8d50aeea9aa753f829b95e04a4d518b3e83a68baddf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd01e12d856da2c52df855eb8e02c88c1d5baad7807bb19cd267d6036d36e056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd01e12d856da2c52df855eb8e02c88c1d5baad7807bb19cd267d6036d36e056->enter($__internal_dd01e12d856da2c52df855eb8e02c88c1d5baad7807bb19cd267d6036d36e056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_2a9f01567dd040cfd3c3c932f4aa32d94f5a985a4d74b74ddbe3aa1c4b1aab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9f01567dd040cfd3c3c932f4aa32d94f5a985a4d74b74ddbe3aa1c4b1aab41->enter($__internal_2a9f01567dd040cfd3c3c932f4aa32d94f5a985a4d74b74ddbe3aa1c4b1aab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_dd01e12d856da2c52df855eb8e02c88c1d5baad7807bb19cd267d6036d36e056->leave($__internal_dd01e12d856da2c52df855eb8e02c88c1d5baad7807bb19cd267d6036d36e056_prof);

        
        $__internal_2a9f01567dd040cfd3c3c932f4aa32d94f5a985a4d74b74ddbe3aa1c4b1aab41->leave($__internal_2a9f01567dd040cfd3c3c932f4aa32d94f5a985a4d74b74ddbe3aa1c4b1aab41_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}

<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_667fb159e4139e0a8336fd33969203c374c8f76d97d0d8b6c66ae5ccc0bc46e7 extends Twig_Template
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
        $__internal_bcd997c27f11e73411bb76b065fb2cf903b49f81d5aa8eb40823ceed883d6cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd997c27f11e73411bb76b065fb2cf903b49f81d5aa8eb40823ceed883d6cf0->enter($__internal_bcd997c27f11e73411bb76b065fb2cf903b49f81d5aa8eb40823ceed883d6cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_f36a821513a26bbfd4a3aacc6813be9c8d65962530d1cc395f098adc2dfbabbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36a821513a26bbfd4a3aacc6813be9c8d65962530d1cc395f098adc2dfbabbe->enter($__internal_f36a821513a26bbfd4a3aacc6813be9c8d65962530d1cc395f098adc2dfbabbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div style=\"margin-bottom: 30%;\">
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
        
        $__internal_bcd997c27f11e73411bb76b065fb2cf903b49f81d5aa8eb40823ceed883d6cf0->leave($__internal_bcd997c27f11e73411bb76b065fb2cf903b49f81d5aa8eb40823ceed883d6cf0_prof);

        
        $__internal_f36a821513a26bbfd4a3aacc6813be9c8d65962530d1cc395f098adc2dfbabbe->leave($__internal_f36a821513a26bbfd4a3aacc6813be9c8d65962530d1cc395f098adc2dfbabbe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <div style=\"margin-bottom: 30%;\">
        <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    </div>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}

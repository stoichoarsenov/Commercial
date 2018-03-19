<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_37c1c1be6a9f7f68359298def55ca6531f3a6e6cbd2fe6989967cf451fcfc3e9 extends Twig_Template
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
        $__internal_78c133a0583b4f453a1dd7f7e267d0b87b2199dab5b3df7466bc1a704b6ce933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c133a0583b4f453a1dd7f7e267d0b87b2199dab5b3df7466bc1a704b6ce933->enter($__internal_78c133a0583b4f453a1dd7f7e267d0b87b2199dab5b3df7466bc1a704b6ce933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_ec8959ce1eede1ba8db26858c0cacc4e6524908ac0afbc186a858ef9c35e5d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8959ce1eede1ba8db26858c0cacc4e6524908ac0afbc186a858ef9c35e5d9d->enter($__internal_ec8959ce1eede1ba8db26858c0cacc4e6524908ac0afbc186a858ef9c35e5d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_78c133a0583b4f453a1dd7f7e267d0b87b2199dab5b3df7466bc1a704b6ce933->leave($__internal_78c133a0583b4f453a1dd7f7e267d0b87b2199dab5b3df7466bc1a704b6ce933_prof);

        
        $__internal_ec8959ce1eede1ba8db26858c0cacc4e6524908ac0afbc186a858ef9c35e5d9d->leave($__internal_ec8959ce1eede1ba8db26858c0cacc4e6524908ac0afbc186a858ef9c35e5d9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}

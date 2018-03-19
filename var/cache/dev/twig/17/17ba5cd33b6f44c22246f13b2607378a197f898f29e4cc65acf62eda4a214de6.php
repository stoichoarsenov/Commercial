<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_aaf4b5efe869fe313afcbeda61519cf5d5686dfff45736eca1a7b277ecac94f9 extends Twig_Template
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
        $__internal_76e1a07908a838591227c0890357730a243279fb8845b0ba51aeaca72a30db6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e1a07908a838591227c0890357730a243279fb8845b0ba51aeaca72a30db6b->enter($__internal_76e1a07908a838591227c0890357730a243279fb8845b0ba51aeaca72a30db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d4261a59fab9a3d4320233c62f280aa51aa5931a1d97682da138b8a28ce2edc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4261a59fab9a3d4320233c62f280aa51aa5931a1d97682da138b8a28ce2edc3->enter($__internal_d4261a59fab9a3d4320233c62f280aa51aa5931a1d97682da138b8a28ce2edc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_76e1a07908a838591227c0890357730a243279fb8845b0ba51aeaca72a30db6b->leave($__internal_76e1a07908a838591227c0890357730a243279fb8845b0ba51aeaca72a30db6b_prof);

        
        $__internal_d4261a59fab9a3d4320233c62f280aa51aa5931a1d97682da138b8a28ce2edc3->leave($__internal_d4261a59fab9a3d4320233c62f280aa51aa5931a1d97682da138b8a28ce2edc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}

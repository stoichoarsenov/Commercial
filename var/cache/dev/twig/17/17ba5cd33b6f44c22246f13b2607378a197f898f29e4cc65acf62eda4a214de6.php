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
        $__internal_5e78f024805f508d43752b7053d482380cfa973339f5626890c181a0ab522063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e78f024805f508d43752b7053d482380cfa973339f5626890c181a0ab522063->enter($__internal_5e78f024805f508d43752b7053d482380cfa973339f5626890c181a0ab522063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_bb81583ca354c3901f434d8654291d4acfe22a46f1498a17e0f19cfbdd9e4d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb81583ca354c3901f434d8654291d4acfe22a46f1498a17e0f19cfbdd9e4d8c->enter($__internal_bb81583ca354c3901f434d8654291d4acfe22a46f1498a17e0f19cfbdd9e4d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5e78f024805f508d43752b7053d482380cfa973339f5626890c181a0ab522063->leave($__internal_5e78f024805f508d43752b7053d482380cfa973339f5626890c181a0ab522063_prof);

        
        $__internal_bb81583ca354c3901f434d8654291d4acfe22a46f1498a17e0f19cfbdd9e4d8c->leave($__internal_bb81583ca354c3901f434d8654291d4acfe22a46f1498a17e0f19cfbdd9e4d8c_prof);

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

<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_3d0024a7db6dab7cf59c9c6455ec187a03d127c07458f7cc449ed07bb7ab065b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_819c7b9b87e2c98756c32ff0cf0b3c31323d9bd0c67287e2d1296ea905a53cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819c7b9b87e2c98756c32ff0cf0b3c31323d9bd0c67287e2d1296ea905a53cd4->enter($__internal_819c7b9b87e2c98756c32ff0cf0b3c31323d9bd0c67287e2d1296ea905a53cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8571f329076748f1c574fb97f7f260e3f78a13de10d681282f46482ce4afdf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8571f329076748f1c574fb97f7f260e3f78a13de10d681282f46482ce4afdf17->enter($__internal_8571f329076748f1c574fb97f7f260e3f78a13de10d681282f46482ce4afdf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_819c7b9b87e2c98756c32ff0cf0b3c31323d9bd0c67287e2d1296ea905a53cd4->leave($__internal_819c7b9b87e2c98756c32ff0cf0b3c31323d9bd0c67287e2d1296ea905a53cd4_prof);

        
        $__internal_8571f329076748f1c574fb97f7f260e3f78a13de10d681282f46482ce4afdf17->leave($__internal_8571f329076748f1c574fb97f7f260e3f78a13de10d681282f46482ce4afdf17_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f79a4c4da94b1d8543714bfc4ea4cc1f941bfc36f031c1df954892318ab386ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79a4c4da94b1d8543714bfc4ea4cc1f941bfc36f031c1df954892318ab386ec->enter($__internal_f79a4c4da94b1d8543714bfc4ea4cc1f941bfc36f031c1df954892318ab386ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6df9aeaf3ce4f0f619988c8cccffd07bfb0eed6fe226da6ebd75a63068d49cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df9aeaf3ce4f0f619988c8cccffd07bfb0eed6fe226da6ebd75a63068d49cff->enter($__internal_6df9aeaf3ce4f0f619988c8cccffd07bfb0eed6fe226da6ebd75a63068d49cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6df9aeaf3ce4f0f619988c8cccffd07bfb0eed6fe226da6ebd75a63068d49cff->leave($__internal_6df9aeaf3ce4f0f619988c8cccffd07bfb0eed6fe226da6ebd75a63068d49cff_prof);

        
        $__internal_f79a4c4da94b1d8543714bfc4ea4cc1f941bfc36f031c1df954892318ab386ec->leave($__internal_f79a4c4da94b1d8543714bfc4ea4cc1f941bfc36f031c1df954892318ab386ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}

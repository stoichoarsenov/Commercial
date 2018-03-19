<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_684ac575df5bfae1a8c70bfc6226dcc66c87e4089d89736d6cf01d0ea58968f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_59d9bae9e6e897c773fcb09d19ba11471dde6aca4813563181e0d2416a63b163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d9bae9e6e897c773fcb09d19ba11471dde6aca4813563181e0d2416a63b163->enter($__internal_59d9bae9e6e897c773fcb09d19ba11471dde6aca4813563181e0d2416a63b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_46ae043e14f5c6b84b801a6e39d9bd612a33285f3e3b7d89c5520561ea4a9f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ae043e14f5c6b84b801a6e39d9bd612a33285f3e3b7d89c5520561ea4a9f44->enter($__internal_46ae043e14f5c6b84b801a6e39d9bd612a33285f3e3b7d89c5520561ea4a9f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d9bae9e6e897c773fcb09d19ba11471dde6aca4813563181e0d2416a63b163->leave($__internal_59d9bae9e6e897c773fcb09d19ba11471dde6aca4813563181e0d2416a63b163_prof);

        
        $__internal_46ae043e14f5c6b84b801a6e39d9bd612a33285f3e3b7d89c5520561ea4a9f44->leave($__internal_46ae043e14f5c6b84b801a6e39d9bd612a33285f3e3b7d89c5520561ea4a9f44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_087d9c4816b8c2761f42bfa560b01d8498775cf660d588a3ff117b19f6213130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087d9c4816b8c2761f42bfa560b01d8498775cf660d588a3ff117b19f6213130->enter($__internal_087d9c4816b8c2761f42bfa560b01d8498775cf660d588a3ff117b19f6213130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc22609ddddfd24ba1d37a2241241ee6427819ab7adea4d8bcfa017f1c8202e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc22609ddddfd24ba1d37a2241241ee6427819ab7adea4d8bcfa017f1c8202e9->enter($__internal_cc22609ddddfd24ba1d37a2241241ee6427819ab7adea4d8bcfa017f1c8202e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cc22609ddddfd24ba1d37a2241241ee6427819ab7adea4d8bcfa017f1c8202e9->leave($__internal_cc22609ddddfd24ba1d37a2241241ee6427819ab7adea4d8bcfa017f1c8202e9_prof);

        
        $__internal_087d9c4816b8c2761f42bfa560b01d8498775cf660d588a3ff117b19f6213130->leave($__internal_087d9c4816b8c2761f42bfa560b01d8498775cf660d588a3ff117b19f6213130_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}

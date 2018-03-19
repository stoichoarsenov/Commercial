<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_098d033cbf0739703a2c70d94e652a172ce4b6ea77d3ecf7d109aa6174d75661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4f7cb8077e72d9672d5b91868f0ca22fa8c1ae06e8f9df50fe5dc67f38fc2529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7cb8077e72d9672d5b91868f0ca22fa8c1ae06e8f9df50fe5dc67f38fc2529->enter($__internal_4f7cb8077e72d9672d5b91868f0ca22fa8c1ae06e8f9df50fe5dc67f38fc2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_64b7f95054693e3862dea8ab313dab77ba8bda25b1ec5ef3c691f2c7db22a241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b7f95054693e3862dea8ab313dab77ba8bda25b1ec5ef3c691f2c7db22a241->enter($__internal_64b7f95054693e3862dea8ab313dab77ba8bda25b1ec5ef3c691f2c7db22a241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7cb8077e72d9672d5b91868f0ca22fa8c1ae06e8f9df50fe5dc67f38fc2529->leave($__internal_4f7cb8077e72d9672d5b91868f0ca22fa8c1ae06e8f9df50fe5dc67f38fc2529_prof);

        
        $__internal_64b7f95054693e3862dea8ab313dab77ba8bda25b1ec5ef3c691f2c7db22a241->leave($__internal_64b7f95054693e3862dea8ab313dab77ba8bda25b1ec5ef3c691f2c7db22a241_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7add2c4040df575133e7a56c630107bda595d45e00084e971b3844bdb86518e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7add2c4040df575133e7a56c630107bda595d45e00084e971b3844bdb86518e9->enter($__internal_7add2c4040df575133e7a56c630107bda595d45e00084e971b3844bdb86518e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db398798d54b7090ccacd25a8d92c1ebde491b36539b27d99efcada18ec87565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db398798d54b7090ccacd25a8d92c1ebde491b36539b27d99efcada18ec87565->enter($__internal_db398798d54b7090ccacd25a8d92c1ebde491b36539b27d99efcada18ec87565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_db398798d54b7090ccacd25a8d92c1ebde491b36539b27d99efcada18ec87565->leave($__internal_db398798d54b7090ccacd25a8d92c1ebde491b36539b27d99efcada18ec87565_prof);

        
        $__internal_7add2c4040df575133e7a56c630107bda595d45e00084e971b3844bdb86518e9->leave($__internal_7add2c4040df575133e7a56c630107bda595d45e00084e971b3844bdb86518e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_066d1aafbd32031f73e3af3e5892ddd61155ddc0d81c0182c428083cd5400351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64a053ab9f5af157f832742a9c58f9a4323e3e5a1ec753efcc137c404ea4221f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a053ab9f5af157f832742a9c58f9a4323e3e5a1ec753efcc137c404ea4221f->enter($__internal_64a053ab9f5af157f832742a9c58f9a4323e3e5a1ec753efcc137c404ea4221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7789916cbcda94bbb86970c1706e2dc4c2cc16e2226d453ba3f81f6458a052d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7789916cbcda94bbb86970c1706e2dc4c2cc16e2226d453ba3f81f6458a052d7->enter($__internal_7789916cbcda94bbb86970c1706e2dc4c2cc16e2226d453ba3f81f6458a052d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a053ab9f5af157f832742a9c58f9a4323e3e5a1ec753efcc137c404ea4221f->leave($__internal_64a053ab9f5af157f832742a9c58f9a4323e3e5a1ec753efcc137c404ea4221f_prof);

        
        $__internal_7789916cbcda94bbb86970c1706e2dc4c2cc16e2226d453ba3f81f6458a052d7->leave($__internal_7789916cbcda94bbb86970c1706e2dc4c2cc16e2226d453ba3f81f6458a052d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69a6ce546a68c805389bba889e1563d89de5a05ff4ee63b45bb6bc2695ebf631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a6ce546a68c805389bba889e1563d89de5a05ff4ee63b45bb6bc2695ebf631->enter($__internal_69a6ce546a68c805389bba889e1563d89de5a05ff4ee63b45bb6bc2695ebf631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aad42f4106ca098caf1c91b738a20d7fe247393ecde8f39d2c929012592e2b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad42f4106ca098caf1c91b738a20d7fe247393ecde8f39d2c929012592e2b09->enter($__internal_aad42f4106ca098caf1c91b738a20d7fe247393ecde8f39d2c929012592e2b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aad42f4106ca098caf1c91b738a20d7fe247393ecde8f39d2c929012592e2b09->leave($__internal_aad42f4106ca098caf1c91b738a20d7fe247393ecde8f39d2c929012592e2b09_prof);

        
        $__internal_69a6ce546a68c805389bba889e1563d89de5a05ff4ee63b45bb6bc2695ebf631->leave($__internal_69a6ce546a68c805389bba889e1563d89de5a05ff4ee63b45bb6bc2695ebf631_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8810996a256879a70cd07487a5cadc4e6296ad88c9460a1359f8f77465301ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8810996a256879a70cd07487a5cadc4e6296ad88c9460a1359f8f77465301ca7->enter($__internal_8810996a256879a70cd07487a5cadc4e6296ad88c9460a1359f8f77465301ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b31e4d641c285d199ad67dde2ad425928f8272c1e0959a80f581c3d94a9a57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b31e4d641c285d199ad67dde2ad425928f8272c1e0959a80f581c3d94a9a57a->enter($__internal_5b31e4d641c285d199ad67dde2ad425928f8272c1e0959a80f581c3d94a9a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b31e4d641c285d199ad67dde2ad425928f8272c1e0959a80f581c3d94a9a57a->leave($__internal_5b31e4d641c285d199ad67dde2ad425928f8272c1e0959a80f581c3d94a9a57a_prof);

        
        $__internal_8810996a256879a70cd07487a5cadc4e6296ad88c9460a1359f8f77465301ca7->leave($__internal_8810996a256879a70cd07487a5cadc4e6296ad88c9460a1359f8f77465301ca7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

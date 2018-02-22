<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bd5e44839997cde5d6f408f099f504305a80833427ed99ca2b53c6d4d81bc9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::header.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77b6eef9a7784991c8bcfc72c11dd95dc3b02cbf5f6412936f9735ca74617a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b6eef9a7784991c8bcfc72c11dd95dc3b02cbf5f6412936f9735ca74617a24->enter($__internal_77b6eef9a7784991c8bcfc72c11dd95dc3b02cbf5f6412936f9735ca74617a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_38c1a2a84db95a3c440b874007f6448c1e102bf715292863920cd92ec7575e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c1a2a84db95a3c440b874007f6448c1e102bf715292863920cd92ec7575e08->enter($__internal_38c1a2a84db95a3c440b874007f6448c1e102bf715292863920cd92ec7575e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b6eef9a7784991c8bcfc72c11dd95dc3b02cbf5f6412936f9735ca74617a24->leave($__internal_77b6eef9a7784991c8bcfc72c11dd95dc3b02cbf5f6412936f9735ca74617a24_prof);

        
        $__internal_38c1a2a84db95a3c440b874007f6448c1e102bf715292863920cd92ec7575e08->leave($__internal_38c1a2a84db95a3c440b874007f6448c1e102bf715292863920cd92ec7575e08_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a075c208c72b7f250f6fa5733ca1b429ad72e8f88e3fb6ddcb7499748f27de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a075c208c72b7f250f6fa5733ca1b429ad72e8f88e3fb6ddcb7499748f27de5->enter($__internal_5a075c208c72b7f250f6fa5733ca1b429ad72e8f88e3fb6ddcb7499748f27de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f73b09b412180d9b4a023e55b1a18b58a547b8aa1601301697f63ab6e4f0d033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73b09b412180d9b4a023e55b1a18b58a547b8aa1601301697f63ab6e4f0d033->enter($__internal_f73b09b412180d9b4a023e55b1a18b58a547b8aa1601301697f63ab6e4f0d033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>
";
        
        $__internal_f73b09b412180d9b4a023e55b1a18b58a547b8aa1601301697f63ab6e4f0d033->leave($__internal_f73b09b412180d9b4a023e55b1a18b58a547b8aa1601301697f63ab6e4f0d033_prof);

        
        $__internal_5a075c208c72b7f250f6fa5733ca1b429ad72e8f88e3fb6ddcb7499748f27de5->leave($__internal_5a075c208c72b7f250f6fa5733ca1b429ad72e8f88e3fb6ddcb7499748f27de5_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8bd229f66b476c0feba6e9208c291dadf18e9ac71cf69f2b14495389ecb4055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bd229f66b476c0feba6e9208c291dadf18e9ac71cf69f2b14495389ecb4055->enter($__internal_b8bd229f66b476c0feba6e9208c291dadf18e9ac71cf69f2b14495389ecb4055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ebeaf46cc115d5d9093a621297a1862f85028974a667a1d610e4c74d0fec4765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebeaf46cc115d5d9093a621297a1862f85028974a667a1d610e4c74d0fec4765->enter($__internal_ebeaf46cc115d5d9093a621297a1862f85028974a667a1d610e4c74d0fec4765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_ebeaf46cc115d5d9093a621297a1862f85028974a667a1d610e4c74d0fec4765->leave($__internal_ebeaf46cc115d5d9093a621297a1862f85028974a667a1d610e4c74d0fec4765_prof);

        
        $__internal_b8bd229f66b476c0feba6e9208c291dadf18e9ac71cf69f2b14495389ecb4055->leave($__internal_b8bd229f66b476c0feba6e9208c291dadf18e9ac71cf69f2b14495389ecb4055_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 16,  103 => 15,  92 => 17,  90 => 15,  86 => 13,  83 => 12,  77 => 11,  68 => 8,  63 => 7,  58 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::header.html.twig' %}

{% block content %}
    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

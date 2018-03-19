<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_16984e5b7607744681f849ef52c5a7ac9ad2ac1d61bf580784199eaa64733397 extends Twig_Template
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
        $__internal_d0f3330732f2a50f46cb70eb7d5e01b46b48aeb1ba33082f4e0bcef76f889c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f3330732f2a50f46cb70eb7d5e01b46b48aeb1ba33082f4e0bcef76f889c0a->enter($__internal_d0f3330732f2a50f46cb70eb7d5e01b46b48aeb1ba33082f4e0bcef76f889c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_df492b9c992d09af43497a1465951c904f5f472d9fe1b5a5c7384bd885173849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df492b9c992d09af43497a1465951c904f5f472d9fe1b5a5c7384bd885173849->enter($__internal_df492b9c992d09af43497a1465951c904f5f472d9fe1b5a5c7384bd885173849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f3330732f2a50f46cb70eb7d5e01b46b48aeb1ba33082f4e0bcef76f889c0a->leave($__internal_d0f3330732f2a50f46cb70eb7d5e01b46b48aeb1ba33082f4e0bcef76f889c0a_prof);

        
        $__internal_df492b9c992d09af43497a1465951c904f5f472d9fe1b5a5c7384bd885173849->leave($__internal_df492b9c992d09af43497a1465951c904f5f472d9fe1b5a5c7384bd885173849_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccad9dfac0fe7e37fc41841e49ee27b5fd88f8912c6ccaaa3e2449a9e327732c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccad9dfac0fe7e37fc41841e49ee27b5fd88f8912c6ccaaa3e2449a9e327732c->enter($__internal_ccad9dfac0fe7e37fc41841e49ee27b5fd88f8912c6ccaaa3e2449a9e327732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_52e6349a836b87296436c4e9e9d77c2c838d58f252c3a703d41e6fbf149b7193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e6349a836b87296436c4e9e9d77c2c838d58f252c3a703d41e6fbf149b7193->enter($__internal_52e6349a836b87296436c4e9e9d77c2c838d58f252c3a703d41e6fbf149b7193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_52e6349a836b87296436c4e9e9d77c2c838d58f252c3a703d41e6fbf149b7193->leave($__internal_52e6349a836b87296436c4e9e9d77c2c838d58f252c3a703d41e6fbf149b7193_prof);

        
        $__internal_ccad9dfac0fe7e37fc41841e49ee27b5fd88f8912c6ccaaa3e2449a9e327732c->leave($__internal_ccad9dfac0fe7e37fc41841e49ee27b5fd88f8912c6ccaaa3e2449a9e327732c_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c60f52a0c4751c62ffa5782bf4c30b83171421fbf89b682f1014ca9f5890cb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60f52a0c4751c62ffa5782bf4c30b83171421fbf89b682f1014ca9f5890cb44->enter($__internal_c60f52a0c4751c62ffa5782bf4c30b83171421fbf89b682f1014ca9f5890cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_305334054ca4d945984d1920c55d1884a8d875b904df417dc01a2c0801e28827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305334054ca4d945984d1920c55d1884a8d875b904df417dc01a2c0801e28827->enter($__internal_305334054ca4d945984d1920c55d1884a8d875b904df417dc01a2c0801e28827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_305334054ca4d945984d1920c55d1884a8d875b904df417dc01a2c0801e28827->leave($__internal_305334054ca4d945984d1920c55d1884a8d875b904df417dc01a2c0801e28827_prof);

        
        $__internal_c60f52a0c4751c62ffa5782bf4c30b83171421fbf89b682f1014ca9f5890cb44->leave($__internal_c60f52a0c4751c62ffa5782bf4c30b83171421fbf89b682f1014ca9f5890cb44_prof);

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

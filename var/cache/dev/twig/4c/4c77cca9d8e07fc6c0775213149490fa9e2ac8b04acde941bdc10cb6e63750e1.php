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
        $__internal_18e93be542683925aa97cde637ea3e85f4fddba775b3d263c3d06673cf61bfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e93be542683925aa97cde637ea3e85f4fddba775b3d263c3d06673cf61bfdb->enter($__internal_18e93be542683925aa97cde637ea3e85f4fddba775b3d263c3d06673cf61bfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a3e83298c177bd883a7e603631a79c8a122df6bffb86dcc285b994cd193a0b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e83298c177bd883a7e603631a79c8a122df6bffb86dcc285b994cd193a0b63->enter($__internal_a3e83298c177bd883a7e603631a79c8a122df6bffb86dcc285b994cd193a0b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e93be542683925aa97cde637ea3e85f4fddba775b3d263c3d06673cf61bfdb->leave($__internal_18e93be542683925aa97cde637ea3e85f4fddba775b3d263c3d06673cf61bfdb_prof);

        
        $__internal_a3e83298c177bd883a7e603631a79c8a122df6bffb86dcc285b994cd193a0b63->leave($__internal_a3e83298c177bd883a7e603631a79c8a122df6bffb86dcc285b994cd193a0b63_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1dc5344ec26e97604d2faedc070c9881b8afda1c062df63f48c6fa8b0574a787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc5344ec26e97604d2faedc070c9881b8afda1c062df63f48c6fa8b0574a787->enter($__internal_1dc5344ec26e97604d2faedc070c9881b8afda1c062df63f48c6fa8b0574a787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_58edd5feb6422b031aee1017272ced55d2124b536befb3af9c23864416d7d498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58edd5feb6422b031aee1017272ced55d2124b536befb3af9c23864416d7d498->enter($__internal_58edd5feb6422b031aee1017272ced55d2124b536befb3af9c23864416d7d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_58edd5feb6422b031aee1017272ced55d2124b536befb3af9c23864416d7d498->leave($__internal_58edd5feb6422b031aee1017272ced55d2124b536befb3af9c23864416d7d498_prof);

        
        $__internal_1dc5344ec26e97604d2faedc070c9881b8afda1c062df63f48c6fa8b0574a787->leave($__internal_1dc5344ec26e97604d2faedc070c9881b8afda1c062df63f48c6fa8b0574a787_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9994e7897ead21a5c1621e795bd33ffe2f40ad8cec0d0fe2e8027674df8e98e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9994e7897ead21a5c1621e795bd33ffe2f40ad8cec0d0fe2e8027674df8e98e2->enter($__internal_9994e7897ead21a5c1621e795bd33ffe2f40ad8cec0d0fe2e8027674df8e98e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f340f7d7ca4fd04d0f1aced65612061fd73d64f9c7eead704a70f4c2c1644d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f340f7d7ca4fd04d0f1aced65612061fd73d64f9c7eead704a70f4c2c1644d52->enter($__internal_f340f7d7ca4fd04d0f1aced65612061fd73d64f9c7eead704a70f4c2c1644d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_f340f7d7ca4fd04d0f1aced65612061fd73d64f9c7eead704a70f4c2c1644d52->leave($__internal_f340f7d7ca4fd04d0f1aced65612061fd73d64f9c7eead704a70f4c2c1644d52_prof);

        
        $__internal_9994e7897ead21a5c1621e795bd33ffe2f40ad8cec0d0fe2e8027674df8e98e2->leave($__internal_9994e7897ead21a5c1621e795bd33ffe2f40ad8cec0d0fe2e8027674df8e98e2_prof);

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

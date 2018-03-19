<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5467491455edcf54dd40336aee837de27eff23fda93db7839931bd86e6f632a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbc9c89667c439e971c510ae9797fc7139acc735d2916992ecd1d1ef235fd6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc9c89667c439e971c510ae9797fc7139acc735d2916992ecd1d1ef235fd6e0->enter($__internal_dbc9c89667c439e971c510ae9797fc7139acc735d2916992ecd1d1ef235fd6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_3366620094839648a6b4fcdcd5d021f3e10b804ebae05330dd9d3535d9a5f5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3366620094839648a6b4fcdcd5d021f3e10b804ebae05330dd9d3535d9a5f5db->enter($__internal_3366620094839648a6b4fcdcd5d021f3e10b804ebae05330dd9d3535d9a5f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 2
        echo "<html><head>

</head>

<body>

";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "
</body>
</html>

";
        
        $__internal_dbc9c89667c439e971c510ae9797fc7139acc735d2916992ecd1d1ef235fd6e0->leave($__internal_dbc9c89667c439e971c510ae9797fc7139acc735d2916992ecd1d1ef235fd6e0_prof);

        
        $__internal_3366620094839648a6b4fcdcd5d021f3e10b804ebae05330dd9d3535d9a5f5db->leave($__internal_3366620094839648a6b4fcdcd5d021f3e10b804ebae05330dd9d3535d9a5f5db_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_596db31a550ba5703e6333459021967d8f594f4c59d5ca749e391ffed49abbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596db31a550ba5703e6333459021967d8f594f4c59d5ca749e391ffed49abbb6->enter($__internal_596db31a550ba5703e6333459021967d8f594f4c59d5ca749e391ffed49abbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5c54e4f3a90768ef70a82fcd6529e6041362abbf06947212d9f0439f17f3366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c54e4f3a90768ef70a82fcd6529e6041362abbf06947212d9f0439f17f3366->enter($__internal_d5c54e4f3a90768ef70a82fcd6529e6041362abbf06947212d9f0439f17f3366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>

";
        
        $__internal_d5c54e4f3a90768ef70a82fcd6529e6041362abbf06947212d9f0439f17f3366->leave($__internal_d5c54e4f3a90768ef70a82fcd6529e6041362abbf06947212d9f0439f17f3366_prof);

        
        $__internal_596db31a550ba5703e6333459021967d8f594f4c59d5ca749e391ffed49abbb6->leave($__internal_596db31a550ba5703e6333459021967d8f594f4c59d5ca749e391ffed49abbb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 10,  39 => 14,  37 => 10,  34 => 9,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"@FOSUser/layout.html.twig\" %}#}
<html><head>

</head>

<body>

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>

{% endblock fos_user_content %}

</body>
</html>

", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}

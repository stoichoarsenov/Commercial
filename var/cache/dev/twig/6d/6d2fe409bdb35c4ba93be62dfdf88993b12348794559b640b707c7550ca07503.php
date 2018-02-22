<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_524a2916cb7f16995680344b1ec43690be48e73e6d0f7220b02865c568f14ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f312ce13699cb38a0245b4584541bbdfdf1dddd837bc2452173675fa8396f157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f312ce13699cb38a0245b4584541bbdfdf1dddd837bc2452173675fa8396f157->enter($__internal_f312ce13699cb38a0245b4584541bbdfdf1dddd837bc2452173675fa8396f157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_506aa53bd923c4226e319cb5fcefb63c9ce9bb13d0516352e52393998d603eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506aa53bd923c4226e319cb5fcefb63c9ce9bb13d0516352e52393998d603eb6->enter($__internal_506aa53bd923c4226e319cb5fcefb63c9ce9bb13d0516352e52393998d603eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f312ce13699cb38a0245b4584541bbdfdf1dddd837bc2452173675fa8396f157->leave($__internal_f312ce13699cb38a0245b4584541bbdfdf1dddd837bc2452173675fa8396f157_prof);

        
        $__internal_506aa53bd923c4226e319cb5fcefb63c9ce9bb13d0516352e52393998d603eb6->leave($__internal_506aa53bd923c4226e319cb5fcefb63c9ce9bb13d0516352e52393998d603eb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a13e2c2f420004efb84f3b39581cc72b26b79ae750a5ec7ffbc519f762349a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13e2c2f420004efb84f3b39581cc72b26b79ae750a5ec7ffbc519f762349a44->enter($__internal_a13e2c2f420004efb84f3b39581cc72b26b79ae750a5ec7ffbc519f762349a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_009f5825085463edf9264c8992048ea7a605cf60a86593bb452217ec070436ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009f5825085463edf9264c8992048ea7a605cf60a86593bb452217ec070436ef->enter($__internal_009f5825085463edf9264c8992048ea7a605cf60a86593bb452217ec070436ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_009f5825085463edf9264c8992048ea7a605cf60a86593bb452217ec070436ef->leave($__internal_009f5825085463edf9264c8992048ea7a605cf60a86593bb452217ec070436ef_prof);

        
        $__internal_a13e2c2f420004efb84f3b39581cc72b26b79ae750a5ec7ffbc519f762349a44->leave($__internal_a13e2c2f420004efb84f3b39581cc72b26b79ae750a5ec7ffbc519f762349a44_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3945ad4c4206a5e2322fe99fcb6b008335d44ed5f5b2ca7b2b361bfd8bb0a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3945ad4c4206a5e2322fe99fcb6b008335d44ed5f5b2ca7b2b361bfd8bb0a09->enter($__internal_e3945ad4c4206a5e2322fe99fcb6b008335d44ed5f5b2ca7b2b361bfd8bb0a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5770e16e5c41d20a678e540453804e627af4eb3d998da8355db4d58c08379a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5770e16e5c41d20a678e540453804e627af4eb3d998da8355db4d58c08379a4->enter($__internal_c5770e16e5c41d20a678e540453804e627af4eb3d998da8355db4d58c08379a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c5770e16e5c41d20a678e540453804e627af4eb3d998da8355db4d58c08379a4->leave($__internal_c5770e16e5c41d20a678e540453804e627af4eb3d998da8355db4d58c08379a4_prof);

        
        $__internal_e3945ad4c4206a5e2322fe99fcb6b008335d44ed5f5b2ca7b2b361bfd8bb0a09->leave($__internal_e3945ad4c4206a5e2322fe99fcb6b008335d44ed5f5b2ca7b2b361bfd8bb0a09_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a517cc888ffb3b94c718131b26b64f446c68fef72608c07de861923ffca399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a517cc888ffb3b94c718131b26b64f446c68fef72608c07de861923ffca399->enter($__internal_17a517cc888ffb3b94c718131b26b64f446c68fef72608c07de861923ffca399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaaa36756419ce17978a4663f0465a234baec824ba3667a25b2e8d03a32ff778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaa36756419ce17978a4663f0465a234baec824ba3667a25b2e8d03a32ff778->enter($__internal_eaaa36756419ce17978a4663f0465a234baec824ba3667a25b2e8d03a32ff778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eaaa36756419ce17978a4663f0465a234baec824ba3667a25b2e8d03a32ff778->leave($__internal_eaaa36756419ce17978a4663f0465a234baec824ba3667a25b2e8d03a32ff778_prof);

        
        $__internal_17a517cc888ffb3b94c718131b26b64f446c68fef72608c07de861923ffca399->leave($__internal_17a517cc888ffb3b94c718131b26b64f446c68fef72608c07de861923ffca399_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

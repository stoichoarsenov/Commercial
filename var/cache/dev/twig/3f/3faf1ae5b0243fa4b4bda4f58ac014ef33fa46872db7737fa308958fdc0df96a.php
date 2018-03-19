<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_df0c2317e98adb04cb302a38810485a0df9f5a816e5bbff0b6ff5dc161bfcb7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_573e405a6a05fe958e6ce06f8b327ebf5e00c08f335c2b7e2c94c1c803845928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573e405a6a05fe958e6ce06f8b327ebf5e00c08f335c2b7e2c94c1c803845928->enter($__internal_573e405a6a05fe958e6ce06f8b327ebf5e00c08f335c2b7e2c94c1c803845928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_47259c940a80c9d5409f37d08fa3c6dd87d87bced4e13239bb6766114d532da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47259c940a80c9d5409f37d08fa3c6dd87d87bced4e13239bb6766114d532da2->enter($__internal_47259c940a80c9d5409f37d08fa3c6dd87d87bced4e13239bb6766114d532da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573e405a6a05fe958e6ce06f8b327ebf5e00c08f335c2b7e2c94c1c803845928->leave($__internal_573e405a6a05fe958e6ce06f8b327ebf5e00c08f335c2b7e2c94c1c803845928_prof);

        
        $__internal_47259c940a80c9d5409f37d08fa3c6dd87d87bced4e13239bb6766114d532da2->leave($__internal_47259c940a80c9d5409f37d08fa3c6dd87d87bced4e13239bb6766114d532da2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e2ec90c7736081761ffd3e67c4e5b2ac20181a7ee1d9062984bb2f12600b707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2ec90c7736081761ffd3e67c4e5b2ac20181a7ee1d9062984bb2f12600b707->enter($__internal_0e2ec90c7736081761ffd3e67c4e5b2ac20181a7ee1d9062984bb2f12600b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67d4907cb0af69a9812a73030bd4ecdd980fd3540eefa80414d9925b49a6f472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d4907cb0af69a9812a73030bd4ecdd980fd3540eefa80414d9925b49a6f472->enter($__internal_67d4907cb0af69a9812a73030bd4ecdd980fd3540eefa80414d9925b49a6f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_67d4907cb0af69a9812a73030bd4ecdd980fd3540eefa80414d9925b49a6f472->leave($__internal_67d4907cb0af69a9812a73030bd4ecdd980fd3540eefa80414d9925b49a6f472_prof);

        
        $__internal_0e2ec90c7736081761ffd3e67c4e5b2ac20181a7ee1d9062984bb2f12600b707->leave($__internal_0e2ec90c7736081761ffd3e67c4e5b2ac20181a7ee1d9062984bb2f12600b707_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ec444b5c3d5f101ec9fd9f6ffd4700d2a7a0d1b2a6491a0ca10ea7c3dc5e5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec444b5c3d5f101ec9fd9f6ffd4700d2a7a0d1b2a6491a0ca10ea7c3dc5e5b6->enter($__internal_5ec444b5c3d5f101ec9fd9f6ffd4700d2a7a0d1b2a6491a0ca10ea7c3dc5e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd45e51f63afd50c39257f56f2a1108a4ca547b524dc2136ecdb44539f3f5d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd45e51f63afd50c39257f56f2a1108a4ca547b524dc2136ecdb44539f3f5d73->enter($__internal_dd45e51f63afd50c39257f56f2a1108a4ca547b524dc2136ecdb44539f3f5d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_dd45e51f63afd50c39257f56f2a1108a4ca547b524dc2136ecdb44539f3f5d73->leave($__internal_dd45e51f63afd50c39257f56f2a1108a4ca547b524dc2136ecdb44539f3f5d73_prof);

        
        $__internal_5ec444b5c3d5f101ec9fd9f6ffd4700d2a7a0d1b2a6491a0ca10ea7c3dc5e5b6->leave($__internal_5ec444b5c3d5f101ec9fd9f6ffd4700d2a7a0d1b2a6491a0ca10ea7c3dc5e5b6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_246e4f81af9a46c5c1609162d45526c868a8fc4841b4ad1a4054d8a6d0292a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246e4f81af9a46c5c1609162d45526c868a8fc4841b4ad1a4054d8a6d0292a02->enter($__internal_246e4f81af9a46c5c1609162d45526c868a8fc4841b4ad1a4054d8a6d0292a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7746916ff6b056d8d0ed9ae51fc8d56b10759ae443529f8c76a1c1592f80b08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7746916ff6b056d8d0ed9ae51fc8d56b10759ae443529f8c76a1c1592f80b08f->enter($__internal_7746916ff6b056d8d0ed9ae51fc8d56b10759ae443529f8c76a1c1592f80b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7746916ff6b056d8d0ed9ae51fc8d56b10759ae443529f8c76a1c1592f80b08f->leave($__internal_7746916ff6b056d8d0ed9ae51fc8d56b10759ae443529f8c76a1c1592f80b08f_prof);

        
        $__internal_246e4f81af9a46c5c1609162d45526c868a8fc4841b4ad1a4054d8a6d0292a02->leave($__internal_246e4f81af9a46c5c1609162d45526c868a8fc4841b4ad1a4054d8a6d0292a02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

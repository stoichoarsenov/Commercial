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
        $__internal_3e43ac68d1d3f1870bb7cadda9283364550fec2a792e2698c1e045268ff812e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e43ac68d1d3f1870bb7cadda9283364550fec2a792e2698c1e045268ff812e1->enter($__internal_3e43ac68d1d3f1870bb7cadda9283364550fec2a792e2698c1e045268ff812e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1d73b94b15fb119b76ffb1d75b66b69d1a493fde87b3098526b4da2ff18c2e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d73b94b15fb119b76ffb1d75b66b69d1a493fde87b3098526b4da2ff18c2e8e->enter($__internal_1d73b94b15fb119b76ffb1d75b66b69d1a493fde87b3098526b4da2ff18c2e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e43ac68d1d3f1870bb7cadda9283364550fec2a792e2698c1e045268ff812e1->leave($__internal_3e43ac68d1d3f1870bb7cadda9283364550fec2a792e2698c1e045268ff812e1_prof);

        
        $__internal_1d73b94b15fb119b76ffb1d75b66b69d1a493fde87b3098526b4da2ff18c2e8e->leave($__internal_1d73b94b15fb119b76ffb1d75b66b69d1a493fde87b3098526b4da2ff18c2e8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b6eac38aba523a10bf064f86ed1567e55004979590315385b7fdbf21071bba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6eac38aba523a10bf064f86ed1567e55004979590315385b7fdbf21071bba7->enter($__internal_6b6eac38aba523a10bf064f86ed1567e55004979590315385b7fdbf21071bba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5165c0d3726449c1d6f1847cf416ce24b00e84be4008bc4d683f6dbc093da08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5165c0d3726449c1d6f1847cf416ce24b00e84be4008bc4d683f6dbc093da08d->enter($__internal_5165c0d3726449c1d6f1847cf416ce24b00e84be4008bc4d683f6dbc093da08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5165c0d3726449c1d6f1847cf416ce24b00e84be4008bc4d683f6dbc093da08d->leave($__internal_5165c0d3726449c1d6f1847cf416ce24b00e84be4008bc4d683f6dbc093da08d_prof);

        
        $__internal_6b6eac38aba523a10bf064f86ed1567e55004979590315385b7fdbf21071bba7->leave($__internal_6b6eac38aba523a10bf064f86ed1567e55004979590315385b7fdbf21071bba7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_768220fc30010f6751228061d6df7c1a0081b677d38d50413589236f369afe9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768220fc30010f6751228061d6df7c1a0081b677d38d50413589236f369afe9f->enter($__internal_768220fc30010f6751228061d6df7c1a0081b677d38d50413589236f369afe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d453dc82e78ddaf693a958db0aa6b19cf906e8ae99771439f42a9a8a67d00449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d453dc82e78ddaf693a958db0aa6b19cf906e8ae99771439f42a9a8a67d00449->enter($__internal_d453dc82e78ddaf693a958db0aa6b19cf906e8ae99771439f42a9a8a67d00449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d453dc82e78ddaf693a958db0aa6b19cf906e8ae99771439f42a9a8a67d00449->leave($__internal_d453dc82e78ddaf693a958db0aa6b19cf906e8ae99771439f42a9a8a67d00449_prof);

        
        $__internal_768220fc30010f6751228061d6df7c1a0081b677d38d50413589236f369afe9f->leave($__internal_768220fc30010f6751228061d6df7c1a0081b677d38d50413589236f369afe9f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f2222afd172e429cb1137b183f7080dcd8679092d1d7d679431afc3eb31209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f2222afd172e429cb1137b183f7080dcd8679092d1d7d679431afc3eb31209->enter($__internal_95f2222afd172e429cb1137b183f7080dcd8679092d1d7d679431afc3eb31209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d124ef9199f4c5b913af77fe856bd9c17f89548c2197d387b379765a92e66e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d124ef9199f4c5b913af77fe856bd9c17f89548c2197d387b379765a92e66e80->enter($__internal_d124ef9199f4c5b913af77fe856bd9c17f89548c2197d387b379765a92e66e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d124ef9199f4c5b913af77fe856bd9c17f89548c2197d387b379765a92e66e80->leave($__internal_d124ef9199f4c5b913af77fe856bd9c17f89548c2197d387b379765a92e66e80_prof);

        
        $__internal_95f2222afd172e429cb1137b183f7080dcd8679092d1d7d679431afc3eb31209->leave($__internal_95f2222afd172e429cb1137b183f7080dcd8679092d1d7d679431afc3eb31209_prof);

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

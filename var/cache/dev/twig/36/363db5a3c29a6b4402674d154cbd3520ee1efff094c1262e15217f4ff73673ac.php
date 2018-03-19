<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ee69937f9b600e91130f5c270ba96d2d56f915c0566b6d6e93e86cf55946e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c314c0e89dbd072cc53159e89e2276ae0e6661df6071bf4c92457f9dff6179b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c314c0e89dbd072cc53159e89e2276ae0e6661df6071bf4c92457f9dff6179b1->enter($__internal_c314c0e89dbd072cc53159e89e2276ae0e6661df6071bf4c92457f9dff6179b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d9b96cfd26016a9153b7fa2e6316811d77a239a649e9ba80d3631e933058a47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b96cfd26016a9153b7fa2e6316811d77a239a649e9ba80d3631e933058a47c->enter($__internal_d9b96cfd26016a9153b7fa2e6316811d77a239a649e9ba80d3631e933058a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c314c0e89dbd072cc53159e89e2276ae0e6661df6071bf4c92457f9dff6179b1->leave($__internal_c314c0e89dbd072cc53159e89e2276ae0e6661df6071bf4c92457f9dff6179b1_prof);

        
        $__internal_d9b96cfd26016a9153b7fa2e6316811d77a239a649e9ba80d3631e933058a47c->leave($__internal_d9b96cfd26016a9153b7fa2e6316811d77a239a649e9ba80d3631e933058a47c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64b29953f832d0a757f3552468a73b24ef0b5e9572a6c3a9b170f5cb6a429a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b29953f832d0a757f3552468a73b24ef0b5e9572a6c3a9b170f5cb6a429a21->enter($__internal_64b29953f832d0a757f3552468a73b24ef0b5e9572a6c3a9b170f5cb6a429a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b7c71db461516bddbdc3914f05201a3e8f86c92cd2e1fe212baaa4d8880b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7c71db461516bddbdc3914f05201a3e8f86c92cd2e1fe212baaa4d8880b914->enter($__internal_2b7c71db461516bddbdc3914f05201a3e8f86c92cd2e1fe212baaa4d8880b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b7c71db461516bddbdc3914f05201a3e8f86c92cd2e1fe212baaa4d8880b914->leave($__internal_2b7c71db461516bddbdc3914f05201a3e8f86c92cd2e1fe212baaa4d8880b914_prof);

        
        $__internal_64b29953f832d0a757f3552468a73b24ef0b5e9572a6c3a9b170f5cb6a429a21->leave($__internal_64b29953f832d0a757f3552468a73b24ef0b5e9572a6c3a9b170f5cb6a429a21_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_39ccf925dc87a001f82bdae595b1069283ce6f6ec41b88af0fe8a1ded80aaadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ccf925dc87a001f82bdae595b1069283ce6f6ec41b88af0fe8a1ded80aaadf->enter($__internal_39ccf925dc87a001f82bdae595b1069283ce6f6ec41b88af0fe8a1ded80aaadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60e470c509da9a0152ebd5cf26dac98dee89cd210d5710c1e0062de3cb53610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e470c509da9a0152ebd5cf26dac98dee89cd210d5710c1e0062de3cb53610b->enter($__internal_60e470c509da9a0152ebd5cf26dac98dee89cd210d5710c1e0062de3cb53610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_60e470c509da9a0152ebd5cf26dac98dee89cd210d5710c1e0062de3cb53610b->leave($__internal_60e470c509da9a0152ebd5cf26dac98dee89cd210d5710c1e0062de3cb53610b_prof);

        
        $__internal_39ccf925dc87a001f82bdae595b1069283ce6f6ec41b88af0fe8a1ded80aaadf->leave($__internal_39ccf925dc87a001f82bdae595b1069283ce6f6ec41b88af0fe8a1ded80aaadf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb86f5ef578b4f9798653cb8765c02a74da5748accf6a3072c731c309e04b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb86f5ef578b4f9798653cb8765c02a74da5748accf6a3072c731c309e04b55->enter($__internal_edb86f5ef578b4f9798653cb8765c02a74da5748accf6a3072c731c309e04b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60c9d337f4681c4eaf8c274c8536f5df2a6516f9c17eb09c92856255a1c3900d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9d337f4681c4eaf8c274c8536f5df2a6516f9c17eb09c92856255a1c3900d->enter($__internal_60c9d337f4681c4eaf8c274c8536f5df2a6516f9c17eb09c92856255a1c3900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60c9d337f4681c4eaf8c274c8536f5df2a6516f9c17eb09c92856255a1c3900d->leave($__internal_60c9d337f4681c4eaf8c274c8536f5df2a6516f9c17eb09c92856255a1c3900d_prof);

        
        $__internal_edb86f5ef578b4f9798653cb8765c02a74da5748accf6a3072c731c309e04b55->leave($__internal_edb86f5ef578b4f9798653cb8765c02a74da5748accf6a3072c731c309e04b55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

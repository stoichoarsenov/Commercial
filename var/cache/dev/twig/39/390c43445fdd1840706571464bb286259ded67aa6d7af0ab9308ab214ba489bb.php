<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8a4267ff5c7135d1b504d6623838c1ed2bf0d62db14c6cdc46fc102fe5cd3c31 extends Twig_Template
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
        $__internal_369af0bfe0f04f19081d99eabdcd7e9db7e6148102c81b496df732b3ced012f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369af0bfe0f04f19081d99eabdcd7e9db7e6148102c81b496df732b3ced012f8->enter($__internal_369af0bfe0f04f19081d99eabdcd7e9db7e6148102c81b496df732b3ced012f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_796db1ccd2785da56174e5fd737bbcd21af86a1b2f6a6710699832ea2b9d2af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796db1ccd2785da56174e5fd737bbcd21af86a1b2f6a6710699832ea2b9d2af8->enter($__internal_796db1ccd2785da56174e5fd737bbcd21af86a1b2f6a6710699832ea2b9d2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_369af0bfe0f04f19081d99eabdcd7e9db7e6148102c81b496df732b3ced012f8->leave($__internal_369af0bfe0f04f19081d99eabdcd7e9db7e6148102c81b496df732b3ced012f8_prof);

        
        $__internal_796db1ccd2785da56174e5fd737bbcd21af86a1b2f6a6710699832ea2b9d2af8->leave($__internal_796db1ccd2785da56174e5fd737bbcd21af86a1b2f6a6710699832ea2b9d2af8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4a0dfd0c4e243a51000199d98de68f05fdf29a9a50a6da95a33b22501e4e1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0dfd0c4e243a51000199d98de68f05fdf29a9a50a6da95a33b22501e4e1a1->enter($__internal_b4a0dfd0c4e243a51000199d98de68f05fdf29a9a50a6da95a33b22501e4e1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe4cdce4d4070ae813bd8ec595cbb56a7006efdb6eecff8661257255ca272eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4cdce4d4070ae813bd8ec595cbb56a7006efdb6eecff8661257255ca272eb1->enter($__internal_fe4cdce4d4070ae813bd8ec595cbb56a7006efdb6eecff8661257255ca272eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fe4cdce4d4070ae813bd8ec595cbb56a7006efdb6eecff8661257255ca272eb1->leave($__internal_fe4cdce4d4070ae813bd8ec595cbb56a7006efdb6eecff8661257255ca272eb1_prof);

        
        $__internal_b4a0dfd0c4e243a51000199d98de68f05fdf29a9a50a6da95a33b22501e4e1a1->leave($__internal_b4a0dfd0c4e243a51000199d98de68f05fdf29a9a50a6da95a33b22501e4e1a1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec9b52320a0efbccd8d376e44bbcc1079a35a7bc5e0f654f9e054af0135bb6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9b52320a0efbccd8d376e44bbcc1079a35a7bc5e0f654f9e054af0135bb6bd->enter($__internal_ec9b52320a0efbccd8d376e44bbcc1079a35a7bc5e0f654f9e054af0135bb6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e44fec2680c2778a4969c3f91067ff78dd9bd7619b46865160f925540968a615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44fec2680c2778a4969c3f91067ff78dd9bd7619b46865160f925540968a615->enter($__internal_e44fec2680c2778a4969c3f91067ff78dd9bd7619b46865160f925540968a615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e44fec2680c2778a4969c3f91067ff78dd9bd7619b46865160f925540968a615->leave($__internal_e44fec2680c2778a4969c3f91067ff78dd9bd7619b46865160f925540968a615_prof);

        
        $__internal_ec9b52320a0efbccd8d376e44bbcc1079a35a7bc5e0f654f9e054af0135bb6bd->leave($__internal_ec9b52320a0efbccd8d376e44bbcc1079a35a7bc5e0f654f9e054af0135bb6bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e292cc78ff50b37e29752ef1119c3fa056d0e1006900b1a9dc57a66600c03bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e292cc78ff50b37e29752ef1119c3fa056d0e1006900b1a9dc57a66600c03bc6->enter($__internal_e292cc78ff50b37e29752ef1119c3fa056d0e1006900b1a9dc57a66600c03bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1b274cf94a932ac1191d0fc2e8f9a17694e856a847996f39072e3d275e40439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b274cf94a932ac1191d0fc2e8f9a17694e856a847996f39072e3d275e40439->enter($__internal_c1b274cf94a932ac1191d0fc2e8f9a17694e856a847996f39072e3d275e40439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1b274cf94a932ac1191d0fc2e8f9a17694e856a847996f39072e3d275e40439->leave($__internal_c1b274cf94a932ac1191d0fc2e8f9a17694e856a847996f39072e3d275e40439_prof);

        
        $__internal_e292cc78ff50b37e29752ef1119c3fa056d0e1006900b1a9dc57a66600c03bc6->leave($__internal_e292cc78ff50b37e29752ef1119c3fa056d0e1006900b1a9dc57a66600c03bc6_prof);

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

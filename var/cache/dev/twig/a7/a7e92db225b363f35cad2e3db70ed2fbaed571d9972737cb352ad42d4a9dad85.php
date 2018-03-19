<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_d8ad3389067f07b16314b058bc4659b5f69237e93787beb5deb2429cb873d223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7601d4df55c6dbece379ade9836a7efa68defbee5393e351a935ae43b5f9d955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7601d4df55c6dbece379ade9836a7efa68defbee5393e351a935ae43b5f9d955->enter($__internal_7601d4df55c6dbece379ade9836a7efa68defbee5393e351a935ae43b5f9d955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        $__internal_dd13e1637a71aa98c5d8395508394469d8ede7e4b7ac1c61870944e7f33e9d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13e1637a71aa98c5d8395508394469d8ede7e4b7ac1c61870944e7f33e9d67->enter($__internal_dd13e1637a71aa98c5d8395508394469d8ede7e4b7ac1c61870944e7f33e9d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        // line 1
        if ((isset($context["include_jquery"]) || array_key_exists("include_jquery", $context) ? $context["include_jquery"] : (function () { throw new Twig_Error_Runtime('Variable "include_jquery" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) || array_key_exists("tinymce_jquery", $context) ? $context["tinymce_jquery"] : (function () { throw new Twig_Error_Runtime('Variable "tinymce_jquery" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 5, $this->getSourceContext()); })()) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), (isset($context["asset_package_name"]) || array_key_exists("asset_package_name", $context) ? $context["asset_package_name"] : (function () { throw new Twig_Error_Runtime('Variable "asset_package_name" does not exist.', 5, $this->getSourceContext()); })())), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 6, $this->getSourceContext()); })()) . "bundles/stfalcontinymce/js/init.jquery.js"), (isset($context["asset_package_name"]) || array_key_exists("asset_package_name", $context) ? $context["asset_package_name"] : (function () { throw new Twig_Error_Runtime('Variable "asset_package_name" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 8, $this->getSourceContext()); })()) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), (isset($context["asset_package_name"]) || array_key_exists("asset_package_name", $context) ? $context["asset_package_name"] : (function () { throw new Twig_Error_Runtime('Variable "asset_package_name" does not exist.', 8, $this->getSourceContext()); })())), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 9, $this->getSourceContext()); })()) . "bundles/stfalcontinymce/js/ready.min.js"), (isset($context["asset_package_name"]) || array_key_exists("asset_package_name", $context) ? $context["asset_package_name"] : (function () { throw new Twig_Error_Runtime('Variable "asset_package_name" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new Twig_Error_Runtime('Variable "base_url" does not exist.', 10, $this->getSourceContext()); })()) . "bundles/stfalcontinymce/js/init.standard.js"), (isset($context["asset_package_name"]) || array_key_exists("asset_package_name", $context) ? $context["asset_package_name"] : (function () { throw new Twig_Error_Runtime('Variable "asset_package_name" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) || array_key_exists("tinymce_config", $context) ? $context["tinymce_config"] : (function () { throw new Twig_Error_Runtime('Variable "tinymce_config" does not exist.', 14, $this->getSourceContext()); })());
        echo ";
    initTinyMCE();
    //]]>
</script>
";
        
        $__internal_7601d4df55c6dbece379ade9836a7efa68defbee5393e351a935ae43b5f9d955->leave($__internal_7601d4df55c6dbece379ade9836a7efa68defbee5393e351a935ae43b5f9d955_prof);

        
        $__internal_dd13e1637a71aa98c5d8395508394469d8ede7e4b7ac1c61870944e7f33e9d67->leave($__internal_dd13e1637a71aa98c5d8395508394469d8ede7e4b7ac1c61870944e7f33e9d67_prof);

    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 12,  52 => 10,  48 => 9,  43 => 8,  38 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if include_jquery %}
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endif %}
{% if tinymce_jquery %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.jquery.js', asset_package_name) }}\"></script>
{% else %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/ready.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.standard.js', asset_package_name) }}\"></script>
{% endif %}
<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = {{ tinymce_config|raw }};
    initTinyMCE();
    //]]>
</script>
", "StfalconTinymceBundle:Script:init.html.twig", "/var/www/html/Commercial/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views/Script/init.html.twig");
    }
}

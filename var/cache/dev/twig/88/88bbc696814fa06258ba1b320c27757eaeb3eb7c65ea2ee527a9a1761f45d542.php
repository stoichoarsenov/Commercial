<?php

/* :NewProduct:new_product.html.twig */
class __TwigTemplate_43e353fd07aa9e5b98e0918eea449cb7a643df709803f7b6128497b534d95089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::header.html.twig", ":NewProduct:new_product.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39a8a61b2fdee377b0558522e13b189e8d4150f1d69358b7374fd57cfff4b869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a8a61b2fdee377b0558522e13b189e8d4150f1d69358b7374fd57cfff4b869->enter($__internal_39a8a61b2fdee377b0558522e13b189e8d4150f1d69358b7374fd57cfff4b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":NewProduct:new_product.html.twig"));

        $__internal_c69a9c59fb12981b447be16e7e25df042bdb430e1aeca31e4a3f249acadb4726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69a9c59fb12981b447be16e7e25df042bdb430e1aeca31e4a3f249acadb4726->enter($__internal_c69a9c59fb12981b447be16e7e25df042bdb430e1aeca31e4a3f249acadb4726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":NewProduct:new_product.html.twig"));

        // line 2
        $context["page_title"] = "Add new product";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a8a61b2fdee377b0558522e13b189e8d4150f1d69358b7374fd57cfff4b869->leave($__internal_39a8a61b2fdee377b0558522e13b189e8d4150f1d69358b7374fd57cfff4b869_prof);

        
        $__internal_c69a9c59fb12981b447be16e7e25df042bdb430e1aeca31e4a3f249acadb4726->leave($__internal_c69a9c59fb12981b447be16e7e25df042bdb430e1aeca31e4a3f249acadb4726_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb71305a68dfa5bd2e342b3ed7d7433b36db4d06134e1f218e5f26111e583e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb71305a68dfa5bd2e342b3ed7d7433b36db4d06134e1f218e5f26111e583e49->enter($__internal_cb71305a68dfa5bd2e342b3ed7d7433b36db4d06134e1f218e5f26111e583e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd89b363f2c222f162b032d6a2befcb7497da3d5136c48c98fd6ed58fc0f7833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd89b363f2c222f162b032d6a2befcb7497da3d5136c48c98fd6ed58fc0f7833->enter($__internal_bd89b363f2c222f162b032d6a2befcb7497da3d5136c48c98fd6ed58fc0f7833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 6
        echo "    ";
        $context["page_title"] = "Add new product";
        // line 7
        echo "    <div style=\"padding-top: 100px;\">
        <div class=\"container\">
            <label class=\"jumbotron\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert product name"), "html", null, true);
        echo " </div>
                        <div class=\"col-xs-9 col-md-10\" style=\"margin-bottom: 20px;\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), 'widget');
        echo "</div>
                        <div class=\"col-xs-6 col-md-6\" style=\"margin-bottom: 20px;\"> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo " </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert product price"), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "price", array()), 'widget', array("attr" => array("placeholder" => "0.00", "value" => "0.00")));
        // line 28
        echo "</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\"> ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "price", array()), 'errors');
        echo " </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert product price when bought"), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "boughtPrice", array()), 'widget', array("attr" => array("placeholder" => "0.00", "value" => "0.00")));
        // line 42
        echo "</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "boughtPrice", array()), 'errors');
        echo "</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert product quantity"), "html", null, true);
        echo " </div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "quantity", array()), 'widget');
        echo "</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "quantity", array()), 'errors');
        echo "</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product category"), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "category", array()), 'widget');
        echo "</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\"> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert product description"), "html", null, true);
        echo " </div>
                        <div class=\"col-xs-9 col-md-10\" style=\"margin-bottom: 20px;\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), "description", array()), 'widget');
        echo "</div>
                        <div class=\"col-xs-6 col-md-6\" style=\"margin-bottom: 20px;\"> ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "description", array()), 'errors');
        echo " </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-4 col-md-2\"
                             style=\"margin-bottom: 20px;\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product is added by"), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-8 col-md-10\"
                             style=\"margin-bottom: 20px;\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), "AddedBy", array()), 'widget', array("attr" => array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 87
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "user", array()), "username", array()))));
        echo "</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-4 col-md-2\" style=\"margin-bottom: 20px;\"> ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date added"), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-8 col-md-10\"
                             style=\"margin-bottom: 20px;\"> ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "DateAdded", array()), 'widget');
        echo "</div>
                    </div>
                </div>

            <div style=\"padding-left: 75px\">
                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "image1", array()), 'row', array("label_attr" => array("class" => "btn_upload")));
        echo "
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "image2", array()), 'row', array("label_attr" => array("class" => "btn_upload")));
        echo "
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->getSourceContext()); })()), "image3", array()), 'row', array("label_attr" => array("class" => "btn_upload")));
        echo "
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "image4", array()), 'row', array("label_attr" => array("class" => "btn_upload")));
        echo "
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "image5", array()), 'row', array("label_attr" => array("class" => "btn_upload")));
        echo "
                </label>
            </div>

                <div style=\"text-align: center\">
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "save", array()), 'widget');
        echo "
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->getSourceContext()); })()), "reset", array()), 'widget');
        echo "
                </div>

                ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->getSourceContext()); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>


";
        
        $__internal_bd89b363f2c222f162b032d6a2befcb7497da3d5136c48c98fd6ed58fc0f7833->leave($__internal_bd89b363f2c222f162b032d6a2befcb7497da3d5136c48c98fd6ed58fc0f7833_prof);

        
        $__internal_cb71305a68dfa5bd2e342b3ed7d7433b36db4d06134e1f218e5f26111e583e49->leave($__internal_cb71305a68dfa5bd2e342b3ed7d7433b36db4d06134e1f218e5f26111e583e49_prof);

    }

    public function getTemplateName()
    {
        return ":NewProduct:new_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 132,  265 => 129,  261 => 128,  253 => 123,  245 => 118,  237 => 113,  229 => 108,  221 => 103,  211 => 96,  206 => 94,  196 => 87,  195 => 86,  190 => 84,  179 => 76,  175 => 75,  171 => 74,  160 => 66,  155 => 64,  144 => 56,  139 => 54,  134 => 52,  123 => 44,  119 => 42,  117 => 40,  112 => 38,  101 => 30,  97 => 28,  95 => 26,  90 => 24,  79 => 16,  75 => 15,  71 => 14,  64 => 10,  59 => 7,  56 => 6,  54 => 5,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::header.html.twig\" %}
{% set page_title = 'Add new product' %}
{% block content %}
    {% set currentPath = path(app.request.attributes.get('_route'),
    app.request.attributes.get('_route_params')) %}
    {% set page_title = 'Add new product' %}
    <div style=\"padding-top: 100px;\">
        <div class=\"container\">
            <label class=\"jumbotron\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\"> {{ 'Insert product name' | trans }} </div>
                        <div class=\"col-xs-9 col-md-10\" style=\"margin-bottom: 20px;\">{{ form_widget(form.name) }}</div>
                        <div class=\"col-xs-6 col-md-6\" style=\"margin-bottom: 20px;\"> {{ form_errors(form.name) }} </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">{{ 'Insert product price' | trans }}</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">{{ form_widget(form.price, {'attr': {
                                'placeholder': \"0.00\",
                                'value': \"0.00\" } }) }}</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\"> {{ form_errors(form.price) }} </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">{{ 'Insert product price when bought' | trans }}</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">{{ form_widget(form.boughtPrice, {'attr': {
                                'placeholder': \"0.00\",
                                'value': \"0.00\" } }) }}</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\">{{ form_errors(form.boughtPrice) }}</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">{{ 'Insert product quantity' | trans }} </div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">{{ form_widget(form.quantity) }}</div>
                        <div class=\"col-xs-6 col-md-6\"
                             style=\"margin-bottom: 20px;\">{{ form_errors(form.quantity) }}</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\">{{ 'Product category' | trans }}</div>
                        <div class=\"col-xs-9 col-md-10\"
                             style=\"margin-bottom: 20px;\">{{ form_widget(form.category) }}</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-3 col-md-2\"
                             style=\"margin-bottom: 20px;\"> {{ 'Insert product description' | trans }} </div>
                        <div class=\"col-xs-9 col-md-10\" style=\"margin-bottom: 20px;\">{{ form_widget(form.description) }}</div>
                        <div class=\"col-xs-6 col-md-6\" style=\"margin-bottom: 20px;\"> {{ form_errors(form.description) }} </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-4 col-md-2\"
                             style=\"margin-bottom: 20px;\">{{ 'Product is added by' | trans }}</div>
                        <div class=\"col-xs-8 col-md-10\"
                             style=\"margin-bottom: 20px;\">{{ form_widget(form.AddedBy, {'attr': {
                                                                    'value': app.user.username }} ) }}</div>
                    </div>
                </div>


                <div class=\"row\">
                    <div style=\"margin-bottom: 20px;\">
                        <div class=\"col-xs-4 col-md-2\" style=\"margin-bottom: 20px;\"> {{ 'Date added' | trans }}</div>
                        <div class=\"col-xs-8 col-md-10\"
                             style=\"margin-bottom: 20px;\"> {{ form_widget(form.DateAdded) }}</div>
                    </div>
                </div>

            <div style=\"padding-left: 75px\">
                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    {{ form_row(form.image1, {'label_attr': {'class': 'btn_upload'}}) }}
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    {{ form_row(form.image2, {'label_attr': {'class': 'btn_upload'}}) }}
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    {{ form_row(form.image3, {'label_attr': {'class': 'btn_upload'}}) }}
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    {{ form_row(form.image4, {'label_attr': {'class': 'btn_upload'}}) }}
                </label>

                <label class=\"btn btn-default btn-file\" style=\"margin: 20px;\">
                    <img src=\"http://simpleicon.com/wp-content/uploads/cloud-upload-2.png\" style=\"width:100px;height:100px;\">
                    {{ form_row(form.image5, {'label_attr': {'class': 'btn_upload'}}) }}
                </label>
            </div>

                <div style=\"text-align: center\">
                    {{ form_widget(form.save) }}
                    {{ form_widget(form.reset) }}
                </div>

                {{ form_end(form) }}

            </div>
        </div>
    </div>


{% endblock %}
", ":NewProduct:new_product.html.twig", "/var/www/html/Commercial/app/Resources/views/NewProduct/new_product.html.twig");
    }
}

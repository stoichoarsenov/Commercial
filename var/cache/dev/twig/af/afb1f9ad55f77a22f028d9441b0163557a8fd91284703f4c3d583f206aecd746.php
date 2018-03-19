<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_79979bead1b1edaee7aa60d7ac27075ec4bc2b09fad2c7645d78018d958e9de3 extends Twig_Template
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
        $__internal_93c8fa119ef306eb6d33e300aa9019e235c3ac560c8df673d96ef065147d0db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c8fa119ef306eb6d33e300aa9019e235c3ac560c8df673d96ef065147d0db4->enter($__internal_93c8fa119ef306eb6d33e300aa9019e235c3ac560c8df673d96ef065147d0db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_23ea6fbf43951b964887d36934da43580d8fcaa20789b13214949dd515395c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ea6fbf43951b964887d36934da43580d8fcaa20789b13214949dd515395c84->enter($__internal_23ea6fbf43951b964887d36934da43580d8fcaa20789b13214949dd515395c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"container\" style=\"padding: 80px\">
    <div class=\"col-xs-3 col-md-12\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <div class=\"text-center\">
                    <h3>Register</h3>
                </div>
            </div>
            <div class=\"form-group\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        // line 15
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input class=\"buttonLogin\" type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>";
        
        $__internal_93c8fa119ef306eb6d33e300aa9019e235c3ac560c8df673d96ef065147d0db4->leave($__internal_93c8fa119ef306eb6d33e300aa9019e235c3ac560c8df673d96ef065147d0db4_prof);

        
        $__internal_23ea6fbf43951b964887d36934da43580d8fcaa20789b13214949dd515395c84->leave($__internal_23ea6fbf43951b964887d36934da43580d8fcaa20789b13214949dd515395c84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  46 => 18,  41 => 16,  38 => 15,  36 => 11,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container\" style=\"padding: 80px\">
    <div class=\"col-xs-3 col-md-12\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <div class=\"text-center\">
                    <h3>Register</h3>
                </div>
            </div>
            <div class=\"form-group\">
            {{ form_start(form, {
                    'method': 'post',
                    'action': path('fos_user_registration_register'),
                    'attr': {
                            'class': 'fos_user_registration_register'}}) }}
                {{ form_widget(form) }}
    <div>
        <input class=\"buttonLogin\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
            </div>
        </div>
    </div>
</div>", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}

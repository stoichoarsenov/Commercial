<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_bf70ae174438a2097ffa0ef93b7ae4ad33a26da54a813eb31d3c60fe38cc6b54 extends Twig_Template
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
        $__internal_347ae29da4f4cc6f25a7c95b0343e234c679cbd8cdb741a1f49dea5b03978029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347ae29da4f4cc6f25a7c95b0343e234c679cbd8cdb741a1f49dea5b03978029->enter($__internal_347ae29da4f4cc6f25a7c95b0343e234c679cbd8cdb741a1f49dea5b03978029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_cfe472bb2461cd892dec4db5d7b25e392ef6a1145b28927bcf67a8284b3a4411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe472bb2461cd892dec4db5d7b25e392ef6a1145b28927bcf67a8284b3a4411->enter($__internal_cfe472bb2461cd892dec4db5d7b25e392ef6a1145b28927bcf67a8284b3a4411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_347ae29da4f4cc6f25a7c95b0343e234c679cbd8cdb741a1f49dea5b03978029->leave($__internal_347ae29da4f4cc6f25a7c95b0343e234c679cbd8cdb741a1f49dea5b03978029_prof);

        
        $__internal_cfe472bb2461cd892dec4db5d7b25e392ef6a1145b28927bcf67a8284b3a4411->leave($__internal_cfe472bb2461cd892dec4db5d7b25e392ef6a1145b28927bcf67a8284b3a4411_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}

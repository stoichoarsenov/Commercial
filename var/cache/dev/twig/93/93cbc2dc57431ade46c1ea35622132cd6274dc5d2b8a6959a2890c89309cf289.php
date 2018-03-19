<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_dfc9dd3155e0043872ce172e0046c47787de2be1040344bebb5bd3b6d069a672 extends Twig_Template
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
        $__internal_bd5a8fa57fb48eb45fa4a15d4074d9eb47d93173c70ffca0c6dc0ee3a379869d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5a8fa57fb48eb45fa4a15d4074d9eb47d93173c70ffca0c6dc0ee3a379869d->enter($__internal_bd5a8fa57fb48eb45fa4a15d4074d9eb47d93173c70ffca0c6dc0ee3a379869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_381ae540dcecd3c7f3359e799769c7321705a3380d6d6a2684a841eae8008a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381ae540dcecd3c7f3359e799769c7321705a3380d6d6a2684a841eae8008a6f->enter($__internal_381ae540dcecd3c7f3359e799769c7321705a3380d6d6a2684a841eae8008a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_bd5a8fa57fb48eb45fa4a15d4074d9eb47d93173c70ffca0c6dc0ee3a379869d->leave($__internal_bd5a8fa57fb48eb45fa4a15d4074d9eb47d93173c70ffca0c6dc0ee3a379869d_prof);

        
        $__internal_381ae540dcecd3c7f3359e799769c7321705a3380d6d6a2684a841eae8008a6f->leave($__internal_381ae540dcecd3c7f3359e799769c7321705a3380d6d6a2684a841eae8008a6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}

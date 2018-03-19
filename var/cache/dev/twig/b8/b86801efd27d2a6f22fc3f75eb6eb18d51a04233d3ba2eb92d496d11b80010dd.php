<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_234375cc5e753d8d896a2bff13f971b982ddd3265fdf8889792f3e863929968f extends Twig_Template
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
        $__internal_dd9c1f83fe21f8e891f13d1ba639b5c6cfb1a660af86b9aa470f558ee2275df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9c1f83fe21f8e891f13d1ba639b5c6cfb1a660af86b9aa470f558ee2275df3->enter($__internal_dd9c1f83fe21f8e891f13d1ba639b5c6cfb1a660af86b9aa470f558ee2275df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_e88c44fcef70fd6aa388ca57dd28bf085c40ae041727cb665318a166faab4120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88c44fcef70fd6aa388ca57dd28bf085c40ae041727cb665318a166faab4120->enter($__internal_e88c44fcef70fd6aa388ca57dd28bf085c40ae041727cb665318a166faab4120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_dd9c1f83fe21f8e891f13d1ba639b5c6cfb1a660af86b9aa470f558ee2275df3->leave($__internal_dd9c1f83fe21f8e891f13d1ba639b5c6cfb1a660af86b9aa470f558ee2275df3_prof);

        
        $__internal_e88c44fcef70fd6aa388ca57dd28bf085c40ae041727cb665318a166faab4120->leave($__internal_e88c44fcef70fd6aa388ca57dd28bf085c40ae041727cb665318a166faab4120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}

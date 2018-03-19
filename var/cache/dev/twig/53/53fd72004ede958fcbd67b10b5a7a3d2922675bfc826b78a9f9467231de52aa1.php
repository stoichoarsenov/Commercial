<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4231c060808cd1a07a11c3a6dc3715f8591d28d8367b9b0af7df98d6c5f5c183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde560ea777af2272dbefd603d870217c9fdfbc25a693a3fc501ba35fce50d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde560ea777af2272dbefd603d870217c9fdfbc25a693a3fc501ba35fce50d79->enter($__internal_fde560ea777af2272dbefd603d870217c9fdfbc25a693a3fc501ba35fce50d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_80f176d226afaf51ec2a422c9c2caa3d7d037fefc6c9fa1d20413201190756db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f176d226afaf51ec2a422c9c2caa3d7d037fefc6c9fa1d20413201190756db->enter($__internal_80f176d226afaf51ec2a422c9c2caa3d7d037fefc6c9fa1d20413201190756db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde560ea777af2272dbefd603d870217c9fdfbc25a693a3fc501ba35fce50d79->leave($__internal_fde560ea777af2272dbefd603d870217c9fdfbc25a693a3fc501ba35fce50d79_prof);

        
        $__internal_80f176d226afaf51ec2a422c9c2caa3d7d037fefc6c9fa1d20413201190756db->leave($__internal_80f176d226afaf51ec2a422c9c2caa3d7d037fefc6c9fa1d20413201190756db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d5b21af2ca6c411f80bd7f99dd89e5ad77fca472b030a6b682bedfd26fc8ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5b21af2ca6c411f80bd7f99dd89e5ad77fca472b030a6b682bedfd26fc8ba1->enter($__internal_4d5b21af2ca6c411f80bd7f99dd89e5ad77fca472b030a6b682bedfd26fc8ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba0f7bcf3df273ad0f5727a6618946a4fb408985d9478ce1b9bf1286c855553c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f7bcf3df273ad0f5727a6618946a4fb408985d9478ce1b9bf1286c855553c->enter($__internal_ba0f7bcf3df273ad0f5727a6618946a4fb408985d9478ce1b9bf1286c855553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ba0f7bcf3df273ad0f5727a6618946a4fb408985d9478ce1b9bf1286c855553c->leave($__internal_ba0f7bcf3df273ad0f5727a6618946a4fb408985d9478ce1b9bf1286c855553c_prof);

        
        $__internal_4d5b21af2ca6c411f80bd7f99dd89e5ad77fca472b030a6b682bedfd26fc8ba1->leave($__internal_4d5b21af2ca6c411f80bd7f99dd89e5ad77fca472b030a6b682bedfd26fc8ba1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}

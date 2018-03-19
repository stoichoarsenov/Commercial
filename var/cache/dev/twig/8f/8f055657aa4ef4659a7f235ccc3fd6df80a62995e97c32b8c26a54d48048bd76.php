<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_098d033cbf0739703a2c70d94e652a172ce4b6ea77d3ecf7d109aa6174d75661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5cf4e763c086ba52a224f2dc06d6d3a5b3610a9fb1b0267ce88d1e2406ee6e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf4e763c086ba52a224f2dc06d6d3a5b3610a9fb1b0267ce88d1e2406ee6e41->enter($__internal_5cf4e763c086ba52a224f2dc06d6d3a5b3610a9fb1b0267ce88d1e2406ee6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ea0b4e2487c9369b51a70dbb1a0d535f31793ff37a068a87bad13c8d2196576f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0b4e2487c9369b51a70dbb1a0d535f31793ff37a068a87bad13c8d2196576f->enter($__internal_ea0b4e2487c9369b51a70dbb1a0d535f31793ff37a068a87bad13c8d2196576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf4e763c086ba52a224f2dc06d6d3a5b3610a9fb1b0267ce88d1e2406ee6e41->leave($__internal_5cf4e763c086ba52a224f2dc06d6d3a5b3610a9fb1b0267ce88d1e2406ee6e41_prof);

        
        $__internal_ea0b4e2487c9369b51a70dbb1a0d535f31793ff37a068a87bad13c8d2196576f->leave($__internal_ea0b4e2487c9369b51a70dbb1a0d535f31793ff37a068a87bad13c8d2196576f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45f4a131828b4c643f027cf8b4f8aaf9dbade5c84bff692d281c6d852fa838f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f4a131828b4c643f027cf8b4f8aaf9dbade5c84bff692d281c6d852fa838f8->enter($__internal_45f4a131828b4c643f027cf8b4f8aaf9dbade5c84bff692d281c6d852fa838f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_25d97e163f1e28948bf3e86bd78302588021fe93d860e89cdb77bfe2ea627d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d97e163f1e28948bf3e86bd78302588021fe93d860e89cdb77bfe2ea627d31->enter($__internal_25d97e163f1e28948bf3e86bd78302588021fe93d860e89cdb77bfe2ea627d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_25d97e163f1e28948bf3e86bd78302588021fe93d860e89cdb77bfe2ea627d31->leave($__internal_25d97e163f1e28948bf3e86bd78302588021fe93d860e89cdb77bfe2ea627d31_prof);

        
        $__internal_45f4a131828b4c643f027cf8b4f8aaf9dbade5c84bff692d281c6d852fa838f8->leave($__internal_45f4a131828b4c643f027cf8b4f8aaf9dbade5c84bff692d281c6d852fa838f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Commercial/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}

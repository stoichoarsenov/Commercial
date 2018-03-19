<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1aa3786e32c8d5c131b97f42efccd080e583a83adfc3cfa1eb7906b23f1e91cf extends Twig_Template
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
        $__internal_acd7e2b15a960719b8069062d99b7a16546eb57609e08556e2cb4589de203c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd7e2b15a960719b8069062d99b7a16546eb57609e08556e2cb4589de203c9d->enter($__internal_acd7e2b15a960719b8069062d99b7a16546eb57609e08556e2cb4589de203c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_29af86f0a716608df800d758203a8a16d001b503e8a03b8f430c247a48ede8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29af86f0a716608df800d758203a8a16d001b503e8a03b8f430c247a48ede8f8->enter($__internal_29af86f0a716608df800d758203a8a16d001b503e8a03b8f430c247a48ede8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_acd7e2b15a960719b8069062d99b7a16546eb57609e08556e2cb4589de203c9d->leave($__internal_acd7e2b15a960719b8069062d99b7a16546eb57609e08556e2cb4589de203c9d_prof);

        
        $__internal_29af86f0a716608df800d758203a8a16d001b503e8a03b8f430c247a48ede8f8->leave($__internal_29af86f0a716608df800d758203a8a16d001b503e8a03b8f430c247a48ede8f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

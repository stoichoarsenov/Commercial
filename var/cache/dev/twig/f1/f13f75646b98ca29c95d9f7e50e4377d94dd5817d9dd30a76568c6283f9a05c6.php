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
        $__internal_d6b7924c877d910f71f6363290fb12d11478542fd3d39e2df1dbf464c7346319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b7924c877d910f71f6363290fb12d11478542fd3d39e2df1dbf464c7346319->enter($__internal_d6b7924c877d910f71f6363290fb12d11478542fd3d39e2df1dbf464c7346319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_190703f7632cf29555e939fd863b7939c8f5fe204d247001c884265d541ab59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190703f7632cf29555e939fd863b7939c8f5fe204d247001c884265d541ab59a->enter($__internal_190703f7632cf29555e939fd863b7939c8f5fe204d247001c884265d541ab59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d6b7924c877d910f71f6363290fb12d11478542fd3d39e2df1dbf464c7346319->leave($__internal_d6b7924c877d910f71f6363290fb12d11478542fd3d39e2df1dbf464c7346319_prof);

        
        $__internal_190703f7632cf29555e939fd863b7939c8f5fe204d247001c884265d541ab59a->leave($__internal_190703f7632cf29555e939fd863b7939c8f5fe204d247001c884265d541ab59a_prof);

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

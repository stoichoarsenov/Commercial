<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_148509d75e2f47fbbb1cadfa3120731a49753aa583b4bdb77d02b9c9b12b2c0e extends Twig_Template
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
        $__internal_b5c1b554baeb11a208d1c9669b9d29774b92f3af82c0d339ab6e05dcb9ea9af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c1b554baeb11a208d1c9669b9d29774b92f3af82c0d339ab6e05dcb9ea9af5->enter($__internal_b5c1b554baeb11a208d1c9669b9d29774b92f3af82c0d339ab6e05dcb9ea9af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_20085e94d2a792263458f855d3138f60c521e8383b294117c045b59efd42df3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20085e94d2a792263458f855d3138f60c521e8383b294117c045b59efd42df3c->enter($__internal_20085e94d2a792263458f855d3138f60c521e8383b294117c045b59efd42df3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b5c1b554baeb11a208d1c9669b9d29774b92f3af82c0d339ab6e05dcb9ea9af5->leave($__internal_b5c1b554baeb11a208d1c9669b9d29774b92f3af82c0d339ab6e05dcb9ea9af5_prof);

        
        $__internal_20085e94d2a792263458f855d3138f60c521e8383b294117c045b59efd42df3c->leave($__internal_20085e94d2a792263458f855d3138f60c521e8383b294117c045b59efd42df3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

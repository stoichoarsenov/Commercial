<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4d766f6e7e4e1c94630fd0f5567e0246d0cb3d4ad58a120db7247d02200431be extends Twig_Template
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
        $__internal_d9c843b712cd20f8b4853d80a47a7ce5861741f6313a9fc6226e7c554d8f6a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c843b712cd20f8b4853d80a47a7ce5861741f6313a9fc6226e7c554d8f6a76->enter($__internal_d9c843b712cd20f8b4853d80a47a7ce5861741f6313a9fc6226e7c554d8f6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cf060dc548918eec96c4a89f0e7503a476b95ed4a1edc22219a42a8001f95c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf060dc548918eec96c4a89f0e7503a476b95ed4a1edc22219a42a8001f95c96->enter($__internal_cf060dc548918eec96c4a89f0e7503a476b95ed4a1edc22219a42a8001f95c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d9c843b712cd20f8b4853d80a47a7ce5861741f6313a9fc6226e7c554d8f6a76->leave($__internal_d9c843b712cd20f8b4853d80a47a7ce5861741f6313a9fc6226e7c554d8f6a76_prof);

        
        $__internal_cf060dc548918eec96c4a89f0e7503a476b95ed4a1edc22219a42a8001f95c96->leave($__internal_cf060dc548918eec96c4a89f0e7503a476b95ed4a1edc22219a42a8001f95c96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

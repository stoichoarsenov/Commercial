<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d2ef06f27dc62e62f3e617b54dd145a93a420fe46197368c93923ddf8e87b4a2 extends Twig_Template
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
        $__internal_33de6597130ba67724446a1590e45de752759e26530a67c371e285128affefaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33de6597130ba67724446a1590e45de752759e26530a67c371e285128affefaf->enter($__internal_33de6597130ba67724446a1590e45de752759e26530a67c371e285128affefaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_eeed9b7c35c4888c23dc5aadcb2dbdcdf61e010ca382177b1d7ce961f3ec3d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeed9b7c35c4888c23dc5aadcb2dbdcdf61e010ca382177b1d7ce961f3ec3d68->enter($__internal_eeed9b7c35c4888c23dc5aadcb2dbdcdf61e010ca382177b1d7ce961f3ec3d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_33de6597130ba67724446a1590e45de752759e26530a67c371e285128affefaf->leave($__internal_33de6597130ba67724446a1590e45de752759e26530a67c371e285128affefaf_prof);

        
        $__internal_eeed9b7c35c4888c23dc5aadcb2dbdcdf61e010ca382177b1d7ce961f3ec3d68->leave($__internal_eeed9b7c35c4888c23dc5aadcb2dbdcdf61e010ca382177b1d7ce961f3ec3d68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

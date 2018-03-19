<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b880ea8b1246ce025a47b5b455a8eb404f318e0cadd5147bba3b68b99e6062f9 extends Twig_Template
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
        $__internal_3508f72eb6f42d640acf6a7bd25b2a7cb4733036ab165f687c43389eb8c3bba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3508f72eb6f42d640acf6a7bd25b2a7cb4733036ab165f687c43389eb8c3bba6->enter($__internal_3508f72eb6f42d640acf6a7bd25b2a7cb4733036ab165f687c43389eb8c3bba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_be4872824b1fb10617e1ead55beb7cead11d2538a53ac58aa08de981002e97aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4872824b1fb10617e1ead55beb7cead11d2538a53ac58aa08de981002e97aa->enter($__internal_be4872824b1fb10617e1ead55beb7cead11d2538a53ac58aa08de981002e97aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3508f72eb6f42d640acf6a7bd25b2a7cb4733036ab165f687c43389eb8c3bba6->leave($__internal_3508f72eb6f42d640acf6a7bd25b2a7cb4733036ab165f687c43389eb8c3bba6_prof);

        
        $__internal_be4872824b1fb10617e1ead55beb7cead11d2538a53ac58aa08de981002e97aa->leave($__internal_be4872824b1fb10617e1ead55beb7cead11d2538a53ac58aa08de981002e97aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Commercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
